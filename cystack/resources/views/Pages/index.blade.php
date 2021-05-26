@extends('layouts.app')
@section('content')
    <h1>Upload Your File Here</h1>
    <div class="jumbotron text-center">
        {!! Form::open(['action' => 'FilesController@store', 'method' => 'POST' ,'enctype' => 'multipart/form-data' , 'accept charset' => 'UTF-8'])!!}
            <div class="form-group">
                {{Form::label('file', 'Upload a CSV formatted file:')}}
                {{Form::file('file_name')}}
            </div>
            {{Form::submit('Upload', ['class'=>'btn btn-primary'])}}
        {!! Form::close() !!}
        
    </div>
@endsection
{{-- <form class="form-inline">
    <div class="form-group">
        <label for="files">Upload a CSV formatted file:</label>
        <input type="file" id="files"  class="form-control" accept=".csv" required />
    </div>
    <div class="form-group">
        <button type="submit" id="submit-file" class="btn btn-primary">Upload File</button>
        </div>
</form> --}}
{{-- <label for="files">Upload a CSV formatted file:</label> 
                <input type="file" id="files"  class="form-control" accept=".csv" required /> --}}