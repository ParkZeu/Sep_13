<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // 수신 이메일 주소 설정
    $to = "jwpark.gn@gmail.com"; // 여기에 실제 이메일 주소를 입력하세요.

    // 이메일 제목과 본문 설정
    $subject = "문의: $name";
    $headers = "From: $email";
    $mailBody = "이름: $name\n";
    $mailBody .= "이메일: $email\n\n";
    $mailBody .= "문의 내용:\n$message";

    // 이메일 보내기
    $success = mail($to, $subject, $mailBody, $headers);

    if ($success) {
        echo "문의가 성공적으로 전송되었습니다. 감사합니다!";
    } else {
        echo "문의 전송 중 오류가 발생했습니다. 다시 시도해주세요.";
    }
}
?>
