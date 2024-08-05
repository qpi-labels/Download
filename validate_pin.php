<?php
// 올바른 PIN 번호 설정
$correctPIN = "0000";

// 사용자가 입력한 PIN 번호 가져오기
$pin = $_POST['pin'];

// PIN 번호 검증
if ($pin === $correctPIN) {
    // 다운로드할 파일의 실제 경로
    $file_path = 'path/to/your/file/filename.ext';

    // 파일이 존재하는지 확인
    if (file_exists($file_path)) {
        // 파일 다운로드를 위한 헤더 설정
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="' . basename($file_path) . '"');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($file_path));
        readfile($file_path);
        exit;
    } else {
        echo "File not found.";
    }
} else {
    echo "<script>alert('Incorrect PIN. Please try again.'); window.history.back();</script>";
}
?>
