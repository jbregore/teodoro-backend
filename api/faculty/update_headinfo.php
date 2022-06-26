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

$fac->facultyStatus = "head";
$fac->facultyName = $data->facultyName;
$fac->facultyPhoto = $data->facultyPhoto;
$fac->facultySchoolYear = $data->facultySchoolYear;

$isUpdated = $fac->updateHeadInfo();

if ($isUpdated) {
    //201 status okay
    http_response_code(201);
    echo json_encode($data);
    return;
}

http_response_code(500);
