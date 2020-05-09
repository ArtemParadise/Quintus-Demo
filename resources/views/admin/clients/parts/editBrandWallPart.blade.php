<p>Title</p>
<div class="form-group">
    <input type="text" class="form-control" name="title" required value="{{ $brand->title ?? "" }}">
</div>
<p>Image</p>

@if( isset($brand->img))
    <div class="image-slider d-flex justify-content-center" >
        <img src="{{ asset($brand->img) }}" style="background: coral" width="500" height="200" >
    </div>
@endif

<div class="form-group" style="margin-top: 10px">
    <input type="file" name="img" >
</div>
<div class="form-check">
    {{--Checkbox condition--}}

    @if( isset($brand) && $brand->active )
        <input class="form-check-input" type="checkbox" value="1" name="checkbox" id="defaultCheck1" checked>
    @else
        <input class="form-check-input" type="checkbox" value="1" name="checkbox" id="defaultCheck1">
    @endif

    <label class="form-check-label" for="defaultCheck1">
        Active
    </label>
</div>
<div class="input-group input-group-sm mb-3">
    <div class="input-group-prepend">
        <span class="input-group-text" id="inputGroup-sizing-sm">Priority</span>
    </div>
    <input type="text" class="form-control" name="priority" value="{{ $brand->priority ?? "" }}">
</div>
