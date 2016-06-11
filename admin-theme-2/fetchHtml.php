<?php
Class Fetchhtml{
	
	
	/*********This function will fetch all Images in images folder*************/
	public function fetchImages($pageUrl,$basePath)
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
	/****************This function will fetch css in css folder********************/
	public 	function fetchCss($pageurl,$basePath)
	{
		$data = file_get_contents($pageurl);
		//header("Content-Type:text/plain");
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
	
	public	function fetchjquery($pageUrl,$basePath)
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
	/*****This function will fetch Page source code***********************/
	public function getSource($pageUrl)
{
	$url=$pageUrl;
	$data=file_get_contents($url);
	$fileName=substr(strrchr($url, "/"), 1);
	$myfile = fopen($fileName, "w") or die("Unable to open file!");
	fwrite($myfile, $data);
	fclose($myfile);
	chmod($fileName,777); 
}
	  public function getTemplate($pageurl,$basePath)
	  {
		 $this->fetchImages($pageurl,$basePath);
		 $this->fetchjquery($pageurl,$basePath);
		 $this->fetchCss($pageurl,$basePath);
		
		/*	$this->getSource($pageUrl);*/
		  
	  }
	  public function getSoureCodehtml($pageUrl)
	  {
		  $this->getSource($pageUrl);
	  }
	}
?>
