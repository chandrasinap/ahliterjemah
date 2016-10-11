<html>
	<head>
		<link rel="stylesheet" href="<?= base_url('assets/plugins/bootstrap/css/bootstrap.min.css'); ?>">
		<title>
			Gateway AhliTerjemah.com
		</title>
		<style>
			.center-form {
				width:30%;
				position: absolute;
				top:20%;
				bottom: 0;
				left: 0;
				right: 0;
				margin: auto;
				text-align: center;
			}
		</style>
	</head>
	<body>
		<div class="center-form" >
			<form class="form" method="POST">
				<div class="form-group">
					<form role="form">
		              <div class="box-body">
		                <div class="form-group">
		                  <label for="exampleInputEmail1">Username</label>
		                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter username" name="username">
		                </div>
		                <div class="form-group">
		                  <label for="exampleInputPassword1">Password</label>
		                  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
		                </div>
		              </div>
		              <!-- /.box-body -->

		              <div class="box-footer">
		                <button type="submit" class="btn btn-primary">Submit</button>
		              </div>
		            </form>
				</div>
			</form>
		</div>
	</body>
</html>