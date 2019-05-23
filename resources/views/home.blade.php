@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">

        <div class="col-md-4">
            <div class="box">
                <h3 class="box-title">Information ruche</h3>
                <br />

                <table>
                    <tr>
                        <td>Température:</td>
                        <td>56 °C</td>
                    </tr>
                    <tr>
                        <td>Pression:</td>
                        <td>0 hPa</td>
                    </tr>
                    <tr>
                        <td>Hygrométrie:</td>
                        <td>95%?</td>
                    </tr>
                    <tr>
                        <!-- &emsp; = une tabulation pour la mise en page -->
                        <td>Géolocalisation:&emsp;</td>
                        <td>44.7706, -0.6015</td>
                    </tr>
                    <tr>
                        <td>vibration:</td>
                        <td>?</td>
                    </tr>
                    <tr>
                        <td>Son:</td>
                        <td>60 dB</td>
                    </tr>
                </table>

            </div>
        </div>

        <div class="col-md-8">
            <div class="box">
                <h3 class="box-title">OpenStreetMaps</h3>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
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
