<div class="row">
	<div class="col-xl-12">
		<div class="card">
			<div class="card-header header-elements-inline">
				<div class="caption">
					<h5 class="card-title"><i class="icon icon-cogs"></i>Active Id's List</h5>
				</div>
			</div>
			<div id="active-id"></div>
			<script type="application/javascript">
				makeReportPage($("#active-id"), "list_active_id", {

					datatable: {
						"order": [[0, 'desc']],
						columns: [
							{
								title: 'Nombre',
								data: 'name',
							},
							{
								title: 'Celular',
								data: 'mobile',
							},
							{
								title: 'Email',
								data: 'email',
							},
							{
								title: 'Fecha Creacion',
								data: 'created',
							},
							{
								title: "Usuario",
								data: "username",
							},
							{
								title: 'Documento',
								data: 'sponserid',
								render: function(data){
									return getUsernameFromID(data)
								}
							}
							
						]
					}
				});
			</script>
		</div>
	</div>
</div>



