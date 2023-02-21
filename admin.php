
<?php
	$title = "Administration section";
	require_once "./template/header.php";
?>
<div class='abc' style=' background: #fff;
  box-shadow: 0 30px 60px 0 rgba(90, 116, 148, 0.4);
  border-radius: 5px;
  max-width: 600px;
  min-height: 260px;
  margin-left: auto;
  margin-right: auto;
  padding-top: 30px;
  padding-bottom: 5px;
  left: 0;
  right: 0;
  position: absolute;
  border-top: 5px solid blue;
  animation: bounce 1.5s infinite;'>
 <center> <h1 style='
  display: block;
  padding-bottom:10px;
  font-family: sans-serif;
  margin: 10px auto 5px;
  width: 300px;'>Admin login</h></center>
	<form class="form-horizontal" method="post" action="admin_verify.php">
		<div class="form-group">'
			<label for="name" class="control-label col-md-4"><font size='3'>Name:</font></label>
			<div class="col-md-4">
				<input type="text" name="name" class="form-control">
			</div>
		</div>
		<div class="form-group">
			<label for="pass" class="control-label col-md-4"><font size='3'>Password:</font></label>
			<div class="col-md-4">
				<input type="password" name="pass" class="form-control">
			</div>
		</div>
		 <center><input type="submit" name="submit" class="btn btn-primary"></center>
	</form>
</div>
