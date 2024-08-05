<?php

$correct_hashed_pin = '8f14e45fceea167a5a36dedd4bea2543b79c1a1ea2d4e02dd41eeb5a861399ed';


$received_hashed_pin = $_POST['hashed_pin'];

// 핀 번호 확인
if ($received_hashed_pin === $correct_hashed_pin) {
    echo json_encode(["status" => "success"]);
} else {
    echo json_encode(["status" => "error"]);
}
?>
