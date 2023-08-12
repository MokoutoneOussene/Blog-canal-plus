@extends('internaut.layouts.main')

@section('content')
    <section>
        <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="col-lg-12 text-center mb-5">
                    <h1 class="page-title">A propos de nous</h1>
                </div>
            </div>

            <div class="row mb-5">

                <div class="d-md-flex post-entry-2 half">
                    <a href="#" class="me-4 thumbnail">
                        <img src="{{asset('assets/img/IMG-20230222-WA0003.jpg')}}" alt="" class="img-fluid">
                    </a>
                    <div class="ps-md-5 mt-4 mt-md-0">
                        <div class="post-meta mt-4">A propos de nous</div>
                        <h2 class="mb-4 display-4">Historique</h2>

                        <p>
                            CANAL+ BURKINA, est une Filiale de CANAL+ INTERNATIONNAL, elle-même filiale du groupe CANAL+ qui
                            est
                            le principal opérateur de la télévision payante par satellite, en Afrique francophone.
                        </p>
                        <p>
                            Depuis l’ouverture de sa filiale en 2013, CANAL+ s’est engagée à être un acteur clé et à
                            participer aux efforts de développement du Burkina Faso. Leader de la télé payante, CANAL+
                            soutient l’État burkinabè dans ses efforts en :
                        </p>
                        <ul>
                            <li>
                                Contribuant à la création de milliers d’emplois directs et indirects,
                            </li>
                            <li>
                                Étant un des plus gros contributeurs fiscaux du pays.
                            </li> 
                        </ul>
                    </div>
                </div>

                <div class="d-md-flex post-entry-2 half mt-5">
                    <a href="#" class="me-4 thumbnail order-2">
                        <img src="{{asset('assets/img/IMG-20230222-WA0001.jpg')}}" alt="" class="img-fluid">
                    </a>
                    <div class="pe-md-5 mt-4 mt-md-0">
                        <p>
                            Un soutien conséquent qui comprend d’importants investissements financiers pour
                            développer et pérenniser l’activité commerciale de CANAL+.
                        </p>
                        <p>
                            En 10 ans d’existence, CANAL+ a progressivement intégré des milliers de foyers Burkinabè pour
                            partager avec eux des moments privilégiés en répondant à leurs besoins d’information,
                            de découverte et de divertissement quotidiens grâce à la qualité de ses offres télévisuelles.
                        </p>
                        <p>
                            Cette proximité a été rendue possible par une forte présence de CANAL+ dans des domaines
                            vitaux pour le Burkina, de la culture à la révélation de talents locaux en passant par
                            l’engagement sociétal.
                        </p>
                        <p>
                            CANAL+ met un point d’honneur à assurer l’exposition positive du Burkina à travers ses contenus
                            et
                            la vulgarisation des médias Burkinabè. Le Burkina Faso est l’un des pays qui a le plus de
                            chaines
                            télé et radio locales sur les bouquets CANAL+, avec 10 chaines télés et 5 radios suivi dans plus
                            17 pays et par des millions de téléspectateurs.
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </section>
@endsection
