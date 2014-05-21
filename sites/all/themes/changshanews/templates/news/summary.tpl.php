<?php
global $base_path;
$news_detail_path = $base_path . "news/detail/";
$theme_path = $base_path . drupal_get_path('theme', 'changshanews');
$result = db_query("SELECT nid FROM node WHERE type = :type order by created desc", array(':type' => 'news'))->fetchAll();

$news_list = array();
$paths = array();
foreach ($result as $row) {
    $node = node_load($row->nid);
    $news = new stdClass();
    $news->nid = $row->nid;
    $news->title = $node->title;
    $news->public_date = $node->field_public_date['und'][0]['value'];
    $url = file_create_url($node->field_n_s_image['und'][0]['uri']);
    $url = parse_url($url);
    $paths[] = $url['path'];
    $news_list[] = $news;
}

function compareItemsDate($a, $b){
    if ( strtotime($a->public_date) < strtotime($b->public_date) ) return 1;
    if ( strtotime($a->public_date) > strtotime($b->public_date) ) return -1;
    return 0; // equality
}

uasort($news_list, "compareItemsDate");

?>

<script type="text/javascript">
    var isAuto = false;
    //      if(<?php print count($paths); ?> > 1)
    isAuto = true;
    jQuery(function(){
        jQuery( ".news_link" ).css('color','black');
        jQuery('.bxslider').bxSlider({
            auto: isAuto,
            mode: 'fade',
            onSliderLoad: function(){

            },
            autoControls: true
        });
        jQuery('.bx-controls').show();
        jQuery('.bx-pager').css('text-align','right');
        jQuery('.bx-pager-link').text("");
        jQuery('.bx-pager-link').css("background-color","yellow");
        jQuery('.bx-pager-link').css("margin-right","10px");
        jQuery('.bx-default-pager').css("top","340px");

        //        jQuery('.bx-controls').css('top','640px');
        jQuery('.bx-wrapper').find('img').css('min-height','400px');
        setTimeout(function(){
            jQuery('.bx-pager-item').hide();
            jQuery('.bx-controls-direction').hide();
        },500);
        
    });
</script>

<div>
    <div id="work_summary_main" class="work_summary_main">
        <?php require_once 'news_summary_top.tpl.php'; ?>
        <div class="work_imgs" style="background-color: #EEEEEE;">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 news_summary_title" style="padding-left:66px;" >

                        <div style="height:20px;background-color: yellow;"></div>
                            <div  class="news_summary_title_txt">
                            <ul style="list-style-type:none;padding-left: 0px;margin-top: 0px;">
                                <?php foreach ($news_list as $news): ?>
                                    <li style="padding:10px 10px 0px 10px;height:20px;">
                                        <a class="news_link" href="<?php print $news_detail_path . $news->nid; ?>">
                                        <?php print $news->title; ?></a>
                                    <span style="float:right;">[ <?php print $news->public_date; ?> ]</span></li>
                                <?php endforeach; ?>
                                    </ul>
                            </div>
                    </div>
                    <div  class="col-md-4 news_imgs" >
                        <div style="height:20px;background-color: yellow;"></div>
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                          <!-- Wrapper for slides -->
                           <div class="carousel-inner">
                               <?php $i=0; foreach ($paths as $path):?>
                                    <div class="item <?php if($i == 0) print "active"; $i++?>" >
                                         <img alt="" src="<?php print $path; ?>"
                                              class="img-responsive" >
                                    </div>
                                <?php endforeach ?>
                            </div>
                        </div>
                    </div>
                    <div style="clear:both;padding-bottom: 100px;"></div>
                </div>
            </div>
        </div>
    </div>
</div>
