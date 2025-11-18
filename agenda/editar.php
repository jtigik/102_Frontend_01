<?php
include 'config.php';

$id = $_GET['id'];
$stmt = $pdo->prepare("SELECT * FROM contatos WHERE id = ?");
$stmt->execute([$id]);
$contato = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$contato) {
    die("Contato não encontrado.");
}

// Atualizar (se POST)
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $stmt = $pdo->prepare("UPDATE contatos SET nome = ?, telefone = ?, email = ? WHERE id = ?");
    $stmt->execute([$nome, $telefone, $email, $id]);
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Contato</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Editar Contato</h1>
        <form method="POST" class="form-edit">
            <input type="text" name="nome" value="<?php echo htmlspecialchars($contato['nome']); ?>" required>
            <input type="text" name="telefone" value="<?php echo htmlspecialchars($contato['telefone']); ?>" required>
            <input type="email" name="email" value="<?php echo htmlspecialchars($contato['email']); ?>">
            <button type="submit">Atualizar</button>
            <a href="index.php" class="btn-cancel">Cancelar</a>
        </form>
    </div>
</body>
</html>