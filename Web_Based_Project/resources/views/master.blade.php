<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registeration Form Application</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <a href="{{ route('converter','ar')}}"> AR </a></br>
    <a href="{{ route('converter','en')}}"> EN </a>

    <div class="container mt-5">

        <h1 class="text-primary mt-3 mb-4 text-center"><b>{{__('msg.Registeration Form Application')}}</b></h1>

        @yield('content')

    </div>

</body>

</html>