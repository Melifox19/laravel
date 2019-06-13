@extends('layouts.app')

@section('css')
    <!-- GoNowhere CSS -->
    @mapstyles
@endsection

@section('content')
<!-- GoNowhere maps scripts -->
@mapscripts

<div class="container">
    <div class="row">
        <div class="box">
            <h3 class="box-title">Tableau de bord</h3>
            <!-- X ruches sur Y ruchers -->
            <!-- Alertes? -->
            @map([
    'lat' => '46.494664',
    'lng' => '2.375220',
    'zoom' => '5',
])

        </div>
    </div>



</div>
@endsection
