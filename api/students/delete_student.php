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
include "../../models/students.php";


$database = new Database();
$db = $database->getConnection();

$student = new Students($db);

$data = json_decode(file_get_contents("php://input"));

$student->id = $data->id;
$student->studentLRN = $data->studentLRN;
$student->studentGrade = $data->studentGrade;
$student->studentSection = $data->studentSection;
$student->studentSchoolYear = $data->studentSchoolYear;

// delete product
if($student->deleteStudent()) {
	echo json_encode($data->id);
} else {
	echo json_encode(
		array('message' => 'Student Not Deleted')
	);
}