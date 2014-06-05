<?php
$pwList = array();
$pwList[] = preparePW('郭谷斌','<p>潇湘晨报社总编辑</p>');
$pwList[] = preparePW('黄建成','<p>上海世博会中国馆设计总监</p><p>中央美术学院城市学院副院长，教授</p>');
$pwList[] = preparePW('韩家英','<p>著名设计师、中央美院客座教授</p><p>国际AGI会员</p>');
$pwList[] = preparePW('何人可','<p>德国红点奖终审评委</p><p>湖南大学设计艺术学院院长，教授</p>');
$pwList[] = preparePW('何人可','<p>德国红点奖终审评委</p><p>湖南大学设计艺术学院院长，教授</p>');
$pwList[] = preparePW('贾丽军','<p>国际艾菲奖</p><p>嘎纳、纽约、伦敦三大广告节评审</p>');
$pwList[] = preparePW('李少波','<p>湖南师范大学美术学院副院长、教授</p>');
$pwList[] = preparePW('李少波','<p>湖南师范大学美术学院副院长、教授</p>');
$pwList[] = preparePW('彭旭峰','<p>长沙轨道交通集团 董事长</p>');
$pwList[] = preparePW('尹云从','<p>中国国际广告界长城奖（创意奖）终审评委</p><p>黄河奖（公益奖）终审评委</p>');


function preparePW($name,$desc,$imagePath=""){
    $pw = new stdClass();
    $pw->name = $name;
    $pw->desc = $desc;
    $pw->img_image = $imagePath;
    return $pw;
}
?>

<div  class="vote">
    <div class="vote_item">注：按姓氏首字母排序</div>
    <div id="item-wrapper">
        <div class="team_member_imgs" style="border-top:0px;">
                 <?php  foreach($pwList as $pw):
                     if(empty($pw->img_image)){
                            $path = $theme_path.'/images/no-image.png';
                        } else {
                            $url = $pw->img_image;
                            $url = file_create_url($url);
                            $url = parse_url($url);
                            $path = $url['path'];
                        }
                 ?>
                    <div class="team_member_img  col-md-4">
                            <img src="<?php print $path; ?>" alt="" />
                            <div style="color:white;padding-top:5px;"><?php print $pw->name; ?></div>
                            <div><?php print $pw->desc; ?></div>
                    </div>
                 <?php endforeach; ?>
            <div style="clear:both"></div>
            </div>
        </div>
</div>