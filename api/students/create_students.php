<?php

header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: HEAD, GET, POST, PUT, PATCH, DELETE, OPTIONS");
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method,Access-Control-Request-Headers, Authorization");
header('Content-Type: application/json');
$method = $_SERVER['REQUEST_METHOD'];
if ($method == "OPTIONS") {
  header('Access-Control-Allow-Origin: *');
  header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method,Access-Control-Request-Headers, Authorization");
  header("HTTP/1.1 200 OK");
  die();
}

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    http_response_code(404);
    echo "Not found!";

    return;
}

include "../../config/database.php";
include "../../models/students.php";


$database = new Database();
$db = $database->getConnection();

$student = new Students($db);

$data = json_decode(file_get_contents("php://input"));

$student->studentLRN = $data->studentLRN;
$student->studentFName = $data->studentFName;
$student->studentLName = $data->studentLName;
$student->studentMName = $data->studentMName;
$student->studentSuffix = $data->studentSuffix;

$student->studentGender = $data->studentGender;
$student->studentAge = $data->studentAge;
$student->studentBirthplace = $data->studentBirthplace;
$student->studentBirthday = $data->studentBirthday;

$student->studentReligion = $data->studentReligion;
$student->studentEthnicGroup = $data->studentEthnicGroup;
$student->studentMotherTongue = $data->studentMotherTongue;
$student->studentNationality = $data->studentNationality;

$student->studentHouseNo = $data->studentHouseNo;
$student->studentBrgy = $data->studentBrgy;
$student->studentCity = $data->studentCity;
$student->studentProvince = $data->studentProvince;

$student->motherFName = $data->motherFName;
$student->motherLName = $data->motherLName;
$student->motherMName = $data->motherMName;

$student->fatherFName = $data->fatherFName;
$student->fatherLName = $data->fatherLName;
$student->fatherMName = $data->fatherMName;

$student->guardianName = $data->guardianName;
$student->guardianRelationship = $data->guardianRelationship;
$student->guardianContactNo = $data->guardianContactNo;

$student->studentGrade = $data->studentGrade;
$student->studentSection = $data->studentSection;
$student->studentSchoolYear = $data->studentSchoolYear;

$student->firstDoseBrand = $data->firstDoseBrand;
$student->firstDoseDate = $data->firstDoseDate;

$student->secondDoseBrand = $data->secondDoseBrand;
$student->secondDoseDate = $data->secondDoseDate;

$student->boosterBrand = $data->boosterBrand;
$student->boosterDate = $data->boosterDate;

$student->booster2Brand = $data->booster2Brand;
$student->booster2Date = $data->booster2Date;

$student->jhsAverage = $data->jhsAverage;
$student->jhsCitation = $data->jhsCitation;
$student->jhsSchool = $data->jhsSchool;
$student->jhsSchoolID = $data->jhsSchoolID;
$student->jhsAddress = $data->jhsAddress;

$student->peptRating = $data->peptRating;
$student->alsRating = $data->alsRating;

$student->othersSpecify = $data->othersSpecify;
$student->othersDateAssesment = $data->othersDateAssesment;
$student->othersTestingCenter = $data->othersTestingCenter;
    


$isCreated = $student->addStudent();

if ($isCreated) {
    //201 status okay
    http_response_code(200);
    $data->id = $student->id;
    echo json_encode($data);
    return;
}else{
   http_response_code(400); 
}

// echo $data->studentLRN;
// echo "gago ka";
