<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$q1 = $_POST['q13'];
$q2 = $_POST['q14'];
$q3 = $_POST['q15'];
$q4 = $_POST['q16'];
$q5 = $_POST['q17'];
$q6 = $_POST['q18'];
$connect = mysqli_connect('localhost','root','');
$db = mysqli_select_db($connect,'adc');

$totalCorrect = 0;

            if ($q1 == "A") { $totalCorrect++; }
            if ($q2 == "B") { $totalCorrect++; }
            if ($q3 == "C") { $totalCorrect++; }
            if ($q4 == "B") { $totalCorrect++; }
            if ($q5 == "E") { $totalCorrect++; }
            if ($q6 == "B") { $totalCorrect++; }
        
            echo "<div id='results'>$totalCorrect / 5 correct</div>";
            echo"<script language='javascript' type='text/javascript'>
            alert('Você acertou $totalCorrect de 6 questões');window.location
            .href='finalizar3.php';</script>"; 
    
?>