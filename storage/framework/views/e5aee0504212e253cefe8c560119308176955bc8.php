<!--Cette page est mise pour afficher les notifications non lues-->
<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
    <div>
            <?php $__currentLoopData = auth()->user()->unreadNotifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $notification): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="flex border">
                    <div class="w-1/2">
                        <?php echo e($notification->data['user_name']); ?> a consulté votre profil.
                    </div>
                    <!--Ce lien renvoie vers la page de profil de l'utilisateur qui a consulté la page-->
                    <div class="w-1/2">
                        <a href="<?php echo e(route('profile.AfficherPageDeProfil', ['id' => $notification -> data['user_id'] ] )); ?>">
                            <button class="w-1/2 btn btn-primary right" type="button">
                                Voir son profil<br/>
                            </button>
                        </a>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <!-- Pour marquer que les notifications ont été lues après avoir chargé la page-->
            <?php $__currentLoopData = auth()->user()->unreadNotifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $notification): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php echo e($notification->markAsRead()); ?>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <div>
        <!--Ce bouton permet à l'utilisateur d'etre redirigé sur la liste de toutes les notifications-->
        <a href="#">
            <div class="d-grid gap-2">
                <button class="w-full btn btn-primary" type="button">
                        Voir plus de notifications
                </button>
            </div>
        </a>
    </div>
 <?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?><?php /**PATH C:\wamp\www\PlaceCooperative\resources\views/profile/AfficherPageDeNotification.blade.php ENDPATH**/ ?>