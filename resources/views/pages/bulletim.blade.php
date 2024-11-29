@extends('layout.base_page')

@section('content')
    <main id="main">
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center">
                    <ol>
                        <li><a href="{{ route('page.home') }}">Home</a></li>
                        <li>Boletins</li>
                    </ol>
                </div>
            </div>
        </section>

        <section class="container">
            <div class="row" data-aos="fade-up" data-aos-delay="100">
                <div class="section-title col-12">
                    <div class="row">
                        <div class="col-12"><h2>Boletim</h2></div>
                        <div class="col-12"><p>Fique por dentro</p></div>
                    </div>
                </div>                    
            </div>

            <div class="row" id="list_bulletin" data-aos="fade-up" data-aos-delay="200">
                
            </div>

            <div class="row mt-5 mb-5 btn_more" data-aos="fade-up" data-aos-delay="300">
                <div class="d-grid gap-1 col-6 mx-auto">
                    <button type="button" class="btn btn-dark btn-sm btn-block" id="view_more">Carregar mais</button>
                </div>
            </div>
        </section>
    </main>
@endsection