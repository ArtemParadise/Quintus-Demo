@extends('layouts.quintus-layout')

@section('content')
<!-- STARTING PRIMARY / PAGE CONTENT -->
<div id="primary" class="high-padding content-area no-sidebar">
    <div class="container">
        <div class="row">
            <main id="main" class="col-md-12 site-main main-content">
                <article class="page type-page ">
                    <div class="entry-content">
                        <div data-vc-full-width="true" data-vc-full-width-init="true" data-vc-stretch-content="true" class="row mt_position_style_404">
                            <div class="container col-sm-12">
                                <div class="column-inner">
                                    <h1 class="custom_heading mt_404_first_h1">SORRY, THIS PAGE DOES NOT EXIST</h1>
                                    <h1 class="custom_heading animated mt_404_message">404</h1>
                                    <h3 class="custom_heading mt_404_first_h3">We are extremely sorry for inconvenience<br>
                                        But, hope fully we will be back much faster that you think</h3>
                                    <div class="btn3-container btn3-center mt_padding_top_75">
                                        <a href="{{ route('mainPage') }}" class="mt-btn-custom mt_404_button mt_transition_buttons" role="button">RETURN TO HOMEPAGE</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            </main>
        </div>
    </div>
</div>
@endsection
