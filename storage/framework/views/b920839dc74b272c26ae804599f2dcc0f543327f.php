<div class="inline-block" x-data="{ open:true }">
    <form class="d-flex">
        <input  @click.away="{open = false; window.livewire.find('<?php echo e($_instance->id); ?>').reinitialiserSelection();}"  @click  = "{ open = true }" class="form-control me-sm-2 focus:outline-none" name="recherche" placeholder="Rechercher une formation ou un formateur" wire:model="recherche" wire:keydown.arrow-down.prevent="incrementeSelection" wire:keydown.arrow-up.prevent="decrementeSelection" wire:keydown.backspace="reinitialiserSelection" wire:keydown.enter.prevent="AfficherPageDeProfil" wire:click="AfficherPageDeProfil">
        <button class="btn btn-secondary my-2 my-sm-0 border bg-yellow-200" type="submit">Rechercher</button>
    </form>
    <!-- Menu qui s'affiche si la requte a une reponse-->
    <div x-show="open" class="border bg-yellow-50">
        <?php if(strlen($recherche) > 0): ?>
            <?php if(count($users) > 0): ?>
                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Selectionner => $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <p class="p-1 <?php echo e($Selectionner == $UtilisateurSelectionne ? 'text-yellow-500' : ''); ?>"><?php echo e($user -> name); ?></p>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
                    <span> Aucun résultat pour "<?php echo e($recherche); ?>" </span>
            <?php endif; ?>
        <?php endif; ?>
    </div>
</div>
<?php /**PATH C:\wamp\www\PlaceCooperative\resources\views/livewire/search.blade.php ENDPATH**/ ?>