<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-width=1.0, maximum=1.0, user-scalable=0">
    <meta name="keywords" content="ideas, share, blog, code, music">
    <link rel="stylesheet" href="index.css?ver=1.0">
    <link rel="shortcut icon" type="image/x-icon" id="icon">
	<title>平面设计工具网站收藏</title>
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
		<img src="https://domeii.ml/images/business-computer-connection-contemporary-270640.jpg" id="cover" class="picture">
		<p id="title">平面设计工具网站收藏</p><hr>
		<div id="infoWrap">
			<img src="https://domeii.ml/images/portrait_lw.png" class="portrait">
			<p class="editDate">2020/1/4</p>
		</div><br>
		<h2>LOGO图标类</h2>
		<a href="https://www.iconfont.cn/"><img src="images/TB1_oz6GVXXXXaFXpXXJDFnIXXX-64-64.ico" width="80px"></a>
		<a href="http://www.instantlogosearch.com/"><img src="images/apple-icon-180x180.png" width="80px"></a>
		<a href="https://thenounproject.com/"><img src="images/apple-touch-icon.7fb1143e988e.png" width="80px"></a>
		<h2>高清图库</h2>
		<a href="https://500px.com/"><img src="images/favicon.ico" width="80px"></a>
		<a href="https://www.pexels.com/"><img src="images/apple-touch-icon-06fc98261c772fe20d584aba2336ad2bb32dffced6ec5470b03228548042f162.png" width="80px"></a>
		<a href="https://unsplash.com/"><img src="images/apple-touch-icon.png" width="80px"></a>
		<h2>配色类</h2>
		<a href="https://colorme.io/"><img src="images/favicon1.ico" width="80px"></a>
		<a href="http://khroma.co/"><img src="images/fav.png" width="80px"></a>
		<a href="https://www.colordrop.io/"><img src="images/apple-touch-icon-180x180.png" width="80px"></a>
		<a href="http://colormind.io/"><img src="images/favicon32.gif" width="80px"></a>
		<h2>Mock Up</h2>
		<a href="https://placeit.net/"><img src="images/favicon.png" width="80px"></a>
		<a href="https://creativemarket.com/"><img src="images/fav128.png?v5" width="80px"></a>
		<h2>资讯类</h2>
		<a href="http://www.voicer.me/"><img src="images/icon_homescreen_144.png" width="80px"></a>
		<a href="https://www.topys.cn/"><img src="images/favicon2.ico" width="80px"></a>
		<a href="https://hypebeast.cn/"><img src="images/favicon3.ico" width="80px"></a>
		<h2>设计案例</h2>
		<a href="https://www.pinterest.com/"><img src="images/favicon-fd1ea058.png" width="80px"></a>
		<a href="https://www.zcool.com.cn/"><img src="images/favicon4.ico" width="80px"></a>
		<a href="https://scene360.com/"><img src="images/favicon-2016.ico" width="80px"></a>
		<h2>字体类</h2>
		<a href="https://www.fontke.com/"><img src="images/favicon5.ico" width="80px"></a>
		<a href="http://www.likefont.com/"><img src="images/favicon6.ico" width="80px"></a>
		<h2>门户&黄页</h2>
		<a href="http://91sotu.com/"><img src="images/favicon7.ico" width="80px"></a>
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
