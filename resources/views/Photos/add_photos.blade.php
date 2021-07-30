@extends('layouts.app')

@section('content') 

<div class="container"> 
    

    <h3>Tambah Data Photos</h3> 
    <form action="{{ url('/photos') }}" method="POST"> 
    @csrf
    <div class="form-group">
         <label for="">ID</label> 
         <input type="text" name="photos_id" class="form-control">
    </div>
    <div class="form-group">
         <label for="">DATE</label> 
         <input type="text" name="photos_date" class="form-control">
    </div> 
    <div class="form-group">
         <label for="">TITLE</label> 
         <input type="text" name="photos_title" class="form-control">
    </div>
    <div class="form-group">
         <label for="">TEXT</label> 
         <input type="text" name="photos_text" class="form-control">
    </div><div class="form-group">
         <label for="">POST_ID</label> 
         <input type="text" name="post_id" class="form-control">
    </div>
    <div class="form-group">
        <input type="submit" value="SIMPAN" class="btn btn-primary">
    </div>
</form> 
</div> 

@endsection