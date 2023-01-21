@extends('master.layout')
  @section('content')


  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="hero-container" data-aos="fade-in">
      <h1>E-Pray</h1>
      <p>Keep prayer <span class="typed" data-typed-items=" Subh, Zohr, Asr, Maghrib, Isya"></span></p>
    </div>
  </section><!-- End Hero -->

  <main id="main">

  <section id="logout" class="logout">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4" style="margin-top:20px;">
                    <hr>
                    <a class="btn btn-primary d-inline-block m-2 float-right" href ="logout">Logout</a>
                </div>
            </div>
        </div>

    </section>

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>Booking</h2>
          <p>Surau management in mahallah seems a little bit unmanaged in term of tasks division causing lack of use of surau. To further encourage the use of surau in orderly manners, our group decided to develop a system to organize a better management of surau.</p>
        </div>

        <div class="row">
          <div class="col-lg-4" data-aos="fade-right">
            <img src="assets/img/imam.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
            <h3>IMAM &amp; MUAZZIN</h3>
            <section id="contact" class="paralax-mf footer-paralax bg-image sect-mt4 route" style="background-image: url(assets/img/overlay-bg.jpg)">
      <div class="overlay-mf"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12" >
            <div class="contact-mf">
              <div id="contact" class="box-shadow-full">
                <div class="row">
                  <div class="col-md-12">
                    <div class="title-box-2">
                      <h5 class="title-left">
                        List of Student
                      </h5>
                    </div>
                    <!-- go to page add new booking -->
                      <a href="student-list">
                          <button class="btn btn-primary d-inline-block m-2 float-right">Add New Booking</button>
                      </a>
                    <div>
                    <table class="table table-striped table-dark">
                     <thead>
                      <tr>
                         <th scope="col">No</th>
                        <th scope="col"> Name</th>
                        <th scope="col">Time</th>
                        <th scope="col">Mahallah</th>
                        <th scope="col">Position</th>
                        <th scope="col">Phone No</th>
                     </tr>
                    </thead>
                    <!-- foreach -->
                    <tbody>
                    <tr>
                     <th scope="row">1</th>
                      <td>Muhammad Fadlin</td>
                      <td>Subh</td>
                      <td>Siddiq</td>
                      <td>Imam</td>
                      <td>014-9214057</td>
                      </tr>
                     <tr>
                    <th scope="row">2</th>
                    <td>Muhammad Izzudin</td>
                      <td>Maghrib</td>
                      <td>Faruq</td>
                      <td>Imam</td>
                      <td>011-51391789</td>
                     </tr>
                     <tr>
                       <th scope="row">3</th>
                       <td>Muhammad Afiq</td>
                      <td>Zohr</td>
                      <td>Faruq</td>
                      <td>Bilal</td>
                      <td>011-2893057</td>
                    </tr>
                    <tr>
                       <th scope="row">4</th>
                       <td>Syafiq Ahmad</td>
                      <td>Zohr</td>
                      <td>Salahudin</td>
                      <td>Imam</td>
                     <td>014-953448</td>
                    </tr>
                     </tbody>
                    </table>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                  
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
        
    </section><!-- End About Section -->

    <!-- ======= Facts Section ======= -->
    <section id="facts" class="facts">
      <div class="container">

        <div class="section-title">
          <h2>Facts</h2>
          <p>There are a lot of students who waste their time memorising ayat Al-Quran in high school since they can not become imam in college.</p>
        </div>

        <div class="row no-gutters">

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up">
            <div class="count-box">
              <i class="bi bi-emoji-smile"></i>
              <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Students study</strong> at Sekolah Menengah Agama Negeri </p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="count-box">
              <i class="bi bi-journal-richtext"></i>
              <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Students</strong> that memorize ayat Al-Quran</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="count-box">
              <i class="bi bi-headset"></i>
              <span data-purecounter-start="0" data-purecounter-end="1453" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Students</strong> that busy and forget their memorize</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="count-box">
              <i class="bi bi-people"></i>
              <span data-purecounter-start="0" data-purecounter-end="32" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Students University</strong> still memorize ayat Al-Quran</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Facts Section -->

    <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Rules</h2>
          <p>It is said about 80 per cent of the total Muslim population of the world are Sunni Muslims and the majority of them are Hanafis followed by Shafis.</p>
        </div>

        <div class="row skills-content">

          <div class="col-lg-6" data-aos="fade-up">

          

            <div class="progress">
              <span class="skill">Sahfis <i class="val">90%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          

          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">

            <div class="progress">
              <span class="skill">Hanafis<i class="val">80%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

        

          </div>

        </div>

      </div>
    </section><!-- End Skills Section -->

    <!-- ======= Resume Section ======= -->
    <section id="resume" class="resume">
      <div class="container">

        <div class="section-title">
          <h2>Time Prayer</h2>
          <p>In a hadith: The Prophet was once asked: What are the most important practices? He said: Pray at the beginning of time. - [HR Abu Daud 362].
</p>
        </div>

        <div class="row">
          <div class="col-lg-6" data-aos="fade-up">
            <h3 class="resume-title">Perak</h3>
            <div class="resume-item pb-0">
              <h4>Ipoh</h4>
              <ul>
                <li><strong>Subh </strong> - 0611H </li>
                <li><strong>Zohr </strong> - 1325H </li>
                <li><strong>Asr </strong> - 1644H </li>
                <li><strong>Maghrib </strong> - 1921H </li>
                <li><strong>Isya </strong> - 2035H </li>
              </ul>
            </div>

            <h3 class="resume-title">Kuala Lumpur</h3>
            <div class="resume-item">
              <h4>Gombak</h4>
              <ul>
                <li><strong>Subh </strong> - 0612H </li>
                <li><strong>Zohr </strong> - 1327H </li>
                <li><strong>Asr </strong> - 1648H </li>
                <li><strong>Maghrib </strong> - 1925H </li>
                <li><strong>Isya </strong> - 2037H </li>
              </ul>
            </div>
            <div class="resume-item">
              <h4>Petaling Jaya</h4>
              <ul>
                <li><strong>Subh </strong> - 0612H </li>
                <li><strong>Zohr </strong> - 1325H </li>
                <li><strong>Asr </strong> - 1644H </li>
                <li><strong>Maghrib </strong> - 1922H </li>
                <li><strong>Isya </strong> - 2036H </li>
              </ul>
            </div>
          </div>
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <h3 class="resume-title">Kedah</h3>
            <div class="resume-item">
              <h4>Jitra</h4>
              <ul>
                <li><strong>Subh </strong> - 0619H </li>
                <li><strong>Zohr </strong> - 1329H </li>
                <li><strong>Asr </strong> - 1649H </li>
                <li><strong>Maghrib </strong> - 1927H </li>
                <li><strong>Isya </strong> - 2040H </li>
              </ul>
            </div>
            <div class="resume-item">
              <h4>Alor Setar</h4>
              <ul>
                <li><strong>Subh </strong> - 0620H </li>
                <li><strong>Zohr </strong> - 1330H </li>
                <li><strong>Asr </strong> - 1650H </li>
                <li><strong>Maghrib </strong> - 1930H </li>
                <li><strong>Isya </strong> - 2041H </li>
              </ul>
            </div>
          </div>
        </div>
      <div style="center" >
         <a href="report-list">
         <button class="btn btn-primary d-inline-block m-2 float-right">Update Task</button>
         </a>
      </div>
      </div>
    </section><!-- End Resume Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Rules</h2>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">First</li>
              <li data-filter=".filter-card">Second</li>
              <li data-filter=".filter-web">Third</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/rules1.png" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/rules1.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/rules6.png" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/rules6.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/rules2.png" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/rules2.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 2"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/rules4.png" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/rules4.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 2"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/rules7.png" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/rules7.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 2"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/rules3.png" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/rules3.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/rules5.png" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/rules5.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 1"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/sujud.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/sujud.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/salam.png" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/salam.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title">
          <h2>Services</h2>
          <p>About our website</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up">
            <div class="icon"><i class="bi bi-briefcase"></i></div>
            <h4 class="title"><a href="">Designer</a></h4>
            <p class="description">a person who plans the look or workings of something prior to it being made, by preparing drawings or plans.</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
            <div class="icon"><i class="bi bi-card-checklist"></i></div>
            <h4 class="title"><a href="">System</a></h4>
            <p class="description">a set of principles or procedures according to which something is done; an organized scheme or method.
</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
            <div class="icon"><i class="bi bi-bar-chart"></i></div>
            <h4 class="title"><a href="">Company</a></h4>
            <p class="description">a commercial business.</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
            <div class="icon"><i class="bi bi-binoculars"></i></div>
            <h4 class="title"><a href="">Mufti Wilayah</a></h4>
            <p class="description">Mufti Wilayah Persekutuan adalah pegawai agama yang bertanggungjawab dalam membuat fatwa di Wilayah Persekutuan.</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
            <div class="icon"><i class="bi bi-brightness-high"></i></div>
            <h4 class="title"><a href="">Time Prayer</a></h4>
            <p class="description">Salah times are prayer times when Muslims perform salah. The term is primarily used for the five daily prayers</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
            <div class="icon"><i class="bi bi-calendar4-week"></i></div>
            <h4 class="title"><a href="">Setting</a></h4>
            <p class="description">to set the option </p>
          </div>
        </div>

      </div>
    </section><!-- End Services Section -->

    

  </main><!-- End #main -->

  @endsection