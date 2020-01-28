<?php if(isset($_SESSION["message"])): ?>
<div class="alert alert-success mt-3" role="alert">
    <?php echo $_SESSION["message"]; ?>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<?php
      unset($_SESSION["message"]); // remove message
    ?>
<?php endif ?>