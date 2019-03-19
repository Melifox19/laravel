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

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

   <!-- AdminLTE App -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.3/js/adminlte.min.js"></script>

   <script src="https://cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/icheck.min.js"></script>

@endsection
