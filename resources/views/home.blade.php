@extends('layouts.app')

@section('title-block')Это главная страница@endsection

@section('content')
<h1>Главная</h1>
<p class="alert alert-info">Это главная страница.</p>
@endsection

@section('aside')
	@parent
	<p class="alert alert-info">Это текст будет отображаться только на этой странице</p>
@endsection