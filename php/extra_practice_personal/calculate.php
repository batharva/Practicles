<html>
  <head>
    <title>Total Marks & % Calculator.</title>
</html>

<?php
    if (isset($_POST['cal'])) {
        $subjects = array("English", "Hindi", "Marathi", "Maths", "Information Technology");
        $marks = array('mark1','mark2','mark3','mark4','mark5');
        for ($i=0; $i < count($marks); $i++) { 
            $marks[$i]=$_POST[$marks[$i]];
        }
        $totalmarks = 0;

        for ($i = 0; $i < count($marks); $i++) {
            $totalmarks += $marks[$i];
        }

        $percentage = ($totalmarks / (100*count($subjects))) * 100;

        echo "Marks In Individual Subject:<br>";
        for ($i = 0; $i < count($subjects); $i++) {
            echo "<br>" . $subjects[$i] . " = " . $marks[$i];
        }

        echo "<br><br> Total Marks = " . $totalmarks;
        echo "<br><br> Percentage = " . $percentage."%";
    }
?>
