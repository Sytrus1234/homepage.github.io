<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sessionFunction {
	public function generateSessionId(int $length = 64): string {
		return bin2hex(random_bytes($length));
	}
}

class lunaStoneController extends Controller
{
	public function index() {
		return view('index');
	}

	public function signup(Request $request) {
		$fnc = new sessionFunction();
		$fnc = $fnc->generateSessionId(64);
		$request->session()->put('sessionKey', $fnc);
		return view('signup', compact('fnc'));
	}

	public function login() {
		return view('login');
	}

	public function logout() {}

	public function resister(Request $request) {
		if ($request->session()->get('sessionKey') != $request->sessionId) {
			echo die("session ID dosen't match.");
		}
		if ($request->password != $request->verify) {
			echo die("password dosen'a match.");
		}
		try {
			if (isset($request->userImagePath)) {
				$userImagePath = $request->userImagePath;
			} else {
				$userImagePath = '01/default.png';
			}

			if (isset($request->userType)) {
				$userType = $request->userType;
			} else {
				$userType = "student";
			}

			$hased_pass = hash('sha256', $request->password);

			$item = new \App\Models\USER;
			$item->userId = $request->userId;
			$item->userName = $request->userName;
			$item->userEmail = $request->userEmail;
			$item->userPassword = $hased_pass;
			$item->userImagePath = $userImagePath;
			$item->userType = $userType;
			$item->save();


			return view('registered');
		} catch (\Exception $e) {
			echo '登録に失敗しました。<br>発生した例外：', $e->getMessage();
		}

	}

	public function authorization(Request $request) {
		$userId = $request->userId;
		$password = $request->password;
		$hashed_pass = hash('sha256', $request->password);

		try {
			$item = new \App\Models\USER;
			$sqlPass = $item->select('userPassword')->where('userId', $userId)->first();
			echo $userId, "<br>", $hashed_pass, "<br>",$sqlPass['userPassword'];
			if ($hashed_pass != $sqlPass['userPassword']) {
				echo die("ユーザーID又はパスワードが一致しません");
			} else {
				$username = $item->select('userName')->where('userId', $userId)->first();
				return redirect()->route('mypage.home', ['id' => $userId, 'userName' => $username['userName']]);
			}

		} catch (\Exception $e) {
			echo '失敗';
		}

	}

	public function mypage($id, $userName) {
		return view('mypage', compact('id', 'userName'));
	}
}