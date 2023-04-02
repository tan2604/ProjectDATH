<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.layouts.head')
</head>

<body id="page-top">
    <!-- Content Wrapper -->
    <div id="wrapper">
        @include('admin.layouts.sidebar')
        <div id="content-wrapper" class="d-flex flex-column">
            @include('admin.layouts.topbar')

            <!-- Main Content -->
            <div id="content">

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    @yield('admin_content')

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            @include('admin.layouts.footer')
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    </div>
    <!-- End of Page Wrapper -->

</body>

</html>