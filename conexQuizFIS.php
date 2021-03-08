<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$q1 = $_POST['q25'];
$q2 = $_POST['q26'];
$q3 = $_POST['q27'];
$q4 = $_POST['q28'];
$q5 = $_POST['q29'];
$q6 = $_POST['q30'];
$connect = mysqli_connect('localhost','root','');
$db = mysqli_select_db($connect,'adc');

$totalCorrect = 0;

            if ($q1 == "B") { $totalCorrect++; }
            if ($q2 == "B") { $totalCorrect++; }
            if ($q3 == "D") { $totalCorrect++; }
            if ($q4 == "D") { $totalCorrect++; }
            if ($q5 == "B") { $totalCorrect++; }
            if ($q6 == "B") { $totalCorrect++; }
        
            echo "<div id='results'>$totalCorrect / 5 correct</div>";
            echo"<script language='javascript' type='text/javascript'>
            alert('Você acertou $totalCorrect de 6 questões');window.location
            .href='finalizar5.php';</script>"; 
    
?>