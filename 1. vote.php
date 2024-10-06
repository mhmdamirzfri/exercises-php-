<?php

function canVote($age) {
    if (!is_numeric($age)) {
        echo "Invalid input. Please enter a valid age.";
    } elseif ($age >= 18) {
        echo "You are eligible to vote.";
    } else {
        echo "You are not eligible to vote.";
    }
}


canVote(20);
?>
