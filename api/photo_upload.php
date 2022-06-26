<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

if($_SERVER["REQUEST_METHOD"] !== "POST"){
	http_response_code(404);
	echo "Not Found";
	return;
}


$response = array();

//directory
$upload_dir = '../uploads/';

//url				//projectname/ tas yung target directory yung target folder na pagsesavan
$upload_url = 'http://localhost/teodoro/uploads/';


if (isset($_FILES['submit'])) {
    $file = $_FILES['submit'];
    $filename = $_FILES['submit']['name'];
    $fileTmpName = $_FILES['submit']['tmp_name'];
    $fileSize = $_FILES['submit']['size'];
    $fileError = $_FILES['submit']['error'];
    $fileType = $_FILES['submit']['type'];

    $fileExt = explode('.', $filename);
    $fileActualExt = strtolower(end($fileExt));
    $allowed = array('jpg', 'jpeg', 'png');

    if (in_array($fileActualExt, $allowed)) {
        if ($fileError === 0) {
            if ($fileSize < 10000000) {
                $fileNameNew = uniqid('', true) . "." . $fileActualExt;
                $fileDest = $upload_dir . $fileNameNew;
                move_uploaded_file($fileTmpName, $fileDest);

                // http_response_code(200);
                $response = array("url" => $upload_url .  $fileNameNew, "message" => "Successfully uploaded");
                // echo json_encode($response);
                // array_push($response);
            } else {
                http_response_code(400);
                $response = array("url" => $upload_url .  $fileNameNew, "message" => "Image size must be less than 10mb");
                // echo json_encode($response);
                return;
            }
        } else {
            http_response_code(400);
            $response = array("url" => $upload_url .  $fileNameNew, "message" => "There was an error in your image file");
            // echo json_encode($response);
            return;
        }
    } else {
        http_response_code(400);
        $response = array("url" => $upload_url .  $fileNameNew, "message" => "Please upload a valid image");
        // echo json_encode($response);
        return;
    }
}

echo json_encode($response);

