				
			<!-- Footer -->
			<!-- <footer>
				<div class="container">
					<div class="card">
						<div class="card-content">
							<p>2016 Soluciones web</p>
						</div>
					</div>
				</div>
			</footer> -->
		</div>
	</div>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-2.2.1.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/materialize.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.dataTables.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/dataTables.select.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/main.js"></script>
	<script type="text/javascript" src="https://use.fontawesome.com/ee823df523.js"></script>
	<script>
		$(function () {
			$("#entradas-table").dataTable({
				columnDefs : [
					{"orderable" : false, "targets" : 0, "className" : "select-checkbox"},
					{"width" : "35%", "targets" : 1}
				],
				select : {
					style : "os",
					selector : "td:first-child"
				},
				order : [[ 1, "asc" ]]
			});
			$("#usuarios-table").dataTable({
				columnDefs : [
					{"orderable" : false, "targets" : 0, "className" : "select-checkbox"},
					{"width" : "30%", "targets" : 1},
					{"width" : "20%", "targets" : 2}
				],
				select : {
					style : "os",
					selector : "td:first-child"
				},
				order : [[ 1, "asc" ]]
			});
		});
	</script>
</body>
</html>