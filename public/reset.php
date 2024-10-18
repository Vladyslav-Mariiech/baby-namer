<?php
include '../src/functions.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    resetNames('../names.txt');
    header('Location: index.php');
    exit;
}
