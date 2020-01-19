<?php if(count($errors) > 0): ?>
    <div class = "alert alert-danger mt-3" role = "alert">
        <?php foreach ($errors as $error): ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
             </button>
             <?php echo $error; ?>
        <?php endforeach; ?>
    </div>
<?php endif; ?>

