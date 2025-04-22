<!DOCTYPE html>
<html>
<body>

<?php
$favcolor = "pink";

switch ($favcolor) {
  case "red":
    echo "Your favorite color is pink!";
  case "blue":
    echo "Your favorite color is red!";
    break;
  case "green":
    echo "Your favorite color is green!";
    break;
  default:
    echo "Your favorite color is neither pink, red, nor green!";
}
?>
 
</body>
</html>
