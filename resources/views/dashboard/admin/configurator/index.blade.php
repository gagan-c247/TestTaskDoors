@extends('dashboard.base')
@section('content')
<style type="text/css">
    button.disabled {
        pointer-events: none;
        color: #ccc;
    }
</style>
<div class="container-fluid">
    <div class="animated fadeIn">
        @include('flash') {{--session message--}}
        <div class="col-md-12 success"></div>
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-8 col-5">
                                <h5 class="title">{{ __('Configurator') }}</h5>
                            </div>
                            <div class="col-md-4 col-7 text-right">
                                <a href="{{ url('/admin/configurator/create') }}" class="btn addbtn ml-0"><span class="mr-1"><i class="fa fa-plus-circle" aria-hidden="true"></i></span> Add</a>
                            </div>
                        </div>
                        {{--<form method="GET" action="{{auth()->guard('admin')->check() && Request::segment(1) == 'admin' ? url('/admin/configurator') : url('/configurator') }}">
                            <div class="row search-filter">
                                <div class="col-md-1">

                                </div>
                                <div class="col-md-4 text-center">
                                    <div class="search-via">
                                        <input type="text" name="title" value="{{ app('request')->input('title') }}" class="form-control" placeholder="Search via Title" autocomplete="off">
                                    </div>
                                </div>
                                <div class="col-md-4 text-center">
                                    <div class="search-via">
                                        <input type="text" name="sku" value="{{app('request')->input('sku')}}" class="form-control" placeholder="Search via SKU" autocomplete="off">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="search-via">
                                        <button type="submit" class="btn btn-secondary" data-toggle="tooltip" title="Search"><i class="fa fa-search"></i></button>
                                    
                                        <a href="{{auth()->guard('admin')->check() && Request::segment(1) == 'admin' ? url('/admin/product') : url('/product')}}" class="btn btn-secondary ml-3" data-toggle="tooltip" title="Reset"><i class="fa fa-refresh"></i></a>
                                    </div>
                                </div>
                            </div>
                        </form>--}}
                    </div>
                    <div class="card-body table-responsive">
                        <table class="table table-striped db-table text-center">
                            <thead>
                                <tr>
                                    <th class="text-center">S.No.</th>
                                    <th>Title</th>
                                    <th>SKU</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th class="text-center">Status</th>
                                    <th class="text-center">Created At</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody id="searchDataTable">
                                {{--@forelse($allProduct as $key => $product)
                                <tr>
                                    <td class="text-center">{{ $key+1 ?? '' }}</td>
                                    <td>{{ $product->title ?? '' }}</td>
                                    <td>{{ $product->sku ?? '' }}</td>
                                    <td><b>$</b>{{ number_format($product->price ?? '') }}.00</td>
                                    <td>
                                        {{ $product->quantity ?? '' }}
                                        @if($product->unit == 1)
                                            {{' KG'}}
                                        @else
                                            {{' Pounds'}}
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        @if($product->status == '0')
                                            <a href="javascript:;" class="status" data-id="{{$product->id}}" data-name="unpublish"><span class="badge badge-pill badge-danger btn-status">Deactive</span></a>
                                        @else
                                            <a href="javascript:;" class="status" data-id="{{$product->id}}" data-name="publish"><span class="badge badge-pill badge-success btn-status">Active</span></a>
                                        @endif
                                    </td>
                                    <td class="text-center">{{ $product->created_at->toDateString() ?? '' }}</td>
                                    <td class="action-icon">
                                        <div class="icon">
                                            <a href="{{ url('/admin/product/' . $product->id . '/edit') }}" class="" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>
                                        </div>
                                        <div class="icon">
                                            <form action="{{ route('product.destroy', $product->id ) }}" method="POST">
                                                @method('DELETE')
                                                @csrf
                                                <a href="javascript:;" class="delete" data-toggle="tooltip" title="Delete"><i class="fa fa-trash"></i></a>
                                                <button type="submit" class="deleteSubmit d-none"><i class="fa fa-trash"></i></button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="13" class="text-center no-product">
                                        <div class="text-center mb-3">
                                            <img src="{{ asset('images/no-product1.png') }}" alt="icon">
                                            @if(auth()->guard('admin')->check() && Request::segment(1) == 'admin')
                                                <h2 class="title-medium pb-0">No Product Found.</h2>
                                            @endif
                                        </div>
                                    </td>
                                </tr>
                                @endforelse--}}
                            </tbody>
                        </table>
                        {{--@if($allProduct != [])
                            {!! $allProduct->appends(request()->query())->links() !!}
                        @endif--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('javascript')
<script type="text/javascript">
    /* === HIDE SUCCESS AND ERROR MESSAGE === */
    $( document ).ready(function() {
        setTimeout(function(){
            $('.alert-success').css('display', 'none')
            $('.alert-danger').css('display', 'none')
        }, 4000);
    });
</script>
@endsection