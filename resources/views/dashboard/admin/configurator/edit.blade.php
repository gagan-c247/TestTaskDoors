@extends('dashboard.base')
@section('css')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<style>
    label.error {
        color: red;
    }
    .select2-container--default.select2-container--focus .select2-selection--multiple,
    .select2-container--default .select2-selection--multiple {
        border: solid #e6e6e6 1px !important;
    }
    .select2-container--default.select2-container.select2 {
        width: 100% !important;
    }
    label {
        font-weight: 600;
    }
</style>
@endsection
@section('content')
<div class="container-fluid">
    <div class="fade-in">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-6 col-7">
                                <h5 class="card-title mb-0">Configurator Setting</h5>
                            </div>
                            <div class="col-md-6 col-5">
                                <div class="text-right">
                                    <a href="{{url('/admin/configurator')}}" class="btn addbtn">Back</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" id="configurator-form" action="{{ route('configurator.update', [$config->id]) }}" autocomplete="off" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Section<span class="text-danger">*</span></label>
                                        <input type="text" name="section" value="{{ old('section') ?? $config->section }}" class="form-control">
                                        @error('section')
                                            <span class="text text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Attribute<span class="text-danger">*</span></label>
                                        <select name="attribute[]" class="form-control attribute" multiple="multiple">
                                            @forelse($allAttributes as $attr)
                                                <option value="{{$attr->id}}" 
                                                    @isset($config->attribute)
                                                    @foreach(explode(',', $config->attribute) as $confAttr)
                                                        {{ $attr->id == $confAttr ? 'selected' : ''}}
                                                    @endforeach
                                                    @endisset>{{$attr->name}}
                                                </option>
                                            @empty

                                            @endforelse
                                        </select>
                                        @error('attribute')
                                            <span class="text text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="form-group text-right">
                                <input type="submit" class="btn addbtn" value="Update">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('javascript')
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script>
    $(document).ready(function(){
        $('.attribute').select2({
            // allowClear: true,
            placeholder: 'Select',
        });
    });
</script>
@endsection