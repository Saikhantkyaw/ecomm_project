@extends('layout.main')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
   
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            
<div class="card">
<div class="card-header">
<h3 class="card-title">Our Products</h3>
<a href="/product/create" class="btn btn-success" style="float:right;">Create</a>
</div>

<div class="card-body">
<table id="dish" class="table table-bordered table-striped">
<thead>
<tr>
<th>ID</th>
<th>Name</th>
<th>Brand</th>
<th>Category</th>
<th>Action</th>
</tr>
</thead>
@foreach($product as $product)
<tbody>
<tr>
<td>{{$product->id}}</td>
<td>{{$product->name}}</td>
<td>{{$product->brand->name}}</td>
<td>{{$product->category->name}}</td>
<td> 
 <div class="row">
 <a href="#"   class="btn btn-warning col-6 col-sm-6" >EDIT</a>
 <form action="" method="post" class="col-6 col-sm-6">
  @csrf
  @method('DELETE')
  <button class="btn btn-danger" type="submit" >Delete</button>
 </form>
 </div>
</td>
</tr>
@endforeach
</tfoot>
</table>
</div>

</div>

</div>

</div>

</div>




          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
   
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection