<?php

function welcomeStudent() {
    echo "Welcome to the College!!!";
}

if (function_exists("welcomeStudent")) {
    welcomeStudent();
} else {
    echo "Error: Function does not exist.";
}
?>