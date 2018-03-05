<script>$(document.body).addClass('signup-page');</script>

<style>
	.form-group.has-mine .form-control {
		box-shadow: none;
	}
	.form-group.has-mine.is-focused .form-control {
		background-image: linear-gradient(#3c3c3c, #3c3c3c), linear-gradient(#D2D2D2, #D2D2D2);
	}
	.form-group.has-mine label.control-label,
	.form-group.has-mine .help-block {
		color: #3c3c3c;
	}

	.input-group.has-mine .form-control {
		box-shadow: none;
	}
	.input-group.has-mine.is-focused .form-control {
		background-image: linear-gradient(#3c3c3c, #3c3c3c), linear-gradient(#D2D2D2, #D2D2D2);
	}
	.input-group.has-mine label.control-label,
	.input-group.has-mine .help-block {
		color: #3c3c3c;
	}
</style>

<div class="wrapper">
	<div class="header header-filter" style="height:0px; background-image: url('resources/images/print10.png'); background-size: cover; background-position: top center;">

		<div class="container">
			<div class="row">
				<div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
					<div class="card card-signup">
						<form class="form" method="post" action="mail.php">
						
							<div class="header text-center" style="background-color: #7a7a7a;">
								<h4 style="color: white;">Contact</h4>
							</div>
							
							<div class="content">

								<div class="col-md-12 col-md-offset-0">
									<div class="form-group has-mine">
										<span class="form-group-addon">
											<i class="material-icons">face</i>
										</span>
										<input type="text" class="form-control" placeholder="Name" name="name">
									</div>
								</div>

								<div class="col-md-12 col-md-offset-0">
									<div class="form-group has-mine">
										<span class="form-group-addon">
											<i class="material-icons">email</i>
										</span>
										<input type="text" class="form-control" placeholder="Email" name="email">
									</div>
								</div>

								<div class="col-md-12 col-md-offset-0">
									<div class="form-group has-mine">
										<span class="form-group-addon">
											<i class="material-icons">subject</i>
										</span>
										<input type="text" class="form-control" placeholder="Subject" name="subject">
									</div>
								</div>

								<div class="col-md-12 col-md-offset-0">
									<div class="form-group has-mine">
										<span class="form-group-addon">
											<i class="material-icons">reorder</i>
										</span>
										<textarea class="form-control" placeholder="Content" name="content" rows="3"></textarea>
									</div>
								</div>

								<!--
								<div class="input-group has-mine">
									<span class="input-group-addon">
										<i class="material-icons">face</i>
									</span>
									<input type="text" class="form-control" placeholder="Name" name="name">
								</div>

								<div class="input-group">
									<span class="input-group-addon">
										<i class="material-icons">email</i>
									</span>
									<input type="text" class="form-control" placeholder="Email" name="email">
								</div>
								
								<div class="input-group">
									<span class="input-group-addon">
										<i class="material-icons">subject</i>
									</span>
									<input type="text" class="form-control" placeholder="Subject" name="subject">
								</div>

								<div class="input-group">
									<span class="input-group-addon">
										<i class="material-icons">reorder</i>
									</span>
									<textarea class="form-control" placeholder="Content" name="content" rows="3"></textarea>
								</div>
								-->
							</div>
							
							<div class="footer text-center">
								<input type="submit" class="btn btn-default btn-round btn-mg" value="send mail"></input>
							</div>
							
						</form>
					</div>
				</div>
			</div>
		</div>
		
	</div>
</div>