<?php


global $base_path;
$theme_path = $base_path . drupal_get_path('theme', 'changshanews');

$result = db_query("SELECT nid FROM node WHERE type = :type", array(':type' => 'ImageWorks'))->fetchAll();

$image_works = array();
foreach ($result as $row) {
    $node = node_load($row->nid);
    $image_work = new stdClass();
	if($node->field_img_num['und'][0]['value'] ==1){
		$image_work->nid = $row->nid;
		$image_work->img_name = $node->field_img_name['und'][0]['value'];
		$image_work->img_image = $node->field_img_image['und'][0]['uri'];
		$image_work->img_desc = $node->field_img_desc['und'][0]['value'];
		$image_work->img_owner = $node->field_img_owner['und'][0]['value'];
		$image_works[] = $image_work;
	}
}


?>
<script src="<?php print $theme_path; ?>/js/Qfast.js" type="text/javascript"></script>
<div  class="vote">
	<div id="item-wrapper">
            <div id="item-columns">
                 <?php  foreach($image_works as $image_work):
                     if(empty($image_work->img_image)){
                            $path = $theme_path.'/images/no-image.png';
                        } else {
                            $url = $image_work->img_image;
                            $url = file_create_url($url);
                            $url = parse_url($url);
                            $path = $url['path'];
                        }
                 ?>
                    <div class="pin">
                        <img src="<?php print $path; ?>" alt="" />
                        <p class="vote-p">作者：<?php print $image_work->img_owner; ?></p>
                        <p class="vote-p">作品名：<?php print $image_work->img_name; ?></p>
                        <p style="padding-bottom:20px;"><?php print $image_work->img_desc; ?></p>
                        
                    </div>
                 <?php endforeach; ?>
               
		</div>
	</div>
</div>