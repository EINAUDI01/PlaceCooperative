 <!--Cette page correspond à la page de profil des utilisateurs-->
<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<div>
    <figure class="decoration-clone md:flex border-2 border-red-5000 md:rounded-xl p-8 md:p-0">
        <img class="rounded-full w-32 h-32 md:w-48 md:h-auto mx-auto" src="<?php echo e(Auth::user()->profile_photo_url); ?>" alt="<?php echo e(Auth::user()->name); ?>" width="384" height="512">
        <div class="pt-6 md:p-8 text-center md:text-left space-y-4">
            <blockquote>
            <!--Les codes entre crochets vont permettre de récupérer les informations à afficher sur la page relatives à chaque utilisateur authentifié -->
                <p class="text-lg">
                    <?php echo e(Auth::user()->bio); ?>

                </p>
            </blockquote>
            <figcaption class="font-medium">
                <div class="text-cyan-600">
                    <?php echo e(Auth::user()->name); ?>

                </div>
                <div class="text-gray-500">
                <?php echo e(Auth::user()->profession); ?>  <br/>
                </div>
            </figcaption>
            <div class="flex text-gray-500 space-x-3 mb-4 text-sm font-medium">
                    <div class="flex-auto flex space-x-3">
                        <button class="w-1/2 flex items-center justify-center rounded-md bg-black text-white" type="submit">Envoyer un message</button>
                        <button class="w-1/2 flex items-center justify-center rounded-md border border-gray-300" type="button">Mes Contacts</button>
                        <!--Ce code permet d'afficher la cloche de notification-->
                        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('notification', [])->html();
} elseif ($_instance->childHasBeenRendered('ruMm4pw')) {
    $componentId = $_instance->getRenderedChildComponentId('ruMm4pw');
    $componentTag = $_instance->getRenderedChildComponentTagName('ruMm4pw');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('ruMm4pw');
} else {
    $response = \Livewire\Livewire::mount('notification', []);
    $html = $response->html();
    $_instance->logRenderedChild('ruMm4pw', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                    </div>
            </div>
        </div>
    </figure> 

     <!--Ici, le code permet d'afficher les deux emplacements prévus pour les formations et les activités récentes de l'utilisateur-->
    <div class="h-64 grid grid-cols-2 grid-flow-col gap-4">
        <div class="flex items-center justify-center border-solid border-4 border-light-blue-500 col-span-1">  
                MES FORMATIONS
        </div>
        <div class="flex items-center justify-center border-solid border-4 border-light-blue-500 col-span-1">
                MES ACTIVITES RECENTES
        </div>
    </div>
</div>
 <?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?><?php /**PATH C:\wamp\www\PlaceCooperative\resources\views/profile/profil.blade.php ENDPATH**/ ?>