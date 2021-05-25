<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        @yield('title')
    </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>

<body class="">

    @include('components.header')

    <div>
        <div style="margin-top: -1.3%;" class="row">
            <div class="col-3 sidebar">
                @include('components.sidebar')
            </div>

            <div class="col-3"></div>
            <div class="col-9 content">
                @yield('content')
            </div>
        </div>
    </div>

    <style>
    ::-webkit-scrollbar {
        display: none;
    }

    .content {
        overflow-x: hidden;
        overflow-y: scroll;
    }

    header {
        position: fixed;
        left: 0;
        top: 0;
        width: 100%;
        z-index: 100;
        border-bottom: none !important;
    }

    .border-bottom {
        border-bottom: none !important;
    }

    .sidebar {
        position: fixed;
        left: 0;
        top: 11% !important;
        height: 100%;
        padding-left: 0 !important;
    }

    body {
        margin: 0;
    }

    .content {
        margin-top: 7%;
        margin-left: -1;
        padding-bottom: 5%;
    }
    </style>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
</body>

</html>