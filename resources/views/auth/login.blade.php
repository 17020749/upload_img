<head>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet" />
        <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"> </script>
    </head>
<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form>
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Tên đăng nhập')" />
            <x-text-input id="email" class="block mt-1 w-full" type="text" name="email" :value="old('email')" autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Mật khẩu')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                         autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>
        <div>
        <x-input-error :messages="$errors->get('checkLogin')" class="mt-2" />
        </div>
        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ml-2 text-sm text-gray-600">{{ __('Ghi nhớ') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Quên mật khẩu?') }}
                </a>
            @endif

            <x-primary-button class="ml-3">
                {{ __('Đăng nhập') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
<script>
    console.log(document.cookie);
    document.querySelector('form').addEventListener('submit', function(event){
        login();
        event.preventDefault();
    });
  async  function login(){
    try {
        const response = await $.ajax({
            url: 'api/login',
            method: 'POST',
            data: {
                email: $('#email').val(),
                password: $('#password').val(),
            },
            headers: {
                'X-XSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
            }
        });
        console.log(document.cookie);
        localStorage.setItem('api_token', response.token);
        window.location.href='/';        
    }
    catch(error){
         if (error.responseJSON && error.responseJSON.message) {
      console.error('Error delete user:', error.responseJSON.message);
    //   toastr.error(error.responseJSON.message);
    } else {
      console.error('Error delete user:', error);
    }
    }
    }
</script>