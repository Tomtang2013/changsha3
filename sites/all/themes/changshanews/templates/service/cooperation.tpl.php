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

<div class="service_design_header service_cooperation_header_bg super-fine-black" id="platform_header">
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
<div id="design_main" class="design_main  super-fine-black" >
    <div class="container" >
        <div class="row ">
            <div class="right col-lg-8 col-md-8 col-xs-8"></div>
            <div class="left col-lg-3  col-md-3 col-xs-3"></div>
        </div>
        <div class="row ">
            <div class="right col-lg-8 col-md-8 col-xs-8">
                <div class="right_content">
                    潇湘晨报、晨报周刊、红网、快乐老人报、腾讯大湘网、长啦网、长株潭报等
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
                    <div><p> 国家新闻出版总署、湖南省委宣传部</p></div>
                </div>
            </div>
            <div class="left col-lg-3  col-md-3 col-xs-3">
                <div class="left_content">
                       政府
                </div>
            </div>
        </div>

        <div class="row ">
            <div class="right col-lg-8 col-md-8 col-xs-8">
                <div class="right_content">
                    <div><p> 房产：恒嘉地产（泊富商业广场）、湘江锦绣、湘域相遇等</p>
                    <p> 快消产品：酒鬼酒、金健米业、邵阳大曲、黄山头、泸州老窖、烟京啤酒等</p>
                    <p> 汽车及经销商：广汽本田、比亚迪、仁孚汽车、永通汽车等</p>
                    <p> 银行：长沙银行、中国农业银行、中信银行、华融湘江银行、北京银行等</p>
                    <p> 其它：中南出版传媒集团、中联重科股份有限公司、加加集团股份有限公司、湖南顺鑫干混砂浆有限公司、海上1930茶餐厅等</p>
                    </div>
                </div>
            </div>
            <div class="left col-lg-3  col-md-3 col-xs-3">
                <div class="left_content">
                       企业
                </div>
            </div>
        </div>
        <div class="row ">
            <div class="right col-lg-8 col-md-8 col-xs-8">
                <div class="right_content">
                    湖南省森林植物园、宁乡旅游局等
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
                    长沙国际车展、橘洲国际音乐节、新年音乐会、旅游博览会等
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
