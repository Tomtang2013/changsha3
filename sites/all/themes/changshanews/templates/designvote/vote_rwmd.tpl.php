<?php

?>

<script src="<?php print $theme_path; ?>/js/Qfast.js" type="text/javascript"></script>

<script  type="text/javascript">
    var submit_url = '<?php print $submit_url;?>';
    jQuery(function(){
        jQuery('.vote-button').each(function(){
            jQuery(this).click(function(){
                var data = {};
                var vote_id = jQuery(this).next().val();
                var ulr = submit_url+ vote_id;
                jQuery.post(ulr,data,function(response){
                    console.log(response);
                    console.log(response.status);
                    console.log(response["message"]);
                    jQuery.fancybox({
                        'modal': false,
                        'content': '<div style="width:300px;">\n\
                                    <p style="font-size:20px;padding:50px 10px 50px 10px">'+response["message"]+'</p></div>'
                    });
                },'json');
            });
        });
    });
    
</script>

<div class="design-vote-main vote">
<p style='font-size:30px;color:blue;'>组委会推荐奖-优秀组织奖:</p>    

<p>湖南师范大学美术学院          湖南商学院设计艺术学院</p>
<p>湖南工业职业技术学院          星期天美术培训学校</p>
<p>理想美术培训中心</p>

<p style="font-size:18px;color:blue;">金麓奖（团体类）:</p>
<p>湖南古湘广告传播有限公司          长沙达观文化传播有限公司</p>
<p>长沙耕传广告有限公司              长沙风和日丽广告有限公司</p>
<p>长沙天橙广告策划有限公司          长沙远行品牌设计</p>

<p style="font-size:18px;color:blue;">金麓奖（个人类）</p>
<p>作者：王頔 </p>
<p>作品名：可以给我一个拥抱吗</p>

<p style="font-size:18px;color:blue;">银麓奖:</p>
<p>作者：宋    庆     作品名：SOS -Global warming</p>
<p>作者：刘    骏     作品名：喘不过气</p>
<p>作者：王崛起     作品名：别成为马路杀手</p>

<p style="font-size:18px;color:blue;">铜麓奖:</p>
<p>作者：李河谕     作品名：和平之花</p>
<p>作者：苏鹏程     作品名：珍惜相聚</p>
<p>作者：夏奇、张中阳、李昌勃     作品名：瓶中窥路</p>

    
<h2 styl='Microsoft YaHei,"\5B8B\4F53",Arial,HELVETICA!Important'>入围名单</h2>
<p style="font-size:18px;color:blue;">(公益广告类)</p>
<p>程清青—— 抵制雾霾</p>
<p>吴伟发 罗政 屠义涛—— 透明人</p><p>夏奇——“美丽”的水果
</p>
<p>杨慧哲、张鋆——人与自然
</p>
<p>陈竑——STOP AIDS
</p>
<p>朱元婷—— 橘子洲头 湘江幽游 星城怪兽
</p>
<p>张娜——地铁，很长沙
</p>
<p>曹钰——关注交通安全
</p>
<p>曾凡虎——VISION
</p>
<p>陈厚——锯下留情，救绿存木
</p>
<p>陈利、刘峥——扑克牌篇
</p>
<p>陈娜娜——别让生命止于毒品
</p>
<p>邓晴——阅读与能量
</p>
<p>陈子阳——拒绝食用转基因食品
</p>
<p>周统、黄伟——和谐共生
</p>
<p>曾凡虎——囚钱
</p>
<p>周统、舒信——老家
</p>
<p>樊婷婷——学•生
</p>
<p>程清青—— 寻找回家的路
</p>
<p>戴锦文——倒下去是水，收起来是爱
</p>
<p>邓晴 ——海洋新物种
</p>
<p>李明亮——中国气节
</p>
<p>陈竑——Life away
</p>
<p>邓心怡——Narcotic Drugs，NO！
</p>
<p>范春天——保护动物
</p>
<p>高婵——污染的美味
</p>
<p>钱浩——食品安全
</p>
<p>何玲——中国梦之节日的味道
</p>
<p>卢娟娟——反对儿童性侵
</p>
<p>侯静娴 —— 甜蜜的陷阱
</p>
<p>张勇——水是生命之源
</p>
<p>黄勇－伤口篇
</p>
<p>陈竑——节能环保——从身边做起
</p>
<p>姜华——地铁绿心
</p>
<p>蒋昊 ——反腐倡廉系列广告
</p>
<p>蒋妍巧——请保护我们身边的朋友
</p>
<p>李河谕——Discovery FREEDOM
</p>
<p>卢剑飞——关注食品安全
</p>
<p>陈厚——请把握好文明的“尺”度
</p>
<p>吴思娴，王莹，周芹——孝心系列广告
</p>
<p>吴伟幸——文明篇
</p>
<p>黄勇－死神篇
</p>
<p>李明亮——把青山绿水留给子孙
</p>
<p>梁鹏——幸福地铁
</p>
<p>钱浩——治理雾霾，拒做吸尘器
</p>
<p>陈厚——新时代纹身？系列
</p>
<p>刘骏——喘不过气
</p>
<p>朱碧伟——锦绣潇湘 星城绽放
</p>
<p>刘瑶——拒绝语言暴力
</p>
<p>卢剑飞——我们是一家人-手指篇
</p>
<p>罗成——你伤害的不只是你自己
</p>
<p>张勇——拒绝雾霾系列
</p>
<p>李河谕——和平之花
</p>
<p>罗溪溪——中国梦
</p>
<p>彭佼——禁
</p>
<p>钱浩——警惕网络陷阱
</p>
<p>舒璐——埋于霾
</p>
<p>苏鹏程——珍惜相聚
</p>
<p>周德政——通则不痛
</p>
<p>滕飞—塑料笼
</p>
<p>王宏宇——暂无存货
</p>
<p>卢剑飞——生生不息
</p>
<p>王崛起—别成为马路杀手
</p>
<p>吴思娴，王莹，周芹——城市噪音系列广告
</p>
<p>高婵——污染的水
</p>
<p>吴伟幸——成语篇
</p>
<p>吴宇——意气风发
</p>
<p>夏奇、张中阳、李昌勃——瓶中窥路
</p>
<p>谢浪——Dream
</p>
<p>严盈盈——Xiang—衣食住行
</p>
<p>杨春华——潇湘八景
</p>
<p>王鹏远——绿色城市
</p>
<p>张而旻——SUBWAY LIFE.LIFE BETTER
</p>
<p>张燕飞——梦想
</p>
<p>张勇——禁止活摘器官系列
</p>
<p>张孜颖——who's next
</p>
<p>刘洁——今天剩下的明天可能又会回到你桌上
</p>
<p>赵吉亮——食味长沙系列
</p>
<p>周德政——毒亡
</p>
<p>朱碧伟——东方红
</p>
<p>朱鸿琳——黑金</p>


<p style="font-size:18px;color:blue;">(公益微电影类)</p>
<p>周统——友善
</p>
<p>黄倩、陈冰洁、刘玭、李群珍、魏雅玲、黄婧——最后的最后
</p>
<p>刘美菁、龚倩蓉、陈艳琳、汤颖琳、欧阳雅琴——家，永远的港湾
</p>
<p>宋庆——SOS -Global warming全球变暖
</p>
<p>王頔——可以给我一个拥抱吗
</p>
<p>姚旭、黄晓豪、陈祎鑫——守候
</p>
<p>周宸蔚——为了与更美的世界相遇</p>

<p style="font-size:18px;color:blue;">(儿童画入围名单)</p>
<p>陈洪旅, 李佳怡, 李若溪, 黄琪杰, 李 疑, 刘 颖, 钟行健, 莫子阳</p>
<p>沈川景, 苏志健, 谈 心, 王奕睿, 熊益明, 周卜拉, 杨歆月, 周星志</p>
<p>乐 乐, 高煜景, 段雨若, 范小雨, 李彦乐, 欧阳龙棂, 许清渠, 曹紫烟</p>
<p>堵海州, 张晋铭</p>
</div>
