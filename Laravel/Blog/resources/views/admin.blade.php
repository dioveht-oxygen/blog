@extends('layouts.style1')

@section('title', 'Admin')

@section('sidebar')
    @@parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('menu')
    <div>
        <form method="post" class="form-group" action="{{App::make('url')->to('xuly/addBooks')}}" >
            {{ csrf_field() }}
            <button type="submit" class="btn btn-info">Add</button>
        </form>
    </div>
    <script>

    </script>
@endsection
