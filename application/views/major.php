<html>
	<head>
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
		
	</head>

<body>

		
				<div class="navbar"> 
					
						<div class="navbar-inner">
							
							
								<ul class="nav">
									
										<li><a href="">Program</a></li>
										<li><a href="">College</a></li>
										<li><a href="">Major</a></li>
								
			
								</ul>

							
							
						</div>

				</div>

	<div class="container">
			
			<form action="" method="post" class="form-inline">
					<label class="control-label">Program ID</label>
				<div class="control-group">
					<select name="programid" id="">
						<option >Select Program</option>
						<option value=""></option>

					</select>

				</div>
					<label class="control-label">Major Desc</label>
				<div class="control-group">
					<input name="majordesc" type="text">

				</div>
					<label class="control-label">Major Code</label>
				<div class="control-group">
					<input name="majorcode" type="text">

				</div>
				<button class="btn btn-primary" type="submit">Submit</button>
			</form>

	</div>

		

<div class="navbar-fixed-bottom">
	<div class="navbar-inner">
		
	</div>

</div>
</body>
 <script src="http://code.jquery.com/jquery.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
</html>