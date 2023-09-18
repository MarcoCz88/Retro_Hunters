<?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layout','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

    <?php if($announcement_to_check): ?>
        <div class="container my-3">
            <div class="row row_card">
                <h2>
                    Ecco l'annuncio da revisionare: <?php echo e($announcement_to_check->title); ?>

                </h2>
                <div class="col-12 d-flex justify-content-center">
                    <div class="card card_revisor m-3" style="width: 18rem;">
                        <div class="card__img__revisor">
                            <img src="https://picsum.photos/200" class="card-img-top"
                                alt="<?php echo e($announcement_to_check->title); ?>">
                        </div>
                        <div class="card-body d-flex flex-column align-items-center">
                            <h5 class="card-title"><?php echo e($announcement_to_check->title); ?></h5>
                            <p class="card-text"><?php echo e($announcement_to_check->category->name); ?></p>
                            <p class="card-text text-truncate"><?php echo e($announcement_to_check->body); ?></p>
                            
                            <p class="card-text">Sviluppato da: <?php echo e($announcement_to_check->developer); ?></p>
                            <p class="card-text">Pubblicato da: <?php echo e($announcement_to_check->publisher); ?></p>
                            <div class="card__price"><?php echo e($announcement_to_check->price); ?>€</div>
                            <span class="card-footer">
                                <p class="card-text">Caricato da: <?php echo e($announcement_to_check->user->name ?? ''); ?> il
                                    <?php echo e($announcement_to_check->created_at->format('d/m/Y H:i')); ?></p>
                            </span>
                            <span class="card-footer d-flex justify-content-between align-items-center">
                                <form
                                    action="<?php echo e(route('revisor.accept_announcement', ['announcement' => $announcement_to_check])); ?>"
                                    method="POST">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('PATCH'); ?>
                                    <button type="submit" class="btn btn-success mx-1">Accetta</button>
                                </form>
                                <form
                                    action="<?php echo e(route('revisor.reject_announcement', ['announcement' => $announcement_to_check])); ?>"
                                    method="POST">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('PATCH'); ?>
                                    <button type="submit" class="btn btn-danger mx-1">Rifiuta</button>
                                </form>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php else: ?>
        <div class="container my-3">
            <div class="row row_revisor">
                <div class="col-12">
                    <h2>
                        Non ci sono annunci da controllare
                    </h2>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <table class="table">
                    <thead>
                        <h2>Log ultima azione: </h2>
                        <tr>
                            <th scope="col">Titolo</th>
                            <th scope="col">Descrizione</th>
                            <th scope="col">Revisionato il: </th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row"><?php echo e($announcement_to_undo->title); ?></th>
                            <td><?php echo e($announcement_to_undo->body); ?></td>
                            <td><?php echo e($announcement_to_undo->updated_at->format('d/m/Y H:i')); ?></td>
                            <td>
                                <button onclick="document.getElementById('formUndo').submit()" type="submit"
                                    class="btn btn-primary mx-1">Annulla revisione</button>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <form id="formUndo"
                    action="<?php echo e(route('revisor.undo_announcement', ['announcement' => $announcement_to_undo])); ?>"
                    method="POST">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PATCH'); ?>
                </form>

            </div>
        </div>
    </div>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
<?php /**PATH C:\Users\amste\wa\Retro-Hunters_gruppo_01\resources\views/revisor/index.blade.php ENDPATH**/ ?>