<html>
  <head>
    <title>Vowel Count.</title>
  </head>
  <body>
    <form method="post">
      Enter Your String: <input type="text" name="user_string" />
      <br />
      <input type="submit" value="Vowel Count." name="check" /><br />
    </form>
  </body>
</html>

<?php
  if (isset($_POST['check'])) {
    $ustring = $_POST['user_string'];
    $vowels = array('a', 'e', 'i', 'o', 'u');
    $ustring = strtolower($ustring);
    $vowel_count = 0;

    for ($i = 0; $i < strlen($ustring); $i++) {
      for ($j = 0; $j < count($vowels); $j++) {
        if ($ustring[$i] == $vowels[$j]) {
          $vowel_count++;
        }
      }
    }
    echo "Number of vowels in " . $ustring . " are " . $vowel_count . ".";
  }
?>
