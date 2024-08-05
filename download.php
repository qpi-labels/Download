<?php
// URL로부터 다운로드할 파일의 경로 설정
$file_url = 'https://github.com/qpi-labels/Download/blob/d8579424291d2c41cc805aec2fd1c872831f0aae/%EC%BF%BC%ED%84%B0%ED%8C%8C%EC%9D%B4_%ED%9A%8C%EC%9B%90%EC%9A%A9.apk';

// 파일 이름 추출
$file_name = 쿼터파이_회원용.apk($file_url);

// 파일 다운로드를 위한 헤더 설정
header('Content-Description: File Transfer');
header('Content-Type: application/vnd.android.package-archive');
header('Content-Disposition: attachment; filename="' . $file_name . '"');
header('Expires: 0');
header('Cache-Control: must-revalidate');
header('Pragma: public');
header('Content-Length: ' . filesize($file_url));

// 파일 내용 읽기 및 출력
readfile($file_url);
exit;
?>
