<?php 
include('urlinclude.php');
function fetchImages($pageUrl,$basePath)
{
		$url =$pageUrl;
		$html = file_get_contents($url);
		$dom = new domDocument;
		$dom->loadHTML($html);
		$dom->preserveWhiteSpace = false;
		$images = $dom->getElementsByTagName('img');
		$img=array();
		foreach ($images as $image) {
		  $img[]=$image->getAttribute('src');
		  $folder[]=substr($image->getAttribute('src'), 0, strrpos($image->getAttribute('src'), '/'));
		  $filename[] = substr(strrchr($image->getAttribute('src'), "/"), 1);
		  $src[]= $basePath.$image->getAttribute('src');
		}
		foreach($folder as $dir)
		{
			if (!is_dir($dir)) {
				@mkdir($dir,0777,true);
			}
		}
		$c = array_combine($src,$img);
		foreach($c as $key=>$value)
		{
			copy($key,$value);
		}
}
//fetchImages($pageUrl,$basePath);
fetchImages("http://192.185.228.226/projects/ma/1-5-2/jquery/form-validations.html","http://192.185.228.226/projects/ma/1-5-2/jquery/");

?>
