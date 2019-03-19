@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4 no-float">
            <div class="">
                <h2>Information ruche</h2>
                <br />
                <h4>Température: </h4>
                <h4>Pression: </h4>
                <h4>Hygrométrie: </h4>
                <h4>Géolocalisation: </h4>
                <h4>Vibration: </h4>
                <h4>Son: </h4>
            </div>
            <div class="">
                <h2>OpenStreetMaps</h2>
            </div>
        </div>
        <div class="col-md-8 no-float">
            <h2>High charts</h2>
        </div>
    </div>
</div>
@endsection
