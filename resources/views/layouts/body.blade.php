@extends('layouts.master')

@section('content')
    @if(App::isLocale('en'))
        {!! $body->page->content_en !!}
    @elseif(App::isLocale('id'))
        {!! $body->page->content_id !!}
    @elseif(App::isLocale('cn'))
        {!! $body->page->content_cn !!}
    @endif
@endsection
