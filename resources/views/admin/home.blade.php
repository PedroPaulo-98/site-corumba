@extends('layout.base_admin')

@section('content')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Painel</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Admin</li>
            <li class="breadcrumb-item active">Home</li>
        </ol>
        <div class="row">
            <div class="col-xl-12 col-md-12">
                <div class="card border-primary bg-secondary text-center text-light mb-4">
                    <div class="card-body p-0 pt-2"><h2><small class="fs-1">Site</small></h2></div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6">
                <div class="card border-primary mb-4">
                    <div class="card-body"><h2><small class="fs-5">Sobre</small></h2></div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small stretched-link text-decoration-none" href="sobre"><i class="far fa-window-maximize"></i> Gerenciar página</a>
                        <div class="small"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6">
                <div class="card border-primary mb-4">
                    <div class="card-body"><h2><b class="number_bulletins"></b> <small class="fs-5">Boletim(ns)</small></h2></div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small stretched-link text-decoration-none" href="boletim"><i class="far fa-window-maximize"></i> Gerenciar página</a>
                        <div class="small"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6">
                <div class="card border-primary mb-4">
                    <div class="card-body"><h2><b class="number_missions"></b> <small class="fs-5">Missão(ões)</small></h2></div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small stretched-link text-decoration-none" href="missoes"><i class="far fa-window-maximize"></i> Gerenciar página</a>
                        <div class="small"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6">
                <div class="card border-primary  mb-4">
                    <div class="card-body"><h2><b class="number_ministries"></b> <small class="fs-5">Ministério(s)</small></h2></div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small stretched-link text-decoration-none" href="ministerios"><i class="far fa-window-maximize"></i> Gerenciar página</a>
                        <div class="small"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection

@section('script')
    <script src="/admin/js/pages/home.js"></script>
@endsection