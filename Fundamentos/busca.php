<?php
if (!isset($_GET['nome_livro'])) {
    header("Location: index.php");
    exit;
}

$nome = "%".trim($_GET['nome_socio'])."%";

$dbh = new PDO('mysql:host=localhost;dbname=cadastro', 'admin', '353331499Eduardo');

$sth = $dbh->prepare('SELECT * FROM pessoas WHERE nome LIKE :nome');
$sth->bindParam(':nome', $nome,PDO::PARAM_STR);
$sth->execute();

$resultados = $sth->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <title>Resultado da busca</title>
</head>
<body>
<h2>Resultado da busca</h2>
<?php
if (count($resultados)) {
    foreach($resultados as $Resultado) {
        ?>
        <label><?php echo $Resultado['id']; ?> - <?php echo $Resultado['nome']; ?></label>
        <br>
        <?php
    } } else {
    ?>
    <label>Não foram encontrados resultados pelo termo buscado.</label>
<?php
}
?>
</body>
</html>