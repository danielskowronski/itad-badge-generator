<?php
// CONFIG START
$funkcje=array(
	'uczestnik' => 'green',
	'organizator' => 'navy',
	'microsoft' => 'blue',
	'media' => 'orange',
	'partner' => 'orange',
	'prelegent' => '#e22'
);
// CONFIG END

function wyswietlCzlowieka($czlowiek){
	echo "<div class='czlowiek'>";
		echo "<div class='iks'>⊗</div>";
		echo "<div class='tlo $czlowiek[2]'><img src='top.png' class='top' /></div>";
		echo "<div class='funkcja'>$czlowiek[2]</div>";
		echo "<div class='imie'>$czlowiek[0]</div>";
		echo "<div class='nazwisko'>$czlowiek[1]</div>";
		echo "<div class='stopka'>";
			echo "<div class='lokalizacja'>Wydział Matematyki i&nbsp;Informatyki</div>";
			echo "<div class='data'>Uniwersytet Jagielloński<br />27.10.2015 r.</div>";
		echo "</div>";		
		echo "<img src='bottom.png' class='bottom' />";
	echo "</div>";
}

$ludzie = array_map('str_getcsv', file('ludzie.csv'));

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>ITAD Badge Generator</title>
<style>
html,body{
    height:297mm;
    width:210mm;
}
.czlowiek{
	position: relative;
	border: 1px dashed black;
	display: inline-block;
	width: 	49%;	/* o tu jest definiowane ile wejdzie na a4 */
	height: 49%;	/* o tu jest definiowane ile wejdzie na a4 */
}
.czlowiek:nth-of-type(2n){
	border-left: none;
}
.czlowiek:nth-of-type(4n+3),.czlowiek:nth-of-type(4n+4){
	border-top: none;
}
img.top{
	width: 100%;
	height: 60%;
}
img.bottom{
	width: 100%;
	height: 20%;
	bottom: 0px;
	position: absolute;
}
.iks{
	position: absolute;
	top: 0px;
	width: 100%;
	color: white;
	font-weight: 700;
	font-size: 36px;
	text-align: center;
}
.funkcja{
	position: absolute;
	top: 40%;
	width: 100%;
	color: white;
	font-weight: 700;
	font-size: 46px;
}
.imie{
	margin-top: 10px;
	font-size: 52px;
	font-weight: 700;
}
.nazwisko{
	font-size: 42px;
	font-weight: 700;
}
.funkcja, .imie, .nazwisko{
	text-align: center;
	text-transform: uppercase;
	font-family: Segoe UI,Frutiger,Frutiger Linotype,Dejavu Sans,Helvetica Neue,Arial,sans-serif;
}
.stopka{
	width: 100%;
}
.lokalizacja, .data{
	z-index: 999;
	position: relative;
	width: 35%;
	font-size: 10px;
}
.lokalizacja{
	left: 1em;
	text-align: left;
	bottom: -7.5em;
}
.data{
	right: 1em;
	margin-left: auto;
	text-align: right;
	bottom: -5.5em;
}
<?php  foreach($funkcje as $k=>$v){ echo ".tlo.$k{background-color: $v;}"; } ?>
</style>
</head>
<body>
<?php
foreach($ludzie as $czlowiek){
	wyswietlCzlowieka($czlowiek);
}?>
<hr /><a href="cytaty.php">drukuj cytaty</a>