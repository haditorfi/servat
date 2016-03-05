<?php
 	 $this->assign('title', 'فانوس امروز');
 	echo $this->Element('sidebar');
  ?>
  <br/>  <br/>
 <?php
 	$num=1;
	 foreach ($lanterns as $lantern):
 ?>
	<span> <?php echo h($num++ . ' -'); ?></span>
	<span>
		<?php echo h($lantern['Question']['name']); ?>
	</span>
		<br/><br/>
		<div nowrap><?php echo h($lantern['Lantern']['answer']); ?></div>
		
		<br/><br/>
				<?php endforeach; ?>
			

		</div> <!-- end col md 9 -->
	</div><!-- end row -->


</div><!-- end containing of content -->
