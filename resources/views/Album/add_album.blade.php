@extends('layouts.app')

@section('content') 

<div class="container"> 
    

    <h3>Tambah Data Album</h3> 
    <form action="{{ url('/album') }}" method="POST"> 
    @csrf
    <div class="form-group">
         <label for="">ID</label> 
         <input type="text" name="album_id" class="form-control">
    </div>
    <div class="form-group">
         <label for="">NAME</label> 
         <input type="text" name="album_name" class="form-control">
    </div> 
    <div class="form-group">
         <label for="">TEXT</label> 
         <input type="text" name="album_text" class="form-control">
    </div> 
    <div class="form-group">
         <label for="">PHOTO_ID</label> 
         <input type="text" name="photos_id" class="form-control">
    </div> 
    <div class="form-group">
        <input type="submit" value="SIMPAN" class="btn btn-primary">
    </div>
</form> 
</div> 

@endsection