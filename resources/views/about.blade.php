@extends('layout.secondary')

@section('title', 'Riveside Motocare | About Us')

@section('container')
    
    <body>
        <!-- Page Preloder -->
        <div id="preloder">
            <div class="loader"></div>
        </div>

        <!-- Breadcrumb Section Begin -->
        <section class="breadcrumb-section set-bg spad" data-setbg="img/about-bread.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb-text">
                            <h2>Tentang Kami</h2>
                            <div class="breadcrumb-controls">
                                <a href="#"><i class="fa fa-home"></i> Home</a>
                                <span>About Us</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Breadcrumb End -->

        <!-- Aboutus Section Begin -->
        <section class="aboutus-section spad">
            <div class="container">
                <div class="aboutus-page-text">
                        <div class="row">
                            <div class="col-xl-9 col-lg-10 m-auto">
                            <div class="section-title">
                                <h2>Siapa & Apa Yang Kami Kerjakan?</h2>
                                <p>Kami adalah beberapa anak muda yang senang dan hobby bergelut dalam bidang otomotif, menjadikan Refinishing & Auto Detailing sebagai passion dan usaha kami.</p>
                            </div>
                        </div>
                    </div>
                    <img src="img/about-us.jpg" alt="">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="about-us">
                                <h4>Tentang Kami</h4>
                                <p>Willy and His Friends has spent many years working on they passion, the motorcycle. Beginning his journey as a Paint Specialist at a small garage, willy found his calling in the art and the science of speciality motorcycle appearance. Over the last 1 year, he has honed his craft and skills set to become one of the finest detailers with his friends in the industries. Trusted by dealers, discerning collectors and drivers alike. We have extensive knowledge and experience with the broadest range of materials, surfaces paint, and clearcoats used on motorcycles today. </p>
                                <p>Willy's long term dream was to one day have his own shop dedicated to the art and science of painting, paint correction and paint film and other aspects of high level motorcycles appereance. This dream came true when he partnered a few years ago with his old friends and fellow motorcycle enthusiast to identify and equip a professional studio dedicated to just one goal, provide customers with the highest level of satisfication. That dream has now been achieved with the opening of his own facility in East Jakarta, Indonesia.</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="about-quality">
                                <h4>Visi</h4>
                                <p>Dengan pelayanan yang ramah bersahabat dan proses pengerjaan detailing step by step yang teliti dan rapih untuk mencapai hasil perfective, Riverside Motocare berkomitmen untuk menjadi Workshop Painting & Moto Detailing terbaik di Indonesia.</p>
                                <h4>Misi</h4>
                                <p>Riverside Motocare merupakan Refinish Workshop dan Moto Detailing yang Berspesialisasi dalam Jasa Pengecatan, Restorasi Cat Kendaraan Lama dan Moto Detailing. Tenaga Profesional kami memberlakukan Quality Control yang ketat dan hanya menggunakan produk Perawatan Unggulan untuk menjamin kepuasan Setiap Pelanggan.</p>
                                <!-- <ul>
                                    <li><i class="fa fa-check-circle-o"></i>Lorem ipsum dolor sitdoni amet,
                                        consectetur dont adipis elite vivamus interdum.</li>
                                    <li><i class="fa fa-check-circle-o"></i>Integer pulvinar ante nulla, ac
                                        fermentum ex congue id vestibulum ensectetur.</li>
                                    <li><i class="fa fa-check-circle-o"></i>Proin blandit nibh in quam semper
                                        iaculis lorem ipsum dolor salama ender.</li>
                                    <li><i class="fa fa-check-circle-o"></i>Quis ipsum suspendisse ultrices gravida.
                                        Risus commodo viverra maecenas accumsan lacus vel facilisis. </li>
                                </ul> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Aboutus Section End -->

        <!-- Testimonial Section End -->
        <section class="testimonial-section set-bg spad" data-setbg="img/testimonial-bg.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                        <div class="testimonial-slider owl-carousel">
                            <div class="ts-item">
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <h4>2 Motor saya sudah dipegang oleh Riverside Motocare, dan hasil nya sangat memuaskan. F125Z dan Nouvo saya kembali ke kondisi maximal setelah di Repaint.</h4>
                                <div class="author-name">
                                    <h5>Basuki Rahmat</h5>
                                    <span>Ketua F1ZR Lovers Jakarta</span>
                                </div>
                                <div class="author-pic">
                                    <img src="img/author-pic.png" alt="">
                                </div>
                            </div>
                            <div class="ts-item">
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <h4>Velg Ninja 250 Z gw di repaint disini, warna Gold Achilles nya bener bener memanjakan mata. Rencana kedepan mau Detailing supaya body yang kusam bisa balik maximal.</h4>
                                <div class="author-name">
                                    <h5>Ian</h5>
                                    <span>Customer Tercinta</span>
                                </div>
                                <div class="author-pic">
                                    <img src="img/author-pic.png" alt="">
                                </div>
                            </div>
                            <div class="ts-item">
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <h4>The “Minimal-Repair Technique” is a revolutionary surgical procedure in the treatment
                                    for hernia. Initially intended for correcting inguinal hernia.</h4>
                                <div class="author-name">
                                    <h5>Stacy Mc Neelel</h5>
                                    <span>CEP’s Director</span>
                                </div>
                                <div class="author-pic">
                                    <img src="img/author-pic.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Testimonial Section End -->

        <!-- Trainer Section Begin -->
        <section class="trainer-section spad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title">
                            <h2>TEAM KAMI</h2>
                            <p>Team kami yang bisa membantu kamu mengarahkan ke Jenis jasa yang kamu inginkan untuk motormu.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="trainer-item">
                            <div class="ti-pic">
                                <img src="img/trainer/trainer-1.jpg" alt="">
                                <div class="ti-links">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                </div>
                                <div class="trainer-text">
                                    <h5>Willy Jodhi<span> - Senior Painter</span></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="trainer-item">
                            <div class="ti-pic">
                                <img src="img/trainer/trainer-2.jpg" alt="">
                                <div class="ti-links">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                </div>
                                <div class="trainer-text">
                                    <h5>Bobby Ryandi<span> - Junior Painter</span></h5>
                                </div>
                            </div>
                        </div>
                    </div>                           
                </div>
            </div>
        </section>
        <!-- Trainer Section End -->

        <!-- Cta Section Begin -->
        <section class="cta-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="cta-text">
                            <h3>DUE TO CORONA VIRUS AND PSBB</h3>
                            <p><b>We Only Serve "BY APPOINTMENT" Only. Please Stay at Home & Stay Healthy!</b></p>
                        </div>
                        <a href="https://api.whatsapp.com/send?phone=6281218695006" class="primary-btn cta-btn">book now</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Cta Section End -->
    </body>
    
@endsection