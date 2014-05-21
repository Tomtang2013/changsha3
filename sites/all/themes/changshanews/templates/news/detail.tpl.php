<?php
global $base_path;
$about_company_path = $base_path . "about/company";
$about_team_path = $base_path . "about/team";
$theme_path = $base_path . drupal_get_path('theme', 'changshanews');
$about_memberdetail_path = $base_path . "about/memberdetail";
$theme_path = $base_path . drupal_get_path('theme', 'changshanews');

$nid = arg(2);

if ($nid) {
    $node = node_load($nid);
    $news = new stdClass();
    $news->nid = $nid;
    $news->n_origin = $node->field_n_origin['und'][0]['value'];
    $news->n_editor = $node->field_n_editor['und'][0]['value'];
    $news->n_public_date = $node->field_public_date['und'][0]['value'];
    $paths = array();

    if (!empty($node->field_n_b_image1['und'])) {
        get_fild_n_b_img_path($paths, $node->field_n_b_image1['und'][0]['uri']);
    }
    if (!empty($node->field_n_b_image2['und'])) {
        get_fild_n_b_img_path($paths, $node->field_n_b_image2['und'][0]['uri']);
    }
    if (!empty($node->field_n_b_image3['und'])) {
        get_fild_n_b_img_path($paths, $node->field_n_b_image3['und'][0]['uri']);
    }
    if (!empty($node->field_n_b_image4['und'])) {
        get_fild_n_b_img_path($paths, $node->field_n_b_image4['und'][0]['uri']);
    }
    if (!empty($node->field_n_b_image5['und'])) {
        get_fild_n_b_img_path($paths, $node->field_n_b_image5['und'][0]['uri']);
    }
    if (!empty($node->field_n_b_image6['und'])) {
        get_fild_n_b_img_path($paths, $node->field_n_b_image6['und'][0]['uri']);
    }

    $news->n_body = $node->body['und'][0]['value'];
    $news->title = $node->title;

//    foreach ($news->n_b_image as $uri) {
//        $url = file_create_url($uri);
//        $url = parse_url($url);
//        $paths[] = $url['path'];
//    }
}

function get_fild_n_b_img_path(&$array, $path) {
    if ($path && !empty($path)) {
        $url = file_create_url($path);
        $url = parse_url($url);
        $array[] = $url['path'];
    }
    return $array;
}
?>


<script type="text/javascript">

    jQuery(function(){
        jQuery('.bxslider').bxSlider({
            auto: true,
            mode: 'fade',
            autoControls: true
        });
        jQuery('.bx-wrapper').css('margin-bottom','20px');
    });
</script>

<div>
    <div id="work_summary_main" class="work_summary_main" >
        <?php require_once 'news_summary_top.tpl.php'; ?>

        <div class="work_imgs" style="background-color: #EEEEEE;padding-bottom:50px;" >
            <div class="container">
                <div class="row" >
                    <div class="col-md-12" style="padding-left:66px;" >
                        <div style="height:20px;background-color: yellow;"></div>
                        <div >
                            <div style="height:35px;font-family:fiber-black;padding-top: 5px;font-family: super-fine-black;">
                                <div style="float:left;font-size: 30px;"><?php print $news->title; ?></div>
                                <div style="float:right;">
                                    <span style="padding-right:20px;">发布于：<?php print $news->n_public_date; ?></span>
                                    <span style="padding-right:20px;">来源：<?php print $news->n_origin; ?></span>
                                    <span ><?php print $news->n_editor; ?></span>
                                </div>
                            </div>
                            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <?php $i = 0;
                                    foreach ($paths as $path): ?>
                                        <li data-target="#carousel-example-generic"
                                            data-slide-to="<?php print $i; ?>"
                                            class="<?php if ($i == 0)
                                            print "active"; $i++ ?>"
                                        ></li>
                                        <?php endforeach ?>
                                </ol>
                                <div class="carousel-inner">
                                    <?php $i = 0;
                                        foreach ($paths as $path): ?>
                                            <div class="item <?php if ($i == 0)
                                                print "active"; $i++ ?>">
                                           <img  alt="" class="news_detail_img" style="width:100%"
                                                 src="<?php print $path; ?>">
                                       </div>
                                    <?php endforeach ?>
                                        </div>
                                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                            <span class="glyphicon glyphicon-chevron-left"></span>
                                        </a>
                                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                            <span class="glyphicon glyphicon-chevron-right"></span>
                                        </a>
                                    </div>
                                </div>
                                <div class="container" style="padding-left: 0px;padding-top:10px;width:100%;">
                                    <div class="row" style="font-family:super-fine-black;line-height:26px;">
                                        <div class="col-md-8 news_detail_txt">
                                    <?php print nl2br($news->n_body); ?>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div style="clear:both;"></div>
        </div>
    </div>
</div>
