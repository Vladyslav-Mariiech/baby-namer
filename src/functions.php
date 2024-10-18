<?php
function loadNames($filename) {
    if (!file_exists($filename)) {
        return [[], []];
    }

    $names = file($filename, FILE_IGNORE_NEW_LINES);
    $boys = [];
    $girls = [];

    foreach ($names as $entry) {
        list($name, $gender) = explode("|", $entry);
        if ($gender === 'male') {
            $boys[] = htmlspecialchars($name);
        } elseif ($gender === 'female') {
            $girls[] = htmlspecialchars($name);
        }
    }

    return [$boys, $girls];
}

function displayNames($names) {
    if (empty($names)) {
        echo "<li>No names</li>";
    } else {
        foreach ($names as $name) {
            echo "<li>$name</li>";
        }
    }
}

function resetNames($filename) {
    file_put_contents($filename, '');
}