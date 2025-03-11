<?php
        
        $number = 2; 

        if ($number == 1) {
            $day = "monday";
        } if ($number == 2) {
            $day = "tuesday";
        }if ($number == 3) {
            $day = "wednesday";
        } if ($number == 4) {
            $day = "thursday";
        } if ($number == 5) {
            $day = "friday";
        } if ($number == 6) {
            $day = "saturday";
        } if ($number == 7) {
            $day = "sunday";
        } else {
            $day = "invalid number"; 
        }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Day of the Week</title>
</head>
<body>
    <h1>Day of the Week</h1>
    

        
       <p>The day corresponding to the number <?= $number ?> is: <?= $day ?> </p>;

    
</body>
</html>