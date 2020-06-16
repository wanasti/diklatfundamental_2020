<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<boody>

<?php
// Echo session variables that were set on previous page
echo "Favorite color is ". $_SESSION["favcolor"] . ".<br>";
echo "Favorite animal is ". $_SESSION["favanimal"] . ".";

?>

</body>
</html>
