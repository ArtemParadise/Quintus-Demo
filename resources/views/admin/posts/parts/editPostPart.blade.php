<p>Title</p>
<div class="form-group mb-4">
    <input type="text" class="form-control" name="title" required value="{{ $post->title ?? "" }}">
</div>

<select class="custom-select custom-select-sm mb-3 " name="category_id">
    <option selected value="{{$post->category_id ?? ""}}">{{ $post->category->title ?? "Choose category" }}</option>
    @foreach( $categories as $category )
    <option value="{{ $category->id }}">{{ $category->title }}</option>
    @endforeach
{{--    <option value="2">Two</option>--}}
{{--    <option value="3">Three</option>--}}
</select>

<p>Description</p>
<div class="input-group mb-4">
    <textarea class="form-control" aria-label="With textarea" name="descr" rows="3">{{ $post->descr ?? "" }}</textarea>
</div>

<p>Body</p>
<div class="input-group mb-4">
    <textarea class="form-control" aria-label="With textarea" name="body" rows="7">{{ $post->body ?? "" }}</textarea>
</div>

<p>Image</p>
@if( isset($post->img))
    <div class="image-slider d-flex justify-content-left" >
        <img src="{{ asset($post->img) }}" style="background: coral" width="500" height="200" >
    </div>
@endif

<div class="form-group" style="margin-top: 10px">
    <input type="file" name="img" >
</div>
<div class="form-check">
    {{--Checkbox condition--}}

    @if( isset($post) && $post->stick )
        <input class="form-check-input" type="checkbox" value="1" name="checkbox" id="defaultCheck1" checked>
    @else
        <input class="form-check-input" type="checkbox" value="1" name="checkbox" id="defaultCheck1">
    @endif

    <label class="form-check-label" for="defaultCheck1">
        Stick
    </label>
</div>
{{--<div class="input-group input-group-sm mb-3">--}}
{{--    <div class="input-group-prepend">--}}
{{--        <span class="input-group-text" id="inputGroup-sizing-sm">Priority</span>--}}
{{--    </div>--}}
{{--    <input type="text" class="form-control" name="priority" value="{{ $post->priority ?? "" }}">--}}
{{--</div>--}}
