<?php
// 다운로드할 파일의 실제 경로
$file_path = '쿼터파이_회원용.apk';

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
?>
