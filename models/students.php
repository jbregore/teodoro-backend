<?php


class Students
{
    private $conn;

    public $table_name = "tbl_students";

    public $id;
    public $studentLRN;
    public $studentFName;
    public $studentLName;
    public $studentMName;
    public $studentSuffix;

    public $studentGender;
    public $studentAge;
    public $studentBirthplace;
    public $studentBirthday;

    public $studentReligion;
    public $studentEthnicGroup;
    public $studentMotherTongue;
    public $studentNationality;

    public $studentHouseNo;
    public $studentBrgy;
    public $studentCity;
    public $studentProvince;

    public $motherFName;
    public $motherLName;
    public $motherMName;

    public $fatherFName;
    public $fatherLName;
    public $fatherMName;

    public $guardianName;
    public $guardianRelationship;
    public $guardianContactNo;

    public $studentGrade;
    public $studentSection;
    public $studentSchoolYear;

    public $firstDoseBrand;
    public $firstDoseDate;

    public $secondDoseBrand;
    public $secondDoseDate;

    public $boosterBrand;
    public $boosterDate;

    public $booster2Brand;
    public $booster2Date;

    public $studentRemarks;

    public $jhsAverage;
    public $jhsCitation;
    public $jhsSchool;
    public $jhsSchoolID;
    public $jhsAddress;

    public $peptRating;
    public $alsRating;

    public $othersSpecify;
    public $othersDateAssesment;
    public $othersTestingCenter;


    public function __construct($db)
    {
        $this->conn = $db;
    }

    //add student
    public function addStudent()
    {

        $validate = "SELECT * FROM $this->table_name WHERE studentLRN = '$this->studentLRN' 
        AND studentGrade = '$this->studentGrade' AND studentSection='$this->studentSection' 
        AND studentSchoolYear = '$this->studentSchoolYear'";
        $vallidate = $this->conn->query($validate);

        if (!empty($vallidate) && $vallidate->num_rows > 0) {
            http_response_code(200);
            echo "duplicate";
            // echo "Creation failed, email is already exist!";
            return;
        } else {
            // echo $this->whole_id;
            // echo "talamismis";
        }

        $query = "INSERT INTO $this->table_name (studentLRN, studentFName, studentLName, studentMName, studentSuffix, 
         studentGender, studentAge, studentBirthplace, studentBirthday,
         studentReligion, studentEthnicGroup, studentMotherTongue, studentNationality,
         studentHouseNo, studentBrgy, studentCity, studentProvince,
         motherFName, motherLName, motherMName,
         fatherFName, fatherLName, fatherMName,
         guardianName, guardianRelationship, guardianContactNo,
         studentGrade, studentSection, studentSchoolYear,
         firstDoseBrand, firstDoseDate,
         secondDoseBrand, secondDoseDate,
         boosterBrand, boosterDate,
         booster2Brand, booster2Date,
         created_at, studentRemarks,
         jhsAverage, jhsCitation, jhsSchool, jhsSchoolID, jhsAddress,
         peptRating, alsRating, othersSpecify, othersDateAssesment, othersTestingCenter)
        VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,
        ?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?, NOW() + INTERVAL 8 hour, ?,?,?,?,?,?,?,?,?,?,?)";
        // 36 
        $remarks = "";

        $stmt = $this->conn->prepare($query);
        $stmt->bind_param(
            "ssssssssssssssssssssssssssssssssssssssssssssssss",
            $this->studentLRN,
            $this->studentFName,
            $this->studentLName,
            $this->studentMName,
            $this->studentSuffix,

            $this->studentGender,
            $this->studentAge,
            $this->studentBirthplace,
            $this->studentBirthday,

            $this->studentReligion,
            $this->studentEthnicGroup,
            $this->studentMotherTongue,
            $this->studentNationality,

            $this->studentHouseNo,
            $this->studentBrgy,
            $this->studentCity,
            $this->studentProvince,

            $this->motherFName,
            $this->motherLName,
            $this->motherMName,

            $this->fatherFName,
            $this->fatherLName,
            $this->fatherMName,

            $this->guardianName,
            $this->guardianRelationship,
            $this->guardianContactNo,

            $this->studentGrade,
            $this->studentSection,
            $this->studentSchoolYear,

            $this->firstDoseBrand,
            $this->firstDoseDate,

            $this->secondDoseBrand,
            $this->secondDoseDate,

            $this->boosterBrand,
            $this->boosterDate,

            $this->booster2Brand,
            $this->booster2Date,
            $remarks,

            $this->jhsAverage,
            $this->jhsCitation,
            $this->jhsSchool,
            $this->jhsSchoolID,
            $this->jhsAddress,

            $this->peptRating,
            $this->alsRating,

            $this->othersSpecify,
            $this->othersDateAssesment,
            $this->othersTestingCenter
        );

        if ($stmt->execute()) {
            $last_id = $this->conn->insert_id;
            $this->id = $last_id;

            $gradeFilipino = "";
            $gradeEnglish = "";
            $gradeMath = "";
            $gradeScience = "";
            $gradeAP = "";
            $gradeEsP = "";
            $gradeTLE = "";
            $gradeMapeh = "";
            $gradeMusic = "";
            $gradeArt = "";
            $gradePE = "";
            $gradeHealth = "";
            $gradeFinal = "";

            for ($x = 1; $x <= 4; $x++) {
                $query2 = "INSERT INTO tbl_grade (iid, studentLRN, 
                studentGrade, studentSection, studentSchoolYear, gradeQuarter,
                gradeFilipino, gradeEnglish, gradeMath,
                gradeScience, gradeAP, gradeEsP,
                gradeTLE, gradeMapeh, gradeMusic,
                gradeArt, gradePE, gradeHealth, gradeFinal )
                VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
                $stmt2 = $this->conn->prepare($query2);
                $stmt2->bind_param(
                    "issssssssssssssssss",
                    $this->id,
                    $this->studentLRN,
                    $this->studentGrade,
                    $this->studentSection,
                    $this->studentSchoolYear,
                    $x,
                    $gradeFilipino,
                    $gradeEnglish,
                    $gradeMath,
                    $gradeScience,
                    $gradeAP,
                    $gradeEsP,
                    $gradeTLE,
                    $gradeMapeh,
                    $gradeMusic,
                    $gradeArt,
                    $gradePE,
                    $gradeHealth,
                    $gradeFinal
                );
                $stmt2->execute();
            }

            $query3 = "INSERT INTO tbl_books (iid, studentLRN, 
                studentGrade, studentSection, studentSchoolYear)
                VALUES (?,?,?,?,?)";
            $stmt3 = $this->conn->prepare($query3);
            $stmt3->bind_param(
                "issss",
                $this->id,
                $this->studentLRN,
                $this->studentGrade,
                $this->studentSection,
                $this->studentSchoolYear
            );
            $stmt3->execute();

            return true;
        }
        return false;
    }

    // fetch all students
    public function fetchAll($page)
    {
        // $record_per_page = 10;
        // $start_from = ($this->start - 1) * $record_per_page;

        $limit = 10;
        $startIndex = ($page - 1) * $limit;

        // const total = await PostMessage.countDocuments({});

        // const posts = await PostMessage.find().sort({ _id: -1 }).limit(LIMIT).skip(startIndex);

        // res.status(200).json({ data: posts, currentPage: Number(page), numberOfPages: Math.ceil(total / LIMIT) });

        // $query = "SELECT * FROM $this->table_name ORDER BY created_at DESC";

        // Create query
        $query = "SELECT * FROM $this->table_name ORDER by 
        created_at DESC LIMIT $startIndex, $limit";

        //execute query
        $stmt = $this->conn->query($query);

        return $stmt;
    }

    public function countStudents()
    {
        // Create query
        $query = "SELECT COUNT(*) as total_students FROM $this->table_name";

        //execute query
        $stmt = $this->conn->query($query);

        return $stmt;
    }

    public function fetchAllSF10($page)
    {
        $limit = 10;
        $startIndex = ($page - 1) * $limit;
        // Create query
        $query = "SELECT * FROM tbl_students WHERE id IN (SELECT max(id) 
        FROM tbl_students GROUP BY studentLRN ) ORDER BY id DESC LIMIT $startIndex, $limit";
        // $query = "SELECT * FROM $this->table_name ORDER by 
        // created_at DESC LIMIT $startIndex, $limit";

        //execute query
        $stmt = $this->conn->query($query);

        return $stmt;
    }

    public function countStudentsSF10()
    {
        $query = "SELECT COUNT(*) as total_students 
        FROM $this->table_name 
        WHERE id IN (SELECT max(id) 
        FROM tbl_students GROUP BY studentLRN )";

        //execute query
        $stmt = $this->conn->query($query);

        return $stmt;
    }

    //delete
    public function deleteStudent()
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

                $query2 = "DELETE FROM tbl_grade WHERE iid = ? 
                AND studentLRN = ? AND studentGrade = ? 
                AND studentSection = ? AND studentSchoolYear = ?";
                $stmt2 = $this->conn->prepare($query2);
                $stmt2->bind_param(
                    "issss",
                    $this->id,
                    $this->studentLRN,
                    $this->studentGrade,
                    $this->studentSection,
                    $this->studentSchoolYear
                );
                $stmt2->execute();

                $query3 = "DELETE FROM tbl_books WHERE iid = ? 
                AND studentLRN = ? AND studentGrade = ? 
                AND studentSection = ? AND studentSchoolYear = ?";
                $stmt3 = $this->conn->prepare($query3);
                $stmt3->bind_param(
                    "issss",
                    $this->id,
                    $this->studentLRN,
                    $this->studentGrade,
                    $this->studentSection,
                    $this->studentSchoolYear
                );
                $stmt3->execute();

                return true;
            }
            return false;
        }
    }

    //update 
    public function updateStudent()
    {

        $query = "UPDATE $this->table_name SET studentFName = ?, studentLName = ?, studentMName = ?, studentSuffix = ?, 
        studentGender = ?, studentAge = ?, studentBirthplace = ?, studentBirthday = ?,
        studentReligion = ?, studentEthnicGroup = ?, studentMotherTongue = ?, studentNationality = ?,
        studentHouseNo = ?, studentBrgy = ?, studentCity = ?, studentProvince = ?,
        motherFName = ?, motherLName = ?, motherMName = ?,
        fatherFName = ?, fatherLName = ?, fatherMName = ?,
        guardianName = ?, guardianRelationship = ?, guardianContactNo = ?,
        studentGrade = ?, studentSection = ?, studentSchoolYear = ?,
        firstDoseBrand = ?, firstDoseDate = ?,
        secondDoseBrand = ?, secondDoseDate = ?,
        boosterBrand = ?, boosterDate = ?,
        booster2Brand = ?, booster2Date = ?,
        jhsAverage = ?, jhsCitation = ? ,jhsSchool = ?,
        jhsSchoolID = ?, jhsAddress = ? ,peptRating = ?,
        alsRating = ?, othersSpecify = ? ,othersDateAssesment = ?, othersTestingCenter = ?,
         studentLRN = ? WHERE id = ?";

        $stmt = mysqli_stmt_init($this->conn);

        if (!mysqli_stmt_prepare($stmt, $query)) {
            echo "SQL statement failed";
        } else {
            mysqli_stmt_bind_param(
                $stmt,
                "sssssssssssssssssssssssssssssssssssssssssssssssi",
                $this->studentFName,
                $this->studentLName,
                $this->studentMName,
                $this->studentSuffix,

                $this->studentGender,
                $this->studentAge,
                $this->studentBirthplace,
                $this->studentBirthday,

                $this->studentReligion,
                $this->studentEthnicGroup,
                $this->studentMotherTongue,
                $this->studentNationality,

                $this->studentHouseNo,
                $this->studentBrgy,
                $this->studentCity,
                $this->studentProvince,

                $this->motherFName,
                $this->motherLName,
                $this->motherMName,

                $this->fatherFName,
                $this->fatherLName,
                $this->fatherMName,

                $this->guardianName,
                $this->guardianRelationship,
                $this->guardianContactNo,

                $this->studentGrade,
                $this->studentSection,
                $this->studentSchoolYear,

                $this->firstDoseBrand,
                $this->firstDoseDate,

                $this->secondDoseBrand,
                $this->secondDoseDate,

                $this->boosterBrand,
                $this->boosterDate,

                $this->booster2Brand,
                $this->booster2Date,

                $this->jhsAverage,
                $this->jhsCitation,
                $this->jhsSchool,
                $this->jhsSchoolID,
                $this->jhsAddress,

                $this->peptRating,
                $this->alsRating,

                $this->othersSpecify,
                $this->othersDateAssesment,
                $this->othersTestingCenter,

                $this->studentLRN,
                $this->id
            );

            if (mysqli_stmt_execute($stmt)) {

                $query2 = "UPDATE tbl_grade SET studentLRN = ?, 
                studentGrade = ?, studentSection = ?, studentSchoolYear = ?
                 WHERE iid = ?";
                $stmt2 = $this->conn->prepare($query2);
                $stmt2->bind_param(
                    "ssssi",
                    $this->studentLRN,
                    $this->studentGrade,
                    $this->studentSection,
                    $this->studentSchoolYear,
                    $this->id
                );
                $stmt2->execute();

                $query3 = "UPDATE tbl_books SET studentLRN = ?, 
                studentGrade = ?, studentSection = ?, studentSchoolYear = ?
                 WHERE iid = ?";
                $stmt3 = $this->conn->prepare($query3);
                $stmt3->bind_param(
                    "ssssi",
                    $this->studentLRN,
                    $this->studentGrade,
                    $this->studentSection,
                    $this->studentSchoolYear,
                    $this->id
                );
                $stmt3->execute();

                return true;
            }
            return false;
        }
    }

    public function filterStudent($page)
    {
        $limit = 10;
        $startIndex = ($page - 1) * $limit;

        // Create query
        $query = "SELECT * FROM $this->table_name 
        WHERE studentGrade='$this->studentGrade' AND studentSection='$this->studentSection' 
        AND studentSchoolYear='$this->studentSchoolYear'
        ORDER by studentLName LIMIT $startIndex, $limit";

        //execute query
        $stmt = $this->conn->query($query);

        return $stmt;
    }

    public function filterStudentSF10($page)
    {
        $limit = 10;
        $startIndex = ($page - 1) * $limit;

        // Create query
        $query = "SELECT * FROM $this->table_name 
        WHERE studentGrade='$this->studentGrade' AND studentSection='$this->studentSection' 
        AND studentSchoolYear='$this->studentSchoolYear' AND id IN (SELECT max(id) 
        FROM tbl_students GROUP BY studentLRN ) ORDER BY id 
        DESC LIMIT $startIndex, $limit";

        //execute query
        $stmt = $this->conn->query($query);

        return $stmt;
    }

    public function filterCountStudentsSF10()
    {

        // Create query
        $query = "SELECT COUNT(*) as total_students FROM $this->table_name
        WHERE studentGrade='$this->studentGrade' AND studentSection='$this->studentSection' 
        AND studentSchoolYear='$this->studentSchoolYear' AND
        id IN (SELECT max(id) FROM tbl_students GROUP BY studentLRN ) 
        ORDER BY id DESC";

        //execute query
        $stmt = $this->conn->query($query);

        return $stmt;
    }


    public function filterCountStudents()
    {
        // Create query
        $query = "SELECT COUNT(*) as total_students FROM $this->table_name
        WHERE studentGrade='$this->studentGrade' AND studentSection='$this->studentSection' 
        AND studentSchoolYear='$this->studentSchoolYear'";

        //execute query
        $stmt = $this->conn->query($query);

        return $stmt;
    }

    public function searchStudent()
    {

        $query = "SELECT * FROM $this->table_name WHERE studentLRN = '$this->id' ";
        $stmt = $this->conn->query($query);

        return $stmt;
    }

    public function searchStudentSF10()
    {

        $query = "SELECT * FROM $this->table_name 
        WHERE studentLRN = '$this->id' ORDER BY created_at DESC LIMIT 1";
        $stmt = $this->conn->query($query);

        return $stmt;
    }


    public function updateStudentRemarks()
    {
        $query = "UPDATE $this->table_name SET studentRemarks = ? WHERE id = ?";

        $stmt = mysqli_stmt_init($this->conn);

        if (!mysqli_stmt_prepare($stmt, $query)) {
            echo "SQL statement failed";
        } else {
            mysqli_stmt_bind_param(
                $stmt,
                "si",
                $this->studentRemarks,
                $this->id
            );

            if (mysqli_stmt_execute($stmt)) {
                return true;
            }
            return false;
        }
    }

    public function getStudentsSF1()
    {
        $query = "SELECT * FROM $this->table_name where studentGrade = '$this->studentGrade'
        AND studentSection = '$this->studentSection' AND studentSchoolYear = '$this->studentSchoolYear' ORDER by 
        studentLName ";

        //execute query
        $stmt = $this->conn->query($query);

        return $stmt;
    }

    public function getSF10Student()
    {
        $query = "SELECT * FROM tbl_students 
        INNER JOIN tbl_grade ON tbl_students.id = tbl_grade.iid 
        INNER JOIN tbl_faculty ON tbl_grade.studentGrade = tbl_faculty.facultyGrade AND
        tbl_grade.studentSection = tbl_faculty.facultySection AND
        tbl_grade.studentSchoolYear = tbl_faculty.facultySchoolYear
        WHERE tbl_students.studentLRN = '$this->id' AND
        tbl_students.studentGrade = tbl_grade.studentGrade AND
        tbl_students.studentSection = tbl_grade.studentSection AND
        tbl_students.studentSchoolYear = tbl_grade.studentSchoolYear
        ORDER BY tbl_students.id ASC";
        $stmt = $this->conn->query($query);

        return $stmt;
    }
}
