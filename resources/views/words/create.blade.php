@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Add New Word</div>

                <div class="panel-body">
                    @if ($errors->count() > 0)
                    <ul>
                        @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    @endif
                    <form action="{{ route('words.store') }}" method="post">
                        {{ csrf_field() }}
                        Word:
                        <br />
                        <input type="text" name="word" value="{{ old('word') }}" />
                        <br /><br />
                        Meaning:
                        <br />
                        <textarea name="meaning" cols="80" rows="6">{{ old('meaning') }}</textarea>
                        <br /><br />
                        <input type="submit" value="Submit" class="btn btn-default" />
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection