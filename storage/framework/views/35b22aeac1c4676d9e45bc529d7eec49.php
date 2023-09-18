

<div class="card">
    <div class="card__wrapper">
        <div class="card__back"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 24" height="24"
                width="14">
                <path stroke-linejoin="round" stroke-linecap="round" stroke-width="3" stroke="#000" d="M12 2L2 12L12 22">
                </path>
            </svg></div>
        <div class="card__menu">
            <a href="<?php echo e(route('announcement.show', compact('announcement'))); ?>">
                <svg xmlns="http://www.w3.org/2000/svg" width="29" viewBox="0 0 29 14" height="14"
                    fill="none">
                    <path fill="#000"
                        d="m16.5714 9.16667h10.3572c.5493 0 1.0762.22827 1.4647.6346s.6067.95743.6067 1.53203c0 .5747-.2182 1.1258-.6067 1.5321s-.9154.6346-1.4647.6346h-10.3572c-.5493 0-1.0762-.2283-1.4647-.6346s-.6067-.9574-.6067-1.5321c0-.5746.2182-1.1257.6067-1.53203s.9154-.6346 1.4647-.6346zm-14.49997-8.66667h24.85717c.5493 0 1.0762.228273 1.4647.6346.3885.40633.6067.95743.6067 1.53207 0 .57463-.2182 1.12573-.6067 1.53206s-.9154.6346-1.4647.6346h-24.85717c-.54938 0-1.076254-.22827-1.464722-.6346s-.606708-.95743-.606708-1.53206c0-.57464.21824-1.12574.606708-1.53207.388468-.406327.915342-.6346 1.464722-.6346z">
                    </path>
                </svg>
            </a>
        </div>
    </div>
    <div class="card__img">
        <img src="https://picsum.photos/200" class="card-img-top" alt="<?php echo e($announcement->title); ?>">
    </div>
    <div class="card__title"><?php echo e($announcement->title); ?></div>
    <div class="card__subtitle"><?php echo e($announcement->category->name); ?></div>
    <hr>

    <div class="card__wrapper">
        <div class="card__wrapper_info">
            <div class="card__subtitle card__wrapper_info"><?php echo e($announcement->developer); ?> </div>
            <div class="card__subtitle card__wrapper_info"><?php echo e($announcement->publisher); ?> </div>
        </div>
        <div class="card__price"><?php echo e($announcement->price); ?>€</div>
        
    </div>
</div>
<?php /**PATH C:\Users\amste\wa\Retro-Hunters_gruppo_01\resources\views/components/card-announcement.blade.php ENDPATH**/ ?>