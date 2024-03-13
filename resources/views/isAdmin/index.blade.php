@extends('layouts.base')

@section('title')
    {{ config('app.name') }}
@endsection

@section('styles')
    {{-- <style></style> --}}
@endsection

@section('h3')
    {{ config('app.name') }}
@endsection

@section('content')
<div class="container">
    <div class="card">
        <h2 class="text-center">
            If You Are Seeing This, You Are a User With an Administrator Role.
        </h2>
    </div>
</div>
@endsection

@section('scripts')
    {{-- <script></script> --}}
@endsection
