<!DOCTYPE html>
<html>
<head>
	<title>Display Articles</title>
</head>
<body>

	<h4>Display All Articles</h4>
	<?php if(Session::has('message')): ?>
		<?php echo e(Session::get('message')); ?>

	<?php endif; ?>
	<?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

		<p><a href='<?php echo e(url("articles/$article->id")); ?>'> <?php echo e($article->title); ?><a></p>
		<p><?php echo e($article->content); ?></p>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		
	<a href='<?php echo e(url("articles/create")); ?>'><button class="btn btn-primary">Add Article</button></a>

</body>
</html>