<?php iconv_set_encoding("internal_encoding", "UTF-8");
	if(!empty($_POST)) {
		mail("Kurs-Umfrageergebnisse WinterAka 18/19 <umfrage_kurs_winter1819@pschwartz.de>, ", '=?utf-8?B?'.base64_encode("[winter1819] Umfrage von " . $_POST["Name"]).'?=', print_r($_POST, TRUE), "Content-Type: text/plain; charset=UTF-8");
		mail("Benjamin Haake <ben_haake@web.de>, ", '=?utf-8?B?'.base64_encode("[winter1819] Umfrage von " . $_POST["Name"]).'?=', print_r($_POST, TRUE), "Content-Type: text/plain; charset=UTF-8");
	}
?>

<!DOCTYPE HTML>
<html>
<head>
<title>Umfrage zu „Einführung in die Differentialgeometrie“</title>
<meta charset="utf-8">
</head>

<body>
<h1 style="text-align:center">CdE-WinterAkademie 2018/19 – „Einführung in die Differentialgeometrie“: Teilnehmerumfrage</h1>

<div>Deine Angaben wurden gesendet. Vielen Dank!</div>
</body>
</html>
