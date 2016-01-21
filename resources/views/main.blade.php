<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>AdminLTE | Test Project</title>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        {!! HTML::style('//maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css') !!}
        {!! HTML::style('//code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css') !!}
        {!! HTML::style('/assets/admin-lte/bootstrap/css/bootstrap.min.css') !!}
        {!! HTML::style('/assets/admin-lte/dist/css/AdminLTE.min.css') !!}
        {!! HTML::style('/assets/admin-lte/plugins/iCheck/square/blue.css') !!}
        
        {!! HTML::style('/assets/admin-lte/plugins/datatables/dataTables.bootstrap.css') !!}
        {!! HTML::style('/assets/admin-lte/dist/css/skins/_all-skins.min.css') !!}
        
        {!! HTML::style('/assets/style/style_common.css') !!}
        {!! HTML::style('/assets/style/style_other.css') !!}
        
       	@yield('styles')
    	@yield('custom-styles')
    </head>
    
    <body class="hold-transition login-page">
    
    	@yield('body')
    	
        {!! HTML::script('/assets/admin-lte/plugins/jQuery/jQuery-2.1.4.min.js') !!}
        {!! HTML::script('/assets/admin-lte/bootstrap/js/bootstrap.min.js') !!}
        {!! HTML::script('/assets/admin-lte/plugins/iCheck/icheck.min.js') !!}
        
        {!! HTML::script('/assets/admin-lte/plugins/datatables/jquery.dataTables.min.js') !!}
        {!! HTML::script('/assets/admin-lte/plugins/datatables/dataTables.bootstrap.min.js') !!}
        {!! HTML::script('/assets/admin-lte/plugins/slimScroll/jquery.slimscroll.min.js') !!}
        {!! HTML::script('/assets/admin-lte/plugins/fastclick/fastclick.min.js') !!}
        {!! HTML::script('/assets/admin-lte/dist/js/app.min.js') !!}
        {!! HTML::script('/assets/admin-lte/dist/js/demo.js') !!}
        {!! HTML::script('/assets/js/bootbox.min.js') !!}
        
        @yield('scripts')
    	@yield('custom-scripts')  
    </body>
</html>
