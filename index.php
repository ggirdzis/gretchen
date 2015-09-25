<?php
$hours = 13;

$mygreeting = greeting($hours);

print($mygreeting);

function greeting($hours) {
    if ($hours > 20 AND $hours <= 24)
    {
        $greet = "Good Night!";
    } 
    if ($hours > 17 AND $hours <= 20)
    {
        $greet = "Good Evening!";
    }
    if ($hours > 12 AND $hours <= 17)
    {
        $greet = "Good Night!";
    }
    if ($hours > 0 AND $hours <= 12)
    {
        $greet = "Good Morning";
    }
    
    return $greet;
        
    
    
} 
//1-11 good morning
//12-16 good afternoon
//17-19 good evening
//20-24 good night


?>