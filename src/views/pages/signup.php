<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Cadastro - Orkut</title>
    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1"/>
    <link rel="stylesheet" href="<?=$base;?>/assets/css/login.css" />
</head>
<body>
    <header>
        <div class="container">
            <a href=""><img src="<?=$base;?>/assets/images/orkut_logo.png" /></a
        </div>
    </header>
    <section class="container main">
        <form method="POST" action="<?=$base;?>/login">
            <?php if(!empty($flash)):?>

                <div class='flash'> <?php echo $flash; ?> </div>

            <?php endif; ?>            
            <input placeholder="Digite seu nome completo" class="input" type="text" name="name" />

            <input placeholder="Digite seu email" class="input" type="email" name="email" />

            <input placeholder="Digite sua senha" class="input" type="passaword" name="password" />

            <input placeholder="Digite sua data de nascimento" class="input" type="text" name="birthdate" id="birthdate" />

            <input class="button" type="submit" value="Fazer cadastro" />

            <a href="<?=$base;?>/cadastro">Já tem conta? Então faça o login</a>
        </form>
    </section>
    <script src="https:\\unpkg.com/imask">
        
        IMask(
            document.getElementyById('birthdate'),
            mask:'00/00/0000'
            );

    </script>
</body>
</html>