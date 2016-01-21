@extends('main')
    @section('body')
    <div class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">
            <header class="main-header">
               <a href="#" class="logo">
                   <span class="logo-mini"><b>A</b>LT</span>
                   <span class="logo-lg"><b>Test</b>PROJECT</span>
               </a>
               <nav class="navbar navbar-static-top" role="navigation">
                   <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                       <span class="sr-only">Toggle navigation</span>
                       <span class="icon-bar"></span>
                       <span class="icon-bar"></span>
                       <span class="icon-bar"></span>
                   </a>
               </nav>
           </header>
           <aside class="main-sidebar">
               <section class="sidebar">
                   <ul class="sidebar-menu">
                       <li class="treeview {!! ($pageNo == 1) ? 'active' : '' !!}">
                           <a href="{!! URL :: route('domain') !!}">
                                <i class="fa fa-table"></i> <span>Domains</span>
                           </a>
                       </li>
                       <li class="treeview {!! ($pageNo == 2) ? 'active' : '' !!}">
                           <a href="{!! URL :: route('language') !!}">
                               <i class="fa fa-table"></i> <span>Languages</span>
                           </a>
                       </li>
                       <li class="treeview {!! ($pageNo == 3) ? 'active' : '' !!}">
                           <a href="{!! URL :: route('template') !!}">
                               <i class="fa fa-table"></i> <span>Templates</span>
                           </a>
                       </li>
                    </ul>
                </section>
            </aside>
                @yield('content')
            </div>
        </div>
    @stop

    @section('custom-scripts')
        <script>
          $(function () {
            $("#example1").DataTable();
            $('#example2').DataTable({
              "paging": true,
              "lengthChange": false,
              "searching": false,
              "ordering": true,
              "info": true,
              "autoWidth": false
            });
          });
        </script>
    @stop
@stop
