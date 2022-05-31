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
                                <a href="{{ url('/admin/configurator/create') }}" class="btn addbtn ml-0">Setting</a>
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
                        <table class="table table-striped db-table">
                            <thead>
                                <tr>
                                    <th class="text-center">S.No.</th>
                                    <th>Section</th>
                                    <th>Selection of Attributes</th>
                                    <th class="text-center">Created At</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody id="searchDataTable">
                                @forelse($allConfig as $confKey => $confVal)
                                <tr>
                                    <td class="text-center">{{ $confKey+1 }}.</td>
                                    <td>{{ $confVal->section ?? '' }}</td>
                                    <td>
                                        @if(isset($allConfig) && $allConfig != [])
                                        @forelse($allAttributes as $attr)
                                            @forelse(explode(',', $confVal->attribute) as $confAttr)
                                                @if($attr->id == $confAttr)
                                                    {{ $attr->name ?? '' }} ({{ $attr->type ?? '' }})<br>
                                                @endif
                                            @empty

                                            @endforelse
                                        @empty

                                        @endforelse
                                        @else
                                            {{'NA'}}
                                        @endif
                                    </td>
                                    <td class="text-center">{{ $confVal->created_at->format('Y-m-d') }}</td>
                                    <td class="action-icon">
                                        <div class="icon">
                                            <a href="{{ url('/admin/configurator/' . $confVal->id . '/edit') }}" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>
                                        </div>
                                        <div class="icon">
                                            <form action="{{ route('configurator.destroy', $confVal->id ) }}" method="POST">
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
                                    <td colspan="5" class="text-center no-product">
                                        <div class="text-center mb-3">
                                            <img src="{{ asset('images/no-product1.png') }}" alt="icon">
                                            <h2 class="title-medium pb-0">No Configurator Found.</h2>
                                        </div>
                                    </td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('javascript')
<script type="text/javascript">
    /* ===== HIDE SUCCESS AND ERROR MESSAGE ===== */
    $( document ).ready(function() {
        setTimeout(function(){
            $('.alert-success').css('display', 'none')
            $('.alert-danger').css('display', 'none')
        }, 4000);
    });

    /* ===== DELETE POPUP ===== */
    $(document).on('click','.delete',function(){
        var data = $(this).closest('.icon').find('.deleteSubmit');
        swal({
            title: 'Are you sure you want to delete?',
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#0CC27E',
            cancelButtonColor: '#FF586B',
            confirmButtonText: 'Yes, Delete!',
            cancelButtonText: 'No, Cancel!',
            confirmButtonClass: 'btn-medium yes',
            cancelButtonClass: 'btn-medium no',
            buttonsStyling: true
        }).then(function () {
            data.trigger('click');
        });
    })
</script>
@endsection