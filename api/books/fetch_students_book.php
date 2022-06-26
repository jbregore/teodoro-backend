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

$result = $book->fetchAll($data->page);
$total_books = $book->countBooks();

$book_arr = array();

$book_count;
while($row = $total_books->fetch_assoc()){
	$book_count['count'] = $row;
}

if($result->num_rows > 0){
	while($row = $result->fetch_assoc()){
		array_push($book_arr, $row);
	}
	http_response_code(200);
	$data_array;
	$data_array['count'] = $book_count;
	$data_array['bookData'] = $book_arr;
	$data_array['currentPage'] = $data->page;
	echo json_encode($data_array);
	// echo json_encode($book_arr);
}else{
	echo json_encode($book_arr);
}

