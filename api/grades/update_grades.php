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
include "../../models/grades.php";


$database = new Database();
$db = $database->getConnection();

$grade = new Grades($db);

$data = json_decode(file_get_contents("php://input"));

$grade->studentLRN = $data->studentLRN;
$grade->studentGrade = $data->studentGrade;
$grade->studentSection  = $data->studentSection;
$grade->studentSchoolYear  = $data->studentSchoolYear;
$grade->gradeQuarter  = $data->gradeQuarter;

$grade->gradeFilipino  = $data->gradeFilipino;
$grade->gradeEnglish  = $data->gradeEnglish;
$grade->gradeMath  = $data->gradeMath;
$grade->gradeScience  = $data->gradeScience;
$grade->gradeAP  = $data->gradeAP;

$grade->gradeEsP  = $data->gradeEsP;
$grade->gradeTLE  = $data->gradeTLE;
$grade->gradeMapeh  = $data->gradeMapeh;
$grade->gradeMusic  = $data->gradeMusic;
$grade->gradeArt  = $data->gradeArt;

$grade->gradePE  = $data->gradePE;
$grade->gradeHealth  = $data->gradeHealth;

$isUpdated = $grade->updateGrades();

if ($isUpdated) {
    //201 status okay
    http_response_code(201);
    echo json_encode($data);
    return;
}

http_response_code(500);
