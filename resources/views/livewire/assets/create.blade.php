<div class="grow p-6 lg:rounded-lg lg:bg-white lg:p-10 lg:shadow-xs lg:ring-1 lg:ring-zinc-950/5 dark:lg:bg-zinc-900 dark:lg:ring-white/10">
    <div class="mx-auto max-w-6xl">
        <form wire:submit="save" class="mx-auto max-w-4xl">
            <h1 class="text-2xl/8 font-semibold text-zinc-950 sm:text-xl/8 dark:text-white">
                Create Asset
            </h1>
            <hr role="presentation" class="my-10 mt-6 w-full border-t border-zinc-950/10 dark:border-white/10" />
            <section class="grid gap-x-8 gap-y-6 sm:grid-cols-2">
                <div class="space-y-1">
                    <h2 class="text-base/7 font-semibold text-zinc-950 sm:text-sm/6 dark:text-white">Asset Title</h2>
                    <p data-slot="text" class="text-base/6 text-zinc-500 sm:text-sm/6 dark:text-zinc-400">You asset title will be displayed for users.</p>
                </div>
                <div>
                    <span
                        data-slot="control"
                        class="relative block w-full before:absolute before:inset-px before:rounded-[calc(var(--radius-lg)-1px)] before:bg-white before:shadow-sm dark:before:hidden after:pointer-events-none after:absolute after:inset-0 after:rounded-lg after:ring-transparent after:ring-inset sm:focus-within:after:ring-2 sm:focus-within:after:ring-blue-500 has-data-disabled:opacity-50 has-data-disabled:before:bg-zinc-950/5 has-data-disabled:before:shadow-none has-data-invalid:before:shadow-red-500/10"
                    >
                        <input
                            invalid="title"
                            wire:model.blur="asset.title"
                            wire:loading.attr="disabled"
                            aria-label="Asset Title"
                            class="@error('title') outline-red-300 @enderror relative block w-full appearance-none rounded-lg px-[calc(--spacing(3.5)-1px)] py-[calc(--spacing(2.5)-1px)] sm:px-[calc(--spacing(3)-1px)] sm:py-[calc(--spacing(1.5)-1px)] text-base/6 text-zinc-950 placeholder:text-zinc-500 sm:text-sm/6 dark:text-white border border-zinc-950/10 data-hover:border-zinc-950/20 dark:border-white/10 dark:data-hover:border-white/20 bg-transparent dark:bg-white/5 focus:outline-hidden data-invalid:border-red-500 data-invalid:data-hover:border-red-500 dark:data-invalid:border-red-500 dark:data-invalid:data-hover:border-red-500 data-disabled:border-zinc-950/20 dark:data-disabled:border-white/15 dark:data-disabled:bg-white/[2.5%] dark:data-hover:data-disabled:border-white/15 dark:[color-scheme:dark]"
                            placeholder="eg. Treasure Jacket"
                            name="title"
                        />
                        @error('asset.title')
                            <p class="position: absolute mt-2 text-base/6 text-red-600 data-disabled:opacity-50 sm:text-sm/6 dark:text-red-500">{{ $message }}</p>
                        @enderror
                    </span>
                </div>
            </section>
            <hr role="presentation" class="my-10 w-full border-t border-zinc-950/5 dark:border-white/5" />
            <section class="grid gap-x-8 gap-y-6 sm:grid-cols-2">
                <div class="space-y-1">
                    <h2 class="text-base/7 font-semibold text-zinc-950 sm:text-sm/6 dark:text-white">Asset Description</h2>
                    <p data-slot="text" class="text-base/6 text-zinc-500 sm:text-sm/6 dark:text-zinc-400">Write a brief description of your asset. Explain the purpose and benefits of your asset. Maximum 255 characters.</p>
                </div>
                <div>
                    <span
                        data-slot="control"
                        class="relative block w-full before:absolute before:inset-px before:rounded-[calc(var(--radius-lg)-1px)] before:bg-white before:shadow-sm dark:before:hidden after:pointer-events-none after:absolute after:inset-0 after:rounded-lg after:ring-transparent after:ring-inset sm:focus-within:after:ring-2 sm:focus-within:after:ring-blue-500 has-data-disabled:opacity-50 has-data-disabled:before:bg-zinc-950/5 has-data-disabled:before:shadow-none"
                    >
                        <textarea
                            wire:model.blur="asset.description"
                            wire:loading.attr="disabled"
                            aria-label="Asset Description"
                            name="description"
                            class="@error('description') outline-red-300 @enderror relative block h-full w-full appearance-none rounded-lg px-[calc(--spacing(3.5)-1px)] py-[calc(--spacing(2.5)-1px)] sm:px-[calc(--spacing(3)-1px)] sm:py-[calc(--spacing(1.5)-1px)] text-base/6 text-zinc-950 placeholder:text-zinc-500 sm:text-sm/6 dark:text-white border border-zinc-950/10 data-hover:border-zinc-950/20 dark:border-white/10 dark:data-hover:border-white/20 bg-transparent dark:bg-white/5 focus:outline-hidden data-invalid:border-red-500 data-invalid:data-hover:border-red-500 dark:data-invalid:border-red-600 dark:data-invalid:data-hover:border-red-600 disabled:border-zinc-950/20 dark:disabled:border-white/15 dark:disabled:bg-white/[2.5%] dark:data-hover:disabled:border-white/15 resize-y"
                            autocomplete="off"
                        ></textarea>
                        @error('asset.description')
                            <p class="position: absolute mt-2 text-base/6 text-red-600 data-disabled:opacity-50 sm:text-sm/6 dark:text-red-500">{{ $message }}</p>
                        @enderror
                    </span>
                </div>
            </section>
            <hr role="presentation" class="my-10 w-full border-t border-zinc-950/5 dark:border-white/5" />
            <section class="grid gap-x-8 gap-y-6 sm:grid-cols-2">
                <div class="space-y-1">
                    <h2 class="text-base/7 font-semibold text-zinc-950 sm:text-sm/6 dark:text-white">Asset Value</h2>
                    <p data-slot="text" class="text-base/6 text-zinc-500 sm:text-sm/6 dark:text-zinc-400">Give a value to your asset. This value will be used to calculate the asset's worth. You can't update the value once it's set.</p>
                </div>
                <div class="space-y-4">
                    <span
                        data-slot="control"
                        class="relative block w-full before:absolute before:inset-px before:rounded-[calc(var(--radius-lg)-1px)] before:bg-white before:shadow-sm dark:before:hidden after:pointer-events-none after:absolute after:inset-0 after:rounded-lg after:ring-transparent after:ring-inset sm:focus-within:after:ring-2 sm:focus-within:after:ring-blue-500 has-data-disabled:opacity-50 has-data-disabled:before:bg-zinc-950/5 has-data-disabled:before:shadow-none has-data-invalid:before:shadow-red-500/10"
                    >
                        <input
                            wire:model.blur="asset.initial_value"
                            wire:loading.attr="disabled"
                            aria-label="Asset value"
                            class="@error('initial_value') outline-red-300 @enderror relative block w-full appearance-none rounded-lg px-[calc(--spacing(3.5)-1px)] py-[calc(--spacing(2.5)-1px)] sm:px-[calc(--spacing(3)-1px)] sm:py-[calc(--spacing(1.5)-1px)] text-base/6 text-zinc-950 placeholder:text-zinc-500 sm:text-sm/6 dark:text-white border border-zinc-950/10 data-hover:border-zinc-950/20 dark:border-white/10 dark:data-hover:border-white/20 bg-transparent dark:bg-white/5 focus:outline-hidden data-invalid:border-red-500 data-invalid:data-hover:border-red-500 dark:data-invalid:border-red-500 dark:data-invalid:data-hover:border-red-500 data-disabled:border-zinc-950/20 dark:data-disabled:border-white/15 dark:data-disabled:bg-white/[2.5%] dark:data-hover:data-disabled:border-white/15 dark:[color-scheme:dark]"
                            type="text"
                            placeholder="eg. 1000"
                            name="initial_value"
                        />
                        @error('asset.initial_value')
                            <p class="position: absolute mt-2 text-base/6 text-red-600 data-disabled:opacity-50 sm:text-sm/6 dark:text-red-500">{{ $message }}</p>
                        @enderror
                    </span>
                </div>
            </section>
            <hr role="presentation" class="my-10 w-full border-t border-zinc-950/5 dark:border-white/5" />
            <section class="grid gap-x-8 gap-y-6 sm:grid-cols-2">
                <div class="space-y-1">
                    <h2 class="text-base/7 font-semibold text-zinc-950 sm:text-sm/6 dark:text-white">Target Fund</h2>
                    <p data-slot="text" class="text-base/6 text-zinc-500 sm:text-sm/6 dark:text-zinc-400">Give target funding of your asset.</p>
                </div>
                <div class="space-y-4">
                    <span
                        data-slot="control"
                        class="relative block w-full before:absolute before:inset-px before:rounded-[calc(var(--radius-lg)-1px)] before:bg-white before:shadow-sm dark:before:hidden after:pointer-events-none after:absolute after:inset-0 after:rounded-lg after:ring-transparent after:ring-inset sm:focus-within:after:ring-2 sm:focus-within:after:ring-blue-500 has-data-disabled:opacity-50 has-data-disabled:before:bg-zinc-950/5 has-data-disabled:before:shadow-none has-data-invalid:before:shadow-red-500/10"
                    >
                        <input
                            wire:model.blur="asset.target_funding"
                            wire:loading.attr="disabled"
                            aria-label="Target Funding"
                            class="@error('target_funding') outline-red-300 @enderror relative block w-full appearance-none rounded-lg px-[calc(--spacing(3.5)-1px)] py-[calc(--spacing(2.5)-1px)] sm:px-[calc(--spacing(3)-1px)] sm:py-[calc(--spacing(1.5)-1px)] text-base/6 text-zinc-950 placeholder:text-zinc-500 sm:text-sm/6 dark:text-white border border-zinc-950/10 data-hover:border-zinc-950/20 dark:border-white/10 dark:data-hover:border-white/20 bg-transparent dark:bg-white/5 focus:outline-hidden data-invalid:border-red-500 data-invalid:data-hover:border-red-500 dark:data-invalid:border-red-500 dark:data-invalid:data-hover:border-red-500 data-disabled:border-zinc-950/20 dark:data-disabled:border-white/15 dark:data-disabled:bg-white/[2.5%] dark:data-hover:data-disabled:border-white/15 dark:[color-scheme:dark]"
                            type="text"
                            placeholder="eg. 1200"
                            name="target_funding"
                        />
                        @error('asset.target_funding')
                            <p class="position: absolute mt-2 text-base/6 text-red-600 data-disabled:opacity-50 sm:text-sm/6 dark:text-red-500">{{ $message }}</p>
                        @enderror
                    </span>
                </div>
            </section>
            <hr role="presentation" class="my-10 w-full border-t border-zinc-950/5 dark:border-white/5" />
            <section class="grid gap-x-8 gap-y-6 sm:grid-cols-2">
                <div class="space-y-1">
                    <h2 class="text-base/7 font-semibold text-zinc-950 sm:text-sm/6 dark:text-white">Currency</h2>
                    <p data-slot="text" class="text-base/6 text-zinc-500 sm:text-sm/6 dark:text-zinc-400">The currency that your organization will be collecting.</p>
                </div>
                <div>
                    <span
                        data-slot="control"
                        class="relative block w-full before:absolute before:inset-px before:rounded-lg before:bg-white before:shadow-sm dark:before:hidden after:pointer-events-none after:absolute after:inset-0 after:rounded-lg after:ring-transparent after:ring-inset has-data-focus:after:ring-2 has-data-focus:after:ring-blue-500 has-data-disabled:opacity-50 has-data-disabled:before:bg-zinc-950/5 has-data-disabled:before:shadow-none"
                    >
                        <select
                            wire:model.live="asset.currency"
                            wire:loading.attr="disabled"
                            aria-label="Currency"
                            name="currency"
                            class="@error('currency') outline-red-300 @enderror relative block w-full appearance-none rounded-lg py-2.5 sm:py-1.5 pr-10 pl-3.5 sm:pr-9 sm:pl-3 text-base text-zinc-950 placeholder:text-zinc-500 sm:text-sm dark:text-white dark:bg-zinc-800 border border-zinc-950/10 hover:border-zinc-950/20 dark:border-white/10 dark:hover:border-white/20 bg-transparent dark:bg-white/5 focus:outline-none invalid:border-red-500 invalid:hover:border-red-500 dark:invalid:border-red-600 dark:invalid:hover:border-red-600 disabled:border-zinc-950/20 disabled:opacity-100 dark:disabled:border-white/15 dark:disabled:bg-white/[2.5%] dark:hover:disabled:border-white/15"
                        >
                            <option selected value="">Select bellow</option>
                            <option value="usd">USD - United States Dollar</option>
                        </select>
                        <span class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-2">
                            <svg class="w-5 h-5 stroke-zinc-500 group-disabled:stroke-zinc-600 sm:w-4 sm:h-4 dark:stroke-zinc-400" viewBox="0 0 16 16" aria-hidden="true" fill="none">
                                <path d="M5.75 10.75L8 13L10.25 10.75" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M10.25 5.25L8 3L5.75 5.25" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </span>
                        @error('asset.currency')
                            <p class="absolute mt-2 text-base text-red-600 disabled:opacity-50 sm:text-sm dark:text-red-500">{{ $message }}</p>
                        @enderror
                    </span>
                </div>
            </section>
            <hr role="presentation" class="my-10 w-full border-t border-zinc-950/5 dark:border-white/5" />
            <div class="flex justify-end gap-4">
                @if (session('status'))
                    <span class="inline-flex items-center ml-2 gap-x-1.5 rounded-md px-2.5 py-0.5 text-sm font-medium bg-lime-400/20 text-lime-700 dark:bg-lime-400/10 dark:text-lime-300">Created Successfully</span>
                @endif
                <button
                    type="reset"
                    class="relative inline-flex items-center justify-center gap-x-2 rounded-lg border text-base font-semibold px-4 py-2 sm:px-3 sm:py-1.5 sm:text-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 disabled:opacity-50 border-transparent text-zinc-950 hover:bg-zinc-950/5 dark:text-white dark:hover:bg-white/10 cursor-default"
                >
                    <span class="absolute top-1/2 left-1/2 w-full h-full -translate-x-1/2 -translate-y-1/2 hidden" aria-hidden="true"></span>Reset
                </button>
                <button
                    wire:target="save"
                    wire:loading.attr="disabled"
                    type="submit"
                    class="relative inline-flex items-center justify-center gap-x-2 rounded-lg border text-base font-semibold px-8 py-2 sm:px-8 sm:py-1.5 sm:text-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 disabled:opacity-50 border-transparent bg-zinc-900 text-white hover:bg-zinc-800 dark:bg-zinc-600 dark:text-white dark:hover:bg-zinc-500"
                >
                    <span class="relative">
                        <span wire:loading class="absolute inset-0 flex items-center left-0 -ml-6" aria-hidden="true">
                            <svg class="w-4 h-4 animate-spin text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                            </svg>
                        </span>
                        Save Asset
                    </span>
                </button>
            </div>
        </form>
    </div>
</div>
