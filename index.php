<!DOCTYPE html>
<html lang="jp">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>情熱Factory</title>
  <meta name="description" content="">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script type="text/javascript" src="assets/js/index.js" defer></script>
  <script src="assets/js/lib/swiper-bundle.min.js" defer></script>
</head>
<body>
  <div class="l-wrapper">
    <header class="p-header">
      <div class="p-header__inner">
        <div class="p-header__logo">
          <a class="p-header__link" href="index.html">
            <img class="p-header__logo" src="assets/images/top/logo.png" alt="">
            <p class="p-header__title">情熱Factory</p>
          </a>
        </div>
        <nav class="p-header__nav">
          <ul class="p-header__navList">
            <li class="p-header__listItem">
              <a class="p-header__navLink">事業案内</a>
              <ul class="p-header__dropdown__lists">
                <li class="p-header__dropdown__list"><a href="training.html">企業研修事業</a></li>
                <li class="p-header__dropdown__list"><a href="school.html">習い事事業</a></li>
                <li class="p-header__dropdown__list"><a href="consulting.html">コンサルティング事業</a></li>
              </ul>
            </li>
            <li class="p-header__listItem">
              <a href="case.html" class="p-header__navLink">導入事例</a>
            </li>
            <li class="p-header__listItem">
              <a href="recruit.html" class="p-header__navLink">採用情報</a>
            </li>
            <li class="p-header__listItem">
              <a href="company.html" class="p-header__navLink">企業情報</a>
            </li>
          </ul>
          <div class="p-header__contact">
            <a href="" class="p-header__btn">
              <img src="assets/images/top/icon.png" alt="contact" class="p-header__icon">
              <span>お問い合わせ</span>
            </a>
          </div>
        </nav>
      </div>
      <div class="p-header__hm">
        <input type="checkbox" class="p-header__check" id="menu-btn-check">
        <label for="menu-btn-check" class="p-header__menu"><span></span></label>
        <!--ここからメニュー-->
        <div class="p-header__content">
          <ul>
            <li>
              <a href="#">企業研修事業</a>
            </li>
            <li>
              <a href="#">習い事事業</a>
            </li>
            <li>
              <a href="#">コンサルティング事業</a>
            </li>
            <li>
              <a href="#">導入事例</a>
            </li>
            <li>
              <a href="#">採用情報</a>
            </li>
            <li>
              <a href="#">会社概要</a>
            </li>
            <li>
              <a href="#">お問い合わせ</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="p-top">
        <div class="p-top__inner loadAnime">
          <div class="swiper">
            <!-- 必要に応じたwrapper -->
            <div class="swiper-wrapper">
              <!-- スライド -->
              <div class="swiper-slide"><img src="assets/images/top/top-image.png" alt=""></div>
              <div class="swiper-slide"><img src="assets/images/top/consulting.png" alt=""></div>
              <div class="swiper-slide"><img src="assets/images/top/school.png" alt=""></div>
            </div>
          </div>
          <div class="p-top__titleBox loadAnime">
            <ul>
              <li>
                <h2 class="p-top__title">人の行動を科学し生産性を上げる</h2>
              </li>
              <li>
                <p class="p-top__subtitle">いつやるかを今からやるに変え、行動の質量が最大限増加する</p>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </header>
    <main>
      <div class="l-main">
        <section class="p-vision">
          <div class="p-vision__inner fadeUpTrigger">
            <div class="p-vision__backfont">
              <p>OUR VISION</p>
            </div>
            <div class="p-vision__textBox">
              <h2 class="p-vision__subTitle">
                テキストサンプルテキストサンプル<br>
                テキストサンプルテキストサンプル<br>
              </h2>
              <p class="p-vision__text">
                テキストサンプルテキストサンプルテキストサンプルテキストサンプル<br>
                テキストサンプルテキストサンプルテキストサンプルテキストサンプル<br>
                テキストサンプルテキストサンプルテキストサンプルテキストサンプル<br>
              </p>
              <div class="p-vision__btn">
                <div class="c-btn">
                  <a href="company.html" class="c-btn__wrap">View More</a>
                  <span></span>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="p-service">
          <div class="p-service__inner">
            <div class="p-service__titleBox">
              <p class="c-subtext">Service</p>
              <h2 class="c-mainTitle">事業紹介</h2>
            </div>
            <div class="p-service__list lineAnimeTrigger">
              <div class="p-service__bgCW fadeUpTrigger">
                <a class="p-service__link" href="#">
                  <div class="p-service__mask">
                      <div class="p-service__container">
                        <div class="p-service__box">
                          <p class="p-service__number">Conmpany Training</p>
                          <h3 class="p-service__title">企業研修事業</h3>
                        </div>
                        <p class="p-service__text">
                          サンプルテキストサンプルテキストサンプルテキスト<br>
                          サンプルテキストサンプルテキストサンプルテキスト<br>
                          サンプルテキストサンプルテキストサンプルテキスト<br>
                        </p>
                      </div>
                  </div>
                </a>
              </div>
              <div class="p-service__bgCW fadeUpTrigger">
                <a class="p-service__link" href="#">
                  <div class="p-service__mask">
                      <div class="p-service__container">
                        <div class="p-service__box">
                          <p class="p-service__number">School</p>
                          <h3 class="p-service__title">習い事事業</h3>
                        </div>
                        <p class="p-service__text">
                          サンプルテキストサンプルテキストサンプルテキスト<br>
                          サンプルテキストサンプルテキストサンプルテキスト<br>
                          サンプルテキストサンプルテキストサンプルテキスト<br>
                        </p>
                      </div>
                  </div>
                </a>
              </div>
              <div class="p-service__bgCW fadeUpTrigger">
                <a class="p-service__link" href="#">
                  <div class="p-service__mask">
                      <div class="p-service__container">
                        <div class="p-service__box">
                          <p class="p-service__number">Consulting</p>
                          <h3 class="p-service__title">成果報酬型<br>コンサルティング事業</h3>
                        </div>
                        <p class="p-service__text">
                          サンプルテキストサンプルテキストサンプルテキスト<br>
                          サンプルテキストサンプルテキストサンプルテキスト<br>
                          サンプルテキストサンプルテキストサンプルテキスト<br>
                        </p>
                      </div>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </section>
        <section class="p-news">
          <div class="p-news__inner fadeUpTrigger">
            <p class="c-subtext">News</p>
            <h2 class="c-mainTitle">新着情報</h2>
            <ul class="p-news__list">
              <li class="p-news__listItem">
                <a href="" class="p-news__link">
                  <img class="p-news__img" src="/assets/images/top/school.png" alt="">
                  <p class="p-news__date">2022/07/01</p>
                  <p class="p-news__text">HPリニューアルのお知らせ</p>
                </a>
              </li>
              <li class="p-news__listItem">
                <a href="" class="p-news__link">
                  <img class="p-news__img" src="/assets/images/top/school.png" alt="">
                  <p class="p-news__date">2022/07/01</p>
                  <p class="p-news__text">HPリニューアルのお知らせ</p>
                </a>
              </li>
              <li class="p-news__listItem">
                <a href="" class="p-news__link">
                  <img class="p-news__img" src="/assets/images/top/school.png" alt="">
                  <p class="p-news__date">2022/07/01</p>
                  <p class="p-news__text">HPリニューアルのお知らせ</p>
                </a>
              </li>
            </ul>
            <div class="p-news__btn">
              <div class="c-btn">
                <a href="company.html" class="c-btn__wrap">View More</a>
                <span></span>
              </div>
            </div>
          </div>
        </section>
      </div>
    </main>
    <section class="p-contact">
      <div class="p-contact__inner ">
        <div class="p-contact__top fadeUpTrigger">
          <p class="c-subtext">CONTACT</p>
          <p class="c-mainTitle">お問い合わせ</p>
          <p class="p-contact__subtitle">セミナー、研修、コンサルティング等の弊社へのご依頼に</p>
          <p class="p-contact__subtitle">関するご相談は以下よりお気軽にお問い合わせください。</p>
          <div class="p-contact__container">
            <div class="p-contact__wrap">
              <img class="p-contact__icon" src="assets/images/top/phone.png" alt="">
              <p class="p-contact__text">00-0000-0000</p>
            </div>
            <div class="p-contact__wrap">
              <img class="p-contact__icon" src="assets/images/top/contact-icon.png" alt="">
              <a class="c-btn__wrap" href="contact.html">
               お問い合わせ
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <footer class="p-footer">
      <div class="p-footer__inner">
        <ul class="p-footer__lists">
          <li class="p-footer__list">
            <a href="p-footer__link">
              <p>サイトマップ</p>
            </a>
          </li>
          <li class="p-footer__list">
            <a href="p-footer__link">
              <p>個人情報保護について</p>
            </a>
          </li>
          <li class="p-footer__list">
            <a href="p-footer__link">
              <p>プライバシーポリシー</p>
            </a>
          </li>
        </ul>
        <p class="p-footer__copyright">
          COPYRIGHT © JYOUNETSU- FACTORY ALL RIGHTS RESERVED
        </p>
      </div>
    </footer>
  </div>
</body>
</html>