@extends('internaut.layouts.main')

@section('content')
    <!-- ======= Lifestyle Category Section ======= -->
    <section class="category-section">
        <div class="container" data-aos="fade-up">

            <div class="section-header d-flex justify-content-between align-items-center mb-5">
                <h2 class="text-danger">Blogs</h2>
            </div>

            <div class="row">

                <div class="row col-9 d-flex" style="margin-right: 10px;">
                    @forelse (App\Models\Post::all() as $post)
                        <div class="col-md-4">
                            <div class="post-meta"><span class="date">{{ $post->User->name }}</span> <span
                                    class="mx-1">&bullet;</span>
                                <span>{{ $post->created_at }}</span>
                            </div>
                            <h5><a href="{{ url('single_blog/' . $post->id) }}">{{ $post->libelle }}</a></h5>
                        </div>
                    @empty
                        <p class="text-danger">Aucun sujet disponible</p>
                    @endforelse
                </div>

                <div class="row col-3" style="background: #e9ecef;">

                    <div class="col-lg-12 mb-5">
                        <h5 class="comment-title text-danger">Publier un sujet</h5>
                        <form method="POST" action="{{ route('gestion_post.store') }}">
                            @csrf
                            <div class="row">
                                <input name="users_id" type="text" value="{{ Auth::User()->id }}" hidden>
                                <div class="col-12 mb-3">
                                    <textarea class="form-control" name="libelle" placeholder="Tapez ici..." cols="30" rows="3"></textarea>
                                </div>
                                <div class="col-12">
                                    <input type="submit" class="btn btn-primary" value="Publier maintenant">
                                </div>
                            </div>
                        </form>
                        <hr>
                    </div>

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

                                @forelse (App\Models\Publication::all() as $pub)
                                    <div class="post-entry-1 border-bottom">
                                        <div class="post-meta"><span class="date">{{ $pub->lieu }}</span> <span
                                                class="mx-1">&bullet;</span> <span>{{ $pub->date }}</span></div>
                                        <h2 class="mb-2"><a
                                                href="{{ url('single_publication/' . $pub->id) }}">{{ $pub->nom_pub }}</a>
                                        </h2>
                                        <span class="author mb-3 d-block">{{ $pub->User->name }}</span>
                                    </div>
                                @empty
                                    <p class="text-danger">Aucune publication disponible !</p>
                                @endforelse

                            </div> <!-- End Popular -->

                            <!-- Trending -->
                            <div class="tab-pane fade" id="pills-trending" role="tabpanel"
                                aria-labelledby="pills-trending-tab">

                                @forelse (App\Models\Projet::all() as $prog)
                                    <div class="post-entry-1 border-bottom">
                                        <div class="post-meta"><span class="date">{{ $prog->d_debut }}</span> <span
                                                class="mx-1">&bullet;</span> <span>{{ $prog->d_fin }}</span></div>
                                        <h2 class="mb-2"><a
                                                href="{{ url('single_projet/' . $prog->id) }}">{{ $prog->nom_projet }}</a>
                                        </h2>
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
                                <li class="bg-danger m-1"><a href="#">{{ $pub->date }}</a></li>
                            @endforeach
                        </ul>
                    </div><!-- End Tags -->
                </div>
                <!-- End .row -->
            </div>
        </div>
    </section>
@endsection
