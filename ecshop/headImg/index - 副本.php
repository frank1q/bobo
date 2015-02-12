<?php
define('IN_ECS', true);
require('../includes/init.php');
require('../includes/cls_image.php');
if(!isset($_SESSION['user_id'])){
	die('请先登陆');
}
?>



<!DOCTYPE html> 
<head> 
<meta charset="UTF-8"> 
<title>Edit</title> 
<script src="../js/jquery-2.0.3.min.js"></script>


  <link rel="stylesheet" type="text/css" href="css/imgareaselect-default.css" />
  <script type="text/javascript" src="scripts/jquery.imgareaselect.pack.js"></script>
  <script type="text/javascript" src="scripts/jQueryRotate.js"></script>
  <style>
	.portrait_left{float: left; height: auto; width: 306px;}
	#avatar{height: 280px;}
	.portrait_revolve{height: auto; padding-top: 15px; width: 306px;}.revolve_left{background: url("setup.gif") repeat scroll -128px -55px rgba(0, 0, 0, 0); float: left; height: 22px; width: 22px;}.revol_left_txt{color: #FF6699; float: left; height: 22px; line-height: 22px; text-align: left; width: 110px;}
	.revol_left_txt{color: #FF6699;float: left;height: 22px;line-height: 22px;text-align: left;width: 110px;}
	.revol_right_txt{color: #FF6699;float: left;height: 22px;line-height: 22px;text-align: right;width: 131px;}
	.revolve_right{background: url("setup.gif") repeat scroll -128px -77px rgba(0, 0, 0, 0); float: left; height: 22px; width: 22px;}
	.setup_but{height: 28px; padding-left: 93px; padding-top: 40px; width: auto;}
	.baseinf_but1{background: url("secondary.gif") repeat scroll -194px -96px rgba(0, 0, 0, 0); border: medium none; color: #FFFFFF; font-size: 14px; font-weight: bold; height: 28px; line-height: 28px; margin-right: 22px; outline: medium none; width: 78px;}
	.portrait_right{float: left; font-size: 12px; height: 280px; padding-left: 80px; width: 320px;}
	.portrait_right_bottom{color: #666666; height: 220px; width: 310px;}
	.portrait1{float: left; height: 200px; width: 180px;}
	#img_big_preview{height: 180px; margin: 0 auto; width: 180px;}.img_preview{border: 1px solid #000000; overflow: hidden; position: relative;}.img_preview img{margin: 0; position: relative;}.portrait2{float: left; height: auto; padding-left: 40px; width: 68px;}
	#img_small_preview{height: 49px; margin: 0 auto; width: 49px;}.img_preview{border: 1px solid #000000; overflow: hidden; position: relative;}
      div.yc-headdiv {
        position: absolute;
        top: 70px;
        left: 70px;
        width: 140px;
        height: 140px;
      }
      div.yc-headdiv > img {
          width: 100%;
          height: 100%;
      }
  </style>


</head>
<body>



	<?php
	if(!isset($_POST['sub'])){ 
		echo '<form action="index.php" method="post" enctype="multipart/form-data">
				<input type="file" name="upload" >
				<input type="submit" value="上传图片" name="sub" id="sub">
			</form>';
	}
	else{
		if(!isset($_FILES['upload'])){
			die('Error');
		}
		$image = new cls_image(); 
		$data = $image->upload_image($_FILES['upload']);
		$thumb_img = $image->make_thumb('../'.$data,800,800);
		// var_dump($thumb_img);
		?>
	<canvas id="canvas"  width=800 height=800 >
		不支持
	</canvas>
	<img src="../<?php echo $thumb_img;?>" alt="" hidden id="zm">
	<img src="head.png" alt="" hidden id="head">
	<img src="head_headle.png" alt="" hidden id="head_headle">

    <div class="portrait_left">
        <div id="picture" style="border: 1px solid #000000;overflow: hidden;position: relative;height: 800px;width: 800px;margin: 0 auto;">
            <img id="avatar" width="800" alt="请上传头像" src="../<?php echo $thumb_img;?>" />
            <div class="yc-headdiv"><img src="face_chopping.png" /></div>
        </div>
        <form id="crop_form" method="post" action="">
            <!--通过生成尺寸和旋转角度 后台获取尺寸和旋转角度再进行裁剪-->
            <input id="id_top" type="hidden" name="top" value="90" />
            <input id="id_left" type="hidden" name="left" value="61" />
            <input id="id_right" type="hidden" name="right" value="201" />
            <input id="id_bottom" type="hidden" name="bottom" value="200" />
            <input id="rotation" type="hidden" value="0" name="rotation" />
        </form>
        <div class="portrait_revolve">
            <div class="revolve_left"></div>
            <a href="javascript:;" class="revol_left_txt" onclick="avatarrotateleft();">向左旋转</a>
            <a href="javascript:;" class="revol_right_txt" onclick="avatarrotateright();">向右旋转</a>
            <div class="revolve_right"></div>
        </div>
        <div class="setup_but">
            <button class="baseinf_but1" onclick="submit_avatar();">确定</button>
        </div>
    </div>
    <script type="text/javascript">
        var centerPointX = 140, centerPointY = 140,imageWidth = 140,imageHeight = 140;

    $(document).ready(function () {
        function adjust(el, selection) {
            var scaleX = $(el).width() / (selection.width || 1);
            var scaleY = $(el).height() / (selection.width || 1);
            $(el + ' img').css({
                width: Math.round(scaleX * $('#avatar').width()) + 'px',
                height: Math.round(scaleY * $('#avatar').height()) + 'px',
                marginLeft: '-' + Math.round(scaleX * selection.x1) + 'px',
                marginTop: '-' + Math.round(scaleY * selection.y1) + 'px'
            });
        }
        var yc_headdiv = $('div.yc-headdiv');
        function preview(img, selection) {
            adjust('#img_small_preview', selection);
            adjust('#img_big_preview', selection);
            yc_headdiv.css({ 'top': selection.y1 + 'px', 'left': selection.x1 + 'px', 'width': (selection.x2 - selection.x1) + 'px', 'height': (selection.y2 - selection.y1) + 'px' });
        }
        $('img#avatar').imgAreaSelect({
            aspectRatio: "4:4",
            x1: 70,
            y1: 70,
            x2: 210,
            y2: 210,
            onSelectEnd: function (img, selection) {
                $('#id_top').val(selection.y1);
                $('#id_left').val(selection.x1);
                $('#id_right').val(selection.x2);
                $('#id_bottom').val(selection.y2);
                centerPointX = (selection.x1 + selection.x2) / 2;
                centerPointY = (selection.y1 + selection.y2) / 2;
                imageWidth = selection.x2 - selection.x1;
                imageHeight = selection.y2 - selection.y1;
                yc_headdiv.css({ 'top': selection.y1 + 'px', 'left': selection.x1 + 'px', 'width': (selection.x2 - selection.x1) + 'px', 'height': (selection.y2 - selection.y1) + 'px' });
                console.log('x='+centerPointX + ' , y=' + centerPointY+' , w='+imageWidth);
            },
            onSelectChange: preview
        });
    });



    var value = 0;
    function avatarrotateleft() {
        value -= 90;
        $('#avatar').rotate({ animateTo: value });
        $('#avatar1').rotate({ animateTo: value });
        $('#avatar2').rotate({ animateTo: value });
    }
    function avatarrotateright() {
        value += 90;
        $('#avatar').rotate({ animateTo: value });
        $('#avatar1').rotate({ animateTo: value });
        $('#avatar2').rotate({ animateTo: value });
    }
    function select_avatar() {
        $('#avatar_id').click();
    }
    function uploadavatar() {
        $('#avatar_form').submit();
    }
    function submit_avatar() {
        $('#rotation').val(value);
        alert('修改成功');
        $('#crop_form').submit();
    }
    </script>



	<form action="up.php" method="post">
		<input type="button" value="重新"  onclick="reload()">
		<input type="button" value="裁剪"  onclick="sub(2)">
		<input type="button" value="缩放"  onclick="zoom_click()">
		<input type="submit" value="保存图片" id="save">
		<input type="hidden" value"" id="imgUrl" name="imgUrl" >
		<input type="hidden" name="x" id="x" value="0">
		<input type="hidden" name="y" id="y" value="0">
	</form>
	<script>
		window.onload = function(){
			var x = document.getElementById('x');
			var y = document.getElementById('y');

			var canvas = document.getElementById('canvas');
			// var canvas1 = document.getElementById('canvas1');
			var cobj=canvas.getContext("2d");
			var head = document.getElementById('head');
			var head_headle = document.getElementById('head_headle');
			cobj.drawImage(head,0,0);
			cobj.fill();

			canvas.onmousedown=function  (e) {
			   var mx=e.layerX;
			   var my=e.layerY;
			     canvas.onmousemove=function  (e) {
			     	cobj.clearRect(0,0,800,800);
			     	cobj.beginPath();
			     	var mx=e.layerX;
			   		var my=e.layerY;
			   		x.value = mx;
			     	y.value = my;
			     	cobj.drawImage(head,mx,my);
			     	cobj.fill();
			     	
			     }
			 
			  canvas.onmouseup=function  () {
			    canvas.onmousemove=null;
				canvas.onmouseup=null;
			  }
			}
		}
		function sub(again){
			var xVal = x.value;
			var yVal = y.value;
			var cobj=canvas.getContext("2d");
			cobj.drawImage(head_headle,xVal,yVal);
			cobj.globalCompositeOperation='source-in';
			var img = document.getElementById('zm');
			cobj.drawImage(img,0,0);
			cobj.fill();
			cobj.stroke();
	  		cobj.closePath();
			cobj.save();
			if(again==0){
				var imageUrl = canvas.toDataURL("image/png");
				document.getElementById('imgUrl').value = imageUrl;
			}
			if(again==2){
				sub(0);
				document.getElementById('canvas').style.background='none';
				// canvas.remove();
			}
		}
		function reload(){
			document.location.reload();
		}
		function zoom_click(){
			var cobj=canvas.getContext("2d");
			alert(cobj);
		}
	</script>
	<style>
		#canvas{
			background:url(../<?php echo $thumb_img;?>) no-repeat;
			position:relative;
			margin: 0 auto;
		}
		body{
			margin: 0px;
			padding: 0;
		}
	</style>


	<?php } ?>

</body>
</html>