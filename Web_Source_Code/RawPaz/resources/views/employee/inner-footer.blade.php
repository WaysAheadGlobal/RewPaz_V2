</div>
    </div>



    <!-- js -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="{{asset('assets/js/jquery-2.1.0.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/owl-carousel.js')}}"></script>
    <script src="{{asset('assets/js/animate.js')}}"></script>
    <script src="{{asset('assets/js/dash_custom.js')}}"></script>
    <script src='https://cdn.jsdelivr.net/npm/vanillajs-datepicker@1.1.4/dist/js/datepicker.min.js'></script>
    <script>
        $(".mobile_view_btn").click(function(){
  $(".left__sidebar").toggleClass("open_bar");
});
    </script>
    @livewireScripts

    @yield('script')

</body>

</html>