<?php require "./components/cabecalho.php" ?>

<form>
  <div class="mb-3">
    <label for="nome" class="form-label">Email</label>
    <input type="text" class="form-control" id="nome" name="nome">
  </div>

  <div class="mb-3">
    <label for="email" class="form-label">Senha</label>
    <input type="email" class="form-control" id="email" name="email">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

<?php require "./components/footer.php" ?>