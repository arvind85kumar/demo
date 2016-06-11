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
			  $jsfile[]=$l->getAttribute("src");
			  $folder[]=substr($l->getAttribute("src"), 0, strrpos($l->getAttribute("src"), '/'));
		}
		
		foreach($folder as $dir)
		{
			if (!is_dir($dir)) {
				@mkdir($dir,0777,true);
			}
		}
		
		$fileName=array();
		foreach($js as $file)
		{
			$fileName[]=$file;//substr(strrchr($file, "/"), 1);
		}
		$c = array_combine($js,$jsfile);
		foreach($c as $key=>$value)
		{
			copy($key,$value);
		}
}
fetchjquery("http://192.185.228.226/projects/ma/1-5-2/jquery/form-validations.html","http://192.185.228.226/projects/ma/1-5-2/jquery/");



?>
