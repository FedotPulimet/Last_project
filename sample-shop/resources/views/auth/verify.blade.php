@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Подтвердите электронную почту</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            Ссылка на подтверждения электронной почты была отправленна на ваш адрес.
                        </div>
                    @endif

                    Перед продолжение,проверьте вашу почту на ссылку подтверждения.
                    {{ __('If you did not receive the email') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">Нажмите здесь для еще одной ссылки для подтверждения.</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
