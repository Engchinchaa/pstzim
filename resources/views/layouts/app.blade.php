<!DOCTYPE html>
<html lang="en">
<head>
@include('partials.styles') <!-- Header -->
</head>
<body>
    <!-- HEADER -->
    @include('partials.header') <!-- Header -->

    <!-- MAIN CONTENT -->
    <main>
        @yield('content') <!-- Content inabadilika kulingana na page -->
    </main>

    <!-- FOOTER -->
    @include('partials.footer') <!-- Footer -->

    <!-- JS kwa kila ukurasa -->
    @include('partials.scripts') <!-- Header -->
</body>
</html>

