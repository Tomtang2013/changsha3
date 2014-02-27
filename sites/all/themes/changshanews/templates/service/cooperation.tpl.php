<?php
global $base_path;
$platform_path = $base_path . 'news_service/platform';
$design_path = $base_path . 'news_service/design';
$coo_path = $base_path . 'news_service/cooperation';
?>

<script type="text/javascript">
    jQuery(function(){
        jQuery( ".ul_left" ).find(".active").find('a').css('color','black');
        jQuery(".first_header").find('a').css('color','#D7D7D7');
    });
</script>

<div class="service_design_header service_platform_header_bg" id="platform_header">
    <div class="container">
        <div class="row" style="padding-top:50px;">
            <div class="col-md-3">
                <ul class="ul_left" style="padding-left:48px;">
                    <li  class="unactive"><a href="<?php print $platform_path; ?>">平台服务</a></li>
                    <li class="unactive"><a href="<?php print $design_path; ?>">设计服务</a></li>
                    <li class="active"><a href="<?php print $coo_path; ?>">合作案例</a></li>
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
<div id="design_main" class="design_main" >
    <div class="container" >
        <div class="row ">
            <div class="right col-lg-8 col-md-8 col-xs-8"></div>
            <div class="left col-lg-3  col-md-3 col-xs-3"></div>
        </div>
        <div class="row ">
            <div class="right col-lg-8 col-md-8 col-xs-8">
                <div class="right_content">
                </div>
            </div>
            <div class="left col-lg-3  col-md-3 col-xs-3">
                <div class="left_content">
                       媒体
                </div>
            </div>
        </div>

        <div class="row ">
            <div class="right col-lg-8 col-md-8 col-xs-8">
                <div class="right_content">
                </div>
            </div>
            <div class="left col-lg-3  col-md-3 col-xs-3">
                <div class="left_content">
                       政企
                </div>
            </div>
        </div>

        <div class="row ">
            <div class="right col-lg-8 col-md-8 col-xs-8">
                <div class="right_content">
                </div>
            </div>
            <div class="left col-lg-3  col-md-3 col-xs-3">
                <div class="left_content">
                       区域
                </div>
            </div>
        </div>

        <div class="row ">
            <div class="right col-lg-8 col-md-8 col-xs-8">
                <div class="right_content">
                </div>
            </div>
            <div class="left col-lg-3  col-md-3 col-xs-3">
                <div class="left_content">
                       展会
                </div>
            </div>
        </div>
    </div>
</div>
