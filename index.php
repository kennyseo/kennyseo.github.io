<?php echo "Hello World"; ?>
<?php
header("HTTP/1.1 301 Moved Permanently");
header("Location: http://www.google.com"); 
?>
