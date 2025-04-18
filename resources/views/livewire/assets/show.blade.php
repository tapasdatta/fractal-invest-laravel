<div>
  <div class="max-lg:hidden">
    <a class="inline-flex items-center gap-2 text-sm/6 text-zinc-500 dark:text-zinc-400" data-headlessui-state="" href="{{ route('dashboard') }}" wire:navigate.hover>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" aria-hidden="true" data-slot="icon" class="size-4 fill-zinc-400 dark:fill-zinc-500">
        <path fill-rule="evenodd" d="M9.78 4.22a.75.75 0 0 1 0 1.06L7.06 8l2.72 2.72a.75.75 0 1 1-1.06 1.06L5.47 8.53a.75.75 0 0 1 0-1.06l3.25-3.25a.75.75 0 0 1 1.06 0Z" clip-rule="evenodd"></path>
      </svg>Assets </a>
  </div>
  <div class="mt-4 flex flex-wrap items-end justify-between gap-4">
    <div class="flex flex-wrap items-center gap-6">
      <div class="w-32 shrink-0">
        <img class="aspect-3/2 rounded-lg shadow-sm" src="/events/six-fingers.jpg" alt="">
      </div>
      <div>
        <div class="flex flex-wrap items-center gap-x-4 gap-y-2">
          <h1 class="text-2xl/8 font-semibold text-zinc-950 sm:text-xl/8 dark:text-white">{{ $asset->title }}</h1>
          <span class="inline-flex items-center gap-x-1.5 rounded-md px-1.5 py-0.5 text-sm/5 font-medium sm:text-xs/5 forced-colors:outline bg-lime-400/20 text-lime-700 group-data-hover:bg-lime-400/30 dark:bg-lime-400/10 dark:text-lime-300 dark:group-data-hover:bg-lime-400/15">On Sale</span>
        </div>
        <div class="mt-2 text-sm/6 text-zinc-500">Jun 2, 2024 at 8 PM <span aria-hidden="true">·</span> Moonbeam Arena, Uxbridge, ON </div>
      </div>
    </div>
    <div class="flex gap-4">
      <button class="relative isolate inline-flex items-baseline justify-center gap-x-2 rounded-lg border text-base/6 font-semibold px-[calc(--spacing(3.5)-1px)] py-[calc(--spacing(2.5)-1px)] sm:px-[calc(--spacing(3)-1px)] sm:py-[calc(--spacing(1.5)-1px)] sm:text-sm/6 focus:outline-hidden data-focus:outline data-focus:outline-2 data-focus:outline-offset-2 data-focus:outline-blue-500 data-disabled:opacity-50 *:data-[slot=icon]:-mx-0.5 *:data-[slot=icon]:my-0.5 *:data-[slot=icon]:size-5 *:data-[slot=icon]:shrink-0 *:data-[slot=icon]:self-center *:data-[slot=icon]:text-(--btn-icon) sm:*:data-[slot=icon]:my-1 sm:*:data-[slot=icon]:size-4 forced-colors:[--btn-icon:ButtonText] forced-colors:data-hover:[--btn-icon:ButtonText] border-zinc-950/10 text-zinc-950 data-active:bg-zinc-950/[2.5%] data-hover:bg-zinc-950/[2.5%] dark:border-white/15 dark:text-white dark:[--btn-bg:transparent] dark:data-active:bg-white/5 dark:data-hover:bg-white/5 [--btn-icon:var(--color-zinc-500)] data-active:[--btn-icon:var(--color-zinc-700)] data-hover:[--btn-icon:var(--color-zinc-700)] dark:data-active:[--btn-icon:var(--color-zinc-400)] dark:data-hover:[--btn-icon:var(--color-zinc-400)] cursor-default" type="button" data-headlessui-state="">
        <span class="absolute top-1/2 left-1/2 size-[max(100%,2.75rem)] -translate-x-1/2 -translate-y-1/2 [@media(pointer:fine)]:hidden" aria-hidden="true"></span>Edit </button>
      <button class="relative isolate inline-flex items-baseline justify-center gap-x-2 rounded-lg border text-base/6 font-semibold px-[calc(--spacing(3.5)-1px)] py-[calc(--spacing(2.5)-1px)] sm:px-[calc(--spacing(3)-1px)] sm:py-[calc(--spacing(1.5)-1px)] sm:text-sm/6 focus:outline-hidden data-focus:outline data-focus:outline-2 data-focus:outline-offset-2 data-focus:outline-blue-500 data-disabled:opacity-50 *:data-[slot=icon]:-mx-0.5 *:data-[slot=icon]:my-0.5 *:data-[slot=icon]:size-5 *:data-[slot=icon]:shrink-0 *:data-[slot=icon]:self-center *:data-[slot=icon]:text-(--btn-icon) sm:*:data-[slot=icon]:my-1 sm:*:data-[slot=icon]:size-4 forced-colors:[--btn-icon:ButtonText] forced-colors:data-hover:[--btn-icon:ButtonText] border-transparent bg-(--btn-border) dark:bg-(--btn-bg) before:absolute before:inset-0 before:-z-10 before:rounded-[calc(var(--radius-lg)-1px)] before:bg-(--btn-bg) before:shadow-sm dark:before:hidden dark:border-white/5 after:absolute after:inset-0 after:-z-10 after:rounded-[calc(var(--radius-lg)-1px)] after:shadow-[shadow:inset_0_1px_--theme(--color-white/15%)] data-active:after:bg-(--btn-hover-overlay) data-hover:after:bg-(--btn-hover-overlay) dark:after:-inset-px dark:after:rounded-lg data-disabled:before:shadow-none data-disabled:after:shadow-none text-white [--btn-bg:var(--color-zinc-900)] [--btn-border:var(--color-zinc-950)]/90 [--btn-hover-overlay:var(--color-white)]/10 dark:text-white dark:[--btn-bg:var(--color-zinc-600)] dark:[--btn-hover-overlay:var(--color-white)]/5 [--btn-icon:var(--color-zinc-400)] data-active:[--btn-icon:var(--color-zinc-300)] data-hover:[--btn-icon:var(--color-zinc-300)] cursor-default" type="button" data-headlessui-state="">
        <span class="absolute top-1/2 left-1/2 size-[max(100%,2.75rem)] -translate-x-1/2 -translate-y-1/2 [@media(pointer:fine)]:hidden" aria-hidden="true"></span>View </button>
    </div>
  </div>
  <div class="mt-8 grid gap-8 sm:grid-cols-3">
    <div>
      <hr role="presentation" class="w-full border-t border-zinc-950/10 dark:border-white/10">
      <div class="mt-6 text-lg/6 font-medium sm:text-sm/6">Total revenue</div>
      <div class="mt-3 text-3xl/8 font-semibold sm:text-2xl/8">$24,115</div>
      <div class="mt-3 text-sm/6 sm:text-xs/6">
        <span class="inline-flex items-center gap-x-1.5 rounded-md px-1.5 py-0.5 text-sm/5 font-medium sm:text-xs/5 forced-colors:outline bg-lime-400/20 text-lime-700 group-data-hover:bg-lime-400/30 dark:bg-lime-400/10 dark:text-lime-300 dark:group-data-hover:bg-lime-400/15">+3.2%</span>
        <span class="text-zinc-500">from last week</span>
      </div>
    </div>
    <div>
      <hr role="presentation" class="w-full border-t border-zinc-950/10 dark:border-white/10">
      <div class="mt-6 text-lg/6 font-medium sm:text-sm/6">Tickets sold</div>
      <div class="mt-3 text-3xl/8 font-semibold sm:text-2xl/8">72/150</div>
      <div class="mt-3 text-sm/6 sm:text-xs/6">
        <span class="inline-flex items-center gap-x-1.5 rounded-md px-1.5 py-0.5 text-sm/5 font-medium sm:text-xs/5 forced-colors:outline bg-lime-400/20 text-lime-700 group-data-hover:bg-lime-400/30 dark:bg-lime-400/10 dark:text-lime-300 dark:group-data-hover:bg-lime-400/15">+8.1%</span>
        <span class="text-zinc-500">from last week</span>
      </div>
    </div>
    <div>
      <hr role="presentation" class="w-full border-t border-zinc-950/10 dark:border-white/10">
      <div class="mt-6 text-lg/6 font-medium sm:text-sm/6">Pageviews</div>
      <div class="mt-3 text-3xl/8 font-semibold sm:text-2xl/8">57,544</div>
      <div class="mt-3 text-sm/6 sm:text-xs/6">
        <span class="inline-flex items-center gap-x-1.5 rounded-md px-1.5 py-0.5 text-sm/5 font-medium sm:text-xs/5 forced-colors:outline bg-pink-400/15 text-pink-700 group-data-hover:bg-pink-400/25 dark:bg-pink-400/10 dark:text-pink-400 dark:group-data-hover:bg-pink-400/20">-2.5%</span>
        <span class="text-zinc-500">from last week</span>
      </div>
    </div>
  </div>
  <div class="mt-12">
    <h2 class="text-base/7 font-semibold text-zinc-950 sm:text-sm/6 dark:text-white">Summary</h2>
    <hr role="presentation" class="mt-4 w-full border-t border-zinc-950/10 dark:border-white/10">
    <dl class="grid grid-cols-1 text-base/6 sm:grid-cols-[min(50%,--spacing(80))_auto] sm:text-sm/6">
      <dt class="col-start-1 border-t border-zinc-950/5 pt-3 text-zinc-500 first:border-none sm:border-t sm:border-zinc-950/5 sm:py-3 dark:border-white/5 dark:text-zinc-400 sm:dark:border-white/5">Customer</dt>
      <dd class="pt-1 pb-3 text-zinc-950 sm:border-t sm:border-zinc-950/5 sm:py-3 sm:nth-2:border-none dark:text-white dark:sm:border-white/5">Leslie Alexander</dd>
      <dt class="col-start-1 border-t border-zinc-950/5 pt-3 text-zinc-500 first:border-none sm:border-t sm:border-zinc-950/5 sm:py-3 dark:border-white/5 dark:text-zinc-400 sm:dark:border-white/5">Event</dt>
      <dd class="pt-1 pb-3 text-zinc-950 sm:border-t sm:border-zinc-950/5 sm:py-3 sm:nth-2:border-none dark:text-white dark:sm:border-white/5">
        <a class="flex items-center gap-2" data-headlessui-state="" href="/events/1000">
          <span data-slot="avatar" class="size-6 inline-grid shrink-0 align-middle [--avatar-radius:20%] *:col-start-1 *:row-start-1 outline -outline-offset-1 outline-black/10 dark:outline-white/10 rounded-full *:rounded-full">
            <img class="size-full" src="/events/bear-hug-thumb.jpg" alt="">
          </span>
          <span>Bear Hug: Live in Concert</span>
        </a>
      </dd>
      <dt class="col-start-1 border-t border-zinc-950/5 pt-3 text-zinc-500 first:border-none sm:border-t sm:border-zinc-950/5 sm:py-3 dark:border-white/5 dark:text-zinc-400 sm:dark:border-white/5">Amount</dt>
      <dd class="pt-1 pb-3 text-zinc-950 sm:border-t sm:border-zinc-950/5 sm:py-3 sm:nth-2:border-none dark:text-white dark:sm:border-white/5">US$80.00</dd>
      <dt class="col-start-1 border-t border-zinc-950/5 pt-3 text-zinc-500 first:border-none sm:border-t sm:border-zinc-950/5 sm:py-3 dark:border-white/5 dark:text-zinc-400 sm:dark:border-white/5">Amount after exchange rate</dt>
      <dd class="pt-1 pb-3 text-zinc-950 sm:border-t sm:border-zinc-950/5 sm:py-3 sm:nth-2:border-none dark:text-white dark:sm:border-white/5">US$80.00 → CA$109.47</dd>
      <dt class="col-start-1 border-t border-zinc-950/5 pt-3 text-zinc-500 first:border-none sm:border-t sm:border-zinc-950/5 sm:py-3 dark:border-white/5 dark:text-zinc-400 sm:dark:border-white/5">Fee</dt>
      <dd class="pt-1 pb-3 text-zinc-950 sm:border-t sm:border-zinc-950/5 sm:py-3 sm:nth-2:border-none dark:text-white dark:sm:border-white/5">CA$3.28</dd>
      <dt class="col-start-1 border-t border-zinc-950/5 pt-3 text-zinc-500 first:border-none sm:border-t sm:border-zinc-950/5 sm:py-3 dark:border-white/5 dark:text-zinc-400 sm:dark:border-white/5">Net</dt>
      <dd class="pt-1 pb-3 text-zinc-950 sm:border-t sm:border-zinc-950/5 sm:py-3 sm:nth-2:border-none dark:text-white dark:sm:border-white/5">CA$106.19</dd>
    </dl>
  </div>
</div>
