<!DOCTYPE html>
<html>
<head>
  @include ('include.adm.head')  
</head>
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">
    @include ('include.adm.header')  
    @yield('content')    
    @include('include.adm.footer')  
  </div><!-- ./wrapper -->  
   @include('include.adm.script')  
</body>
</html>