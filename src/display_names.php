<?php
function displayNames($names) {
    if (empty($names)) {
        echo "<li>No names</li>";
    } else {
        foreach ($names as $name) {
            echo "<li>$name</li>";
        }
    }
}