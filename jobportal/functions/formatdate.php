<?php
function format_date($date){
	return date('jS F  Y h:i:a',strtotime($date));
}
function cutText($text,$maxm=400){
	$text=$text." ";
	$text=substr($text,0,$maxm);
	$text=substr($text, 0,strrpos($text, ' '));
	$text=$text." ...";
	return $text;

}

function cutText2($text,$maxm=150){
	$text=$text." ";
	$text=substr($text,0,$maxm);
	$text=substr($text, 0,strrpos($text, ' '));
	$text=$text." ...";
	return $text;

}

?>

