<?php
    global $base_path;
//    scripts[] = js/fancybox/jquery.mousewheel-3.0.4.pack.js
//scripts[] = js/fancybox/jquery.fancybox-1.3.4.pack.js
?>

<script type="text/javascript" src="<?php print $base_path.drupal_get_path('theme', 'changshanews'); ?>/js/fancybox/jquery.fancybox-1.3.4.js"></script>
<link rel="stylesheet" type="text/css" href="<?php print $base_path.drupal_get_path('theme', 'changshanews'); ?>/js/fancybox/jquery.fancybox-1.3.4.css" media="screen" />
<script type="text/javascript">
     jQuery(function(){
         jQuery("a#weixin").fancybox({
              helpers : {
               'overlayColor'             :        '#ffffff'
              } // helpers
            }); // fancybox
     });
</script>



<div class="news_footer">
    <div class="container">
        <div class="row">
            <div class="news_footer_contact col-md-8 col-sm-6">
                <div style="float:left; display:inline-block;"><div class="footer_item">联系方式</div></div>
                <div  style="float:left; display:inline-block;">
                    <div style="float:left;padding-right: 10px;">地址：中国 长沙市韶山南路258号</div>
                    <div style="float:left;padding-right:  10px;">邮编：410004</div>
                    <div style="float:left;padding-right : 10px;">电话：0731-85019672 85015669</div>
                    <div style="clear:left;padding-right : 10px;">邮箱：fm-bo@foxmail.com</div>
                </div>
            </div>
            <div class="news_footer_partner col-md-4 col-sm-6">
                <div>中南出版传媒集团</div>
                <div>潇湘晨报传媒经营有限公司</div>
                <div>潇湘晨报品牌创意中心</div>
            </div>
            
        </div>
        <div class="row">
            <div class="friend_link  col-md-6 col-sm-4">
                    <div class="footer_item" style="float:left;">友情链接</div>
                    <div class="footer_item"><a href="http://www.zncmjt.com/"><img class="friend_link_img" style=" width: 50px;height: 29px;" src="<?php print $base_path.drupal_get_path('theme', 'changshanews'); ?>/images/footer/group01.png" alt=""></a></div>
                    <div class="footer_item"><a href="http://www.xxcb.cn/"><img class="friend_link_img" style=" width: 80px;height: 29px;" src="<?php print $base_path.drupal_get_path('theme', 'changshanews'); ?>/images/footer/group02.png" alt=""></a></div>
                    <div class="footer_item"><a href="http://www.ggda365.com/" style="color:yellow;font-size:14px;">广州平面设计师联盟（GGDA）</a></div>
            </div>
            <div class="new_media  col-md-4 col-sm-6">
                <div class="footer_item">新媒体</div>
                <div class="footer_item"><a href="http://weibo.com/ddcs0319/home?wvr=5&c=spr_web_360_hao360_weibo_t002"><img class="new_media_img" src="<?php print $base_path.drupal_get_path('theme', 'changshanews'); ?>/images/footer/wb.png" alt=""></a></div>
                <div class="footer_item"><a id="weixin" href="<?php print $base_path.drupal_get_path('theme', 'changshanews'); ?>/images/footer/erweima.jpg"><img class="new_media_img" src="<?php print $base_path.drupal_get_path('theme', 'changshanews'); ?>/images/footer/wx.png" alt=""></a></div>
                <div class="footer_item"> <a href=""><img class="new_media_img" src="<?php print $base_path.drupal_get_path('theme', 'changshanews'); ?>/images/footer/facebook.png" alt=""></a></div>
                <div class="footer_item"><a href=""><img class="new_media_img" src="<?php print $base_path.drupal_get_path('theme', 'changshanews'); ?>/images/footer/twritter.png" alt=""></a></div>
            </div>
        </div>
        <div class="row">
            <div style="color:yellow;
                 padding:30px 20px 0px 68px;line-height:24px;"> 
                <a href="http://www.beianbeian.com/search/design-changsha.com" style="color:yellow;">湘ICP备14002929号-1</a> | 潇湘晨报品牌创意中心 | @2014 design-changsha.com</div>
           
        </div>
    </div>

</div>
<div id="baidu">
<script type="text/javascript">
var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F1f9d2a7349c2da46926d0b46ed9312d1' type='text/javascript'%3E%3C/script%3E"));

  jQuery(function(){
      jQuery('#baidu').find('a').hide();
    });
</script>
</div>
