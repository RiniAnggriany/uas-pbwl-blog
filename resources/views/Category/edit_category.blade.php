@extends('layouts.app')

@section('content')

<div class="container"> 

	<h3>Edit Daftar Category</h3>
	<form action="{{ url('/category/' . $row->cat_id) }}" method="POST">
		<input name="_method" type="hidden" value="PATCH">  
		 @csrf
		 <table>
		 	<tr>
		 		<td>ID</td>
		 		 <td><input type="text" name="cat_id" value="{{ $row>cat_id }}"></td> 
		 	</tr>
		 	<tr>
		 		<td>NAME</td>
		 		 <td><input type="text" name="cat_name" value="{{ $row>cat_name }}"></td> 
		 	</tr>
		 	<tr>
		 		<td>TEXT</td>
		 		 <td><input type="text" name="cat_text" value="{{ $row>cat_text }}"></td> 
		 	</tr>
		 	<tr>
		 		<td></td>
		 		 <td><input type="submit" value="UPDATE"></td> 
		 	</tr>
		 </table>
	</form>
</div>

 @endsection 