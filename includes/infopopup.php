<!-- This file is included in the main for show a pop-up in the screen for information about the website -->
<div class="card modal fade show" id="info-popup" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			
			<div class="modal-header">
				<h1 class="text-center">Captain's here !</h1>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>

			<div class="modal-body">

				<p>
					Ce site est encore en construction, il sera le troisième que j'ai réalisé et normalement le dernier. <br>
					La raison pour laquelle je refait pour la troisième fois mon site est que malgré ses 3 mois de vie 
					le dernier a pour moi mal vieillis et montre trop peu mes capacitées. <br> 
					J'ai donc décider de faire un dernier site, plus professionnel et avec beaucoup plus de technologies et une petite application web.
				</p>

			</div>
			
			<div class="modal-footer">
				<button data-dismiss="modal" class="btn btn-info">OK</button>
			</div>

		</div>
	</div>
</div>
<script type="text/javascript">
	$('#info-popup').modal('show');
</script>