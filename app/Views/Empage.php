<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="bg"></div>
<div class="bg bg2"></div>
<div class="bg bg3"></div>
    <h1>the library</h1>
    <h5>books</h5>
    <div class="coliction">
        <div class="image">
            <img src="https://i.pinimg.com/564x/53/61/eb/5361eb80ac0bdca85d2f5650acc3ee6c.jpg" class="imaage">
            <p class="name">  Rich dad Poor dad</p>
            <p class="discription"></p>
            
        </div>
        <div class="image">
            <img src="https://i.pinimg.com/564x/06/57/37/0657373e30b61c9edb71410de4701629.jpg" alt="">
            <p class="name">Atomic Habits</p>
            <p class="discription"></p>
        </div>
        <div class="image">
            <img src="https://i.pinimg.com/564x/27/7a/0a/277a0a99da5ac0db73402423edc5d475.jpg" alt="">
            <p class="name">FIND YOUR WHY</p>
            <p class="discription">
            </p>
        </div>
        <div class="image">
            <img src="https://i.pinimg.com/564x/06/68/ce/0668ce35632833d5248f1294ede7eef0.jpg" alt="">
            <p class="name">Sell with STORY</p>
            <p class="discription"></p>
        </div>
    </div>

    <style>
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


@keyframes slide {
  0% {
    transform:translateX(-25%);
  }
  100% {
    transform:translateX(25%);
  }
}
        body{
            background: rgb(73,107,135);
            background: linear-gradient(180deg, rgba(73,107,135,1) 0%, rgba(24,23,22,1) 100%);
        }
        h1{
            margin: 20px;
            text-align: center;
            font-size: 100px;
        }
        h5{
            font-size: 50px;
            color:white;
            text-align: center;
        }
        .coliction{
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
        }
        .image{
            width: 359px;
            height: 454px;
            background-color: black;
            color:white;
            padding-top: 73px;
            display: grid;
            justify-content: center;
            align-items: center;
            margin: 20px;
            background: rgba(0, 0, 0, .7);
            border-radius: 26px;
            cursor:pointer;
        }
        .name{
            font-size: 30px;
        }
        img{
            height: 350px;
            width: 250px;
            border-radius: 13px;
        }
        img:hover{
            height: 370px;
            width: 270px;
            transition:0.5s;
        }
        .name{
            text-align:center;
        }
    </style>
</body>
</html>