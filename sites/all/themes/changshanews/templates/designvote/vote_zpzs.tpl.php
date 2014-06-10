<?php
global $user;
$is_judges = 0;
if($user->uid || ( in_array('judges',$user->roles) )){
    $is_judges = 1;
}

global $base_path;
$theme_path = $base_path . drupal_get_path('theme', 'changshanews');
$button_value = "投我一票";
$submit_url = $base_path."designvote/submit/";

$result = db_query("SELECT nid FROM node WHERE type = :type", array(':type' => 'ImageWorks'))->fetchAll();

$image_works = array();
foreach ($result as $row) {
    $node = node_load($row->nid);
    $image_work = new stdClass();
	if($node->field_img_num['und'][0]['value'] > 1){
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

<script  type="text/javascript">
    var submit_url = '<?php print $submit_url;?>';
    jQuery(function(){
        jQuery('.vote-button').each(function(){
            jQuery(this).click(function(){
                var data = {};
                var vote_id = jQuery(this).next().val();
                var ulr = submit_url+ vote_id;
                jQuery.post(ulr,data,function(response){
                    console.log(response);
                    console.log(response.status);
                    console.log(response["message"]);
                    jQuery.fancybox({
                        'modal': false,
                        'content': '<div style="width:300px;">\n\
                                    <p style="font-size:20px;padding:50px 10px 50px 10px">'+response["message"]+'</p></div>'
                    });
                },'json');
            });
        });
    });
    
</script>

<div class="design-vote-main vote">
 <?php if(count($image_works) == 0):?>
		尽请期待
 <?php else:?>
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
                        <p><?php print $image_work->img_desc; ?></p>
                        <div>
                            <?php if($is_judges):?>
                                <input type="button" class="vote-button" value="<?php print $button_value; ?>"/>
                            <?php endif;?>
                            <input type="hidden" value="<?php print $image_work->nid; ?>" class="vote_id"/>
                        </div>
                    </div>
                 <?php endforeach; ?>
               
            </div>
        </div>
 <?php endif;?>
        
</div>
