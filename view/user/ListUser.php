<?php include_once("layouts/header.php") ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			QUẢN LÍ USER
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
		<div class="box-header with-border " >

			<table class="table table-bordered table-striped mytable" >
				<a href="?role=admin&mod=user&act=add" style="margin-bottom: 20px;" class="btn btn-primary"><i class="fa fa-plus-circle" aria-hidden="true"></i></a>
				<thead>
					<tr>
						<th>Code</th>
						<th>Name</th>
						<th>Email</th>
						<th>Phone</th>
						<th>Role</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody id="tbody">
					<?php 
					foreach ($data as $row) {?>
						<tr>
							<td><?= $row['code']?></td>
							<td><?= $row['name']?></td>
							<td><?= $row['email']?></td>		
							<td><?= $row['phone']?></td>
							<td><?= $row['role_name']?></td>
							<td>
								<?php if($row['role_name'] === null){ ?>
								<a href="?role=admin&mod=user&act=role&code=<?php echo $row['code'] ?>" class="btn btn-info"><i class="fa fa-plus" aria-hidden="true"></i></a>
								<?php } ?>
								<a href="?role=admin&mod=user&act=edit&code=<?php echo $row['code'] ?>" class="btn btn-success"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
								<a href="?role=admin&mod=user&act=delete&code=<?php echo $row['code'] ?>" class="btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i></a>

								
							</td>

						</tr> 
						<?php   
					}

					?>

				</tbody>
			</table>
		</div>

	</div>
	<!-- /.box -->
	<!-- modal -->
	<!-- Button trigger modal -->

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php include_once("layouts/footer.php") ?>


