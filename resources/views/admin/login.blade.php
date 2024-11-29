<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Painel WebSite</title>
        <link href="/admin/lib/bootstrap5.1.3/css/bootstrap.css" rel="stylesheet" />
        <script src="/admin/lib/fontAwesome5.15.3/js/all.min.js"></script>
    </head>

    <body class="bg-dark">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <img class="img-fluid mt-5" src="/admin/img/logo.png" alt="">

                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">
                                        <i class="far fa-window-maximize"></i> ACESSO AO PAINEL</h3>
                                    </div>

                                    <div class="card-body">
                                        <div id="message_login"></div>

                                        <form id="form_login">
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="input_email" type="email" placeholder="nome@dominio.com.br" />
                                                <label for="input_email">E-mail</label>
                                            </div>

                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="input_password" type="password" placeholder="Senha" />
                                                <label for="input_password">Senha</label>
                                            </div>
                                            
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <a class="small" href="password.html">Esqueceu sua senha?</a>
                                                <button class="btn btn-primary" type="submit" id="btn_submit">Entrar</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <script src="/admin/lib/jquery/jquery.min.js"></script>
        <script src="/admin/lib/bootstrap5.1.3/js/bootstrap.js"></script>
        <script src="/admin/js/scripts.js"></script>
        <script src="/admin/js/pages/login.js"></script>
    </body>
</html>
