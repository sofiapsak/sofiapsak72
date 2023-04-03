
<?php
$command = escapeshellcmd('python app.py');
$output = shell_exec($command);
echo $output;
header("location:../../home/filemanager");
?>