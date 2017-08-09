<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.front.head')
</head>

<body>
<!-- header -->
    @include('includes.front.header')
<!-- header -->
@yield('content')
<!-- footer -->
@include('includes.front.footer')
@include('includes.front.scripts')
</body>
</html>