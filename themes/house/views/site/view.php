<link href="/themes/house/css/xinjia.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="new/js/tFocus2.js"></script>
<style>
.mydiv {
background-image:url(/themes/house/images/yuyuebf.png);
text-align: center;
line-height: 40px;
font-size: 12px;
font-weight: bold;
z-index:99;
width: 495px;
height: 400px;
left:40%;/*FF IE7*/
top: 20%;/*FF IE7*/
margin-left:-150px!important;/*FF IE7 该值为本身宽的一半 */
margin-top:-60px!important;/*FF IE7 该值为本身高的一半*/
margin-top:0px;
position:fixed!important;/*FF IE7*/
position:absolute;/*IE6*/
_top:       expression(eval(document.compatMode &&
            document.compatMode=='CSS1Compat') ?
            documentElement.scrollTop + (document.documentElement.clientHeight-this.offsetHeight)/2 :/*IE6*/
            document.body.scrollTop + (document.body.clientHeight - this.clientHeight)/2);/*IE5 IE5.5*/

}
.mydiv .guanbi{ width:475px; height:20px; padding-right:20px;text-align:right;}
.mydiv .guanbi a{ color:#FFFFFF; font-size:14px; text-decoration:none}
.bgbgbg {
width: 100%;
height: 100%;
left:0;
top:0;/*FF IE7*/
filter:alpha(opacity=50);/*IE*/
opacity:0.5;/*FF*/
z-index:1;
position:fixed!important;/*FF IE7*/
position:absolute;/*IE6*/
_top:       expression(eval(document.compatMode &&
            document.compatMode=='CSS1Compat') ?
            documentElement.scrollTop + (document.documentElement.clientHeight-this.offsetHeight)/2 :/*IE6*/
            document.body.scrollTop + (document.body.clientHeight - this.clientHeight)/2);/*IE5 IE5.5*/

}
</style>
<script type="text/javascript">
function showDiv(){
document.getElementById('popDiv').style.display='block';
document.getElementById('bg').style.display='block';
}

function closeDiv(){
document.getElementById('popDiv').style.display='none';
document.getElementById('bg').style.display='none';
}

</script>
<script type="text/javascript" src="/themes/house/js/jquery-1.9.1.js"></script>
<script>
$(document).ready(function(){
       //回到头部
      $(".fh").click(function(){
         $("html,body").animate({scrollTop:0}, 250)
         ;//100为滚动条的位置，1000为滚动的时延
       });
	   
       //回到头部浮动效果
		$(document).ready(function() {
				var fd=$(".topbox").offset().top;
				$(window).scroll(function(){
					var jtb=$(this).scrollTop();
					if(jtb>=fd){
						$(".topbox").addClass("fhone")
					}
					else{
						$(".topbox").removeClass("fhone")			
					}	
				 });
		   });
		   
	  //top右侧弹出
	  $(".topone").mouseover(function(){
	      $(this).find(".back").show();
	  });
	  $(".topone").mouseout(function(){
	      $(this).find(".back").hide();
	  });
		   
       //浮动导航效果
		$(document).ready(function() {
				var jl=$(".nav").offset().top;
				$(window).scroll(function(){
					var djl=$(this).scrollTop();
					if(djl>=jl){
						$(".nav").addClass("navfd");
					}
					else{
						$(".nav").removeClass("navfd")			
					}	
				 });
		   });		   
		   
//导航下拉弹出
$(document).ready(function(){
   $(".navlist").mouseover(function(){
        $(this).find(".nav_up").addClass("on_a")
        $(this).find(".navtcbox").show();
   })
   $(".navlist").mouseout(function(){
        $(this).find(".nav_up").removeClass("on_a")
        $(this).find(".navtcbox").hide();
   })
   
})	

//搜索条件下拉
$(document).ready(function(){

   $(".syss_xltj").mouseover(function(){
        $(this).find(".syss_xltjdown").show();
   })
   $(".syss_xltj").mouseout(function(){
        $(this).find(".syss_xltjdown").hide();
   })
 //搜索条件删除  
   $(".fyss_tjsc a").click(function(){
       $(".fyss_tjqr").empty();
   })
   
   $(".fyss_qrtj_list").click(function(){
       $(this).remove();
   })
   
//评估报告
   $(".grtzone").mouseover(function(){
         $(this).find(".grtzonedown").show()
   })
   $(".grtzone").mouseout(function(){
         $(this).find(".grtzonedown").hide()
   })

   $(".grtzonedown a").click(function(){
          var cs=$(this).text();
         $(this).parent().parent().prev().val(cs);
   })
   $(".grtzone").mouseout(function(){
         $(this).find(".grtzonedown").hide()
   })

  })
  
  
//弹出内容

var winHeight=$(window).height();
var winWidth=$(window).width();

$(".tcbox").css({
	width:winWidth,
	height:winHeight,
	opacity:0.8
	});
	
var boxwidth=$(".tcboxnr").width();
var boxheight=$(".tcboxnr").height();
var boxLeft=(winWidth-boxwidth)/2
var boxTop=(winHeight-boxheight)/2

$(".tcboxnr").css({
	left:boxLeft,
	top:boxTop
	})
 
$(".tclabel").click(function() {
    $(this).parent().hide();
	$(this).parent().prev().hide();
}); 


$(".lja").click(function() {
    $(this).next().show();
	$(this).next().next().show();
});
  
	   	  
})


</script>

<?php
$db = Yii::app()->db;
?>    
<!-- 地址开始 -->
<script type="text/javascript" src="new/js/tFocus2.js"></script>
<div class="ss1"></div>
<div class="cl"></div>
<div class="nytb_dz">
    <a href="<?php echo Yii::app()->createUrl('site/index'); ?>">首页</a> &gt; <a href="<?php echo Yii::app()->createUrl('house/index'); ?>">房源搜索</a> &gt; <span style="font-size:14px;">详情页面</span>
</div>
<!-- 地址结束 -->
<!-- 房源详情页面开始 -->
<div class="fyxq" style="margin-top:5px;">
    <div class="cl"></div>
    <div class="fyxqup">
        <div class="fyxqupleft">
            <div class="fyxq_tab">
                <a class="fyxq_tab_tp fyxq_tab_cur" href="#">图片</a>
                <a class="fyxq_tab_sp" href="#">视频</a>
                <a href="#fydt" onclick="streetmap(1);">街景</a>
                <a href="#fydt" onclick="daolumap();">地图</a>
                <div class="cl"></div>
            </div>
            
            
            <div>
<!--效果开始-->

<?php
//打开 images 目录
//$dir="mlspic/resi/picture/Photo".$house->ml_num;
//echo $dir;


	//先判断指定的路径是不是一个文件夹
//	if (is_dir($dir)){
//		if ($dh = opendir($dir)){
//			while (($file = readdir($dh))!= false){
				//文件名的全路径 包含文件名
//				$filePath = $dir.$file;
//				echo "<img src='".$filePath."'/>";
//			}
//			closedir($dh);
//		}
//	}
?> 

<div class="ink_phoBok">
 <div id="ifocus">
    <div id="ifocus_pic" class="pics">
      <div id="ifocus_piclist">
        <ul>
                    <?php
						if($house->image_list==""){
						echo " <img src='/static/images/zanwu.jpg' width='465' height='308'>";
						}
						else{
                        $tupianya=$house->image_list;
						$keywords=array_filter(explode(",",$tupianya));
						foreach ($keywords as $key=>$value) {
                    ?>
          <li><a target="_blank"><img src="<?php echo Yii::app()->request->baseUrl; ?>/<?php echo $value; ?>" width="465" height="308" /></a></li>
                   <?php }}?>
    
        </ul>
      </div>
      <div id="ifocus_opdiv"></div>
      <div id="ifocus_tx" class="tFocusText">
        <ul>
          <li class="current">

          </li>
          <li class="normal">
          </li>
          <li class="normal">
          </li>
          <li class="normal">
         
          </li>
          <li class="normal">
         
          </li>
          <li class="normal">
           
          </li>
        </ul>
      </div>
    </div>
    <div id="tFocusBtn">      
      <span class="tFocus-nextBtn"></span>
      <div id="ifocus_btn">
        <ul class="btns">
        
                            <?php
						if($house->image_list==""){
						echo " <img src='/static/images/zanwu.jpg' width='128' height='88'>";
						}
						$tupianya=$house->image_list;
						$keywords=array_filter(explode(",",$tupianya));
						foreach ($keywords as $key=>$value) {
              
                            ?>
            <?php if ($key == 0) { ?>
          <li class="current"><img src="<?php echo Yii::app()->request->baseUrl; ?>/<?php echo $value; ?>" width="128" height="88" /></li>
            <?php } else { ?>
          
          
          <li><img src="<?php echo Yii::app()->request->baseUrl; ?>/<?php echo $value; ?>" width="128" height="88" /></li>
                      <?php }
                        } ?>
               
        </ul>
      </div>
    <span class="tFocus-prevBtn"></span>
   </div>
  </div>
  <script type="text/javascript">new tFocus('ifocus',{changeStyle:'opac',timer:3000});</script>
</div>
<!--End-->
</div>
            
            
        </div>
        <div class="fyxqupright">
            <div class="fyxqupright_titile">MLS：<?php echo $house->ml_num; ?></div>
            <div class="fyxqupright_btn">
<div style="float:left; margin-left:10px;"><div class="bdsharebuttonbox"><a href="#" class="bds_more" data-cmd="more"></a><a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a><a href="#" class="bds_sqq" data-cmd="sqq" title="分享到QQ好友"></a></div>
<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"0","bdSize":"16"},"share":{}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script></div>

 <?php if (empty($this->_account['userId'])) { ?>
                <a style="float:right; padding-top:5px;" class="syss_fc_sc <?php if (in_array($house->id, $collection_list)) {echo 'collected';} ?> " data-id="<?php echo $house->id; ?>" href="index.php?r=site/login&houseid=<?php echo $house->id;?>" target="_blank">加入收藏</a>
<?php }else{?>

            <div class="fyxqupright_btn" style="float:right; padding-top:5px;">
                <a href="javascript:;" class="syss_fc_sc collection <?php if (in_array($house->id, $collection_list)) {
    echo 'collected';
} ?>" data-id="<?php echo $house->id; ?>">加入收藏</a>
            </div>

<?php }?>
            </div>
            <div class="cl"></div>
            <div class="fyxqupright_cont">
                <div class="fyxq_ptss">
                    <div class="fyxq_ptssleft">价格：</div>
                    <div class="fyxq_ptssright"><?php echo $house->lp_dol/10000; ?>万加币<?php if (!empty($exchangeRate)) { ?>&nbsp;<span>(约<i>
					<?php echo number_format($house->lp_dol * floatval($exchangeRate), 2)/10000; ?></i>万人民币）</span><?php } ?></div>
                    <div class="cl"></div>
                </div>
                <div class="fyxq_ptss">
                    <div class="fyxq_ptssleft">地址：</div>
                    <div class="fyxq_ptssright"><?php echo $house->addr; ?></div>
                    <div class="cl"></div>
                </div>
                <div class="fyxq_ptss">
                    <div class="fyxq_ptssleft"><?php if ($house->investType_id == 1) {
    echo '学区';
} else {
    echo '社区';
} ?>：：</div>
                    <div class="fyxq_ptssright"><?php echo $house->community; ?></div>
                    <div class="cl"></div>
                </div>
                <div class="fyxq_ptss">
                    <div class="fyxq_ptssleft">户型：</div>
                    <div class="fyxq_ptssright"><img src="new/images/1s.jpg"  />&nbsp;&nbsp;<?php echo $house->br; ?>&nbsp;&nbsp;<img src="new/images/1t.jpg" />&nbsp;&nbsp;<?php echo $house->bath_tot; ?></div>
                    <div class="cl"></div>
                </div>
                <div class="fyxq_ptss">
                    <div class="fyxq_ptssleft">配套：</div>
                    <div class="fyxq_ptssright fyxq_ptpd">
                                                     <?php
                        $house_match = explode(',', $house->match);
                        foreach ($matches as $match) {
                            if (in_array($match['id'], $house_match)) {
                                ?>
                                <span><b></b><?php echo $match['name']; ?></span>
                                
    <?php } else { ?>
                               <span><s></s><?php echo $match['name']; ?></span>
   
    <?php }
} ?>
                        </div>
                    <div class="cl"></div>
                </div>
                
                <div class="fyxq_ptss">
                <div class="fyxq_phone"><img src="new/images/phone.jpg" width="78" height="78" /></div>
                <div class="fyxq_rx">服务热线：<br/>
                  <img src="new/images/plat.jpg" width="23" height="15" /><span>400-870-1029</span>
                </div>
                 <div class="cl"></div>
                </div>
               
               
                 <div class="fyxq_ptss">
                 <?php if (empty($this->_account['userId'])) { ?>
                <a class="kf" href="index.php?r=site/login&houseid=<?php echo $house->id;?>" target="_blank"><img  src="new/images/kf.jpg" /></a>
                <?php }else{?>
                <a class="kf" href="javascript:showDiv()"><img  src="new/images/kf.jpg" /></a>
                <?php }?>
                <a class="kf" href="http://wpa.qq.com/msgrd?v=3&amp;uin=4009900393&amp;site=qq&amp;menu=yes"><img src="new/images/zix.jpg" /></a>

<div id="popDiv" class="mydiv" style="display:none;">
<div class="guanbi"><a href="javascript:closeDiv()">关闭</a></div>
<div style="height:100px;"></div>
<script type="text/javascript">
    function check (form)
    {
        var reg = /^\s*|\s*$/g;
		var myreg = /^(((13[0-9]{1})|(15[0-9]{1})|(18[0-9]{1}))+\d{8})$/; 
        if(!myreg.test(form.tel.value.replace(reg,''))) 
        { 
        alert('请输入有效的手机号码！'); 
		form.tel.focus ();
        return false; 
        } 
        else if (form.uname.value.replace(reg,'') == "")
        {
            alert ("请输入您的姓名");
            form.uname.focus ();
            return false;
        }
        else if (form.address.value.replace(reg,'') == "")
        {
            alert ("请输入现居地址");
            form.address.focus ();
            return false;
        }
        else if (form.tel.value.replace(reg,'') == "")
        {
            alert ("请输入联系电话");
            form.tel.focus ();
            return false;
        }
        else if (form.touzi.value.replace(reg,'') == "")
        {
            alert ("是否已经填写投资评估报告？");
            form.touzi.focus ();
            return false;
        }
        else if (form.yuyuedate.value.replace(reg,'') == "")
        {
            alert ("请输入预约日期");
            form.yuyuedate.focus ();
            return false;
        }
        else 
        {
            return true;
        }
    }
</script>
<?php

if($_REQUEST["action"]=="add"){


$sql = "INSERT INTO `h_yuyue` (`uname`,`address`,`touzi`,`tel`,`yuyuedate`,`houseid`,`housemls`) VALUES ('".$_POST['uname']."', '".$_POST['address']."', '".$_POST['touzi']."', '".$_POST['tel']."', '".$_POST['yuyuedate']."', '".$house->id."', '".$house->ml_num."')";
$command=$db->createCommand($sql);
$command->execute();
echo "<script>alert('预约成功，我们会尽快联系您');location.href='index.php?r=house/view&id=".$house->id."'</script>";

}
?>
<form action="index.php?r=house/view&id=<?php echo $house->id;?>&action=add" method="post" name="form1" id="form1">
<table width="62%" border="0" cellspacing="0" cellpadding="0" style=" font-weight:lighter; font-family:'宋体'; margin:0 auto">
  <tr>
    <td width="30%">您的姓名：</td>
    <td width="50%"><input name="uname" type="text" id="uname"  placeholder="请输入您的姓名！"/></td>
  </tr>
  <tr>
    <td>现居地址：</td>
    <td><input name="address" type="text"  placeholder="请填写尽量详细"/></td>
  </tr>
  <tr>
    <td colspan="2" style="text-align:left">是否已经填写投资评估报告 <input name="touzi" type="radio" value="是" />是 <input name="touzi" type="radio" value="否" />否</td>
    </tr>
  <tr>
    <td>手机号码：</td>
    <td><input name="tel" type="text" id="#phone"  placeholder="请填写您的联系电话"/></td>
  </tr>
  <tr>
    <td>预约日期：</td>
    <td>
    <select name="yuyuedate" style="width:172px">
    <option value="<?php echo date("Y-m-d",strtotime("+1 day"));?>"><?php echo date("Y-m-d",strtotime("+1 day"));?></option>
    <option value="<?php echo date("Y-m-d",strtotime("+2 day"));?>"><?php echo date("Y-m-d",strtotime("+2 day"));?></option>
    <option value="<?php echo date("Y-m-d",strtotime("+3 day"));?>"><?php echo date("Y-m-d",strtotime("+3 day"));?></option>
    <option value="<?php echo date("Y-m-d",strtotime("+4 day"));?>"><?php echo date("Y-m-d",strtotime("+4 day"));?></option>
    <option value="<?php echo date("Y-m-d",strtotime("+5 day"));?>"><?php echo date("Y-m-d",strtotime("+5 day"));?></option>
    <option value="<?php echo date("Y-m-d",strtotime("+6 day"));?>"><?php echo date("Y-m-d",strtotime("+6 day"));?></option>
    <option value="<?php echo date("Y-m-d",strtotime("+7 day"));?>"><?php echo date("Y-m-d",strtotime("+7 day"));?></option>
    <option value="<?php echo date("Y-m-d",strtotime("+8 day"));?>"><?php echo date("Y-m-d",strtotime("+8 day"));?></option>
    <option value="<?php echo date("Y-m-d",strtotime("+9 day"));?>"><?php echo date("Y-m-d",strtotime("+9 day"));?></option>
    <option value="<?php echo date("Y-m-d",strtotime("+10 day"));?>"><?php echo date("Y-m-d",strtotime("+10 day"));?></option>
    <option value="<?php echo date("Y-m-d",strtotime("+11 day"));?>"><?php echo date("Y-m-d",strtotime("+11 day"));?></option>
    <option value="<?php echo date("Y-m-d",strtotime("+12 day"));?>"><?php echo date("Y-m-d",strtotime("+12 day"));?></option>
    <option value="<?php echo date("Y-m-d",strtotime("+13 day"));?>"><?php echo date("Y-m-d",strtotime("+13 day"));?></option>
    <option value="<?php echo date("Y-m-d",strtotime("+14 day"));?>"><?php echo date("Y-m-d",strtotime("+14 day"));?></option>
    </select>
    
 </td>
  </tr>
</table>
<div align="center"><input name="" type="submit" value=""  onclick="return check(this.form);" style="width:123px; height:29px;BACKGROUND-COLOR: Transparent; border:0px;cursor:pointer" /></div>
</form>
</div>
<div id="bg" class="bgbgbg" style="display:none;"></div>
     
                 <div class="cl"></div>
                </div> 
            </div>
       
        </div>
        <div class="cl"></div>
    </div>
    
    
    <div class="fyxqdown">
        <div class="fyxqdown_left">
            <div class="xxlb_box">
                <div class="fyxqdown_left_title">
                    <a class="fyxqdown_left_cur" href="javascript:void(0);">详情列表</a>
                    <a href="#buju">房屋布局</a>
                    <a href="#mshu">房源描述</a>
                    <a href="#tup">房源图片</a>
                    <a href="#fjin">附近房源</a>
                    <a href="#rdian">热点房源</a>
                    <a href="#map">房源地图</a>
                    <span class="dlh_btn">英尺 &gt; 米</span>
                    <div class="cl"></div>
                </div>
                
<script language="javascript" type="text/javascript">
$(function(){

		var a1 = $(".s1").html();
		var a2 = $(".s2").html();
		var a3 = $(".s3").html();
	$(".dlh_btn").click(function(){
	
		function decimal(num,v){
		var vv = Math.pow(10,v);
		return Math.round(num*vv)/vv;
		}

        if($(this).hasClass("dlh_active"))
		{
			$(".s1").text(a1);
			$(".s2").text(a2);
			$(".s3").text(a3);
			$(".c1").html("平方英尺")
			$(".c2").html("平方英尺")
			$(".c3").html("英尺")
		   $(this).text("英尺 > 米");
           $(this).removeClass("dlh_active");
	   } 
	   else{
			var b1=decimal(a1*0.09290304,2);
			var b2=decimal(a2*0.09290304,2);
			var b3=decimal(a3*0.3048,2);
			$(".s1").text(b1);
			$(".s2").text(b2);
			$(".s3").text(b3);
			$(".c1").html("平方米")
			$(".c2").html("平方米")
			$(".c3").html("米")
		   $(this).addClass("dlh_active");
		   $(this).text("米 > 英制");
      }
	})
})
</script>
                
                <div class="fyxqdown_left_cont">
                    <div class="xqlb_list">
                        <div class="xqlb_list_left">物业类型：<?php echo $house->type_own1_out; ?></div>
                        <div class="xqlb_list_right">挂牌时间：<?php echo $house->pix_updt; ?></div>
                        <div class="cl"></div>
                    </div>
                    <div class="xqlb_list">
                        <div class="xqlb_list_left">房屋层数：<?php echo $house->style; ?></div>
                        <div class="xqlb_list_right">土地面积：<span class="s1"><?php echo $house->front_ft; ?></span><span class="c1">平方英尺</span></div>
                        <div class="cl"></div>
                    </div>
                    <div class="xqlb_list">
                        <div class="xqlb_list_left">房屋面积：<span class="s2"><?php echo $house->sqft; ?></span><span class="c2">平方英尺</span></div>
                        <div class="xqlb_list_right">土地尺寸：<span class="s3"><?php echo $house->depth; ?>*<?php echo $house->front_ft; ?></span><span class="c3">英尺</span></div>
                        <div class="cl"></div>
                    </div>
                    <div class="xqlb_list">
                        <div class="xqlb_list_left">房屋数量：<?php echo $house->rms; ?></div>
                        <div class="xqlb_list_right">出售/出租：<?php if($house->s_r=="Sale"){echo "出售";}else{echo "出租";} ?></div>
                        <div class="cl"></div>
                    </div>
                    <div class="xqlb_list">
                        <div class="xqlb_list_left">卧房数量：<?php echo $house->br; ?></div>
                        <div class="xqlb_list_right">是否配套家具：<?php echo $house->furnished; ?></div>
                        <div class="cl"></div>
                    </div>
                    <div class="xqlb_list">
                        <div class="xqlb_list_left">厨房数量：<?php echo $house->num_kit; ?></div>
                        <div class="xqlb_list_right">建造年份：<?php echo $house->yr_built; ?>年</div>
                        <div class="cl"></div>
                    </div>
                    <div class="xqlb_list">
                        <div class="xqlb_list_left">卫生间数量：<?php echo $house->bath_tot; ?></div>
                        <div class="xqlb_list_right">地下室：<?php echo $house->bsmt1_out; ?></div>
                        <div class="cl"></div>
                    </div>
                    <div class="xqlb_list">
                        <div class="xqlb_list_left">车库数量：<?php echo $house->gar_spaces; ?></div>
                        <div class="xqlb_list_right">暖气：<?php echo $house->heating; ?></div>
                        <div class="cl"></div>
                    </div>
                    <div class="xqlb_list">
                        <div class="xqlb_list_left">大门朝向：<?php echo $house->comp_pts; ?></div>
                        <div class="xqlb_list_right">空调：-<?php echo $house->a_c; ?></div>
                        <div class="cl"></div>
                    </div>
                      <div class="xqlb_list">
                        <div class="xqlb_list_left">邮编：<?php echo $house->zip; ?></div>
                        <div class="xqlb_list_right">中央吸尘：<?php if($house->central_vac=="Y"){echo "是";}else{echo "否";} ?></div>
                        <div class="cl"></div>
                    </div>
                      <div class="xqlb_list">
                        <div class="xqlb_list_left">MLS编号：<?php echo $house->ml_num; ?></div>
                        <div class="xqlb_list_right">交叉路口：<?php echo $house->cross_st; ?></div>
                        <div class="cl"></div>
                    </div>
                    
                    <div class="xqlb_list">
                        <div class="xqlb_list_left">周边环境和配套：<?php echo $house->prop_feat1_out; ?>,<?php echo $house->prop_feat2_out; ?>,<?php echo $house->prop_feat3_out; ?>,<?php echo $house->prop_feat4_out; ?>,<?php echo $house->prop_feat5_out; ?>,<?php echo $house->prop_feat6_out; ?></div>
                        <div class="cl"></div>
                    </div>
                    <div class="xqlb_list">
                            <div class="xqlb_list_left">是否壁炉：<?php if($house->fpl_num=="N"){echo "没有";}else{echo "有";}?></div>
                            <div class="xqlb_list_right">是否游泳池：<?php if($house->pool=="None"){echo "没有";}else{echo "有";} ?></div>
                        <div class="cl"></div>
                    </div>
                </div>
            </div>
 <a href="javascript:;" name="fwbj" style="text-indent:-99999em; display:block;margin-bottom: -5px;zoom: 1;">1</a>
            <div class="fwbj_box">
            
<script language="javascript" type="text/javascript">
$(function(){

		var p1 = $(".f1_1").html();
		var p2 = $(".f1_2").html();
		var p3 = $(".f1_3").html();
		var p4 = $(".f2_1").html();
		var p5 = $(".f2_2").html();
		var p6 = $(".f2_3").html();
		function decimal(num,v){
		var vv = Math.pow(10,v);
		return Math.round(num*vv)/vv;
		}
	$(".fyxqdown_left_title").on("click",".ss",function(){


        if($(this).hasClass("dlh_active"))
		{
			$(this).removeClass("dlh_active");
			$(".f1_1").text(p1);
			$(".f1_2").text(p2);
			$(".f1_3").text(p3);
			$(".f2_1").text(p4);
			$(".f2_2").text(p5);
			$(".f2_3").text(p6);
			$(".t1").html("长(M)")
			$(".t2").html("宽(M)")
			$(".t3").html("面积(㎡)")
		    $(this).text("米 > 英制");


	   } 
	   else{
		    $(".t1").html("长（英尺）")
			$(".t2").html("宽（英尺）")
			$(".t3").html("面积（平方英尺）")
		    $(this).text("英制 > 米");
		    $(this).addClass("dlh_active");
			

			
			var h1=decimal(p1/0.3048,2);
			var h2=decimal(p2/0.3048,2);
			var h3=decimal(p3/0.09290304,2);
			var h4=decimal(p4/0.3048,2);
			var h5=decimal(p5/0.3048,2);
			var h6=decimal(p6/0.09290304,2);
			$(".f1_1").text(h1);
			$(".f1_2").text(h2);
			$(".f1_3").text(h3);
			$(".f2_1").text(h4);
			$(".f2_2").text(h5);
			$(".f2_3").text(h6);
	



      }
	})
})
</script>             
                <div class="fyxqdown_left_title">
                    <a class="fyxqdown_left_cur" id="buju" href="javascript:;">房屋布局</a><span class="dlh_btn_2 ss">米 &gt; 英制</span>
                </div>
                <div class="fwbj_cont">
           <table width="750" border="0" cellspacing="0" cellpadding="0" style="line-height:30PX;">
  <tr>
    <td width="12%">楼层</td>
    <td width="12%">房间</td>
    <td width="10%">长(M)</td>
    <td width="12%">宽(M)</td>
    <td width="17%">面积(㎡)</td>
    <td width="37%">说明</td>
  </tr>
  <?php if($house->level1!=""){?>
  <tr>
    <td style="border-bottom: 1px solid #CCCCCC;"><?php echo $house->level1;?></td>
    <td style="border-bottom: 1px solid #CCCCCC;"><?php echo $house->rm1_out; ?></td>
    <td style="border-bottom: 1px solid #CCCCCC;"><?php echo $house->rm1_len; ?></td>
    <td style="border-bottom: 1px solid #CCCCCC;"><?php echo $house->rm1_wth; ?></td>
    <td style="border-bottom: 1px solid #CCCCCC;"><?php echo $house->rm1_len*$house->rm1_wth; ?></td>
    <td style="border-bottom: 1px solid #CCCCCC;"><?php echo $house->rm1_dc1_out; ?>，<?php echo $house->rm1_dc2_out; ?>，<?php echo $house->rm1_dc3_out; ?></td>
  </tr>
  <?php }?>
  <?php if($house->level2!=""){?>
  <tr>
    <td style="border-bottom: 1px solid #CCCCCC;"><?php echo $house->level2;?></td>
    <td style="border-bottom: 1px solid #CCCCCC;"><?php echo $house->rm2_out; ?></td>
    <td style="border-bottom: 1px solid #CCCCCC;"><?php echo $house->rm2_len; ?></td>
    <td style="border-bottom: 1px solid #CCCCCC;"><?php echo $house->rm2_wth; ?></td>
    <td style="border-bottom: 1px solid #CCCCCC;"><?php echo $house->rm12_len*$house->rm2_wth; ?></td>
    <td style="border-bottom: 1px solid #CCCCCC;"><?php echo $house->rm2_dc1_out; ?>，<?php echo $house->rm2_dc2_out; ?>，<?php echo $house->rm2_dc3_out; ?></td>
  </tr>
   <?php }?>
  <?php if($house->level3!=""){?>
  <tr>
    <td style="border-bottom: 1px solid #CCCCCC;"><?php echo $house->level3;?></td>
    <td style="border-bottom: 1px solid #CCCCCC;"><?php echo $house->rm3_out; ?></td>
    <td style="border-bottom: 1px solid #CCCCCC;"><?php echo $house->rm3_len; ?></td>
    <td style="border-bottom: 1px solid #CCCCCC;"><?php echo $house->rm3_wth; ?></td>
    <td style="border-bottom: 1px solid #CCCCCC;"><?php echo $house->rm3_len*$house->rm3_wth; ?></td>
    <td style="border-bottom: 1px solid #CCCCCC;"><?php echo $house->rm3_dc1_out; ?>，<?php echo $house->rm3_dc2_out; ?>，<?php echo $house->rm3_dc3_out; ?></td>
  </tr>
   <?php }?>
  <?php if($house->level4!=""){?>
  <tr>
    <td style="border-bottom: 1px solid #CCCCCC;"><?php echo $house->level4;?></td>
    <td style="border-bottom: 1px solid #CCCCCC;"><?php echo $house->rm4_out; ?></td>
    <td style="border-bottom: 1px solid #CCCCCC;"><?php echo $house->rm4_len; ?></td>
    <td style="border-bottom: 1px solid #CCCCCC;"><?php echo $house->rm4_wth; ?></td>
    <td style="border-bottom: 1px solid #CCCCCC;"><?php echo $house->rm4_len*$house->rm4_wth; ?></td>
    <td style="border-bottom: 1px solid #CCCCCC;"><?php echo $house->rm4_dc1_out; ?>，<?php echo $house->rm4_dc2_out; ?>，<?php echo $house->rm4_dc3_out; ?></td>
  </tr>
  <?php }?>
  <?php if($house->level5!=""){?>
  <tr>
    <td style="border-bottom: 1px solid #CCCCCC;"><?php echo $house->level5;?></td>
    <td style="border-bottom: 1px solid #CCCCCC;"><?php echo $house->rm5_out; ?></td>
    <td style="border-bottom: 1px solid #CCCCCC;"><?php echo $house->rm5_len; ?></td>
    <td style="border-bottom: 1px solid #CCCCCC;"><?php echo $house->rm5_wth; ?></td>
    <td style="border-bottom: 1px solid #CCCCCC;"><?php echo $house->rm5_len*$house->rm5_wth; ?></td>
    <td style="border-bottom: 1px solid #CCCCCC;"><?php echo $house->rm5_dc1_out; ?>，<?php echo $house->rm5_dc2_out; ?>，<?php echo $house->rm5_dc3_out; ?></td>
  </tr>
  <?php }?>
  <?php if($house->level6!=""){?>
  <tr>
    <td style="border-bottom: 1px solid #CCCCCC;"><?php echo $house->level6;?></td>
    <td style="border-bottom: 1px solid #CCCCCC;"><?php echo $house->rm6_out; ?></td>
    <td style="border-bottom: 1px solid #CCCCCC;"><?php echo $house->rm6_len; ?></td>
    <td style="border-bottom: 1px solid #CCCCCC;"><?php echo $house->rm6_wth; ?></td>
    <td style="border-bottom: 1px solid #CCCCCC;"><?php echo $house->rm6_len*$house->rm6_wth; ?></td>
    <td style="border-bottom: 1px solid #CCCCCC;"><?php echo $house->rm6_dc1_out; ?>，<?php echo $house->rm6_dc2_out; ?>，<?php echo $house->rm6_dc3_out; ?></td>
  </tr>
  <?php }?>
  <?php if($house->level6!=""){?>
  <tr>
    <td style="border-bottom: 1px solid #CCCCCC;"><?php echo $house->level6;?></td>
    <td style="border-bottom: 1px solid #CCCCCC;"><?php echo $house->rm7_out; ?></td>
    <td style="border-bottom: 1px solid #CCCCCC;"><?php echo $house->rm7_len; ?></td>
    <td style="border-bottom: 1px solid #CCCCCC;"><?php echo $house->rm7_wth; ?></td>
    <td style="border-bottom: 1px solid #CCCCCC;"><?php echo $house->rm7_len*$house->rm7_wth; ?></td>
    <td style="border-bottom: 1px solid #CCCCCC;"><?php echo $house->rm7_dc1_out; ?>，<?php echo $house->rm7_dc2_out; ?>，<?php echo $house->rm7_dc3_out; ?></td>
  </tr>
  <?php }?>
  <?php if($house->level8!=""){?>
  <tr>
    <td style="border-bottom: 1px solid #CCCCCC;"><?php echo $house->level8;?></td>
    <td style="border-bottom: 1px solid #CCCCCC;"><?php echo $house->rm8_out; ?></td>
    <td style="border-bottom: 1px solid #CCCCCC;"><?php echo $house->rm8_len; ?></td>
    <td style="border-bottom: 1px solid #CCCCCC;"><?php echo $house->rm8_wth; ?></td>
    <td style="border-bottom: 1px solid #CCCCCC;"><?php echo $house->rm8_len*$house->rm8_wth; ?></td>
    <td style="border-bottom: 1px solid #CCCCCC;"><?php echo $house->rm8_dc1_out; ?>，<?php echo $house->rm8_dc2_out; ?>，<?php echo $house->rm8_dc3_out; ?></td>
  </tr>
  <?php }?>
   <?php if($house->level9!=""){?>
  <tr>
    <td style="border-bottom: 1px solid #CCCCCC;"><?php echo $house->level9;?></td>
    <td style="border-bottom: 1px solid #CCCCCC;"><?php echo $house->rm9_out; ?></td>
    <td style="border-bottom: 1px solid #CCCCCC;"><?php echo $house->rm9_len; ?></td>
    <td style="border-bottom: 1px solid #CCCCCC;"><?php echo $house->rm9_wth; ?></td>
    <td style="border-bottom: 1px solid #CCCCCC;"><?php echo $house->rm9_len*$house->rm9_wth; ?></td>
    <td style="border-bottom: 1px solid #CCCCCC;"><?php echo $house->rm9_dc1_out; ?>，<?php echo $house->rm9_dc2_out; ?>，<?php echo $house->rm9_dc3_out; ?></td>
  </tr>
  <?php }?>
  <?php if($house->level10!=""){?>
    <tr>
    <td style="border-bottom: 1px solid #CCCCCC;"><?php echo $house->level10;?></td>
    <td style="border-bottom: 1px solid #CCCCCC;"><?php echo $house->rm10_out; ?></td>
    <td style="border-bottom: 1px solid #CCCCCC;"><?php echo $house->rm10_len; ?></td>
    <td style="border-bottom: 1px solid #CCCCCC;"><?php echo $house->rm10_wth; ?></td>
    <td style="border-bottom: 1px solid #CCCCCC;"><?php echo $house->rm10_len*$house->rm10_wth; ?></td>
    <td style="border-bottom: 1px solid #CCCCCC;"><?php echo $house->rm10_dc1_out; ?>，<?php echo $house->rm10_dc2_out; ?>，<?php echo $house->rm10_dc3_out; ?></td>
  </tr>
  <?php }?>
  
  
</table>

     </div>
            </div>
            <a href="javascript:;" name="fyms" style="text-indent:-99999em; display:block;margin-bottom: -5px;zoom: 1;">1</a>
            <div class="fwbj_box">
                <div class="fyxqdown_left_title">
                    <a class="fyxqdown_left_cur" id="mshu" href="javascript:;">房屋描述</a><div class="cl"></div>
                </div>
                <div class="fwms_cont">
                     <?php echo $house->ad_text; ?><BR /><?php echo $house->extras; ?>
                                  <div class="dl_jm_left">
                        <div class="dl_jm_left_info">
                            <div class="dl_jm_left_info_one">如需帮助，请致电</div>
                            <div class="dl_jm_left_info_two">400-870-1029</div>
                            
                        </div>
                        
                        <div class="dl_jm_left_info_right">
                            <div style="margin-top:10px;float: left">&nbsp;&nbsp;或&nbsp;&nbsp;</div>
                            <div class="dl_jm_left_info_three" style="float:right">
														
                                                            <?php $result = Bagecms::getList('Consult','index_consult'); ?>
                                <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&amp;uin=<?php echo $result[0]['QQ']; ?>&amp;site=qq&amp;menu=yes">在线咨询</a>
                                
                            </div>
                        </div>
                        <div class="cl"></div>
                    </div>
                </div>
            </div>
            <a href="javascript:;" name="fytp" style="text-indent:-99999em; display:block;margin-bottom: -5px;zoom: 1;">1</a>
            <div class="fwbj_box">
                <div class="fyxqdown_left_title">
                    <a class="fyxqdown_left_cur" id="tup" href="javascript:;">房屋图片</a><div class="cl"></div>
                </div>
                <div class="fwms_cont">
                
                <?php if($house->house_image==""){?>
                  <img src='/static/images/zanwu.jpg' width="742" height="489">
                   
               <?php }else{?> 
 <img src="<?php echo Yii::app()->request->baseUrl; ?>/<?php echo $house->house_image; ?>" width="742" height="489" />
               <?php }?>   
                    <br/>
                                          <?php
                        $image_list = unserialize($house->image_list);
												if (!empty($image_list))
												{
                        foreach($image_list as $key => $k){
                     ?>
                            <img src="<?php echo Yii::app()->request->baseUrl; ?>/<?php echo $k['file']; ?>" width="742" height="489"/>
                            <br/><br/>
                        <?php 
												}
												}?>
                </div>
            </div>
        </div>
        <div class="fyxqdown_right">
<div class="zczl">
    <div class="zczlone">立即注册获得以下资料</div>
    <div class="zczltwo">
        <span>1.加国房产投资报告</span>
        <span>2.海外移民指南</span>
        <span>3.加国留学指南</span>
    </div>
    <form action="http://www.maplecity.com.cn/index.php?r=user/register" method="get">
<input type="hidden" value="user/register" name="r">    <div class="zczlthree">
        <div class="zczlthree_one"><input name="username" type="text" class="textbox" value="您的姓名" onblur="if(this.value==&#39;&#39;) {this.style.color=&#39;#333&#39;;this.value=&#39;您的姓名&#39;;}" onfocus="if(this.value==&#39;您的姓名&#39;){this.value=&#39;&#39;;}else{this.style.color=&#39;#000&#39;;}" style="color: #333;"></div>
        <div class="zczlthree_one"><input name="phone" type="text" class="textbox" value="您的电话" onblur="if(this.value==&#39;&#39;) {this.style.color=&#39;#333&#39;;this.value=&#39;您的电话&#39;;}" onfocus="if(this.value==&#39;您的电话&#39;){this.value=&#39;&#39;;}else{this.style.color=&#39;#000&#39;;}" style="color: #333;"></div>
        <div class="zczlthree_one"><input name="email" type="text" class="textbox" value="您的邮箱" onblur="if(this.value==&#39;&#39;) {this.style.color=&#39;#333&#39;;this.value=&#39;您的邮箱&#39;;}" onfocus="if(this.value==&#39;您的邮箱&#39;){this.value=&#39;&#39;;}else{this.style.color=&#39;#000&#39;;}" style="color: #333;"></div>
    </div>
    <div class="zczlfour"><input name="" type="submit" value="立即注册"></div>
    </form></div>
<div class="sylj">
			         <div class="syljtitle">实用链接</div>
			         <div class="syljcont">
					       <a class="lja" href="javascript:void(0);"><img src="/themes/house/images/s1.png" /><span>外汇牌价</span></a>
                           
<!-- 弹出内容 --> 
<div class="tcbox"></div>
    <div class="tcboxnr">
         <div class="tclabel"><span>X</span></div>
         <div class="tccont">
               <div class="tccont_one"><img src="/themes/house/images/sylj1.png" /><span>枫之都-外汇牌价</span><div class="cl"></div></div>
               <div class="tccont_two">
                    <a href="#">中国银行牌价</a>
                    <a href="#">银率网</a>
               </div>
         </div>
         <div class="tcbottom"><img src="/themes/house/images/tclabel_down.png" /></div>
    </div>

<!-- 弹出内容 --> 
                           
				 <a href="http://www.ratehub.ca/best-mortgage-rates" target="_blank"><img src="/themes/house/images/s2.png" /><span>贷款利率</span></a>

					<a class="lja" href="javascript:void(0);"><img src="/themes/house/images/s3.png" /><span>贷款计算</span></a>
                           
<!-- 弹出内容 --> 
<div class="tcbox"></div>
    <div class="tcboxnr" style="height:580px;">
         <div class="tclabel"><span>X</span></div>
         <div class="tccont">
               <div class="tccont_one"><img src="/themes/house/images/sylj3.png" /><span>枫之都-贷款计算</span><div class="cl"></div></div>
               <div class="jisuan">
                      <div class="ajjsq_cont">
				      <div class="ajjsq_list">
					       <div class="ajjsq_left_one">房屋价格：</div>
					       <div class="ajjsq_left_two"><img src="new/images/jh.png" /></div>
						   <div class="ajjsq_left_three"><input name="" type="text" style="width:75px;"/></div>
						   <div class="ajjsq_left_four"><img src="new/images/jh2.png" /></div>
						   <div class="ajjsq_left_five">$</div>
						   <div class="cl"></div>
					  </div>
				      <div class="ajjsq_list">
					       <div class="ajjsq_left_one">首    付：</div>
					       <div class="ajjsq_left_two"><img src="new/images/jh.png" /></div>
						   <div class="ajjsq_left_three"><input name="" type="text"  style="width:75px;"/></div>
						   <div class="ajjsq_left_four"><img src="/themes/house/images/jh2.png" /></div>
						   <div class="ajjsq_left_five">%</div>
						   <div class="cl"></div>
					  </div>
				      <div class="ajjsq_list">
					       <div class="ajjsq_left_one">首付金额：</div>
					       <div class="ajjsq_left_two"></div>
						   <div class="ajjsq_left_three"><input name="" type="text" style="width:75px;" /></div>
						   <div class="ajjsq_left_four"></div>
						   <div class="ajjsq_left_five">$</div>
						   <div class="cl"></div>
					  </div>
				      <div class="ajjsq_list">
					       <div class="ajjsq_left_one">还款年限：</div>
					       <div class="ajjsq_left_two"><img src="new/images/jh.png" /></div>
						   <div class="ajjsq_left_three"><input name="" type="text" style="width:75px;" /></div>
						   <div class="ajjsq_left_four"><img src="/themes/house/images/jh2.png" /></div>
						   <div class="ajjsq_left_five">年</div>
						   <div class="cl"></div>
					  </div>
				      <div class="ajjsq_list">
					       <div class="ajjsq_left_one">利   率：</div>
					       <div class="ajjsq_left_two"><img src="new/images/jh.png" /></div>
						   <div class="ajjsq_left_three"><input name="" type="text" style="width:75px;" /></div>
						   <div class="ajjsq_left_four"><img src="/themes/house/images/jh2.png" /></div>
						   <div class="ajjsq_left_five">%</div>
						   <div class="cl"></div>
					  </div>
				      <div class="ajjsq_list">
					       <div class="ajjsq_left_one">还款周期：</div>
					       <div class="ajjsq_left_two"><img src="new/images/jh.png" /></div>
						   <div class="ajjsq_left_three"><input name="" type="text" style="width:75px;" /></div>
						   <div class="ajjsq_left_four"><img src="/themes/house/images/jh2.png" /></div>
						   <div class="cl"></div>
					  </div>
                      
                      <div class="ajjsq_list">
					       <div class="ajjsq_left_one">还款：</div>
					       <div class="ajjsq_left_two"></div>
						   <div class="ajjsq_left_three"><input name="" type="text" style="width:75px;" /></div>
						   <div class="ajjsq_left_four xjmy2">$ / 每月</div>
						   <div class="cl"></div>
					  </div>
                      
				      <div class="ajjsq_list">
					       <div class="ajjsq_left_one">省份：</div>
					       <div class="ajjsq_left_two"></div>
						   <div class="ajjsq_left_three">
							   <select class="ajjsq_select" name="" style="width:75px;">
							     <option>安大略省</option>
							   </select>
						   </div>
						   <div class="ajjsq_left_four"></div>
						   <div class="ajjsq_left_five"></div>
						   <div class="cl"></div>
					  </div>
				      <div class="ajjsq_list">
					       <div class="ajjsq_left_one">交易税：</div>
					       <div class="ajjsq_left_two"></div>
						   <div class="ajjsq_left_three"><input name="" type="text" style="width:75px;" /></div>
						   <div class="ajjsq_left_four">$</div>
						   <div class="ajjsq_left_five"></div>
						   <div class="cl"></div>
					  </div>
				      <div class="ajjsq_list">
					       <div class="ajjsq_left_one">多伦多交易税：</div>
					       <div class="ajjsq_left_two"></div>
						   <div class="ajjsq_left_three"><input name="" type="text" style="width:75px;" /></div>
						   <div class="ajjsq_left_four">$</div>
						   <div class="ajjsq_left_five"></div>
						   <div class="cl"></div>
					  </div>
				   </div>
               </div>
         </div>
         <div class="tcbottom"><img src="/themes/house/images/tclabel_down.png" /></div>
    </div>

<!-- 弹出内容 -->  
                           
					 <a class="lja" href="javascript:void(0);"><img src="/themes/house/images/s4.png" /><span>加拿大地图</span></a>
                           
<!-- 弹出内容 --> 
<div class="tcbox"></div>
    <div class="tcboxnr">
         <div class="tclabel"><span>X</span></div>
         <div class="tccont">
               <div class="tccont_one"><img src="/themes/house/images/sylj4.png" /><span>枫之都-加拿大地图</span><div class="cl"></div></div>
               <div class="tccont_two">
                    <a href="http://www.meet99.com/emap-Canada.html">全国地图</a>
                    <a href="http://www.meet99.com/map-TORONTO.html">多伦多地图</a>
                    <a href="http://www.meet99.com/map-Ottawa.html">渥太华地图</a>
                    <a href="http://www.meet99.com/map-VANCOUVER.html">温哥华地图</a>
               </div>
         </div>
         <div class="tcbottom"><img src="/themes/house/images/tclabel_down.png" /></div>
    </div>

<!-- 弹出内容 -->   
                           
                           
					       <a class="lja" href="javascript:void(0);"><img src="/themes/house/images/s5.png" /><span>加拿大天气</span></a>
                           
<!-- 弹出内容 --> 
<div class="tcbox"></div>
    <div class="tcboxnr">
         <div class="tclabel"><span>X</span></div>
         <div class="tccont">
               <div class="tccont_one"><img src="/themes/house/images/sylj5.png" /><span>枫之都-加拿大天气</span><div class="cl"></div></div>
               <div class="tccont_two">
                    <a href="http://php.weather.sina.com.cn/search_nation.php?nation=%BC%D3%C4%C3%B4%F3&dpc=1#g_3">全国天气</a>
                    <a href="http://php.weather.sina.com.cn/search.php?c=1&city=%B6%E0%C2%D7%B6%E0&dpc=1">多伦多天气</a>
                    <a href="http://php.weather.sina.com.cn/search.php?c=1&city=%CE%C2%B8%E7%BB%AA&dpc=1">渥太华天气</a>
                    <a href="http://php.weather.sina.com.cn/search.php?c=1&city=%E4%D7%CC%AB%BB%AA&dpc=1">温哥华天气</a>
               </div>
         </div>
         <div class="tcbottom"><img src="/themes/house/images/tclabel_down.png" /></div>
    </div>

<!-- 弹出内容 -->  
  
					       <a class="lja" href="javascript:void(0);"><img src="/themes/house/images/s6.png" /><span>加拿大交通</span></a>
                           
<!-- 弹出内容 --> 
<div class="tcbox"></div>
    <div class="tcboxnr">
         <div class="tclabel"><span>X</span></div>
         <div class="tccont">
               <div class="tccont_one"><img src="/themes/house/images/sylj6.png" /><span>枫之都-加拿大交通</span><div class="cl"></div></div>
               <div class="tccont_two">
                    <a href="http://flight.qunar.com/schedule/international/fsearch_list.jsp?departure=%E5%8C%97%E4%BA%AC&arrival=%E5%A4%9A%E4%BC%A6%E5%A4%9A">航班查询</a>
                    <a href="http://www.octranspo1.com/">首都渥太华公交系统查询</a>
                    <a href="https://www.ttc.ca/">多伦多公交系统查询</a>
                    <a href="http://www.translink.ca/">温哥华公交系统查询</a>
                    <a href="http://tripplanning.translink.ca/hiwire?.a=iScheduleLookupSearch&LineName=999&LineAbbr=999">温哥华轻轨Skytrain时刻查询</a>
                    <a href="http://www.calgarytransit.com/">卡尔加里公交系统查询</a>
                    <a href="http://www.gotransit.com/timetables/en/schedules/full_schedules.aspx">多伦多火车系统（Go Train）查询</a>
                    <a href="http://www.viarail.ca/">加拿大VIA火车查询</a>
               </div>
         </div>
         <div class="tcbottom"><img src="/themes/house/images/tclabel_down.png" /></div>
    </div>

<!-- 弹出内容 -->   
                           
					       <a class="lja" href="javascript:void(0);"><img src="/themes/house/images/s7.png" /><span>加拿大学校</span></a>
                           
<!-- 弹出内容 --> 
<div class="tcbox"></div>
    <div class="tcboxnr">
         <div class="tclabel"><span>X</span></div>
         <div class="tccont">
               <div class="tccont_one"><img src="/themes/house/images/sylj7.png" /><span>枫之都-加拿大学校排名</span><div class="cl"></div></div>
               <div class="tccont_two">
                    <a href="http://www.e-canada.cn/paiming">加拿大大学排名</a>
                    <a href="http://www.compareschoolrankings.org/">加拿大中小学排名</a>
               </div>
         </div>
         <div class="tcbottom"><img src="/themes/house/images/tclabel_down.png" /></div>
    </div>

<!-- 弹出内容 -->  
                           
					       <a class="lja" href="javascript:void(0);"><img src="/themes/house/images/s8.png" /><span>加拿大旅游</span></a>
                           
<!-- 弹出内容 --> 
<div class="tcbox"></div>
    <div class="tcboxnr">
         <div class="tclabel"><span>X</span></div>
         <div class="tccont">
               <div class="tccont_one"><img src="/themes/house/images/sylj8.png" /><span>枫之都-加拿大旅游</span><div class="cl"></div></div>
               <div class="tccontimg">
                    <a href="http://www.ontariotravel.cn/"><img src="/new/images/lj1.png" /><span>安大略省旅游局</span></a>
                    <a href="http://www.hellobc.com.cn/?CC=CN&SI=1"><img src="/new/images/lj2.png" /><span>英属哥伦比亚省旅游局</span></a>
               </div>
         </div>
         <div class="tcbottom"><img src="/themes/house/images/tclabel_down.png" /></div>
    </div>

<!-- 弹出内容 -->  
                           
					       <a class="lja" href="javascript:void(0);"><img src="/themes/house/images/s9.png" /><span>航空票务</span></a>		
                           
<!-- 弹出内容 --> 
<div class="tcbox"></div>
    <div class="tcboxnr">
         <div class="tclabel"><span>X</span></div>
         <div class="tccont">
               <div class="tccont_one"><img src="/themes/house/images/sylj9.png" /><span>枫之都-航空票务</span><div class="cl"></div></div>
               <div class="tccontimg">
                    <a href="http://www.ctrip.com/#ctm_ref=nb_cn_top/"><img src="/new/images/pw1.png" /><span>携程网</span></a>
                    <a href="http://www.aircanada.com/en/home.html"><img src="/new/images/pw2.png" /><span>加拿大航空公司</span></a>
                    <a href="http://www.airchina.com.cn/index.shtml"><img src="/new/images/pw3.png" /><span>中国国际航空公司</span></a>
                    <a href="http://www.hainanairlines.com/CN/CN/Home"><img src="/new/images/pw4.png" /><span>海南航空公司</span></a>
                    <a href="http://www.cathaypacific.com/cx/sc_CN.html"><img src="/new/images/pw5.png" /><span>国泰航空公司</span></a>
               </div>
         </div>
         <div class="tcbottom"><img src="/themes/house/images/tclabel_down.png" /></div>
    </div>

<!-- 弹出内容 -->  
                           
                     </div>
			   </div>

          <div class="ajjsq">
                <div class="ajjsq_title">按揭计算器</div>
                <div class="ajjsq_cont">
                <div style="height:20px;"></div>
                    <div class="ajjsq_list" style="margin: 5px 0;">
                        <div class="ajjsq_left_one">房屋价格：</div>
                        <div class="ajjsq_left_two"><img src="new/images/jh.png"></div>
                        <div class="ajjsq_left_three"><input name="" type="text"></div>
                        <div class="ajjsq_left_four"><img src="new/images/jh2.png"></div>
                        <div class="ajjsq_left_five">$</div>
                        <div class="cl"></div>
                    </div>
                    <div class="ajjsq_list" style="margin: 5px 0;">
                        <div class="ajjsq_left_one">首&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;付：</div>
                        <div class="ajjsq_left_two"><img src="new/images/jh.png"></div>
                        <div class="ajjsq_left_three"><input name="" type="text"></div>
                        <div class="ajjsq_left_four"><img src="new/images/jh2.png"></div>
                        <div class="ajjsq_left_five">%</div>
                        <div class="cl"></div>
                    </div>
                    <div class="ajjsq_list" style="margin: 5px 0;">
                        <div class="ajjsq_left_one">首付金额：</div>
                        <div class="ajjsq_left_two"></div>
                        <div class="ajjsq_left_three"><input name="" type="text"></div>
                        <div class="ajjsq_left_four"></div>
                        <div class="ajjsq_left_five">$</div>
                        <div class="cl"></div>
                    </div>
                    <div class="ajjsq_list" style="margin: 5px 0;">
                        <div class="ajjsq_left_one">还款年限：</div>
                        <div class="ajjsq_left_two"><img src="new/images/jh.png"></div>
                        <div class="ajjsq_left_three"><input name="" type="text"></div>
                        <div class="ajjsq_left_four"><img src="new/images/jh2.png"></div>
                        <div class="ajjsq_left_five">年</div>
                        <div class="cl"></div>
                    </div>
                    <div class="ajjsq_list" style="margin: 5px 0;">
                        <div class="ajjsq_left_one">利&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;率：</div>
                        <div class="ajjsq_left_two"><img src="new/images/jh.png"></div>
                        <div class="ajjsq_left_three"><input name="" type="text"></div>
                        <div class="ajjsq_left_four"><img src="new/images/jh2.png"></div>
                        <div class="ajjsq_left_five">%</div>
                        <div class="cl"></div>
                    </div>
                    <div class="ajjsq_list" style="margin: 5px 0;">
                        <div class="ajjsq_left_one">还款周期：</div>
                        <div class="ajjsq_left_two"><img src="new/images/jh.png"></div>
                        <div class="ajjsq_left_three"><input name="" type="text"></div>
                        <div class="ajjsq_left_four"><img src="new/images/jh2.png"></div>
                        <div class="ajjsq_left_five">$</div>
                        <div class="cl"></div>
                    </div>
                    <div class="ajjsq_list" style="margin: 5px 0;">
                        <div class="ajjsq_left_one">安省交易税：</div>
                        <div class="ajjsq_left_two"></div>
                        <div class="ajjsq_left_three">
                            <select class="ajjsq_select" name=""></select><br>
                            <input name="" type="text">
                        </div>
    
                        <div class="cl"></div>
                    </div>
                    <div class="ajjsq_list" style="margin: 5px 0;">
                        <div class="ajjsq_left_one">多伦多交易税：</div>
                        <div class="ajjsq_left_two"></div>
                        <div class="ajjsq_left_three"><input name="" type="text"></div>
                        <div class="ajjsq_left_four"></div>
                        <div class="ajjsq_left_five"></div>
                        <div class="cl"></div>
                    </div>
                    	 <div class="grtztj" style="padding-top:0px;margin-left: 35px;"><a href="#">提交评估申请</a></div>
                </div>
            </div>
   
           
           <div class="grtz">
      <div class="grtz_title"><span>热点推荐</span></div>
      <div class="grtz_con">
        <ul>
        <?php 
$sqlhaozi = "select * from h_house where lp_dol<3000000 and id!=".$house->id." and recommend=1 limit 0,3";
$resultshazai = $db->createCommand($sqlhaozi)->query();
foreach($resultshazai as $househaizai){
?>
          <li>
            <dl>
              <dt>
                                    <?php if($househaizai["house_image"]==""){?>
                                 <a href="<?php echo Yii::app()->createUrl('house/view',array('id'=>$househaizai["id"])); ?>"  target="_blank"><img src='/static/images/zanwu.jpg' width="120" height="72"/></a>
                      <?php }else{?>
                                 <a href="<?php echo Yii::app()->createUrl('house/view',array('id'=>$househaizai["id"])); ?>"  target="_blank"><img src="<?php echo Yii::app()->request->baseUrl; ?>/<?php echo $househaizai["house_image"]; ?>"  width="120" height="72"/></a>
                      <?php }?>
              </dt>
              <dd class="bt"><?php echo $househaizai["addr"]; ?></dd>
              <dd><font color="#CC6600"><?php echo $househaizai["lp_dol"]/10000;?></font>万加元</dd>
            </dl>
            <div class="cl"></div>
          </li>
<?php }?>
        </ul>
      </div>
      <div class="housebottom"></div>
    </div>
    
    <div class="c1"></div>
    
    <div class="grtz">
      <div class="grtz_title"><span>豪宅推荐</span></div>
      <div class="grtz_con">
        <ul>
        <?php 
$sqlhaozi = "select * from h_house where lp_dol>3000000 and id!=".$house->id." and recommend=1 limit 0,3";
$resultshazai = $db->createCommand($sqlhaozi)->query();
foreach($resultshazai as $househaizai){
?>
          <li>
            <dl>
              <dt>
                                    <?php if($househaizai["house_image"]==""){?>
                                 <a href="<?php echo Yii::app()->createUrl('house/view',array('id'=>$househaizai["id"])); ?>"  target="_blank"><img src='/static/images/zanwu.jpg' width="120" height="72"/></a>
                      <?php }else{?>
                                 <a href="<?php echo Yii::app()->createUrl('house/view',array('id'=>$househaizai["id"])); ?>"  target="_blank"><img src="<?php echo Yii::app()->request->baseUrl; ?>/<?php echo $househaizai["house_image"]; ?>"  width="120" height="72"/></a>
                      <?php }?>
              </dt>
              <dd class="bt"><?php echo $househaizai["addr"]; ?></dd>
              <dd><font color="#CC6600"><?php echo $househaizai["lp_dol"]/10000;?></font>万加元</dd>
            </dl>
            <div class="cl"></div>
          </li>
<?php }?>
        </ul>
      </div>
      <div class="housebottom"></div>
    </div> 
            
            
        </div>
        
        
        
        
        <div class="cl"></div>
        <a href="javascript:;" name="fjfy" style="text-indent:-99999em; display:block;margin-bottom:25px;zoom: 1;">1</a>
        <div class="fjfy_box">
            <div class="fyxqdown_left_title">
                <a class="fyxqdown_left_cur" id="rdian" href="javascript:;">附近房源</a><div class="cl"></div>
            </div>
            

      <div class="rollBox">
<a href="javascript:;" onmousedown="ISL_GoDownxxk()" onmouseup="ISL_StopDownxxk()" onmouseout="ISL_StopDownxxk()" class="img1" hidefocus="true"></a>
     <div class="Cont" id="ISL_Contxxk">
      <div class="ScrCont">
       <div id="List1xxk">
        <!-- 图片列表 begin -->
<?php 

$sqlfujian = "select * from h_house where lp_dol<=3000000 and id!=".$house->id." limit 6,6";
$resultsfujian = $db->createCommand($sqlfujian)->query();
foreach($resultsfujian as $housefujin){
?>
        <div class="pic">
				<div class="playerdetail">
					<div class="detailimg">
                      <?php if($housefujin["house_image"]==""){?>
                                 <a href="<?php echo Yii::app()->createUrl('house/view',array('id'=>$housefujin["id"])); ?>"  target="_blank"><img src='/static/images/zanwu.jpg' width="237" height="193"/></a>
                      <?php }else{?>
                                 <a href="<?php echo Yii::app()->createUrl('house/view',array('id'=>$housefujin["id"])); ?>"  target="_blank"><img src="<?php echo Yii::app()->request->baseUrl; ?>/<?php echo $housefujin["house_image"]; ?>" width="237" height="193"/></a>
                      <?php }?>
                    
                    </div>
					<div class="teanames"><?php echo $housefujin["ml_num"];?></div>
					<div class="teadetail">地址：<?php echo $housefujin["addr"]; ?><br />社区：<?php echo $housefujin["community"];?><br/>价格：<span><font color="#FF3300"><?php echo $housefujin["lp_dol"]/10000; ?></font>万加元</span></div>
                   
					
				</div>
         </div>
<?php }?> 
        <!-- 图片列表 end -->
       </div>
       <div id="List2xxk"></div>
      </div>
     </div>
<a href="javascript:;"  onmousedown="ISL_GoUpxxk()" onmouseup="ISL_StopUpxxk()" onmouseout="ISL_StopUpxxk()" class="img2" hidefocus="true"></a>
    </div>

 </div>
 
 
 
 <script language="javascript" type="text/javascript">
<!--//--><![CDATA[//><!--
//图片滚动列表 mengjia 070816
var Speedxxk = 500; //速度(毫秒)
var Spacexxk = 100; //每次移动(px)
var PageWidthxxk = 1035; //翻页宽度
var fillxxk = 1; //整体移位
var MoveLockxxk = false;
var MoveTimeObjxxk;
var Compxxk = 0;
var AutoPlayObjxxk = null;
GetObjxxk("List2xxk").innerHTML = GetObjxxk("List1xxk").innerHTML;
GetObjxxk('ISL_Contxxk').scrollLeft = fillxxk;
GetObjxxk("ISL_Contxxk").onmouseover = function(){clearInterval(AutoPlayObjxxk);}
GetObjxxk("ISL_Contxxk").onmouseout = function(){AutoPlay();}
AutoPlay();
function GetObjxxk(objName){if(document.getElementById){return eval('document.getElementById("'+objName+'")')}else{return eval

('document.all.'+objName)}}
function AutoPlayxxk(){ //自动滚动
clearInterval(AutoPlayObjxxk);
AutoPlayObjxxk = setInterval('ISL_GoDownxxk();ISL_StopDownxxk();',5000); //间隔时间
}
function ISL_GoUpxxk(){ //上翻开始
if(MoveLockxxk) return;
clearInterval(AutoPlayObjxxk);
MoveLockxxk = true;
MoveTimeObjxxk = setInterval('ISL_ScrUpxxk();',Speedxxk);
}
function ISL_StopUpxxk(){ //上翻停止
clearInterval(MoveTimeObjxxk);
if(GetObjxxk('ISL_Contxxk').scrollLeft % PageWidthxxk - fillxxk != 0){
Compxxk = fillxxk - (GetObjxxk('ISL_Contxxk').scrollLeft % PageWidthxxk);
CompScrxxk();
}else{
MoveLockxxk = false;
}
AutoPlayxxk();
}
function ISL_ScrUpxxk(){ //上翻动作
if(GetObjxxk('ISL_Contxxk').scrollLeft <= 0){GetObjxxk('ISL_Contxxk').scrollLeft = GetObjxxk

('ISL_Contxxk').scrollLeft + GetObjxxk('List1xxk').offsetWidth}
GetObjxxk('ISL_Contxxk').scrollLeft -= Spacexxk ;
}
function ISL_GoDownxxk(){ //下翻
clearInterval(MoveTimeObjxxk);
if(MoveLockxxk) return;
clearInterval(AutoPlayObjxxk);
MoveLockxxk = true;
ISL_ScrDownxxk();
MoveTimeObjxxk = setInterval('ISL_ScrDownxxk()',Speedxxk);
}
function ISL_StopDownxxk(){ //下翻停止
clearInterval(MoveTimeObjxxk);
if(GetObjxxk('ISL_Contxxk').scrollLeft % PageWidthxxk - fillxxk != 0 ){
Compxxk = PageWidthxxk - GetObjxxk('ISL_Contxxk').scrollLeft % PageWidthxxk + fillxxk;
CompScrxxk();
}else{
MoveLockxxk = false;
}
AutoPlayxxk();
}
function ISL_ScrDownxxk(){ //下翻动作
if(GetObjxxk('ISL_Contxxk').scrollLeft >= GetObjxxk('List1xxk').scrollWidth){GetObjxxk('ISL_Contxxk').scrollLeft =

GetObjxxk('ISL_Contxxk').scrollLeft - GetObjxxk('List1xxk').scrollWidth;}
GetObjxxk('ISL_Contxxk').scrollLeft += Spacexxk ;
}
function CompScrxxk(){
var numxxk;
if(Compxxk == 0){MoveLockxxk = false;return;}
if(Compxxk < 0){ //上翻
if(Compxxk < -Spacexxk){
   Compxxk += Spacexxk;
   numxxk = Spacexxk;
}else{
   numxxk = -Compxxk;
   Compxxk = 0;
}
GetObjxxk('ISL_Contxxk').scrollLeft -= numxxk;
setTimeout('CompScrxxk()',Speedxxk);
}else{ //下翻
if(Compxxk > Spacexxk){
   Compxxk -= Spacexxk;
   numxxk = Spacexxk;
}else{
   numxxk = Compxxk;
   Compxxk = 0;
}
GetObjxxk('ISL_Contxxk').scrollLeft += numxxk;
setTimeout('CompScrxxk()',Speedxxk);
}
}
//--><!]]>
</script>
 
 
 
 
 
        <a href="javascript:;" name="rdfy" style="text-indent:-99999em; display:block;margin-bottom:25px;zoom: 1;">1</a>
        <div class="fjfy_box">
            <div class="fyxqdown_left_title">
                <a class="fyxqdown_left_cur" id="rdian" href="javascript:;">最近浏览</a><div class="cl"></div>
            </div>
            

      <div class="rollBox">
<a href="javascript:;" onmousedown="ISL_GoDown()" onmouseup="ISL_StopDown()" onmouseout="ISL_StopDown()" class="img1" hidefocus="true"></a>
     <div class="Cont" id="ISL_Cont">
      <div class="ScrCont">
       <div id="List1">
        <!-- 图片列表 begin -->
<?php 

$sql = "select * from h_house where lp_dol<=3000000 and id!=".$house->id." limit 0,6";
$results = $db->createCommand($sql)->query();
foreach($results as $house){
?>
        <div class="pic">
				<div class="playerdetail">
					<div class="detailimg">
                      <?php if($house["house_image"]==""){?>
                                 <a href="<?php echo Yii::app()->createUrl('house/view',array('id'=>$house["id"])); ?>"  target="_blank"><img src='/static/images/zanwu.jpg' width="237" height="193"/></a>
                      <?php }else{?>
                                 <a href="<?php echo Yii::app()->createUrl('house/view',array('id'=>$house["id"])); ?>"  target="_blank"><img src="<?php echo Yii::app()->request->baseUrl; ?>/<?php echo $house["house_image"]; ?>" width="237" height="193"/></a>
                      <?php }?>
                    
                    </div>
					<div class="teanames"><?php echo $house["ml_num"];?></div>
					<div class="teadetail">地址：<?php echo $house["addr"]; ?><br />社区：<?php echo $house["community"];?><br/>价格：<span><font color="#FF3300"><?php echo $house["lp_dol"]/10000; ?></font>万加元</span></div>
                   
					
				</div>
         </div>
<?php }?> 
        <!-- 图片列表 end -->
       </div>
       <div id="List2"></div>
      </div>
     </div>
<a href="javascript:;"  onmousedown="ISL_GoUp()" onmouseup="ISL_StopUp()" onmouseout="ISL_StopUp()" class="img2" hidefocus="true"></a>
    </div>
      
     
     
     <?php
     function actionGetCodeAddress2($location) {
	$result = array();
//	$location = $_GET['location'];
//	echo $location;
	if (!empty($location)) {
			$url = 'http://maps.google.cn/maps/api/geocode/json?address=' . trim($location) . ',加拿大&sensor=false&language=zh-CN';
			//$url = 'http://maps.google.cn/maps/api/geocode/json?address=' . '129 Ulster St,Toronto' . ',加拿大&sensor=false&language=zh-CN';
			//$url = 'http://maps.google.cn/maps/api/geocode/json?address=129 Ulster St Toronto,加拿大&sensor=false&language=zh-CN';
			$url = str_replace(' ', '+', $url);
			// header
			$userAgent = array(
					'Mozilla/5.0 (Windows NT 6.1; rv:22.0) Gecko/20100101 Firefox/22.0', // FF 22
					'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/27.0.1453.116 Safari/537.36', // Chrome 27
					'Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; Trident/5.0)', // IE 9
					'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0; InfoPath.2; .NET4.0C; .NET4.0E)', // IE 8
					'Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0; InfoPath.2; .NET4.0C; .NET4.0E)', // IE 7
					'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Maxthon/4.1.0.4000 Chrome/26.0.1410.43 Safari/537.1', // Maxthon 4
					'Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; Trident/5.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0; InfoPath.2; .NET4.0C; .NET4.0E)', // 2345 2
					'Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; Trident/5.0; QQBrowser/7.3.11251.400)', // QQ 7
					'Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; Trident/5.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0; InfoPath.2; .NET4.0C; .NET4.0E; SE 2.X MetaSr 1.0)', // Sougo 4
					'Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; Trident/5.0) LBBROWSER', //  liebao 4
			);

			$ch = curl_init();
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_0);
			curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; WOW64; rv:22.0) Gecko/20100101 Firefox/22.0");
			curl_setopt($ch, CURLOPT_REFERER, "http://hqn.jschina.com.cn/prop.asp?id=1975");
			curl_setopt($ch, CURLOPT_TIMEOUT, 16);
			curl_setopt($ch, CURLOPT_USERAGENT, $userAgent[rand(0, count($userAgent) - 1)]);
			curl_setopt($ch, CURLOPT_PROXY, null);
			// 伪造IP头
			$ip = rand(27, 64) . "." . rand(100, 200) . "." . rand(2, 200) . "." . rand(2, 200);
			$headerIp = array("X-FORWARDED-FOR:{$ip}", "CLIENT-IP:{$ip}");
			curl_setopt($ch, CURLOPT_URL, $url);
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headerIp);
			// 读取数据
			$res = @curl_exec($ch);
			curl_close($ch);
			$addrInfo = json_decode($res, true);
			$result['IsError'] = false;
			$result['lng'] = $addrInfo['results'][0]['geometry']['location']['lng'];
			$result['lat'] = $addrInfo['results'][0]['geometry']['location']['lat'];
	} else {
			$result['IsError'] = true;
			$result['Message'] = '数据接收失败';
	}
	//var_dump ($result);
	return $result;
}
	 ?>
     
 <?php
 $jingweidu=actionGetCodeAddress2($house["country"].$house["community"].$house["addr"]);
 ?>    
     
      
  <script language="javascript" type="text/javascript">
<!--//--><![CDATA[//><!--
//图片滚动列表 mengjia 070816
var Speed = 500; //速度(毫秒)
var Space = 100; //每次移动(px)
var PageWidth = 1035; //翻页宽度
var fill = 0; //整体移位
var MoveLock = false;
var MoveTimeObj;
var Comp = 0;
var AutoPlayObj = null;
GetObj("List2").innerHTML = GetObj("List1").innerHTML;
GetObj('ISL_Cont').scrollLeft = fill;
GetObj("ISL_Cont").onmouseover = function(){clearInterval(AutoPlayObj);}
GetObj("ISL_Cont").onmouseout = function(){AutoPlay();}
AutoPlay();
function GetObj(objName){if(document.getElementById){return eval('document.getElementById("'+objName+'")')}else{return eval

('document.all.'+objName)}}
function AutoPlay(){ //自动滚动
clearInterval(AutoPlayObj);
AutoPlayObj = setInterval('ISL_GoDown();ISL_StopDown();',5000); //间隔时间
}
function ISL_GoUp(){ //上翻开始
if(MoveLock) return;
clearInterval(AutoPlayObj);
MoveLock = true;
MoveTimeObj = setInterval('ISL_ScrUp();',Speed);
}
function ISL_StopUp(){ //上翻停止
clearInterval(MoveTimeObj);
if(GetObj('ISL_Cont').scrollLeft % PageWidth - fill != 0){
Comp = fill - (GetObj('ISL_Cont').scrollLeft % PageWidth);
CompScr();
}else{
MoveLock = false;
}
AutoPlay();
}
function ISL_ScrUp(){ //上翻动作
if(GetObj('ISL_Cont').scrollLeft <= 0){GetObj('ISL_Cont').scrollLeft = GetObj

('ISL_Cont').scrollLeft + GetObj('List1').offsetWidth}
GetObj('ISL_Cont').scrollLeft -= Space ;
}
function ISL_GoDown(){ //下翻
clearInterval(MoveTimeObj);
if(MoveLock) return;
clearInterval(AutoPlayObj);
MoveLock = true;
ISL_ScrDown();
MoveTimeObj = setInterval('ISL_ScrDown()',Speed);
}
function ISL_StopDown(){ //下翻停止
clearInterval(MoveTimeObj);
if(GetObj('ISL_Cont').scrollLeft % PageWidth - fill != 0 ){
Comp = PageWidth - GetObj('ISL_Cont').scrollLeft % PageWidth + fill;
CompScr();
}else{
MoveLock = false;
}
AutoPlay();
}
function ISL_ScrDown(){ //下翻动作
if(GetObj('ISL_Cont').scrollLeft >= GetObj('List1').scrollWidth){GetObj('ISL_Cont').scrollLeft =

GetObj('ISL_Cont').scrollLeft - GetObj('List1').scrollWidth;}
GetObj('ISL_Cont').scrollLeft += Space ;
}
function CompScr(){
var num;
if(Comp == 0){MoveLock = false;return;}
if(Comp < 0){ //上翻
if(Comp < -Space){
   Comp += Space;
   num = Space;
}else{
   num = -Comp;
   Comp = 0;
}
GetObj('ISL_Cont').scrollLeft -= num;
setTimeout('CompScr()',Speed);
}else{ //下翻
if(Comp > Space){
   Comp -= Space;
   num = Space;
}else{
   num = Comp;
   Comp = 0;
}
GetObj('ISL_Cont').scrollLeft += num;
setTimeout('CompScr()',Speed);
}
}
//--><!]]>
</script>
    
      
 </div>
<script>
window.onload=function()//用window的onload事件，窗体加载完毕的时候
{
daolumap();
}
</script>
        <a href="javascript:;" name="fydt" style="text-indent:-99999em; display:block;margin-bottom:25px;zoom: 1;">1</a>
        <div class="dtck_box hsdts_box5">
            <div class="fyxqdown_left_title">
                <a class="fyxqdown_left_cur" href="javascript:daolumap()">地图</a>
                <a href="javascript:streetmap(1)">街景</a>
                <div class="cl"></div>
            </div>
            <div class="dtck_box_two" style="background-color: #eee;width: 100%;">
                <div id="map1" class="dataWrap" style="display: block;height:430px"></div>
                <div id="map2" class="dataWrap" style="height:430px"></div>
            </div>
            <div class="dtck_box_three">
                <div class="map_cp">
                    <div class="map_cpone">周边设施</div>
                    <div class="map_cplist">
                        <a href="javascript:;">
                            <div class="map_cplist_left"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/house/m1.jpg" /></div>
                            <div class="map_cplist_right">学校</div>
                        </a>
                    </div>
                    <div class="map_cplist">
                        <a href="javascript:;">
                            <div class="map_cplist_left"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/house/m2.jpg" /></div>
                            <div class="map_cplist_right">餐饮</div>
                        </a>
                    </div>
                    <div class="map_cplist">
                        <a href="javascript:;">
                            <div class="map_cplist_left"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/house/m3.jpg" /></div>
                            <div class="map_cplist_right">交通</div>
                        </a>
                    </div>
                    <div class="map_cplist">
                        <a href="javascript:;">
                            <div class="map_cplist_left"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/house/m4.jpg" /></div>
                            <div class="map_cplist_right">购物</div>
                        </a>
                    </div>
                    <div class="map_cplist">
                        <a href="javascript:;">
                            <div class="map_cplist_left"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/house/m5.jpg" /></div>
                            <div class="map_cplist_right">医院</div>
                        </a>
                    </div>
                    <div class="map_cplist">
                        <a href="javascript:;">
                            <div class="map_cplist_left"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/house/m6.jpg" /></div>
                            <div class="map_cplist_right">银行</div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- 房源详情页面结束 -->
<script>
    $(document).ready(function() {
        //搜索条件下拉
        $(document).ready(function() {
            $(".syss_xltj").mouseover(function() {
                $(this).find(".syss_xltjdown").show();
            });
            $(".syss_xltj").mouseout(function() {
                $(this).find(".syss_xltjdown").hide();
            });
            //搜索条件删除
            $(".fyss_tjsc a").click(function() {
                $(".fyss_tjqr").empty();
            });

            $(".fyss_qrtj_list").click(function() {
                $(this).remove();
            });

        });

        //加入收藏
        $(".collection").click(function() {
            var self = $(this);
            var id = self.attr('data-id');
            $.post('<?php echo Yii::app()->createUrl('house/collection'); ?>', {'id': id}, function(json) {
                if (json.status == 200) {
                    alert(json.msg);
                    self.addClass("collected");
                } else if (json.status == 404) {
                    alert(json.msg);
                    window.location.href = "<?php echo Yii::app()->createUrl('site/login', array('original' => Yii::app()->request->getUrl())); ?>";
                } else {
                    alert(json.msg);
                }
            }, 'json');

        });

        //图片视频tab切换
        $(".fyxq_tab_tp").click(function() {
            $(this).addClass("fyxq_tab_cur");
            $(".fyxq_tab_sp").removeClass("fyxq_tab_cur");
            $(".diflash").show();
            $(".fyxq_tab_cont_sp").hide();
        });

        $(".fyxq_tab_sp").click(function() {
            $(this).addClass("fyxq_tab_cur");
            $(".fyxq_tab_tp").removeClass("fyxq_tab_cur");
            $(".diflash").hide();
            $(".fyxq_tab_cont_sp").show();
        });

    });
    //附近房源左右滚动效果
    $(function() {
        var i = 4
        var cont = $(".fjfy_gd_body img").size();
        var kd = (cont * 198) + "px";
        var last = (cont - i) * 198 + "px";
        var page = 1;
        var o = cont - 3;
        var page_cont = cont;
        $(".fjfy_gd_body_left").click(function() {
            if (page == 1) {
                $(".fjfy_gd_body").animate({"margin-left": '-=' + last}, 1000);
                page = o;
            }
            else {
                $(".fjfy_gd_body").animate({"margin-left": "+=198px"}, 1000);
                page--;
            }
            $("i").text(page);
        });

        $(".fjfy_gd_body_right").click(function() {
            if (page == o) {
                $(".fjfy_gd_body").animate({"margin-left": "0"}, 1000);
                page = 1;
            }
            else {
                $(".fjfy_gd_body").animate({"margin-left": "-=198px"}, 1000);
                page++;
            }
            $("i").text(page);
        });

    });
    //热点推荐左右滚动效果
    $(function() {
        var i = 4
        var cont = $(".fjfy_rd_body img").size();
        var kd = (cont * 198) + "px";
        var last = (cont - i) * 198 + "px";
        var page = 1;
        var o = cont - 3;
        var page_cont = cont;
        $(".fjfy_rd_body_left").click(function() {
            if (page == 1) {
                $(".fjfy_rd_body").animate({"margin-left": '-=' + last}, 1000);
                page = o;
            }
            else {
                $(".fjfy_rd_body").animate({"margin-left": "+=198px"}, 1000);
                page--;
            }
            $("i").text(page);
        });

        $(".fjfy_rd_body_right").click(function() {
            if (page == o) {
                $(".fjfy_rd_body").animate({"margin-left": "0"}, 1000);
                page = 1;
            }
            else {
                $(".fjfy_rd_body").animate({"margin-left": "-=198px"}, 1000);
                page++;
            }
            $("i").text(page);
        });

    });
</script>

<script type="text/javascript">
    flowplayer("video_wrap", "<?php echo Yii::app()->theme->baseUrl; ?>/js/flowplayer-3.2.12.swf", {
        clip: {
            url: "<?php echo Yii::app()->request->baseUrl; ?>" + "/" + "<?php echo $house->video_url; ?>",
            autoPlay: false,
            autoBuffering: true
        },
        plugins: {
            controls: {
                play: true, //开端按钮
                volume: true, //音量按钮
                mute: true, //静音按钮
                fullscreen: true, //全屏按钮
                scrubber: true, //进度条
                time: true, //是否显示时候信息
                autoHide: true    //功能条是否主动隐蔽
            }
        }
    });

    //图片焦点图切换
    var sj = 5000;
    $(function() {
        i = 0
        n = $(".diflashup span").length;
        time = setInterval("autoone()", sj);
    });

    function autoone() {
        i = i + 1;
        dq = i - 1;
        $(".diflashdown span:eq('" + dq + "')").addClass("span_cur").siblings().removeClass("span_cur");
        $(".diflashup span:eq('" + dq + "')").fadeIn(500).siblings().hide();
        if (i == n) {
            i = 0;
        }
    }

    $(document).ready(function() {
        $(".diflashdown span").mouseover(function() {
            var zs = $(this).index();
            $(this).addClass("span_cur").siblings().removeClass("span_cur");
            $(".diflashup span:eq('" + zs + "')").fadeIn(500).siblings().hide();
            clearTimeout(time);
        })
    });

    $(document).ready(function() {
        $(".diflashdown span").mouseout(function() {
            var zs = $(this).index();
            autotwo(zs);
            time = setInterval("autoone()", sj);
        })
    });

    function autotwo(k) {
        i = k;
        i = i + 1;
        dq = i - 1;
        $(".diflashdown span:eq('" + dq + "')").addClass("span_cur").siblings().removeClass("span_cur");
        $(".diflashup span:eq('" + dq + "')").fadeIn(500).siblings().hide();

        if (i == n) {
            i = 0;
        }
    }

    //小图片左右滚动
    $(function() {
        var page = 1;
        var t = 4; //每版放4个图片
        //向后 按钮
        $(".next-btn").click(function() {    //绑定click事件
            var content = $(".diflashdown");
            var content_list = $(".diflashdown_gd");
            var v_width = content.width();
            var len = content.find("span").length;
            var page_count = Math.ceil(len / t);   //只要不是整数，就往大的方向取最小的整数
            if (!content_list.is(":animated")) {    //判断“内容展示区域”是否正在处于动画
                if (page == page_count) {  //已经到最后一个版面了,如果再向后，必须跳转到第一个版面。
                    content_list.animate({left: '0px'}, "slow"); //通过改变left值，跳转到第一个版面
                    page = 1;
                } else {
                    content_list.animate({left: '-=' + v_width}, "slow");  //通过改变left值，达到每次换一个版面
                    page++;
                }
            }
        });
        //往前 按钮
        $(".prev-btn").click(function() {
            var content = $(".diflashdown");
            var content_list = $(".diflashdown_gd");
            var v_width = content.width();
            var len = content.find("span").length;
            var page_count = Math.ceil(len / t);   //只要不是整数，就往大的方向取最小的整数
            if (!content_list.is(":animated")) {    //判断“内容展示区域”是否正在处于动画
                if (page == 1) {  //已经到第一个版面了,如果再向前，必须跳转到最后一个版面。
                    content_list.animate({left: '-=' + v_width * (page_count - 1)}, "slow");
                    page = page_count;
                } else {
                    content_list.animate({left: '+=' + v_width}, "slow");
                    page--;
                }
            }
        });
    });

    //google地图开始
    $(function() {
        mapinit();
    });

    function mapinit() {
        ///地图
        var mapLatLng = new google.maps.LatLng(parseFloat(<?php echo $jingweidu['lat']; ?>), parseFloat(<?php echo $jingweidu['lng']; ?>));
        var myOptions = {
            zoom: 13,
            center: mapLatLng,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };

        var map1 = new google.maps.Map(document.getElementById('map1'), myOptions);
        var marker1 = new google.maps.Marker({
            position: mapLatLng,
            map: map1
        });
    }

    function daolumap() {
        $('.hsdts_box5 a').removeClass('fyxqdown_left_cur').eq(0).addClass('fyxqdown_left_cur');
        $('.hsdts_box5 .dataWrap').hide().eq(0).show();
        var mapLatLng = new google.maps.LatLng(parseFloat(<?php echo $jingweidu['lat']; ?>), parseFloat(<?php echo $jingweidu['lng']; ?>));
        var myOptions = {
            zoom: 13,
            center: mapLatLng,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        var map1 = new google.maps.Map(document.getElementById('map1'), myOptions);
        var marker1 = new google.maps.Marker({
            position: mapLatLng,
            map: map1
        });
    }

    function streetmap(loca) {
        if (true) {
            var mapLatLng = new google.maps.LatLng(parseFloat(<?php echo $jingweidu['lat']; ?>), parseFloat(<?php echo $jingweidu['lng']; ?>));
            var panoramaOptions = {pov: {heading: 0, pitch: 0, zoom: 0}, position: mapLatLng};
            if (loca == 0) {
                var panorama = new google.maps.StreetViewPanorama(document.getElementById("streetMap"), panoramaOptions);
            } else if (loca == 1) {
                $('.hsdts_box5 a').removeClass('fyxqdown_left_cur').eq(1).addClass('fyxqdown_left_cur');
                $('.hsdts_box5 .dataWrap').hide().eq(1).show();
                var Streetmap2 = new google.maps.StreetViewPanorama(document.getElementById("map2"), panoramaOptions);
            } else {
                $('.hsdts_box5 a').removeClass('fyxqdown_left_cur').eq(1).addClass('fyxqdown_left_cur');
                $('.hsdts_box5 .dataWrap').hide().eq(1).show();
                var Streetmap2 = new google.maps.StreetViewPanorama(document.getElementById("map2"), panoramaOptions);
                var panorama = new google.maps.StreetViewPanorama(document.getElementById("streetMap"), panoramaOptions);
            }
        }
    }
</script>