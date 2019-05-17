@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
          {{ __('tables.hive')}}
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($ruche, ['route' => ['ruches.update', $ruche->id], 'method' => 'patch']) !!}

                        @include('ruches.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
