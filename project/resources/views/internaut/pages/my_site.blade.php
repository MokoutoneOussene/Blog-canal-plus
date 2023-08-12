@extends('internaut.layouts.main2')

@section('content')
    @include('internaut.require.slider')

    <section class="category-section" id="docs">
        <div class="container" data-aos="fade-up">

            <div class="section-header d-flex justify-content-between align-items-center mb-5">
                <h2 class="text-dark">Documents - {{ Auth::User()->Service->nom_service }}</h2>
            </div>

            <div class="col-12 d-flex">
                <div class="col-4" style="margin-right: 10px;">
                    <div class="post-entry-1 lg">
                        <a href="single-post.html"><img src="{{ asset('font/img/Canal_logo.png') }}" alt=""
                                class="img-fluid"></a>
                        <div class="post-meta"><span class="date">Ouagadougou</span> <span class="mx-1">&bullet;</span>
                            <span>{{ date('d/m/Y') }}</span>
                        </div>
                        <h2><a href="single-post.html" class="text-info">Entité de la semaine</a></h2>
                        <p class="mb-4 d-block">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vero temporibus repudiandae, inventore
                            pariatur numquam cumque possimus exercitationem? Nihil tempore odit ab minus eveniet
                            praesentium, similique blanditiis molestiae
                            ut saepe perspiciatis officia nemo, eos quae cumque. Accusamus fugiat architecto rerum animi
                            atque eveniet, quo, praesentium dignissimos
                        </p>
                    </div>
                    <div class="text-center d-flex col-md-12">
                        @forelse ($documents as $doc)
                            <div class="col-md-6">
                                <a href="{{ asset('storage') . '/' . $doc->file }}"><img
                                        src="{{ asset('font/img/img_pdf.jpg') }}" alt="Img pub" class="img-fluid"></a>
                                <h5><a href="{{ asset('storage') . '/' . $doc->file }}">{{ $doc->nom_fichier }}</a></h5>
                            </div>
                        @empty
                            <p class="text-danger">Aucun document disponible</p>
                        @endforelse
                    </div>

                </div>

                <div class="row col-8 d-flex">
                    @forelse ($documents as $doc)
                        <div class="col-md-4">
                            <a href="{{ asset('storage') . '/' . $doc->file }}"><img
                                    src="{{ asset('font/img/img_pdf.jpg') }}" alt="Img pub" class="img-fluid"></a>
                            <div class="post-meta">
                                <span class="mx-1">&bullet;</span>
                                <span>{{ $doc->created_at }}</span>
                            </div>
                            <h5><a href="{{ asset('storage') . '/' . $doc->file }}">{{ $doc->nom_fichier }}</a></h5>
                        </div>
                    @empty
                        <p class="text-danger">Aucun document disponible</p>
                    @endforelse
                </div>
                <!-- End .row -->
            </div>
        </div>
    </section>

    <section class="category-section" id="pubs">
        <div class="container" data-aos="fade-up">

            <div class="section-header d-flex justify-content-between align-items-center mb-5">
                <h2 class="text-dark">Publications - {{ Auth::User()->Service->nom_service }}</h2>
            </div>

            <div class="col-12 d-flex">
                <div class="col-4" style="margin-right: 10px;">
                    <div class="post-entry-1 lg">
                        <a href="single-post.html"><img src="font/img/post-landscape-8.jpg" alt=""
                                class="img-fluid"></a>
                        <div class="post-meta"><span class="date">OUAGADOUGOU</span> <span class="mx-1">&bullet;</span>
                            <span>27/02/2023</span>
                        </div>
                        <h2><a href="single-post.html" class="text-info">Entité de la semaine</a></h2>
                        <p class="mb-4 d-block">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vero temporibus repudiandae, inventore
                            pariatur numquam cumque possimus exercitationem? Nihil tempore odit ab minus eveniet
                            praesentium, similique blanditiis molestiae
                            ut saepe perspiciatis officia nemo, eos quae cumque. Accusamus fugiat architecto rerum animi
                            atque eveniet, quo, praesentium dignissimos
                        </p>

                    </div>
                </div>

                <div class="row col-8 d-flex">
                    @forelse ($publications as $pub)
                        <div class="col-md-4">
                            <a href="{{ url('single_publication/' . $pub->id) }}"><img
                                    src="{{ asset('storage') . '/' . $pub->img }}" alt="Img pub" class="img-fluid"></a>
                            <div class="post-meta"><span class="date">{{ $pub->lieu }}</span> <span
                                    class="mx-1">&bullet;</span>
                                <span>{{ $pub->date }}</span>
                            </div>
                            <h5><a href="{{ url('single_publication/' . $pub->id) }}">{{ $pub->nom_pub }}</a></h5>
                        </div>
                    @empty
                        <p class="text-danger">Aucune publication disponible</p>
                    @endforelse
                </div>
                <!-- End .row -->
            </div>
        </div>
    </section>

    <section class="category-section" id="projects">
        <div class="container" data-aos="fade-up">

            <div class="section-header d-flex justify-content-between align-items-center mb-5">
                <h2 class="text-dark">Projets - {{ Auth::User()->Service->nom_service }}</h2>
            </div>

            <div class="col-12 d-flex">
                <div class="col-4" style="margin-right: 10px;">
                    <div class="post-entry-1 lg">
                        <a href="single-post.html"><img src="font/img/post-landscape-8.jpg" alt=""
                                class="img-fluid"></a>
                        <div class="post-meta"><span class="date">OUAGADOUGOU</span> <span class="mx-1">&bullet;</span>
                            <span>27/02/2023</span>
                        </div>
                        <h2><a href="single-post.html" class="text-info">Entité de la semaine</a></h2>
                        <p class="mb-4 d-block">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vero temporibus repudiandae, inventore
                            pariatur numquam cumque possimus exercitationem? Nihil tempore odit ab minus eveniet
                            praesentium, similique blanditiis molestiae
                            ut saepe perspiciatis officia nemo, eos quae cumque. Accusamus fugiat architecto rerum animi
                            atque eveniet, quo, praesentium dignissimos
                        </p>

                    </div>
                </div>

                <div class="row col-8 d-flex">
                    @forelse ($projects as $prog)
                        <div class="col-md-4">
                            <a href="{{ url('single_projet/' . $prog->id) }}"><img
                                    src="{{ asset('storage') . '/' . $prog->img_avant }}" alt="Img pub"
                                    class="img-fluid"></a>
                            <div class="post-meta"><span class="date">{{ $prog->lieu_projet }}</span> <span
                                    class="mx-1">&bullet;</span>
                                <span>{{ $prog->d_debut }}</span>
                            </div>
                            <h5><a href="{{ url('single_projet/' . $prog->id) }}">{{ $prog->nom_projet }}</a></h5>
                        </div>
                    @empty
                        <p class="text-danger">Aucun projet disponible</p>
                    @endforelse
                </div>
                <!-- End .row -->
            </div>
        </div>
    </section>
@endsection
