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
include "../../models/faculty.php";


$database = new Database();
$db = $database->getConnection();

$fac = new Faculty($db);

$data = json_decode(file_get_contents("php://input"));

// $fac->studentLRN = $data->studentLRN;
$fac->facultyID = $data->facultyID;
$fac->facultyStatus = $data->facultyStatus;
$fac->facultyName = $data->facultyName;

$fac->facultyAddress = $data->facultyAddress;
$fac->facultyEmail = $data->facultyEmail;
$fac->facultyContactNo = $data->facultyContactNo;
$fac->facultyGender = $data->facultyGender;

$fac->facultyUsername = $data->facultyUsername;
$fac->facultyPassword = $data->facultyPassword;
$fac->facultyPhoto = $data->facultyPhoto;
$fac->facultyGrade = $data->facultyGrade;

$fac->facultySection = $data->facultySection;
$fac->facultySchoolYear = $data->facultySchoolYear;

$isCreated = $fac->addFaculty();

if ($isCreated) {
    //201 status okay
    http_response_code(200);
    $data->id = $fac->id;
    echo json_encode($data);
    return;
}

http_response_code(400);
