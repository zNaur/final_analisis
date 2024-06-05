<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta
			name="viewport"
			content="width=device-width, initial-scale=1.0"
		/>
		<title>Producto</title>
		<link rel="stylesheet" href="css/producto.css" />
	</head>
	<body>
		<header>
			<h1>FinSist</h1>
		</header>

		<div class="container-title">Zapatos</div>

		<main>
			<div class="container-img">
				<img
					src="https://images.unsplash.com/photo-1560769629-975ec94e6a86?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=764&q=80"
					alt="imagen-producto"
				/>
			</div>
			<div class="container-info-product">
				

				<div class="container-details-product">
					<div class="form-group">
						<label for="colour">Color</label>
						<select name="colour" id="colour">
							<option disabled selected value="">
								Escoge una opción
							</option>
							<option value="rojo">Rojo</option>
							<option value="blanco">Blanco</option>
							<option value="beige">Beige</option>
						</select>
					</div>
					<div class="form-group">
						<label for="size">Talla</label>
						<select name="size" id="size">
							<option disabled selected value="">
								Escoge una opción
							</option>
							<option value="40">40</option>
							<option value="42">42</option>
							<option value="43">43</option>
							<option value="44">44</option>
						</select>
					</div>
					<button class="btn-clean">Limpiar</button>
				</div>

				<div class="container-add-cart">
					<div class="container-quantity">
						<input
							type="number"
							placeholder="1"
							value="1"
							min="1"
							class="input-quantity"
						/>
						<div class="btn-increment-decrement">
							<i class="fa-solid fa-chevron-up" id="increment"></i>
							<i class="fa-solid fa-chevron-down" id="decrement"></i>
						</div>
					</div>
					<button class="btn-add-to-cart">
						<i class="fa-solid fa-plus"></i>
						Invertir
					</button>
				</div>

				<div class="container-description">
					<div class="title-description">
						<h4>Descripción</h4>
						<i class="fa-solid fa-chevron-down"></i>
					</div>
					<div class="text-description">
						<p>
						Un emprendimiento de zapatos se centra en diseñar, fabricar y vender calzado, destacándose por su enfoque en la calidad, el diseño y la satisfacción del cliente en un mercado competitivo.
						</p>
					</div>
				</div>

				<div class="container-additional-information">
					<div class="title-additional-information">
						<h4>Información Emprendedor</h4>
						<i class="fa-solid fa-chevron-down"></i>
					</div>
					<div class="text-additional-information hidden">
						<p>Miguel Herazo</p>
						<p>Miguelherazo@gmail.com</p>
						<p>3004998554</p>
						
					</div>
				</div>

			

				<div class="container-social">
					<span>Compartir</span>
					<div class="container-buttons-social">
						<a href="#"><i class="fa-solid fa-envelope"></i></a>
						<a href="#"><i class="fa-brands fa-facebook"></i></a>
						<a href="#"><i class="fa-brands fa-twitter"></i></a>
						<a href="#"><i class="fa-brands fa-instagram"></i></a>
						<a href="#"><i class="fa-brands fa-pinterest"></i></a>
					</div>
				</div>
			</div>
		</main>

		

		

		<script
			src="https://kit.fontawesome.com/81581fb069.js"
			crossorigin="anonymous"
		></script>
		<script src="index.js"></script>
	</body>
</html>
