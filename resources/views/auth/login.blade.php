<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    @vite('resources/css/app.css')

    <title>Security</title>
</head>

<body class="bd-gray-50 min-h-screen">
    <svg class="fixed bottom-0 fill-blue-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill-opacity="1" d="M0,224L48,186.7C96,149,192,75,288,74.7C384,75,480,149,576,160C672,171,768,117,864,101.3C960,85,1056,107,1152,144C1248,181,1344,235,1392,261.3L1440,288L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
    </svg>
    <header class="flex items-center justify-between p-6 pb-12">
        <a href="{{ route('welcome') }}" class="flex items-center gap-2">
            <svg class="h-10 text-blue-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                <path fill-rule="evenodd" d="M12.516 2.17a.75.75 0 00-1.032 0 11.209 11.209 0 01-7.877 3.08.75.75 0 00-.722.515A12.74 12.74 0 002.25 9.75c0 5.942 4.064 10.933 9.563 12.348a.749.749 0 00.374 0c5.499-1.415 9.563-6.406 9.563-12.348 0-1.39-.223-2.73-.635-3.985a.75.75 0 00-.722-.516l-.143.001c-2.996 0-5.717-1.17-7.734-3.08zm3.094 8.016a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd" />
            </svg>
            <span class="text-xl font-black">Security</span>
        </a>
        <div>
            <a href="{{ route('register') }}" class="rounded-md bg-blue-600 py-2 px-4 text-white font-semibold shadow-lg hover:shadow-xl focus:shadow-xl hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition duration-200 ease-in-out">Register</a>
        </div>
    </header>
    <main class="flex flex-col justify-center p-6">
        <div class="mx-auto max-w-md">
            <svg class="h-12 text-blue-600 mx-auto" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15m3 0l3-3m0 0l-3-3m3 3H9" />
            </svg>

            <h2 class="mt-2 sm:mt-6 text-2xl sm:text-3xl font-bold text-gray-900">
                Welcome back!
            </h2>
        </div>
        <div class="bg-white/80 backdrop-blur-xl mt-6 sm:mt-10 mx-auto rounded-xl shadow-xl p-6 sm:p-10 max-w-md w-full">
            <form action="{{ route('login') }}" method="post"  autocomplete="off">
                @csrf

                @if (session('status'))
                <div class="flex gap-3 rounded-md border border-green-500 bg-green-50 p-4 mb-6">
                    <svg class="h-5 w-5 text-green-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                        <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd" />
                    </svg>
                    <h3 class="text-sm font-medium text-green-800">{{ session('status') }}</h3>
                </div>
                @endif

                <div class="mb-6">
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <div class="relative rounded-md shadow-sm mt-1">
                        <div class="absolute left-0 inset-y-0 flex items-center pl-3">
                            <svg class="h-5 w-5 {{ $errors->has('email') ? 'text-red-400' : 'text-gray-400'}}" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                            </svg>
                        </div>
                        <input type="email" id="email" name="email" autofocus value="{{ old('email') }}" class="pl-10 rounded-md {{ $errors->has('email') ? 'text-red-900 placeholder-red-300 border-red-300 focus:border-red-500 focus:ring-red-500' : 'border-gray-300 placeholder-gray-300 focus:border-blue-500 focus:ring-blue-500'}} text-sm w-full" placeholder="jhonwick@gmail.com" />
                        @error('email')
                        <div class="absolute right-0 inset-y-0 flex items-center pr-3">
                            <svg class="h-5 w-5 text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zM12 8.25a.75.75 0 01.75.75v3.75a.75.75 0 01-1.5 0V9a.75.75 0 01.75-.75zm0 8.25a.75.75 0 100-1.5.75.75 0 000 1.5z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        @enderror
                    </div>
                    @error('email')
                    <p class="mt-2 text-sm text-red-600">
                        {{ $message }}
                    </p>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <div class="relative rounded-md shadow-sm mt-1">
                        <div class="absolute left-0 inset-y-0 flex items-center pl-3">
                            <svg class="h-5 w-5 {{ $errors->has('password') ? 'text-red-400' : 'text-gray-400'}}" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
                            </svg>
                        </div>
                        <input type="password" id="password" name="password" minlength="8" class="pl-10 rounded-md {{ $errors->has('password') ? 'text-red-900 placeholder-red-300 border-red-300 focus:border-red-500 focus:ring-red-500' : 'border-gray-300 placeholder-gray-300 focus:border-blue-500 focus:ring-blue-500'}} text-sm w-full" placeholder="Min 8 characters" />
                        @error('password')
                        <div class="absolute right-0 inset-y-0 flex items-center pr-3">
                            <svg class="h-5 w-5 text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zM12 8.25a.75.75 0 01.75.75v3.75a.75.75 0 01-1.5 0V9a.75.75 0 01.75-.75zm0 8.25a.75.75 0 100-1.5.75.75 0 000 1.5z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        @enderror
                    </div>
                    @error('password')
                    <p class="mt-2 text-sm text-red-600">
                        {{ $message }}
                    </p>
                    @enderror
                </div>
                <div class="flex justify-between items-center mb-6">
                    <div class="flex items-center gap-2">
                        <input type="checkbox" id="remember" name="remember" class="w-4 h-4 rounded border-gray-300 text-blue-600 focus:ring-blue-500" />
                        <label for="remember" class="text-gray-900">Remember me</label>
                    </div>
                    <a href="{{ route('password.request') }}" class="font-medium text-sm text-blue-600 hover:text-blue-500">Forgot your password?</a>
                </div>
                <div>
                    <button type="submit" class="w-full flex justify-center items-center rounded-md bg-blue-600 py-2 px-4 text-white font-semibold shadow-lg hover:shadow-xl focus:shadow-xl hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition duration-200 ease-in-out">Log In</button>
                </div>
            </form>

            <!-- <div class="flex justify-center items-center mt-6">
        <a href="login.html" class="font-medium text-sm text-blue-600 hover:text-blue-500">Already have an account?</a>
      </div> -->
        </div>
    </main>
</body>

</html>