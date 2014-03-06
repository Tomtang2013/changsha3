<?php
global $base_path;
$platform_path = $base_path . 'news_service/platform';
$design_path = $base_path . 'news_service/design';
$coo_path = $base_path . 'news_service/cooperation';
?>

<script type="text/javascript">
    jQuery(function(){
        jQuery( ".active" ).find('a').css('color','black');
    });
</script>
<div class="service_design_header service_design_header_bg super-fine-black" id="platform_header">
    <div class="container">
        <div class="row" style="padding-top:50px;">
            <div class="col-md-3">
                <ul class="ul_left" style="padding-left:48px;">
                    <li  class="unactive"><a href="<?php print $platform_path; ?>">平台服务</a></li>
                    <li class="active"><a href="<?php print $design_path; ?>">设计服务</a></li>
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
                <div class="platform_item col-md-4 " style="margin-right:0px;">
                    <div class="platform_item_content">媒体整合</div>
                    <div class="platform_item_detail">
                        <p>整合社会全媒体</p>
                        <p>资源有效精准投放</p>
                    </div>
                </div>
                <div class="platform_item col-md-4 " style="margin-right:2%;margin-left:2%;">
                    <div class="platform_item_content">企业顾问</div>
                    <div class="platform_item_detail">
                        <p>企业识别系统</p>
                        <p>建设及维护</p>
                    </div>
                </div>
                <div class="platform_item col-md-4 " style="margin-left:0px;">
                    <div class="platform_item_content">区域文化</div>
                    <div class="platform_item_detail">
                        <p>区域文化建设</p>
                        <p>区域识别系统</p>
                        <p>文化衍生产品</p>
                    </div>
                </div>
                <div class="platform_item col-md-4 " style="margin-right:0px;">
                    <div class="platform_item_content">公关策划</div>
                    <div class="platform_item_detail">
                        <p>活动策划</p>
                        <p>会展执行</p>
                    </div>
                </div>
                <div class="platform_item col-md-4 " style="margin-right:2%;margin-left:2%;">
                    <div class="platform_item_content">视觉创意</div>
                    <div class="platform_item_detail">
                        <p>广告、包装、书籍</p>
                        <p>画册等单件设计</p>
                    </div>
                </div>
                <div class="platform_item col-md-4 " style="margin-left:0px;">
                    <div class="platform_item_content">区域文化</div>
                    <div class="platform_item_detail">
                        <p>形象宣传片</p>
                        <p>微电影</p>
                        <p>电子展示设计</p>
                    </div>
                </div>
                <div class="clearfix visible-xs"></div>
            </div>
        </div>
    </div>
</div>


