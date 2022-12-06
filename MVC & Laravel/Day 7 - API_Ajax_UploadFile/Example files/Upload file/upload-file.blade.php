@extends('myTemplate')

@section('title', 'Upload a file')

@section('content')
    <h2>Upload a file</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li style="color:red">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="post" enctype="multipart/form-data">
        @csrf
        <input type="file" name="myFile"><br>
        <input type="submit" value="Upload a file">
    </form>
@endsection
