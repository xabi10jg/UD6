@extends('layouts.app')

@section('content')
<form action="{{route('posts.store')}}" method="post">
	
	@csrf
<div class="form-group" >
    <label>Title</label>
    <input type="text" name="title" class="form-control {{ $errors->has('title') ? 'is-invalid' : ''}}">
    {!! $errors->first('title','<span class="invalid-feedback ">:message</span>') !!}
</div>
<div class="form-group">
    <label>Description</label>
    <textarea name="excerpt" class="form-control {{ $errors->has('excerpt') ? 'is-invalid' : ''}}" ></textarea>
    {!! $errors->first('excerpt','<span class="invalid-feedback ">:message</span>') !!}
</div>
<div class="form-group">
    <label class="control-label" for="inputError">Body</label>
    <textarea rows="5" name="body" class="form-control {{ $errors->has('body') ? 'is-invalid' : ''}}"></textarea>
    {!! $errors->first('body','<span class="invalid-feedback ">:message</span>') !!}
</div>

<div class="form-group">
    <label>Image</label>
    <input type="file" name="img" class="form-control {{ $errors->has('img') ? ' is-invalid' : '' }}">
    {!! $errors->first('img','<span class="invalid-feedback "><strong>:message</strong></span>') !!}
</div>
	Introuduce una categoria del 1 al 6<input type="number" name="category"><br>

<button type="submit" class="btn btn-secondary">Enviar</button>
</form>
@endsection