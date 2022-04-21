@extends('layout')

@section('content')

@foreach($data as $d)
<div class="content">
  <h1><a href="/show/{{$d->id}}">{{$d->title}}</a></h1>
  <hr>
  <p>{!! nl2br($d->main) !!}</p>

  @if(file_exists(public_path().'/storage/post_img/'. $d->id .'.jpg'))
  <img src="/storage/post_img/{{ $d->id }}.jpg">
  @elseif(file_exists(public_path().'/storage/post_img/'. $d->id .'.jpeg'))
  <img src="/storage/post_img/{{ $d->id }}.jpeg">
  @elseif(file_exists(public_path().'/storage/post_img/'. $d->id .'.png'))
  <img src="/storage/post_img/{{ $d->id }}.png">
  @elseif(file_exists(public_path().'/storage/post_img/'. $d->id .'.gif'))
  <img src="/storage/post_img/{{ $d->id }}.gif">
  @endif

</div>

@endforeach

@endsection
