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

if($_SERVER["REQUEST_METHOD"] !== "POST"){
	http_response_code(404);
	echo "Not Found";
	return;
}

include "../../config/database.php";
include "../../models/faculty.php";

// instantiate database
$database = new Database();
$db = $database->getConnection();

$fac = new Faculty($db);

$data = json_decode(file_get_contents("php://input"));

$fac->facultySchoolYear = $data->headSY;

$result = $fac->getCurrentHead();

$fac_arr = array();

while($row = $result->fetch_assoc()) {
    array_push($fac_arr, $row);
}

http_response_code(200);
echo json_encode($fac_arr);
