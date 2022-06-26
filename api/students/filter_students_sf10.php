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

$student->studentGrade = $data->filterGrade;
$student->studentSection = $data->filterSection;
$student->studentSchoolYear = $data->filterSchoolYear;

$result = $student->filterStudentSF10($data->page);
$total_students = $student->filterCountStudentsSF10();

$student_arr = array();

$student_count;
while($row = $total_students->fetch_assoc()){
	$student_count['count'] = $row;
}

if($result->num_rows > 0){
	while($row = $result->fetch_assoc()){
		array_push($student_arr, $row);
	}
	http_response_code(200);
	$data_array;
	$data_array['count'] = $student_count;
	$data_array['studentData'] = $student_arr;
	$data_array['currentPage'] = $data->page;
	echo json_encode($data_array);
	// echo json_encode($student_arr);
}else{
	echo json_encode($student_arr);
}

