<html>
  <head>
    <title>Palindrome Check</title>
  </head>
  <body>
    <form action="palindrome_check.php" method="post">
      Enter A String:
      <input type="text" name="user_sting" /><br />
      <input type="submit" value="Check" name="check" /><br />
    </form>
  </body>
</html>
<?php
     if (isset($_POST['check'])) {
        $ustring=$_POST['user_sting'];
        $ustring=strtolower($ustring);
        $len=strlen($ustring);
        $test=0;
        for ($i=0; $i <(($len-1)/2) ; $i++) { 
            if ($ustring[$i]==$ustring[$len-$i-1]) {
                $test=1;
            }else{
                $test=0;
            }
        }
        if ($test==1) {
            echo $ustring." is a palindrome.";
        }else {
            echo $ustring." is not a palindrome.";
        }
     }
?>