<!DOCTYPE html>
<html lang="en">
    <head>
        @include('layouts.head')
    </head>
    <body class="hold-transition skin-blue sidebar-mini">
      <div class="wrapper">
        @include('layouts.header')
        @include('layouts.sidebar')
        <div class="content-wrapper">
           <!-- Content Header (Page header) -->
         @yield('main-content')
         @yield('content')
         
        </div>
        @include('layouts.footer')
     </div>
    </body>
    </html>