@extends('internaut.layouts.main')

@section('content')
    <section class="single-post-content">
        <div class="container">
            <div class="row">
                <div class="col-md-9 post-content" data-aos="fade-up">

                    <!-- ======= Single Post Content ======= -->
                    <div class="single-post">
                        <div class="post-meta"><span class="date">{{ $finds->User->name }}</span> <span
                                class="mx-1">&bullet;</span> <span>{{ $finds->created_at }}</span></div>
                        <h1 class="mb-5">{{ $finds->libelle }}</h1>
                    </div><!-- End Single Post Content -->

                    <!-- ======= Comments ======= -->
                    <div class="comments">
                        <h5 class="comment-title text-danger">{{ $comments->count() }} Comentaires</h5>
                        @foreach ($comments as $comment)
                            <div class="comment d-flex mb-4">
                                <div class="flex-shrink-0">
                                    <div class="avatar avatar-sm rounded-circle">
                                        <img class="avatar-img" src="{{ asset('assets/img/profile-img.jpg') }}"
                                            alt="" class="img-fluid">
                                    </div>
                                </div>
                                <div class="flex-grow-1 ms-2 ms-sm-3">
                                    <div class="comment-meta d-flex align-items-baseline">
                                        <h6 class="me-2">{{ $comment->User->name }}</h6>
                                        <span class="text-muted">{{ $comment->created_at }}</span>
                                    </div>
                                    <div class="comment-body">
                                        {{ $comment->libelle }}
                                    </div>
                                    @can('manage_comments')
                                        <a href="" class="text-danger" style="font-style: italic;">Supprimer</a>
                                    @endcan
                                </div>
                            </div>
                        @endforeach
                    </div><!-- End Comments -->

                    <!-- ======= Comments Form ======= -->
                    <div class="row justify-content-center mt-5">
                        <div class="col-lg-12">
                            <h5 class="comment-title text-primary">Laisser votre Commentaire</h5>
                            <form method="POST" action="{{ route('gestion_postcomment.store') }}">
                                @csrf
                                <div class="row">
                                    <input name="users_id" type="text" value="{{ Auth::User()->id }}" hidden>
                                    <input name="posts_id" type="text" value="{{ $finds->id }}" hidden>
                                    <div class="col-12 mb-3">
                                        <textarea class="form-control" name="libelle" placeholder="Votre commentaire ici..." cols="30" rows="5"></textarea>
                                    </div>
                                    <div class="col-12">
                                        <input type="submit" class="btn btn-primary" value="Poster le commentaire">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div><!-- End Comments Form -->
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

                                @forelse ($projects as $prog)
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
                                <li class="bg-danger m-1"><a href="{{ url('single_publication/' . $pub->id) }}">{{ $pub->date }}</a></li>
                            @endforeach
                        </ul>
                    </div><!-- End Tags -->

                </div>
            </div>
        </div>
    </section>
@endsection
