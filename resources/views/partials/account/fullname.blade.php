<div class="form-group">
    <input type="text" class="form-style sm:text-sm text-xs" placeholder="Your Full Name" id="logname" name="name"
        value="{{ old('username') }}" autocomplete="off" required minlength="3">
    <img src="{{ url('/asset/username.svg') }}" alt="full name" class="absolute top-0 left-0 w-6 ml-4 translate-y-1/2" />
</div>
