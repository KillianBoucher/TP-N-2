<?php
function addition($a, $b) {
    return $a + $b;
}

function soustraction($a, $b) {
    return $a - $b;
}

function multiplication($a, $b) {
    return $a * $b;
}

function division($a, $b) {
    if($b == 0) {
        return "Division par zéro!";
    } else {
        return $a / $b; 
    }
}

$nombre1 = $_POST['nombre1'];
$nombre2 = $_POST['nombre2'];
$operation = $_POST['operation'];

switch($operation) {
    case '+':
        $resultat = addition($nombre1, $nombre2);
        break;
    case '-':
        $resultat = soustraction($nombre1, $nombre2);
        break;
    case '*':
        $resultat = multiplication($nombre1, $nombre2);
        break;
    case '/':
        $resultat = division($nombre1, $nombre2);
        break;
}
?>

?>
<!DOCTYPE html>
<html>
<head>
	<title>Résultats Calculatrice</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Résultats Calculatrice</h3>
					</div>
					<div class="panel-body">
						<h2>Résultat: <?php echo $resultat ?></h2>
						<a href="index.html" class="btn btn-primary">Retour à la Calculatrice</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
