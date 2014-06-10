<?php
$img_path = $theme_path.'/images/designvote/pw/';

$pwList = array();
$pwList[] = preparePW('陈绍华','<p>著名设计师，国际平面设计师联盟AGI会员</p>',$img_path.'csh.jpg');
$pwList[] = preparePW('黄建成','<p>上海世博会中国馆设计总监，中央美术学院城市学院副院长、教授</p>',$img_path.'hjc.jpg');
$pwList[] = preparePW('何人可','<p>德国红点奖终审评委，湖南大学设计艺术学院院长、教授</p>',$img_path.'hrk.jpg');
$pwList[] = preparePW('贾丽军','<p>国际艾菲奖•大中华区执行主席，戛纳、纽约、伦敦三大广告节评审</p>',$img_path.'jlj.jpg');
$pwList[] = preparePW('李少波','<p>湖南师范大学美术学院副院长，教授</p>',$img_path.'lsb.jpg');
$pwList[] = preparePW('龙  博','<p>中南出版传媒集团副总经理，潇湘晨报董事长</p>',$img_path.'lb.jpg');
$pwList[] = preparePW('彭旭峰','<p>长沙市轨道交通集团董事长</p>',$img_path.'pxf.jpg');
$pwList[] = preparePW('尹云从','<p>中国国际广告节长城奖(创意奖)终审评委，黄河奖(公益奖)终审评委</p>',$img_path.'yyc.jpg');



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
                            $path = $pw->img_image;
                        } else {
                            $url = $pw->img_image;
                            $url = file_create_url($url);
                            $url = parse_url($url);
                            $path = $url['path'];
                        }
                 ?>
                    <div class="team_member_img  col-md-4">
                            <img src="<?php print $path; ?>" alt="" style="width:195px;height:283px;" />
                            <div style="color:black;padding-top:5px;"><?php print $pw->name; ?></div>
                            <div><?php print $pw->desc; ?></div>
                    </div>
                 <?php endforeach; ?>
            <div style="clear:both"></div>
            </div>
        </div>
</div>