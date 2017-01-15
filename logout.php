<?php
SESSION_START();
?>
<?php
session_unset();
?>
<?php
SESSION_DESTROY();
header ('location: index.php');
?>