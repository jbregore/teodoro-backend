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

$grade->gradeQuarter = $data->quarter;
$grade->studentGrade = $data->facultyGrade;
$grade->studentSection  = $data->facultySection;
$grade->studentSchoolYear  = $data->facultySchoolYear;

$result = $grade->getQuarterlyReport();

$grade_arr = array();

while($row = $result->fetch_assoc()) {
    array_push($grade_arr, $row);
}

http_response_code(200);
echo json_encode($grade_arr);

