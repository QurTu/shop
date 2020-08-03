@extends('admin.layout')

@section('content')
<div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
  Prideti nauja kategorija
</button>
      </nav>

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Name</th>
      <th scope="col">actions</th>
     
    </tr>
  </thead>
  <tbody>
  <form action="{{route('category.update', [$kategory])}}" method="post">
    <tr>
      <th scope="row"> <input type="text" name="name" value='{{$kategory->name}}'></th>
      <td>
      @csrf
      <button type="submit">Change name</button>
      
      </td>
    </tr>
    </form>
   
    
  </tbody>
</table>
</div>
</div>
@endsection