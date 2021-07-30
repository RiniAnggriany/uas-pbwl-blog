@extends('layouts.app')

@section('content')

<div class="container"> 

	<h3>Edit Daftar Album</h3>
	<form action="{{ url('/album/' . $row->album_id) }}" method="POST">
		<input name="_method" type="hidden" value="PATCH">  
		 @csrf
		 <table>
		 	<tr>
		 		<td>ID</td>
		 		 <td><input type="text" name="album_id" value="{{ $row>album_id }}"></td> 
		 	</tr>
		 	<tr>
		 		<td>NAME</td>
		 		 <td><input type="text" name="album_name" value="{{ $row>album_name }}"></td> 
		 	</tr>
		 	<tr>
		 		<td>TEXT</td>
		 		 <td><input type="text" name="album_text" value="{{ $row>album_text }}"></td> 
		 	</tr>
		 	<tr>
		 		<td>PHOTO_ID</td>
		 		 <td><input type="text" name="photo_id" value="{{ $row>photo_id }}"></td> 
		 	</tr>
		 	<tr>
		 		<td></td>
		 		 <td><input type="submit" value="UPDATE"></td> 
		 	</tr>
		 </table>
	</form>
</div>

 @endsection 