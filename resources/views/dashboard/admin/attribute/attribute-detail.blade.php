@forelse($attribute['attributeDetails'] as $key => $detail)
    <div class="row">
        <div class="col-md-3">
            <label for="">Title</label>
            <input type="text" class="form-control attribute-title" name="title_{{$key+1}}" value="{{$detail['title'] ?? ''}}">
            <input type="hidden" name="id_{{$key+1}}" value="{{$detail['id'] ?? ''}}">
            <span class="attribute-title-error text-danger"></span>
        </div>
        <div class="col-md-3">
            <label for="">Price</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">$</span>
                </div>
                <input type="text" class="form-control attribute-price" name="price_{{$key+1}}" value="{{$detail['price'] ?? ''}}">
            </div>
            <span class="attribute-title-error text-danger"></span>
        </div>
        <div class="col-md-4">
            <div class="upload__img-wrap">
                @foreach(json_decode($detail['filename']) as $img)
                <div class='upload__img-box'>
                    <div style='background-image: url("/frontend/attr-img/{{$img}}")'  class='img-bg'>
                        <div class='upload__img-close'></div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="col-md-2 mt-4">
            @if($loop->first)
                <a href="javascript:;" class="btn btn-primary add" data-toggle="tooltip" title="Add" data-id="{{count($attribute['attributeDetails']) ?? '1'}}">
                    <i class="fa fa-plus"></i>
                </a>
            @else
                <a href="javascript:;" class="btn btn-danger remove-row" data-toggle="tooltip" title="Remove" data-id="{{$detail['id']}}">    
                    <i class="fa fa-minus"></i>
                </a>
            @endif
            <a href="javascript:;" class="btn btn-primary upload-btn" data-toggle="tooltip" title="Upload File">
                <i class="fa fa-upload"></i>
            </a>
            <input type="file" multiple="" name="file_{{$key+1}}[]" data-max_length="20" class="upload__inputfile d-none">
        </div>
    </div>
@empty 
    <div class="row">
        <div class="col-md-3">
            <label for="">Title</label>
            <input type="text" class="form-control attribute-title" name="titleNew_1">
            <span class="attribute-title-error text-danger"></span>
        </div>
        <div class="col-md-3">
            <label for="">Price</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">$</span>
                    </div>
                <input type="text" class="form-control attribute-price" name="priceNew_1">
            </div>
            <span class="attribute-price-error text-danger"></span>
        </div>
        <div class="col-md-4">
            <div class="uploaded-file-section upload__img-wrap">
                No File uploaded
            </div>
            <span class="attribute-image-error text-danger"></span>
        </div>
        <div class="col-md-2 mt-4">
            <a href="javascript:;" class="btn btn-primary add" data-toggle="tooltip" title="Add" data-id="1">
                <i class="fa fa-plus"></i>
            </a>
            <a href="javascript:;" class="btn btn-primary upload-btn" data-toggle="tooltip" title="Upload File">
                <i class="fa fa-upload"></i>
            </a>
            <input type="file" multiple="" name="fileNew_1[]" data-max_length="20" class="upload__inputfile attribute-image d-none">
        </div>
    </div>
@endforelse