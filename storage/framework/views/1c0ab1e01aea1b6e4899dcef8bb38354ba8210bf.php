<div>
    <button class="flex-none flex items-center justify-center w-9 h-9 rounded-md text-gray-400 border border-gray-300" type="button" aria-label="like" wire:click="PageNotification">
        <svg width="20" height="20" fill="currentColor">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z" />
        </svg>

        <?php if (! (auth()->user()->unreadNotifications->isEmpty())): ?>
            <?php echo e(Auth()->user()->unreadNotifications->count()); ?>

        <?php endif; ?>
 
    </button>
</div>
<?php /**PATH C:\wamp\www\PlaceCooperative\resources\views/livewire/notification.blade.php ENDPATH**/ ?>