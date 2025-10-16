<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área de cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="../CSS/login.css">
</head>
<body class="vh-100 d-flex justify-content-center align-items-center">
  <div class="card p-4 shadow" style="max-width: 400px; width: 100%;">
    <div class="card-body">
      <h1 class="card-title text-center mb-4">Faça seu cadastro aqui</h1>
      <form action="#" method="post">
        <div class="mb-3">
          <label for="nome" class="form-label">Nome completo:</label>
          <input type="text" class="form-control" id="nome" required>
        </div>

        <div class="mb-3">
          <label for="email" class="form-label">Insira seu e-mail:</label>
          <input type="email" class="form-control" id="email" aria-describedby="emailHelp" required>
          <div id="emailHelp" class="form-text">Nunca compartilharemos seu email com ninguém.</div>
        </div>

        <div class="mb-3">
          <label for="senha" class="form-label">Insira sua senha:</label>
          <input type="password" class="form-control" id="senha" required>
        </div>

        <div class="mb-3">
          <label for="confirmarSenha" class="form-label">Confirme sua senha:</label>
          <input type="password" class="form-control" id="confirmarSenha" required>
        </div>

        <button type="submit" class="btn btn-primary w-100 mb-3">Cadastrar</button>
        <div class="text-center">
          <a href="login.php" class="d-block">Já tenho cadastro</a>
        </div>
      </form>
    </div>
  </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>
