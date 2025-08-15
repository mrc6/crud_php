<?php
  session_start();
  if(1 ==1){
?>
<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <?php var_dump($_SESSION['message']); ?>
  <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php 
  unset($_SESSION['message']);
  }
?>
