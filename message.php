<?php
  session_start();
  if(!empty($_SESSION['message'])){
?>
<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <?= $_SESSION['message'] ?>
  <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php 
  unset($_SESSION['message']);
  }
?>
