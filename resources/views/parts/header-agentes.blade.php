<header class="container-fluid sticky-top av-bg-white">
	<div class="row">
		<div class="w-100 bg-blue">
			<div class="container">
				<nav class="flex-center navbar-toggleable-sm bg-blue header-top flex-center">
					<li class="nav-item flex-center">
						<a class="nav-link" href="https://www.facebook.com/RoyalReservations" target="_blank"><i class="fa fa-facebook"></i></a>
					</li>
					<li class="nav-item flex-center">
						<a class="nav-link" href="https://twitter.com/royalRSV" target="_blank"><i class="fa fa-twitter"></i></a>
					</li>
					<li class="nav-item flex-center">
						<a class="nav-link" href="https://www.instagram.com/royalreservations/" target="_blank"><img class="pr-1" src="{{asset('img/icon-white-instagram.svg')}}" width="21px"></a>
					</li>
					<li class="nav-item flex-center">
						<a class="nav-link" href="https://www.youtube.com/channel/UC1N1ZjyI2_mOKQTq2BNOM0Q/videos" target="_blank"><img class="pr-1" src="{{asset('img/icon-white-youtube.svg')}}" width="21px"></a>
					</li>
				</nav>
			</div>	
		</div>
	</div>
	<div class="row">
		<div class="w-100 av-bg-white">
			<div class="container header-button d-none d-md-block">
				<ul class="nav nav-pills nav-justified menu-principal ">
					<li class="nav-item d-flex align-items-center">
						<a href="{{ lang_url("/") }}" style="cursor: pointer !important;" class="logo-header"><img class="pr-2" id="logo-royal" src="{{ asset('img/logo-royal.svg') }}" alt="" width="300" /></a>
					</li>
					<li class="nav-item dropdown d-flex align-items-center justify-content-center ">
						<a href="#grand-residences">Grand Residences Riviera Cancun</a>
					</li>
					<li class="nav-item dropdown d-flex align-items-center justify-content-center ">
						<a href="#the-royal-caribbean">
							The Royal Caribbean All Suites Resort
						</a>
					</li>
					<li class="nav-item d-flex align-items-center justify-content-center av-no-flex booking-now">
						&nbsp;<a href="" data-toggle="modal" data-target="#contacto"><i class="fa fa-phone pr-1 fa-lg"></i> <strong>Contáctanos</strong></a>&nbsp;
					</li>
				</ul>
			</div>
		</div>
	</div>

	<div class="row d-movil w-100" style="display: none; margin: 0;">
		<div class="w-100 av-bg-white" style="height: 80px; display: flex; justify-content:center; ">
			<a href="{{ lang_url("/") }}" style="cursor: pointer !important;" class="logo-header"><img class="pr-2" id="logo-royal" src="{{ asset('img/logo-royal.svg') }}" alt="" width="300" /></a>
			<a href="#" class="av-skyblue" style="padding-top: 18px; margin-left: 10px;" id="mostrarMenuMovil">
				<i class="fa fa-bars" aria-hidden="true"></i>
			</a>
		</div>	
	</div>

	<div class="row" id="menuMovil" style="display: none;">
		<div class="w-100" id="oculto">
			<div class="menu-oculto">
				<div class="scroll-movil">
					<div id="accordionMovil">
						<div class="card">
							<div id="headingOneMovil">
								<a href="#grand-residences" class="btn btn-link w-100 text-left" data-toggle="collapse" data-target="#collapseOneMovil" aria-expanded="true" aria-controls="collapseOneMovil">
									Grand Residences Riviera Cancun
								</a>
								<a href="#the-royal-caribbean" class="btn btn-link w-100 text-left" data-toggle="collapse" data-target="#collapseOneMovil" aria-expanded="true" aria-controls="collapseOneMovil">
									The Royal Caribbean All Suites Resort
								</a>
								<a href="#contacto-footer" class="btn btn-link w-100 text-left" style="background-color: #fdb319;">
									Contáctanos
								</a>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>
</header>


<!-- Modal -->
<div class="modal fade modal-manage" id="contacto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Contáctanos</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	<p>Si requieres más información, contacta a uno de nuestros representantes quien te ayudará a resolver todas tus dudas.</p>
        <p>
        <i class="fa fa-envelope-o" aria-hidden="true"></i> agentquestions@royalresorts.com <br>
        <i class="fa fa-phone" aria-hidden="true"></i> Toll free: 1 888 721 4420 <br>
        <i class="fa fa-phone" aria-hidden="true"></i> Lada sin costo: 01 800 020 1761<br>
        <i class="fa fa-phone" aria-hidden="true"></i> Elsewhere: +52 (998) 848 8226
		</p>

      </div>
      <!--
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
      </div>
  		-->
    </div>
  </div>
</div>