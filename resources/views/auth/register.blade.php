<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body>
    <div class="flex min-w-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            {{-- <img class="mx-auto h-10 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600"
                alt="Your Company"> --}}
            <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Register Akun</h2>
        </div>
        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            <form class="space-y-3" action="{{ route('register.store') }}" method="POST">
                @csrf
                <x-form-login.label name="username" class="flex font-medium" />
                <x-form-login.input name="username" type="username"/>
                
                <x-form-login.label name="email" class="flex font-medium" />
                <x-form-login.input name="email" type="email"/>
                
                <x-form-login.label name="password" class="flex font-medium" />
                <x-form-login.input name="password" type="password"/>

                <x-form-login.label name="Konfirmasi Password" class="flex font-medium" />
                <x-form-login.input name="password_confirmation" type="password"/>

                <div class="space-y-2">
                    <div class="flex justify-end">
                        <p>Sudah punya akun? </p><a href="{{ route('login') }}"
                            class="ms-2 underline text-blue-500">Login</a>
                    </div>
                    <button type="submit"
                        class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Register</button>
                </div>
            </form>
        </div>
    </div>

</body>

</html>
