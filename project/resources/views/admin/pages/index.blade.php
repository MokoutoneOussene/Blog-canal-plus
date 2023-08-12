@extends('admin.layouts.mainlayout')

@section('maincontent')
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <!-- small box -->
                    <div class="small-box bg-dark" style="border-left: 3px solid black;">
                        <div class="ribbon-wrapper ribbon-xl">
                            <div class="ribbon bg-dark">
                                Publications
                            </div>
                        </div>
                        <div class="inner">
                            <h3>{{ $publications->count() }}</h3>
                            <h3>Publications</h3>
                        </div>
                        <div class="icon">
                            <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                        </div>
                        <a href="{{ route('gestion_publication.index') }}" class="small-box-footer">Voir plus <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-4 col-md-4">
                    <!-- small box -->
                    <div class="small-box bg-warning" style="border-left: 3px solid black;">
                        <div class="ribbon-wrapper ribbon-xl">
                            <div class="ribbon bg-warning">
                                Projets
                            </div>
                        </div>
                        <div class="inner">
                            <h3>{{ $projects->count() }}</h3>
                            <h3>Projets</h3>
                        </div>
                        <div class="icon">
                            <i class="fa fa-folder-open"></i>
                        </div>
                        <a href="{{ route('gestion_projet.index') }}" class="small-box-footer">Voir plus <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-4 col-md-4">
                    <!-- small box -->
                    <div class="small-box bg-secondary" style="border-left: 3px solid #F3695A;">
                        <div class="ribbon-wrapper ribbon-xl">
                            <div class="ribbon bg-secondary">
                                Documents
                            </div>
                        </div>
                        <div class="inner">
                            <h3>{{ $documents->count() }}</h3>
                            <h3>Documents</h3>
                        </div>
                        <div class="icon">
                            <i class="fa fa-user-circle"></i>
                        </div>
                        <a href="{{ route('gestion_document.index') }}" class="small-box-footer">Voir plus <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-4 col-md-4">
                    <!-- small box -->
                    <div class="small-box bg-danger" style="border-left: 3px solid #E487E4;">
                        <div class="ribbon-wrapper ribbon-xl">
                            <div class="ribbon bg-danger">
                                Blogs
                            </div>
                        </div>
                        <div class="inner">
                            <h3>{{ $blogs->count() }}</h3>
                            <h3>Blogs</h3>
                        </div>
                        <div class="icon">
                            <i class="fa fa-users"></i>
                        </div>
                        <a href="{{ route('gestion_post.index') }}" class="small-box-footer">Voir plus <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <!-- small box -->
                    <div class="small-box bg-success" style="border-left: 3px solid #9AE6AD;">
                        <div class="ribbon-wrapper ribbon-xl">
                            <div class="ribbon bg-success">
                                Utilisateurs
                            </div>
                        </div>
                        <div class="inner">
                            <h3>{{ $users->count() }}</h3>
                            <h3>Utilisateurs</h3>
                        </div>
                        <div class="icon">
                            <i class="fa fa-users"></i>
                        </div>
                        @can('manage_comments')
                            <a href="{{ route('gestion_user.index') }}" class="small-box-footer">Voir plus <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        @endcan
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-4 col-md-4">
                    <!-- small box -->
                    <div class="small-box bg-info" style="border-left: 3px solid #95A3E7;">
                        <div class="ribbon-wrapper ribbon-xl">
                            <div class="ribbon bg-info">
                                Commentaires
                            </div>
                        </div>
                        <div class="inner">
                            <h3>{{ $comments->count() }}</h3>
                            <h3>Commentaires</h3>
                        </div>
                        <div class="icon">
                            <i class="fa fa-shopping-cart"></i>
                        </div>
                        <a href="" class="small-box-footer">Voir plus <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
            </div>
            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
@endsection
