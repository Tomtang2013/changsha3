<?php
global $base_path;
$theme_path = $base_path . drupal_get_path('theme', 'changshaworks');
$work_detail_path = $base_path . "work/detail/";

$result = db_query("SELECT nid FROM node WHERE type = :type", array(':type' => 'work'))->fetchAll();
$works_list = array();

foreach ($result as $row) {
    $node = node_load($row->nid);
    $works = new stdClass();
    $works->nid = $row->nid;
    $works->title = $node->title;
    $url = file_create_url($node->field_w_s_image['und'][0]['uri']);
    $url = parse_url($url);
    $works->path = $url['path'];
    $works_list[] = $works;
}
?>

<script type="text/javascript">
    jQuery(function(){
        //        jQuery( ".active" ).find('a').css('color','black');
    });
    
</script>
<!--[if lt IE 9]>
   <script type="text/javascript">
        jQuery(function(){
                  jQuery( ".div_img" ).find('img').removeClass()('img-responsive');
        });
    </script>

<![endif]-->

<div id="work_summary_main" class="work_summary_main">
    <?php require_once 'work_top.tpl.php'; ?>

    <div class="work_imgs">
        <div class="container">
            <div class="row">
                <div class="col-md-12" style="padding-left:66px;padding-bottom:50px;" >
                    <div style="width: 100%;" >
                        <?php $i = 0;foreach ($works_list as $work) : $i++ ?>
                            <div class="div_img col-md-4" style="float:left;">
                                <a href="<?php print $work_detail_path . $work->nid ?>" >
                                    <img src="<?php print $work->path; ?>" alt="" data-src=""
                                         class="img-responsive"/>
                                </a>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <div style="clear:both"></div>
                </div>
            </div>
        </div>
    </div>
</div>
