<?php 
//include('urlinclude.php');
function getSource($pageUrl)
{
$url = $pageUrl;
$data = file_get_contents($url);
$fileName=substr(strrchr($url, "/"), 1);
$myfile = fopen($fileName, "w") or die("Unable to open file!");
fwrite($myfile, $data);
fclose($myfile);
chmod($fileName,777); 
}

getSource("http://192.185.228.226/projects/ma/1-5-2/jquery/form-validations.html");
?>
