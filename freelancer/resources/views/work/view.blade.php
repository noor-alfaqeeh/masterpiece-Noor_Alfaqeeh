@extends('layout')

@section('content')

            <section id="portfolio" class="clearfix">
                <div class="container start">

                    <header class="section-header">
                        <h3 class="section-title">{{ $projects -> name }}</h3>
                        <p>{{ $projects -> description }}</p>
                    </header>


                    <div class="row portfolio-container">

                        <div class="col-lg-4 col-md-6 portfolio-item filter-image">
                            <div class="portfolio-wrap">
                                <img src="{{ URL::to('/') }}/images/project/{{ $projects->img1}}" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4><a href="#">Shot 1</a></h4>
                                    <p>image</p>
                                    <div>
                                        <a href="{{ URL::to('/') }}/images/project/{{ $projects->img1}}" data-lightbox="portfolio" data-title="web 1" class="link-preview" title="Preview"><i class="far fa-eye"></i></a>
                                        <a href="#" class="link-details" title="More Details"><i class="fas fa-external-link-square-alt"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 portfolio-item filter-image" data-wow-delay="0.1s">
                            <div class="portfolio-wrap">
                                <img src="{{ URL::to('/') }}/images/project/{{ $projects->img2}}" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4><a href="#">Shot 2</a></h4>
                                    <p>image</p>
                                    <div>
                                        <a href="{{ URL::to('/') }}/images/project/{{ $projects->img2}}" class="link-preview" data-lightbox="portfolio" data-title="Shot 2" title="Preview"><i class="far fa-eye"></i></a>
                                        <a href="#" class="link-details" title="More Details"><i class="fas fa-external-link-square-alt"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 portfolio-item filter-image" data-wow-delay="0.2s">
                            <div class="portfolio-wrap">
                                <img src="{{ URL::to('/') }}/images/project/{{ $projects->img3}}" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4><a href="#">Shot 3</a></h4>
                                    <p>image</p>
                                    <div>
                                        <a href="{{ URL::to('/') }}/images/project/{{ $projects->img3}}" class="link-preview" data-lightbox="portfolio" data-title="Shot 3" title="Preview"><i class="far fa-eye"></i></a>
                                        <a href="#" class="link-details" title="More Details"><i class="fas fa-external-link-square-alt"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 portfolio-item filter-plan">
                            <div class="portfolio-wrap">
                                <img src="{{ URL::to('/') }}/images/project/{{ $projects->img4}}" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4><a href="#">Shot 4</a></h4>
                                    <p>plan</p>
                                    <div>
                                        <a href="{{ URL::to('/') }}/images/project/{{ $projects->img4}}" class="link-preview" data-lightbox="portfolio" data-title="Shot 4" title="Preview"><i class="far fa-eye"></i></a>
                                        <a href="#" class="link-details" title="More Details"><i class="fas fa-external-link-square-alt"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 portfolio-item filter-plan" data-wow-delay="0.1s">
                            <div class="portfolio-wrap">
                                <img src="{{ URL::to('/') }}/images/project/{{ $projects->img5}}" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4><a href="#">Shot 5</a></h4>
                                    <p>plan</p>
                                    <div>
                                        <a href="{{ URL::to('/') }}/images/project/{{ $projects->img5}}" class="link-preview" data-lightbox="portfolio" data-title="Shot 5" title="Preview"><i class="far fa-eye"></i></a>
                                        <a href="#" class="link-details" title="More Details"><i class="fas fa-external-link-square-alt"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section><!-- #portfolio -->



@endsection
