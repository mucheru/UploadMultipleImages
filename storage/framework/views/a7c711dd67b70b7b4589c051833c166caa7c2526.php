<html lang="en">
<head>
  <title>Laravel 8.x Multiple File Upload Example | Codechief </title>
  <script
  src="https://code.jquery.com/jquery-1.12.4.js"
  integrity="sha256-Qw82+bXyGq6MydymqBxNPYTaUXXq7c8v3CwiYwLLNXU="
  crossorigin="anonymous"></script>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="container lst">
<?php if(count($errors)>0): ?>
<div class="alert alert-danger">
<strong>sorry!</strong>There were more problems with your HTML input.<br>
<?php echo e($errors); ?>

<ul>
<?php $__currentLoopData = $errors->all; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<li><?php echo e($error); ?></li>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</ul>
</div>
<?php endif; ?>
<?php if(session('success')): ?>
<div class="alert alert-success">
  <?php echo e(session('success')); ?>

</div> 
<?php endif; ?>

<h3 class="well">Laravel 7 Multiple File Upload | SteveMucheru </h3>
<form method="post" action="<?php echo e(url('image')); ?>" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>

<div class="input-group control-group img_div form-group" >
    <input type="file" name="image[]" class="form-control">
    <div class="input-group-btn"> 
      <button class="btn btn-success btn-add-more" type="button"><i class="glyphicon glyphicon-plus"></i>Add</button>
    </div>
  </div>
 
  <div class="clone hide " style="display: none;">
    <div class="control-group input-group form-group" style="margin-top:10px">
      <input type="file" name="image[]" class="form-control">
      <div class="input-group-btn"> 
        <button class="btn btn-danger btn-remove" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>
      </div>
    </div>
  </div>

  <button type="submit" class="btn btn-success" style="margin-top:10px">Submit</button>
  
</form>       
</div>
<script type="text/javascript">
$(document).ready(function(){
    $(".btn-add-more").click(function(){
        var html=$(".clone").html();
        $(".img_div").after(html);
    });
    $(".body").on("click",".btn-remove",function(){
        $(".img_div").splice();
    });

})
</script>
</body>
</html><?php /**PATH /home/steve/uploadMultipleImages/resources/views/create.blade.php ENDPATH**/ ?>