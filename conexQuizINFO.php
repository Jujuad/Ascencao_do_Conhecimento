<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$q1 = $_POST['q31'];
$q2 = $_POST['q32'];
$q3 = $_POST['q33'];
$q4 = $_POST['q34'];
$q5 = $_POST['q35'];
$q6 = $_POST['q36'];
$connect = mysqli_connect('localhost','root','');
$db = mysqli_select_db($connect,'adc');

$totalCorrect = 0;

            if ($q1 == "C") { $totalCorrect++; }
            if ($q2 == "E") { $totalCorrect++; }
            if ($q3 == "B") { $totalCorrect++; }
            if ($q4 == "C") { $totalCorrect++; }
            if ($q5 == "E") { $totalCorrect++; }
            if ($q6 == "A") { $totalCorrect++; }
        
            echo "<div id='results'>$totalCorrect / 5 correct</div>";
            echo"<script language='javascript' type='text/javascript'>
            alert('Você acertou $totalCorrect de 6 questões');window.location
            .href='finalizar6.php';</script>"; 
    
?>