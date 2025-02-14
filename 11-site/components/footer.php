</main>
<footer>
  <p>Site criado com worpress.</p>
  <?php

  // Criar um objeto DateTime
  $data = new DateTime();

  // Usar IntlDateFormatter para formatar a data por extenso
  $fmt = new IntlDateFormatter('pt_BR', IntlDateFormatter::LONG, IntlDateFormatter::MEDIUM);

  $data_extenso = $fmt->format($data);


  ?>
  <p><?= $data_extenso ?></p>
</footer>

</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>