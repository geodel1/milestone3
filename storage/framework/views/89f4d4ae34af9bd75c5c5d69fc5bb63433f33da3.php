<!DOCTYPE html>
<html>
<head>
	<title>Display One item</title>
</head>
<body>

<h1>Display All Article Info</h1>
	<p><?php echo e($article->title); ?></p>
	<p><?php echo e($article->content); ?></p>
	<a href='<?php echo e(url("articles/$article->id/edit")); ?>'><button >Edit</button>
	<a href='<?php echo e(url("articles/$article->id/delete")); ?>'><button>Delete</button></a>	



</body>
</html>