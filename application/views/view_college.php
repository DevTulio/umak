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
	
	<?php if (isset($_SESSION['message'])): ?>

			<div class="row-fluid">
				<div class="alert alert-success">
					<?php echo $_SESSION['message']; ?>
				</div>
			</div>
		
	<?php endif ?>

	<table class="table table-bordered table-hover">
			
			
			<th>College Code</th>
			<th>College Description</th>
			<th>Action</th>

			<?php foreach( $colleges->result() as $colval) : ?>
					
					<tr>
						<td><?php echo $colval->collegedesc; ?></td>
						<td><?php echo $colval->collegecode; ?></td>
						<td>
								<div class="btn-group">
										<a href="<?php echo site_url('college/'.$colval->id . '/edit'); ?>" class="btn btn-primary"><i class="icon-pencil"></i></a>
										<a href="<?php echo site_url('college/'.$colval->id . '/delete'); ?>" onclick="return confirm('Are you sure you want to delete this college');" class="btn btn-warning"><i class="icon-trash"></i></a>
	
								</div>

						</td>
						
					</tr>
			<?php endforeach; ?>

	</table>

</div>
			
				


<div class="navbar-fixed-bottom">
	<div class="navbar-inner">
		
	</div>

</div>
</body>
 <script src="http://code.jquery.com/jquery.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>

</html>
<?php unset($_SESSION['message']); ?>