<?php require('partials/header.php'); ?>

<div class="uk-position-relative uk-margin-medium">
    <div class="uk-container login">
        <h1 class="uk-text-center uk-text-primary">Registre-se</h1>
        <form class="uk-form-stacked" action="/postLogin" method="POST">
            <div class="uk-margin">
                <input class="uk-input" type="text" name="name" id="" placeholder="Nome">
            </div>
            <div class="uk-margin">
                <input class="uk-input" type="email" name="email" id="" placeholder="Email">
            </div>
            <div class="uk-margin">
                <input class="uk-input e" type="password" name="password" placeholder="Senha">
            </div>
            
            <button class="uk-button uk-button-primary uk-button-large uk-width-1-1" type="submit">Registrar</button>
        </form>
    </div>
</div>

<?php require('partials/footer.php'); ?>