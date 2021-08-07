<h1>I am User view</h1>
<table>
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>user_id</th>
        <th>body</th>
        <th>user Name</th>
        <th>Email</th>
    </tr>
<?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <td><?php echo e($post->id); ?></td>
      <td><?php echo e($post->title); ?></td>
      <td><?php echo e($post->user_id); ?></th>
      <td><?php echo e($post->body); ?></td>




    </tr>

    <?php $__currentLoopData = $post->user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

    <?php echo e($post->id); ?>


    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>


<?php /**PATH E:\Biswajit Youtube Raw Git\trunk\newblog\resources\views/user.blade.php ENDPATH**/ ?>