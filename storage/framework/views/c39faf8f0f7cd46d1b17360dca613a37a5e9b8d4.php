<?php $__env->startSection('title', $event->title); ?>

<?php $__env->startSection('content'); ?>


    <div class="col-md-10 offset-md-1 dashboard-title-container">
        <h1>Meus Eventos</h1>
    </div>
    <div class="col-md-10 offset-md-1 dashboard-events-container">
        <?php if(count($events) > 0): ?>
        <?php else: ?>
        <p>Você ainda não tem eventos, <a href="/events/create">criar evento</a></p>
        <?php endif; ?>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\bruno\Desktop\Projetos\PHP\Evento\resources\views/dashboard.blade.php ENDPATH**/ ?>