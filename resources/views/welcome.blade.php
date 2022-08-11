<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <script src="https://cdn.tailwindcss.com"></script>
        <title>Festiv'app</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    </head>
    <body>

        <div class='flex items-center justify-center min-h-screen'>
        <div class="border w-fit rounded-xl m-5 shadow-sm">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="px-4 py-2 rounded-l-xl text-white m-0 bg-red-500 hover:bg-red-600 transition">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="px-4 py-2 rounded-l-xl text-white m-0 bg-red-500 hover:bg-red-600 transition">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="px-4 py-2 rounded-r-xl bg-neutral-50 hover:bg-neutral-100 transition">Register</a>
                        @endif
                    @endauth
                </div>
            </div>
            @endif
    </body>
    </html>