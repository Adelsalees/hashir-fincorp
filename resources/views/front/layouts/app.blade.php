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
          <div class="modal fade" id="thanks-modal" tabindex="-1" role="dialog"
            aria-labelledby="consultation-modal" style="display: none;" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content" style="background: #0A645A">
                    <div class="modal-header border-0">

                    </div>
                    <div class="modal-body">
                        <div class="body-inner">
                            <div class="inner-right">
                                <h3 style="color:#FFFFFF;text-align:center">THANKS FOR SHARING THE DETAILS.</h3>
                                <h5 style="color:#FFFFFF;text-align:center">We will get back to you shortly.</h5>
                                <button type="button" id="modal-close" class="btn d-block mt-4"  class="close" id="close-modal" aria-label="Close"
                                    style="margin:0 auto;z-index:1;background-color:#FFFFFF;padding:5px 30px;">OK</button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <a href="https://wa.me/919745421461" target="__blank" class="back-to-top d-flex align-items-center justify-content-center"><img src="{{asset('assets/img/whatsapp.png')}}"></i></a>
</body>

@include('front.layouts.scripts')
@yield('scripts')
</html>