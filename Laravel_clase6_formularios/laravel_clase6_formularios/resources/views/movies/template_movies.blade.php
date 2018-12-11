<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> @yield('title') </title>
    <link rel="stylesheet" href={{asset('css/app.css') }}>
  </head>
  <body>

    <div class="content col ">
        @yield('titular')
    </div>

    <section class="container">
      <div class="">
        @yield('content')
      </div>


    </section>
  </body>
</html>
