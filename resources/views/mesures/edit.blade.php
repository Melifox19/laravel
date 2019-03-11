@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Mesure
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($mesure, ['route' => ['mesures.update', $mesure->id], 'method' => 'patch']) !!}

                        @include('mesures.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection