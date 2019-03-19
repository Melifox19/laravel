@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Modifier mon profil
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($user, ['route' => ['profile.update', $user->id], 'method' => 'patch']) !!}

                        @include('profile.fields_edit')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>

@endsection
