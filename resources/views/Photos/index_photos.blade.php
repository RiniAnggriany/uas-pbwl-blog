@extends('layouts.app')

@section('content')

    <div class="container"> 
        <h3>Daftar Photos
        <a href="{{ url('/photos/create') }}" class="btn btn-primary btn-sm float-right">Tambah Data</a>

        </h3> 


          <table class="table table-bordered"> 
                <tr> 
                     <th>ID</th> 
                     <th>DATE</th>
                     <th>TITLE</th> 
                     <th>TEXT</th> 
                     <th>POST_ID</th> 
                     <th>EDIT</th>
                     <th>DELETE</th>
                </tr> 
             @foreach($rows as $row) 
                 <tr> 
                      <td>{{ $row->photos_id}}</td> 
                      <td>{{ $row->photos_date }}</td> 
                      <td>{{ $row->photos_title }}</td> 
                      <td>{{ $row->photos_text }}</td> 
                      <td>{{ $row->post_id }}</td> 
                      <td><a href="{{ url('photos/' . $row>photos_id . '/edit') }}">Edit</a></td> 
                      <td>
                          <form action="{{ url('/photos/' . $row->photos_id) }}" method="POST"> 
                         <input name="_method" type="hidden" value="DELETE"> 
                          @csrf 
                          <button>Hapus</button> 
                        </form>
                       </td>  
                 </tr> 
             @endforeach 
            </table>
    </div>

@endsection