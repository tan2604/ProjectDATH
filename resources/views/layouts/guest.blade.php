<!DOCTYPE html>
<html lang="en">

<head>
    @include('client.layouts.head')
</head>
<!-- body -->

<body class="main-layout">
    <!-- loader  -->
   @include('client.layouts.navbar')
            <!-- end header -->
           {{-- @include('client.home') --}}
           @yield('content')
            <!--  footer -->
            @include('client.layouts.footer')
</body>

</html>