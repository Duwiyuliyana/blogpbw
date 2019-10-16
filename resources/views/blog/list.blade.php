@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="right">
      <a href="{{ url('admin/add_blog') }}" class="btn btn-primary"> Add New Blog
</div>

<div class="col=md-12">
  <div class="card-header">Blog</div>
  <div class="card-body">

    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Title</th>
          <th scope="col">Created</th>
          <th scope="col">image</th>
          <th scope="col"> colspan="2">Action</th>
        </tr>
      </thead>
      @if(!empty($DataBlog))
      @foreach($DataBlog as $key => $Blog)
      <tr>
        <td> {{ $key += 1 }} </td>
        <td> {{ $Blog->judul }} </td>
        <td>
          @if ($Blog->gambar !='')
          <img src="{{ url('images/'.$Blog->gambar) }}" alt="Gambar" width="100" />
          @else
          -
          @endif
        </td> <a href="{{ url('admin/edit_blog', $Blog->id) }}" class="btn btn-sucess"> Edit </a> </td>
        <td>
          <from action="{{ url ('admin/blog', $Blog->id) }}" method-"post">
            @csrf
            <input type="hidden" name="_method" value="Delete">
            <button type="submite" onclick="return confirm('Are you sure ?')" class="btn btn-danger"> Delete </button>
          </from>
        </td>
        <tr>
          @endforeach
          @else
          >tr></tr>
          @endif
        </tbody>
