 @include('layouts.partials._header')
  <body>

      <header>
        @yield('header')
      </header>

      <main class="container">
        @yield('main')
      </main>
      <footer>
        @yield('footer')
      </footer>
 @include('layouts.partials._footer')
