<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$name = $_REQUEST['name'];
$company = $_REQUEST['company'];
$email = $_REQUEST['email'];
$phone = $_REQUEST['phone'];
$answers = $_REQUEST['answer'];


$requestToken = getAccessToken();

$payload = array(
    "token" => $requestToken,
    "interview" => Array(
        "a1" => $answers[1],
        "a2" => $answers[2],
        "a3" => $answers[3],
        "a4" => $answers[4],
        "a5" => $answers[5],
        "a6" => $answers[6],
        "a7" => $answers[7],
        "a8" => $answers[8],
        "a9" => $answers[9],
        "a10" => $answers[10],
        "a11" => $answers[11],
        "a12" => $answers[12]
    )
);

$payloadData = json_encode($payload);

$segment = getPsychographicSegment($payloadData);

echo $segment;

function getAccessToken()
{
    // GET ACCESS TOKEN
    $url = "https://c2b-api.herokuapp.com/api/v1/tokens";
    $ch = curl_init($url);
    $payload = json_encode(array("entity_key" => "e63dc44420ae9bbb52665b4fbb3faa17b7f36474993c1ac04612714c88bbca3789c73adb9af2f7d0a091714a9ce29f4ba5c2"));
    curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($ch);
    curl_close($ch);

    return json_decode($result)->token;
}

function getPsychographicSegment($payload)
{
    // GET ACCESS TOKEN
    $url = "https://c2b-api.herokuapp.com/api/v1/interviews";
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($ch);
    curl_close($ch);

    return json_decode($result)->segment_name;
}