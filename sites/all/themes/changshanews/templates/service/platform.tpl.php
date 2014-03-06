<?php
global $base_path;
$platform_path = $base_path . 'news_service/platform';
$design_path = $base_path . 'news_service/design';
$coo_path = $base_path . 'news_service/cooperation';
$theme_path = $base_path . drupal_get_path('theme', 'changshanews');
?>
<script type="text/javascript">
    jQuery(function(){
        jQuery( ".active" ).find('a').css('color','black');
    });

</script>

<div class="service_design_header service_platform_header_bg super-fine-black" id="platform_header">
    <div class="container">
        <div class="row" style="padding-top:50px;">
            <div class="col-md-3">
                 <ul class="ul_left" style="padding-left:48px;">
                    <li  class="active"><a href="<?php print $platform_path; ?>">平台服务</a></li>
                    <li class="unactive"><a href="<?php print $design_path; ?>">设计服务</a></li>
                    <li class="unactive"><a href="<?php print $coo_path; ?>">合作案例</a></li>
                </ul>
            </div>
            <div class="col-md-9">
                 <div class="div_right">
                    <span class="service-opt-first" >THE MOST INFLUENTIAL DESIGN COMMUNICATION PLATFORM</span>
                    <span class="service-opt-sec" >IN CENTRAL SOUTH CHINA </span>
                    <span class="chinese_right">中南地区最具大众影响力的设计传播平台</span>
                </div>
            </div>
        </div>
    </div>
</div>


<div id="design_main" class="design_main  super-fine-black">
    <div class="container" style="padding-left:66px;">
    <div class="row" style="padding-top:50px;">
        <div  class="service-item-content col-md-12  col-xs-12">

            <div class="platform_item col-md-4 " style="margin-left:0px;">
                <div class="platform_item_content">品牌平台</div>
                <div class="platform_item_detail">
                    <p>持续举行对话讲座、工作坊,</p>
                    <p>为自身品牌影响力建设</p>
                </div>
            </div>
            <div class="platform_item col-md-4 " style="margin-right:2%;margin-left:2%;">
                <div class="platform_item_content">经营平台</div>
                <div class="platform_item_detail">
                    <p>通过社会联动关系产生经营性活动,</p>
                    <p>如竞赛、设计之旅、产品展、销售、</p>
                    <p>设计周等</p>
                </div>
            </div>
            <div class="platform_item col-md-4 " style="margin-right:0px;">
                <div class="platform_item_content">特别平台</div>
                <div class="platform_item_detail">
                    <p>服务于晨报全系全媒体需要、</p>
                    <p>中央指示或中南集团制定项目,</p>
                    <p>以及给政府提供服务的活动</p>
                </div>
            </div>
            <div class="clearfix visible-xs"></div>
        </div>
    </div>
</div>
</div>

