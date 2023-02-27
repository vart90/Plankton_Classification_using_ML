<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Planktonet</title>
    <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
    <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900&subset=latin,latin-ext'>
    <link rel="stylesheet" href="css/style.css">    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css4/main.css">
</head>
<body>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <div class="container">
        <header>
            <img src="images/Group 2.svg" alt="Planktonet logo" class="logo">

            <nav>
                <a href="#" class="hide-desktop">
                    <img src="images/ham.svg" alt="toggle menu" class="menu" id="menu">
                </a>

                <ul class="show-desktop hide-mobile" id="nav">
                    <li id="exit" class="exit-btn hide-desktop">
                        <img src="images/exit.svg" alt="exit menu">
                    </li>
                    <li><a href="#">Home</a></li>
                    <li><a href="" data-toggle="modal" data-target="#exampleModal">Sign-up</a></li>
                    <li><a href="" data-toggle="modal" data-target="#exampleModal2">Login</a></li>
                    
		   
                    
                                        
                </ul>
            </nav>
        </header>

        <section>
            <img src="images/Asset 4.svg" alt="bgtexture" class="bgt">
            <img src="images/animation.gif" alt="server graphic" class="server">
            <h1>Plankto - Network</h1>
            <p class="subhead">We help easily classify these little animals and plants</p>

            <img src="images/scroll.svg" alt="scroll down" class="scroll hide-mobile show-desktop">
        </section>
    </div>
    <div class="blue-container">
        <div class="container">
           <p> Plankton is one of the interesting field of research. However, manual classification of plankton is very time consuming. We at Plankto-net classify Plankton for future study.  </p>
        </div>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Register</h5>
            </div>
            <div class="modal-body" >
              <img src="images/bg2option1.jpg" alt="bgimg">
              <form action="sign.php" method="post" class="needs-validation" novalidate>
                <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="form-group">
                  <label for="email">Email address</label>
                  <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email" required>
                  <div class="invalid-feedback">
                    Please enter a valid email address
                  </div>
                </div>
                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" id="password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                  <div class="invalid-feedback">
                   Password must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters
                  </div>
                <div class="form-group">
                    <label for="purpose">Purpose of use</label>
                    <input type="text" class="form-control" id="purpose" name="purpose" required>
                </div>
                <button type="submit" class="btn btn-primary" onclick="document.getElementById('myInput').value = ''">Submit</button>
              </form>
            </div>
          </div>
        </div>
      </div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  

    <script  src="js/index.js"></script>

  </div>
  <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Login</h5>
        </div>
        <div class="modal-body">
          <img src="images/bg2option1.jpg" alt="bgimg">
          <form action="login.php" method="post" class="needs-validation" novalidate>
            <div class="form-group">
              <label for="email">Email address</label>
              <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email" required>
              <div class="invalid-feedback">
                Please enter a valid email address
              </div>
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control" id="password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
              <div class="invalid-feedback">
               Password must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters
              </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>



<script  src="js/index.js"></script>

</div>


<script>
    
        var menu = document.getElementById('menu');
        var nav = document.getElementById('nav');
        var exit = document.getElementById('exit');

        menu.addEventListener('click', function(e) {
            nav.classList.toggle('hide-mobile');
            e.preventDefault();
        });

        exit.addEventListener('click', function(e) {
            nav.classList.add('hide-mobile');
            e.preventDefault();
        });

    </script>

</body>
</html>