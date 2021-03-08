<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$q1 = $_POST['q37'];
$q2 = $_POST['q38'];
$q3 = $_POST['q39'];
$q4 = $_POST['q40'];
$q5 = $_POST['q41'];
$q6 = $_POST['q42'];
$connect = mysqli_connect('localhost','root','');
$db = mysqli_select_db($connect,'adc');

$totalCorrect = 0;

            if ($q1 == "A") { $totalCorrect++; }
            if ($q2 == "C") { $totalCorrect++; }
            if ($q3 == "D") { $totalCorrect++; }
            if ($q4 == "C") { $totalCorrect++; }
            if ($q5 == "E") { $totalCorrect++; }
            if ($q6 == "B") { $totalCorrect++; }
        
            echo "<div id='results'>$totalCorrect / 5 correct</div>";
            echo"<script language='javascript' type='text/javascript'>
            alert('Você acertou $totalCorrect de 6 questões');window.location
            .href='finalizar7.php';</script>"; 
    
?>