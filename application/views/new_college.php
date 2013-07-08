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
<div class="span2"><a href="<?php echo site_url('college/edit'); ?>" role="button" class="btn">Edit College</a></div>
	<div class="container">
	


		<?php if($this->session->flash_data('success_message')):?>
		<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">&times;</button>Successfully addded the College</div>
		<?php $this->session->keep_flashdata('message'); ?>
		<?php endif; ?>

			<?php echo form_error('collegecode', '<div class="alert alert-error">', '<button type="button" class="close" data-dismiss="alert">&times;</button></div>'); ?>
				
				<form action="<?php echo site_url('college/create_new');?>" method="post" class="form-inline">
						<label class="control-label">College Desc</label>
							<div class="control-group <?php if(form_error('collegedesc'))echo ' error' ;?>">
						<input id="collegeDesc" class="span9" type="text" name="collegedesc">

							</div>
						<label class="control-label" >College Code</label>
						
						<div class="control-group <?php if(form_error('collegecode'))echo ' error' ;?>" >
						
							<input name="collegecode" class="span9"  type="text">

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