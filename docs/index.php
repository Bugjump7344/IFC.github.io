<?php
$json = file_get_contents("config.json");
$jsoncf = json_decode($json);
$servername = $jsoncf->servername;
$serverip = $jsoncf->ip;
$serverport = $jsoncf->port;
$api = $jsoncf->api;
$qq = $jsoncf->qq;
$email = $jsoncf->email;
$phpapi = $jsoncf->phpapi;
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
    <section id="logo" class="tm-section-logo">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-12 offset-sm-0 col-md-6 offset-md-6">
            <div class="tm-site-name-container">
              <div class="tm-site-name-container-inner">
                <h1 class="text-uppercase tm-text-primary tm-site-name">
                  服务器名称
                </h1>
                <p class="tm-text-primary tm-site-description">
                  简单介绍
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Intro -->
    <section id="intro" class="tm-p-1-section-1">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">
            <div class="tm-section-text-container">
              <i class="tm-text-white">
                <p class="mb-0">
                  基本信息</p>
              </i>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Our Place -->
    <section id="our_place">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12 col-lg-6 tm-section-image-container tm-img-left-container">
            <img src="img/forty_image_01.jpg" alt="Image" class="img-fluid" />
          </div>
          <div class="col-md-12 col-lg-6">
            <div class="tm-section-text-container-2">
              <h2 class="tm-text-primary tm-section-title-mb tm-sm-bg-white-alpha">
                图文介绍
              </h2>
              <div class="tm-text-gray">
                <p class="mb-4">
                    啊吧啊吧啊吧啊吧啊吧啊吧啊吧啊吧啊吧啊吧啊吧啊吧啊吧啊吧啊吧啊吧啊吧啊吧
                    啊吧啊吧啊吧啊吧啊吧啊吧啊吧啊吧啊吧啊吧啊吧啊吧啊吧啊吧啊吧啊吧啊吧啊吧啊吧啊吧啊吧
                    啊吧啊吧啊吧啊吧啊吧啊吧啊吧啊吧啊吧啊吧啊吧啊吧啊吧啊吧啊吧啊吧啊吧啊吧啊吧啊吧啊吧
                </p>
                <p class="mb-0">
                  啊吧啊吧啊吧啊吧啊吧啊吧啊吧啊吧啊吧啊吧啊吧啊吧啊吧啊吧啊吧啊吧啊吧啊吧啊吧啊吧啊吧
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Fusce, Section 4 -->
    <section id="section_4" class="tm-section-4">
      <div class="container-fluid">
        <div class="row flex-column-reverse flex-lg-row">
          <div class="col-md-12 col-lg-6 tm-text-left-container">
            <div class="tm-section-text-container-3 tm-bg-white-alpha h-100">
              <h2 class="tm-text-accent tm-section-title-mb">
                图文介绍
              </h2>
              <p class="mb-0">
                啊吧啊吧啊吧啊吧啊吧啊吧啊吧啊吧啊吧啊吧啊吧啊吧啊吧啊吧啊吧啊吧啊吧啊吧啊吧啊吧啊吧
              </p>
            </div>
          </div>
          <div class="col-md-12 col-lg-6 tm-section-image-container tm-img-right-container">
            <img src="img/forty_image_02.jpg" alt="Image" class="img-fluid tm-img-right" />
          </div>
        </div>
      </div>
    </section>

    <!-- Beautiful Rollovers -->
    <section id="gallery">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12 tm-section-title-mb tm-gallery-title-col">
            <h2 class="tm-section-title-2">响应式跳转</h2>
            <hr class="tm-section-title-underline" />
          </div>

          <div class="col-12">
            <div class="grid">
              <figure class="effect-duke mb-3">
                <img src="img/forty_image_11.jpg" alt="Image" class="img-fluid" />
                <figcaption>
                  <h2>乱 <span>杀</span></h2>
                  <p>当他看着天空时，他感到自己在奔跑。</p>
                  <a href="#">查看更多</a>
                </figcaption>
              </figure>
              <figure class="effect-duke">
                <img src="img/forty_image_12.jpg" alt="Image" class="img-fluid" />
                <figcaption>
                  <h2>乱 <span>杀</span></h2>
                  <p>当他看着天空时，他感到自己在奔跑。</p>
                  <a href="#">查看更多</a>
                </figcaption>
              </figure>
              <figure class="effect-duke mb-3">
                <img src="img/forty_image_13.jpg" alt="Image" class="img-fluid" />
                <figcaption>
                  <h2>乱 <span>杀</span></h2>
                  <p>当他看着天空时，他感到自己在奔跑。</p>
                  <a href="#">查看更多</a>
                </figcaption>
              </figure>
              <figure class="effect-duke">
                <img src="img/forty_image_14.jpg" alt="Image" class="img-fluid" />
                <figcaption>
                  <h2>乱 <span>杀</span></h2>
                  <p>当他看着天空时，他感到自己在奔跑。</p>
                  <a href="#">查看更多</a>
                </figcaption>
              </figure>
            </div>
          </div>

          <div class="col-md-6 tm-section-col-4">
            <div class="tm-section-text-container-4">
              <p class="tm-text-secondary mb-0">
              <?php echo "<a href=".$add.">服务器</a>";?>
							</p>
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
                <textarea rows="4" id="contact_id" name="contact_id"
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
          <footer class="col-sm-12 col-md-6 offset-md-6 px-md-0">
            <p class="tm-copyright-text mb-0 tm-text-primary">Copyright &copy; 2019.Company name All rights reserved.<a
                target="_blank" href="http://be6.top">&#x7F51;&#x9875;&#x6A21;&#x677F;</a></p>
          </footer>
        </div>
      </div>
    </section>
  </div>
  <!-- /.columns-bg -->
</body>

</html>