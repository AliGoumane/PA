<div class="container form">
	<div class="row mt-12">
		<div class="col-md-6"></div>
		<div class="col-md-12">
            <?php
                if (!empty($_SESSION['errors'])) {
                    ?><p> <?php print_r($_SESSION['errors']);?></p><?php
                    unset($_SESSION['errors']);
                    //session_destroy();
                }	?>
                <form id="register-form" method="POST" action="addUser.php">
                    <input type="email" class="form-control" name="email" placeholder="Votre email" required="required"><br>
                    <input type="password" class="form-control" name="password" placeholder="Votre mot de passe" required="required"><br>
                    <input type="checkbox" id="connected" name="connected" class=" mt-4" required="required"> <label for="cguCheckbox"> Rester connecter </label> <br>
                    <a href="#">Mot de passe oublié ?</a>
                
                </form>
		</div>
	</div>
</div>