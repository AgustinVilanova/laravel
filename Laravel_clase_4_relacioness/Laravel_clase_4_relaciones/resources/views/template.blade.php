<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/css/app.css">
    <title>@yield('title')</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col col col col-xl-7">
          <div class="card">
            <div class="card-body">
                @yield('content')
            </div>
          </div>
        </div>
      </div>
    </div>

  </body>
</html>
