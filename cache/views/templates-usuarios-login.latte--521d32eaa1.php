<?php
// source: C:\Users\adesl\Documents\GitHub\LandTravel\views\templates\usuarios\login.latte

use Latte\Runtime as LR;

class Template521d32eaa1 extends Latte\Runtime\Template
{

	function main()
	{
		extract($this->params);
?>
<form id="form-login">
    <div class="card-body justify-content-center" style="min-width:16rem">
        <div class="text-center">
            <img class="img-fluid rounded" src="img/user.png" alt="..." style="max-height:50%;max-width:50%">
        </div>
        <label>Usuario</label><br>
        <input class="form-control" id="email" name="email" type="email" placeholder="ejemplo@mail.com">
        <br>
        <label>Contraseña</label><br>
        <input class="form-control" id="contraseña" name="contraseña" type="password" placeholder="********">
        <a class="pb-3" href="#"><small>¿Olvidastes tu contraseña?</small></a>
        <div class="text-center">
            <button class="btn btn-primary justify-center mt-2" id="login" type="submit">Login</button><br>
        </div>
        <small>¿Nuevo en Land Travel? <a href="/registrar">Registrate.</a></small> 
    </div>
</form><?php
		return get_defined_vars();
	}

}