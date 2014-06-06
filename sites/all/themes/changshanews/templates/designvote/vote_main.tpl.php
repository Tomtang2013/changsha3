<?php ?>
<script  type="text/javascript">
    jQuery(function(){
        hideTab();
        showTabByIdx('#tab1');
        
        jQuery('.vote_design_main_li').each(function(){
            jQuery(this).find('a').click(function(){
                var href = jQuery(this).attr('href');
                 hideTab();
                 showTabByIdx(href);
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
                <ul style="float:right; width: 100%;">
                    <li class="vote_design_main_li"><a href="#tab1">活动概括</a></li>
                    <li class="vote_design_main_li"><a href="#tab2">参赛方式</a></li>
                    <li class="vote_design_main_li"><a href="#tab3">大赛评委</a></li>
                    <li class="vote_design_main_li"><a href="#tab4">奖品设置</a></li>
                    <li class="vote_design_main_li"><a href="#tab5">作品展示</a></li>
                    <li class="vote_design_main_li"><a href="#tab6">往届回顾</a></li>
                </ul>
                <ul style="float:right; width: 100%;">
                    <li class="vote_design_main_li">下载专区</li>
                </ul>
            </div>
            <div class="col-md-9 col-sm-9">
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

