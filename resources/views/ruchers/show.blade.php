@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            {{ __('tables.apiary')}}
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('ruchers.show_fields')
                    <a href="{!! route('ruchers.index') !!}" class="btn btn-default">{{ __('tables.cancel')}}</a>
                </div>
            </div>
        </div>
    </div>
@endsection
