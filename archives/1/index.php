<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-width=1.0, maximum=1.0, user-scalable=0">
    <meta name="keywords" content="ideas, share, blog, code, music">
    <link rel="stylesheet" href="index.css?ver=1.1">
    <link rel="shortcut icon" type="image/x-icon" id="icon">
	<title>我的2019</title>
	<script  src="https://domeii.ml/js/jQuery/jquery-3.4.1.js?ver=1.0"></script>
	<script src="https://domeii.ml/js/default_config.js?ver=1.0"></script>
	<script>
		$(function(){
			$('#icon').attr('href', _iconpath);
		});
	</script>
</head>
<body>
	<!-- 最上面的条条 -->
	<script src="https://domeii.ml/js/standard_header.js?ver=1.0"></script>

	<!-- 正文 -->
	<div id="main">
		<img src="https://domeii.ml/images/black-action-camera-690806.jpg" id="cover" class="picture">
		<p id="title">我的2019</p><hr>
		<div id="infoWrap">
			<img src="https://domeii.ml/images/portrait_txm.png" class="portrait">
			<p class="editDate">2020/1/1</p>
		</div><br>
		<video src="https://domeii.ml/videos/VUE_20191231235725" class="videoHori" controls></video>
	</div>

	<!-- 测试回到顶部 -->
	<img id="goToTop" src="https://domeii.ml/images/top.svg">
		<script>

			var goToTop = document.getElementById('goToTop');
			var goToTopItv;

			window.onscroll = () => {
				if (document.documentElement.scrollTop > 600) {
					goToTop.style.zIndex = '4';
				} else {
					goToTop.style.zIndex = '-99';
				}
			};


			function goToTopMove() {
				let scrollH = document.documentElement.scrollHeight;
				document.documentElement.scrollTop -= scrollH / 10;
				if (document.documentElement.scrollTop == 0) {
					clearInterval(goToTopItv);
				}
			}

			const goToTopOnClick = () => {goToTopItv = setInterval(goToTopMove, 20)};

			goToTop.addEventListener('click', goToTopOnClick);
		</script>
	</img>

	<!-- 脚注 -->
	<script src="https://domeii.ml/javascript/standard_footer.js?ver=1.0"></script>
</body>
</html>
