<?php
global $base_path;
$key_value = $page['content']['system_main']['main']['#markup'];
$key = '%'.$key_value . '%';
$query = db_query("SELECT nid FROM node WHERE title like :key order by created desc limit 20", array(':key' => $key));
$result = $query->fetchAll();
$node_list = array();
foreach ($result as $row) {
    $node = node_load($row->nid);
    $node_list[] = $node;
}

function get_url_by_node($node) {
    $news_detail_path = "../../news/detail/";
    $work_detail_path = "../../work/detail/";
    $menber_detail = '../../about/memberdetail/';
    switch ($node->type) {
        case 'news': return $news_detail_path . $node->nid;
        case 'member': return $menber_detail . $node->nid;
        case 'work': return $work_detail_path . $node->nid;
    }
    return '';
}

function get_title_by_node($node) {
    $news = "[动态]";
    $work = "[工作]";
    $menber = '[关于]';
    switch ($node->type) {
        case 'news': return $news .'  '. $node->title;
        case 'work': return $work .'  '. $node->title;
        case 'member': return $menber .'  '. $noe->title;
    }
    return '';
}
?>
<script type="text/javascript">
    jQuery(function() {
        jQuery('#search-box').val('<?php print $key_value ?>');
        jQuery('.result_link').each(function(){
            jQuery(this).css('color','#000000');
        });
    });
</script>
<div id="page-wrapper">
    <div id="page" class="dashboard-page">
        <div class="page-main">
            <?php require_once 'first_header.tpl.php'; ?>


            <div>
                <div id="work_summary_main" class="work_summary_main">
                    <div class="work_imgs" style="background-color: #EEEEEE;">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 news_summary_title" style="padding-left:66px;" >

                                    <div style="background-color: yellow;">
                                        <h3 style="padding: 5px 15px 5px 15px;">检索结果：</h3>
                                    </div>
                                    <div  class="news_summary_title_txt"  style="padding: 10px 15px 10px 15px;">
                                        <ul style="list-style-type:none;padding-left: 0px;margin-top: 0px;">
                                           <?php foreach ($node_list as $node): ?>
                                                <li style="padding:10px 10px 0px 10px;height:30px;">
                                                    <a class="result_link" href="<?php print get_url_by_node($node); ?>" style="font-size: 16px;">
                                                        <?php print get_title_by_node($node); ?></a>
                                                  </li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </div>
                                </div>
                                
                                <div style="clear:both;padding-bottom: 100px;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>





        </div>
        <div id="dashboard_footer" class="dashboard_footer">
<?php require_once 'news_footer.tpl.php'; ?> 
        </div> <!-- /.section, /#footer-wrapper -->
    </div>

</div> <!-- /#page, /#page-wrapper -->
<!--<div id="page-wrapper">
    <div id="page" class="dashboard-page">
        <div class="page-main">
<?php require_once 'first_header.tpl.php'; ?>
            <div class="container" style="min-height: 600px;background-color: #cccccc">
<?php foreach ($node_list as $node): ?>
                        <div class="row">
                            <a href="<?php print get_url_by_node($node); ?>">
    <?php print $node->title; ?>
                            </a>
                        </div>

<?php endforeach; ?>
            </div>   

            <div id="dashboard_footer" class="dashboard_footer">
<?php require_once 'news_footer.tpl.php'; ?> 
            </div>  /.section, /#footer-wrapper 

        </div>  /#page, /#page-wrapper 
    </div>-->
