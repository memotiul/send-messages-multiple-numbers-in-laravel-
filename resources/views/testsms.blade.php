<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
     <title>Assignment</title>
    <style type="text/css">
        @import url(https://fonts.googleapis.com/css?family=Raleway:300,400,600);
  
        body{
            margin: 0;
            font-size: .9rem;
            font-weight: 400;
            line-height: 1.6;
            color: #212529;
            text-align: left;
            background-color: #f5f8fa;
        }
        .navbar-laravel
        {
            box-shadow: 0 2px 4px rgba(0,0,0,.04);
        }
        .navbar-brand , .nav-link, .my-form, .login-form
        {
            font-family: Raleway, sans-serif;
        }
        .my-form
        {
            padding-top: 1.5rem;
            padding-bottom: 1.5rem;
        }
        .my-form .row
        {
            margin-left: 0;
            margin-right: 0;
        }
        .login-form
        {
            padding-top: 1.5rem;
            padding-bottom: 1.5rem;
        }
        .login-form .row
        {
            margin-left: 0;
            margin-right: 0;
        }
    </style>
</head>
<body>
    
<nav class="navbar navbar-expand-lg navbar-light navbar-laravel">
    <div class="container">
        <a class="navbar-brand" href="#">Assignment</a>
       
    </div>
</nav>

<div class="login-form">
  <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                  <div class="card-body">
                             <form action="" method="post">
          <input type="hidden" name="_token" value="{{csrf_token()}}"
                    <div>
                  </div>

                          <div class="form-group row">
                              <label for="email_address" class="col-md-4 col-form-label text-md-right">Enter Numbers</label>
                              <div class="col-md-6">
                                   <input type='text' name='numbers' />
                              </div>
                          </div>
  
                          <div class="form-group row">
                              <label for="password" class="col-md-4 col-form-label text-md-right">Enter Message</label>
                              <div class="col-md-6">
                                  <textarea name='message'></textarea>

                              </div>
                          </div>
  
                          <div class="col-md-6 offset-md-4">
                             <button type='submit'>Send</button>
                    
                          </div>
                      </form>
                        
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
</body>
</html>