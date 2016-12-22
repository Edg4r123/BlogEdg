<div class="row">
	<h1>Nueva entrada</h1>
	<div class="col s9">
		<form id="form-post">
			<div>
				<input type="text" name="titulo" id="titulo" placeholder="Introduce título aquí">
			</div>
			<div>
				<p><strong>Enlace permanente:</strong> <?php echo base_url(); ?></p>
			</div>
			<div class="input-field">
				<button class="btn waves-effect waves-light grey"><i class="material-icons">add_a_photo</i> Añadir objeto</button>
			</div>
			<div class="input-field">
				<textarea id="post-area"></textarea>
			</div>
		</form>
	</div>
	<div class="col s3">
		<div class="card blue-grey darken-1 post-publicar">
			<div class="card-content white-text">
				<div>
					<button class="btn">Guardar</button>
					<button class="btn right">Vista previa</button>
				</div>
				<div>
					<ul>
						<li>Estado: <span>Borrador</span> <a href="#">Editar</a></li>
						<li>Visibilidad: <span>Públicar</span> <a href="#">Editar</a></li>
					</ul>
				</div>
			</div>
			<div class="card-action">
				<a href="#">Eliminar</a>
				<a href="#" class="right">Publicar</a>
			</div>
		</div>
		<!-- categorias -->
		<div class="card blue-grey darken-1 post-categorias">
			<div class="card-content white-text">
				<span class="card-title">Categorias</span>
				<ul>
					<li>
						<p>
							<input type="checkbox" id="test5" />
							<label for="test5">Programación</label>
    					</p>
    				</li>
					<li>
						<p>
							<input type="checkbox" id="test6" />
							<label for="test6">Tecnología</label>
    					</p>
					</li>
				</ul>
				<a href="#" class="add-categoria"><i class="material-icons">add</i>Añadir categoría</a>
			</div>
		</div>
	</div>
</div>