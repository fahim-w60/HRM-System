@extends('backend.backend')

@section('title')
{{ $commons['page_title'] }}
@endsection

@section('content_header')
{{  $commons['content_title'] }}
@endsection
<style>
    .dataTables_info,
    .paginate_button.page-item,{
        display: none !important;
    }
    button.dt-button.dt-delete.btn.btn-danger {
    display: none !important;
}
</style>
@section('content')
<div class="layout-px-spacing">

    <div class="middle-content container-xxl p-0">
        <div class="row" id="cancel-row">
        
            <div class="col-xl-12 col-lg-12 col-sm-12 layout-top-spacing layout-spacing">
                <div class="row">

                
                <div class="col-md-4">
                    <div class="widget-content widget-content-area br-8">
                        <div class="card style-3">
                            <img src="{{  asset('src/assets/img/grid-blog-style-2.jpeg')}}" class="card-img-top" alt="...">
                            <div class="card-body px-0 py-0 align-self-center">
                                <p class="card-category mb-1">Photography</p>
                                <h5 class="card-title mb-3">Elegant and useful Admin Templates on Themeforest</h5>
                                <div class="media mt-4 mb-0 pt-1">
                                    <img src="{{  asset('src/assets/img/profile-2.jpeg')}}" class="card-media-image me-3" alt="">
                                    <div class="media-body">
                                        <h4 class="media-heading mb-1">Vanessa Kirby</h4>
                                        <p class="media-text">14 Mar</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="widget-content widget-content-area br-8">
                        <div class="card style-3">
                            <img src="{{  asset('src/assets/img/grid-blog-style-2.jpeg')}}" class="card-img-top" alt="...">
                            <div class="card-body px-0 py-0 align-self-center">
                                <p class="card-category mb-1">Photography</p>
                                <h5 class="card-title mb-3">Elegant and useful Admin Templates on Themeforest</h5>
                                <div class="media mt-4 mb-0 pt-1">
                                    <img src="{{  asset('src/assets/img/profile-2.jpeg')}}" class="card-media-image me-3" alt="">
                                    <div class="media-body">
                                        <h4 class="media-heading mb-1">Vanessa Kirby</h4>
                                        <p class="media-text">14 Mar</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="widget-content widget-content-area br-8">
                        <div class="card style-3">
                            <img src="{{  asset('src/assets/img/grid-blog-style-2.jpeg')}}" class="card-img-top" alt="...">
                            <div class="card-body px-0 py-0 align-self-center">
                                <p class="card-category mb-1">Photography</p>
                                <h5 class="card-title mb-3">Elegant and useful Admin Templates on Themeforest</h5>
                                <div class="media mt-4 mb-0 pt-1">
                                    <img src="{{  asset('src/assets/img/profile-2.jpeg')}}" class="card-media-image me-3" alt="">
                                    <div class="media-body">
                                        <h4 class="media-heading mb-1">Vanessa Kirby</h4>
                                        <p class="media-text">14 Mar</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection
