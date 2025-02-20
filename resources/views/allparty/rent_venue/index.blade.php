@extends('allparty.layout_index.index')
@section('index')

    <!-- ***** About Us Page ***** -->
    <div class="page-heading-rent-venue">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Você está procurando um local?</h2>
                    <span>Confira nossos locais, escolha sua preferência e preencha o formulário de reserva.</span>
                </div>
            </div>
        </div>
    </div>

    <div class="rent-venue-tabs">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row" id="tabs">
                        <div class="col-lg-12">
                            <div class="heading-tabs">
                                <div class="row">
                                    <div class="col-lg-8">
                                        <ul>
                                          <li><a href='#tabs-1'>Exemplo 1</a></li>
                                          <li><a href='#tabs-2'>Exemplo 2</a></a></li>
                                          <li><a href='#tabs-3'>Exemplo 3</a></a></li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4">
                                          <div class="main-dark-button">
                                              <a href="ticket-details.html">Comprar Ingressos</a>
                                          </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <section class='tabs-content'>
                                <article id='tabs-1'>
                                    <div class="row">
                                        <div class="col-lg-9">
                                            <div class="right-content">
                                                <h4>Exemplo 1</h4>
                                                <p>TEXTO SOBRE O LOCAL PARA ALUGAR TEXTO SOBRE O LOCAL PARA ALUGAR TEXTO SOBRE O LOCAL PARA ALUGAR TEXTO SOBRE O LOCAL PARA ALUGAR TEXTO SOBRE O LOCAL PARA ALUGAR</p>
                                                <ul class="list">
                                                    <li>Exemplo 1</li>
                                                    <li>$2,840 por dia</li>
                                                    <li>860 Pessoas</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div id="map">
                                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7405.690436500271!2d-43.289281240686606!3d-23.00173786750551!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9bd6d13e950037%3A0x2c49dc1b12837f3f!2sPedra%20da%20G%C3%A1vea!5e1!3m2!1sen!2sth!4v1630941277488!5m2!1sen!2sth" width="100%" height="240px" frameborder="0" style="border:0"  allowfullscreen="" loading="lazy"></iframe>
                                                <h5>Localização</h5>
                                                <p>Local do Exemplo 1</p>
                                            <div class="text-button">
                                                <a href="ticket-details.html">Detalhes do Local <i class="fa fa-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </article>                            
                                <article id='tabs-2'>
                                    <div class="row">
                                        <div class="col-lg-9">
                                            <div class="right-content">
                                                <h4>Exemplo 2</h4>
                                                <p>TEXTO SOBRE O LOCAL PARA ALUGAR TEXTO SOBRE O LOCAL PARA ALUGAR TEXTO SOBRE O LOCAL PARA ALUGAR TEXTO SOBRE O LOCAL PARA ALUGAR TEXTO SOBRE O LOCAL PARA ALUGAR</p>                                                <ul class="list">
                                                    <li>Exemplo 2</li>
                                                    <li>$4,750 por dia</li>
                                                    <li>1,100 Pessoas</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div id="map">
                                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14678.414668643849!2d-43.19038460753291!3d-22.96913839717705!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9bd54579a5956b%3A0xa102deeaffcb3e3!2sCopacabana%20Beach!5e1!3m2!1sen!2sth!4v1630941170951!5m2!1sen!2sth" width="100%" height="240px" frameborder="0" style="border:0" allowfullscreen="" loading="lazy"></iframe>
                                                <h5>Localização</h5>
                                                <p>Local do Exemplo 1</p>
                                            <div class="text-button">
                                                <a href="ticket-details.html">Detalhes do Local <i class="fa fa-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </article>   
                                <article id='tabs-3'>
                                    <div class="row">
                                        <div class="col-lg-9">
                                            <div class="right-content">
                                                <h4>Exemplo 3</h4>
                                                <p>TEXTO SOBRE O LOCAL PARA ALUGAR TEXTO SOBRE O LOCAL PARA ALUGAR TEXTO SOBRE O LOCAL PARA ALUGAR TEXTO SOBRE O LOCAL PARA ALUGAR TEXTO SOBRE O LOCAL PARA ALUGAR</p>                                                <ul class="list">
                                                    <li>Exemplo 3</li>
                                                    <li>$5,860 por dia</li>
                                                    <li>1,250 Pessoas</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div id="map">
                                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3106.724034173435!2d-43.27685374322357!3d-23.003403908758767!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9bd6cbe74edde3%3A0x14e89f87adc702cc!2sMirante%20Ciclovia%20Sao%20Conrado!5e1!3m2!1sen!2sth!4v1630941324692!5m2!1sen!2sth" width="100%" height="240px" frameborder="0" style="border:0" allowfullscreen="" loading="lazy"></iframe>
                                                <h5>Localização</h5>
                                                <p>Local do Exemplo 3</p>
                                            <div class="text-button">
                                                <a href="ticket-details.html">Detalhes do Local <i class="fa fa-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </article>    
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="rent-venue-application">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="heading-text">
                        <h4>Pedido de Reserva</h4>
                    </div>
                    <div class="contact-form">
                        <form id="contact" action="" method="post">
                          <div class="row">
                            <div class="col-md-6 col-sm-12">
                              <fieldset>
                                <input name="name" type="text" id="name" placeholder="Seu Nome*" required="">
                              </fieldset>
                            </div>
                            <div class="col-md-6 col-sm-12">
                              <fieldset>
                                <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="Seu E-mail*" required="">
                              </fieldset>
                            </div>
                            <div class="col-md-6 col-sm-12">
                              <fieldset>
                                <input name="phone-number" type="text" id="phone-number" placeholder="Número de Telefone*" required="">
                              </fieldset>
                            </div>
                            
                            <div class="col-md-6 col-sm-12">
                              <fieldset>  {{-- AQ SEra UMA LISTA DE LUGARES --}}
                                <input name="venue-requested" type="text" id="venue-requested" placeholder="Local Solicitado *" required="">
                              </fieldset>
                            </div>
                            <div class="col-md-6 col-sm-12">
                              <fieldset>
                                <input name="type-event" type="text" id="type-event" placeholder="Tipo do Evento*" required="">
                              </fieldset>
                            </div>
                            <div class="col-md-6 col-sm-12">
                              <fieldset>{{-- AQ SEra UMA LISTA DE DATAS DISPONIVEIS --}}
                                <input name="date-requested-first" type="text" id="date-requested-first" placeholder="Data Solicitada para o Evento*" required="">
                              </fieldset>
                            </div>
                            
                            <div class="col-lg-12">
                              <fieldset>
                                <textarea name="about-event-hosting" rows="6" id="about-event-hosting" placeholder="Sobre o evento que você está organizando" required=""></textarea>
                              </fieldset>
                            </div>
                            <div class="col-lg-12">
                              <fieldset>
                                <button type="submit" id="form-submit" class="main-dark-button">Enviar solicitação</button>
                              </fieldset>
                            </div>
                          </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- *** Subscribe *** -->
    <div class="subscribe">
        <div class="container">
            <div class="row">
                {{-- <div class="col-lg-4">
                    <h4>Subscribe Our Newsletter:</h4>
                </div>
                <div class="col-lg-8">
                    <form id="subscribe" action="" method="get">
                        <div class="row">
                          <div class="col-lg-9">
                            <fieldset>
                              <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email Address" required="">
                            </fieldset>
                          </div>
                          <div class="col-lg-3">
                            <fieldset>
                              <button type="submit" id="form-submit" class="main-dark-button">Submit</button>
                            </fieldset>
                          </div>
                        </div>
                    </form>
                </div> --}}
            </div>
        </div>
    </div>

@endsection