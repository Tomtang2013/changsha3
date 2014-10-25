<?php
global $base_path;
$about_company_path = $base_path . "about/company";
$work_summary = $base_path . "work/summary";
$news_service = $base_path . "news_service/platform";
$news = $base_path .'news/summary';
$serch_url = $base_path .'header/search/';
$theme_path = $base_path.  drupal_get_path('theme', 'changshanews');

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
        
        jQuery('#search-btn').click(function(){
            var url = '<?php print $serch_url;?>';
            var key = jQuery('#search-box').val();
            console.log();
            window.location.href = url+key;
        });
    });
    
    

//$(function(){
//    alert('aaaaaaaaaa');
//});
</script>

<!--[if lt IE 9]>
    <link href="<?php print $theme_path;?>/css/ie8/work.css" rel="stylesheet" type="text/css"/>
<![endif]-->

<div class="first_header navbar-fixed-top" style="min-width: 780px;">
        <div class="container">
            <div class="row">
                <div class=" col-sm-4 col-md-4 header_left"  style="max-width: 390px;" >
                    <ul style="margin-top:20px;">
                        <li> <a href="<?php print $base_path?>">设计长沙</a></li>
                        <li> &nbsp;|&nbsp;<a href="<?php print $base_path?>">潇湘晨报品牌创意中心</a></li>
                    </ul>
                </div>
                <div class="col-sm-2 col-md-2" style="max-width: 200px;padding-top: 15px;padding-left: 0px;padding-right:0px;" >
                        <input type="text" id="search-box" style="width:60%" >
                        <input id="search-btn" type="button" value="检索!">
                 </div>
                <div class="col-sm-4  col-sm-offset-2 col-md-4 col-md-offset-2 header_right"  class="max-width: 300px;" >
                     <ul class="nav_link" >
                        <li > <a  style="padding-left:12px;" href="<?php print $about_company_path?>">关于</a></li>
                        <li><a  style="padding-left:12px;" href="<?php print $news?>">动态</a> </li>
                        <li><a  style="padding-left:12px;" href="<?php print $work_summary?>">工作</a> </li>
                        <li style="border-right:1px solid #333;"><a  style="padding-left:12px;"  href="<?php print $news_service?>">服务</a> </li>
                    </ul>
                </div>
                
            </div>
        </div>
</div>
<div style="margin-bottom:60px;"></div>