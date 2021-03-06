<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>About Us</title>
        <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@500&display=swap" rel="stylesheet">   
        <style>
            .sin{
                background-color: rgb(164, 230, 226);
            }
            .bg-light{
                background-color: #2f085cd7!important;
            }
            .navbar-brand{
                font-family: 'Sansita Swashed', cursive;
                font-size: 1.5rem;
                color: #ffffff!important;
            }
            .nav-link{
                color: #ffffff!important;
                font-family: 'cursive', sans-serif
            }
            .nav-link:hover{
                background-color: #1a1818;
            }
            html{
                padding: 0;
                margin: 0;
            }
            body{
                font-family: 'Roboto', sans-serif;
                background-color: #f5eaf7;
            }

        </style>  
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="./index.html">ABC Bank</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto">
                
                
                <li class="nav-item">
                  <a class="nav-link" href="bank.php">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="customers.php" >CUSTOMERS</a>
                  </li>
              </ul>
            </div>
        </nav>
        <div class="sin">

            <h2 style="text-align: center; padding-top: 3%;">This is a project for basic banking system which comes under the GRIP (Sparks Foundation)</h2>
            <h4 style="text-align: center;">I have created a website for Basic bank transfer</h4>
            <h5 style="text-align: center;">It is the very easy way to tranfer money and record the things.</h5>
            <div class="many">
                <img style=" display: block; margin-left: auto; margin-right: auto; padding-bottom: 5%; padding-top:3%"   height=40% width=40% 
                src="data:image/png;base64,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" >
            </div>
            

        </div>
        
        
    </body>
</html>