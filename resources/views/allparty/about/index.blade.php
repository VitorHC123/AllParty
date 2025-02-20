@extends('allparty.layout_index.index')
@section('index')

    <!-- ***** About Us Page ***** -->
    <div class="page-heading-about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>AllParty</h2>
                    <span>Criado: 20 de Janeiro, 2025 em Cabrália Paulista</span>
                </div>
            </div>
        </div>
    </div>

    <div class="about-item">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="left-image">
                        <img src="assets/images/logoallparty.jpg" alt="party time" height="570px">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="right-content">
                        <div class="about-map-image">
                            <img src="assets/images/image_about.jpg" alt="party location">
                        </div>
                        <div class="down-content">
                            <h4>AllParty</h4>
                            <ul>
                                <li>Rua Vereador José Zapater Rios</li>
                                <li>Funcionamento: 07:00 AM - 16:00 PM</li>
                            </ul>
                            {{-- <span><i class="fa fa-ticket"></i> Tickets Starting From $34.00</span> --}}
                            <div class="main-dark-button">
                                {{-- <a href="ticket-details.html">Purchase Tickets</a> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="about-upcoming-shows">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <h2>Sobre o AllParty</h2>
                    <p><p>O AllParty é a plataforma perfeita para quem busca os melhores eventos da cidade. 
                        Nosso objetivo é conectar você aos momentos mais incríveis, seja para se divertir com amigos, 
                        viver novas experiências ou marcar presença nas festas mais badaladas. 
                        Aqui, você encontra uma variedade de eventos, desde shows e festivais até encontros 
                        exclusivos e celebrações especiais.</p>

                    <p> Nosso site é simples e intuitivo, com páginas que facilitam sua busca por eventos: 
                        Página Inicial, Sobre, Locação de Espaços, Eventos & Shows, Detalhes do Evento, 
                        Ingressos e Detalhes dos Ingressos. Navegue e descubra tudo o que a cidade tem a oferecer!</p></p>
                    <h4>Itens Restritos:</h4>
                    <ul>
                        <li>* Câmeras com Flash</li>
                        <li>* Alimentos e Bebidas</li>
                        <li>* Objetos com Efeitos Luminosos</li>
                    </ul>
                    <h4> Valores e Visão</h4>
                    <p>No AllParty, acreditamos que os melhores momentos da vida acontecem quando as pessoas se reúnem para celebrar,
                         compartilhar e se divertir. Nosso compromisso é proporcionar experiências inesquecíveis, 
                         sempre com qualidade, segurança e acessibilidade. Valorizamos a transparência, 
                         o respeito aos nossos usuários e a promoção de eventos que conectam pessoas de diferentes estilos e culturas.
                        </p>
                        <p>
                            Nossa Visão é ser a principal plataforma de eventos do país, 
                            criando um ambiente onde todos possam encontrar a festa ou evento perfeito para cada ocasião. 
                            Queremos facilitar a sua jornada, tornando cada evento acessível, empolgante e, acima de tudo, marcante.
                        </p>
                        <p>
                            Nosso objetivo é transformar cada encontro em uma experiência única, 
                            criando memórias que as pessoas vão levar para a vida toda.
                        </p>
                    <div class="text-button">
                        {{-- <a href="event-details.html">Need Directions? <i class="fa fa-arrow-right"></i></a> --}}
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="next-shows">
                        <h4><i class="fa fa-clock-o"></i>Obtenha ingressos para o próximo show</h4>
                        <ul>


                            <li>
                                <h5>Copacabana Festival</h5>
                                <span>Sep 24 Fri<br>08:30 AM - 11:00 PM</span>
                                <div class="icon-button">
                                    <a href="ticket-details.html">
                                        <i class="fa fa-shopping-cart"></i>
                                    </a>
                                </div>
                            </li>
                            

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="also-like">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Você também pode gostar...</h2>
                </div>

                
                <div class="col-lg-4">
                    <div class="like-item">
                        <div class="thumb">
                            <a href="event-details.html"><img src="assets/images/like-01.jpg" alt=""></a>
                            <div class="icons">
                                <ul>
                                    <li><a href="event-details.html"><i class="fa fa-arrow-right"></i></a></li>
                                    <li><a href="ticket-details.html"><i class="fa fa-ticket"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="down-content">
                            <span>Sept 10 to 14, 2021</span>
                            <a href="event-details.html"><h4>Wonder Land Music and Arts Festival</h4></a>
                        </div>
                    </div>
                </div>
                


            </div>
        </div>
    </div>


    <!-- *** Subscribe *** -->
    <div class="subscribe">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <h4>Trabalhe Conosco</h4>
                </div>
                <div class="col-lg-8">
                    <form id="subscribe" action="" method="get">
                        <div class="row">
                          <div class="col-lg-9">

                            <fieldset>
                                <input name="name" type="text" id="name"  placeholder="Nome" required="">
                              </fieldset>
                            <fieldset>
                              <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="E-mail" required="">
                            </fieldset>
                            <fieldset>
                                <input name="phone" type="text" id="phone"  placeholder="Telefone" required="">
                              </fieldset>
                              <br>
                          </div>
                          <div class="col-lg-9">
                            <fieldset>
                              <button type="submit" id="form-submit" class="main-dark-button">Enviar</button>
                            </fieldset>
                          </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection