@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Meliborne
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($meliborne, ['route' => ['melibornes.update', $meliborne->id], 'method' => 'patch']) !!}

                        @include('melibornes.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection