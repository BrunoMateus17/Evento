<?php $__env->startSection('title','HDC Events'); ?>
<?php $__env->startSection('js','/js/scripts.js'); ?>
<?php $__env->startSection('content'); ?>
    
    <div id="search-container" class="col-md-12">
        <h1>Busque um evento</h1>
        <form action="/" method="GET">
            <input type="text" id="search" name="search" class="form-control" placeholder="Procurar...">
        </form>
    </div>
    <div id="events-container" class="col-md-12">
        <h2>Próximos Eventos</h2>
        ,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,
            <?php if($search): ?>
                <h2>Buscando por:<?php echo e($search); ?></h2>
            <?php else: ?>
                <p class="subtitle">Veja os eventos dos próximos dias</p>
            <?php endif; ?>
        <div id="cards-container" class="row">
            <?php $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-3">
                <div class="card">
                    <img src="/img/events/<?php echo e($event->image); ?>" alt="<?php echo e($event->title); ?>">
                    <div class="card-body">
                        <p class="card-date">10/09/2020</p>
                        <h5 class="card-title"><?php echo e($event->title); ?></h5>
                        <p class="card-participants">X Participantes</p>
                        <a href="/events/<?php echo e($event->id); ?>" class="btn btn-primary">Saber mais</a>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php if(count($events) == 0 && $search): ?>
                <p>Não há eventos encontrar nenhum evento com <?php echo e($search); ?> <a href="/">Ver todos</a></p>
            <?php elseif(count($events) == 0): ?>
                <p>Não há eventos disponiveis</p>
            <?php endif; ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\bruno\Desktop\Projetos\PHP\Evento\resources\views/welcome.blade.php ENDPATH**/ ?>