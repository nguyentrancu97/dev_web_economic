<?php include_once('layouts/header.php'); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Thêm user
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
			<form action="?role=admin&mod=user&act=store" method="POST" enctype="multipart/form-data" role="form">
				<div class="form-group">
					<label for="">Name</label>
					<input type="text" class="form-control" name="name" required="required">
				</div>
				<div class="form-group">
					<label for="">User Name</label>
					<input type="text" class="form-control" name="username" required="required">
				</div>
				<div class="form-group">
					<label for="">Address</label>
					<input type="text" class="form-control" name="address" required="required">
				</div>
				<div class="form-group">
					<label for="">DateOfBirth</label>
					<input type="date" class="form-control" name="dateofbirth" required="required">
				</div>
				<div class="form-group">
					<label for="">Brand</label>
					<select class="form-control" name="branch_id" >
						<?php foreach ($branch as $value) { ?>
							<option value="<?= $value['branch_id'] ?>"><?= $value['name'] ?></option>
						<?php } ?>
					</select>
				</div>
				
				<div class="form-group">
					<label for="">Role</label>
					<select class="form-control" name="role" >
						
						<option value="0">Admin</option>
						<option value="1">Employee</option>
						<option value="2">Shipper</option>
						
					</select>
				</div>
				<div class="form-group" style="margin-top: 38px;">

					<button type="submit" class="btn btn-primary">Create</button>
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

 