<?php
include "header.php";
?>


<div id="login">

<form class="card">

    <div class="card-header">

        <h2>Login</h2>

    </div>

    <div class="card-content">

        <div class="card-content-area">

            <label for="usuario">Usuário</label>

            <input type="text" id="usuario" autocomplete="off">

        </div>

        <div class="card-content-area">

            <label for="password">Senha</label>

            <input type="password" id="password" autocomplete="off">

        </div>

    </div>

    <div class="card-footer">

        <input type="submit" value="login" class="submit">
        <div class="fonte">
            <a href="#" class="recuperar_senha">Esqueceu a senha?</a>
        </div>
        

    </div>

</form>

</div>

</body>

</html>