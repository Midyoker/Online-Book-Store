<html>
<head><style>@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins',sans-serif;
}
.container .title{
  font-size: 25px;
  font-weight: 500;
  position: relative;
}
.form-group .col-lg-2{
	font: size 25px;
	font-weight:400;
	position:relative;
}

</style>
</head>
<body>		
<?php
  $title = "Contact";
  require_once "./template/header.php";
?>
    <div class="container">
        <div class="col-md-3"></div>
		<div class="col-md-6 text-center">
			<form class="form-horizontal">
			  	<fieldset>
				   <div class="title"> <legend><u>Contact</u></legend></div>
				    <p class="lead">For any further quries!! contact us through Mail.  </p>
				    <div class="form-group">
				      	<label for="inputName" class="col-lg-2 control-label">Name:</label>
				      	<div class="col-lg-10">
				        	<input type="text" class="form-control" id="inputName" placeholder="Name">
				      	</div>
				    </div>
				    <div class="form-group">
				      	<label for="inputEmail" class="col-lg-2 control-label">Email:</label>
				      	<div class="col-lg-10">
				        	<input type="text" class="form-control" id="inputEmail" placeholder="Email">
				      	</div>
				    </div>
				    <div class="form-group">
				      	<label for="textArea" class="col-lg-2 control-label">Textarea:</label>
				      	<div class="col-lg-10">
				        	<textarea class="form-control" rows="3" id="textArea"></textarea>
				        	<span class="help-block">A longer block of help text that breaks onto a new line and may extend beyond one line.</span>
				      	</div>
				    </div>
				    <div class="form">
				      	<div class="col-lg-10 col-lg-offset-2">
							<div class='butto'>
				        	    <button type="reset" class="btn btn-default">Cancel</button>
				        	    <button type="submit" class="btn btn-primary">Submit</button>
							</div>	
				      	</div>
				    </div>   
			  	</fieldset>
			</form>
		</div>
		<div class="col-md-3"></div>
    </div>
	<?php
  $title = "Contact";
  require_once "./template/footer.php";
?>
</body>
</html>
