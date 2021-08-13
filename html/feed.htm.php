<div class="container">
    <div class="row">
        <div class="col-md-2 col-sm-2">
            <ul class="nav flex-column mt-5">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Pagina inicial</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Explorar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Notificações</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Mensagens</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Itens salvos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Listas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Perfil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Mais</a>
                </li>
                <button id="btn-azul">Tweetar</button>
            </ul>
        </div>
        <div class="col-md-7 col-sm-7">
            <div class="card">
                <div class="card-header">
                    <h3>
                        <p class="mt-4">Pagina inicial</p>
                    </h3>
                </div>
                <div class="card-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-2 col-sm-2">
                                <img src="https://picsum.photos/500/500" alt="" class="img-fluid  rounded-circle">
                            </div>
                            <div class="col-md-10 col-sm-10 mb-3">
                                <form>
                                    <div class="form-group">
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-2 col-sm-2"></div>
                            <div class="col-md-1 col-sm-1"><i class="material-icons"><span class="material-icons">crop_original</span></i></div>
                            <div class="col-md-1 col-sm-1"><i class="material-icons"><span class="material-icons">movie</span></i></div>
                            <div class="col-md-1 col-sm-1"><i class="material-icons"><span class="material-icons">short_text</span></i></div>
                            <div class="col-md-1 col-sm-1"><i class="material-icons"><span class="material-icons">sentiment_satisfied_alt</span></i></div>
                            <div class="col-md-1 col-sm-1"><i class="material-icons"><span class="material-icons">edit_calendar</span></i></div>
                            <div class="col-md-2 col-sm-2"></div>
                            <div class="col-md-3 col-sm-3">
                                <button id="btn-form-tweet">Tweetar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php for($i=0; $i<10; $i++) { ?>

                <div class="card mt-5">
                    <div class="card-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-2 col-sm-1">
                                    <img src="https://picsum.photos/500/501" alt="" class="img-fluid  rounded-circle">
                                </div>
                                <div class="col-md-10 col-sm-10">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12">
                                                <strong class="text-black">o nome do cara aqui</strong>
                                            </div>
                                            <div class="col-md-12 col-sm-12 mb-3">
                                                O que ele escreveu<br>
                                                sejá lá oq for
                                            </div>
                                            <div class="col-md-3 col-sm-3"><i class="material-icons"><span class="material-icons">crop_original</span></i></div>
                                            <div class="col-md-3 col-sm-3"><i class="material-icons"><span class="material-icons">crop_original</span></i></div>
                                            <div class="col-md-3 col-sm-3"><i class="material-icons"><span class="material-icons">crop_original</span></i></div>
                                            <div class="col-md-3 col-sm-3"><i class="material-icons"><span class="material-icons">crop_original</span></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            <?php } ?>
        </div>
        <div class="col-md-3 col-sm-3">
            <input id="pesquisa" class="mt-4" placeholder="   pesquisar"></input>
            <div class="card mt-5">
                    <div class="card-body">
                        <div class="container">
                            <div class="row">

                                <?php for($i=0; $i<5; $i++) { ?>

                                <div class="col-md-8 col-sm-8">
                                    <p>aqui existe uma noticia</p>
                                </div>
                                <div class="col-md-4 col-sm-4">
                                    <img src="https://picsum.photos/500/501" alt="" class="img-fluid  rounded-circle">
                                </div>

                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
