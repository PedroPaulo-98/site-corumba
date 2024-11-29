@extends('layout.base_page')

@section('content')
    <main>
        <section id="home-top" class="d-flex align-items-center justify-content-center">
            <div class="container" data-aos="fade-up">
                <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
                    <div class="col-xl-6 col-lg-8">
                        <h1><span>CORUMBA </span> OUTSOURCING</h1>
                    </div>
                </div>
                <div class="row mt-5 justify-content-center" data-aos="zoom-in" data-aos-delay="250">
                    <div class="col-xl-2 col-md-4 col-6">
                        <div class="icon-box">
                            <i class="ri-video-line"></i>
                            <h3><a href="#">Vídeo Empresa</a></h3>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-4 col-6 ">
                        <div class="icon-box">
                            <i class="ri-whatsapp-fill"></i>
                            <h3><a href="#">Contato WhatsApp</a></h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- PT-BR: Boletins -->
        <section id="bulletim" class="container" data-aos="fade-up">
            <div class="row">
                <div class="section-title col-12">
                    <div class="row">
                        <div class="col-12"><h2>Empresas</h2></div>
                        <div class="col-6"><p>Fique por dentro</p></div>
                        <div class="col-6 text-right"><a href="#"><b>VER MAIS</b> <i class="ri-add-box-fill"></i></a></div>
                    </div>
                </div>
            </div>

            <div class="row" id="list_bulletin" data-aos="fade-up" data-aos-delay="200">
                @if(1 < 2) 
                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch mb-3" data-aos="zoom-in" data-aos-delay="100">
                        <div class="card">
                            <img src="{{
                                file_exists(public_path() . '/storage/image/enterprise/mercadao.png')
                                ? '/storage/image/enterprise/mercadao.png'
                                : '/storage/image/standardcover.png'
                            }}" class="card-img-top" alt="">
                            
                            <div class="card-body">
                                <h5 class="card-title">Mercadão dos Medicamentos</h5>
                                <p class="card-text">
                                    <a href="#"><button type="button" class="btn btn-outline-info btn-sm mt-3">Site</button></a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch mb-3" data-aos="zoom-in" data-aos-delay="100">
                        <div class="card">
                            <img src="{{
                                file_exists(public_path() . '/storage/image/enterprise/mercadao.png')
                                ? '/storage/image/enterprise/mercadao.png'
                                : '/storage/image/standardcover.png'
                            }}" class="card-img-top" alt="">
                            
                            <div class="card-body">
                                <h5 class="card-title">Mercadão dos Medicamentos</h5>
                                <p class="card-text">
                                    <a href="#"><button type="button" class="btn btn-outline-info btn-sm mt-3">Site</button></a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch mb-3" data-aos="zoom-in" data-aos-delay="100">
                        <div class="card">
                            <img src="{{
                                file_exists(public_path() . '/storage/image/enterprise/mercadao.png')
                                ? '/storage/image/enterprise/mercadao.png'
                                : '/storage/image/standardcover.png'
                            }}" class="card-img-top" alt="">
                            
                            <div class="card-body">
                                <h5 class="card-title">Mercadão dos Medicamentos</h5>
                                <p class="card-text">
                                    <a href="#"><button type="button" class="btn btn-outline-info btn-sm mt-3">Site</button></a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch mb-3" data-aos="zoom-in" data-aos-delay="100">
                        <div class="card">
                            <img src="{{
                                file_exists(public_path() . '/storage/image/enterprise/mercadao.png')
                                ? '/storage/image/enterprise/mercadao.png'
                                : '/storage/image/standardcover.png'
                            }}" class="card-img-top" alt="">
                            
                            <div class="card-body">
                                <h5 class="card-title">Mercadão dos Medicamentos</h5>
                                <p class="card-text">
                                    <a href="#"><button type="button" class="btn btn-outline-info btn-sm mt-3">Site</button></a>
                                </p>
                            </div>
                        </div>
                    </div>
                    
                @endif
            </div>
        </section>

        <!-- PT-BR: Atendimento pastoral -->
        <div class="modal fade mt-5" id="modalPastoralCare" tabindex="-1" aria-labelledby="modalPastoralCareLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalPastoralCareLabel">Solicitar Atendimento Pastoral</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    
                    <form id="form_pastoral_care">
                        <div class="modal-body">
                            <div id="message_form_pastoral"></div>

                            <div class="form-group">
                                <label for="name">Nome:</label>
                                <input type="text" class="form-control text-uppercase" id="name" name="name" maxlength="50" required>
                            </div>

                            <div class="form-group">
                                <label for="phone">Telefone:</label>
                                <input type="phone" class="form-control phone" id="phone" name="phone" placeholder="(DDD) + NÚMERO" required>
                            </div>

                            <div class="form-group">
                                <label for="whatsapp">WhatsApp:</label>
                                <input type="phone" class="form-control phone" id="whatsapp" name="whatsapp" placeholder="(DDD) + NÚMERO">
                            </div>

                            <div class="form-group">
                                <label for="age">Idade:</label>
                                <input type="number" class="form-control" id="age" name="age" required>
                            </div>

                            <div class="form-group">
                                <label for="subject">Assunto:</label>
                                <input type="text" class="form-control" id="subject" name="subject" maxlength="100" aria-describedby="subjectHelp" required>
                                <small id="subjectHelp" class="form-text text-muted">No máximo 140 caracteres.</small>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="submit" class="btn btn-info" id="btn_pastoral_care">Solicitar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <section id="pastoral_care" class="pastoral-care">
            <div class="container" data-aos="zoom-in">
                <div class="text-center">
                    <h3>Atendimento 24h</h3>
                    <p> Clique abaixo para solicitar seu atendimento imediato.</p>
                    <a class="pastoral-care-btn" type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalPastoralCare">Solicitar</a>
                </div>
            </div>
        </section>
        
        <!-- PT-BR: Missões -->
        <section id="mission" class="container mission p-3" data-aos="fade-up">
            <div class="row mt-5">
                <div class="section-title col-12">
                    <div class="row">
                        <div class="col-12"><h2>Serviços</h2></div>
                        <div class="col-6"><p>Saiba mais</p></div>
                        <div class="col-6 text-right"><a href="#"><b>VER MAIS</b> <i class="ri-add-box-fill"></i></a></div>
                    </div>
                </div>
            </div>

            <div class="row" id="mission_list">
                @if(1 < 2)
                    <div class="col-lg-6 col-md-6 d-flex align-items-stretch mb-3">
                        <div class="mission-card" data-aos="fade-up" data-aos-delay="100">
                            <div class="mission-img">
                                <img src="{{
                                    file_exists(public_path() . '/storage/image/mission/202407/ide.jpeg')
                                    ? '/storage/image/mission/202407/ide.jpeg'
                                    : '/storage/image/standardcover.png'
                                }}" class="img-fluid" alt="">
                            </div>

                            <div class="mission-info p-3">
                                <h4>Redes</h4>
                                <p>Intalação de infraestrutura ...</p>
                                <a href="#"><button type="button" class="btn btn-outline-info btn-sm">Conhecer mais</button></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 d-flex align-items-stretch mb-3">
                        <div class="mission-card" data-aos="fade-up" data-aos-delay="100">
                            <div class="mission-img">
                                <img src="{{
                                    file_exists(public_path() . '/storage/image/mission/202407/ide.jpeg')
                                    ? '/storage/image/mission/202407/ide.jpeg'
                                    : '/storage/image/standardcover.png'
                                }}" class="img-fluid" alt="">
                            </div>

                            <div class="mission-info p-3">
                                <h4>Suporte</h4>
                                <p>Intalação de SO ...</p>
                                <a href="#"><button type="button" class="btn btn-outline-info btn-sm">Conhecer mais</button></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 d-flex align-items-stretch mb-3">
                        <div class="mission-card" data-aos="fade-up" data-aos-delay="100">
                            <div class="mission-img">
                                <img src="{{
                                    file_exists(public_path() . '/storage/image/mission/202407/ide.jpeg')
                                    ? '/storage/image/mission/202407/ide.jpeg'
                                    : '/storage/image/standardcover.png'
                                }}" class="img-fluid" alt="">
                            </div>

                            <div class="mission-info p-3">
                                <h4>Apagar fogo</h4>
                                <p>Tua empresa está de pegando fogo...</p>
                                <a href="#"><button type="button" class="btn btn-outline-info btn-sm">Conhecer mais</button></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 d-flex align-items-stretch mb-3">
                        <div class="mission-card" data-aos="fade-up" data-aos-delay="100">
                            <div class="mission-img">
                                <img src="{{
                                    file_exists(public_path() . '/storage/image/mission/202407/ide.jpeg')
                                    ? '/storage/image/mission/202407/ide.jpeg'
                                    : '/storage/image/standardcover.png'
                                }}" class="img-fluid" alt="">
                            </div>

                            <div class="mission-info p-3">
                                <h4>Instalar word</h4>
                                <p>Pacote office en geral (original ou não a sua conta que etsá em risco)...</p>
                                <a href="#"><button type="button" class="btn btn-outline-info btn-sm">Conhecer mais</button></a>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </section>

        <section id="ministry" class="container team p-3" data-aos="fade-up" data-aos-delay="200">
            <div class="row">
                <div class="section-title col-12">
                    <div class="row">
                        <div class="col-12"><h2>Time</h2></div>
                        <div class="col-6"><p>Faça parte</p></div>
                        <div class="col-6 text-right"><a href="#"><b>VER MAIS</b> <i class="ri-add-box-fill"></i></a></div>
                    </div>
                </div>
            </div>

            <div class="row" id="ministry_list">
                <div class="col-12 col-lg-3 col-md-6 mb-3 d-flex align-items-stretch">
                    <div class="ministry" data-aos="fade-up" data-aos-delay="100">
                        <div class="ministry-img">
                            <img src="{{
                                    file_exists(public_path() . '/storage/image/time/artur.png')
                                    ? '/storage/image/time/artur.png'
                                    : '/storage/image/standardcover.png'
                                }}" class="img-fluid" alt="">
                        </div>

                        <div class="ministry-info">
                            <h4>Artur CO</h4>
                            <a href="#"><button type="button" class="btn btn-outline-info btn-sm">Conhecer</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Contato</h2>
                    <p>CONTATE-NOS</p>
                </div>
                <div>
                    <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d28884.61478947433!2d-51.0595724!3d0.0410835!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8d61e13f30176abd%3A0xd84deb6c651d7b02!2sCorumba%20Outsourcing!5e1!3m2!1spt-BR!2sbr!4v1732716031078!5m2!1spt-BR!2sbr" frameborder="0" allowfullscreen></iframe>
                </div>
                <div class="row mt-5">
                    <div class="col-lg-12">
                        <div class="info row">
                            <div class="col-12 col-md-4 mt-lg-0">
                                <i class="icofont-google-map"></i>
                                <h4>Endereço:</h4>
                                <p class="address_contact">Edificio macapa office center - Av. Fab, 1070 - Sala 508 - Centro<br>Macapá - AP, 68900-073</p>
                            </div>
                            <div class="col-12 col-md-4 mt-lg-0">
                                <i class="icofont-envelope"></i>
                                <h4>E-mail:</h4>
                                <p class="email_contact">contato@corumba.digital</p>
                            </div>
                            <div class="col-12 col-md-4 mt-lg-0">
                                <i class="icofont-phone"></i>
                                <h4>Telefone:</h4>
                                <p class="phone_contact">96-4141-5550 <br>(WhatsApp) 96-3333-5550</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection