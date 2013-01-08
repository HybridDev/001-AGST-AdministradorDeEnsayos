<!DOCTYPE HTML>
<html lang="es-AR">
<head>
	<meta charset="UTF-8">
	<title>Pagina Test</title>
	<link rel="stylesheet" type="text/css" href="res/css/main.css" media="all">
	<link rel="stylesheet" type="text/css" href="res/css/table.css" media="all">
	<link rel="stylesheet" type="text/css" href="res/css/buttons.css" media="all">
	<link rel="stylesheet" type="text/css" href="http://necolas.github.com/normalize.css/2.0.1/normalize.css" media="all">
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
	<script type="text/javascript" src="res/js/adds.js"></script>
	<script type="text/javascript" src="res/js/tablemotor.js"></script>
</head>
<body>
	<div class="conteiner">
		<header class="boton"><div class="titulo">Panel de Presupuestos</div></header>
		<nav><a id="mostrar" href="#" class="boton">New Request</a></nav>
		<table class="paginated" border="1">
			<thead>
				<tr>
					<th class="id">ID</th>
					<th class="id">DATE</th>
					<th class="presup">ISSUE</th>
					<th class="file">FILE</th>
					<th class="estimate">ESTIMATE</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>1213</td>
					<td>12/12/12</td>
					<td class="issue">Testeo primero</td>
					<td><a href=""><img src="res/img/icons/ico_doc_blank2.png" alt="docu"></a></td>
					<td class="estimate">
							<a href="res/php/presup.php"><img src="res/img/icons/cost.png" alt="presupuesto"></a>
							<a href="res/php/presup.php"><img src="res/img/icons/cost.png" alt="presupuesto"></a>
							<a href="res/php/presup.php"><img src="res/img/icons/cost.png" alt="presupuesto"></a>
							<a href="res/php/presup.php"><img src="res/img/icons/cost.png" alt="presupuesto"></a>
							<a href="res/php/presup.php"><img src="res/img/icons/cost.png" alt="presupuesto"></a>
					</td>
				</tr>
				<tr>
					<td>1213</td>
					<td>12/12/12</td>
					<td class="issue">Testeo segundo</td>
					<td><a href=""><img src="res/img/icons/ico_doc_blank2.png" alt="docu"></a></td>
					<td>OK</td>
				</tr>
				<tr>
					<td>1213</td>
					<td>12/12/12</td>
					<td class="issue">Testeo tercero</td>
					<td><a href=""><img src="res/img/icons/ico_doc_blank2.png" alt="docu"></a></td>
					<td>OK</td>
				</tr>
				<tr>
					<td>12321</td>
					<td>12/12/12</td>
					<td class="issue">Testeo Cuarto</td>
					<td><a href=""><img src="res/img/icons/ico_doc_blank2.png" alt="docu"></a></td>
					<td>OK</td>
				</tr>
				<tr>
					<td>12321</td>
					<td>12/12/12</td>
					<td class="issue">Testeo Cuarto</td>
					<td><a href=""><img src="res/img/icons/ico_doc_blank2.png" alt="docu"></a></td>
					<td>OK</td>
				</tr>
				<tr>
					<td>12321</td>
					<td>12/12/12</td>
					<td class="issue">Testeo Cuarto</td>
					<td><a href=""><img src="res/img/icons/ico_doc_blank2.png" alt="docu"></a></td>
					<td>OK</td>
				</tr>
				<tr>
					<td>12321</td>
					<td>12/12/12</td>
					<td class="issue">Testeo Cuarto</td>
					<td><a href=""><img src="res/img/icons/ico_doc_blank2.png" alt="docu"></a></td>
					<td>OK</td>
				</tr>
				<tr>
					<td>12321</td>
					<td>12/12/12</td>
					<td class="issue">Testeo Cuarto</td>
					<td><a href=""><img src="res/img/icons/ico_doc_blank2.png" alt="docu"></a></td>
					<td>OK</td>
				</tr>
				<tr>
					<td>12321</td>
					<td>12/12/12</td>
					<td class="issue">Testeo Cuarto</td>
					<td><a href=""><img src="res/img/icons/ico_doc_blank2.png" alt="docu"></a></td>
					<td>OK</td>
				</tr>
				<tr>
					<td>12321</td>
					<td>12/12/12</td>
					<td class="issue">Testeo Cuarto</td>
					<td><a href=""><img src="res/img/icons/ico_doc_blank2.png" alt="docu"></a></td>
					<td>OK</td>
				</tr>
				<tr>
					<td>12321</td>
					<td>12/12/12</td>
					<td class="issue">Testeo Cuarto</td>
					<td><a href=""><img src="res/img/icons/ico_doc_blank2.png" alt="docu"></a></td>
					<td>OK</td>
				</tr>
				<tr>
					<td>12321</td>
					<td>12/12/12</td>
					<td class="issue">Testeo Cuarto</td>
					<td><a href=""><img src="res/img/icons/ico_doc_blank2.png" alt="docu"></a></td>
					<td>OK</td>
				</tr>
			</tbody>
		</table>
	<table>
		<tr>
			<td><a href="" id="eliminar">Eliminar Seleccionados<a></td>
		</tr>
	</table>
	</div>
<!-----------------cargar contenido---------------------->
	<div id="lightbox" class="overbox">
		<div class="form">
			<form enctype="multipart/form-data" action="" method="POST">
				<p><label>NOMBRE:</label><input class="campo" type="text" name="nombre"></p>
				<p><label>FILE:</label><input class="file" size="17" type="file" name="uploadfile"></p>
				<p><input type="submit" class="boton" value="Upload" id="agregar"><a href="#" class="boton" id="ocultar">Cancel</a></p>
			</form>
		</div>
	</div>
    <div id="fade" class="fadebox">&nbsp;</div>
</body>
</html>
