<?php
date_default_timezone_set('Asia/Shanghai');
$json=@file_get_contents('content.json');
if($json){
	$data=json_decode($json,TRUE);
}
else{
	$data=array();
	echo '<div class="am-text-center">还没有留言</div>';
}
foreach($data as $r){
?>
<div class="am-panel am-panel-success">
  <div class="am-panel-hd"><?php echo date('Y-m-d H:i:s',$r['addtime']);?></div>
  <div class="am-panel-bd">
    <?php echo $r['content']; ?>
  </div>
</div>
<?php 
}
?>