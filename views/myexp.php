<?php 
	
	// Ajout de la liste des expériences	
	require_once '../includes/experiences.php'; 
?>

<!-- Présentation de mes expériences professionnelles et scolaires -->
<div class="container-fluid">
	
	<h1 class="col-12 text-center text-Beautiful">Mes expériences professionnelles et personelles</h1>
	
	<br>
	<hr>
	<br><br>

	<!-- Accordéon de mes expériences (cf : collapse de bootstrap) -->
	<div id="experiences">

		<?php

			foreach ($experiences as $key => $value) {
				
		?>

			<div class="card">
				
				<div class="card-header text-center  p-0">
					
					<button class="btn bg-dark w-100 h-100" data-toggle="collapse" data-target="<?='#exp'.$key ?>" aria-expanded="true" aria-control="exp1">
					
						<h2 class="text-white explink"> <span> <?=$value['annee'] ?> </span> - <span> <?=$value['intitule'] ?> </span> </h2>
					
					</button>

				</div>

				<div class="collapse <?php if($key == 0){ echo 'show'; } ?>" id="<?='exp'.$key ?>" data-parent="#experiences">
					
					<div class="card-body p-0 pt-3 pb-3 container-fluid">
						
						<br>
						<div class="text-center offset-2 col-8 pt-2 pb-2 card">

							<h4>
								<i class="fas fa-handshake col-1"></i><span><?=$value['contrat'] ?></span>
							</h4>

							<h4>
								<i class="fas fa-building col-1"></i><span><?=$value['entreprise'] ?></span>
							</h4>

							<h4>
								<i class="fas fa-map-marker col-1"></i><span><?=$value['adresse'] ?></span>
							</h4>
						
						</div>

						<br>

						<div class="row p-4">

							<div class="col-6 card p-0">
								
								<h5 class="text-center card-header bg-secondary text-white">Travail réalisé : </h5>
								
								<div class="align-self-center">

									<ul class="p-2 explist">

										<?php 

											foreach ($value['travail'] as $k => $val) {
										
										?>

											<li> <?=$val ?> </li>

										<?php

											}

										?>

									</ul>
									
								</div>

							</div>

							<div class="col-6 card p-0">
								
								<h5 class="text-center card-header bg-secondary text-white">Compétences acquises : </h5>
								
								<div class="align-self-center">

									<ul class="p-2 explist">

										<?php 

											foreach ($value['competences'] as $k => $val) {
										
										?>

											<li> <?=$val ?> </li>

										<?php

											}

										?>

									</ul>

								</div>

							</div>
						
						</div>

					</div>
				
				</div>

			</div>

		<?php

			}
		
		?>
		

	</div>

</div>