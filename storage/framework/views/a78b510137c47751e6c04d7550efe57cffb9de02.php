

<?php $__env->startSection('title', 'Dasboard'); ?>

<?php $__env->startSection('content'); ?>

<div class="col-md-10 offset-md-1 dashboard-title-container">
    <h1>Meus Eventos</h1>
</div>
<div class="col-md-10 offset-md-1 dashboard-events-container">
    <?php if(count($events) > 0): ?>
    <table class="table">
        <thead>
            <tr>
                <th scope="col"></th>
                <th scope="col">Nome</th>
                <th scope="col">Participantes</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td scropt="row"><?php echo e($loop->index + 1); ?></td>
                    <td><a href="/events/<?php echo e($event->id); ?>"><?php echo e($event->title); ?></a></td>
                    <td>0</td>
                    <td><a href="#">Editar</a> <a href="#">Deletar</a></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>    
        </tbody>
    </table>
    <?php else: ?>
    <p>Você ainda não tem eventos, <a href="/events/create">criar evento</a></p>
    <?php endif; ?>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\bruno\Desktop\Projetos\PHP\Evento\resources\views/events/dashboard.blade.php ENDPATH**/ ?>