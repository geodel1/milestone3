<h4>Edit Article</h4>
<form action='<?php echo e(url("articles/{$atbe->id}/edit")); ?>' method="POST">
	<?php echo e(csrf_field()); ?>

	Title: <input type="text" name="title" value="<?php echo e($atbe->title); ?>"><br>
	Content:<br>
	<textarea name="content" ><?php echo e($atbe->content); ?></textarea><br>
	<input type="submit">

</form>