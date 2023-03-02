@extends('layouts.app')

@section('content')
<div class="container">
    Vista del post
    <hr>
    {{ $post->title . ' ' . $post->status }}
    <br>
    {{ $post->status }}
    <br>
    <a href="{{ url('post') }}">volver</a>

</div>
@endsection