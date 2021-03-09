<?php
echo htmlspecialchars("Hello: " . $_GET["text"]);

$data = [
  "user" => $_GET["username"],
  "score" => $_GET["score"],
];

// $data = $_GET["text"];
$dataString = json_encode($data);

file_put_contents("dataFile.json", $dataString);

echo "saved Data";

?>
