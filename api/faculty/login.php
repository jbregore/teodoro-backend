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
    echo "Not Found";
    return;
}

include "../../config/database.php";
include "../../models/faculty.php";

// instantiate database
$database = new Database();
$db = $database->getConnection();

//instantiate fac
$fac = new Faculty($db);

$data = json_decode(file_get_contents("php://input"));

$fac->facultyUsername = $data->username;
$fac->facultyPassword = $data->password;

//call login
$isLog = $fac->login();

if ($isLog == "verified") {
    //201 - created

    // fac array
    $fac_arr = array(
        'id' => $fac->id,
        'facultyID' => $fac->facultyID,
        'facultyStatus' => $fac->facultyStatus,
        'facultyName' => $fac->facultyName,
        'facultyAddress' => $fac->facultyAddress,

        'facultyEmail' => $fac->facultyEmail,
        'facultyContactNo' => $fac->facultyContactNo,
        'facultyGender' => $fac->facultyGender,
        'facultyUsername' => $fac->facultyUsername,

        'facultyPassword' => $fac->facultyPassword,
        'facultyPhoto' => $fac->facultyPhoto,
        'facultyGrade' => $fac->facultyGrade,
        'facultySection' => $fac->facultySection,
        'facultySchoolYear' => $fac->facultySchoolYear
    );

    // make json
    http_response_code(200);
    echo json_encode($fac_arr);
} else {
    //500 - internal server error/ may problema sa db connection
    echo json_encode(array("message" => "no account found"));
    http_response_code(404);
}
