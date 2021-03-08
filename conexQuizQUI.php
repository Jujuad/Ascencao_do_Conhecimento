<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$q1 = $_POST['q19'];
$q2 = $_POST['q20'];
$q3 = $_POST['q21'];
$q4 = $_POST['q22'];
$q5 = $_POST['q23'];
$q6 = $_POST['q24'];
$connect = mysqli_connect('localhost','root','');
$db = mysqli_select_db($connect,'adc');

$totalCorrect = 0;

            if ($q1 == "D") { $totalCorrect++; }
            if ($q2 == "C") { $totalCorrect++; }
            if ($q3 == "B") { $totalCorrect++; }
            if ($q4 == "C") { $totalCorrect++; }
            if ($q5 == "D") { $totalCorrect++; }
            if ($q6 == "E") { $totalCorrect++; }
        
            echo "<div id='results'>$totalCorrect / 5 correct</div>";
            echo"<script language='javascript' type='text/javascript'>
            alert('Você acertou $totalCorrect de 6 questões');window.location
            .href='finalizar4.php';</script>"; 
    
?>