<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="icon" type="image/png" sizes="16x16" href="img/logo.png">
        <script src="https://cdn.tailwindcss.com"></script>
        <title>Festiv’App</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    </head>
    <body>

<br>
<br>
<br>
<br>
<br>
<br>
<br>


                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div>
                            <div class='flex max-w-sm w-full bg-white shadow-md rounded-lg overflow-hidden mx-auto'>
                                <div class='w-2 bg-gray-800'></div>
                        
                                <div class='flex items-center px-2 py-3'>
                                    <div class="w-full max-w-xs">
                          <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                            <div class="mb-4">
                              <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                                Email
                              </label>
                              <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Votre mail">
                            </div>
                            <div class="mb-6">
                              <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                                Mots de passe
                              </label>
                              <input id="password" type="password" name="password" required autocomplete="current-password"class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="password" type="password" placeholder="************">
                        
                            @error('password')
                                <span class="text-red-500 text-xs italic" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>
                            <div class="flex items-center justify-between">
                              <button class="bg-gray-500 hover:bg-gray-900 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="sumbit">
                                Se connecter
                              </button>
                              <br>

                              <a href="{{ route('register') }}" class="bg-gray-500 hover:bg-gray-900 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Inscription</a>

                
                            </div>
                          </form>
                          <br>
                          <p class="text-center text-gray-500 text-xs">
                            &copy;2022 Festive'network
                          </p>
                        </div>
                                </div>
                            </div>
                        </div>
                    </form>

<!-- This is an example component -->



    </body>
</html>