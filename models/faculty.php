<?php


class Faculty
{
    private $conn;

    public $table_name = "tbl_faculty";

    public $id;
    public $facultyID;
    public $facultyStatus;
    public $facultyName;
    public $facultyAddress;
    public $facultyEmail;
    public $facultyContactNo;
    public $facultyGender;
    public $facultyUsername;
    public $facultyPassword;
    public $facultyPhoto;
    public $facultyGrade;
    public $facultySection;
    public $facultySchoolYear;


    public function __construct($db)
    {
        $this->conn = $db;
    }

    public function addFaculty()
    {
        $validate = "SELECT * FROM $this->table_name WHERE 
        facultyID = '$this->facultyID' 
        AND facultyGrade = '$this->facultyGrade'
        AND facultySection = '$this->facultySection' 
        AND facultySchoolYear = '$this->facultySchoolYear'";
        $vallidate = $this->conn->query($validate);
        if (!empty($vallidate) && $vallidate->num_rows > 0) {
            http_response_code(400);
            echo "duplicate";
            // echo "Creation failed, email is already exist!";
            return;
        } else {
            // echo $this->whole_id;
            // echo "talamismis";
        }


        $query = "INSERT INTO $this->table_name (facultyID, facultyStatus, facultyName,
        facultyAddress, facultyEmail, facultyContactNo, facultyGender,
        facultyUsername, facultyPassword, facultyPhoto, facultyGrade,
        facultySection, facultySchoolYear, created_at)
        VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?, NOW() )";

        $stmt = $this->conn->prepare($query);
        $stmt->bind_param(
            "sssssssssssss",
            $this->facultyID,
            $this->facultyStatus,
            $this->facultyName,

            $this->facultyAddress,
            $this->facultyEmail,
            $this->facultyContactNo,
            $this->facultyGender,

            $this->facultyUsername,
            $this->facultyPassword,
            $this->facultyPhoto,
            $this->facultyGrade,

            $this->facultySection,
            $this->facultySchoolYear
        );


        if ($stmt->execute()) {
            $last_id = $this->conn->insert_id;
            $this->id = $last_id;
            return true;
        }
        return false;
    }

    // fetch all faculty
    public function fetchAll($page)
    {

        $limit = 10;
        $startIndex = ($page - 1) * $limit;

        // Create query
        $query = "SELECT * FROM $this->table_name 
        WHERE facultyStatus != 'head' AND facultyUsername != 'admin'
        ORDER by created_at DESC LIMIT $startIndex, $limit";

        //execute query
        $stmt = $this->conn->query($query);

        return $stmt;
    }

    public function countFaculty()
    {
        // Create query
        $query = "SELECT COUNT(*) as total_faculty FROM $this->table_name
        WHERE facultyStatus != 'head' AND facultyUsername != 'admin'";

        //execute query
        $stmt = $this->conn->query($query);

        return $stmt;
    }

    //delete
    public function deleteFaculty()
    {
        // Create query
        $query = "DELETE FROM $this->table_name WHERE id = ?";

        // prepare and bind
        $stmt = mysqli_stmt_init($this->conn);

        if (!mysqli_stmt_prepare($stmt, $query)) {
            echo "SQL statement failed";
        } else {
            mysqli_stmt_bind_param($stmt, "i", $this->id);

            if (mysqli_stmt_execute($stmt)) {
                return true;
            }
            return false;
        }
    }

    //update 
    public function updateFaculty()
    {

        $query = "UPDATE $this->table_name SET facultyID = ?, facultyStatus = ?,
        facultyName = ?, facultyAddress = ?, facultyEmail = ?,
        facultyContactNo = ?, facultyGender = ?, facultyUsername = ?, facultyPassword = ?,
        facultyPhoto = ?, facultyGrade = ?, facultySection = ?, facultySchoolYear = ?
        WHERE id = ?";

        $stmt = mysqli_stmt_init($this->conn);

        if (!mysqli_stmt_prepare($stmt, $query)) {
            echo "SQL statement failed";
        } else {
            mysqli_stmt_bind_param(
                $stmt,
                "sssssssssssssi",
                $this->facultyID,
                $this->facultyStatus,
                $this->facultyName,
                $this->facultyAddress,
                $this->facultyEmail,

                $this->facultyContactNo,
                $this->facultyGender,
                $this->facultyUsername,
                $this->facultyPassword,
                $this->facultyPhoto,

                $this->facultyGrade,
                $this->facultySection,
                $this->facultySchoolYear,
                $this->id
            );

            if (mysqli_stmt_execute($stmt)) {
                return true;
            }
            return false;
        }
    }

    public function filterFaculty($page)
    {
        $limit = 10;
        $startIndex = ($page - 1) * $limit;

        // Create query
        $query = "SELECT * FROM $this->table_name 
        WHERE facultyGrade = '$this->facultyGrade' AND facultySection = '$this->facultySection' 
        AND facultySchoolYear = '$this->facultySchoolYear'
        AND facultyStatus != 'head'
        ORDER by created_at DESC LIMIT $startIndex, $limit";

        //execute query
        $stmt = $this->conn->query($query);

        return $stmt;
    }

    public function filterCountfaculty()
    {
        // Create query
        $query = "SELECT COUNT(*) as total_faculty FROM $this->table_name
        WHERE facultyGrade = '$this->facultyGrade' OR facultySection = '$this->facultySection' 
        OR facultySchoolYear = '$this->facultySchoolYear' 
        AND facultyStatus != 'head'";

        //execute query
        $stmt = $this->conn->query($query);

        return $stmt;
    }

    public function searchFaculty()
    {

        $query = "SELECT * FROM $this->table_name WHERE facultyID = '$this->id' ";
        $stmt = $this->conn->query($query);

        return $stmt;
    }

    public function getFacultySF1()
    {


        $query = "SELECT * FROM $this->table_name where facultyGrade = '$this->facultyGrade'
        AND facultySection = '$this->facultySection' AND facultySchoolYear = '$this->facultySchoolYear'";

        //execute query
        $stmt = $this->conn->query($query);

        return $stmt;
    }

    public function getHeadInfo()
    {

        $query = "SELECT * FROM $this->table_name where id = '1'";

        //execute query
        $stmt = $this->conn->query($query);

        return $stmt;
    }

    public function updateHeadInfo()
    {

        $query = "INSERT INTO $this->table_name (facultyStatus, facultyName,
        facultyPhoto, facultySchoolYear, created_at)
        VALUES (?,?,?,?, NOW() )";


        $stmt = $this->conn->prepare($query);
        $stmt->bind_param(
            "ssss",
            $this->facultyStatus,
            $this->facultyName,
            $this->facultyPhoto,
            $this->facultySchoolYear
        );

        if ($stmt->execute()) {
            // $last_id = $this->conn->insert_id;
            // $this->id = $last_id;
            return true;
        }
        return false;

        // $query = "UPDATE $this->table_name SET facultyName = ?, facultyPhoto = ?
        // WHERE id = '1'";

        // $stmt = mysqli_stmt_init($this->conn);

        // if (!mysqli_stmt_prepare($stmt, $query)) {
        //     echo "SQL statement failed";
        // } else {
        //     session_start();
        //     mysqli_stmt_bind_param(
        //         $stmt,
        //         "ss",
        //         $this->facultyName,
        //         $this->facultyPhoto
        //     );

        //     if (mysqli_stmt_execute($stmt)) {
        //         return true;
        //     }
        //     return false;
        // }
    }

    public function login()
    {
        $query = "SELECT * FROM $this->table_name WHERE facultyUsername = ? 
        AND facultyPassword = ? ";

        //prepare and bind
        $stmt = mysqli_stmt_init($this->conn);

        if (!mysqli_stmt_prepare($stmt, $query)) {
            echo "SQL statement failed";
        } else {
            mysqli_stmt_bind_param($stmt, "ss", $this->facultyUsername, $this->facultyPassword);

            //execute query
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);

            if (mysqli_stmt_execute($stmt)) {

                if (mysqli_num_rows($result) == 1) {

                    while ($row = mysqli_fetch_assoc($result)) {
                        $this->id = $row['id'];
                        $this->facultyID = $row['facultyID'];
                        $this->facultyStatus = $row['facultyStatus'];
                        $this->facultyName = $row['facultyName'];
                        $this->facultyAddress = $row['facultyAddress'];

                        $this->facultyEmail = $row['facultyEmail'];
                        $this->facultyContactNo = $row['facultyContactNo'];
                        $this->facultyGender = $row['facultyGender'];
                        $this->facultyUsername = $row['facultyUsername'];

                        $this->facultyPassword = $row['facultyPassword'];
                        $this->facultyPhoto = $row['facultyPhoto'];
                        $this->facultyGrade = $row['facultyGrade'];
                        $this->facultySection = $row['facultySection'];
                        $this->facultySchoolYear = $row['facultySchoolYear'];
                    }
                    return true;
                } else {
                    // echo "failed";
                    return false;
                }
            } //end first stmt
            return false;
        }
    }

    public function updateFacultySettings()
    {
        $validate = "SELECT * FROM $this->table_name WHERE 
        facultyUsername = '$this->facultyUsername' 
        AND facultyPassword = '$this->facultyPassword'";
        $vallidate = $this->conn->query($validate);
        if (!empty($vallidate) && $vallidate->num_rows > 0) {
            http_response_code(400);
            echo "duplicate";
            // echo "Creation failed, email is already exist!";
            return;
        } else {
            // echo $this->whole_id;
            // echo "talamismis";
        }

        $query = "UPDATE $this->table_name SET facultyUsername = ?, 
        facultyPassword = ?, facultyPhoto = ? WHERE id = ?";

        $stmt = mysqli_stmt_init($this->conn);

        if (!mysqli_stmt_prepare($stmt, $query)) {
            echo "SQL statement failed";
        } else {
            mysqli_stmt_bind_param(
                $stmt,
                "sssi",
                $this->facultyUsername,
                $this->facultyPassword,
                $this->facultyPhoto,
                $this->id
            );

            if (mysqli_stmt_execute($stmt)) {
                return true;
            }
            return false;
        }
    }

    public function getCurrentHead(){
        $query = "SELECT * FROM $this->table_name where facultyStatus = 'head'
        AND facultySchoolYear = '$this->facultySchoolYear' ORDER BY created_at DESC";

        //execute query
        $stmt = $this->conn->query($query);

        return $stmt;
    }
    
}
