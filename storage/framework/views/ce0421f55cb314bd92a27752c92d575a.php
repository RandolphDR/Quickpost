 <nav class="w-full px-6 py-4 flex flex-row justify-between items-center">
     <a href="<?php echo e(route('homepage')); ?>"
         class="py-1 px-2 inline-flex justify-center items-center rounded-2xl border border-transparent bg-blue-600 text-xs font-medium text-white hover:bg-blue-800 active:bg-blue-600 focus:bg-blue-700 focus:outline-none active:ring-2 active:ring-indigo-500 active:ring-offset-2 dark:focus:ring-offset-gray-800 tracking-wider transition ease-in-out duration-150"
         wire:navigate>
         <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
             fill="none" viewBox="0 0 24 24">
             <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                 d="M5 12h14M5 12l4-4m-4 4 4 4" />
         </svg>
         Go Back
     </a>
     <div>
         <h1 class="text-2xl font-semibold text-gray-900 dark:text-neutral-200">
             
         </h1>
     </div>
     
         <div>
             <a href="<?php echo e(route('user.settings')); ?>"
                 class="py-2 px-4 inline-flex items-center gap-x-1 text-sm font-medium rounded-lg border border-transparent bg-gray-800 text-neutral-200 hover:bg-gray-700 focus:outline-hidden focus:bg-blue-700"
                 wire:navigate>
                 <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                     height="24" fill="none" viewBox="0 0 24 24">
                     <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                         d="m14.304 4.844 2.852 2.852M7 7H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-4.5m2.409-9.91a2.017 2.017 0 0 1 0 2.853l-6.844 6.844L8 14l.713-3.565 6.844-6.844a2.015 2.015 0 0 1 2.852 0Z" />
                 </svg>
                 Edit Blog Posts
             </a>
         </div>
     
 </nav>
<?php /**PATH C:\Users\Rando\Programming Workspaces\laravel-workspace\Quickpost\resources\views/livewire/pages/blog/breadcrumbs-nav.blade.php ENDPATH**/ ?>