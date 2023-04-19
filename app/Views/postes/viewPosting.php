<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <title>view posting</title>
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>

    <a class="ADD-POST" href="<?=  site_url('auth/add_post_btn') ?>" >Add a post </a>

      <div class="facebook-box">
        <?php  foreach($posting as $item)  :  ?>
          <div class="content">
              
              
                <div class="right-icon">
                      <i class="material-icons"></i>
                </div>
                <div class="row header">
                  <div class="avatar">
                    <img class="tswira" src="https://pbs.twimg.com/profile_images/1600616897246011403/-fdD3nel_400x400.jpg" alt="image"  />
                  </div>
                  <div class="name">
                    <h5><a href="https://www.facebook.com/yassir.elyasini/" target="_blank">Yassir elyassini</a></h5>
                    <span class="sub">12 April 2023 at 15:00</span>
                  </div>
                </div>
                <div class="row text"><?= $item['title'] ?> </div>
                
                <div class="row thumbnail">
                  <img src="<?= base_url( "uploads/".$item['image']) ?>" alt="image" />
                </div>
            
                <hr/>
        </div>
        <div class="footer">
          <a href="#">5M people</a> like this.
          <div class="row">
            <div class="small-avatar">
              <img class="tswira" src="https://pbs.twimg.com/profile_images/1600616897246011403/-fdD3nel_400x400.jpg" alt="image"/>
            </div>
            <div class="write-comment">
              <input type="text" placeholder="Write your comment...">
            </div>
          </div>
        </div>
        <?php endforeach; ?>
      </div>















        <style>
          .ADD-POST{
            border: none;
            width: 110px;
            height: 34px;
            border-radius: 35px;
            color: white;
            text-align: center;
            padding-top: 10px;
            background-color: #0F52BA;
            font-size: 16px;
            cursor: pointer;
          }

          .ADD-POST:hover{

            font-size: 17px;
            background-color: #131E3A;
          }

          .tswira{
            border-radius: 20px;
          }
            
body {
  background: #E9EAED;
  font-family: helvetica, arial, sans-serif;
  color: #141823;
  display: flex;
  background: linear-gradient(#00C6FF, #0078FF);
  font-size: 14px;
  line-height: 1.38;
}
h1, h2, h3, h4, h5, h6 {
    font-size: 13px;
    color: #141823;
    margin: 0;
    padding: 0;
}

a {
  color: #3b5998;
  cursor: pointer;
  text-decoration: none;
}

hr {
  line-height: 1px;
  height: 1px;
  color: rgba(0, 0, 0, .1);
  background: rgba(0, 0, 0, .1);
  border: 0;
}

img { width: 100%; }

.facebook-box {
  width: 600px;
  margin: -8px auto;
  background: #fff6;
  border-color: #e5e6e9 #dfe0e4 #d0d1d5;
  border-radius: 3px;
}

.facebook-box .right-icon {
  float: right;
  display: inline;
  width: 24px;
  height: 24px;
  color: #eee;
  cursor: pointer;
}

.facebook-box .content {
  padding: 12px;
}

.facebook-box .row.header {
  max-height: 40px;
  margin-bottom: 11px;
}

.facebook-box .header .avatar {
  float: left;
  width: 40px;
  height: 40px;
  margin-right: 8px;
}

.facebook-box .header .name {
  width: calc(100% - 40px - 8px);
}

.facebook-box .header .name h5 {
  margin-bottom: 2px;
  font-weight: 700;
  font-size: 14px;
}

.facebook-box .header .name span {
  color: #fff;
  font-size: 12px;
}

.facebook-box .thumbnail {
  margin-top: 10px;
  margin-left: -1px;
  box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
}

.facebook-box .footer {
  border-top: 0px solid #e1e2e3;
  margin: 0;
  padding: 9px 18px 55px 18px;
  font-size: 12px;
  background: #fff1;
  border-radius: 0 0 3px 3px;
  color: #141823;
  overflow: hidden;
}

.facebook-box .footer .row {
  margin-top: 10px;
  margin-bottom: 2px;
  overflow: hidden;
}

.facebook-box .footer .small-avatar {
  width: 32px;
  height: 32px;
  float: left;
  margin-right: 8px;
}

.facebook-box .footer .write-comment input[type="text"] {
  background: #fff;
  border: 1px solid #dcdee3;
  padding: 7px 7px 7px 5px;
  border-radius: 27px;
  min-height: 16px;
  width: calc(99% - 32px - 22px);
  float: left;
}
        </style>
    </body>
</html>