
<?php
$output = shell_exec('whoami');
$db_prefix=shell_exec('uapi --user="$output" Mysql get_restrictions --output=text | grep prefix | cut -d ':' -f 2')
echo "<p>I am: $output</p>";
echo "<p>The db prefix is: $db_prefix</p>";
?>
