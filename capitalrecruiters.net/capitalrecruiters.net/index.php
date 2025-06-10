<?php require 'data.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="apple-mobile-web-app-capable" content="yes"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <meta name="format-detection" content="telephone=no"/>
  <link rel="shortcut icon" href="images/favicon.svg"/>

  <!-- Swiper CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/css/swiper.min.css">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.3/css/bootstrap.min.css">

  <!-- Google Fonts Open Sans -->
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">

  <!-- Fontello Icons -->
  <link href="css/fontello.css" rel="stylesheet" type="text/css"/>

  <!-- Custom CSS -->
  <link href="css/animate.css" rel="stylesheet" type="text/css"/>
  <link href="css/style.css" rel="stylesheet" type="text/css"/>

  <title>Capital Recruiters</title>

  <style>
    /* Use Open Sans for all text */
    body, h1, h2, h3, h4, p, a {
      font-family: 'Open Sans', sans-serif;
    }

    /* Job Posting Section Styles */
    .job-posting h4 {
      font-weight: bold;
      color: #333; /* Darker color for headings */
      margin-top: 20px;
    }

    .job-posting p {
      font-size: 1.2rem; /* Paragraph font size */
      color: #444; /* Dark font color */
      line-height: 1.6;
      margin-bottom: 20px;
    }

    .apply-btn {
      margin-top: 30px;
      text-align: center;
    }

    .apply-btn .btn-primary {
      background-color: #007bff;
      border-color: #007bff;
      color: white;
      padding: 10px 20px;
      font-size: 16px;
      border-radius: 4px;
      text-transform: uppercase;
      text-decoration: none;
    }
  </style>
</head>

<body class="page-style-6 color-style-5">

<header class="header header-style-2 pos-f-t">
  <div class="container-custome">
    <nav class="navbar" role="navigation">
      <button class="navbar-toggler pull-xs-right mobile-menu col-style-1" type="button"
        data-toggle="collapse" data-target="#mainNavbarCollapse">
        <i class="vertical-align"></i>
      </button>
      <a class="navbar-brand vertical-align" href="/">
        <img src="images/logo.svg" style="width:225px;"/>
      </a>
      <div class="nav-list" id="mainNavbarCollapse">
        <ul class="nav navbar-nav pull-lg-right">
          <?php foreach ($menus as $link => $menu) : ?>
            <li class="nav-item">
              <?php if ($menu === 'Freedom') : ?>
                <a class="nav-link" href="<?= $link ?>" target="_blank" rel="noopener noreferrer"><?= $menu ?></a>
              <?php else : ?>
                <a class="nav-link" href="<?= $link ?>"><?= $menu ?></a>
              <?php endif; ?>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>
    </nav>
  </div>
</header>

<!-- Home Section -->
<section class="full-height-baner" id="home">
  <div class="bg" style="background-image:url('<?= $home['bg'] ?>')"></div>
  <div class="main-baner vertical-align">
    <div class="empty-sp-lg-0 empty-sp-md-160 empty-sp-sm-100 empty-sp-xs-100"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 offset-xs-12">
          <div class="title-style-1 text-left">
            <div class="empty-sp-lg-50 empty-sp-md-100 empty-sp-sm-100 empty-sp-xs-100"></div>
            <h1 class="caption-1"><?= $home['caption'] ?></h1>
            <div class="empty-sp-lg-50 empty-sp-md-100 empty-sp-sm-100 empty-sp-xs-100"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="empty-sp-lg-0 empty-sp-md-100 empty-sp-sm-80 empty-sp-xs-70"></div>
  </div>
</section>

<!-- About Us Section -->
<section class="section" id="about-us">
  <div class="section-bg-style"></div>
  <div class="empty-sp-lg-160 empty-sp-md-100 empty-sp-sm-80 empty-sp-xs-70"></div>
  <div class="section-wrap">
    <div class="container">
      <div class="row vertical-wrap no-align-mobile-sm">
        <div class="col-lg-6 col-md-6 col-sm-12 wow fadeInUp">
          <div class="about-me">
            <div class="swiper-container"
                 data-autoplay="0" data-effect="slide"
                 data-slides-per-view="1" data-loop="0"
                 data-speed="800" data-center="0">
              <div class="swiper-wrapper">
                <?php foreach ($about['slider'] as $img) : ?>
                  <div class="swiper-slide">
                    <div class="image">
                      <img src="<?= $img ?>" alt="" class="resp-img">
                    </div>
                  </div>
                <?php endforeach; ?>
              </div>
              <div class="pagination white pagination-type-1"></div>
            </div>
          </div>
          <div class="empty-sp-lg-0 empty-sp-md-50 empty-sp-sm-50 empty-sp-xs-30"></div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 wow fadeInUp">
          <div class="about-item padd-custome-50">
            <div class="title-style-3 text-left">
              <div class="empty-sp-sm-10 empty-sp-xs-10"></div>
              <h3 class="caption-3">ABOUT US</h3>
              <div class="empty-sp-sm-20 empty-sp-xs-20"></div>
              <div class="title-separator"></div>
              <div class="empty-sp-sm-50 empty-sp-xs-30"></div>
              <div class="simple-text size-1 color-3 italic">
                <p><?= $about['p1'] ?></p>
                <div class="empty-sp-sm-10 empty-sp-xs-10"></div>
                <p><?= $about['p2'] ?></p>
              </div>
              <div class="empty-sp-sm-40 empty-sp-xs-30"></div>
              <div class="size-2 name"><?= $about['t3'] ?></div>
              <div class="empty-sp-sm-15 empty-sp-xs-15"></div>
              <div class="simple-text size-1 color-3 italic">
                <p><?= $about['p3'] ?></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="empty-sp-lg-160 empty-sp-md-100 empty-sp-sm-80 empty-sp-xs-70"></div>
</section>

<!-- Services Section -->
<section class="section bg-section-3" id="services">
  <div class="empty-sp-lg-160 empty-sp-md-100 empty-sp-sm-80 empty-sp-xs-70"></div>
  <div class="container">
    <div class="item-img-half wide-sm wow fadeInUp">
      <div class="bg sm-300" style="background-image:url(/images/service.png)"></div>
      <div class="desc-text">
        <div class="empty-sp-lg-100 empty-sp-md-80 empty-sp-sm-50 empty-sp-xs-50"></div>
        <div class=" ">
          <div class="">
            <div class="">
              <div class="title-style-4 center">
                <h3 class="caption-3">Our Services</h3>
                <div class="empty-sp-sm-20 empty-sp-xs-20"></div>
                <div class="title-separator"></div>
                <div class="empty-sp-sm-40 empty-sp-xs-40"></div>
              </div>
              <div class="title-style-4">
                <div class="simple-text size-1 color-3">
                  <ul class="list-img type-3">
                    <?php foreach ($services as $service) : ?>
                      <li><i>▪</i><span><?= $service ?></span></li>
                    <?php endforeach; ?>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="empty-sp-lg-100 empty-sp-md-80 empty-sp-sm-40 empty-sp-xs-40"></div>
      </div>
    </div>
  </div>
  <div class="empty-sp-lg-160 empty-sp-md-100 empty-sp-sm-80 empty-sp-xs-70"></div>
</section>

<!-- Specialisation Section -->
<section class="section" id="specialisation">
  <div class="empty-sp-lg-160 empty-sp-md-100 empty-sp-sm-80 empty-sp-xs-70"></div>
  <div class="section-wrap">
    <div class="container">
      <div class="title-style-1 wow fadeInUp">
        <h2 class="caption-2"><?= $specialisation['title'] ?></h2>
        <div class="empty-sp-sm-10 empty-sp-xs-10"></div>
        <div class="empty-sp-md-70 empty-sp-sm-50 empty-sp-xs-30"></div>
      </div>

      <?php foreach ($specialisation['cardsArr'] as $cards) : ?>
        <div class="row">
          <?php foreach ($cards as $card) : ?>
            <div class="col-lg-4 col-md-4 col-sm-12 wow fadeInUp">
              <div class="service-item-2" style="background: #eda6a6; box-shadow: rgba(0, 0, 0, 0.35) 0 5px 15px;">
                <div class="image">
                  <div class="bg" style="background-image:url(<?= $card['bg'] ?>)">
                    <div class="hold-layer-2"></div>
                  </div>
                  <div class="vertical-align full">
                    <i class="icon-<?= $card['icon'] ?> icon"></i>
                    <div class="empty-sp-sm-30 empty-sp-xs-20"></div>
                    <h4 class="caption-4 color-1"><?= $card['title'] ?></h4>
                  </div>
                </div>
                <div class="empty-sp-sm-40 empty-sp-xs-30"></div>
                <div class="desc">
                  <div class="simple-text size-1 color-2">
                    <ul class="list-img type-3" style="text-align: left;">
                      <?php foreach ($card['works'] as $work) : ?>
                        <li><i style="color: #f3d9b6">▪</i><span style="color: #fff"><?= $work ?></span></li>
                      <?php endforeach; ?>
                    </ul>
                  </div>
                </div>
                <div class="empty-sp-sm-50 empty-sp-xs-30"></div>
              </div>
              <div class="empty-sp-sm-30 empty-sp-xs-30"></div>
            </div>
          <?php endforeach; ?>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
  <div class="empty-sp-lg-160 empty-sp-md-100 empty-sp-sm-80 empty-sp-xs-70"></div>
</section>

<!-- Job Posting Section -->
<section class="section" id="jobs">
  <!-- Job Posting 1 -->
  <div class="title-style-1 wow fadeInUp">
    <h3 class="caption-3">Software Developer I</h3>
    <div class="simple-text italic color-2 size-2">
      <p>Reference #: 5210.001</p>
      <p>Location: Austin, Texas</p>
    </div>
  </div>
  <div class="job-posting wow fadeInUp">
    <h4>JOB DUTIES:</h4>
    <p>Assist clients in developing, maintaining, and enhancing software systems. Collaborate to understand software requirements, create and execute development plans, and ensure timely delivery and functionality compliance. Work with QA to resolve issues in products. Document software development and provide support as needed. Requires travel and/or relocation to various unanticipated U.S. locations. Technologies used include JavaScript, React, Node.js, MySQL.</p>

    <h4>SPECIAL SKILLS:</h4>
    <p>Position requires a Bachelor's Degree in Computer Science, Engineering, or a related field and one (1) year of experience. Experience must include JavaScript, React, Node.js, and MySQL. Requires travel and/or relocation to various unanticipated U.S. locations.</p>

    <h4>TO APPLY:</h4>
    <p>Email resume and cover letter referencing Ref.# 5210.001 to <a href="mailto:hr@capitalrecruiters.net">hr@capitalrecruiters.net</a>.</p>
  </div>

  <!-- Job Posting 2 -->
  <div class="title-style-1 wow fadeInUp">
    <h3 class="caption-3">Software Developer II</h3>
    <div class="simple-text italic color-2 size-2">
      <p>Reference #: 6220.002</p>
      <p>Location: Sulphur Springs, Texas</p>
    </div>
  </div>
  <div class="job-posting wow fadeInUp">
    <h4>JOB DUTIES:</h4>
    <p>Help clients to develop, maintain, or improve software systems. Work with clients to understand requirements for software. Develop software pursuant to agreed-upon plans ensuring compliance with timelines, functionality, and other requirements. Work with QA staff to resolve issues found in products. Document developed software and provide support as necessary. Travel and/or relocation to various unanticipated locations throughout the U.S. required. Work with the following: Java, Spring Boot, Angular, GIT, Oracle DB.</p>

    <h4>SPECIAL SKILLS:</h4>
    <p>Position requires a Master's Degree in Computer Science, Engineering, or related field and six (6) months of experience. Six (6) months of experience must have included: Java, Spring Boot, Angular, GIT, Oracle DB. Travel and/or relocation to various unanticipated locations throughout the U.S. required.</p>

    <h4>TO APPLY:</h4>
    <p>Email resume and cover letter referencing Ref.# 6220.002 to <a href="mailto:hr@capitalrecruiters.net">hr@capitalrecruiters.net</a>.</p>
  </div>

  <!-- Job Posting 3 -->
  <div class="title-style-1 wow fadeInUp">
    <h3 class="caption-3">Business Systems Developer II</h3>
    <div class="simple-text italic color-2 size-2">
      <p>Reference #: 6220.001</p>
      <p>Location: Sulphur Springs, Texas</p>
    </div>
  </div>
  <div class="job-posting wow fadeInUp">
    <h4>JOB DUTIES:</h4>
    <p>Help clients to move their data to new and updated systems. Evaluate client systems to understand data sources and target systems. Develop plans for data migrations and implement them. Customize new systems to meet client needs. Establish and implement testing procedures for new systems. Create and maintain backups. Document the development process. Telecommuting permitted. Work with the following: Ab-Initio ETL, UNIX Shell Scripting, PL/SQL, Oracle, Teradata.</p>

    <h4>SPECIAL SKILLS:</h4>
    <p>Position requires a Bachelor's Degree in Control and Instrumentation Engineering, Computer Science, Engineering, or related field and twelve (12) months experience. One (1) year experience must have included: Ab-Initio ETL, UNIX Shell Scripting, PL/SQL, Oracle, Teradata. Telecommuting permitted.</p>

    <h4>TO APPLY:</h4>
    <p>Email resume and cover letter referencing Ref.# 6220.001 to <a href="mailto:hr@capitalrecruiters.net">hr@capitalrecruiters.net</a>.</p>
  </div>
</section>

<!-- Contact Section -->
<section class="section bg-section-3" id="contact">
  <div class="empty-sp-md-70 empty-sp-sm-50 empty-sp-xs-30"></div>
  <div class="section-wrap">
    <div class="container">
      <div class="title-style-1 wow fadeInUp">
        <h2 class="caption-2">Contact Us</h2>
        <div class="empty-sp-sm-10 empty-sp-xs-10"></div>
        <div class="simple-text italic color-2 size-2">
          <p>Please contact us at email: <a href="mailto:<?= $contact['email'] ?>"><?= $contact['email'] ?></a></p>
          <p>Our Address: <?= $contact['address'] ?></p>
        </div>
        <div class="empty-sp-md-70 empty-sp-sm-50 empty-sp-xs-30"></div>
      </div>
    </div>
  </div>
  <div class="empty-sp-lg-160 empty-sp-md-100 empty-sp-sm-80 empty-sp-xs-70"></div>
</section>

<!-- Footer Section -->
<footer class="footer-style-4 type-3">
  <div class="empty-sp-md-50 empty-sp-md-50 empty-sp-sm-50 empty-sp-xs-20"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="copyright">
          <span>© 2016 All rights reserved. Development with <i class="icon-heart"></i> by</span>
          <a href="#"> Capital Recruiters</a>
        </div>
      </div>
    </div>
    <div class="empty-sp-md-50 empty-sp-md-50 empty-sp-sm-50 empty-sp-xs-20"></div>
  </div>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.3/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.1/isotope.pkgd.min.js"></script>
<script src="js/jarallax.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/all.js"></script>

</body>
</html>
