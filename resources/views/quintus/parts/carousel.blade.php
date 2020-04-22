
<!-- Wrapper for slides -->
<div class="carousel-inner">

        @foreach($sliders as $slider)
        <div class="item {{ $loop->first ? 'active' : '' }}">
            <img src="{{ is_null($slider->img) ? asset('images/slider3_background.jpg') : asset($slider->img) }}" alt="" class="mt_about_images"/>
            <div class="carousel-caption flex">
                <div class="carousel-caption-inner align-center">
                    <h3>Los Angeles</h3>
                    <p>{{ $slider->title }}</p>
                    <button class="mt_button_first_section mt_fond_bold mt_transition_buttons">OUR SERVICES</button>
                </div>
            </div>
        </div>
        @endforeach


<!-- Left and right controls -->
<a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left light-paragraph"></span>
</a>
<a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right light-paragraph"></span>
</a>
