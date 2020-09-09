<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <link rel="stylesheet" href = "<?=base_url('css/style.css')?>"/>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Blog Website</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="<?=base_url('index.php/blog/home')?>">Home<span class="sr-only"></span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?=base_url('index.php/blog/about')?>">About</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="<?=base_url('index.php/blog/portfolio')?>">Portfolio</a>
            </li>
            <!-- <li class="nav-item">
                <a class="nav-link" href="<?=base_url('index.php/blog/contact')?>">Contact</a>
            </li> -->
        </ul>
    </div>
    </nav>
    <h1 class = "center spacer"><?=$heading->heading?></h1>
    <div class="container">
        <div class="row">
            
                    <?php
                        foreach($cards as $card){
                            echo '
                            <div class="col-sm-12 col-md-3 portfolio_main_div box-shadow">
                                <div class="container">
                                <img class = "img-fluid portfolio_img" src="'.$card->card_img.'" alt="">
                                </div>
                                <div class="container">
                                    <h3 class = "center spacer">'.$card->card_name.'</h3>
                                    </div>
                                </div>
                          
                            ';
                        }
                    ?>
        </div>
    </div>
</body>
</html>