@extends('backend.layouts.reader.master')
@section('title','Home page')
    @section('content')

    <table cellpadding="10px">
        @foreach ($articles as $articles)
        <tr>
            <td>
                <h4><u>{{ $articles->heading }}</u></h4>
                <p>{!! substr($articles->content,0,200) !!}</p>
                <a href="{{ route('article.show',$articles->id) }}">[Read More....]</a>
            </td>
        </tr>
        @endforeach
    </table>

    @endsection