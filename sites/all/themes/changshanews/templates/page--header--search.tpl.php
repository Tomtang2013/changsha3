<?php
global $base_path;
$key = $page['content']['system_main']['main']['#markup'] . '%';
$query = db_query("SELECT nid FROM node WHERE title like :key order by created desc limit 20", array(':key' => $key));
$result = $query->fetchAll();
$node_list = array();
foreach ($result as $row) {
    $node = node_load($row->nid);
    $node_list[] = $node;
}

function get_url_by_node($node) {
    $news_detail_path = "news/detail/";
    $work_detail_path = "work/detail/";
    $menber_detail = 'about/memberdetail/';
    switch ($node->type) {
        case 'news': return $news_detail_path . $node->nid;
        case 'member': return $menber_detail . $node->nid;
        case 'work': return $work_detail_path . $node->nid;
    }
    return '';
}
?>
<div id="page-wrapper">
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
            </div> <!-- /.section, /#footer-wrapper -->

        </div> <!-- /#page, /#page-wrapper -->
