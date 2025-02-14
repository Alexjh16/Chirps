@if (session('status'))
<!-- success Modal -->
<div x-data="{ successModalIsOpen: true }">

    <div x-cloak x-show="successModalIsOpen" x-transition.opacity.duration.200ms
        x-trap.inert.noscroll="successModalIsOpen" x-on:keydown.esc.window="successModalIsOpen = false"
        x-on:click.self="successModalIsOpen = false"
        class="fixed inset-0 z-30 flex items-end justify-center bg-black/20 p-4 pb-8 backdrop-blur-md sm:items-center lg:p-8"
        role="dialog" aria-modal="true" aria-labelledby="successModalTitle">
        <!-- Modal Dialog -->
        <div x-show="successModalIsOpen"
            x-transition:enter="transition ease-out duration-200 delay-100 motion-reduce:transition-opacity"
            x-transition:enter-start="opacity-0 scale-50" x-transition:enter-end="opacity-100 scale-100"
            class=" bg-white">
            <!-- Dialog Header -->
            <div
                class="flex items-center justify-between border-b border-outline bg-surface-alt/60 px-4 py-2 dark:border-outline-dark dark:bg-surface-dark/20">
                <div class="flex items-center justify-center rounded-full bg-success/20 text-success p-1">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="green" class="size-6"
                        aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M10 18a8 8 0 1 0 0-16 8 8 0 0 0 0 16Zm3.857-9.809a.75.75 0 0 0-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 1 0-1.06 1.061l2.5 2.5a.75.75 0 0 0 1.137-.089l4-5.5Z"
                            clip-rule="evenodd" />
                    </svg>
                </div>
                <button x-on:click="successModalIsOpen = false" aria-label="close modal">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true"
                        stroke="currentColor" fill="none" stroke-width="1.4" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <!-- Dialog Body -->
            <div class="px-4 text-center">
                <h3 id="successModalTitle"
                    class="mb-2 font-semibold tracking-wide text-on-surface-strong dark:text-on-surface-dark-strong">
                    Yeah!</h3>
                <p>{{ session('status') }}</p>
            </div>
            <!-- Dialog Footer -->
            <div class="flex items-center justify-center border-outline p-4 dark:border-outline-dark">
                <button x-on:click="successModalIsOpen = false" type="button"
                    class="w-full whitespace-nowrap rounded-radius border border-success bg-success px-4 py-2 text-center text-sm font-semibold tracking-wide text-on-success transition hover:opacity-75 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-success active:opacity-100 active:outline-offset-0">cerrar</button>
            </div>
        </div>
    </div>
</div>
@endif
