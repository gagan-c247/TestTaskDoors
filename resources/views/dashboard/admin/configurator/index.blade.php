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
                                </tr>
                            </thead>
                            <tbody id="searchDataTable">
                                <tr>
                                    <td class="text-center">1</td>
                                    <td>Base Option</td>
                                    <td>
                                        @if(isset($allConfig) && $allConfig != [])
                                        @forelse($allAttributes as $attr)
                                            @forelse(explode(',', $allConfig->base_option) as $conf_base)
                                                @if($attr->id == $conf_base)
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
                                </tr>
                                <tr>
                                    <td class="text-center">2</td>
                                    <td>Door</td>
                                    <td>
                                        @if(isset($allConfig) && $allConfig != [])
                                        @forelse($allAttributes as $attr)
                                            @forelse(explode(',', $allConfig->door) as $conf_door)
                                                @if($attr->id == $conf_door)
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
                                </tr>
                                <tr>
                                    <td class="text-center">3</td>
                                    <td>Face</td>
                                    <td>
                                        @if(isset($allConfig) && $allConfig != [])
                                        @forelse($allAttributes as $attr)
                                            @forelse(explode(',', $allConfig->face) as $conf_face)
                                                @if($attr->id == $conf_face)
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
                                </tr>
                                <tr>
                                    <td class="text-center">4</td>
                                    <td>Hardware's</td>
                                    <td>
                                        @if(isset($allConfig) && $allConfig != [])
                                        @forelse($allAttributes as $attr)
                                            @forelse(explode(',', $allConfig->hardware) as $conf_hardware)
                                                @if($attr->id == $conf_hardware)
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
                                </tr>
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
    /* === HIDE SUCCESS AND ERROR MESSAGE === */
    $( document ).ready(function() {
        setTimeout(function(){
            $('.alert-success').css('display', 'none')
            $('.alert-danger').css('display', 'none')
        }, 4000);
    });
</script>
@endsection