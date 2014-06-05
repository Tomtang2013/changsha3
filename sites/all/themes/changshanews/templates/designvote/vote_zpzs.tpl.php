<?php
global $base_path;
$theme_path = $base_path . drupal_get_path('theme', 'changshanews');
$button_value = "投我一票";
$submit_url = $base_path."designvote/submit/";

$result = db_query("SELECT nid FROM node WHERE type = :type", array(':type' => 'ImageWorks'))->fetchAll();

$image_works = array();
foreach ($result as $row) {
    $node = node_load($row->nid);
    $image_work = new stdClass();
    $image_work->nid = $row->nid;
    $image_work->img_name = $node->field_img_name['und'][0]['value'];
    $image_work->img_image = $node->field_img_image['und'][0]['uri'];
    $image_work->img_desc = $node->field_img_desc['und'][0]['value'];
    $image_work->img_owner = $node->field_img_owner['und'][0]['value'];
    $image_works[] = $image_work;
}

//$result = db_query("SELECT nid FROM node WHERE type = :type", array(':type' => 'VideoWorks'))->fetchAll();
//
//$video_works = array();
//foreach ($result as $row) {
//    $node = node_load($row->nid);
//    $video_work = new stdClass();
//    $video_work->nid = $row->nid;
//    $video_work->video_name = $node->field_video_name['und'][0]['value'];
//    $video_work->video_path = $node->field_video_path['und'][0]['value'];
//    $video_work->video_desc = $node->field_video_desc['und'][0]['value'];
//    $video_work->video_owner = $node->field_video_owner['und'][0]['value'];
//    $video_work->video_date = $node->field_video_date['und'][0]['value'];
//    $video_works[] = $video_work;
//}


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

<div class="design-vote-main ">
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
                            <input type="button" class="vote-button" value="<?php print $button_value; ?>"/>
                            <input type="hidden" value="<?php print $image_work->nid; ?>" class="vote_id"/>
                        </div>
                    </div>
                 <?php endforeach; ?>
                <?php require_once 'vote-sample.tpl.php'; ?>
            </div>
        </div>
        
</div>
