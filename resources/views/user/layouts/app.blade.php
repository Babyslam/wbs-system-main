<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Whistleblowing System Kota Malang</title>
    <link href="{{ asset('wbs-assets/css/app.css') }}" rel="stylesheet" />
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet" />
    <!-- jQuery-MultiSelect -->
    <link rel="stylesheet" href="{{ asset('wbs-assets/vendor/jQuery-MultiSelect/jquery.multiselect.css') }}" />
</head>

<body>
    @include('user.layouts.navbar')

    @yield('content')

    @include('user.layouts.footer')

    <script src="{{ asset('wbs-assets/js/app.js') }}" type="text/javascript"></script>
    <!-- jQuery-MultiSelect -->
    <script src="{{ asset('wbs-assets/vendor/jQuery-MultiSelect/jquery.multiselect.js') }}"></script>
    <script>
        let shapeTop = document.getElementById("shapeTop");
        let shapeTopHeight =
            document.querySelector("#shapeTop").offsetHeight;
        let shapeBotttom = document.getElementById("shapeBottom");
        let shapeBottomHeight =
            document.querySelector("#shapeBottom").offsetHeight;

        console.log(shapeTopHeight - 10);
        let addShapeTopHeight = shapeTopHeight - 10;
        let addShapeBottomHeight = shapeBottomHeight - 10;
        shapeTop.style.top = "-" + addShapeTopHeight + "px";
        shapeBottom.style.bottom = "-" + addShapeBottomHeight + "px";
    </script>
</body>

</html>
