<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>my book</title>
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
  <div class="login-box">
    <p>Create new account</p>
    <form class="form" action="<?=  base_url('auth/createUser') ?>" method="post">
      <?= csrf_field(); ?>
            <div class="user-box">
              <input  placeholder="Enter Name" 
                      type="text" 
                      name="name" 
                      value="<?= set_value('name');  ?>">
                      <span class="text-danger text-sm">
                <?= isset($validation) ? display_form_errors($validation, 'name') : '' ?>
              </span>
              <label>Name </label>
            </div>
            <div class="user-box">
                <input placeholder="Enter Surname" type="text" name="surname" value="<?= set_value('surname');  ?>">
                <span>
                <?= isset($validation) ? display_form_errors($validation, 'surname') : '' ?>
              </span>
              <label>Surname</label>
            </div>
            <div class="user-box">
                <input placeholder="Enter email" type="email" name="email" value="<?= set_value('email');  ?>">
                <span>
                <?= isset($validation) ? display_form_errors($validation, 'email') : '' ?>
              </span>
              <label>Email</label>
            </div>
            <div class="user-box">
                <input placeholder="Enter password" type="password" name="password" value="<?= set_value('password');  ?>">
                <div>
                <span>
                <?= isset($validation) ? display_form_errors($validation, 'password') : '' ?>
              </span>
            </div>
              <label>Password</label>
            </div>

              <input class="submit" type="submit" value="Create">
      </form>
      <p> I already have an account,<a class="loog" href="<?=  site_url('auth/login') ?>"> Login </a></p>
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

.loog{
  color: #fff;
    text-decoration: none;
}
.login-box {
  position: absolute;
  top: 50%;
  left: 50%;
  width: 450px;
  padding: 40px;
  margin: 20px auto;
  transform: translate(-50%, -55%);
  background: rgba(0,0,0,0, 0.9);
  box-sizing: border-box;
  box-shadow: 0 15px 25px rgba(0,0,0,.6);
  border-radius: 10px;
}

.login-box p:first-child {
  margin: 0 0 30px;
  padding: 0;
  color: #fff;
  text-align: center;
  font-size: 1.5rem;
  font-weight: bold;
  letter-spacing: 1px;
}

.login-box .user-box {
  position: relative;
  padding-bottom: 40px;
}

.login-box .user-box input {
  width: 100%;
  padding: 10px 0;
  font-size: 16px;
  color: #fff;
  margin-bottom: 30px;
  border: none;
  border-bottom: 1px solid #fff;
  outline: none;
  background: transparent;
}

.login-box .user-box label {
  position: absolute;
  top: 0;
  left: 0;
  padding: 10px 0;
  font-size: 16px;
  color: #fff;
  pointer-events: none;
  transition: .5s;
}

.login-box .user-box input:focus ~ label,
.login-box .user-box input:valid ~ label {
  top: -20px;
  left: 0;
  color: #fff;
  font-size: 12px;
}

.login-box form a {
  position: relative;
  display: inline-block;
  padding: 10px 20px;
  font-weight: bold;
  color: #fff;
  font-size: 16px;
  text-decoration: none;
  text-transform: uppercase;
  overflow: hidden;
  transition: .5s;
  margin-top: 40px;
  letter-spacing: 3px
}

.login-box a:hover {
  background: #fff;
  color: #272727;
  border-radius: 5px;
}

.login-box a span {
  position: absolute;
  display: block;
}

.login-box a span:nth-child(1) {
  top: 0;
  left: -100%;
  width: 100%;
  height: 2px;
  background: linear-gradient(90deg, transparent, #fff);
  animation: btn-anim1 1.5s linear infinite;
}

@keyframes btn-anim1 {
  0% {
    left: -100%;
  }

  50%,100% {
    left: 100%;
  }
}

.login-box a span:nth-child(2) {
  top: -100%;
  right: 0;
  width: 2px;
  height: 100%;
  background: linear-gradient(180deg, transparent, #fff);
  animation: btn-anim2 1.5s linear infinite;
  animation-delay: .375s
}

@keyframes btn-anim2 {
  0% {
    top: -100%;
  }

  50%,100% {
    top: 100%;
  }
}

.login-box a span:nth-child(3) {
  bottom: 0;
  right: -100%;
  width: 100%;
  height: 2px;
  background: linear-gradient(270deg, transparent, #fff);
  animation: btn-anim3 1.5s linear infinite;
  animation-delay: .75s
}

@keyframes btn-anim3 {
  0% {
    right: -100%;
  }

  50%,100% {
    right: 100%;
  }
}

.login-box a span:nth-child(4) {
  bottom: -100%;
  left: 0;
  width: 2px;
  height: 100%;
  background: linear-gradient(360deg, transparent, #fff);
  animation: btn-anim4 1.5s linear infinite;
  animation-delay: 1.125s
}

@keyframes btn-anim4 {
  0% {
    bottom: -100%;
  }

  50%,100% {
    bottom: 100%;
  }
}

.login-box p:last-child {
  color: #aaa;
  font-size: 14px;
}

.login-box a.a2 {
  color: #fff;
  text-decoration: none;
}

.login-box a.a2:hover {
  background: transparent;
  color: #aaa;
  border-radius: 5px;
}
span{
  color : red;
  font-size: 19px;
  background-color: white;
}
    </style>
</body>
</html>