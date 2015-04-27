<section>
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-md-offset-9">
                <a href="index.php?uc=deconnexion" title="Se déconnecter">Déconnexion</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h2>ACTIVITE</h2></br>
                <?php if(array_key_exists('success', $_SESSION)): ?>
                <div class="alert alert-success">
                    Nouvelle activité enregistrée.
                </div>
                <?php endif; ?>
                <?php if(array_key_exists('error', $_SESSION)): ?>
                <div class="alert alert-danger">
                    <?= $_SESSION['error']; ?>
                </div>
                <?php endif; ?>
                <form method="POST" action="index.php?uc=activite">
                    <div class="form-group">
                        <label for="name">Nom</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <div class="form-group">
                        <label for="libelle">Libelle</label>
                        <input type="text" class="form-control" id="libelle" name="libelle" >
                    </div>
                    <div class="form-group">
                        <label for="desc">Description</label>
                        <textarea class="form-control" id="desc" name="desc" rows="5"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="img">Image</label>
                        <input type="text" class="form-control" id="img" name="img" >
                    </div>
                    <div class="col-md-3 col-md-offset-3">
                        <button type="submit" value="add" name="add" class="btn btn-lg btn-success">Add</button>
                    </div>
                    <div class="col-md-3">
                        <button type="reset" value="delete" class="btn btn-lg btn-danger">Delete</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<?php
unset($_SESSION['error']); 
unset($_SESSION['success']); 
?>