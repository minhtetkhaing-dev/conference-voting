@extends('layout.app')

@section('content')

<form action="{{ route('answer.store') }}">
    <input name="answer" type="text" style="border:1px solid black">
   <input type="submit" >
</form>
@endsection