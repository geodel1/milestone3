<?php $__env->startSection('title'); ?>
Home page
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div>This 
is
the
content
section
<?php $__env->stopSection(); ?>
</div>

<?php $__env->startSection('sidebar'); ?>
<p>sidebar contents here</p>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>