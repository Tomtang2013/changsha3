<?php
global $base_path;
$about_company_path = $base_path . "about/company";
$work_summary = $base_path . "work/summary";
$news_service = $base_path . "news_service/platform";
$news = $base_path .'news/summary';
?>

<script type="text/javascript">
    jQuery(function(){
        jQuery('.nav_link').find('li').mouseover( function(){
            jQuery(this).css("background-color","yellow");
            jQuery(this).find('a').css("color","black");
        });
        jQuery('.nav_link').find('li').mouseout( function(){
            jQuery(this).css("background-color","black");
            jQuery(this).find('a').css("color","white");
        });
    });
</script>
<!--[if IE 8]>
<style>
    .header_left{ float:left;}
    .header_right{ float:right;}
</style>
<![endif]-->

<div class="first_header ">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 header_left" >
                    <ul style="margin-top:20px;">
                        <li> <a href="<?php print $base_path?>">设计长沙</a></li>
                        <li> &nbsp;|&nbsp;<a href="<?php print $base_path?>">潇湘晨报品牌创意中心</a></li>
                    </ul>
                </div>
                <div class=" col-md-6 col-md-6 header_right"  >
                     <ul class="nav_link" >
                        <li > <a  style="padding-left:12px;" href="<?php print $about_company_path?>">关于</a></li>
                        <li><a  style="padding-left:12px;" href="<?php print $news?>">动态</a> </li>
                        <li><a  style="padding-left:12px;" href="<?php print $work_summary?>">工作</a> </li>
                        <li style="border-right:1px solid #333;"><a  style="padding-left:12px;"  href="<?php print $news_service?>">服务</a> </li>
                    </ul>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
</div>
