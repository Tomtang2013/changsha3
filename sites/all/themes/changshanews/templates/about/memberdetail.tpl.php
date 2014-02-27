<?php
global $base_path;
$about_company_path = $base_path . "about/company";
$about_team_path = $base_path . "about/team";
$theme_path = $base_path . drupal_get_path('theme', 'changshanews');

$nav_grid = $base_path . 'about/team';
$nav_path = $base_path . 'about/memberdetail/';
$nid = arg(2);
$next = get_nav_member($nid, 'next');
$prv = get_nav_member($nid, 'prv');

$nid = arg(2);
if ($nid) {
    $node = node_load($nid);
    $member = new stdClass();
    $member->nid = $nid;
    $member->m_name = $node->field_m_name['und'][0]['value'];
    $member->m_s_image = $node->field_image['und'][0]['uri'];
    $member->m_b_image = $node->field_m_b_image['und'][0]['uri'];
    $member->m_title = $node->field_m_title['und'][0]['value'];
    $member->m_desc = $node->field_m_desc['und'][0]['value'];
    $member->m_type = $node->field_m_type['und'][0]['value'];

    if (empty($member->m_b_image)) {
        $path = $theme_path . '/images/no-image-big.png';
    } else {
        $url = file_create_url($member->m_b_image);
        $url = parse_url($url);
        $path = $url['path'];
    }
}
?>

<script type="text/javascript">
    jQuery(function(){
        jQuery( ".active" ).find('a').css('color','black');
        jQuery( ".unactive" ).find('a').css('color','#666666');
    });
</script>


<div id="work_about" class="work_about ">
    <div class="container">
        <div class="row" style="padding-top:50px;">
            <ul class="ul_left" style="padding-left:65px;">
                <li class="unactive"><a href="<?php print $about_company_path; ?>">关于公司</a></li>
                <li class="active"><a href="<?php print $about_team_path; ?>">关于团队</a></li>
            </ul>

            <div class="div_right">
                <span class="en_right">A BRAND / A SOUND</span>
                <span class="chinese_right">一个品牌一个声音</span>
            </div>
        </div>

        <div style="clear:both;height:100px; "></div>

        <div style="float:right;">
            <a href="<?php print $nav_grid; ?>" ><img class="nav_img" src="<?php print $theme_path ?>/images/nav_grid.png"  alt=""/></a>
            <?php if ($prv != -1): ?>
                <a href="<?php print $nav_path . $prv; ?>" ><img class="nav_img" src="<?php print $theme_path ?>/images/nav_prv.png"  alt=""/></a>
            <?php endif; ?>
            <?php if ($next != -1): ?>
                    <a href="<?php print $nav_path . $next; ?>" ><img class="nav_img" src="<?php print $theme_path ?>/images/nav_next.png"  alt=""/></a>
            <?php endif; ?>
                </div>
                <div class="work_about_team_memeber_main" style="float:right;">
                    <div class="big_img">
                        <img src="<?php print $path; ?>" />
                    </div>
                    <div class="member_discrib">
                        <div class="member_discrib_left">
                    <?php print $member->m_name; ?>
                </div>
                <div class="member_discrib_right"
                <?php if ($member->m_type == 0): ?>
                             style="padding-bottom:80px;"
                     <?php endif; ?>>
                         <?php print $member->m_title; ?>
                </div>
                <div  class="member_discrib_bottom"
                <?php if ($member->m_type != 0): ?>
                                   style="display:none;"
                      <?php endif; ?>
                             >
                          <?php print $member->m_desc; ?>
                </div>
            </div>
            <div style="clear:both;"></div>
        </div>
    </div>
</div>
