
<!DOCTYPE html>
<html class="tm-background uk-height-viewport">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>برنامه ثروتمندان</title>
            <?php

        echo $this->Html->css(array(
            'bootstrap.min',
            'font-awesome.min',
            'login'
            ));
        echo $this->Html->script(array(
            'jquery.min',
            ));
    ?>
                    </head>
    <body>

        <div class="uk-height-viewport uk-flex uk-flex-center uk-flex-middle uk-text-center">
            <div class="tm-container tm-container-small">

                <?php
                    echo $this->fetch('content');
                ?>               
                
            </div>
        </div>

    </body>
</html>
