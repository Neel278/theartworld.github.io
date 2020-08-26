@extends('layouts.master')

@section('title','The Art & Artist')

@section('content')
    <!------------------------------ Preloader ----------------------->
    <div class="preload">
      <img src="./images/preloader-img.png" alt="plane" class="airplane" />
      <h3>Just a second, We are taking you to the new world.....</h3>
      <img src="./images/prelader-cloud.png" class="cloud-1" />
      <img src="./images/prelader-cloud.png" class="cloud-2" />
      <img src="./images/prelader-cloud.png" class="cloud-3" />
    </div>

    <!--------------------------- Header Section ---------------------->
    <header>
      <nav>
        <div class="logo">
          <img src="./images/logo.png" class="img-logo" />
          <h1>Art World</h1>
        </div>

        <ul class="nav-links">
          <li><a href="#index.html">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#gallery">Gallery</a></li>
          <li><a href="#blog">Blog</a></li>
        </ul>

        <div class="burger">
          <div class="line1"></div>
          <div class="line2"></div>
          <div class="line3"></div>
        </div>
      </nav>

      <div class="header-text">
        <h3>Welcome To<br />The Greatest Art World</h3>

        <div id="fly-in">
          <div>Best<span> Artist & Their Art</span></div>
          <div><span>The</span> Art World</div>
          <div><span>Best Place To Find</span>Art & Artist</div>
          <div><span>Every Month </span>New Art Challenges</div>
          <div><span>Show Your </span>Art Talent Here</div>
          <div><span>Art Which</span> You Love</div>
        </div>
      </div>
    </header>

    <!--------------------------- About Section ----------------------->
    <main>
      <div class="about-section">
        <div class="about-section-content">
          <h1>Our Aim :</h1>
          <p>
            Here we connect with you greatest artist and with their beatiful
            art. We have collection of diffrent art pictures in gallery which
            you can visit. We will show you the best art pictures. If u want
            increase your drawing level then follow us on social media & also
            checkout our Blog, where the artist will give you new tricks & tips
            to improve your skills. You can also participate in our every week
            new challenges. We have collection of diffrent types of drawings &
            arts,<br />Check it out Now....
          </p>
          <a href="#gallery" class="btn">Visit Gallery</a>
        </div>
        <img src="./images/about.jpg" class="about-img" />
      </div>
    </main>

    <!--------------------- Responsive Image Gallery ------------------>
    <main>
      <section>
        <div class="container heading text-center">
          <h1 class="text-center title" id="gallery">
            Art Gallery <i class="fas fa-palette"></i>
          </h1>
          <p class="lead">The EARTH without ART is just EH.</p>
        </div>

        <div class="swiper-container">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="imgBox">
                <img src="./images/1.jpg" alt="" />
              </div>
              <div class="details">
                <h3>Lord Krishna<br /><span>By Mitali</span></h3>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="imgBox">
                <img src="./images/2.jpg" alt="" />
              </div>
              <div class="details">
                <h3>Beatifull Girl<br /><span>By Hetal</span></h3>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="imgBox">
                <img src="./images/3.jpg" alt="" />
              </div>
              <div class="details">
                <h3>Sandeep Maheshwari<br /><span>By Mitali</span></h3>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="imgBox">
                <img src="./images/4.jpg" alt="" />
              </div>
              <div class="details">
                <h3>Beautifull Eyes<br /><span>By Hetal</span></h3>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="imgBox">
                <img src="./images/5.jpg" alt="" />
              </div>
              <div class="details">
                <h3>Lovely Night Owl<br /><span>By Hetal</span></h3>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="imgBox">
                <img src="./images/6.jpg" alt="" />
              </div>
              <div class="details">
                <h3>Awesome Art<br /><span>By Hetal</span></h3>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="imgBox">
                <img src="./images/7.jpg" alt="" />
              </div>
              <div class="details">
                <h3>India's Iron Man<br /><span>By Mitali</span></h3>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="imgBox">
                <img src="./images/8.jpg" alt="" />
              </div>
              <div class="details">
                <h3>Music Addicted<br /><span>By Kalgi</span></h3>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="imgBox">
                <img src="./images/9.jpg" alt="" />
              </div>
              <div class="details">
                <h3>Lovely Girl<br /><span>By Sakshi</span></h3>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="imgBox">
                <img src="./images/10.jpg" alt="" />
              </div>
              <div class="details">
                <h3>Tribal Art<br /><span>By Kalgi</span></h3>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="imgBox">
                <img src="./images/11.jpg" alt="" />
              </div>
              <div class="details">
                <h3>Women Art<br /><span>By Mitali</span></h3>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="imgBox">
                <img src="./images/12.jpg" alt="" />
              </div>
              <div class="details">
                <h3>Lord Krishna<br /><span>By Kalgi</span></h3>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="imgBox">
                <img src="./images/13.jpg" alt="" />
              </div>
              <div class="details">
                <h3>Line Composition<br /><span>By Kalgi</span></h3>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="imgBox">
                <img src="./images/14.jpg" alt="" />
              </div>
              <div class="details">
                <h3>Abstract Art<br /><span>By Mitali</span></h3>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="imgBox">
                <img src="./images/15.jpg" alt="" />
              </div>
              <div class="details">
                <h3>Curve Composition<br /><span>By Kalgi</span></h3>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="imgBox">
                <img src="./images/16.jpg" alt="" />
              </div>
              <div class="details">
                <h3>Conch<br /><span>By Kalgi</span></h3>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="imgBox">
                <img src="./images/17.jpg" alt="" />
              </div>
              <div class="details">
                <h3>Beautifull Girl<br /><span>By Sakshi</span></h3>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="imgBox">
                <img src="./images/18.jpg" alt="" />
              </div>
              <div class="details">
                <h3>Badass Girl<br /><span>By Hetal</span></h3>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="imgBox">
                <img src="./images/19.jpg" alt="" />
              </div>
              <div class="details">
                <h3>Bird's Eye View<br /><span>By Hetal</span></h3>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="imgBox">
                <img src="./images/20.jpg" alt="" />
              </div>
              <div class="details">
                <h3>Bad Girl<br /><span>By Hetal</span></h3>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="imgBox">
                <img src="./images/21.jpg" alt="" />
              </div>
              <div class="details">
                <h3>Human Eye<br /><span>By Hetal</span></h3>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="imgBox">
                <img src="./images/22.jpg" alt="" />
              </div>
              <div class="details">
                <h3>Pretty Girl<br /><span>By Sakshi</span></h3>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="imgBox">
                <img src="./images/23.jpg" alt="" />
              </div>
              <div class="details">
                <h3>Smart Boy<br /><span>By Hetal</span></h3>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="imgBox">
                <img src="./images/24.jpg" alt="" />
              </div>
              <div class="details">
                <h3>Illusion 3D Art<br /><span>By Hetal</span></h3>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="imgBox">
                <img src="./images/25.jpg" alt="" />
              </div>
              <div class="details">
                <h3>Love Birds<br /><span>By Mitali</span></h3>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="imgBox">
                <img src="./images/26.jpg" alt="" />
              </div>
              <div class="details">
                <h3>Lovely Lady<br /><span>By Mitali</span></h3>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="imgBox">
                <img src="./images/27.jpg" alt="" />
              </div>
              <div class="details">
                <h3>Conflicting Art<br /><span>By Hetal</span></h3>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="imgBox">
                <img src="./images/28.jpg" alt="" />
              </div>
              <div class="details">
                <h3>Woman In Saree<br /><span>By Hetal</span></h3>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="imgBox">
                <img src="./images/29.jpg" alt="" />
              </div>
              <div class="details">
                <h3>Adorable Girl<br /><span>By Hetal</span></h3>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="imgBox">
                <img src="./images/30.jpg" alt="" />
              </div>
              <div class="details">
                <h3>Foxy Art<br /><span>By Hetal</span></h3>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="imgBox">
                <img src="./images/31.jpg" alt="" />
              </div>
              <div class="details">
                <h3>Gorgeous Art<br /><span>By Hetal</span></h3>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="imgBox">
                <img src="./images/32.jpg" alt="" />
              </div>
              <div class="details">
                <h3>Calligraphy Art<br /><span>By Hetal</span></h3>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="imgBox">
                <img src="./images/33.jpg" alt="" />
              </div>
              <div class="details">
                <h3>Abstract Face<br /><span>By Kalgi</span></h3>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="imgBox">
                <img src="./images/34.jpg" alt="" />
              </div>
              <div class="details">
                <h3>Jalaram Bapa Art<br /><span>By Kalgi</span></h3>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="imgBox">
                <img src="./images/35.jpg" alt="" />
              </div>
              <div class="details">
                <h3>Crafts Vill<br /><span>By Kalgi</span></h3>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="imgBox">
                <img src="./images/36.jpg" alt="" />
              </div>
              <div class="details">
                <h3>Friendship<br /><span>By Kalgi</span></h3>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="imgBox">
                <img src="./images/37.jpg" alt="" />
              </div>
              <div class="details">
                <h3>Quilling Art<br /><span>By Kalgi</span></h3>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="imgBox">
                <img src="./images/38.jpg" alt="" />
              </div>
              <div class="details">
                <h3>Mickey Mouse Art<br /><span>By Kalgi</span></h3>
              </div>
            </div>

          </div>
          <!-- Add Pagination -->
          <div class="swiper-pagination"></div>
        </div>
      </section>
    </main>

    <!----------------------------- Blog Section ------------------------>

    <main>
      <section class="blog-section">
        <div class="container heading text-center">
          <h1 class="text-center title mb-5" id="blog">Blogs</h1>
        </div>

        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-4 col-12">
              <div class="card">
                <div class="imgbx">
                  <img
                    src="./images/Blog-Post-1.jpg"
                    class="card-img-top img-fluid"
                  />
                </div>
                <div class="card-body text-center">
                  <h5 class="card-title">Tips To Draw Beautiful Eyes</h5>
                  <p class="card-text text-justify">
                    Today we will share some tricks & will tell you a secret to
                    draw beautiful eyes as shown above.
                  </p>
                  <a href="" class="btn">Read More</a>
                </div>
              </div>
            </div>

            <div class="col-md-4 col-12">
              <div class="card">
                <div class="imgbx">
                  <img
                    src="./images/Blog-Post-2.jpg"
                    class="card-img-top img-fluid"
                  />
                </div>
                <div class="card-body text-center">
                  <h5 class="card-title">Art That Look's Like Real</h5>
                  <p class="card-text text-justify">
                    If you want to draw images that look's like real come along
                    with us, we will share some secrets with you.
                  </p>
                  <a href="" class="btn">Read More</a>
                </div>
              </div>
            </div>

            <div class="col-md-4 col-12">
              <div class="card">
                <div class="imgbx">
                  <img
                    src="./images/Blog-Post-3.jpg"
                    class="card-img-top img-fluid"
                  />
                </div>
                <div class="card-body text-center">
                  <h5 class="card-title">Draw Like Professional</h5>
                  <p class="card-text text-justify">
                    Want to take your creativity to the next level, Then follow
                    us here. Here are some usefull tricks for you.
                  </p>
                  <a href="" class="btn">Read More</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
@endsection
