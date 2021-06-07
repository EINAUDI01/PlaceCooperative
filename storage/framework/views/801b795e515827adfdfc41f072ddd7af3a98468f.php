<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<div>
    <figure class="decoration-clone md:flex border-2 border-red-5000 md:rounded-xl p-8 md:p-0">
        <img class="rounded-full w-32 h-32 md:w-48 md:h-auto mx-auto" src="<?php echo e($user->profile_photo_url); ?>" alt="<?php echo e(Auth::user()->name); ?>" width="384" height="512">
        <div class="pt-6 md:p-8 text-center md:text-left space-y-4">
            <blockquote>
                <p class="text-lg">
                    <?php echo e($user->bio); ?>

                </p>
            </blockquote>
            <figcaption class="font-medium">
                <div class="text-cyan-600">
                    <?php echo e($user->name); ?>

                </div>
                <div class="text-gray-500">
                    <?php echo e($user->profession); ?>  <br/>
                </div>
            </figcaption>
            <?php if( (Auth::user()->name ) ==  ($user->name)): ?>
                <div class="flex text-gray-500 space-x-3 mb-4 text-sm font-medium">
                    <div class="flex-auto flex space-x-3">
                        <button class="w-1/2 flex items-center justify-center rounded-md bg-black text-white" type="submit">Envoyer un message</button>
                        <button class="w-1/2 flex items-center justify-center rounded-md border border-gray-300" type="button">Mes Contacts</button>
                        <button class="flex-none flex items-center justify-center w-9 h-9 rounded-md text-gray-400 border border-gray-300" type="button" aria-label="like">
                            <svg width="20" height="20" fill="currentColor">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z" />
                            </svg>
                        </button>
                    </div>
                </div>
            <?php else: ?>
            <div class="flex text-gray-500 space-x-3 mb-4 text-sm font-medium">
                <div class="flex-auto flex space-x-3">
                    <button class="w-1/2 flex items-center justify-center rounded-md bg-black text-white" type="submit">Chatter</button>
                    <button class="w-1/2 flex items-center justify-center rounded-md border border-gray-300" type="button">Autres Contacts</button>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </figure> 

    <div class="h-64 grid grid-cols-2 grid-flow-col gap-4">
        <div class="flex items-center justify-center border-solid border-4 border-light-blue-500 col-span-1">  
                FORMATIONS
        </div>
        <div class="flex items-center justify-center border-solid border-4 border-light-blue-500 col-span-1">
                ACTIVITES RECENTES
        </div>
    </div>
</div>
 <?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?><?php /**PATH C:\wamp\www\PlaceCooperative\resources\views/profile/AfficherPageDeProfil.blade.php ENDPATH**/ ?>