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
include "../../models/books.php";


$database = new Database();
$db = $database->getConnection();

$book = new Books($db);

$data = json_decode(file_get_contents("php://input"));

// echo count($data);
// echo var_dump($data[0]);
$counter = 0;
for($i = 0; $i < count($data); $i++){
    $book->studentGrade = $data[$i]->studentGrade;
    $book->filipinoTitle = $data[$i]->filipinoTitle;
    $book->englishTitle = $data[$i]->englishTitle;
    $book->mathTitle = $data[$i]->mathTitle; 
    $book->scienceTitle = $data[$i]->scienceTitle;
    $book->apTitle = $data[$i]->apTitle;
    $book->espTitle = $data[$i]->espTitle;
    $book->tleTitle = $data[$i]->tleTitle;
    $book->mapehTitle = $data[$i]->mapehTitle;
    $book->updateBookTitle();
    $counter++;
}

// $book->iid = $data->id;
// $book->subject = $data->subject;
// $book->dateIssued = $data->dateIssued;

// $isUpdated = $book->addBook();

if ($counter != 0) {
    //201 status okay
    http_response_code(200);
    echo json_encode($data);
    return;
}

http_response_code(300);
