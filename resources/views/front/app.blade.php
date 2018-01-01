<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sell Buy Rent - The first real estate social platform</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <link rel="stylesheet" href="{!! asset('front/assets/stylesheets/icons_font.css') !!}">
    <link rel="stylesheet" href="{!! asset('front/node_modules/jquery-ui/jquery-ui.min.css') !!}">
    <link rel="stylesheet" href="{!! asset('front/assets/stylesheets/base.css') !!}" />
    <link rel="stylesheet" href="{!! asset('front/assets/stylesheets/interior-designer.css') !!}" />
</head>
<body>
    @include('front.partials.header')
    <section class="main">
        @include('front.partials.sidebar')
        @yield('page')
    </section>
    @include('front.partials.footer')
    @include('front.partials.scripts')
</body>
</html>