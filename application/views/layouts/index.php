<? defined('BASEPATH') OR exit('No direct script access allowed') ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf8">
        <title>English Roulette</title>
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?= base_url('assets/css/main.css') ?>" />
        
        <!--css-->
        <? foreach ($css as $filename) : ?>
            <link rel="stylesheet" href="<?= base_url('assets/css/' . $filename) ?>" />
        <? endforeach ?>
    </head>
    <body>
        <header><h1>English Roulette</h1></header>
        
        <div class="container">
            <?= $content ?>
        </div>
        
        <footer>English Roulette&COPY; 2015</footer>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?= base_url('assets/js/main.js') ?>"></script>
        
        <!--js-->
        <? foreach ($css as $filename) : ?>
            <script type="text/javascript" src="<?= base_url('assets/js/' . $filename) ?>"></script>
        <? endforeach ?>
    </body>
</html>
