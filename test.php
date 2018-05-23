<!Doctype html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title> Ajout </title>
</head>
<body>
<!-- nous avons ajouté enctype="multipart/form-data" pour permettre de gérer les
uploads -->
	<form method="post" action="traitement.php" enctype="multipart/form-data">
		<table width="200" align="center" >
			<tr>
				<td>Nom du livre :</td>
				<td> <input name="nom" type="text" /></td>
			</tr>
			<tr>
				<td>Photo</td>
				<td> <input name="fichier[]" type="file" multiple="" /><br /></td>
			</tr>
			
			<tr>
				<td colspan="2" align="center"><input name="ok" type="submit" /> </td>
			</tr>
		</table>
	</form>

<!--	<iframe src="D:\9raya\GL 2\algebre.pdf" width="1200" height="385" seamless="seamless" scrolling="no" frameBorder="0"        allowTransparency="true" allowFullScreen="true"></iframe>-->

