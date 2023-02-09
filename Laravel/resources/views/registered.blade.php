<!DOCTYPE html>
<html lang="ja-JP">
<head>
	<meta charset="UTF-8">
	<title></title>
	<style>
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

			opacity: 1;
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
	<p>登録完了</p>
	<a href="{{ route('welcome.login') }}">ログイン画面へ</a>
</main>
<footer>

</footer>
</body>
</html>