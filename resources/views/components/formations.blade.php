
    <section class="ftco-section ftco-no-pt">
    	<div class="container">
    		<div class="row justify-content-center mb-5">
          <div class="col-md-8 text-center heading-section ftco-animate">
          	<span class="subheading">Formation</span>
            <h2 class="mb-4">Nos Spécialités</h2>
            <p>Les spécialités de nos formations dans le domaine de l'industrie</p>
          </div>
        </div>
  			<div class="row tabulation mt-4 ftco-animate">
  				<div class="col-md-4">
						<ul class="nav nav-pills nav-fill d-md-flex d-block flex-column">
                            @for ($i = 1; $i < count($specs); $i++)
                                <li class="nav-item text-left">
                                    @if ($i == 1)
                                        <a class="nav-link active py-4" data-toggle="tab" href="#services-{{ $i }}"><span class="flaticon-analysis mr-2"></span> {{ $specs[$i - 1]->lib_spec }}</a>
                                    @else
                                        <a class="nav-link py-4" data-toggle="tab" href="#services-{{ $i }}"><span class="flaticon-analysis mr-2"></span> {{ $specs[$i - 1]->lib_spec }}</a>
                                    @endif
                                </li>
                            @endfor
						</ul>
					</div>
					<div class="col-md-8">
						<div class="tab-content">
						  <div class="tab-pane container p-0 active" id="services-1">
						  	<div class="img" style="background-image: url({{ asset('img/specialites/info.jpg') }});"></div>
						  	<h3><a href="#">Informatique</a></h3>
						  	<p>Le parcours des passionés des technologies du digital: Développement, Sécurité informatique, Conception de SI, Bases de données, Intelligence artificielle, etc.</p>
						  </div>
						  <div class="tab-pane container p-0 fade" id="services-2">
						  	<div class="img" style="background-image: url({{ asset('img/specialites/electronics.jpg') }});"></div>
						  	<h3><a href="#">Electronique</a></h3>
						  	<p>Formation sur les technologies embarquées, les systèmes électroniques et informatiques, les réseaux et la télécommunication.</p>
						  </div>
						  <div class="tab-pane container p-0 fade" id="services-3">
						  	<div class="img" style="background-image: url({{ asset('img/specialites/electrotech.jpg') }});"></div>
						  	<h3><a href="#">Electrotechnique</a></h3>
						  	<p>Formation pour les intéressés des circuits éléectriques, du courant et de ses applications dans nos équipements.</p>
						  </div>
						  <div class="tab-pane container p-0 fade" id="services-4">
						  	<div class="img" style="background-image: url({{ asset('img/specialites/mecatronic.jpg') }});"></div>
						  	<h3><a href="#">Mécatronique</a></h3>
						  	<p>Formation sur les technologies touchant au domaine de l'automobile et de l'électronique axée sur les véhicules de nos jours.</p>
						  </div>
						  <div class="tab-pane container p-0 fade" id="services-5">
						  	<div class="img" style="background-image: url({{ asset('img/specialites/alimentation.jpg') }});"></div>
						  	<h3><a href="#">Alimentation</a></h3>
						  	<p>Formation aux métiers de l'alimentation, de la nutrition et des sciences de production.</p>
						  </div>
						  <div class="tab-pane container p-0 fade" id="services-6">
						  	<div class="img" style="background-image: url({{ asset('img/specialites/production.jpg') }});"></div>
						  	<h3><a href="#">Production de masse</a></h3>
						  	<p>Formation sur les sytèmes et outils de production de masse dans l'industrie, les chaines de production et bien d'autres.</p>
						  </div>
						</div>
					</div>
				</div>
    	</div>
    </section>
