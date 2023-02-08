@extends('layout.main')
@section('content')
<h3> Creating Dishes</h3>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            
                    
                <form method="post" action="/product" enctype="multipart/form-data">
                    @csrf
                  <div class="form-group" >

                    <label for="name">Name</label>
                    <input type="text" class="form-control"  placeholder="Product name" name="name" value="{{old('name')}}">
                  </div>
                  
                 <br>
                 <div class="form-group">
                   <label for="brand">Brand</label>
                   <select name="brand" class="form-control" >
                       <option>Select Brand of product</option>
                        @foreach($brand as $brand)
                         <option value="{{$brand->id}}">{{$brand->name}}</option>
                         @endforeach
                   </select>
                 </div><br>
                 <div class="form-group">
                   <label for="category">Category</label>
                   <select name="category" class="form-control" >
                       <option>Select product category</option>
                        @foreach($cat as $cat)
                         <option value="{{$cat->id}}">{{$cat->name}}</option>
                         @endforeach
                   </select>
                 </div>
                  <br>
                   <div class="form-group" >

                    <label for="productimage">product photo</label>
                    <input type="file" class="form-control"  name="image" value="{{old('image')}}">
                  </div>
                  <br>
                  <button type="submit" class="btn btn-warning">Submit</button>
                  <a href="/product" class="btn btn-success">back</a>
                </form>

            </div>

            </div>




          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
   
   

@endsection

