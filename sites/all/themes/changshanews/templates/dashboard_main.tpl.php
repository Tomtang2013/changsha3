<?php
    global $base_path;
    $bg1_path = '#';//$base_path.'work/detail/24';
    $bg2_path = $base_path.'work/detail/11';
    $bg3_path = $base_path.'work/detail/10';
    $bg4_path = $base_path.'work/detail/24';
?>
<script type="text/javascript">

    jQuery(function(){
            jQuery('#cs_nav').localScroll(800);
            jQuery('.small_log').parallax("50%", 1);
            jQuery('#dashboard_img1').parallax("50%", 0.2);
            jQuery('#dashboard_img2').parallax("50%", 0.3);
            jQuery('#dashboard_img3').parallax("50%", 0.2);
            jQuery('#dashboard_img4').parallax("50%", 0.3);

            jQuery('.case ').find('a').mouseover( function(){
                  jQuery(this).css("background-color",'rgba(255, 255, 0, 0.75)');
            });

            jQuery('.case ').find('a').mouseout( function(){
                  jQuery(this).css("background-color",'rgba(255, 255, 255, 0.75)');
            });
    });
</script>

<ul id="cs_nav">
    <li  class="case " style="display: list-item;"><a href="#dashboard_img1" class="nav01">aa</a></li>
    <li class="case " style="display: list-item;"><a href="#dashboard_img2" class="nav02">bb</a></li>
    <li class="case " style="display: list-item;"><a href="#dashboard_img3" class="nav03">cc</a></li>
    <li class="case " style="display: list-item;"><a href="#dashboard_img4" class="nav04">dd</a></li>
</ul>

<div class="dashboard_main">
    <div class="dashboard_img dashboard_img1" id="dashboard_img1">
         <div class="story">
            <a href="<?php print $bg1_path;?>">
                <div class=" small_log1" style="background-position: 90% 220px;">
                </div>
            </a>
        </div>
    </div>
    <div class="dashboard_img dashboard_img2" id="dashboard_img2">
        <div class="story">
                <a href="<?php print $bg2_path;?>">
                <div class=" small_log2" style="background-position: 85% 220px;">
<!--                    <a href="#" style="min-width:90px;min-height:130px;margin-left: 80%;margin-top: 100px;"> aaa </a>-->
                </div>
                </a>
        </div>
    </div>
    <div class="dashboard_img dashboard_img3" id="dashboard_img3" style="z-index:300;">
        <div class="story">
            <a href="<?php print $bg3_path;?>">
            <div class=" small_log3" style="background-position: 20% 200px;">
            </div>
            </a>
<!--            <a href="#" class="small_log"><img class="  small_log3" src="<?php print drupal_get_path('theme', 'changshanews'); ?>/images/main_image/dashboard_logo3.png"  alt=""/></a>-->
        </div>
    </div>
    <div class="dashboard_img dashboard_img4" id="dashboard_img4">
        <div class="story">
            <a href="<?php print $bg4_path;?>">
            <div class=" small_log4" style="background-position: 75% 200px;">
                
            </div>
            </a>
<!--            <a href="#" class="small_log"><img class=" small_log4" src="<?php print drupal_get_path('theme', 'changshanews'); ?>/images/main_image/dashboard_logo4.png"  alt=""/></a>-->
        </div>
    </div>
</div>
