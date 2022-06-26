<?php


class Grades
{
    private $conn;
    public $id;
    public $iid;
    public $studentLRN;
    public $studentGrade;
    public $studentSection;
    public $studentSchoolYear;
    public $gradeQuarter;
    public $gradeFilipino;
    public $gradeEnglish;
    public $gradeMath;
    public $gradeScience;
    public $gradeAP;
    public $gradeEsP;
    public $gradeTLE;
    public $gradeMapeh;
    public $gradeMusic;
    public $gradeArt;
    public $gradePE;
    public $gradeHealth;

    public $table_name = "tbl_grade";

    public function __construct($db)
    {
        $this->conn = $db;
    }

    public function updateGrades()
    {
        $query = "UPDATE $this->table_name SET gradeFilipino = ?, gradeEnglish = ?, 
        gradeMath = ?, gradeScience = ?, gradeAP = ?, 
        gradeEsP = ?, gradeTLE = ?, gradeMapeh = ?, gradeMusic = ?,
        gradeArt = ?, gradePE = ?, gradeHealth = ?, gradeFinal = ? 
        WHERE studentLRN = ? AND studentGrade = ?
        AND studentSection = ? AND studentSchoolYear = ?
        AND gradeQuarter = ?";

        $gradeFinal = ($this->gradeFilipino + $this->gradeEnglish +
            $this->gradeMath + $this->gradeScience + $this->gradeAP +
            $this->gradeEsP + $this->gradeTLE + $this->gradeMapeh) / 8;

        $stmt = mysqli_stmt_init($this->conn);

        if (!mysqli_stmt_prepare($stmt, $query)) {
            echo "SQL statement failed";
        } else {
            mysqli_stmt_bind_param(
                $stmt,
                "ssssssssssssssssss",
                $this->gradeFilipino,
                $this->gradeEnglish,

                $this->gradeMath,
                $this->gradeScience,
                $this->gradeAP,

                $this->gradeEsP,
                $this->gradeTLE,
                $this->gradeMapeh,
                $this->gradeMusic,

                $this->gradeArt,
                $this->gradePE,
                $this->gradeHealth,
                $gradeFinal,

                $this->studentLRN,
                $this->studentGrade,
                $this->studentSection,
                $this->studentSchoolYear,
                $this->gradeQuarter

            );

            if (mysqli_stmt_execute($stmt)) {

                return true;
            }
            return false;
        }
    }

    public function getGrades()
    {
        $query = "SELECT * FROM $this->table_name where studentLRN = '$this->studentLRN'
        AND studentGrade = '$this->studentGrade' AND studentSection = '$this->studentSection' 
        AND studentSchoolYear = '$this->studentSchoolYear'";

        //execute query
        $stmt = $this->conn->query($query);

        return $stmt;
    }

    public function getStudentRanking()
    {

        $query = "SELECT tbl_grade.gradeFinal as gradeAve, tbl_students.studentLRN,
        tbl_students.studentFName, tbl_students.studentLName, tbl_students.studentMName,
         tbl_students.studentSuffix
         FROM $this->table_name 
        INNER JOIN tbl_students ON tbl_students.id = tbl_grade.iid 
        where tbl_grade.gradeQuarter = '$this->gradeQuarter'
        AND tbl_grade.studentGrade = '$this->studentGrade' AND tbl_grade.studentSection = '$this->studentSection' 
        AND tbl_grade.studentSchoolYear = '$this->studentSchoolYear' ORDER BY gradeAve DESC";

        //execute query
        $stmt = $this->conn->query($query);

        return $stmt;
    }

    public function getStudentRankingFinal()
    {

        $query = "SELECT DISTINCT studentLRN from $this->table_name 
        WHERE tbl_grade.studentGrade = '$this->studentGrade' 
        AND tbl_grade.studentSection = '$this->studentSection' 
        AND tbl_grade.studentSchoolYear = '$this->studentSchoolYear'";
        $stmt = $this->conn->query($query);

        $grade_arr = array();
        while ($row = $stmt->fetch_assoc()) {
            $query2 = "SELECT AVG(tbl_grade.gradeFinal) AS gradeAve, 
            tbl_students.studentLRN, tbl_students.studentFName, 
            tbl_students.studentLName, tbl_students.studentMName,
            tbl_students.studentSuffix FROM $this->table_name
            INNER JOIN tbl_students ON tbl_students.studentLRN = tbl_grade.studentLRN
            WHERE tbl_grade.studentLRN = '$row[studentLRN]'
            AND tbl_grade.studentGrade = '$this->studentGrade' 
            AND tbl_grade.studentSection = '$this->studentSection' 
            AND tbl_grade.studentSchoolYear = '$this->studentSchoolYear'";
            $stmt2 = $this->conn->query($query2);
            while($row2 = $stmt2->fetch_assoc()) {
                array_push($grade_arr, $row2);
            }
        }

        return $grade_arr;

        // $query = "SELECT (tbl_grade.gradeFilipino + tbl_grade.gradeEnglish + tbl_grade.gradeMath +
        // tbl_grade.gradeScience + tbl_grade.gradeAP + tbl_grade.gradeEsP + tbl_grade.gradeTLE + 
        // tbl_grade.gradeMapeh) / 8 as gradeAve, tbl_students.studentLRN,
        // tbl_students.studentFName, tbl_students.studentLName, tbl_students.studentMName,
        // tbl_students.studentSuffix
        // FROM $this->table_name 
        // INNER JOIN tbl_students ON tbl_students.id = tbl_grade.iid 
        // where tbl_grade.studentGrade = '$this->studentGrade' 
        // AND tbl_grade.studentSection = '$this->studentSection' 
        // AND tbl_grade.studentSchoolYear = '$this->studentSchoolYear' 
        // ORDER BY studentLRN";

        //execute query
        // $stmt = $this->conn->query($query);

        // return $stmt;
    }

    public function getQuarterlyReport(){
        $query = "SELECT * FROM $this->table_name 
        INNER JOIN tbl_students ON tbl_students.id = tbl_grade.iid 
        where tbl_grade.gradeQuarter = '$this->gradeQuarter'
        AND tbl_grade.studentGrade = '$this->studentGrade'
        AND tbl_grade.studentSection = '$this->studentSection' 
        AND tbl_grade.studentSchoolYear = '$this->studentSchoolYear'
        ORDER BY tbl_students.studentLName";

        //execute query
        $stmt = $this->conn->query($query);

        return $stmt;
    }
}
