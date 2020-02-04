<?php if(count($errors) > 0): ?>
<div class="alert alert-danger mt-3" role="alert">
    <?php foreach ($errors as $error): ?>
    <span><?php echo $error; ?></span>
    <?php endforeach; ?>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<?php endif; ?>