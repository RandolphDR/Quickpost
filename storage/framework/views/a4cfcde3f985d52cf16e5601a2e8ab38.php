<div class="custom-pagination border">
    <!-- Previous Page Link -->
    <!--[if BLOCK]><![endif]--><?php if($paginator->onFirstPage()): ?>
        <span class="disabled">Previous</span>
    <?php else: ?>
        <button wire:click="previousPage" class="pagination-link">Previous</button>
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

    <!-- Page Number Links -->
    <!--[if BLOCK]><![endif]--><?php for($i = 1; $i <= $paginator->lastPage(); $i++): ?>
        <button
            wire:click="gotoPage(<?php echo e($i); ?>)"
            class="pagination-link <?php echo e($i == $paginator->currentPage() ? 'active' : ''); ?>">
            <?php echo e($i); ?>

        </button>
    <?php endfor; ?><!--[if ENDBLOCK]><![endif]-->

    <!-- Next Page Link -->
    <!--[if BLOCK]><![endif]--><?php if($paginator->hasMorePages()): ?>
        <button wire:click="nextPage" class="pagination-link">Next</button>
    <?php else: ?>
        <span class="disabled">Next</span>
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
</div>
<?php /**PATH C:\Users\Rando\Programming Workspaces\laravel-workspace\Quickpost\resources\views/livewire/components/blog/paginate-links.blade.php ENDPATH**/ ?>