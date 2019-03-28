<?php if(have_comments()): ?>
	<p class="disabled">
		<!-- define how many comments are there -->
  	<?php 
  		comments_number('There are no comments yess', '1 Comment', '% Comments'); 
  	?> 
  	<!-- show the comments  -->  
  	<?php
  		wp_list_comments();
  	?>
  </p>
<?php endif; ?>

<?php
	$args = array(
		'label_submit' 				=> 'COMMENT',
		'title_reply' 				=> '<h2 class="widget-title">LEAVE A COMMENT</h2>'
	);
	comment_form($args);
?>