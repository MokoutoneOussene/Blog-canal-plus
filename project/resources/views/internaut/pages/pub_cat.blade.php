@extends('internaut.layouts.main')

@section('content')
    <!-- ======= Lifestyle Category Section ======= -->
    <section class="category-section">
        <div class="container" data-aos="fade-up">

            <div class="section-header d-flex justify-content-between align-items-center mb-5">
                <h2 class="text-danger">Nos Publications <span> / </span><span>{{ $finds->nom_cat }}</span></h2>
            </div>

            <div class="col-12 d-flex">
                <div class="col-4" style="margin-right: 10px;">
                    <div class="post-entry-1 lg">
                        <a href="single-post.html"><img src="{{ asset('font/img/Canal_logo.png') }}" alt=""
                                class="img-fluid"></a>
                        <div class="post-meta"><span class="date">Ouagadougou</span> <span class="mx-1">&bullet;</span>
                            <span>{{ date('d/m/Y') }}</span>
                        </div>
                        <h3><a href="single-post.html" class="text-info">CANAL+ BURKINA</a></h3>
                        <p class="mb-4 d-block">
                            CANAL+ BURKINA, est une Filiale de CANAL+ INTERNATIONNAL, elle-même filiale du
                            groupe CANAL+ qui est le principal opérateur de la télévision payante par
                            satellite, en Afrique francophone. Depuis l’ouverture de sa filiale en 2013,
                            CANAL+ s’est engagée à être un acteur clé et à participer aux efforts de développement
                            du Burkina Faso. Leader de la télé payante, CANAL+ soutient l’État burkinabè dans ses
                            efforts en :
                        </p>
                        <ul>
                            <li>Contribuant à la création de milliers d’emplois directs et indirects,</li>
                            <li>Étant un des plus gros contributeurs fiscaux du pays.</li>
                        </ul>
                        <p>
                            Un soutien conséquent qui comprend d’importants investissements financiers pour
                            développer et pérenniser l’activité commerciale de CANAL+. En 10 ans d’existence,
                            CANAL+ a progressivement intégré des milliers de foyers Burkinabè pour partager avec
                            eux des moments privilégiés en répondant à leurs besoins d’information, de découverte
                            et de divertissement quotidiens grâce à la qualité de ses offres télévisuelles.
                        </p>
                    </div>
                    <h3><a href="single-post.html" class="text-info">DOCUMENTS</a></h3>
                    <div class="text-center d-flex col-md-12">
                        @forelse ($documents as $doc)
                            <div class="col-md-6">
                                <a href="{{ asset('storage') . '/' . $doc->file }}"><img
                                        src="{{ asset('font/img/img_pdf.jpg') }}" alt="Img pub" class="img-fluid"></a>
                                <h5><a href="{{ asset('storage') . '/' . $doc->file }}">{{ $doc->nom_fichier }}</a></h5>
                            </div>
                        @empty
                            <p class="text-danger">Aucune publication disponible</p>
                        @endforelse
                    </div>
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
@endsection
