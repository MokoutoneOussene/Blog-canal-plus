@extends('internaut.layouts.main')

@section('content')
    <section class="single-post-content">
        <div class="container">
            <div class="row">
                <div class="col-md-9 post-content" data-aos="fade-up">

                    <!-- ======= Single Post Content ======= -->
                    <div class="single-post">
                        <div class="post-meta"><span class="date">{{ $finds->lieu_projet }}</span> <span
                                class="mx-1">&bullet;</span> <span>{{ $finds->d_debut }}</span> au
                            <span>{{ $finds->d_fin }}</span></div>
                        <h1 class="mb-5">{{ $finds->nom_projet }}</h1>
                        <p>{{ $finds->descript }}</p>
                        
                        <h4><a href="{{ asset('storage') . '/' . $finds->devis }}">{{ $finds->devis }}</a></h4>

                        <h3>Image avant</h3>
                        <figure class="my-4 text-center">
                            <img src="{{ asset('storage') . '/' . $finds->img_avant }}" alt="" class="img-fluid"
                                style="width: 75%">
                        </figure>
                        
                        <h3>Image après</h3>
                        <figure class="my-4 text-center">
                            <img src="{{ asset('storage') . '/' . $finds->img_avant }}" alt="" class="img-fluid"
                                style="width: 75%">
                        </figure>

                    </div><!-- End Single Post Content -->

                </div>

                <div class="col-md-3" style="background: #e9ecef;">
                    <!-- ======= Sidebar ======= -->
                    <div class="aside-block">

                        <ul class="nav nav-pills custom-tab-nav mb-4" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-popular-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-popular" type="button" role="tab"
                                    aria-controls="pills-popular" aria-selected="true">Publications</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-trending-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-trending" type="button" role="tab"
                                    aria-controls="pills-trending" aria-selected="false">Projets</button>
                            </li>
                        </ul>

                        <div class="tab-content" id="pills-tabContent">

                            <!-- Popular -->
                            <div class="tab-pane fade show active" id="pills-popular" role="tabpanel"
                                aria-labelledby="pills-popular-tab">

                                @forelse ($publications as $pub)
                                    <div class="post-entry-1 border-bottom">
                                        <div class="post-meta"><span class="date">{{ $pub->lieu }}</span> <span
                                                class="mx-1">&bullet;</span> <span>{{ $pub->date }}</span></div>
                                        <h2 class="mb-2"><a href="{{ url('single_publication/' . $pub->id) }}">{{ $pub->nom_pub }}</a></h2>
                                        <span class="author mb-3 d-block">{{ $pub->User->name }}</span>
                                    </div>
                                @empty
                                    <p class="text-danger">Aucune publication disponible !</p>
                                @endforelse

                            </div> <!-- End Popular -->

                            <!-- Trending -->
                            <div class="tab-pane fade" id="pills-trending" role="tabpanel"
                                aria-labelledby="pills-trending-tab">

                                @forelse ($projects as $prog)
                                    <div class="post-entry-1 border-bottom">
                                        <div class="post-meta"><span class="date">{{ $prog->d_debut }}</span> <span
                                                class="mx-1">&bullet;</span> <span>{{ $prog->d_fin }}</span></div>
                                        <h2 class="mb-2"><a href="{{ url('single_projet/' . $prog->id) }}">{{ $prog->nom_projet }}</a></h2>
                                        <span class="author mb-3 d-block">{{ $prog->User->name }}</span>
                                    </div>
                                @empty
                                @endforelse

                            </div> <!-- End Trending -->

                        </div>
                    </div>

                    <div class="aside-block">
                        <h3 class="aside-title">Categories</h3>
                        <ul class="aside-links list-unstyled">
                            @foreach (App\Models\Categorie::all() as $cate)
                                <li><a href=""><i class="bi bi-chevron-right"></i> {{ $cate->nom_cat }}</a></li>
                            @endforeach
                        </ul>
                    </div><!-- End Categories -->

                    <div class="aside-block">
                        <h3 class="aside-title">Calendrier publications</h3>
                        <ul class="aside-tags list-unstyled p-2" style="background: #e9dede;">
                            @foreach (App\Models\Publication::all() as $pub)
                                <li class="bg-danger m-1"><a href="{{ url('single_publication/' . $pub->id) }}">{{ $pub->date }}</a></li>
                            @endforeach
                        </ul>
                    </div><!-- End Tags -->

                </div>
            </div>
        </div>
    </section>
@endsection
