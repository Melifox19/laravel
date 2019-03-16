@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Vérifiez votre adresse mail') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Un tout nouveau lien vous a été envoyé !') }}
                        </div>
                    @endif

                    {{ __('Avant de continuer, veuillez vérifier votre boite de messagerie') }}
                    {{ __('Mail non reçu ?') }}, <a href="{{ route('verification.resend') }}">{{ __('Envoyer un nouveau mail') }}</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
