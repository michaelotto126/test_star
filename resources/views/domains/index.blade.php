@extends('layout')
    @section('content')
        <div class="content-wrapper">
            <section class="content-header">
                <h1>
                    Domains
                </h1>
            </section>
            <section class="content">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="box">
                            <div>   
                                @if ($errors -> has())
                                    <div class="alert alert-danger alert-dismissibl fade in">
                                        <button type="button" class="close" data-dismiss="alert">
                                            <span aria-hidden="true">&times;</span>
                                            <span class="sr-only">Close</span>
                                        </button>
                                        @foreach ($errors -> all() as $error)
                                            <p>{{ $error }}</p>		
                                        @endforeach
                                    </div>
                                @endif 
            			        
                                @if (isset($alert)) 
                                    <div class="alert alert-{!! $alert['type'] !!} alert-dismissibl fade in">
                                        <button type="button" class="close" data-dismiss="alert">
                                            <span aria-hidden="true">&times;</span>
                                                <span class="sr-only">Close</span>
                                        </button>
                                        <p>
                                            {!! $alert['msg'] !!}
                                        </p>
                                    </div>
                                @endif 
                            </div>
                            <div class="box-header">
                                <a href="{!! URL::route('domain.create')!!}" class="btn btn-primary">Create</a>
                            </div>
                            <div class="box-body">
                                <table id="example2" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Name</th>
                                            <th>Description</th>
                                            <th>Language_id</th>
                                            <th>Template_id</th>
                                            <th>Deleted</th>
                                            <th>Created at</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($domain as $key => $domain_item)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{ $domain_item->name }}</td>
                                                <td>{{ $domain_item->description }}</td>
                                                <td>{{ $domain_item->language->language }}</td>
                                                <td>{{ $domain_item->template->title }}</td>
                                                <td>{{ $domain_item->is_deleted }}</td>
                                                <td>{{ substr($domain_item->created_at, 0, 10) }}</td>
                                                <td>
                                                    <a href="{!! URL::route('domain.edit', $domain_item['id']) !!}" class="btn btn-success">Edit</a>
                                                    <a data-url="{!! URL::route('domain.delete', $domain_item->id)!!}" onclick="deleteLanguage(this);" class="btn btn-danger">Delete</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
       </div>
    @stop 
    
    @section ('scripts') 
        <script type="text/javascript">
            function deleteLanguage(obj) {
                bootbox.confirm('Are you sure?', function(result) {
                    if (result) {
                        location.href=$(obj).attr('data-url');
                    }
                });    
            }
        </script>
    @stop
    
@stop
