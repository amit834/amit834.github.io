<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <script>
    var base_url = '{{ url("/") }}';
    </script>
      <title>Sales Operator</title>
      <link rel="stylesheet" href="{{ asset('themes/tailwind/customer/assets/css/style.css') }}">
      <link rel="stylesheet" href="{{ asset('themes/tailwind/customer/assets/css/mobile.css') }}">
      <link rel="stylesheet" href="{{ asset('themes/tailwind/customer/assets/css/bootstrap.min.css') }}">
      <link href='https://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet'>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.2.2/Chart.min.js"></script>
      <script src="https://code.highcharts.com/highcharts.src.js"></script>
      <link rel="stylesheet" href="{{ asset('themes/tailwind/customer/assets/css/flowbite.min.css') }}">
      <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.6.10/vue.min.js"></script>
      <script src="https://unpkg.com/@ckeditor/ckeditor5-vue@1.0.1/dist/ckeditor.js"></script>
      <script src="https://cdn.ckeditor.com/ckeditor5/17.0.0/classic/ckeditor.js"></script>
   </head>
   <body class="">
      <div class="admin-loader" style="display:none;">
         <img src="{{ asset('themes/tailwind/customer/assets/images/loader-img.gif') }}" class="loading-image">
      </div>
      <div class="all-dashboard-saction">
      @include('theme::customer.layouts.sidebar')
      @yield('content')
      <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
      <script src="{{ asset('themes/tailwind/customer/assets/js/bootstrap.min.js') }}"></script>
      <script src="{{ asset('themes/tailwind/customer/assets/js/custom-all.js') }}"></script>
      <script src="{{ asset('themes/tailwind/customer/assets/js/jquery.validate.min.js') }}"></script>
      <script src="{{ asset('themes/tailwind/customer/assets/js/custom-ajax.js') }}"></script>
      <script src="https://use.fontawesome.com/774c27057f.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/datepicker.min.js"></script>
      <script src="https://use.fontawesome.com/774c27057f.js"></script>
   </body>
</html>