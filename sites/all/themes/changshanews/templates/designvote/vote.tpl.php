<?php
global $base_path;
$theme_path = $base_path . drupal_get_path('theme', 'changshanews');
$button_value = "投我一票";
$submit_url = $base_path."designvote/submit/";

$result = db_query("SELECT nid FROM node WHERE type = :type", array(':type' => 'ImageWorks'))->fetchAll();

$image_works = array();
foreach ($result as $row) {
    $node = node_load($row->nid);
    $image_work = new stdClass();
    $image_work->nid = $row->nid;
    $image_work->img_name = $node->field_img_name['und'][0]['value'];
    $image_work->img_image = $node->field_img_image['und'][0]['uri'];
    $image_work->img_desc = $node->field_img_desc['und'][0]['value'];
    $image_work->img_owner = $node->field_img_owner['und'][0]['value'];
    $image_works[] = $image_work;
}

$result = db_query("SELECT nid FROM node WHERE type = :type", array(':type' => 'VideoWorks'))->fetchAll();

$video_works = array();
foreach ($result as $row) {
    $node = node_load($row->nid);
    $video_work = new stdClass();
    $video_work->nid = $row->nid;
    $video_work->video_name = $node->field_video_name['und'][0]['value'];
    $video_work->video_path = $node->video_path['und'][0]['value'];
    $video_work->video_desc = $node->field_video_desc['und'][0]['value'];
    $video_work->video_owner = $node->field_video_owner['und'][0]['value'];
    $video_work->video_date = $node->field_video_date['und'][0]['value'];
    $video_works[] = $video_work;
}


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

<div class="design-vote-manin ">
    <p style="text-align:center;"><img alt="" src="<?php print $theme_path; ?>/images/designvote/banner.png"/></p>
    <div class="container" style="max-width:960px;min-width:960px;">
        <div class="row" >
            <div class="mod_zt_6 col-md-12" id="ztu_1">
                <div class="bd">
                    <div class="inner">
                        <div class="zt_c_19" id="ztc_15">
                            <dl class="huakuai">
                                <dt class="">活动背景介绍</dt>
                                <dd style="display: none;">
                                    <div class="xuxian">
                                        <p>为深入学习贯彻党的十八大精神，推进社会主义核心价值体系建设，根据中央和省文明办关于大力开展"讲文明，树新风"公益广告宣传活动的工作要求，为充分发挥公益广告在传递文明、树立形象、引领风尚方面的积极作用，潇湘晨报社与大湘网组织开展《我的美丽湖南》——2013潇湘晨报/大湘网公益广告征集大赛。大赛最终决选出约200幅公益作品进行展览及媒体宣传，以推进公益事业，构建美丽湖南。</p>
                                        <p>"我的美丽湖南"诚挚邀请热爱生活、关注公益，并在设计、创意领域具有一定才能的专业人士、专业艺术院校的莘莘学子以及设计、艺术爱好者们，一同来推动"讲文明、树新风"的积极、健康价值观念的传播，构建我们最美丽的湖南。</p>
                                    </div>
                                </dd>


                                <dt class="mod">评选标准</dt>
                                <dd style="display: block;">
                                    <div class="xuxian">
                                        <p>作品主题鲜明，思想性强，内容健康、创意新颖；元素、色彩构成协调，排列合适；把握平面/视频设计/儿童画构成特征，创意水平较高, 感染力强，综合艺术效果好。</p>
                                        <p>原创性20%：表现是否新颖独特,能否给受众全新的视角和感官刺激，且为作者原创。</p>
                                        <p>感染性20%：是否能在最短的时间内，打动受众，是否具有感染力和震撼力。</p>
                                        <p>艺术性20%：画面艺术效果评估，色彩及构图具有欣赏艺术性。</p>
                                        <p>立意性20%：画面的诉求点准确表达了征集主题，准确传达画面的含义。</p>
                                        <p>传播性20%：画面主题与时俱进地进行创作，贴近生活大众，让观众乐于分享谈论。</p>
                                    </div>
                                </dd>
                                <dt class="">报名投稿</dt>
                                <dd style="display: none;">
                                    <div class="xuxian">
                                        <p>登陆大湘网专题页面或登陆微博@设计长沙下载报名登记表并填写，作品与报名表一同寄送sjcsgy@126.com。</p>
                                        <p>平面作品均采用网上提交形式，无需打印作品。尺寸为A2，存储格式为JPEG，分辨率300dpi，RGB、CMYK模式各一份，投稿作品每件文件大小不超过2M，多个文件的请使用压缩文件打包后，以邮件方式提交。</p>
                                        <p>影视动画作品题材不限，包括动漫在内的各种体裁皆可。片长标准：3分钟以内。器材使用要求：专业摄像机、智能手机或家庭数码摄像机皆可。作品以电子文档形式提交，需符合以下要求：视频文件格式为MP4：像素要求为不少于720×576PIX；用RAR或ZIP软件压缩打包后邮件。</p>
                                        <p>儿童画作品必须使用纸质材料创作并提交原件，通过EMS快递或平邮至潇湘晨报社，作品版面大小为A4、A3、A2尺寸均可。作品背面标注作者姓名和作品名称，如果有拍摄创作花絮也可以一并寄送，以邮件方式提交。参赛者需填写参赛报名表及参赛承诺函，随作品照片一并寄送。</p>
                                    </div>
                                </dd>
                                <dt class="">征集主题与创作要求</dt>
                                <dd style="display: none;">
                                    <div class="xuxian">
                                        <p>我的美丽湖南</p>
                                        <p>"光盘"光荣，从你我做起</p>
                                        <p>低碳改变生活</p>
                                        <p>"光盘"光荣，从你我做起</p>
                                        <p>我爱爸爸、妈妈（其他人均可）</p>
                                        <p>守信为荣、失信为耻</p>
                                        <p>绿色环保、垃圾分类</p>
                                        <p>做好自己，就是做好社会</p>
                                        <p>和你在一起，雅安！</p>
                                    </div>
                                </dd>
                                <dt class="">奖项设置</dt>
                                <dd style="display: none;">
                                    <div class="xuxian">
                                        <p>2013年度公益奖：（1人次）——苹果笔记本电脑一台、香港迪士尼梦幻3日2晚之旅</p>
                                        <p>一等奖：（2人次）:——Minii Pad一台、香港迪士尼梦幻3日2晚之旅</p>
                                        <p>二等奖：（5人次）——香港迪士尼梦幻3日2晚之旅</p>
                                        <p>三等奖：（30人次）价值300元超市消费券一张/人</p>
                                        <p>优秀奖：（100人次）价值100元超市消费券一张/人</p>
                                        <p class="tui">
                                            <img src="http://img1.gtimg.com/hn/pics/hv1/181/203/1380/89786446.jpg"
                                                 width="245" height="165" alt=""/>
                                            <img src="http://img1.gtimg.com/hn/pics/hv1/182/203/1380/89786447.jpg"  alt=""  width="245" height="165" style="margin-left:8px;"/></p>
                                    </div>
                                </dd>
                                <dt class="">活动流程</dt>
                                <dd style="display: none;">
                                    <div class="xuxian">
                                        <p>作品征集时间：2013年4月17日——5月31日</p>
                                        <p>作品评选时间：2013年6月3日——2013年6月7日</p>
                                        <p>作品展览时间：2013年06月15日——2013年06月23日（入围及获奖公示于展览现场）</p>
                                        <p>领奖及公布：6月23日</p>
                                        <p>注：所有时间阶段最终以潇湘晨报与大湘网发布信息为准</p>
                                        <p class="tui">
                                            <img src="http://img1.gtimg.com/hn/pics/hv1/11/204/1380/89786531.jpg"
                                                 width="250" height="165" alt=""/>
                                            <img src="http://img1.gtimg.com/hn/pics/hv1/10/204/1380/89786530.jpg" alt="" width="250" height="165" style="margin-left:8px;"/> </p>
                                    </div>
                                </dd>
                                <dt class="" style="border:none">焦点新闻</dt>
                                <dd style="border: none; display: none;">
                                    <div class="xuxian">
                                        <h4><a href="http://hn.qq.com/a/20130731/014292.htm" target="_blank"><span style="font-size:14px;color:white;">"我的美丽湖南"公益广告大赛颁奖</span></a></h4>
                                        <p>7月29日下午，"我的美丽湖南"潇湘晨报/大湘网公益广告大赛颁奖仪式举行。本次大赛历时三个月，共征集作品700多幅，专家评审们共评选出63幅获奖作品，其中2013年度公益奖1名、一等奖1名、二等奖3名、三等奖18名、优秀奖40名。</p>
                                        <h4><a href="http://hn.qq.com/a/20130710/004312.htm" target="_blank"><span style="font-size:14px;color:white;">“我的美丽湖南”公益广告赛获奖名单公布</span></a></h4>
                                        <p>"我的美丽湖南"潇湘晨报/大湘网公益广告大赛已结束，历时三个月时间，专家评审们从参加作品中评选出63幅获奖作品。本次公益广告大赛吸引了许多艺术爱好者的积极参与，为公益作出自己的贡献，一同来推动"讲文明、树新风"的积极、健康价值观念的传播，构建我们最美丽的湖南。</p>
                                        <p class="tui">
                                            <img src="http://img1.gtimg.com/hn/pics/hv1/228/203/1380/89786493.jpg"
                                                 width="245" height="165" alt=""/>
                                            <img src="http://img1.gtimg.com/hn/pics/hv1/229/203/1380/89786494.jpg"  alt=""  width="245" height="165" style="margin-left:8px;"/></p>
                                    </div>
                                </dd>
                            </dl>
                            <script type="text/javascript">
                                jQuery(".huakuai dt").click(function(){
                                    jQuery(".huakuai dt").removeClass("mod");
                                    jQuery(this).addClass("mod");
                                    jQuery(".huakuai dd").hide();
                                    jQuery(this).next("dd").show();
                                });
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="item-wrapper">
            <div id="item-columns">
                 <?php  foreach($image_works as $image_work):
                     if(empty($image_work->img_image)){
                            $path = $theme_path.'/images/no-image.png';
                        } else {
                            $url = $image_work->img_image;
                            $url = file_create_url($url);
                            $url = parse_url($url);
                            $path = $url['path'];
                        }
                 ?>
                    <div class="pin">
                        <img src="<?php print $path; ?>" alt="" />
                        <p class="vote-p">作者：<?php print $image_work->img_owner; ?></p>
                        <p class="vote-p">作品名：<?php print $image_work->img_name; ?></p>
                        <p><?php print $image_work->img_desc; ?></p>
                        <div>
                            <input type="button" class="vote-button" value="<?php print $button_value; ?>"/>
                            <input type="hidden" value="<?php print $image_work->nid; ?>" class="vote_id"/>
                        </div>
                    </div>
                 <?php endforeach; ?>
                 
            </div>
        </div>
        <div class="row" >

            <div class="mod_zt_6 col-md-12" id="ztu_7">
                <div class="bd"><div class="inner"><div class="zt_c_19" id="ztc_20">
                            <div class="biakn">
                                <p class="biaotix"><img src="http://mat1.gtimg.com/hn/zhangfeng/mlhn/biaoti_04.png"></p>
                                <ul>
                                    <?php  foreach($video_works as $video_work):?>
                                    <li>
                                        <div class="ship">
                                            <object id="flashplayer" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="550" height="380">
                                                <param name="movie" value="http://static.video.qq.com/TencentPlayer.swf">
                                                <param name="allowFullScreen" value="true">
                                                <param name="allowScriptAccess" value="always">
                                                <param name="allownetworking" value="all">
                                                <param name="flashvars" value="<?php print $video_work->video_path ?>">
                                                <embed type="application/x-shockwave-flash" src="http://static.video.qq.com/TencentPlayer.swf"
                                                       width="550" height="380" id="flashplayer" name="flashplayer" quality="high"
                                                       allowscriptaccess="always" allownetworking="all" allowfullscreen="true"
                                                       flashvars="<?php print $video_work->video_path; ?>">
                                            </object>
                                        </div>
                                        <div class="wenzidhus">
                                            <h4>
                                            <p> 作品名：<?php print $video_work->video_name; ?></p>
                                            <p> 作者：<?php print $video_work->video_owner; ?></p>
                                                创意说明：</h4>
                                            <p><?php print $video_work->video_desc; ?></p>
                                        </div>
                                    </li>
                                    <?php endforeach; ?>
                                    <?php require_once 'vote-video-sample.tpl.php'; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>
