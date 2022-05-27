@forelse($attribute['attributeDetails'] as $detail)
    <div class="row">
        <div class="col-md-3">
            <label for="">Title</label>
            <input type="text" class="form-control attribute-title" name="title_1" value="{{$detail['title'] ?? ''}}">
        </div>
        <div class="col-md-3">
            <label for="">Price</label>
            <input type="text" class="form-control attribute-title" name="price_1" value="{{$detail['price'] ?? ''}}">
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
            <a href="javascript:;" class="btn btn-primary add" data-toggle="tooltip" title="Add" data-id="1">
                <i class="fa fa-plus"></i>
            </a>
            <a href="javascript:;" class="btn btn-primary upload-btn" data-toggle="tooltip" title="Upload File">
                <i class="fa fa-upload"></i>
            </a>
            <input type="file" multiple="" name="file_1[]" data-max_length="20" class="upload__inputfile d-none">
        </div>
    </div>
@empty 
    <div class="row">
        <div class="col-md-3">
            <label for="">Title</label>
            <input type="text" class="form-control attribute-title" name="title_1">
        </div>
        <div class="col-md-3">
            <label for="">Price</label>
            <input type="text" class="form-control attribute-title" name="price_1">
        </div>
        <div class="col-md-4">
            <div class="uploaded-file-section upload__img-wrap">
                No File uploaded
            </div>
        </div>
        <div class="col-md-2 mt-4">
            <a href="javascript:;" class="btn btn-primary add" data-toggle="tooltip" title="Add" data-id="1">
                <i class="fa fa-plus"></i>
            </a>
            <a href="javascript:;" class="btn btn-primary upload-btn" data-toggle="tooltip" title="Upload File">
                <i class="fa fa-upload"></i>
            </a>
            <input type="file" multiple="" name="file_1[]" data-max_length="20" class="upload__inputfile d-none">
        </div>
    </div>
@endforelse