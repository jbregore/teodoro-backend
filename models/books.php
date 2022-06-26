<?php


class Books
{
    private $conn;
    public $id;
    public $iid;
    public $studentLRN;
    public $studentGrade;
    public $studentSection;
    public $studentSchoolYear;

    public $filipinoIssued;
    public $filipinoReturned;
    public $englishIssued;
    public $englishReturned;

    public $mathIssued;
    public $mathReturned;
    public $scienceIssued;
    public $scienceReturned;

    public $apIssued;
    public $apReturned;
    public $espIssued;
    public $espReturned;

    public $tleIssued;
    public $tleReturned;
    public $mapehIssued;
    public $mapehReturned;
    public $remarks;

    public $subject;
    public $dateIssued;

    public $bookGrade;
    public $bookSection;
    public $bookSchoolYear;

    public $filipinoTitle;
    public $englishTitle;
    public $mathTitle;
    public $scienceTitle;
    public $apTitle;
    public $espTitle;
    public $tleTitle;
    public $mapehTitle;

    public $table_name = "tbl_books";

    public function __construct($db)
    {
        $this->conn = $db;
    }

    public function fetchAll($page)
    {

        $limit = 10;
        $startIndex = ($page - 1) * $limit;

        // Create query
        $query = "SELECT * FROM $this->table_name
        INNER JOIN tbl_students ON tbl_students.id = tbl_books.iid
        ORDER BY tbl_students.studentLName LIMIT $startIndex, $limit";
        // --  ORDER by id DESC LIMIT $startIndex, $limit";

        //execute query
        $stmt = $this->conn->query($query);

        return $stmt;
    }

    public function countBooks()
    {
        // Create query
        $query = "SELECT COUNT(*) as total_students FROM $this->table_name";

        //execute query
        $stmt = $this->conn->query($query);

        return $stmt;
    }

    public function filterBook($page)
    {
        $limit = 10;
        $startIndex = ($page - 1) * $limit;

        // Create query
        $query = "SELECT * FROM $this->table_name
        INNER JOIN tbl_students ON tbl_students.id = tbl_books.iid
        WHERE tbl_students.studentGrade='$this->bookGrade' AND 
        tbl_students.studentSection='$this->bookSection' 
        AND tbl_students.studentSchoolYear='$this->bookSchoolYear'
        ORDER BY tbl_students.studentLName LIMIT $startIndex, $limit";

        // $query = "SELECT * FROM $this->table_name 
        // WHERE studentGrade='$this->studentGrade' AND studentSection='$this->studentSection' 
        // AND studentSchoolYear='$this->studentSchoolYear'
        // ORDER by studentLName LIMIT $startIndex, $limit";

        //execute query
        $stmt = $this->conn->query($query);

        return $stmt;
    }

    public function filterCountBooks()
    {
        // Create query
        $query = "SELECT COUNT(*) as total_students FROM $this->table_name
        WHERE studentGrade='$this->bookGrade' AND studentSection='$this->bookSection' 
        AND studentSchoolYear='$this->bookSchoolYear'";

        //execute query
        $stmt = $this->conn->query($query);

        return $stmt;
    }

    public function addBook()
    {
        $query = "UPDATE $this->table_name SET $this->subject = ?
        WHERE iid = ?";
        $stmt = mysqli_stmt_init($this->conn);

        if (!mysqli_stmt_prepare($stmt, $query)) {
            echo "SQL statement failed";
        } else {
            mysqli_stmt_bind_param(
                $stmt,
                "si",
                $this->dateIssued,
                $this->iid
            );

            if (mysqli_stmt_execute($stmt)) {

                return true;
            }
            return false;
        }
    }

    public function updateBook()
    {

        $query = "UPDATE $this->table_name SET filipinoIssued = ?, filipinoReturned = ?, 
        englishIssued = ?, englishReturned = ?, 
        mathIssued = ?, mathReturned = ?, scienceIssued = ?, scienceReturned = ?,
        apIssued = ?, apReturned = ?, espIssued = ?, espReturned = ?,
        tleIssued = ?, tleReturned = ?, mapehIssued = ?, mapehReturned = ?
        WHERE iid = ? AND studentGrade = ? AND studentSection = ? 
        AND studentSchoolYear = ?";

        $stmt = mysqli_stmt_init($this->conn);

        if (!mysqli_stmt_prepare($stmt, $query)) {
            echo "SQL statement failed";
        } else {
            mysqli_stmt_bind_param(
                $stmt,
                "ssssssssssssssssisss",
                $this->filipinoIssued,
                $this->filipinoReturned,
                $this->englishIssued,
                $this->englishReturned,

                $this->mathIssued,
                $this->mathReturned,
                $this->scienceIssued,
                $this->scienceReturned,

                $this->apIssued,
                $this->apReturned,
                $this->espIssued,
                $this->espReturned,

                $this->tleIssued,
                $this->tleReturned,
                $this->mapehIssued,
                $this->mapehReturned,

                $this->iid,
                $this->bookGrade,
                $this->bookSection,
                $this->bookSchoolYear

            );

            if (mysqli_stmt_execute($stmt)) {

                return true;
            }
            return false;
        }
    }

    public function getBookHeader($grade)
    {

        // Create query
        $query = "SELECT * FROM tbl_book_data WHERE studentGrade = '$grade'";
        // --  ORDER by id DESC LIMIT $startIndex, $limit";

        //execute query
        $stmt = $this->conn->query($query);

        return $stmt;
    }

    public function getBookTitle()
    {
        $query = "SELECT * FROM tbl_book_data ORDER BY created_at ASC";
        // --  ORDER by id DESC LIMIT $startIndex, $limit";

        //execute query
        $stmt = $this->conn->query($query);

        return $stmt;
    }

    public function updateBookTitle()
    {

        $query = "UPDATE tbl_book_data SET 
        filipinoTitle = ?, englishTitle = ?, 
        mathTitle = ?, scienceTitle = ?, 
        apTitle = ?, espTitle = ?,
        tleTitle = ?, mapehTitle = ?
        WHERE studentGrade = ?";

        $stmt = mysqli_stmt_init($this->conn);

        if (!mysqli_stmt_prepare($stmt, $query)) {
            echo "SQL statement failed";
        } else {
            mysqli_stmt_bind_param(
                $stmt,
                "sssssssss",
                $this->filipinoTitle,
                $this->englishTitle,
                $this->mathTitle,
                $this->scienceTitle,
                $this->apTitle,
                $this->espTitle,
                $this->tleTitle,
                $this->mapehTitle,
                $this->studentGrade
            );

            if (mysqli_stmt_execute($stmt)) {
                // return true;
            }
            // return false;
        }
    }
}
