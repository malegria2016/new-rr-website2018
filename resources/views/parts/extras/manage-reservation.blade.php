<div class="modal fade modal-manage" id="manageReservation" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">

	<div class="modal-dialog" role="document">

		<div class="modal-content" style="">

			<div class="modal-header" style="">

				<div class="w-100 text-center py-2">

					<h5 class="modal-title av-white text-uppercase" id="exampleModalLongTitle">{{ __('general.manage_reservation.title') }}</h5>

				</div>

				<button type="button" class="close" data-dismiss="modal" aria-label="Close">

					<span aria-hidden="true">&times;</span>

				</button>

			</div>

			<form action="https://reservations.travelclick.com/bookings.jsp" method="GET" target="_blank" id="formModalReservation" name="formModalReservation">

			<div class="modal-body" style="">

				<div class="container">

					<div class="row">

						<div class="col-12">

							<p>{{ __('general.manage_reservation.description1') }}</p>

						</div>

					</div>

					<div class="row">

						<div class="col-12">

							<form action="" class="form-inline">

								<div class="manage-reservation">

									<div class="destination-combo">

										

										<select class="form-control" name="hotelid" id="hotelid">

											<option value="0">{{ __('general.manage_reservation.choose_resort') }}</option>

											<option value="86169">The Royal Sands Resort & Spa All Inclusive</option>

											<option value="86182">The Royal Islander All Suites Resort</option>

											<option value="86175">The Royal Caribbean All Suites Resort</option>

											<option value="73601">The Royal Cancun All Suites  Resort</option>

											<option value="95939">Grand Residences Riviera Cancun Resort</option>

											<option value="86184">The Royal Haciendas All Suites Resort & Spa</option>

											<option value="86180">The Villas at Simpson Bay Beach Resort & Marina</option>

											<option value="86179">Simpson Bay Beach Resort & Marina</option>

											<option value="86181">The Royal Sea Aquarium Resort</option>

											<option value="85285">Ancora Punta Cana Private Residence Yacht Club</option>

											<option value="86117">Del Mar Ocean Front Resort by Joy Resorts</option>

											<option value="106514">Casa de Campo Resort and Villas Punta Cana</option>

										</select>

									

										

									</div>

									<div class="manage-input">

										<input type="text" class="form-control mr-3 mb-4" id="inputEmailManage" name="confirmId" aria-describedby="emailHelp" required placeholder="{{ __('general.manage_reservation.confirmation') }}">



									</div>

									<div class="manage-button">

										<button type="submit" class="btn text-uppercase mb-3 bg-blue text-white">{{ __('general.manage_reservation.btn') }}</button>

									</div>

								</div>

							</form>

						</div>

						<div class="col-12 pb-4">

							<hr>

							<small id="emailHelp" class="form-text d-none d-md-block">{{ __('general.manage_reservation.description2') }}</small>

						</div>

					</div>

				</div>

			</div>

			</form>

		</div>

	</div>

</div>