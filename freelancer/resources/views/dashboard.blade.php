@extends('layout')

@section('content')

    <div class="container start">
        <section id="why-us" class="wow fadeIn">
            <div class="container">
                <header class="section-header">
                    <h3>Choose to view....</h3>
                </header>

                <div class="row row-eq-height justify-content-center pt-4">

                    <div class="col-lg-6 mb-4">
                        <div class="card wow bounceInUp">
                            <i class="far fa-keyboard"></i>
                            <div class="card-body">
                                <a href="/posts"><h5 class="card-title">Posts</h5></a>
                                <p class="card-text">View your posts and you can edit or delete.</p>

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 mb-4">
                        <div class="card wow bounceInUp">
                            <i class="fas fa-pencil-ruler"></i>
                            <div class="card-body">
                                <a href="/projects"><h5 class="card-title">Projects</h5></a>
                                <p class="card-text">View your projects and you can edit or delete.</p>

                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section>
    </div>

@endsection
