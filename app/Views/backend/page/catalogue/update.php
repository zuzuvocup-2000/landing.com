<?php
    $baseController = new App\Controllers\BaseController();
    $language = $baseController->currentLanguage();
?>
<div class="row wrapper border-bottom white-bg page-heading">
	<div class="col-lg-10">
		<h2>Cập nhật Nhóm Tuyển dụng</h2>
		<ol class="breadcrumb">
			<li>
				<a href="<?php echo site_url('admin'); ?>"><?php echo translate('cms_lang.post_catalogue.postcat_home', $language) ?></a>
			</li>
			<li class="active"><strong>Cập nhật Nhóm Tuyển dụng</strong></li>
		</ol>
	</div>
</div>
<?php echo view('backend/page/catalogue/store',  ['method' => $method]) ?>
