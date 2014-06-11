<?php
$img_path = $theme_path.'/images/designvote/pw/';

$pwList = array();


//$pwList[] = preparePW('陈绍华','<p>著名设计师，国际平面设计师联盟AGI会员</p>',$img_path.'csh.jpg');
$pwList[] = preparePW('黄建成','<p>上海世博会中国馆设计总监，中央美术学院城市学院副院长、教授</p>',$img_path.'hjc.jpg');
$pwList[] = preparePW('何人可','<p>德国红点奖终审评委，湖南大学设计艺术学院院长、教授</p>',$img_path.'hrk.jpg');
$pwList[] = preparePW('贾丽军','<p>国际艾菲奖•大中华区执行主席，戛纳、纽约、伦敦三大广告节评审</p>',$img_path.'jlj.jpg');
$pwList[] = preparePW('李少波','<p>湖南师范大学美术学院副院长，教授</p>',$img_path.'lsb.jpg');
$pwList[] = preparePW('龙  博','<p>中南出版传媒集团副总经理，潇湘晨报董事长</p>',$img_path.'lb.jpg');
$pwList[] = preparePW('莫康孙','<p>麦肯光明广告（中国）董事长，戛纳、卡里奥、纽约广告节评审</p>',$img_path.'mks.jpg');
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
	
		<div class="row">
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
							<div class="team_member_img col-md-4 " >
								<div style="" >
									<img src="<?php print $path; ?>" alt="" style="width:195px;height:283px;" />
									<div style="color:black;padding-top:5px;"><?php print $pw->name; ?></div>
									<div><?php print $pw->desc; ?></div>
								</div>
							</div>
						 <?php endforeach; ?>
					
				</div>
			</div>
		</div>
		<div>
			<hr>
			<p style="font-size:18px;color:blue;">创意节征集大赛投稿评奖评判标准</p>
			<p>创意性20%：表现是否新颖独特,能否给受众全新的视角和感官刺激，且为作者原创。</p> 
			<p>艺术性30%：画面艺术效果评估，色彩及构图具有欣赏艺术性。 </p>
			<p>教育性30%：画面的诉求点准确表达了征集主题，具有社会教育意义，传递正能量。 </p>
			<p>传播性20%：画面主题与时俱进地进行创作，贴近生活大众，让观众乐于分享谈论。</p>

		
		</div>
	
</div>