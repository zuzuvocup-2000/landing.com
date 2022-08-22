<form method="post" action="" class="form-horizontal box" >
	<div class="wrapper wrapper-content animated fadeInRight">
		<div class="row">
			<div class="box-body">
				<?php echo  (!empty($validate) && isset($validate)) ? '<div class="alert alert-danger">'.$validate.'</div>'  : '' ?>
			</div><!-- /.box-body -->
		</div>
		<div class="row">
			<div class="col-lg-5">
				<div class="panel-head">
					<h2 class="panel-title">Thông tin chung</h2>
					<div class="panel-description">
						Một số thông tin cơ bản của khuyến mãi.
					</div>
				</div>
			</div>
			<div class="col-lg-7">
				<div class="ibox m0">
					<div class="ibox-content">
						<div class="row mb15">
							<div class="col-lg-6 mb15">
								<div class="form-row">
									<label class="control-label text-left">
										<span>Tiêu đề <b class="text-danger">(*)</b></span>
									</label>
									<?php echo form_input('title', set_value('title', (isset($promotion['title'])) ? $promotion['title'] : ''), 'class="form-control " placeholder="" autocomplete="off"');?>
								</div>
							</div>
							<div class="col-lg-6 mb15">
								<div class="dd-item">
									<label class="control-label text-left">
										<span>Số lượng tối đa <b class="text-danger">(*)</b></span>
									</label>
									<?php echo form_input('max', set_value('max', (isset($promotion['max'])) ? $promotion['max'] : ''), 'class="form-control " placeholder="" autocomplete="off"');?>
								</div>
							</div>
							
							<div class="col-lg-12 mb15 ">
								<label class="control-label ">
									<span class="label-title">Mã khuyến mãi <b class="text-danger">(*)</b></span>
								</label>
								<div class="uk-flex uk-flex-middle">
									<script>
										var promotionid = '<?php echo isset($promotion['promotionid']) ? $promotion['promotionid'] : (isset($_POST['promotionid']) ? $_POST['promotionid'] : '') ?>'
									</script>
									<div class="dd-item w100 mr20 data-promotion">
										<?php echo form_input('promotionid', set_value('promotionid', (isset($promotion['promotionid'])) ? $promotion['promotionid'] : ''), 'class="form-control  promotionid" readonly placeholder="" autocomplete="off"');?>
										<input type="text" name="promotionid_original" class="form-control  promotionid_original" value="<?php echo (isset($promotion['promotionid_original'])) ? $promotion['promotionid_original'] : ((isset($promotion['promotionid']) ? $promotion['promotionid'] : '')) ?>" style="display: none;">
										<input type="checkbox" id="toogle_readonly" name="toogle_readonly">
									</div>
									<button class="btn btn-warning btn-sm create-random-promotion" >Lưu</button>
								</div>
								
							</div>
							<div class="col-lg-12 mb15">
								<div class="form-row">
									<label class="control-label text-left">
										<span>Số tiền giảm <b class="text-danger">(*)</b></span>
									</label>
									<?php echo form_input('price', validate_input(set_value('price', (isset($promotion['price'])) ? $promotion['price'] : '')), 'class="form-control price int" placeholder="" id="price" autocomplete="off"'); ?>
								</div>
							</div>
							<?php 
							if($method == 'update'){ 
								?>
								<div class="col-lg-12 ">
									<div class="dd-item">
										<label class="control-label text-left">
											<span>Khuyến mãi đã sử dụng</span>
										</label>
										<?php echo form_input('count_bill', set_value('count_bill', (isset($promotion['count_bill'])) ? $promotion['count_bill'] : ''), 'class="form-control " placeholder="" disabled autocomplete="off"');?>
									</div>
								</div>
							<?php
							 } 
							 ?>
						</div>
						<div class="toolbox action clearfix">
							<div class="uk-flex uk-flex-middle uk-button pull-right">
								<button class="btn btn-primary btn-sm" name="create" value="create" type="submit">Lưu lại</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>