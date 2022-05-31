
@if($option['type'] == 'input')
    <input type="text" name="{{$option['name']}}" class="form-control">
@elseif($option['type'] == 'radio')
  <div class="row">
      <div class="col-md-6">
        @foreach($option['attributeDetails'] as $radio)
            <label for="{{$radio['title']}}">
                <input type="radio" name="{{$option['name']}}" id="{{$radio['title']}}" value="{{$radio['price']}}" class="radio-click" {{$loop->first ? "checked" : '' }} data-value="{{$radio['title']}}">
                <span class="ml-2">{{$radio['title']}} </span>
            </label>
        @endforeach
      </div>
      <div class="col-md-6 img-container">
        @foreach($option['attributeDetails'] as $radio)
            <div class="img" style="{{$loop->first ? '' : 'display:none'}}">
                @foreach(json_decode($radio['filename']) as $file)
                    <img src="{{url('frontend/attr-img/'.$file)}}" class="img-product {{$radio['title']}}">
                @endforeach
            </div>
        @endforeach
      </div>
  </div>
@elseif($option['type'] == 'checkbox')
    @foreach($option['attributeDetails'] as $checkbox)
        <input type="checkbox" name="{{$option['name']}}" class="form-control" value="{{$checkbox['price']}}">{{$checkbox['title']}} 
    @endforeach
@elseif($option['type'] == 'dropdown')
    <div class="row">
        <div class="col-md-6">
            <select type="checkbox" name="{{$option['name']}}" class="form-control select-change"> 
                @foreach($option['attributeDetails'] as $selectBox)
                    <option value="{{$selectBox['price']}}" data-value="{{$selectBox['title']}}">{{$selectBox['title']}}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-6 img-container">
            @foreach($option['attributeDetails'] as $selectBox)
                <div class="img" style="{{$loop->first ? '' : 'display:none'}}">
                    @foreach(json_decode($selectBox['filename']) as $file)
                        <img src="{{url('frontend/attr-img/'.$file)}}" class="img-product {{$selectBox['title']}}">
                    @endforeach
                </div>
            @endforeach
        </div>
    </div>
@endif