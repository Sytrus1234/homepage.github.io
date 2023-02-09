<!DOCTYPE html>
<html lang="ja-JP">
<head>
	<meta charset="UTF-8">
	<title>ようこそ</title>
	<style>
		@keyframes fade {
			0% {opacity: 0;}
			100% {opacity: 1;}
		}

		body {
			background: #202124;
			color: #E8EAED;
			width: 100%;
			max-width: 1280px;
			margin:auto;
		}

		header {
			padding: 30px 4% 10px;
			left: 50%;
			top: 0;
			transform: translateX(-50%);
			width: 100%;
			max-width: 90%;
			position: fixed;
			display: flex;
			align-items: center;

			opacity: 0;
			animation: fade .6s ease-in-out 1.4s normal forwards;
		}
		.aHeader {
			padding: 0;
			margin: 0;
		}
		img {
			width: 80px;
			height: 80px;
		}
		h1 {
			margin: 0;
			padding: 0;
			font-size: 20px;
		}
		ul {
			list-style: none;
			margin: 0;
			display: flex;
		}
		li {
			margin: 0 0 0 15px;
			font-size: 14px;
		}
		nav {
			margin: 0 0 0 auto;
		}
		.aHeader {
			text-decoration: none;
			color: #E8EAED;
		}

		main {
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);

			margin: 0;
			padding: 0;
			text-align: center;
		}
		.title {
			font-size: 20px;
			padding: 15px 30px;
			opacity: 0;
			animation: fade .6s ease-in-out .2s 1 normal forwards;
		}
		.url {
			padding: 4px 9px;
			background: linear-gradient(0deg, rgba(172, 172, 172, 1), rgba(233, 233, 233, 1) 25%);
			font-size: 20px;
			color: #202124;
			border: #E8EAED;
			border-radius: 10%;
			text-decoration: none;
			opacity: 0;
			animation: fade .6s ease-in-out .8s 1 normal forwards;
		}
	</style>
</head>
<body>
<header>
	<h1>
		<a href="" class="aHeader"><img src="{{ asset('images/oca.png') }}" alt="OCA"></a>
	</h1>
	<nav class="pc-nav">
		<ul>
			<li><a href="#" class="aHeader">このサイトについて</a></li>
			<li><a href="#" class="aHeader">管理画面</a></li>
			<li><a href="https://www.oca.ac.jp/" class="aHeader">学校ホームページ</a></li>
		</ul>
	</nav>
</header>
<main>
	<p class="title">ようこそ</p>
	<a href="{{ route('welcome.login') }}" class="url">Log In</a>
	<a href="{{ route('welcome.signup') }}" class="url">Sign Up</a>
</main>
<footer>

</footer>
</body>
</html>