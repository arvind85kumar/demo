<?php 
function fetchCss($pageurl,$basePath)
{
$data = file_get_contents($pageurl);
header("Content-Type:text/plain");

$doc = new DOMDocument();
$doc->loadHTML($data);
$head = $doc->getElementsByTagName('head')->item(0);
$links = $head->getElementsByTagName("link");
foreach($links as $l) {
    if($l->getAttribute("rel") == "stylesheet") {
      $css[]= $l->getAttribute("href");
    }
}
$filePath=array();

foreach($css as $res)
{
	$filePath[]=$basePath.trim($res);
	$folder[]=substr($res, 0, strrpos($res, '/'));//substr(strrchr($res, "/"), 1);
}

foreach($folder as $dir)
{
if (!is_dir($dir)) {
    @mkdir($dir,0777,true);
}
$oldmask = umask(0);
}
$combined=array_combine($folder,$filePath);
foreach($combined as $directory=>$path)
{
$fileName= substr($path, strrpos($path, '/') + 1);
$myfile = fopen($directory.'/'.$fileName."", "w") or die("Unable to open file!");
$data = file_get_contents($path);
fwrite($myfile, $data);
fclose($myfile);
}

umask($oldmask);

}

fetchCss("http://192.185.228.226/projects/ma/1-5-2/jquery/form-validations.html","http://192.185.228.226/projects/ma/1-5-2/jquery/");
?>
