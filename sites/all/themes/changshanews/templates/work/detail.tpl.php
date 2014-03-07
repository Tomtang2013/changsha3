<?php
global $base_path;
$theme_path = $base_path . drupal_get_path('theme', 'changshanews');
$nav_path = $base_path .'work/detail/';
$nav_grid = $base_path .'work/summary';
$nid = arg(2);
$next = get_nav_nid($nid,'work','next');
$prv = get_nav_nid($nid,'work','prv');


if($nid){
    $node = node_load($nid);
    $work = new stdClass();
    $work->nid = $nid;
    $work->title = $node->title;
    $work->body = $node->body['und'][0]['value'];
    $work->w_s_desc = $node->field_w_s_desc['und'][0]['value'];
    $work->w_l_desc = $node->field_w_l_desc['und'][0]['value'];

    $work->w_b_image = array();

    $uri = $node->field_w_b_image1['und'][0]['uri'];
    if($uri){
         $work->w_b_image[] = $uri;
    }
    $uri = $node->field_w_b_image2['und'][0]['uri'];
    if($uri){
         $work->w_b_image[] = $uri;
    }
    $uri = $node->field_w_b_image3['und'][0]['uri'];
    if($uri){
         $work->w_b_image[] = $uri;
    }
    $uri = $node->field_w_b_image4['und'][0]['uri'];
    if($uri){
         $work->w_b_image[] = $uri;
    }
    $uri = $node->field_w_b_image5['und'][0]['uri'];
    if($uri){
         $work->w_b_image[] = $uri;
    }
    $uri = $node->field_w_b_image6['und'][0]['uri'];
    if($uri){
         $work->w_b_image[] = $uri;
    }
    $uri = $node->field_w_b_image7['und'][0]['uri'];
    if($uri){
         $work->w_b_image[] = $uri;
    }

   

    $work->w_top_image = $node->field_w_top_image['und'][0]['uri'];
    $url = file_create_url($work->w_top_image);
    $url = parse_url($url);
    $work->w_top_image = $url['path'];

    $paths = array();
    foreach($work->w_b_image as $uri){
        $url = file_create_url($uri);
        $url = parse_url($url);
        $paths[] = $url['path'];
    }
}


?>

<script type="text/javascript">
    jQuery(function(){
        re_set_top_img_height();
    });

    jQuery(window).resize(function() {
      re_set_top_img_height();
    });

    function re_set_top_img_height(){
      var height = jQuery('.img-responsive').css('height');
      height = height.replace(/px/,"");
      height = height - 8;
      height = height + 'px';
      jQuery('.work_enviro_header').css('min-height',height);
    }
</script>

<div class="work_enviro_header ">
    <img src="<?php print $work->w_top_image; ?>" alt="" style="width:100%;padding-bottom:5px; " class="img-responsive"/>
    <div class="container" style="margin-top:-55%;">
        <div class="row">
            <div class="col-md-3    col-md-offset-9  col-sm-offset-9 work_navs" >
                    <a class="work_nav" href="<?php print $nav_grid; ?>" ><img class="nav_img" src="<?php print $theme_path ?>/images/nav_grid.png"  alt=""/></a>
                <?php if ($prv != -1): ?>
                    <a class="work_nav" href="<?php print $nav_path . $prv; ?>" ><img class="nav_img" src="<?php print $theme_path ?>/images/nav_prv.png"  alt=""/></a>
                <?php endif; ?>
                <?php if ($next != -1): ?>
                    <a class="work_nav" href="<?php print $nav_path . $next; ?>" ><img class="nav_img" src="<?php print $theme_path ?>/images/nav_next.png"  alt=""/></a>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <div style="clear:both;"></div>
</div>

<div id="work_enviro_main " class="work_enviro_main super-fine-black" >
    <div class="container">
        <div class="row">
            <div class="col-md-4 ">
                <div class="work_enviro_main_content">
                    <div class="work_enviro_main_content_left">
                        <div class="work_enviro_main_content_title" style="font-family:super-fine-black;">
                                <?php print $work->title; ?></div>
                        <div style="font-size:18px;line-height: 33px;"> <?php print $work->w_s_desc; ?></div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="work_enviro_main_content_right" style="color:#cbcbcb;float:right;">
                    <p> <?php print $work->w_l_desc; ?></p>
                </div>
            </div>
        </div>      
    </div>
</div>
<div class="work_enviro_main_imgs">
    <div class="container">
        <div class="row">
            <div class="col-md-12" style="padding-left:66px;">
                <p  ><?php print $work->body; ?></p>
                <?php foreach ($paths as $path): ?>
                    <img src="<?php print $path; ?>" alt="" style="width:100%;padding-bottom:5px; " class="img-responsive"/>
                <?php endforeach ?>
            </div>
        </div>
    </div>
</div>

