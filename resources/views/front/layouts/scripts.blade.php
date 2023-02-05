<!-- jQuery -->
<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<!-- SweetAlert2 -->
<script src="{{asset('/plugins/sweetalert2/sweetalert2.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('dist/js/adminlte.min.js')}}"></script>
<script src="{{asset('js/app.js')}}"></script>

  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
  <script src="{{ asset('assets/vendor/aos/aos.js')}}"></script>
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{ asset('assets/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('assets/js/main.js')}}"></script>
  <script src="https://www.google.com/recaptcha/api.js?render={{config('envs.recaptcha_key')}}"></script>
<script>
    //Script to activate menu item based on current URL
    var url = window.location;

    // for sidebar menu entirely but not cover treeview
    $('ul.nav-sidebar a').filter(function() {
        return this.href == url;
    }).addClass('active');

    // for treeview
    $('ul.nav-treeview a').filter(function() {
        return this.href == url;
    }).parentsUntil(".nav-sidebar > .nav-treeview").addClass('menu-open').prev('a').addClass('active');
</script>

<script type="text/javascript">
    $(function() {
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000
        });

        @if ($message = Session::get('success'))
            Toast.fire({
                icon: 'success',
                title: '{{$message}}.'
            })
        @endif
        @if ($message = Session::get('error'))
            Toast.fire({
                icon: 'error',
                title: '{{$message}}.'
            })
        @endif
        @if ($message = Session::get('warning'))
            Toast.fire({
                icon: 'warning',
                title: '{{$message}}.'
            })
        @endif
    });
</script>
<script>
    $().ready(function(){

        $(document).on('submit', '#enquiry-form', function (event) {
        
            var datas = $(this).serialize();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
                }
            });
        
            $(".submit").val('Please wait ..').attr('disabled', true);
        
            event.preventDefault();
            grecaptcha.ready(function () {
                grecaptcha.execute("{{config('envs.recaptcha_key')}}", {action: "contact"}).then(function (token) {
                    console.log(datas);
                    $.ajax({
                        type: 'post',
                        url: "{{ url('/service-enquiry') }}",
                        data: datas + "&recaptcha-response=" + token,
                        success: function (response) {
                            if(response.success){
                                window.location.reload();
                            }
                            $(".submit").val('Submit').attr('disabled', true);
                        },
                        error: function(jqXhr, json, errorThrown){
                            var errors = jqXhr.responseJSON;
                            var errorsHtml = '';
                            $.each(errors['errors'], function (index, value) {
                                errorsHtml += '<ul class="list-group"><li class="list-group-item alert alert-danger">' + value + '</li></ul>';
                                $('.validation-errors').html(errorsHtml);
                            });
                        }
                    });
                })
            })
        });
    })
    </script>