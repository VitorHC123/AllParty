@extends('allparty.layout_index.index')
@section('index')
    
    <!-- ***** Header Area End ***** -->

    <!-- ***** Main Banner Area Start ***** -->
    <div class="main-banner">
        {{-- <div class="counter-content">
            <ul>
                <li>Dias<span id="days"></span></li>
                <li>Horas<span id="hours"></span></li>
                <li>Minutos<span id="minutes"></span></li>
                <li>Segundos<span id="seconds"></span></li>
            </ul>
        </div> --}}
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="main-content">
                        {{-- <div class="next-show">
                            <i class="fa fa-arrow-up"></i>
                            <span>Next Show</span>
                        </div> --}}
                        <h6>Festas, conferências, shows e muito mais. Veja os melhores eventos da sua cidade.</h6>
                        <h2>Encontre o melhor evento para você</h2>
                        <div class="main-white-button">
                            <a href="ticket-details.html">Comprar ingressos</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

    <!-- *** Owl Carousel Items ***-->
    <div class="show-events-carousel">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="owl-show-events owl-carousel">
                        <div class="item">
                            <a href="event-details.html"><img src="/assets/images/show-events-01.jpg" alt=""></a>
                        </div>
                        <div class="item">
                            <a href="event-details.html"><img src="/assets/images/show-events-02.jpg" alt=""></a> 
                        </div>
                        <div class="item">
                            <a href="event-details.html"><img src="/assets/images/show-events-03.jpg" alt=""></a> 
                        </div>
                        <div class="item">
                            <a href="event-details.html"><img src="/assets/images/show-events-04.jpg" alt=""></a> 
                        </div>
                        <div class="item">
                            <a href="event-details.html"><img src="/assets/images/show-events-01.jpg" alt=""></a> 
                        </div>
                        <div class="item">
                            <a href="event-details.html"><img src="/assets/images/show-events-02.jpg" alt=""></a> 
                        </div>
                        <div class="item">
                            <a href="event-details.html"><img src="/assets/images/show-events-03.jpg" alt=""></a> 
                        </div>
                        <div class="item">
                            <a href="event-details.html"><img src="/assets/images/show-events-04.jpg" alt=""></a> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <!-- *** Amazing Venus ***-->
    <div class="amazing-venues">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="left-content">
                        <h4>AllParty: Seu Portal para Ingressos e Eventos Inesquecíveis</h4>
                        <p>O AllParty é um site completo para quem busca estar por dentro dos melhores eventos e garantir ingressos de forma rápida e prática. 
                            Com uma ampla variedade de opções, o site oferece ingressos para eventos de todos os tipos, como shows, festas, festivais,
                             peças de teatro, conferências e muito mais. Com uma interface intuitiva e segura, o AllParty facilita a compra online, 
                             garantindo que você nunca perca uma grande ocasião. Se você está em busca de diversão, entretenimento e momentos inesquecíveis, 
                             o AllParty é o seu portal ideal.</p>
                        <br>
                        <p>O AllParty é a plataforma ideal para quem busca eventos variados e ingressos de forma fácil e segura. Com opções para shows, 
                            festas e mais, oferece praticidade e agilidade para garantir sua diversão.</p>
                    </div>
                </div>
                {{-- <div class="col-lg-3">
                    <div class="right-content">
                        <h5><i class="fa fa-map-marker"></i> Visit Us</h5>
                        <span>5 College St NW, <br>Norcross, GA 30071<br>United States</span>
                        <div class="text-button"><a href="show-events-details.html">Need Directions? <i class="fa fa-arrow-right"></i></a></div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>


    <!-- *** Map ***-->
    <div class="map-image">
        <img src="/assets/images/wallpaper.jpg" alt="imagem da tela principal">
    </div>


    <!-- *** Venues & Tickets ***-->
    <div class="venue-tickets">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>Nossos locais e ingressos</h2>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="venue-item">
                        <div class="thumb">
                            <img src="/assets/images/venue-01.jpg" alt="">
                        </div>
                        <div class="down-content">
                            <div class="left-content">
                                <div class="main-white-button">
                                    <a href="ticket-details.html">Comprar ingressos</a>
                                </div>
                            </div>
                            <div class="right-content">
                                <h4>Radio City Musical Hall</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur vinzi iscing elit, sed doers kontra.</p>
                                <ul>
                                    <li><i class="fa fa-sitemap"></i>250</li>
                                    <li><i class="fa fa-user"></i>500</li>
                                </ul>
                                <div class="price">
                                    <span>1 ticket<br>from <em>$45</em></span>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
               
               
            </div>
        </div>
    </div>


    <!-- *** Coming Events ***-->
    <div class="coming-events">
        <div class="left-button">
            <div class="main-white-button">
                <a href="shows-events.html">Descubra mais</a>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="event-item">
                        <div class="thumb">
                            <a href="event-details.html"><img src="/assets/images/event-01.jpg" alt=""></a>
                        </div>
                        <div class="down-content">
                            <a href="event-details.html"><h4>Radio City Musical Hall</h4></a>
                            <ul>
                                <li><i class="fa fa-clock-o"></i> Tuesday: 15:30-19:30</li>
                                <li><i class="fa fa-map-marker"></i> Copacabana Beach, Rio de Janeiro</li>
                            </ul>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>


    <!-- *** Subscribe *** -->
    {{-- <div class="subscribe">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
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
                </div>
            </div>
        </div>
    </div> --}}

@endsection