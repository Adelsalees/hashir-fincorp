<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    @include('front.layouts.head')

    @yield('styles')
</head>
<body class="font-sans antialiased hold-transition sidebar-mini">
    
    
        <!-- Navigation Bar -->
        @include('front.layouts.navigation')
        
        <!-- Main content -->
        <main>
           @yield('section')
        </main>
    
        @include('front.layouts.footer')
        <!-- Footer content -->
        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
</body>

@include('front.layouts.scripts')
@yield('scripts')
</html>