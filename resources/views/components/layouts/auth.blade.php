<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>{{ $title ?? 'Page Title' }}</title>
      <link rel="stylesheet" href="https://rsms.me/inter/inter.css" />
      @livewireStyles
      @vite(['resources/css/app.css', 'resources/js/app.js'])
   </head>
   <body class="text-gray-950 antialiased">
      <main class="overflow-hidden bg-gray-50">
         <div class="relative mx-auto max-w-7xl">
           <div class="absolute -top-44 -right-60 h-60 w-[36rem] transform-gpu md:right-0 bg-linear-115 from-[#fff1be] from-28% via-[#ee87cb] via-70% to-[#b060ff] rotate-[-10deg] rounded-full blur-3xl"/>
           </div>
         </div>
         <div class="isolate flex min-h-dvh items-center justify-center p-6 lg:p-8">
            <div class="w-full max-w-md rounded-xl bg-white shadow-md ring-1 ring-black/5">
                {{ $slot }}
            </div>
         </div>
      </main>
      @livewireScripts
   </body>
</html>
