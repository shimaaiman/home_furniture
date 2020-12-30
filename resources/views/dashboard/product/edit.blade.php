@extends('dashboard.layout.master')
@section('title')
    Edit product
@endsection
@section('content')
<section class="content">
<form method="POST" action="{{route('dashboard.product.update',$product)}}">
   @method('PUT')
   @csrf
    
      <div class="row">
        <div class="col-md-12">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">General</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
              </div>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="inputName">Product Name</label>
                <input type="text" name="name" id="inputName" value="{{$product->name}}" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputDescription">Product Description</label>
                <textarea id="inputDescription" name="body" class="form-control" rows="4">
                {{$product->name}}
                </textarea>
              </div>
              <div class="form-group">
                                <label for="inputStatus">Category</label>
                                <select class="form-control custom-select" name="category_id">
                                    <option selected disabled>Select one</option>
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}"
                                            {{$product->category_id == $category->id ? 'selected' : ''}}
                                        >{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                  <div class="form-group">
                <label for="inputName">Price</label>
                <input type="text" name="price" id="inputName" value="{{$product->price}}"class="form-control">
              </div>
              
              
              
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        
      <div class="row">
        <div class="col-12">
          <a href="#" class="btn btn-secondary">Cancel</a>
          <input type="submit" value="Update Porduct" class="btn btn-success float-right">
        </div>
      </div>
    </form>
    </section>
@endsection
