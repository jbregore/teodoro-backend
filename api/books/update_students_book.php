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

$book->iid = $data->id;
$book->bookGrade = $data->facultyGrade;
$book->bookSection = $data->facultySection;
$book->bookSchoolYear = $data->facultySchoolYear;

$book->filipinoIssued = $data->filipinoIssued;
$book->filipinoReturned = $data->filipinoReturned;
$book->englishIssued = $data->englishIssued;
$book->englishReturned = $data->englishReturned;

$book->mathIssued = $data->mathIssued;
$book->mathReturned = $data->mathReturned;
$book->scienceIssued = $data->scienceIssued;
$book->scienceReturned = $data->scienceReturned;

$book->apIssued = $data->apIssued;
$book->apReturned = $data->apReturned;
$book->espIssued = $data->espIssued;
$book->espReturned = $data->espReturned;

$book->tleIssued = $data->tleIssued;
$book->tleReturned = $data->tleReturned;
$book->mapehIssued = $data->mapehIssued;
$book->mapehReturned = $data->mapehReturned;

$isUpdated = $book->updateBook();

if ($isUpdated) {
    //201 status okay
    http_response_code(201);
    echo json_encode($data);
    return;
}

http_response_code(500);
