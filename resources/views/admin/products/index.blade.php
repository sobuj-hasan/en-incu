@extends('admin.layouts.app')
@section('title','Product List')
@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title float-left">All Products</h4>
                    <ol class="breadcrumb float-right">
                        <li class="breadcrumb-item"><a href="">Admin</a></li>
                        <li class="breadcrumb-item"><a href="">products List</a></li>
                    </ol>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-md-12">
                <div class="card-box">
                    <h4 class="m-t-0 header-title pb-3"><b>All Product List</b></h4>
                    <div class="table-responsive">
                        <table class="table table-hover m-0 table-actions-bar">
                            <thead>
                            <tr>
                                <th>SI NO.</th>
                                <th>Image </th>
                                <th>Name </th>
                                <th>Category</th>
                                <th>Product Price</th>
                                <th>Sell/Offer Price</th>
                                <th>Stock Amount </th>
                                <th>Action </th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $product)
                                    <tr>
                                        <td>
                                            <h5>{{ $loop->index + 1 }}</h5>
                                        </td>
                                        <td>
                                            <img width="60px" src="{{ $product->urlOf('image') }}" alt="img" title="contact-img"/>
                                        </td>
                                        <td>
                                            <h5><a href="{{ route('products.show', $product->id) }}">{{ $product->name }}</a></h5>
                                        </td>
                                        <td>
                                            <h5>{{ $product->category->name }}</h5>
                                        </td>
                                        <td>
                                            <h5>{{ $product->price }} SAR</h5>
                                        </td>
                                        <td>
                                            <h5>{{ $product->sell_price }} SAR</h5>
                                        </td>
                                        <td>
                                            <h5>{{ $product->stock }} Piece</h5>
                                        </td>
                                        <form method="POST" action="{{ route('products.destroy', $product->id) }}">
                                            @csrf
                                            @method('DELETE')
                                            <td>
                                                <a href="{{ route('products.edit', $product->id) }}" class="table-action-btn"><i class="fa-solid fa-pen-to-square"></i></a>
                                                <button onclick="productDelete()" style="border: none; background:none; cursor:pointer;" type="submit" name="submit" class="table-action-btn"><i class="mdi mdi-close"></i></button>
                                            </td>
                                        </form>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer_script')
    <script>
        function productDelete(){
            alert('Are you shure ? You want to delete this Product')
        }
    </script>
@endsection
