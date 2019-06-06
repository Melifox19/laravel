@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            {{__('tables.hive')}}
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('ruches.show_fields')
                    <a href="{!! route('ruches.index') !!}" class="btn btn-default">{{__('tables.cancel')}}</a>
                </div>
            </div>
        </div>

        <div class="box box-primary">
            <h3>{{ __('tables.location') }}</h3>
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    <p>OpenStreetMaps</p>
                </div>
            </div>
        </div>

        <div class="box box-primary">
            <h3>Graphes</h3>
            <div class="box-body">
                <div class="row" style="padding-left: 20px" id="hchart">
                    {!! $chart !!}
                </div>
            </div>
        </div>

    </div>
@endsection
