<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <!-- Fallback for when Vite isn't used (e.g., in production without Vite) -->
        <link href="{{ mix('css/app.css') }}" rel="stylesheet">
        <script src="{{ mix('js/app.js') }}" defer></script>
    @endif
</head>
<body class="flex flex-col min-h-screen bg-gray-100 text-gray-800 font-sans">
  <!-- Header -->
  <header class="bg-white shadow-sm sticky top-0 z-10">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-4 flex justify-between items-center">
      <h1 class="text-xl sm:text-2xl font-bold text-gray-900">My Blog</h1>
      <nav class="hidden md:flex space-x-8">
        <a href="#" class="text-gray-600 hover:text-blue-600 transition-colors">Home</a>
        <a href="#" class="text-gray-600 hover:text-blue-600 transition-colors">About</a>
        <a href="#" class="text-gray-600 hover:text-blue-600 transition-colors">Contact</a>
      </nav>
      <button class="md:hidden text-gray-600 focus:outline-none">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
      </button>
    </div>
  </header>

  <!-- Main Content -->
  <main class="flex-grow container mx-auto px-4 sm:px-6 lg:px-8 py-8">
    {{ $slot }}
    {{-- <article class="max-w-3xl mx-auto bg-white rounded-lg shadow-md p-6">
      <h2 class="text-3xl font-semibold text-gray-800 mb-4">Blog Title</h2>
      <p class="text-gray-700 mb-6 leading-relaxed">
        Welcome to my blog! This is a space where I share my thoughts, ideas, and experiences. Enjoy reading and feel free to leave your comments.
      </p>
      <div class="prose max-w-none">
        <p>Here's where the main blog content will go...</p>
        <!-- Add more blog content as needed -->
      </div>
    </article> --}}
  </main>

  <!-- Footer -->
  <footer class="bg-gray-900 text-gray-400 py-6 mt-12">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 flex flex-col md:flex-row justify-between items-center space-y-4 md:space-y-0">
      <p class="text-sm text-center md:text-left">© 2023 My Blog. All rights reserved.</p>
      <div class="flex space-x-4">
        <a href="#" class="hover:text-white transition-colors">Twitter</a>
        <a href="#" class="hover:text-white transition-colors">GitHub</a>
        <a href="#" class="hover:text-white transition-colors">LinkedIn</a>
      </div>
    </div>
  </footer>
</body>

</html>
