@extends('layouts.app')

@section('content')

<div class="container"> 

	<h3>Edit Data Post</h3>
	<form action="{{ url('/post/' . $row->post_id) }}" method="POST">
		<input name="_method" type="hidden" value="PATCH">  
		 @csrf
		 <table>
		 	<tr>
		 		<td>ID</td>
		 		 <td><input type="text" name="post_id" value="{{ $row>post_id }}"></td> 
		 	</tr>
		 	<tr>
		 		<td>DATE</td>
		 		 <td><input type="text" name="post_date" value="{{ $row>post_date }}"></td> 
		 	</tr>
		 	<tr>
		 		<td>SLUG</td>
		 		 <td><input type="text" name="post_slug" value="{{ $row>post_slug }}"></td> 
		 	</tr>
		 	<tr>
		 		<td>TITLE</td>
		 		 <td><input type="text" name="post_title" value="{{ $row>post_title }}"></td> 
		 	</tr>
		 	<tr>
		 		<td>TEXT</td>
		 		 <td><input type="text" name="post_text" value="{{ $row>post_text }}"></td> 
		 	</tr>
		 	<tr>
		 		<td>CAT_ID</td>
		 		 <td><input type="text" name="cat_id" value="{{ $row>cat_id }}"></td> 
		 	</tr>
		 	<tr>
		 		<td></td>
		 		 <td><input type="submit" value="UPDATE"></td> 
		 	</tr>
		 </table>
	</form>
</div>

 @endsection 