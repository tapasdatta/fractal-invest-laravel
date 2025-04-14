<div>
    @if($login_form)
        <form class="grid w-full max-w-sm grid-cols-1 gap-3.5" wire:submit="login">
            <div class="flex items-start">
                <svg fill="currentColor" viewBox="0 0 113 22" class="h-6 text-zinc-950 dark:text-white forced-colors:text-[CanvasText]"><path fill-rule="evenodd" clip-rule="evenodd" d="M6.99906 0.5L6.57031 0.742752L0.570312 10.7428V11.2572L6.57031 21.2572L6.99906 21.5H18.9991L19.3526 20.6464L16.8526 18.1464L16.4991 18H9.27424L4.8409 11L9.27424 4H16.4991L16.8526 3.85355L19.3526 1.35355L18.9991 0.5H6.99906Z"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M20.7927 4.21875L18.3657 6.64575L18.2969 7.2668L20.6605 10.9993L18.2969 14.7318L18.3657 15.3529L20.7927 17.7799L21.5751 17.6835L25.4311 11.2565V10.7421L21.5751 4.31507L20.7927 4.21875Z"></path></svg>
            </div>
            <h1 class="text-2xl/8 mt-3 font-semibold text-zinc-950 sm:text-xl/8 dark:text-white">Sign in to your account</h1>
            <p class="mt-1 text-sm/5 text-zinc-400">
                Enter your email — we’ll send you a code to log in.
            </p>
            @error('login')
                <p class="mt-2 text-sm text-red-600 text-center" id="email-error">{{ $message }}</p>
            @enderror
            <div class="mt-4 space-y-3">
                <label class="text-sm/5 font-medium ">Email</label>
                <span
                    data-slot="control"
                    class="relative block w-full mt-4 before:absolute before:inset-px before:rounded-[calc(var(--radius-lg)-1px)] before:bg-white before:shadow-sm dark:before:hidden after:pointer-events-none after:absolute after:inset-0 after:rounded-lg sm:focus-within:after:ring-2 sm:focus-within:after:ring-blue-500 has-data-disabled:opacity-50 has-data-disabled:before:bg-zinc-950/5 has-data-disabled:before:shadow-none has-data-invalid:before:shadow-red-500/10"
                >
                    <input
                        invalid="email"
                        wire:model="email"
                        wire:loading.attr="disabled"
                        aria-label="Email"
                        class="@error('email') outline-red-300 @enderror block w-full rounded-lg px-3.5 py-2.5 sm:px-4 sm:py-2.5 text-base text-zinc-950 placeholder:text-zinc-500 sm:text-sm dark:text-white border border-zinc-950/10 dark:border-white/10 bg-transparent dark:bg-white/5 focus:outline-none data-invalid:border-red-500 data-disabled:border-zinc-950/20 dark:data-disabled:border-white/15 dark:data-disabled:bg-white/[2.5%]"
                        placeholder="youremail@example.com"
                        name="email"
                        required
                        autofocus
                    />
                </span>
                @error('email')
                    <p class="position: absolute mt-1 text-base/6 text-red-600 data-disabled:opacity-50 sm:text-sm/6 dark:text-red-500">{{ $message }}</p>
                @enderror
            </div>
            <div class="mt-8">
                <button
                    wire:target="save"
                    wire:loading.attr="disabled"
                    type="submit"
                    class="relative w-full inline-flex items-center justify-center gap-x-2 rounded-lg border text-base font-semibold px-8 py-2 sm:px-8 sm:py-1.5 sm:text-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 disabled:opacity-50 border-transparent bg-zinc-900 text-white hover:bg-zinc-800 dark:bg-zinc-600 dark:text-white dark:hover:bg-zinc-500"
                >
                    <span class="relative">
                        <span wire:loading class="absolute inset-0 flex items-center left-0 -ml-6" aria-hidden="true">
                            <svg class="w-4 h-4 animate-spin text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                            </svg>
                        </span>
                        Go ahead
                    </span>
                </button>
            </div>
        </form>
    @else
        <form class="p-7 sm:p-11" wire:submit="verify_otp">
            <p class="mt-1 text-sm/5 text-zinc-400">
                You have sent an email with a code to log in.
            </p>
            <div class="mt-4 space-y-3">
                <label class="text-sm/5 font-medium ">OTP</label>
                <span
                    data-slot="control"
                    class="relative block w-full mt-4 before:absolute before:inset-px before:rounded-[calc(var(--radius-lg)-1px)] before:bg-white before:shadow-sm dark:before:hidden after:pointer-events-none after:absolute after:inset-0 after:rounded-lg sm:focus-within:after:ring-2 sm:focus-within:after:ring-blue-500 has-data-disabled:opacity-50 has-data-disabled:before:bg-zinc-950/5 has-data-disabled:before:shadow-none has-data-invalid:before:shadow-red-500/10"
                >
                    <input
                        invalid="otp"
                        wire:model="otp"
                        wire:loading.attr="disabled"
                        aria-label="OTP"
                        class="@error('otp') outline-red-300 @enderror block w-full rounded-lg px-3.5 py-2.5 sm:px-4 sm:py-2.5 text-base text-zinc-950 placeholder:text-zinc-500 sm:text-sm dark:text-white border border-zinc-950/10 dark:border-white/10 bg-transparent dark:bg-white/5 focus:outline-none data-invalid:border-red-500 data-disabled:border-zinc-950/20 dark:data-disabled:border-white/15 dark:data-disabled:bg-white/[2.5%]"
                        placeholder="544211"
                        name="otp"
                        required
                        autofocus
                    />
                </span>
                @error('otp')
                    <p class="position: absolute mt-1 text-base/6 text-red-600 data-disabled:opacity-50 sm:text-sm/6 dark:text-red-500">{{ $message }}</p>
                @enderror
            </div>
            <div class="mt-8">
                <button
                    wire:target="verify_otp"
                    wire:loading.attr="disabled"
                    type="submit"
                    class="relative w-full inline-flex items-center justify-center gap-x-2 rounded-lg border text-base font-semibold px-8 py-2 sm:px-8 sm:py-1.5 sm:text-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 disabled:opacity-50 border-transparent bg-zinc-900 text-white hover:bg-zinc-800 dark:bg-zinc-600 dark:text-white dark:hover:bg-zinc-500"
                >
                    <span class="relative">
                        <span wire:loading class="absolute inset-0 flex items-center left-0 -ml-6" aria-hidden="true">
                            <svg class="w-4 h-4 animate-spin text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                            </svg>
                        </span>
                        Verify
                    </span>
                </button>
            </div>
            @env('local')
                <p class="mt-6 text-sm text-zinc-400">Email not configured yet? Open <a href="{{ route('browseremail', ['email' => $email, 'otp' => $otp]) }}" target="_blank" class="text-white underline">browser email</a> for the OTP verification.</p>
            @endenv
        </form>
    @endif
</div>
