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
  <a class="navbar-brand" href="#">Admin Dashboard</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
     
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Pages
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#home">Home page</a>
          <a class="dropdown-item" href="#about">About</a>
          <a class="dropdown-item" href="#portfolio">Portfolio</a>
        </div>
      </li>
     
    </ul>
  </div>
</nav>

    <section id = "home">
        <div class="spacer"></div>
        <h1 class ="center">Customize Home page</h1>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6">
                <div class="spacer"></div>
                    <form action="<?=base_url('index.php/blog/setHomeHeading')?>" method= "POST">
                        <h3 class = 'center'>Change Heading</h3>
                        <textarea class = "w-100" type="text" name = "home_heading"></textarea>
                        <br>
                        <button class = "btn btn-success w-100">Update Heading</button>
                    </form>
                </div>
                <div class="col-sm-12 col-md-6"> 
                <div class="spacer"></div>
                    <form action="<?=base_url('index.php/blog/setHomeDescription')?>" method= "POST">
                        <h3 class = 'center'>Change Description</h3>
                        <textarea class = "w-100" type="text" name = "home_description"></textarea>
                        <br>
                        <button class = "btn btn-success w-100">Update Description</button>
                    </form> 
                </div>
                <div class="col-sm-12 col-md-6">
                <div class="spacer"></div>
                    <form action="<?=base_url('index.php/blog/insertImages')?>" method= "POST">
                        <h3 class = 'center'>Add Images</h3>
                        <textarea class = "w-100" type="text" name = "image_url"></textarea>
                        <br>
                        <button class = "btn btn-success w-100">Update Description</button>
                    </form>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="spacer"></div>
                    <h3 class = "center">Delete Images</h3>
                    <div style = "overflow : scroll; height : 300px">
                        <table class= "table table-striped ">
                            <tr>
                                <th class = "center">Image</th>
                                <th class = "center">Action</th>
                            </tr>
                            <?php
                                foreach($imgs as $url){
                                    echo '<tr><td><img class=" admin_home_image rounded mx-auto d-block spacer " src="'.$url->url.'" alt=""></td>';
                                    echo '<td class = "align-middle center"><a href = "'.base_url('index.php/blog/deleteImage?image_id='.$url->id).'"><button class = "btn btn-danger">Delete</button></a></td></tr>';
                                }
                            ?>
                        </table>
                    </div>
                </div>
            </div>
    </section>

   
    <section id = "about">
    <h1 class ="center">Customize About page</h1>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-4">
                    <div class="spacer"></div>
                    <form action="<?=base_url('index.php/blog/aboutHeading')?>" method= "POST">
                        <h3 class = 'center'>About Heading</h3>
                        <textarea class = "w-100" type="text" name = "about_heading"></textarea>
                        <br>
                        <button class = "btn btn-success w-100">Update About Heading</button>
                    </form>
                </div>
                <div class="col-sm-12 col-md-4">
                    <div class="spacer"></div>
                    <form action="<?=base_url('index.php/blog/aboutCardInsert')?>" method= "POST">
                        <h3 class = 'center'>Add About Card</h3>
                        <input placeholder = "About Card Heading" class = "w-100" type="text" name = "about_card_heading">
                        <input placeholder = "About Card Description" class = "w-100" type="text" name = "about_card_matter">
                        <input placeholder = "About Card Image URL" class = "w-100" type="text" name = "about_card_img">
                        <br>
                        <button style = "margin-top : 5px" class = "btn btn-success w-100">Add About card</button>
                    </form>
                    <div class="spacer"></div>
                </div>
                <div class="col-sm-12 col-md-4">
                    <div class="spacer"></div>
                    <h3 class = "center">Delete About Cards</h3>
                    <div style = "overflow : scroll; height : 300px">
                        <table class= "table table-striped ">
                            <tr>
                                <th class = "center">Image</th>
                                <th class = "center">Action</th>
                            </tr>
                            <?php
                                foreach($about_cards as $ac){
                                    echo '<tr><td><img class=" admin_home_image rounded mx-auto d-block spacer " src="'.$ac->card_img.'" alt=""></td>';
                                    echo '<td class = "align-middle center"><a href = "'.base_url('index.php/blog/deleteAboutCard?image_id='.$ac->id).'"><button class = "btn btn-danger">Delete</button></a></td></tr>';
                                }
                            ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section id  = "portfolio">
    <h1 class ="center">Customize Portfolio page</h1>

        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-4">
                    <div class="spacer"></div>
                    <form action="<?=base_url('index.php/blog/portfolioHeading')?>" method= "POST">
                        <h3 class = 'center'>Portfolio Heading</h3>
                        <textarea class = "w-100" type="text" name = "portfolio_heading"></textarea>
                        <br>
                        <button class = "btn btn-success w-100">Update Portfolio Heading</button>
                    </form>        
                </div>
                <div class="col-sm-12 col-md-4">
                    <div class="spacer"></div>
                    <form action="<?=base_url('index.php/blog/portfolioCardInsert')?>" method= "POST">
                        <h3 class = 'center'>Add Portfolio Card</h3>
                        <input placeholder = "Portfolio Card Name" class = "w-100" type="text" name = "portfolio_card_name">
                        <input placeholder = "Portfolio Card Image" class = "w-100" type="text" name = "portfolio_card_img">
                        <br>
                        <button style = "margin-top : 5px" class = "btn btn-success w-100">Add About card</button>
                    </form>
                </div>
                <div class="col-sm-12 col-md-4">
                    <div class="spacer"></div>
                    <h3 class = "center">Delete Portfolio Cards</h3>
                    <div style = "overflow : scroll; height : 300px">
                        <table class= "table table-striped ">
                            <tr>
                                <th class = "center">Image</th>
                                <th class = "center">Action</th>
                            </tr>
                            <?php
                                foreach($portfolio_cards as $pc){
                                    echo '<tr><td><img class=" admin_home_image rounded mx-auto d-block spacer " src="'.$pc->card_img.'" alt=""></td>';
                                    echo '<td class = "align-middle center"><a href = "'.base_url('index.php/blog/deletePortfolioImage?image_id='.$pc->id).'"><button class = "btn btn-danger">Delete</button></a></td></tr>';
                                }
                            ?>
                        </table>
                    </div>
                </div>
            </div>     
        </div>
    </section>.








    <div class="spacer"></div>
</body>
</html>