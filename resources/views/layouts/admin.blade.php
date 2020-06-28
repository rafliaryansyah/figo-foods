<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>@yield('title') &mdash; Figo</title>

  @include('includes.admin.style')

</head>

<body>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      @include('includes.admin.navbar')
      @include('includes.admin.sidebar')

      <!-- Main Content -->
      @yield('content')
      
    </div>
  </div>

  @include('includes.admin.script')
</body>
</html>