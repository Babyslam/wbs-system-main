<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Pantau Pengaduan</title>
    <link href="{{ asset('wbs-assets/css/app.css') }}" rel="stylesheet" />
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet" />
    <!-- jQuery-MultiSelect -->
    <link rel="stylesheet" href="{{ asset('wbs-assets/vendor/jQuery-MultiSelect/jquery.multiselect.css') }}" />
    <!-- multipleImgUpload -->
    <link rel="stylesheet" href="{{ asset('wbs-assets/vendor//image-uploader/dist/image-uploader.min.css') }}" />
</head>

<body>
    @include('user.layouts.navbar-dashboard')

    @yield('content')

    @include('user.layouts.footer-dashboard')

    <script src="{{ asset('wbs-assets/js/app.js') }}" type="text/javascript"></script>
    @if (Request::is('dashboard'))
        <script>
            $(".table-responsive").on("show.bs.dropdown", function() {
                $(".table-responsive").css("overflow", "inherit");
            });

            $(".table-responsive").on("hide.bs.dropdown", function() {
                $(".table-responsive").css("overflow", "auto");
            });
            let checkAll = $("#checkAll");
            let tableCheck = $(".tableCheck");
            $("#checkAll").click(function() {
                if (!checkAll.prop("checked")) {
                    tableCheck.prop("checked", false);
                } else {
                    tableCheck.prop("checked", true);
                }
            });
        </script>
    @endif

    @if (Request::is('dashboard/pengaduan') or Request::is('dashboard/pengaduan/*'))
        <!-- jQuery-MultiSelect -->
        <script src="{{ asset('wbs-assets/vendor/jQuery-MultiSelect/jquery.multiselect.js') }}"></script>
        <script>
            $("select[multiple]#perangkat_daerah").multiselect({
                search: true,
                texts: {
                    placeholder: "Perangkat Daerah yang terlapor",
                    search: "Ketik nama Perangkat Daerah disini ...",
                },
            });
        </script>
        <!-- FileUploadWithPreview -->
        <script type="text/javascript" src="assets/vendor/image-uploader/dist/image-uploader.min.js"></script>
        {{-- <script>
            $(document).ready(function() {
                let preloaded = [];
                $("#bukti").imageUploader({
                    preloaded: preloaded,
                    imagesInputName: 'bukti',
                });
            });
        </script> --}}
    @endif
</body>

</html>
