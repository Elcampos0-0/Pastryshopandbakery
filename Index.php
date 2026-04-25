<!DOCTYPE html>
<html lang = "es">
<head>

		<meta charset="utf-8">
		<meta name= "viewport" content= "width-device-width, initial-scale=1">
		<title>The Fun Cake</title>
        <link rel="icon" type="img/jpg" href="OIP.jpg">
        <link rel = "stylesheet" type = "text/css" href = "estilos.css">
		<center><h1>Pastry shop and bakery</h1></center>
        
</head>
        <div class = "nave">
        <nav id = "a">
            <a href = "#productos">| Ver catálogo |</a>
            <a href = "#pedido">| Hacer pedido |</a>
            <a href = "#descuento">| Descuentos |</a>
            <a href = "#redes">| Redes sociales |</a>
        </nav>
        </div>

        <br><br>
        <div class="contenedor">
        <img src="OIP.jpg" alt="The Fun Cake" class = "Primera">
        </div>

	<body>
        <br><br>
		<center><h2>Cada receta conserva el sabor auténtico de lo hecho en casa, con ingredientes de calidad y el cuidado que convierte cada pieza en un recuerdo dulce. Somos fieles a la idea de que un buen pan y un buen pastel no solo alimentan, sino que también acompañan los momentos más importantes de la vida.</h2></center>
        <br><br>
    <section id = "productos" class = "C0">
        <h2>Nuestros productos</h2>
    </section>

    <section class = "caja1">
        
        <table width = "70%">
        <tr>
            <td width = "40%">
                <img src = "Choc.jpg" alt = "Chocolate cake" width = 300px height = 250px>
            </td>
            <td>
                <h3>Pastel de chocolate</h3>
                <p>Composición de un cremoso bizcocho húmedo con 70% de cacao y cobertura de ganache.</p>
                <p><em>Opciones de sabor:</em></p>
                <ol>
                    <li>Chocolate amargo</li>
                    <li>Chocolate con avellanas</li>
                    <li>Chocolate blanco</li>
                </ol>
            </td>
            </tr>
        </table>
    </section>
    <section class = "caja2">
        <table width = "70%">
        <tr>
            <td width = "40%">
                <img src = "Gelfres.jpg" alt = "Strawberry gelato" width = 300px height = 250px>
            </td>
            <td>
                <h3>Gelatina de fresa</h3>
                <p>Mezcla frutal determinada por las dulces notas de las fresas en entorno local natural.</p>
                <p><em>Opciones de sabor:</em></p>
                <ol>
                    <li>Unidad de Tres Leches</li>
                    <li>Unidad con gomitas de sabor</li>
                    <li>Unidad con galletas trituradas</li>
                </ol>
            </td>
        </table>
    </section>
    <section class = "caja3">
        <table width = "70%">
            <tr>
            <td width = "40%">
                <img src = "Galvain.jpg" alt = "Vanilla cookie" width = 300px height = 250px>
            </td>
            <td>
                <h3>Galletas de vainilla</h3>
                <p>Amalgamado procesado con leves notas de cálida vainilla más un aroma de canela molida.</p>
                <p><em>Opciones de sabor:</em></p>
                <ol>
                    <li>Paquete de sabor avena</li>
                    <li>Paquete con relleno de cacao</li>
                    <li>Paquete de ralladura de coco</li>
                </ol>
            </td>
            </tr>
        </table>
    </section>
    <section class = "caja4">
        <table width = "70%">
            <tr>
            <td width = "40%">
                <img src = "Payqueso.jpg" alt = "Cheese pay" width = 300px height = 250px>
            </td>
            <td>
                <h3>Pay de queso</h3>
                <p>Obra culinaria refrigerada y guardada con su estructura láctea refinada para el gusto más selecto.</p>
                <p><em>Opciones de sabor:</em></p>
                <ol>
                    <li>Versión en nuez y dátil</li>
                    <li>Versión en notas de mango</li>
                    <li>Versión en aroma de limón</li>
                </ol>
            </td>
            </tr>
        </table>
    </section>
    <section class = "caja5">
        <table width = "70%">
            <tr>
            <td width = "40%">
                <img src = "Cup.jpg" alt = "Cupcakes" width = 300px height = 250px>
            </td>
            <td>
                <h3>Cupcakes</h3>
                <p>Pastelillo de composiciones frescas pero dulces que hacen disfrutar hasta el paladar más exigente.</p>
                <p><em>Opciones de sabor:</em></p>
                <ol>
                    <li>Pastelillo acompañado de almíbar</li>
                    <li>Pastelillo red velvet</li>
                    <li>Pastelillo arcoíris</li>
                </ol>
            </td>
            </tr>
        </table>
    </section>
    <section class = "caja6">
        <table width = "70%">
            <tr>
            <td width = "40%">
                <img src = "Yogurth.jpg" alt = "Yogurth" width = 300px height = 250px>
            </td>
            <td>
                <h3>Yogurth</h3>
                <p>Derivado del lácteo que alegrará tus días.</p>
                <p><em>Opciones de sabor:</em></p>
                <ol>
                    <li>Yogurth de mango.</li>
                    <li>Yogurth de piña-coco.</li>
                    <li>Yogurth de frambuesa.</li>
                </ol>
            </td>
            </tr>
        </table>
    </section>
    <div class = "LEAX">
    <section class = "pedido" id = "pedido">
        <div class = "input-box">
        <h2>Realiza tu pedido</h2>
        </div>
        <form action="Agregate.php" method="POST">
                <div class = "input-box">
                <label>Nombre:</label><br>
                    <input type = "text" name = "nombre" placeholder = "Nombre"><br><br>
                </div>
                <div class = "input-box">
                <label>PRODUCTO:</label><br>
                    <input type = "text" name = "producto" placeholder = "selecciona que producto quieres"><br><br>
                </div>
                <br><br>
                <div class = "input-box">
                <label>Teléfono:</label><br>
                    <input type = "text" name = "telefono" placeholder = "Número telefónico"><br><br>
                </div>
                <div class = "input-box">
                <label>Cantidad:</label><br>
                    <input type = "text" name = "cantidad" placeholder = "Elige cantidad"><br><br>
                </div>
                <div class = "input-box">
                <label>Comentario/Mensaje:</label><br>
                    <textarea rows = "3" cols = "50" name = "comentario" placeholder = "Mensaje para el pastel"></textarea><br><br>
                    <input type = "submit" name = "enviar" value = "enviar">
                </div>
        </form>
    </section>
    </div><br><br>
		<table border=1 class = "babab">
        <tr>
				<td>Pastel de chocolate $400.00 <br> STOCK: 5 <br><br><hr> <center><img id = "Prod1" src="Choc.jpg" alt="Chocolate cake" width = 100px height = 100px></center></td>
				<td>Gelatina de fresa $25.00 <br> STOCK: 12 <br><br><hr> <center><img id = "Prod2" src="Gelfres.jpg" alt="Strawberry gelato" width = 100px height = 100px></center></td>
                <td>Galletas de vainilla $12.00 <br> STOCK: 3 <br><br><hr> <center><img id = "Prod3" src="Galvain.jpg" alt="Vanilla cookies" width = 100px height = 100px></center></td><tr>
                <td>Pay de queso $20.00 <br> STOCK: 20 <br><br><hr> <center><img id = "Prod4" src="Payqueso.jpg" alt="Cheese pay" width = 100px height = 100px></center></td>
                <td>Cupcakes $25.00 <br> STOCK: 20 <br><br><hr> <center><img id = "Prod5" src="Cup.jpg" alt="Cupcakes" width = 100px height = 100px></center></td>
                <td>Yogurth $50.00 <br> STOCK: 13 <br><br><hr> <center><img id = "Prod6" src=Yogurth.jpg alt="Yogurth" width = 100px height = 100px></center></td>
			</tr>
		</table>
        <br><br>

	<section class = "codeneon" id = "descuento">
        <table border = 0.5>
		<?php
			echo "<h2>PROMOCION POR DÍA</h2><br><h3>";
			 $_PB = 400;
             $_DXD = .15;

            for($_i=1; $_i<=7; $_i++){
                $_AhorroR = $_PB * $_DXD;
                echo "<center>Día: " . $_i . ".- " . "Usted ahorra: <strong>" . "$" . number_format($_AhorroR, 2) . "</strong> (" . ($_DXD * 100) . "% ahorrado.) <br><br></center>";
				$_DXD -= 0.01;
			}
            echo "</h3>";
		?>
        </table>
	</section>
    <section id = "redes">
        <hr>
        <center>
            <p>Encuéntranos en:
            <b>@thefun_cake<br>
            thefun_cake@gmail.com<br>
            (228)1234567 Av. Manuel Ávila Camacho #1005 C.P. 91000 Xalapa, Veracruz. México</b></p>
            <p>&copy;2026 Reposteria independiente</p>
        </center>
    </section>
	</body>
</html>