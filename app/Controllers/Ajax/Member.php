<?php 
namespace App\Controllers\Ajax;
use App\Controllers\BaseController;
use App\Libraries\Mailbie;

class Member extends BaseController{
	
	public function __construct(){
		helper(['mymail','mystring','mydata','text']);
	}


	public function reset_pass(){
		$response = [];
		try {
			$id = $this->request->getPost('id');
			$user = $this->AutoloadModel->_get_where([
		 		'select' => 'id, fullname, email, otp, otp_live',
		 		'table' => 'member',
		 		'where' => [
		 			'id' => $id,
		 			'deleted_at' => 0
		 		],
		 	]);

		 	if(!isset($user) || !is_array($user) || count($user) == 0){
		 		$response['message'] = 'Tài khoản không tồn tại!';
				$response['code'] = '99';
		 	}else{
				$salt = random_string('alnum', 168);
		 		$password = random_string('numeric', 6);
		 		$password_encode = password_encode($password, $salt);
		 		$update = [
		 			'password' => $password_encode,
		 			'salt' => $salt,
		 		];

		 		$flag = $this->AutoloadModel->_update([
		 			'table' => 'member',
		 			'data' => $update,
		 			'where' => ['id' => $user['id']]
		 		]);
		 		if($flag > 0){
		 			$mailbie = new Mailbie();
				 	$mailFlag = $mailbie->send([
			 			'to' => $user['email'],
			 			'subject' => 'Quên mật khẩu cho tài khoản: '.$user['email'],
			 			'messages' => '<h3>Mật khẩu mới của bạn là: '.$password.'</h3><div><a target="_blank" href="'.base_url('login.html').'">Click vào đây để tiến hành đăng nhập</a></div>',
			 		]);
			 		$response['message'] = 'Mật khẩu mới đã được gửi vào Email của bạn!';
					$response['code'] = '10';
		 		}elsE{
		 			$response['message'] = 'Có lỗi xảy ra xin vui lòng thử lại!';
					$response['code'] = '99';
		 		}
		 	}

	 	}catch(Exception $e) {
			$response['message'] = $e->getMessage();
			$response['code'] = '99';
		}

		echo json_encode([
			'response' => $response
		]);die();	
	}
}
