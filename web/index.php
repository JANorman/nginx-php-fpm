<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Your server is running</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/3.3.5/cosmo/bootstrap.min.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
        <div class="jumbotron">
            <div class="container">
                <h1>Your server is running!</h1>
                Congratulations, your PHP server is now running. You can remove this page, and add in your application!
            </div>
        </div>

        <div class="container">
            <h2>Here's some useful information about your setup</h2>
            <p>This file is located at <code><?php echo __FILE__; ?></code></p>
            <p>The PHP version running is <code><?php echo PHP_VERSION; ?></code></p>
            <p>The date time on the server is <code><?php echo date('Y-m-d H:i:s (e)'); ?></code></p>

            <p><a href="phpinfo.php" class="btn btn-primary">See PHPInfo </a></p>
        </div>
        


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </body>
</html>
