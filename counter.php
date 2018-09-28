<?php
$fp=fopen("counters.txt","r");
$count=fread($fp,1024);
fclose($fp);
$count=$count+1;
echo "<p> Page views: ".$count."</p>";
fwrite($fp,$count);
fclose($fp);
?>
