<!DOCTYPE html>
<html>
<head>
    <title>Prêt? Partez!</title>
    <meta charset="utf-8"/>
<script type="text/javascript">

var attente;
function minutageGo(){
    var nombre_qui_change = window.document.formulaire.minuteur.value;
    nombre_qui_change = parseInt(nombre_qui_change) + 1;
    window.document.formulaire.minuteur.value = nombre_qui_change;

    attente = setTimeout("minutageGo()", 1000);
}
</script>
</head>

<body>

<form name="formulaire">
<input type="text" name="minuteur" value= 0><br>
<input type="button" value="Démarrez!" onClick="minutageGo();">
<input type="button" value="Arrêter" onClick="clearTimeout(attente)">
</form>
</body>
</html>