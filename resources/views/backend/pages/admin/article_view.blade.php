@extends('backend.layouts.reader.master')
@section('title','Home page')
    @section('content')

    <h1><u>{{ $article->heading }}</u></h1><br>
    <p>{!! $article->content !!}</p>

    @endsection