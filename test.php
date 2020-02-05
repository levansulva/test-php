
<?php
$output = shell_exec('whoami');
$db_prefix=shell_exec('uapi --user=securitydrupal Mysql get_restrictions --output=json');
echo "<p>I am: $output</p>";
echo "<p>The db prefix is: $db_prefix</p>";
?>
