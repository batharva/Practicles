<html>
  <head>
    <title>Eligiblity Test.</title>
  </head>
  <body>
    <form  method="post">
      Enter Your Age: <input type="number" name="age" /><br />
      <input type="submit" value="Check" name="check" /><br />
    </form>
  </body>
</html>
<?php
     if (isset($_POST['check'])) {
        $age=$_POST['age'];
        if ($age>=18) { echo "You are eligible to vote."; }else { echo "You are
not eligible to vote."; } } ?>
