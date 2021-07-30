@extends('layouts.app')

@section('content') 

<div class="container"> 
    

    <h3>Tambah Daftar Category</h3> 
    <form action="{{ url('/category') }}" method="POST"> 
    @csrf
    <div class="form-group">
         <label for="">ID</label> 
         <input type="text" name="cat_id" class="form-control">
    </div>
    <div class="form-group">
         <label for="">NAME</label> 
         <input type="text" name="cat_name" class="form-control">
    </div> 
    <div class="form-group">
         <label for="">TEXT</label> 
         <input type="text" name="cat_text" class="form-control">
    </div> 
    <div class="form-group">
        <input type="submit" value="SIMPAN" class="btn btn-primary">
    </div>
</form> 
</div> 

@endsection