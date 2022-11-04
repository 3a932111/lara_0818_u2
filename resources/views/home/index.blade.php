<!DOCTYPE html>
<!--練習 1-5  重新命名及移動至 home下-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>home</title>
</head>
  <body>
  <p>hello</p>

  <!--練習 2-2  建立子樣板-->
  @extends('layouts.master')
  @section('title','Home')
  @section('content')
      <h1>Home</h1>
      <p>This is mybody content.</p>
  @endsection


  </body>
</html>