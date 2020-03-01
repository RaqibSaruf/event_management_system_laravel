<?php if(count($errors) > 0): 
?>

	
		<?php foreach ($errors as $error => $n): ?>
			<div class="alert alert-danger">
  		<strong><p><?php echo $n; ?></p></strong>
	</div>
		<?php endforeach ?>
	
<?php endif  ?>