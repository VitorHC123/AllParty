@extends('allparty.layout_index.index')
@section('index')


    <!-- ***** About Us Page ***** -->
    <div class="page-heading-rent-venue">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Listagem de eventos</h2>
                    <span>Confira nossos últimos Shows e Eventos e faça parte de nós.</span>
                </div>
            </div>
        </div>
    </div>

    <div class="shows-events-schedule">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>Listagem De Eventos</h2>
                    </div>
                </div>
                <div class="col-lg-12">
                    <ul>
                        <li>
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="title">
                                        <h4>Sunny Hill Festival</h4>
                                        <span>140 Tickets Available</span>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="time"><span><i class="fa fa-clock-o"></i> Sep 16, 2021<br>18:00 to 22:00</span></div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="place"><span><i class="fa fa-map-marker"></i>Copacabana Beach, <br>Rio de Janeiro</span></div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="main-dark-button">
                                        <a href="ticket-details.html">Purchase Tickets</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                       
                    </ul>
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
                    <form id="subscribe" action="" method="get">
                        {{-- <div class="row">
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