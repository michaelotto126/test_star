@extends('layout')
    @section('content')
        <div class="content-wrapper">
            <section class="content-header">
                <h1>
                    Create
                </h1>
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
            </section>
            <section class="content">
               <div class="box box-info">
                   <form action="{!! URL::route('template.store') !!}" method="post">
                       <input type="hidden" name="_token" value="{{ csrf_token() }}">
                       <div class="box-body">
                           <div class="form-group margin-top-xs">
                               <div class="row margin-top-xs">
                                   <div class="col-sm-3">
                                       <label for="inputTitle" class="col-sm-2 control-label">Title</label>
                                   </div>
                                   <div class="col-sm-9">
                                       <input type="text" name="title" class="form-control" >
                                   </div>
                               </div>
                               <div class="row margin-top-xs">
                                   <div class="col-sm-3">
                                       <label for="inputSlug" class="col-sm-2 control-label">Slug</label>
                                   </div>
                                   <div class="col-sm-9">
                                       <input type="text" name="slug" class="form-control">
                                   </div>
                               </div>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-sm-4 col-sm-offset-4">
                               <button type="submit" class="btn btn-default" onclick="{!! URL::route('template') !!} " style="margin-left: 34%;" >Register</button>
                               <a href="{!! URL::route('template') !!}" class="btn btn-info pull-right margin-bottom-xs">Cancel</a>
                          </div>
                      </div>
                    </form>
                </div>
            </section>
          </div>
      @stop
 @stop
