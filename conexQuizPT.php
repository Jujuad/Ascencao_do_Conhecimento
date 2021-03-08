<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$q1 = $_POST['q1'];
$q2 = $_POST['q2'];
$q3 = $_POST['q3'];
$q4 = $_POST['q4'];
$q5 = $_POST['q5'];
$q6 = $_POST['q6'];
$connect = mysqli_connect('localhost','root','');
$db = mysqli_select_db($connect,'adc');

$totalCorrect = 0;

            if ($q1 == "E") { $totalCorrect++; }
            if ($q2 == "C") { $totalCorrect++; }
            if ($q3 == "E") { $totalCorrect++; }
            if ($q4 == "D") { $totalCorrect++; }
            if ($q5 == "B") { $totalCorrect++; }
            if ($q6 == "C") { $totalCorrect++; }
        
            echo "<div id='results'>$totalCorrect / 5 correct</div>";
            echo"<script language='javascript' type='text/javascript'>
            alert('Você acertou $totalCorrect de 6 questões');window.location
            .href='finalizar.php';</script>"; 
    
?>