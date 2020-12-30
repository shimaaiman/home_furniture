@extends('dashboard.layout.master')
@section('title')
    list product
@endsection
@section('content')
         <!-- Main content -->
    <section class="content">

    <!-- Default box -->
    @include('dashboard.layout.messages')
    <div class="card">
  <div class="card-header">
    <h3 class="card-title">product</h3>

    <div class="card-tools">
      <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
        <i class="fas fa-minus"></i></button>
      <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
        <i class="fas fa-times"></i></button>
    </div>
  </div>
  <div class="card-body p-0">
    <table class="table table-striped projects">
        <thead>
            <tr>
                <th style="width: 1%">
                    #
                </th>
                <th style="width: 20%">
                    Product Name
                </th>
                <th style="width: 30%">
                    Product Image
                </th>
                <th>
                    Price
                </th>
                <th style="width: 8%" class="text-center">
                    Owner 
                </th>
                <th style="width: 20%">
                </th>
            </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
        
            <tr>
                <td>
                {{$loop->iteration}}
                </td>
                <td>
                    <a>
                    {{$product->name}} 
                    </a>
                    <br/>
                    <small>
                    Created {{$product->created_at}}
                    </small>
                </td>
                <td>
                    <ul class="list-inline">
                        <li class="list-inline-item">
                            <img alt="Avatar" class="table-avatar" src="{{asset('product_images/'.$product->feature_image)}}">
                        </li>
                       
                    </ul>
                </td>
                <td class="project_progress">
                {{$product->price}}
            </td>
                <td class="project-state">
                    {{$product->category->name}}
                </td>
                
                <td class="project-actions text-right">
                <form action="{{route('dashboard.product.destroy',$product)}}" method="POST">
                    <a class="btn btn-primary btn-sm" href="{{route('dashboard.product.show',$product)}}">
                        <i class="fas fa-folder">
                        </i>
                             View
                         </a>
                        <a class="btn btn-info btn-sm" href="{{route('dashboard.product.edit',$product)}}">
                        <i class="fas fa-pencil-alt">
                        </i>
                          Edit
                    </a>
                    @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                   
                </form>
                </td>
            </tr>
           
            @endforeach 
        </tbody>
    </table>
  </div>
  <!-- /.card-body -->
    </div>
    <!-- /.card -->
    {{$products->links()}}
    </section>
    <!-- /.content -->
@endsection