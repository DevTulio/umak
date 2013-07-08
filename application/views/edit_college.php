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


<div class="container-fluid">
	
		<div class="container">
			 
						<?php if (validation_errors()): ?>

								<div class="row-fluid">
									<div class="alert alert-success">
										<?php echo validation_errors(); ?>
									</div>
								</div>
							
						<?php endif ?>
							
							<div class="well">
								

								<form action="<?php echo current_url(); ?>" method="post">
									
									<div class="control-group <?php if(form_error('collegecode')) echo ' error' ?>">
										<label for="collegecode" class="control-label">College Code</label>
										<input type="text"  name="collegecode" value="<?php echo $colleges['collegecode']; ?>" class="span6">
									</div>	

									<div class="control-group <?php if(form_error('collegedesc')) echo ' error' ?>">
											<label for="" class="control-label">College Description</label>
											<input type="text"  name="collegedesc" class="span6" value="<?php echo $colleges['collegedesc']; ?>">		
									</div>
								<input type="hidden" name="collegeid" value="<?php echo $this->uri->segment(2); ?>">

								<button onclick="return confirm('Are you sure you want to save changes?')" class="btn btn-primary btn-large">Submit</button>
									<a href="<?php echo site_url('college');?>" class="btn btn-large">Cancel</a>

								</form>

							</div>
			

		</div>
	
</div>
			
				


<div class="navbar-fixed-bottom">
	<div class="navbar-inner">
		
	</div>

</div>
</body>
 <script src="http://code.jquery.com/jquery.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
<script>
	
var inputField;
var split="";
$("#collegeDesc").keypress(function(){
		inputField=$('#collegeDesc').val;	
		
		//split=inputField.split(" ");
		console.log("fgfgf");
	
});


</script>
</html>