<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$q7 = $_POST['q7'];
$q8 = $_POST['q8'];
$q9 = $_POST['q9'];
$q10 = $_POST['q10'];
$q11 = $_POST['q11'];
$q12 = $_POST['q12'];
$connect = mysqli_connect('localhost','root','');
$db = mysqli_select_db($connect,'adc');

$totalCorrect = 0;

            if ($q7 == "D") { $totalCorrect++; }
            if ($q8 == "C") { $totalCorrect++; }
            if ($q9 == "B") { $totalCorrect++; }
            if ($q10 == "C") { $totalCorrect++; }
            if ($q11 == "A") { $totalCorrect++; }
            if ($q12 == "C") { $totalCorrect++; }

            echo "<div id='results'>$totalCorrect / 5 correct</div>";
            echo"<script language='javascript' type='text/javascript'>
            alert('Você acertou $totalCorrect de 6 questões');window.location
            .href='finalizar2.php';</script>"; 
?>