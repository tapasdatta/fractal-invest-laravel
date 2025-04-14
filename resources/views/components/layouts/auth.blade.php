<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="antialiased dark text-zinc-950 lg:bg-zinc-100 dark:bg-zinc-900 dark:text-white dark:lg:bg-zinc-950">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>{{ $title ?? 'Page Title' }}</title>
      <link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon" sizes="32x32"/>
      <link rel="stylesheet" href="https://rsms.me/inter/inter.css" />
      @livewireStyles
      @vite(['resources/css/app.css', 'resources/js/app.js'])
   </head>
   <body>
      <main class="flex min-h-dvh flex-col p-2">
         <div class="flex grow items-center justify-center p-6 lg:rounded-lg lg:bg-white lg:p-10 lg:shadow-xs lg:ring-1 lg:ring-zinc-950/5 dark:lg:bg-zinc-900 dark:lg:ring-white/10">

            {{ $slot }}

         </div>
      </main>
      @livewireScripts
   </body>
</html>
