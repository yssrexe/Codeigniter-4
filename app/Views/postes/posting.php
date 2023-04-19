<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>posting</title>
    </head>
    <body>
    <div class="bg"></div>
    <div class="bg bg2"></div>
    <div class="bg bg3"></div>

    <?php
    if(!empty(session()->getFlashdata('success'))){
        ?>
        <div class="alert alert-success">
        <?= 
            session()->getFlashdata('success')
        ?>
        </div>
        <?php
    }else if(!empty(session()->getFlashdata('fail'))){
        ?>
        <div class="alert alert-danger">
        <?= 
            session()->getFlashdata('fail')
        ?>
        </div>
        <?php
    }
        ?>


    <div class="container">
        <form action="<?= base_url('Auth/postingIm') ?>" method="post"  enctype="multipart/form-data" >
            <?= csrf_field(); ?>
            <label for="arquivo">text :</label>
                <input class="inpdddut" name="title" id="arquivo" type="text">
                <span class="text-danger text-sm">
                    <?= isset($validation) ? display_form_errors($validation, 'title') : '' ?>
                </span>
                
                <label for="arquivo">Choose a file :</label>
                <input class="inpdddut" name="image" id="arquivo" type="file">
                <span class="text-danger text-sm">
                    <?= isset($validation) ? display_form_errors($validation, 'image') : '' ?>
                </span>
                <input value="Send" type="submit" class="inpdddut">
        </form>
    </div>


        <style>
            body{
                background: linear-gradient(#00C6FF, #0078FF);
            }

            .bg {
            animation:slide 3s ease-in-out infinite alternate;
            background-image: linear-gradient(-60deg, #C70039 50%, #FF5733 50%);
            bottom:0;
            left:-50%;
            opacity:.5;
            position:fixed;
            right:-50%;
            top:0;
            z-index:-1;
            }

            .bg2 {
            animation-direction:alternate-reverse;
            animation-duration:4s;
            }

            .bg3 {
            animation-duration:5s;
            }

            .submit{
            font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
            font-size: 17px;
            padding: 1em 2.7em;
            font-weight: 500;
            background: #339933;
            color: white;
            border: none;
            position: relative;
            overflow: hidden;
            border-radius: 0.6em;
            cursor: pointer;
            }
            @keyframes slide {
            0% {
                transform:translateX(-25%);
            }
            100% {
                transform:translateX(25%);
            }
            }

            .container {
            max-width: 350px;
            margin: 0 auto;
            padding: 59px;
            background-color: #13121269;
            border-radius: 5px;
            }

            label {
            font-weight: bold;
            display: block;
            margin-bottom: 10px;
            }

            .inpdddut[type="file"] {
            padding: 10px;
            margin-bottom: 20px;
            border: none;
            background-color: #1aa3bb;
            border-radius: 5px;
            width: 100%;
            cursor: pointer;
            }

            .inpdddut[type="submit"] {
            padding: 10px 20px;
            background-color: #008CBA;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            }

            .inpdddut[type="text"] {
            padding: 10px;
            margin-bottom: 20px;
            border: none;
            background-color: #1aa3bb;
            border-radius: 5px;
            width: 100%;
            cursor: pointer;
            }

            .inpdddut[type="submit"]:hover {
            background-color: #006F8F;
            }
    
        </style>
    </body>
</html> 