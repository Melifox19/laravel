@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">

        <div class="col-md-4">
            <div class="box">
                <h3 class="box-title">Information ruche</h3>
                <br />
                <p>Température: </p>
                <p>Pression: </p>
                <p>Hygrométrie: </p>
                <p>Géolocalisation: </p>
                <p>Vibration: </p>
                <p>Son: </p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="box">
                <h3 class="box-title">OpenStreetMaps</h3>
            </div>
        </div>

        <div class="col-md-8">
            <div class="box">
                <h3 class="vox-title">High charts</h3>
                <div class="container box-body" id="hchart">
                    {!! $chart1 !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
