@extends('allparty.layout_index.index')
@section('index')


    <!-- ***** About Us Page ***** -->
    <div class="page-heading-tickets-image">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Ingressos à venda agora!</h2>
                    <span>Confira shows e eventos futuros e passados ​​e adquira seu ingresso agora mesmo.</span>
                </div>
            </div>
        </div>
    </div>

    <div class="tickets-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="search-box">
                        <form id="subscribe" action="" method="get">
                            <div class="row">
                                <div class="col-lg-5">
                                    <div class="search-heading">
                                        <h4> Classifique os próximos eventos por:</h4>
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <select value="month">
                                                <option value="month">Meses</option>
                                                <option name="June" id="June">June</option>
                                                <option name="July" id="July">July</option>
                                                <option name="August" id="August">August</option>
                                                <option name="September" id="September">September</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-3">
                                            <select value="location">
                                                <option value="location">Localização</option>
                                                <option name="Brazil" id="Brazil">Brazil</option>
                                                <option name="Europe" id="Europe">Europe</option>
                                                <option name="US" id="US">US</option>
                                                <option name="Asia" id="Asia">Asia</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-3">
                                            <select value="month">
                                                <option value="month">Preço</option>
                                                <option name="min" id="min">$0 - $50</option>
                                                <option name="standard" id="standard">$50 - $100</option>
                                                <option name="hight" id="hight">$100 - $200</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-3">
                                            <fieldset>
                                            <button type="submit" id="form-submit" class="main-dark-button">Classificar</button>
                                            </fieldset>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="heading">
                        <h2>Página de ingressos</h2>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="ticket-item">
                        <div class="thumb">
                            <img src="assets/images/ticket-01.jpg" alt="">
                            <div class="price">
                                <span>1 ingresso<br>por <em>$25</em></span>
                            </div>
                        </div>
                        <div class="down-content">
                            <span>Restam 150 ingressos para este show</span>
                            <h4>Wonderful Festival</h4>
                            <ul>
                                <li><i class="fa fa-clock-o"></i> Thursday: 05:00 PM to 10:00 PM</li>
                                <li><i class="fa fa-map-marker"></i>908 Copacabana Beach, Rio de Janeiro</li>
                            </ul>
                            <div class="main-dark-button">
                                <a href="ticket-details.html">Comprar ingressos</a>
                            </div>
                        </div>
                    </div>
                </div>
               
                <div class="col-lg-12">
                    <div class="pagination">
                        <ul>
                            <li><a href="#">Anterior</a></li>
                            <li><a href="#">1</a></li>
                            <li class="active"><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">Próximo</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- *** Subscribe *** -->
    <div class="subscribe">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    {{-- <h4>Subscribe Our Newsletter:</h4> --}}
                </div>
                <div class="col-lg-8">
                    {{-- <form id="subscribe" action="" method="get">
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
                        </div> --}}
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection