        @php
            $year = date('Y');
        @endphp

                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                {{ $year }} © {{ $global_setting->title ?? "" }}
                            </div>

                            <div class="col-sm-6">
                                <div class="text-sm-end d-none d-sm-block">
                                    Design & Developed By: <a href="https://sebpo.com/"><img src="{{ asset('storage/logo') }}/{{ $global_setting->logo ?? '' }}" alt="" height="25" style="padding: 5px; background: #fff; border-radius: 5px;"> ServicEngine Ltd.</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <!-- JAVASCRIPT -->
        <script src="{{ asset('backend-assets/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('backend-assets/assets/libs/simplebar/simplebar.min.js') }}"></script>
        <script src="{{ asset('backend-assets/assets/libs/node-waves/waves.min.js') }}"></script>
        <script src="{{ asset('backend-assets/assets/libs/feather-icons/feather.min.js') }}"></script>
        <script src="{{ asset('backend-assets/assets/js/pages/plugins/lord-icon-2.1.0.js') }}"></script>
        <script src="{{ asset('backend-assets/assets/js/plugins.js') }}"></script>

        {{-- jquery --}}
        <script src="{{ asset('backend-assets/assets/js/jquery-3.6.0.min.js') }}"></script>
        {{-- select2 min js --}}
        <script src="{{ asset('backend-assets/assets/js/select2.min.js') }}"></script>
        <script src="{{ asset('backend-assets/assets/js/select2.init.js') }}"></script>

        <!-- apexcharts -->
        <script src="{{ asset('backend-assets/assets/libs/apexcharts/apexcharts.min.js') }}"></script>
        {{-- <script src="{{ asset('backend-assets/assets/js/pages/apexcharts-pie.init.js') }}"></script> --}}

        <!-- Dashboard init -->
        <script src="{{ asset('backend-assets/assets/js/pages/dashboard-crm.init.js') }}"></script>

        <!-- App js -->
        <script src="{{ asset('backend-assets/assets/js/app.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.5.2/js/plugins/buffer.min.js" type="text/javascript"></script>
        <script src="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.5.2/js/plugins/filetype.min.js" type="text/javascript"></script>
        <script src="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.5.2/js/plugins/piexif.min.js" type="text/javascript"></script>
        <script src="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.5.2/js/plugins/sortable.min.js" type="text/javascript"></script>
        <script src="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.5.2/js/fileinput.min.js"></script>

        <!-- glightbox js -->
        <script src="{{ asset('backend-assets/assets/libs/glightbox/js/glightbox.min.js') }}"></script>

        <!-- isotope-layout -->
        <script src="{{ asset('backend-assets/assets/libs/isotope-layout/isotope.pkgd.min.js') }}"></script>

        <script src="{{ asset('backend-assets/assets/js/pages/gallery.init.js') }}"></script>

        {{-- sweetalert2 --}}
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        <!-- dropzone min -->
        {{-- <script src="{{ asset('backend-assets/assets/libs/dropzone/dropzone-min.js') }}"></script> --}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.2.0/min/dropzone.min.js"></script>

        <!-- filepond js -->
        <script src="{{ asset('backend-assets/assets/libs/filepond/filepond.min.js') }}"></script>
        <script src="{{ asset('backend-assets/assets/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.js') }}"></script>
        <script src="{{ asset('backend-assets/assets/libs/filepond-plugin-file-validate-size/filepond-plugin-file-validate-size.min.js') }}"></script>
        <script src="{{ asset('backend-assets/assets/libs/filepond-plugin-image-exif-orientation/filepond-plugin-image-exif-orientation.min.js') }}"></script>
        <script src="{{ asset('backend-assets/assets/libs/filepond-plugin-file-encode/filepond-plugin-file-encode.min.js') }}"></script>

        {{-- File Pond Js Cdn --}}
        {{-- <script src="https://unpkg.com/filepond/dist/filepond.js"></script> --}}
        {{-- File Pond Jquerys Cdn --}}
        {{-- <script src="https://unpkg.com/jquery-filepond/filepond.jquery.js"></script> --}}
        {{-- File Pond Image Preview Cdn --}}
        {{-- <script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.js"></script> --}}
        {{-- <script>
            FilePond.registerPlugin(FilePondPluginImagePreview);
        </script> --}}

        <script src="{{ asset('backend-assets/assets/js/pages/form-file-upload.init.js') }}"></script>

        <script type="text/javascript" src="{{ asset('backend-assets\assets\js\image-uploader.min.js') }}"></script>

        <script>
            $('[href*="{{ \URL::current() }}"]').addClass('will_active');

            $('.simplebar-content .nav-link.will_active').map( function() {
                if ($(this).attr('href') == '{{\URL::current() }}') {
                    $(this).addClass('active');
                    if (!$('[href*="{{ \URL::current() }}"]').parent().parent().hasClass('simplebar-content')) {
                        $('[href*="{{ \URL::current() }}"]').closest('.menu-dropdown').addClass('show');
                        $('[href*="{{ \URL::current() }}"]').closest('.menu-dropdown').parent().find('.nav-link').attr('aria-expanded','true');
                        $('[href*="{{ \URL::current() }}"]').closest('.first-dropdown').find('.menu-link').attr('aria-expanded','true');
                        $('[href*="{{ \URL::current() }}"]').closest('.first-dropdown').find('.menu-dropdown:first').addClass('show');
                    }
                }
            }).get();

            $('.light-dark-mode').click(function() {
                let dark_mode = $(this).closest('html').attr('data-layout-mode');
                localStorage.setItem("dark_mode", dark_mode);
            });

            $(document).ready(function(){
                var dark_mode_check = localStorage.getItem("dark_mode");
                $("html").attr("data-layout-mode",dark_mode_check);
            });

            window.onload = function(){
                //hide the preloader
                document.querySelector(".bbs-loader-wrapper").style.display = "none";
            }
        </script>

        <script>
            $(document).ready(function() {
                $('.select2').select2();
            });
        </script>


            <script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.26/webcam.min.js"></script>
            {{-- <script src="{{ asset('backend-assets/webcam/webcam.min.js') }}"></script> --}}

        {{-- stack script --}}
        @stack('script')

    </body>
</html>
