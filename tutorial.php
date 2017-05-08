<?php
include_once('simple_html_dom.php');
$target_url = "https://www.tutorialspoint.com/index.htm";
//preg_match("/^[a-zA-Z\. ]*$;
$target_regex="/.[azAZ][_]";
$html = new simple_html_dom();
$html->load_file($target_url);
foreach($html->find('a') as $link){
//echo $link->href. "</br>";
$keyword = $link->href;
//echo "<a href='".$keyword."'>Link</a>";
if(preg_match("/^[\/a-zA-Z\. ]*$/",$keyword))
{
	echo "<h1>Get lost</h1>";
	echo $keyword."<br>";
	$title=explode("/", $keyword);
	echo "<br/>";
	echo $title[1];
	echo "<br/>";
	$pdf=$title[1]."_tuorial.pdf";
	$name=$title[1];
	echo "<a href='https://www.tutorialspoint.com$keyword/$pdf' target='_blank'>Link</a>";
	echo "<a href='https://www.tutorialspoint.com/$name/$pdf' target='_blank'>PDF</a>";
}
}
?>