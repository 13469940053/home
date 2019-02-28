<?php
$content=@$_POST['content'];
$content=strip_tags($content);
$content=nl2br($content);

$json=@file_get_contents('content.json');
if($json){
	$data=json_decode($json,TRUE);
}
else{
	$data=array();
}
$data[]=array('content'=>$content,'addtime'=>time());
$json=json_encode($data);
file_put_contents('content.json',$json);