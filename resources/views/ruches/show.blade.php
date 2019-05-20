@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            __('tables.hive')
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('ruches.show_fields')
                    <a href="{!! route('ruches.index') !!}" class="btn btn-default">__('tables.cancel')</a>
                </div>
            </div>
        </div>
    </div>
@endsection
