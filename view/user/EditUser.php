<?php include_once('layouts/header.php'); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			EDIT USER
			<!--  <div class="#kq"></div> -->
		</h1>
   <!--  <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Examples</a></li>
      <li class="active">Blank page</li>
  </ol> -->
</section>

<!-- Main content -->
<section class="content">
	<!-- Default box -->
	<div class="box">
		<div class="box-header with-border" id="table">
			<form action="?role=admin&mod=user&act=update" method="POST" enctype="multipart/form-data" role="form">
				<input type="hidden" name="id" value="<?= $data['id'] ?>">
				<div class="form-group">
					<label for="">Code</label>
					<input type="text" class="form-control" value="<?= $data['code'] ?>" name="code" required="required" placeholder="ABC" readonly autocomplete="off">
				</div>
				<div class="form-group">
					<label for="">Name</label>
					<input type="text" class="form-control" value="<?= $data['name'] ?>" name="name" required="required" placeholder="Nguyễn Văn A" autocomplete="off">
				</div>
				<div class="form-group">
					<label for="">Email</label>
					<input type="text" class="form-control" value="<?= $data['email'] ?>" name="email" required="required" autocomplete="off">
				</div>
				<div class="form-group">
					<label for="">Phone</label>
					<input type="text" class="form-control" value="<?= $data['phone'] ?>" name="phone"
					 required="required" placeholder="888-888-8888" pattern="[0-9]{3}[-][0-9]{3}[-][0-9]{4}" maxlength="12" autocomplete="off">
				</div>
				<?php if($data['role_id'] !== null){   ?>
				<div class="form-group">
					<label for="">Role</label>
					<select class="form-control" name="role_id" >
						
						<?php foreach ($role as $value) { ?>
							<option value="<?= $value['id'] ?>"

								<?php if(isset($_SESSION['value_old']) && $value['id'] == $_SESSION['value_old']['role_id']){?>
									selected
								<?php }else{ 
									if($value['id'] == $data['role_id']){?> 
										selected 
									<?php } ?> 
								<?php } ?>	
									><?= $value['name']?></option>
									

								
						<?php } ?>
					</select>
				</div>
				<?php } ?>
				<div class="form-group" style="margin-top: 38px;">

					<button type="submit" class="btn btn-primary">Edit</button>
				</div>
			</form>
		</div>

	</div>
	<!-- /.box -->
	<!-- modal -->
	<!-- Button trigger modal -->

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php include_once('layouts/footer.php'); ?>	

 