<!doctype html>
<html lang="en">
@include('admins.layouts.head')

<body data-topbar="dark">
    @include('admins.layouts.navbar')
    @include('admins.layouts.sidebar')
    @yield('content')
    @include('admins.layouts.script')
</body>

</html>