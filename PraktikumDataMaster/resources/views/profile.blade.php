@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h4>{{ $pageTitle }}</h4>
    <hr>
    @include('default', ['iconType' => 'person'])
</div>
@endsection
