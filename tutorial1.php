<?php
include_once('simple_html_dom.php');
$target_url = "https://www.tutorialspoint.com/java";
//preg_match("/^[a-zA-Z\. ]*$;
$target_regex="/.[azAZ][_]";
$html = new simple_html_dom();
$html->load_file($target_url);
foreach($html->find('a') as $link){
//echo $link->href. "</br>";
$keyword = $link->href;
//echo "<a href='".$keyword."'>Link</a>";
if(true)
{    
	echo "<h1>Get lost</h1>";
	echo $keyword."<br>";
	
}
}
?>