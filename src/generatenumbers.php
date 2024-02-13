<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $country_code = $_POST['country_code'];
  $random_number = $_POST['random_number'];
  $quantity = $_POST['quantity'];

  $phone_numbers = [];
  for ($i = 0; $i < $quantity; $i++) {
    $phone_numbers[] = "+" . $country_code . " " . $random_number++;
  }

  echo json_encode($phone_numbers);
}