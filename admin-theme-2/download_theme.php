<?php
function fetchjquery($pageUrl,$basePath)
{
$url =$pageUrl;
$data = file_get_contents($url);
$html = file_get_contents($url);
$dom = new domDocument;
$dom->loadHTML($html);
$dom->preserveWhiteSpace = false;
$links = $dom->getElementsByTagName("script");
$js=array();
foreach($links as $l) {
  
      $js[]=$basePath.$l->getAttribute("src");
}
$fileName=array();
foreach($js as $file)
{
	$fileName[]=substr(strrchr($file, "/"), 1);
}

$c = array_combine($js,$fileName);
foreach($c as $key=>$value)
{
	copy($key,'js/'.$value);
}
}
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

function fetchCss($pageurl,$basePath)
{
$url =$pageurl;
$data = file_get_contents($url);
header("Content-Type: text/plain");
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
}

$oldmask = umask(0);
mkdir('css', 0777, true);

foreach($filePath as $path)
{
$fileName= substr($path, strrpos($path, '/') + 1);
$myfile = fopen("css/".$fileName."", "w") or die("Unable to open file!");
$data = file_get_contents($path);
fwrite($myfile, $data);
fclose($myfile);
chmod("css/".$myfile."", 777); 
}

umask($oldmask);
chmod("css/$myfile", 777); 
}

function fetchImages($pageUrl,$basePath)
{
$url =$pageUrl;
$data = file_get_contents($url);
$html = file_get_contents($url);
$dom = new domDocument;
$dom->loadHTML($html);
$dom->preserveWhiteSpace = false;
$images = $dom->getElementsByTagName('img');
$img=array();
chmod("images",777); 
foreach ($images as $image) {
  $img[]=$pageUrl.$image->getAttribute('src');
  $filename[] = substr(strrchr($image->getAttribute('src'), "/"), 1);
  $src[]= $basePath.$image->getAttribute('src');
}

$c = array_combine($src,$filename);
foreach($c as $key=>$value)
{
	copy($key,'images/'.$value);
}
}
$pageurl='http://91.234.35.26/superial-admin/v1.2.0/sparklineschart.html';
$basePath='http://91.234.35.26/superial-admin/v1.2.0/';
fetchCss($pageurl,$basePath);
sleep(10);
getSource($pageUrl);
sleep(10);
fetchjquery($pageUrl,$basePath);
sleep(10);
fetchImages($pageUrl,$basePath);
?>
