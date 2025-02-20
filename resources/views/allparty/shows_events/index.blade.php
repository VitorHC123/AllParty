@extends('allparty.layout_index.index')
@section('index')

    <!-- ***** About Us Page ***** -->
    <div class="page-heading-shows-events">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Nossos shows e eventos</h2>
                    <span>Confira shows e eventos futuros e passados.</span>
                </div>
            </div>
        </div>
    </div>

    <div class="shows-events-tabs">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row" id="tabs">
                        <div class="col-lg-12">
                            <div class="heading-tabs">
                                <div class="row">
                                    <div class="col-lg-8">
                                        <ul>
                                          <li><a href='#tabs-1'>Por Vir</a></li>
                                          <li><a href='#tabs-2'>Passados</a></a></li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4">
                                          <div class="main-dark-button">
                                              <a href="ticket-details.html">Comprar Ingresso</a>
                                          </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <section class='tabs-content'>
                                <article id='tabs-1'>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="heading"><h2>Por Vir</h2></div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="sidebar">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="heading-sidebar">
                                                            <h4>Classifique os próximos shows e eventos por:</h4>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="month">
                                                            <h6>Meses</h6>
                                                            <ul>
                                                                <li><a href="#">July</a></li>
                                                                <li><a href="#">August</a></li>
                                                                <li><a href="#">September</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="category">
                                                            <h6>Categorias</h6>
                                                            <ul>
                                                                <li><a href="#">Pop Music</a></li>
                                                                <li><a href="#">Rock Music</a></li>
                                                                <li><a href="#">Hip Hop Music</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-9">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="event-item">
                                                        <div class="row">
                                                            <div class="col-lg-4">
                                                                <div class="left-content">
                                                                    <h4>Tiger Land Festival</h4>
                                                                    <p>Lorem ipsum dolor sit amet, consectetur do adipiscing eliterirt sed eiusmod alori...</p>
                                                                    <div class="main-dark-button"><a href="event-details.html">Descubra mais</a></div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <div class="thumb">
                                                                    <img src="assets/images/event-page-01.jpg" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <div class="right-content">
                                                                    <ul>
                                                                        <li>
                                                                            <i class="fa fa-clock-o"></i>
                                                                            <h6>Sep 24 Friday<br>11:20 AM - 10:20 PM</h6>
                                                                        </li>
                                                                        <li>
                                                                            <i class="fa fa-map-marker"></i>
                                                                            <span>Copacabana Beach, Rio de Janeiro</span>
                                                                        </li>
                                                                        <li>
                                                                            <i class="fa fa-users"></i>
                                                                            <span>540 Total Guests Attending</span>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                               

                                               
                                                <div class="col-lg-12">
                                                    <div class="pagination">
                                                        <ul>
                                                            <li><a href="#">Prev</a></li>
                                                            <li><a href="#">1</a></li>
                                                            <li class="active"><a href="#">2</a></li>
                                                            <li><a href="#">3</a></li>
                                                            <li><a href="#">Next</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article> 
                                
                                
                                <article id='tabs-2'>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="heading"><h2>Passados</h2></div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="sidebar">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="heading-sidebar">
                                                            <h4>Classifique os próximos shows e eventos por:</h4>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="month">
                                                            <h6>Meses</h6>
                                                            <ul>
                                                                <li><a href="#">July</a></li>
                                                                <li><a href="#">August</a></li>
                                                                <li><a href="#">September</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="category">
                                                            <h6>Categorias</h6>
                                                            <ul>
                                                                <li><a href="#">Pop Music</a></li>
                                                                <li><a href="#">Rock Music</a></li>
                                                                <li><a href="#">Hip Hop Music</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="venues">
                                                            <h6>Venues</h6>
                                                            <ul>
                                                                <li><a href="#">Radio City Musical Hall</a></li>
                                                                <li><a href="#">Madison Square Garden</a></li>
                                                                <li><a href="#">Royce Hall</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-9">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="event-item">
                                                        <div class="row">
                                                            <div class="col-lg-4">
                                                                <div class="left-content">
                                                                    <h4>Water Splash Festival</h4>
                                                                    <p>Lorem ipsum dolor sit amet, consectetur do adipiscing eliterirt sed eiusmod alori...</p>
                                                                    <div class="main-dark-button"><a href="event-details.html">Discover More</a></div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <div class="thumb">
                                                                    <img src="assets/images/event-page-04.jpg" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <div class="right-content">
                                                                    <ul>
                                                                        <li>
                                                                            <i class="fa fa-clock-o"></i>
                                                                            <h6>April 24 Friday<br>12:00 AM - 12:00 PM</h6>
                                                                        </li>
                                                                        <li>
                                                                            <i class="fa fa-map-marker"></i>
                                                                            <span>Copacabana Beach, Rio de Janeiro</span>
                                                                        </li>
                                                                        <li>
                                                                            <i class="fa fa-users"></i>
                                                                            <span>528 Total Guests Attending</span>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                



                                                <div class="col-lg-12">
                                                    <div class="pagination">
                                                        <ul>
                                                            <li><a href="#">Prev</a></li>
                                                            <li><a href="#">1</a></li>
                                                            <li class="active"><a href="#">2</a></li>
                                                            <li><a href="#">3</a></li>
                                                            <li><a href="#">Next</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
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


    <!-- *** Subscribe *** -->
    <div class="subscribe">
        <div class="container">
            <div class="row">
                {{-- <div class="col-lg-4">
                    <h4>Subscribe Our Newsletter:</h4>
                </div> --}}
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
                        </div>
                    </form> --}}
                </div>
            </div>
        </div>
    </div>

@endsection