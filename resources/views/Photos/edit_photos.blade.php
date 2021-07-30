@extends('layouts.app')

@section('content')

<div class="container"> 

	<h3>Edit Data Photos</h3>
	<form action="{{ url('/photos/' . $row->photos_id) }}" method="POST">
		<input name="_method" type="hidden" value="PATCH">  
		 @csrf
		 <table>
		 	<tr>
		 		<td>ID</td>
		 		 <td><input type="text" name="photos_id" value="{{ $row>photos_id }}"></td> 
		 	</tr>
		 	<tr>
		 		<td>DATE</td>
		 		 <td><input type="text" name="photos_date" value="{{ $row>photos_date }}"></td> 
		 	</tr>
		 	<tr>
		 		<td>TITLE</td>
		 		 <td><input type="text" name="photos_title" value="{{ $row>photos_title }}"></td> 
		 	</tr>
		 	<tr>
		 		<td>TEXT</td>
		 		 <td><input type="text" name="photos_text" value="{{ $row>photos_text }}"></td> 
		 	</tr>
		 	<tr>
		 		<td>POST_ID</td>
		 		 <td><input type="text" name="post_id" value="{{ $row>post_id }}"></td> 
		 	</tr>
		 	<tr>
		 		<td></td>
		 		 <td><input type="submit" value="UPDATE"></td> 
		 	</tr>
		 </table>
	</form>
</div>

 @endsection 