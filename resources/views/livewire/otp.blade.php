<form class="p-7 sm:p-11" wire:submit="verify_otp">
    <p class="mt-1 text-sm/5 text-gray-600">
        You have sent an email with a code to log in.
    </p>
    <div class="mt-4 space-y-3">
        <label class="text-sm/5 font-medium">OTP</label>
        <input wire:model="otp" required autoFocus type="text" name="otp" class="@error('otp') outline-red-300 @enderror block w-full rounded-lg border border-transparent shadow-sm ring-1 ring-black/10 px-[calc(--spacing(2)-1px)] py-[calc(--spacing(1.5)-1px)] text-base/6 sm:text-sm/6 data-focus:outline data-focus:outline-2 data-focus:-outline-offset-1 data-focus:outline-black"/>
    </div>
    @error('otp')
        <p class="mt-2 text-sm text-red-600" id="otp-error">OTP did not match.</p>
    @enderror
    <div class="mt-8">
        <button class="w-full inline-flex items-center justify-center px-4 py-[calc(--spacing(2)-1px)] rounded-full border border-transparent bg-gray-950 shadow-md text-base font-medium whitespace-nowrap text-white data-disabled:bg-gray-950 data-disabled:opacity-40 data-hover:bg-gray-800" type="submit" class="w-full">
            Verify
        </button>
    </div>
</form>
