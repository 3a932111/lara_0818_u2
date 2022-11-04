<!DOCTYPE html>
<!--練習 2-1  建立主樣板-->
<html>
<head>
<title>@yield('title')|MyBlog</title>
</head>
<body>
<!--練習 2-3 -->
@include('layouts.partials.navigation')

<div class="container">
@yield('content')
</div>
</body>
</html>
