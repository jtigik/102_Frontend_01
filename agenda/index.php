
<?php
include 'config.php';

// Adicionar contato (se POST)
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['acao']) && $_POST['acao'] == 'adicionar') {
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $stmt = $pdo->prepare("INSERT INTO contatos (nome, telefone, email) VALUES (?, ?, ?)");
    $stmt->execute([$nome, $telefone, $email]);
    header("Location: index.php");
    exit;
}

// Listar contatos
$stmt = $pdo->query("SELECT * FROM contatos ORDER BY nome");
$contatos = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="pt-BR">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda Telefônica</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Agenda Telefônica</h1>
        
        <!-- Formulário de Adição -->
        <form method="POST" class="form-add">
            <input type="hidden" name="acao" value="adicionar">
            <input type="text" name="nome" placeholder="Nome" required>
            <input type="text" name="telefone" placeholder="Telefone" required>
            <input type="email" name="email" placeholder="E-mail (opcional)">
            <button type="submit">Adicionar</button>
        </form>
        
        <!-- Lista de Contatos -->
        <table>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Telefone</th>
                    <th>E-mail</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($contatos as $contato): ?>
                <tr>
                    <td><?php echo htmlspecialchars($contato['nome']); ?></td>
                    <td><?php echo htmlspecialchars($contato['telefone']); ?></td>
                    <td><?php echo htmlspecialchars($contato['email'] ?? 'N/A'); ?></td>
                    <td>
                        <a href="editar.php?id=<?php echo $contato['id']; ?>" class="btn-edit">Editar</a>
                        <a href="deletar.php?id=<?php echo $contato['id']; ?>" class="btn-delete" onclick="return confirm('Tem certeza?')">Deletar</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>