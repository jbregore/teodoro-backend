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
include "../../models/books.php";

// instantiate database
$database = new Database();
$db = $database->getConnection();

$book = new Books($db);

$data = json_decode(file_get_contents("php://input"));

$result = $book->getBookHeader($data->grade);

$book_arr = array();

if($result->num_rows > 0){
	while($row = $result->fetch_assoc()){
		array_push($book_arr, $row);
	}
	http_response_code(200);
	echo json_encode($book_arr);
}else{
    http_response_code(400);
	echo json_encode($book_arr);
}

