<?php
namespace App\Controllers\Ajax;
use App\Controllers\BaseController;

class Promotion extends BaseController{

	public function __construct(){
	}

	public function update_price_promotion(){
		$id = $this->request->getPost('id');
		$val = $this->request->getPost('val');
		$field = $this->request->getPost('field');
		$flag = $this->AutoloadModel->_update([
			'table' => 'promotion',
			'data' => [$field => $val],
			'where' => [
				'id' => $id
			]
		]);

		$param['data'] = [
			'id' => $id,
			'val' => $val,
			'field' => $field
		];
		echo json_encode($param['data']);die();
	}
}
