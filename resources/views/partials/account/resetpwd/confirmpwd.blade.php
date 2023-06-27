<div class="mt-2 form-group" x-data="{ show: true }">
    <input :type="show ? 'password' : 'text'" class="form-style text-xs sm:text-sm" name="password_confirmation"
        placeholder="Password Confirmation" autocomplete="off" required minlength="6">

    <img src="{{ url('/asset/eyes-on.svg') }}" alt="password"
        class="absolute top-0 w-6 ml-4 translate-y-1/2 cursor-pointer" x-on:click="show = !show"
        :class="{ 'hidden': !show, 'block': show }" />
    <img src="{{ url('/asset/eyes-off.svg') }}" alt="password"
        class="absolute top-0 w-6 ml-4 translate-y-1/2 cursor-pointer" x-on:click="show = !show"
        :class="{ 'block': !show, 'hidden': show }" />
</div>
