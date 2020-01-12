/*
<div id="topBar">
	<img src="https://domeii.ml/images/domeii_logo_tran.png" id="logo">
	<img src="https://domeii.ml/images/menu.svg" id="menu">
	<script>
		let logo = document.getElementById('logo');
		const logoOnClick = () => {window.open(_hostname, '_self')};
		logo.addEventListener('click', logoOnClick);
	</script>
</div>
<div id="contentMask"></div>
<div id="menuDrop">
	<ul id="menuUl">
		<li>登录</li>
		<li>发现</li>
		<li>联系我们</li>
		<li>关于</li>
		<li>漫漫睡觉了吗？</li>
	</ul>
</div>
*/

var body = document.getElementsByTagName('body')[0];

var topBar = document.createElement('div');
topBar.setAttribute('id', 'topBar');

	var logo = document.createElement('img');
	logo.setAttribute('src', _hostname + 'images/domeii_logo_tran.png');
	logo.setAttribute('id', 'logo');
	topBar.appendChild(logo);

	var menu = document.createElement('img');
	menu.setAttribute('src', _hostname + 'images/menu.svg');
	menu.setAttribute('id', 'menu');
	topBar.appendChild(menu);

		const logoOnClick = () => {window.open(_hostname, '_self')};
		logo.addEventListener('click', logoOnClick);

body.appendChild(topBar);

var contentMask = document.createElement('div');
contentMask.setAttribute('id', 'contentMask');
body.appendChild(contentMask);

var menuDrop = document.createElement('div');
menuDrop.setAttribute('id', 'menuDrop');

	var menuUl = document.createElement('ul');
	menuUl.setAttribute('id', 'menuUl');

		var selections = ['登录', '发现', '联系我们', '关于', '漫漫睡觉了吗？'];
		for (let i of selections) {
			var menuUlLi = document.createElement('li');
			menuUlLi.innerHTML = i;
			menuUl.appendChild(menuUlLi);
		}

	menuDrop.appendChild(menuUl);

body.appendChild(menuDrop);

// 各项点击功能

const menuFirstClick = () => {window.open('https://domeii.ml/login.php', '_self')};
const menu5thClick = () => {alert('你知道了吗？')};

var menuFirstChild = document.getElementsByTagName('li')[0];
var menu5thChild = document.getElementsByTagName('li')[4];
menuFirstChild.addEventListener('click', menuFirstClick);
menu5thChild.addEventListener('click', menu5thClick);

// 点击菜单出现菜单

var menuDrop = document.getElementById('menuDrop');
var contentMask = document.getElementById('contentMask');
var menuDropMoveRate = 100;
var menuDropMove;
const menuDropDrops = () => {
	menuDropMoveRate -= 10;
	menuDrop.style.transform = `translate(0, ${menuDropMoveRate}%)`;
	if (menuDropMoveRate <= 0) {
		clearInterval(menuDropMove);
	}
};
const menuDropVeals = () => {
	menuDropMoveRate += 10;
	menuDrop.style.transform = `translate(0, ${menuDropMoveRate}%)`;
	if (menuDropMoveRate >= 100) {
		clearInterval(menuDropMove);
	}
};
function menuOnClick0() {
	menuDropMove = setInterval(menuDropDrops, 15);
	contentMask.style.opacity = '0.6';
	contentMask.style.zIndex = '5';

	$('body').css({'position':'fixed', 'width':'100%'});
}
var menu = document.getElementById('menu');
menu.addEventListener('click', menuOnClick0);

function contentMaskOnClick() {
	menuDropMove = setInterval(menuDropVeals, 15);
	contentMask.style.opacity = '0';
	contentMask.style.zIndex = '-5';

	$('body').css({'position':'initial', 'height':'auto'});
}
contentMask.addEventListener('click', contentMaskOnClick);