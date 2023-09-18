<?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layout','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('title', null, []); ?> 
        Login
     <?php $__env->endSlot(); ?>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <h2 class="text-center">Login</h2>
            </div>
        </div>
        <div class="row">
           <form action="<?php echo e(route('login')); ?>" method="POST">
            <?php echo csrf_field(); ?>
              <div class="form-group">
                 <label class="form_label">Email</label>
                 <input type="email" class="form-control" name="email">
              </div>
              <div class="form-group">
                 <label class="form_label">Password</label>
                 <input type="password" class="form-control" name="password">
              </div>
              <button type="submit" class="btn btn-primary my-3">Accedi</button>
           </form>
           <p>Non hai ancora un account? <a href="<?php echo e(route('register')); ?>">Registrati</a></p>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?><?php /**PATH C:\Users\amste\wa\Retro-Hunters_gruppo_01\resources\views/auth/login.blade.php ENDPATH**/ ?>