



<?php $__env->startSection('content'); ?>
  
  
  <?php if(!is_page('productos')): ?>
    <?php echo $__env->make('sections.home.hero', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php echo $__env->make('sections.home.productesp', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
  <?php endif; ?>

  
  <?php if(is_page('productos')): ?>
    <?php echo $__env->make('sections.productos.productospage', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
  <?php else: ?>
    
    <?php while(have_posts()): ?> <?php (the_post()); ?>
      <?php echo $__env->first(['partials.content-' . get_post_type(), 'partials.content'], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php endwhile; ?>
  <?php endif; ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\wordpress\wp-content\themes\silver\resources\views/page.blade.php ENDPATH**/ ?>