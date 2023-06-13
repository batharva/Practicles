<html>
  <head>
    <title>Total Marks & % Calculator.</title>
</html>

<?php
    if (isset($_POST['cal'])) {
        $subjects = array("English", "Hindi", "Marathi", "Maths", "Information Technology");
        $marks = array(96,98,90,97,99);
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
