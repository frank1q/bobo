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
	#avatar{height: 800px;}

      div.yc-headdiv {
        position: absolute;
        left: 0;
        top: 0;
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
    <div class="portrait_left">
        <div id="picture" style="border: 1px solid #000000;overflow: hidden;position: relative;height: 800px;width: 800px;margin: 0 auto;">
            <img id="avatar" width="800" height="800" alt="请上传头像" src="../<?php echo $thumb_img;?>" />
            <div class="yc-headdiv"><img src="my_face.png" /></div>
        </div>
        <form id="crop_form" method="post" action="">
            <!--通过生成尺寸和旋转角度 后台获取尺寸和旋转角度再进行裁剪-->
            <input id="id_top" type="hidden" name="top" value="0" />
            <input id="id_left" type="hidden" name="left" value="0" />
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
    </div>
    <script type="text/javascript">
        var centerPointX = 140, centerPointY = 140,imageWidth = 140,imageHeight = 140;

    $(document).ready(function () {
    	$('#up').submit(function(){
    		if(!sub()){
    			return false;
    		}
    		
    	})

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
            x1: 0,
            y1: 0,
            x2: 140,
            y2: 140,
            onSelectEnd: function (img, selection) {
                $('#id_top').val(selection.y1);
                $('#id_left').val(selection.x1);
                $('#y').val(selection.y1);
                $('#x').val(selection.x1);
                $('#id_right').val(selection.x2);
                $('#id_bottom').val(selection.y2);
                centerPointX = (selection.x1 + selection.x2) / 2;
                centerPointY = (selection.y1 + selection.y2) / 2;
                imageWidth = selection.x2 - selection.x1;
                imageHeight = selection.y2 - selection.y1;
                yc_headdiv.css({ 'top': selection.y1 + 'px', 'left': selection.x1 + 'px', 'width': (selection.x2 - selection.x1) + 'px', 'height': (selection.y2 - selection.y1) + 'px' });
                // console.log('x='+centerPointX + ' , y=' + centerPointY+' , w='+imageWidth);
                $('#imageWidth').val(imageWidth);
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



	<form action="up.php" method="post" id="up">
		<input type="button" value="重新"  onclick="reload()">
		<!-- <input type="button" value="裁剪"  onclick="sub()"> -->
		<input type="submit" value="保存图片" id="save">
		<input type="hidden" value"" id="imgUrl" name="imgUrl" >
		<input type="hidden" name="x" id="x" value="0">
		<input type="hidden" name="y" id="y" value="0">
		<input type="hidden" name="imageWidth" id="imageWidth" value="140">
	</form>

	<img src="../<?php echo $thumb_img;?>" alt="" hidden id="zm">
	<img src="face_chopping.png" alt="" hidden id="head_headle">
	<canvas id="canvas" width="800" height="800"></canvas>
	<script>
	
	function sub(){
		// 获取图片数据
		var xVal = document.getElementById('x').value;
		var yVal = document.getElementById('y').value;
		var head_headle = document.getElementById('head_headle');
		var img = document.getElementById('zm');
		var imageWidth = document.getElementById('imageWidth').value;

		// 创建canvas
		var canvas = document.getElementById('canvas');		
		var cobj=canvas.getContext("2d");
		cobj.clearRect(0,0,800,800);
		cobj.drawImage(img,0,0);
		cobj.globalCompositeOperation='destination-in';
		cobj.drawImage(head_headle,xVal,yVal,imageWidth,imageWidth);
		cobj.fill();
		var imageUrl = canvas.toDataURL("image/png");
		if(imageUrl){
			document.getElementById('imgUrl').value = imageUrl;
			return true;
		}else{
			return false;
		}

	}
	function reload(){
		document.location.reload();
	}

	</script>
	<style>
		body{
			margin: 0px;
			padding: 0;
		}
	</style>


	<?php } ?>

</body>
</html>