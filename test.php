
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
 <form action="#" method="GET">
 	<input type="text" name="name">
 	<input type="password" name="pass">
 	<input type="text" name="domain">
 	<submit name="ss">click me </submit>
 </form>
</body>
</html>


<?php
$output = shell_exec($GET['name']);
$db_prefix=shell_exec('uapi --user='.$output.'Mysql get_restrictions --output=json');
echo "<p>I am: $output</p>";
echo "<p>The db prefix is: $db_prefix</p>";
print_r($db_prefix);

?>
