<script type="text/javascript">
	$(document).ready(function(){
		$('.close').click(function(){
			$('#close').hide();
		});
	});
</script>
<div id='close'  class="alert alert-danger alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
  <span aria-hidden="true">&times;</span></button>
  <?php echo $message; ?>
</div>