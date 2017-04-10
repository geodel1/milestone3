<!DOCTYPE html>
<html>
<head>
	<title>Display One item</title>
</head>
<body>

<?php if(Session::has('message')): ?>
	<?php echo e(Session::get('message')); ?>

<?php endif; ?>
<h1>Display All Article Info</h1>
	<p><?php echo e($article->title); ?></p>
	<p><?php echo e($article->content); ?></p>
	

	<a href='<?php echo e(url("articles/$article->id/edit")); ?>'><button >Edit</button>
	<a href='<?php echo e(url("articles/$article->id/delete")); ?>'><button>Delete</button></a>	
	<p>Comment:</p><br>	
	<?php $__currentLoopData = $article->comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<p>Author: <?php echo e($comment->owner->name); ?></p>
		<p>Comment: <?php echo e($comment->content); ?></p>
		<!-- <p>Comment ID: <?php echo e($comment->id); ?></p> -->

		
		<!-- <p>Article Commented: <?php echo e($comment->article->title); ?></p> -->
		
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	<form method="POST" action='<?php echo e(url("articles/$article->id/comment")); ?>'>
	<?php echo e(csrf_field()); ?>

	<textarea name="content"></textarea><br>
	<button>Submit</button>
	</form>



</body>
</html>