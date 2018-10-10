<!-- Page Content -->
<div class="container" style="margin-top:50px">

	<!-- Page Heading -->
	<h1 class="my-4"></h1>
	<!-- ROW -->
	<div class="row">

		<!-- FEED BERITA -->
		<div class="col-lg-8">

			<div class="table-container">
				<!-- table feed -->
				<table class="table table-filter">
					<tbody>
						<tr>
							<td>
								<div class="media">
								<div class="media-body text-white">
										<span class="media-meta pull-right">Januari 13, 2018</span>
										<h4 class="title">
											@foreach($beritas as $berita)
											$berita;
											@endforeach
											<span class="pull-right"></span>
										</h4>
										<p class="summary">Isi berita Isi berita Isi berita Isi berita Isi berita Isi berita Isi berita Isi berita </p>
									</div>
								</div>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
			<!-- end table feed -->
		</div>

		<!-- FORM BERITA -->
		<div class="col-lg-4">
			<div class="container">
				<div class="row">
					<div class="card card-signin my-5">
						<div class="card-body">
							<h5 class="card-title text-center">Kirim Berita</h5>
							<form method="post" action="http://localhost/senkom/public/berita/kirim" class="form-berita">
								{{ csrf_field() }}
								<div class="form-label-group">
									<input type="text" id="inputCallsign" class="form-control" name="callsign" required autofocus>
									<label for="inputCallsign">CallSign *</label>
								</div>
								<div class="form-label-group">
									<input type="text" id="inputTlp" class="form-control" placeholder="Tlp / HP" name="tlp" required autofocus>
									<label for="inputTlp">Tlp / Hp</label>
								</div>
								<div class="form-label-group">
									<input type="text" id="inputPesan" class="form-control" placeholder="Pesan anda" name="pesan" required autofocus>
									<label for="inputPesan">Pesan</label>
								</div>
								<div class="form-label-group">
									<input type="text" id="inputCaptca" class="form-control" placeholder="Captca" name="captca">
									<label for="inputCaptca">Captca</label>
								</div>
								<button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Kirim</button>
								<hr class="my-4">
							</form>
						</div>
					</div>
				</div>
			</div>

		</div>
		<!-- END FORM BERITA -->

	</div>


	<!-- /.row -->
</div>




<style>
	:root {
		--input-padding-x: 1.5rem;
		--input-padding-y: .75rem;
	}

	body {
		background: #9CECFB;
		/* fallback for old browsers */
		background: -webkit-linear-gradient(to right, #0052D4, #65C7F7, #9CECFB);
		/* Chrome 10-25, Safari 5.1-6 */
		background: url(../img/bg-pattern.png),linear-gradient(to left,#7b4397,#dc2430);

		/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
	}

	.card-signin {
		border: 0;
		border-radius: 1rem;
		box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.1);
	}

	.card-signin .card-title {
		margin-bottom: 2rem;
		font-weight: 300;
		font-size: 1.5rem;
	}

	.card-signin .card-body {
		padding: 2rem;
	}

	.form-signin {
		width: 100%;
	}

	.form-signin .btn {
		font-size: 80%;
		border-radius: 5rem;
		letter-spacing: .1rem;
		font-weight: bold;
		padding: 1rem;
		transition: all 0.2s;
	}

	.form-label-group {
		position: relative;
		margin-bottom: 1rem;
	}

	.form-label-group input {
		border-radius: 2rem;
	}

	.form-label-group>input,
	.form-label-group>label {
		padding: var(--input-padding-y) var(--input-padding-x);
	}

	.form-label-group>label {
		position: absolute;
		top: 0;
		left: 0;
		display: block;
		width: 100%;
		margin-bottom: 0;
		/* Override default `<label>` margin */
		line-height: 1.5;
		color: #495057;
		border: 1px solid transparent;
		border-radius: .25rem;
		transition: all .1s ease-in-out;
	}

	.form-label-group input::-webkit-input-placeholder {
		color: transparent;
	}

	.form-label-group input:-ms-input-placeholder {
		color: transparent;
	}

	.form-label-group input::-ms-input-placeholder {
		color: transparent;
	}

	.form-label-group input::-moz-placeholder {
		color: transparent;
	}

	.form-label-group input::placeholder {
		color: transparent;
	}

	.form-label-group input:not(:placeholder-shown) {
		padding-top: calc(var(--input-padding-y) + var(--input-padding-y) * (2 / 3));
		padding-bottom: calc(var(--input-padding-y) / 3);
	}

	.form-label-group input:not(:placeholder-shown)~label {
		padding-top: calc(var(--input-padding-y) / 3);
		padding-bottom: calc(var(--input-padding-y) / 3);
		font-size: 12px;
		color: #777;
	}

	.btn-google {
		color: white;
		background-color: #ea4335;
	}

	.btn-facebook {
		color: white;
		background-color: #3b5998;
	}
</style>