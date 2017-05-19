
<!DOCTYPE html>
<html lang="nl">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="author" content="Opifer.nl">
	<meta name="description" content="">
	<title>Bootstrap</title>

	<link rel="stylesheet" href="css/main.css">
</head>
<body>

    <div class="container m-y-md">
        <div class="row">
            <div class="col-lg-8 col-offset-2">
                <div class="wrapper">
					 <div>
						<a href="php/get_schema.php">Test info</a>
					</div>
					<form id="setSchema" action="php/save_schema.php" method="post">
						<!--<label class="checkbox-inline"><input type="checkbox" name="oefening1" value="lagerugklacht" />Oefening lage rugklacht</label>-->
						<!--<label class="checkbox-inline"><input type="checkbox" name="oefening2" value="nekklacht"  />Oefening nek klacht</label>-->
						<!--<label class="checkbox-inline"><input type="checkbox" name="oefening3" value="schouderklacht"  />Oefening schouder klacht</label>-->
						<!--<label class="checkbox-inline"><input type="checkbox" name="oefening4" value="armklacht"  />Oefening arm klacht</label>-->

						<div class="container m-y-md">
							<div class="row">
								<div class="col-lg-8 col-offset-2">
									<div class="wrapper">  
										<!--main-->	

											<div class="col-xs-12 col-md-3">
												<!-- Card -->
												<article class="card">
													<input type="checkbox" id="cb1" name="oefening1" value="Rug hol-bol maken,Rug-hol-bol-maken"/>
													<label class="label-checked" for="cb1">
														<img src="img/Rug-hol-bol-maken.jpeg" class="card-img-top img-responsive"/>
													</label>
													<div class="card-block">
														<h4 class="card-title">Rug hol-bol maken</h4>
														<h6 class="text-muted">George Orwell</h6>
														<p class="card-text">
															<div class="form-group form-group-sm">
																<label for="reps1" class="shortdescription">Herhalingen oefening 1:</label>
																<input type="number" name="herhaling1" id="reps1" class="form-control">
															</div>
															<div class="form-group form-group-sm">
																<label for="set1" class="shortdescription">Sets oefening 1:</label>
																<input type="number" name="set1" id="set1" class="form-control">
															</div>
														</p>
													</div>
												</article><!-- .end Card -->
											</div>

											<div class="col-xs-12 col-md-3">
												<!-- Card -->
												<article class="card">
													<input type="checkbox" id="cb2" name="oefening2" value="Nek draaien van links naar rechts,Nek-draaien-van-links-naar-rechts"/>
													<label class="label-checked" for="cb2">
														<img src="img/Nek-draaien-van-links-naar-rechts.jpeg" class="card-img-top img-responsive"/>
													</label>
													<div class="card-block">
														<h4 class="card-title">Nek draaien van links naar rechts</h4>
														<h6 class="text-muted">George Orwell</h6>
														<p class="card-text">
															<div class="form-group form-group-sm">
																<label for="reps2" class="shortdescription">Herhalingen oefening 2:</label>
																<input type="number" name="herhaling2" id="reps2" class="form-control">
															</div>
															<div class="form-group form-group-sm">
																<label for="set2" class="shortdescription">Sets oefening 2:</label>
																<input type="number" name="set2" id="set2" class="form-control">
															</div>
														</p>
													</div>
												</article><!-- .end Card -->
											</div>

											<div class="col-xs-12 col-md-3">
												<!-- Card -->
												<article class="card">
													<input type="checkbox" id="cb3" name="oefening3" value="Schouder mobiliteit,Schouder-mobiliteit"/>
													<label class="label-checked" for="cb3">
														<img src="img/Schouder-mobiliteit.jpeg" class="img-responsive"/>
													</label>
													<div class="card-block">
														<h4 class="card-title">Schouder mobiliteit</h4>
														<h6 class="text-muted">George Orwell</h6>
														<p class="card-text">
															<div class="form-group form-group-sm">
																<label for="reps3" class="shortdescription">Herhalingen oefening 3:</label>
																<input type="number" name="herhaling3" id="reps3" class="form-control">
															</div>
															<div class="form-group form-group-sm">
																<label for="set3" class="shortdescription">Sets oefening 3:</label>
																<input type="number" name="set3" id="set3" class="form-control">
															</div>
														</p>
													</div>
												</article><!-- .end Card -->
											</div>             
												
											<div class="col-xs-12 col-md-3">
												<!-- Card -->
												<article class="card">
													<input type="checkbox" id="cb4" name="oefening4" value="Rekoefening armen en bovenrug,Rekoefening-armen-en-bovenrug"/>
													<label class="label-checked" for="cb4">
														<img src="img/Rekoefening-armen-en-bovenrug.jpeg" class="img-responsive"/>
													</label>
													<div class="card-block">
														<h4 class="card-title">Rekoefening armen en bovenrug</h4>
														<h6 class="text-muted">George Orwell</h6>
														<p class="card-text">
															<div class="form-group form-group-sm">
																<label for="reps4" class="shortdescription">Herhalingen oefening 4:</label>
																<input type="number" name="herhaling4" id="reps4" class="form-control">
															</div>
															<div class="form-group form-group-sm">
																<label for="set4" class="shortdescription">Sets oefening 4:</label>
																<input type="number" name="set4" id="set4" class="form-control">
															</div>
														</p>
													</div>
												</article><!-- .end Card -->
											</div>					
										</div><!--/main row-->
									</div><!--/main-->				
								</div>
							</div>
						</div> 
					</div>
					
						<div class="form-group">
							<label for="vnaam">Naam client:</label>
							<input type="text" class="form-control" id="vnaam" name="voornaam" placeholder="Voornaam">
							<input type="text" class="form-control" id="anaam" name="achternaam" placeholder="Achternaam">
						</div>
						<div class="form-group">
							<label for="bday">Geboortejaar:</label>
							<input type="date" class="form-control" id="bday" name="bday" placeholder="yyyy">
						</div>

						<div class="form-group">
							<label for="bday">Hoofddoel:</label>
							<input type="text" class="form-control" id="maingoal" name="maingoal" placeholder="hoofddoel">
						</div>
						<div class="form-group">
							<label for="bday">Subgoal:</label>
							<input type="text" class="form-control" id="subgoal" name="subgoal" placeholder="subdoel">
						</div>

						<a data-toggle="collapse" data-target="#demo"><i class="fa fa-plus"></i> Voeg subdoelen toe</a>
						<div id="demo" class="collapse">
							<div class="form-group">
								<label for="bday">Subgoal 2:</label>
								<input type="text" class="form-control" id="subgoal" name="subgoal2" placeholder="subdoel2">
							</div>
							<div class="form-group">
								<label for="bday">Subgoal 3:</label>
								<input type="text" class="form-control" id="subgoal" name="subgoal3" placeholder="subdoel3">
							</div>
						</div>

						<div class="form-group">
							<label for="bday">e-mail:</label>
							<input type="email" name="email" class="form-control" placeholder="example@hotmail.com">
						</div>

						<button type="button" class="generateToken" class="btn btn-default">generateToken</button>
						<input type="text" class="showToken" name="token">
						<!--<a href="overview.html"><button class="btn btn-default">Volgende</button></a>-->
						<input type="submit" value="submit" />
					</form>

					<a data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i> Client toevoegen</a>
				</div>
            </div>
        </div> 
    </div>

	<!-- Modal -->
	<div id="myModal" class="modal fade" role="dialog">
	<div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title">Client toevoegen</h4>
		</div>
		<div class="modal-body">
			<form action="php/save_schema.php" method="post">
				<div class="form-group">
					<label for="vnaam">Naam client:</label>
					<input type="text" class="form-control" id="vnaam" name="name[]" placeholder="Voornaam">
					<input type="text" class="form-control" id="anaam" name="name[]" placeholder="Achternaam">
				</div>
				<div class="form-group">
					<label for="bday">Geboortejaar:</label>
					<input type="date" class="form-control" id="bday" name="bday" placeholder="yyyy">
				</div>
		</div>
		<div class="modal-footer">
			<input type="submit" class="btn btn-default" value="submit" />
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		</div>
		</form>
		</div>
	</div>
	</div>

	<script src="js/app.js"></script>
</body>
</html>