<?php if(count($errors) > 0): ?>  
    <div class="alert alert-warning alert-dismissible fade show mt-2" role="alert">
        <?php foreach ($errors as $error): ?>
            <ul class="list-group"> 
                <p class="list-group-item-text" style="font-size: 13px">
                    <?php echo $error; ?>
                </p>
            </ul>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        <?php endforeach; ?>
    </div>
<?php endif; ?>


