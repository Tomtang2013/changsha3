<?php 
 global $base_path;
 $theme_path = $base_path.drupal_get_path('theme', 'changshanews');
?>
<script  type="text/javascript">
    jQuery(function(){
		hideTab();
        showTabByIdx('#tab1');
        jQuery('.vote_design_main_li').each(function(){
            jQuery(this).find('a').click(function(){
                var href = jQuery(this).attr('href');
                hideTab();
                showTabByIdx(href);
                jQuery('html, body').animate({
                    scrollTop: 650
                }, 0.1);
				jQuery('.vote_design_main_li').find('a').find('img').each(function(){
					var path = jQuery(this).attr('src');
					path = path.replace(/1/, "2");
					jQuery(this).attr('src',path);
				});
				
				var img_path = jQuery(this).find('img').attr('src');
				img_path = img_path.replace(/2/, "1");
				jQuery(this).find('img').attr('src',img_path);
				
            });
        });
    });
    
    function hideTab(){
        jQuery('.vote-tab').css('display','none');
    } 
    
    function showTabByIdx(idx){
        jQuery(idx).show();
    }
</script>

<div id="vote_design_main" class="vote_design_main">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-3">
                <ul style="float:right; width: 100%;" id="vote_ul">
                    <li class="vote_design_main_li"><a href="#tab1"><img src="<?php print $theme_path;?>/images/designvote/a2.png" alt=""/></a></li>
                    <li class="vote_design_main_li"><a href="#tab2"><img src="<?php print $theme_path;?>/images/designvote/b2.png" alt=""/></a></li>
                    <li class="vote_design_main_li"><a href="#tab3"><img src="<?php print $theme_path;?>/images/designvote/c2.png" alt=""/></a></li>
                    <li class="vote_design_main_li"><a href="#tab4"><img src="<?php print $theme_path;?>/images/designvote/d2.png" alt=""/></a></li>
                    <li class="vote_design_main_li"><a href="#tab5"><img src="<?php print $theme_path;?>/images/designvote/e2.png" alt=""/></a></li>
                    <li class="vote_design_main_li"><a href="#tab6"><img src="<?php print $theme_path;?>/images/designvote/f2.png" alt=""/></a></li>
                </ul>
                <ul style="float:right; width: 100%;">
                    <li class="vote_design_main_li"><img src="<?php print $theme_path;?>/images/designvote/g2.png" alt=""/></li>
                </ul>
            </div>
            <div class="col-md-9 col-sm-9" id="design_vote_content">
                    <div id="tab1" class="vote-tab"><?php require_once 'vote_hdgk.tpl.php'; ?></div>
                    <div id="tab2" class="vote-tab"><?php require_once 'vote_csfs.tpl.php'; ?></div>
                    <div id="tab3" class="vote-tab"><?php require_once 'vote_dspw.tpl.php'; ?></div>
                    <div id="tab4" class="vote-tab"><?php require_once 'vote_jpsz.tpl.php'; ?></div>
                    <div id="tab5" class="vote-tab"><?php require_once 'vote_zpzs.tpl.php'; ?></div>
                    <div id="tab6" class="vote-tab"><?php require_once 'vote_wjhg.tpl.php'; ?></div>
            </div>
        </div>

    </div>
</div>

