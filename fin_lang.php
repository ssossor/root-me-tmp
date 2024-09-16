<?php echo "good one";
$myfile = fopen("index.php", "r");
echo "<pre>".fread($myfile,filesize("index.php"))."</pre>";
fclose($myfile)?>
