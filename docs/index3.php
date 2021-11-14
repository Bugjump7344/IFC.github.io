<?php
$json = file_get_contents("config.json");
$jsoncf = json_decode($json);
$servername = $jsoncf->servername;
$serverip = $jsoncf->ip;
$serverport = $jsoncf->port;
$api = $jsoncf->api;
$qq = $jsoncf->qq;
$email = $jsoncf->email;
$add = "minecraft://?addExternalServer=".$jsoncf->servername."|".$jsoncf->ip.":".$jsoncf->port;
$motdpe = file_get_contents($jsoncf->api."?ip=".$jsoncf->ip."&port=".$jsoncf->port);
$motd = json_decode($motdpe);
$status = $motd->status;//服务器状态
if ($status == "online"){
    $status = "在线";
} else {
    $status = "不在线";
}
$version = $motd->version;//服务器游戏版本
$online = $motd->online;//服务器在线人数
$max = $motd->max;//服务器最大在线人数
$delay = $motd->delay;//服务器延迟
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="author" content="BE6">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" />
    <!-- Google web font "Open Sans" -->
    <link rel="stylesheet" href="css/all.min.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/templatemo-style.css" />
    <title>标题</title>
  </head>

  <body>
    <div class="columns-bg">
      <!-- Logo & Intro -->
      <section id="logo" class="tm-section-logo tm-section-logo-short">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-12 offset-sm-0 col-md-6 offset-md-6">
              <div class="tm-site-name-container border-bottom-0">
                <div class="tm-site-name-container-inner">
                  <h1 class="text-uppercase tm-text-primary tm-site-name">
                    服务器名称
                  </h1>
                  <p class="tm-text-primary tm-site-description mb-0">
                    简单介绍
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- 1st Section, Full Width Image -->
      <section class="tm-p-3-section-1">
        <div class="container-fluid" id="bg_img_31"></div>
      </section>

      <!-- 2nd Section -->
      <section>
        <div class="container-fluid">
          <div class="row">
            <div
              class="col-sm-12 col-md-6 px-0 tm-sm-bg-blue tm-section-image-container tm-img-left-container tm-section-icon-container">
              <i class="fas fa-6x fa-snowflake text-white"></i>
            </div>
            <div class="col-sm-12 col-md-6 px-0">
              <div class="tm-section-text-container-8 h-100">
                <h2 class="tm-section-title-mb tm-text-primary-bright">
                  图文
                </h2>
                <hr class="tm-hr-mb tm-hr-primary-bright" />
                <p class="tm-p-mb tm-text-gray">
                  
                </p>
                <div class="text-right">
                  <a href="#section_3" class="btn btn-primary">以阅</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- 3rd Section, Full Width Image -->
      <section id="section_3" class="tm-p-3-section-3">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12 px-0">
              <div class="tm-overlay-container" id="bg_img_32">
                <div
                  class="text-white tm-section-text-container-8 tm-bg-black-alpha tm-text-overlay">
                  <h2 class="tm-section-title-mb">悬浮图文</h2>
                  <hr class="tm-hr-mb tm-hr-white" />
                  <p class="tm-p-mb">
                    
                  </p>
                  <p class="mb-0">
                    
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- 4th Section -->
      <section>
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-12 col-md-6 p-0 tm-sm-bg-blue">
              <div
                class="tm-section-text-container-8 tm-bg-black-alpha text-white">
                <h2 class="tm-section-title-mb"><?php echo "<a href=".$add.">服务器</a>";?></h2>
                <hr class="tm-hr-mb tm-hr-white" />
							<?php
                    if ($status == "在线") {
                    echo "<p class='info-text'>在线人数:".$online."/".$max."</p>";
                    echo "<p class='info-text'>延迟:".$delay."ms</p>";
                    echo "<p class='info-text'>支持的游戏版本:".$version."</p>";
                    } else {
                    echo "<p class='info-text'>请联系<a href=".$qq.">管理员</p>";
                    }
                    ?>
                </p>
                
              </div>
            </div>
            <div
              class="col-sm-12 col-md-6 px-md-0 tm-section-image-container tm-img-left-container tm-section-icon-container">
              <i class="fas fa-6x fa-award tm-text-primary mb-3"></i>
              <p class="tm-text-gray mb-1">自定义</p>
              <p class="tm-text-secondary small">自定义</p>
            </div>
          </div>
        </div>
      </section>

      <!-- Contact -->
      <section id="contact" class="tm-section-contact">
      <div class="row tm-contact-section">
        <div class="col-md-6 px-0">
          <div class="tm-bg-white-alpha tm-contact-left">
            <div class="media mb-5">
              <a href="#" class="tm-contact-link">
                <span class="tm-contact-icon-container">
                  <span class="tm-contact-icon-container-inner">
                    <i class="fab fa-qq tm-contact-icon"></i>
                  </span>
                </span>
                <span class="media-body"> QQ群 </span>
              </a>
            </div>
            <div class="media mb-5">
              <a href="mailto:" class="tm-contact-link">
                <span class="tm-contact-icon-container">
                  <span class="tm-contact-icon-container-inner">
                    <i class="fas fa-envelope tm-contact-icon"></i>
                  </span>
                </span>
                <span class="media-body"><?php echo $email;?></span>
              </a>
            </div>
            <div class="media">
              <a href="" class="tm-contact-link">
                <span class="tm-contact-icon-container">
                  <span class="tm-contact-icon-container-inner">
                    <i class="fas fa-map-marker-alt tm-contact-icon"></i>
                  </span>
                </span>
                <span class="media-body">
                  自定义
                </span>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6 px-0">
          <div class="tm-contact-form-container">
            <?php echo "<form action=".$phpapi." method='POST' class='tm-contact-form'>";?>
              <div class="form-group">
                <input type="text" id="contact_qq" name="contact_qq"
                  class="form-control rounded-0 border-top-0 border-right-0 border-left-0" placeholder="QQ号"
                  required />
              </div>
              <div class="form-group">
                <input type="email" id="contact_email" name="contact_email"
                  class="form-control rounded-0 border-top-0 border-right-0 border-left-0" placeholder="Email"
                  required />
              </div>
              <div class="form-group">
                <textarea rows="4" id="contact_message" name="contact_message"
                  class="form-control rounded-0 border-top-0 border-right-0 border-left-0" placeholder="Xbox ID"
                  required></textarea>
              </div>
              <div class="text-right">
                <button type="submit" class="btn tm-btn-submit rounded-0">
                  提交
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

      <section id="outro">
        <div class="container-fluid">
          <div class="row">
            <footer class="col-sm-12 col-md-6 offset-md-6 px-md-0 ">
              <p class="tm-copyright-text mb-0 tm-text-primary">Copyright &copy; 2019.Company name All rights reserved.<a target="_blank" href="http://be6.top">&#x7F51;&#x9875;&#x6A21;&#x677F;</a></p>
            </footer>
          </div>
        </div>
      </section>
    </div>
    <!-- /.columns-bg -->

    <script src="js/jquery-3.3.1.min.js"></script>
    <script>
      $(function() {
        // Dynamically set the size of full width background image when browser resize
        $(window).resize(function() {
          const maxImgHeight = 640;
          const minImgHeight = 450;
          const maxContainerWidth = 1310;
          const browserWidth = $(window).width();

          let imgHeight = browserWidth * (maxImgHeight / maxContainerWidth);

          if (imgHeight > maxImgHeight) {
            imgHeight = maxImgHeight;
          } else if (imgHeight < minImgHeight) {
            imgHeight = minImgHeight;
          }

          $("#bg_img_31").height(imgHeight);
        });
      });
    </script>
  </body>
</html>