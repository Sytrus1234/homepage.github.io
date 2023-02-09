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
			position: fixed;
			top: 50%;
			left: 50%;
			width: 100%;
			max-width: 65%;
			transform: translate(-50%, -50%);
		}
		label {
			display: inline-block;
			text-align:	right;
			height: 20px;
			width:
			150px;
		}
		input {
			font-size: 20px;
		}
		.form_butbox {
			display: flex;
			justify-content: flex-end;
		}
		button {
			width: 100%;
			height: 100%;
			max-width: 250px;
			vertical-align: center;
			text-decoration: none;
			padding: 1rem 4rem;
			font-weight: bold;
			background: linear-gradient(to top, #050505, rgb(70, 70, 70));
			color: #ffffff;
			box-shadow: 0 2px 5px rgba(0, 0, 0, .2);
			-webkit-box-shadow: 0 2px 5px rgba(0, 0, 0, .2);
			transition: 0.5s;
		}
		button:hover {
			color: #ffffff;
			opacity: .5;
		}
		.flex {
			display: flex;
		}
		.flex div {
			box-sizing: border-box;
			padding: 10px 50px;
		}
		.left {
			display: grid;
			place-items: center;
			width: calc(100% - 500px);
		}
		.right {
			width: 500px;
		}
		.right h1 {
			margin: 0 auto;
			width: 500px;
			text-align: center;
			font-size: 40px;
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
<div class="flex">
	<div class="left">
		<form action="{{ route('auth.auth') }}" method="post">
			@csrf
			<div>
				<label for="userId">ユーザーID</label>
				<input type="text" name="userId" id="userId" required>
			</div>
			<div>
				<label for="password">パスワード</label>
				<input type="password" name="password" id="password" required>
			</div>
			<div class="form_butbox">
				<button type="submit" name="action" value="login">ログイン</button>
			</div>
		</form>
	</div>
	<div class="right">
		<h1>おかえりなさい</h1>
		<video poster="{{ asset("images/assets/Welcome_back.png") }}" loop autoplay muted playsinline>
			<source src="{{ asset("videos/Welcome_back.mp4")}}" type="video/mp4">
				<p>何らかの理由で動画が表示されませんでした</p>
		</video>
	</div>
	<div>

	</div>
</div>
</main>
<footer>

</footer>
</body>
</html>