@extends('adminlte::layouts.app')

@section('htmlheader_title')

	@section('main-content')
		<h1>
        	{{ Auth::user()->name }}
        	<h2>Bienvenido</h2>
        	<h3>Resultados de Lab. Externos</h3>
    	</h1>
	@endsection
	
@endsection