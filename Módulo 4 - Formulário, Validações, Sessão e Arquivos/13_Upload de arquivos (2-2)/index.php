<!-- quando trabalhamos com upload de arquivos, é necessário usar a tag enctype -->
<form method="POST" action="recebedor.php" enctype="multipart/form-data">
  <input type="file" name="arquivo" />
  <input type="submit" name="enviar" />
</form>
<?php
