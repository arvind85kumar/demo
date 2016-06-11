<?php 
function fetchJavascript($pageurl,$basePath)
{
$url = $pageurl;
$data = file_get_contents($url);
$matches='.js';
preg_match_all('#<script(.*?)<\/script>#is', $data, $matches);
foreach ($matches[0] as $value) {
    $js []= $value;
   
}
$results=array();
foreach($js as $jj)
{
preg_match_all('`"([^"]*)"`', $jj, $results[]);
}
$filePath=array();
foreach($results as $res)
{
	$filePath[]=$basePath.trim($res[0][0],'"');
}
$oldmask = umask(0);
mkdir('js', 0777, true);

foreach($filePath as $path)
{
$fileName= substr($path, strrpos($path, '/') + 1);
$myfile = fopen("js/".$fileName."", "w") or die("Unable to open file!");
$data = file_get_contents($path);
fwrite($myfile, $data);
fclose($myfile);
chmod("js/".$myfile."", 777); 
}

umask($oldmask);
chmod("js/$myfile", 777); 
}
fetchJavascript("http://91.234.35.26/superial-admin/v1.2.0/dashboard3.html","http://91.234.35.26/superial-admin/v1.2.0/");
?>
