<?php

    $filename = $_SERVER["SCRIPT_FILENAME"];
    if (file_exists($filename)) {
        $mtime = filemtime($filename);
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enviar Zap</title>

    <script src="https://kit.fontawesome.com/f8f6304230.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="./public/libs/intTelInput/css/intlTelInput.css">
    <link rel="stylesheet" href="./public/libs/intTelInput/css/demo.css">
    
    <link rel="stylesheet" href="./public/css/main.css?<?php echo $mtime; ?>">
</head>
<body>
    
    <main>
        <div class="content-form">
            <form name="enviar-zap" method="GET">
                <div class="content-input">
                    <input name="cel" type="tel" id="phone" class="form-control">
                    <button><i class="fa-brands fa-whatsapp"></i></button>
                </div>
            </form>
        </div>
    </main>


    <script src="https://code.jquery.com/jquery-latest.min.js"></script>
    <script src="./public/libs/intTelInput/js/intlTelInput.js"></script> 
    <script src="./public/libs/intTelInput/js/utils.js"></script> 
    <script src="./public/libs/maskedinput-1.4.1/jquery.maskedinput-1.4.1.min.js"></script> 
    <script src="./public/js/main.js?<?php echo $mtime; ?>"></script> 
</body>
</html>