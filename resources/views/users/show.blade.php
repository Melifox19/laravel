@extends('layouts.app')

@section('content')
<section class="content-header">
  <h1>
    Apiculteurs
  </h1>
</section>
<div class="content">
  <div class="box box-primary">
    <div class="box-body">
      <div class="row" style="padding-left: 20px">
        @include('users.show_fields')

        <!-- Ajout de la liste des ruches lié à l'utilisateur -->
        <br />

        <div class="ruche_table">
          @include('users.ruches_list')  
        </div>
        <!-- ================================================ -->
        <a href="{!! route('users.index') !!}" class="btn btn-default">Back</a>
      </div>
    </div>
  </div>
</div>
@endsection
