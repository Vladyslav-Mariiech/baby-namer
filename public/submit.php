<?php
include '../src/functions.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name']);
    $gender = $_POST['gender'];

    if ($name && in_array($gender, ['male', 'female'])) {
        $entry = "{$name}|{$gender}\n";
        file_put_contents('../names.txt', $entry, FILE_APPEND);
    }

    header('Location: index.php');
    exit;
}