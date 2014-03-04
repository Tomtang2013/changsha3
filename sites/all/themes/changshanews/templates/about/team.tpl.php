<?php
global $base_path;
$about_company_path = $base_path . "about/company";
$about_team_path = $base_path . "about/team";
$theme_path = $base_path . drupal_get_path('theme', 'changshanews');
$about_memberdetail_path = $base_path . "about/memberdetail";
$theme_path = $base_path . drupal_get_path('theme', 'changshanews');

//$member = array();
$consultants = array();
$experts = array();

$result = db_query("SELECT nid FROM node WHERE type = :type", array(':type' => 'member'))->fetchAll();

$nids = array();
foreach ($result as $row) {
    $node = node_load($row->nid);
    $member = new stdClass();
    $member->nid = $row->nid;
    $member->m_name = $node->field_m_name['und'][0]['value'];
    $member->m_s_image = $node->field_image['und'][0]['uri'];
    $member->m_weight = $node->field_m_weight['und'][0]['value'];
    $member->m_type = $node->field_m_type['und'][0]['value'];
    if ($member->m_type == 0) {
        $consultants[] = $member;
    } else {
        $experts[] = $member;
    }
}

function compareItems($a, $b){
    if ( $a->m_weight < $b->m_weight ) return -1;
    if ( $a->m_weight > $b->m_weight ) return 1;
    return 0; // equality
}

uasort($consultants, "compareItems");
uasort($experts, "compareItems");

?>

<script type="text/javascript">
    jQuery(function(){
        jQuery( ".active" ).find('a').css('color','black');
        jQuery( ".active" ).find('a').css('text-decoration','none');
        jQuery( ".unactive" ).find('a').css('color','#666666');
        jQuery( ".unactive" ).find('a').css('text-decoration','none');
    });
</script>


<div id="work_about" class="work_about ">
    <div class="container">
        <div class="row" style="padding-top:50px;">
            <ul class="ul_left" style="padding-left:65px;">
                <li class="unactive"><a href="<?php print $about_company_path; ?>" >关于公司</a></li>
                <li class="active"><a href="<?php print $about_team_path; ?>">关于团队</a></li>
            </ul>

            <div class="div_right">
                <span class="en_right">A BRAND / A SOUND</span>
                <span class="chinese_right">一个品牌一个声音</span>
            </div>
        </div>

    
    <div class="work_about_team_main row" >
            <div class="team_member_list  col-md-9 col-md-offset-3">
                <div><p>顾问专家</p></div>
                <div class="team_member_imgs">
                    <?php $i=0; foreach($experts as $expert):
                        $i++;
                        $url = file_create_url($expert->m_s_image);
                        $url = parse_url($url);
                        $path = $url['path'];
                    ?>

                    <div class="team_member_img col-md-3 ">
                             <a  href="<?php print $about_memberdetail_path.'/'.$expert->nid ?>" >
                                <img  class="thumbnail"   src="<?php print $path; ?>"  style="width:100%;" />
                            </a>
                            <div class="member_name"><?php print $expert->m_name; ?></div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div style="clear:both;"/>
            <div class="team_member_list col-md-10 col-md-offset-2">
                    <div><p>团队成员</p></div>
                    <div class="team_member_imgs">
                       <?php $i=0; foreach($consultants as $consultant):
                        $i++;
                        $url = '';
                        if(empty($consultant->m_s_image)){
                            $path = $theme_path.'/images/no-image.png';
                        } else {
                            $url = $consultant->m_s_image;
                            $url = file_create_url($url);
                            $url = parse_url($url);
                            $path = $url['path'];
                        }
                    ?>
                    <div class="team_member_img  col-md-3">
                            <a href="<?php print $about_memberdetail_path.'/'.$consultant->nid ?>" >
                                <img   class="thumbnail"  src="<?php print $path; ?>" style="width:100%;" />
                            </a>
                            <div class="member_name "><?php print $consultant->m_name; ?></div>
                    </div>
                    <?php endforeach; ?>
                    </div>
                </div>
                <div style="clear:both;padding-bottom: 30px;"></div>
            </div>
        </div>
</div>

