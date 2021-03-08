<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$q1 = $_POST['q49'];
$q2 = $_POST['q50'];
$q3 = $_POST['q51'];
$q4 = $_POST['q52'];
$q5 = $_POST['q53'];
$q6 = $_POST['q54'];
$connect = mysqli_connect('localhost','root','');
$db = mysqli_select_db($connect,'adc');

$totalCorrect = 0;

            if ($q1 == "C") { $totalCorrect++; }
            if ($q2 == "A") { $totalCorrect++; }
            if ($q3 == "B") { $totalCorrect++; }
            if ($q4 == "B") { $totalCorrect++; }
            if ($q5 == "C") { $totalCorrect++; }
            if ($q6 == "B") { $totalCorrect++; }
        
            echo "<div id='results'>$totalCorrect / 5 correct</div>";
            echo"<script language='javascript' type='text/javascript'>
            alert('Você acertou $totalCorrect de 6 questões');window.location
            .href='finalizar9.php';</script>"; 
    
?>