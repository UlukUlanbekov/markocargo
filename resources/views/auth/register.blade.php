<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <!-- Name -->
        <div class="mb-3">
            <label for="name" class="form-label">{{ __('Имя и Фамилия') }}</label>
            <input id="name" class="form-control" type="text" name="name" value="{{ old('name') }}" required autofocus autocomplete="name">
            @error('name')
            <div class="text-danger mt-2">{{ $message }}</div>
            @enderror
        </div>

        <!-- Phone -->
        <div class="mb-3">
            <label for="phone" class="form-label">{{ __('Телефон') }}</label>
            <input id="phone" class="form-control" type="text" name="phone" value="{{ old('phone') }}" required autofocus autocomplete="phone">
            @error('phone')
            <div class="text-danger mt-2">{{ $message }}</div>
            @enderror
        </div>

        <!-- Email Address -->
        <div class="mb-3">
            <label for="email" class="form-label">{{ __('Email') }}</label>
            <input id="email" class="form-control" type="email" name="email" value="{{ old('email') }}" required autocomplete="username">
            @error('email')
            <div class="text-danger mt-2">{{ $message }}</div>
            @enderror
        </div>

        <!-- Password -->
        <div class="mb-3">
            <label for="password" class="form-label">{{ __('Пароль') }}</label>
            <input id="password" class="form-control" type="password" name="password" required autocomplete="new-password">
            @error('password')
            <div class="text-danger mt-2">{{ $message }}</div>
            @enderror
        </div>

        <!-- Confirm Password -->
        <div class="mb-3">
            <label for="password_confirmation" class="form-label">{{ __('Подтвердите Пароль') }}</label>
            <input id="password_confirmation" class="form-control" type="password" name="password_confirmation" required autocomplete="new-password">
            @error('password_confirmation')
            <div class="text-danger mt-2">{{ $message }}</div>
            @enderror
        </div>

        <div class="d-flex justify-content-between align-items-center mt-4">
            <a class="text-decoration-underline text-secondary" href="{{ route('login') }}">
                {{ __('Уже есть аккаунт?') }}
            </a>
            <button type="submit" class="btn btn-primary ms-4">
                {{ __('Зарегистрироваться') }}
            </button>
        </div>
    </form>
</x-guest-layout>
