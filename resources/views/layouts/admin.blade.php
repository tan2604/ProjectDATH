<!DOCTYPE html>
<html lang="en">

<head>
@include('admin.layouts.head')
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        @include('admin.layouts.sidebar')
        @include('admin.layouts.topbar')
        
        <!-- End of Sidebar -->
        
        <!-- Content Wrapper -->
        @yield('admin_content')
           {{-- @include('admin.dashboard') --}}
            <!-- Footer -->
           @include('admin.layouts.footer')
</body>

</html>