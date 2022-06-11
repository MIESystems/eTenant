@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                {{ $form->getName() }}
            </div>
        </div>
        <div class="card-body">
            {!! form($form) !!}
        </div>
    </div>
@endsection
