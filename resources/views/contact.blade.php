@extends('layout.secondary')

@section('title', 'Riverside Motocare | Contact Us')

@section('container')


    <!-- Page Preloder -->
        <div id="preloder">
            <div class="loader"></div>
        </div>


    <!-- Map Section Begin -->
    <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.6071418328397!2d106.86536331476965!3d-6.315225995429591!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5c5f797ad8ad17ae!2sRiverside%20Motocare!5e0!3m2!1sid!2sid!4v1599840327980!5m2!1sid!2sid" height="590" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
    <!-- Map Section End -->

    <!-- Contact Section Begin -->
    <section class="contact-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="contact-info">
                        <h4>Information</h4>
                        <ul>
                            <li><i class="fa fa-phone"></i>(+62) 812-1869-5006</li>
                            <li><i class="fa fa-whatsapp"></i>(+62) 812-1869-5006</li>
                            <li><i class="fa fa-instagram"></i>@riversidemotocare</li>
                            <li><i class="fa fa-envelope"></i>rvs@multiscrap.co.id</li>
                        </ul>
                    </div>
                    <div class="contact-address">
                        <h4>Workshop</h4>
                        <ul>
                            <li><i class="fa fa-map-marker"></i>Jl. Suci Nomor 36 RT04/04 Susukan, Ciracas, Jakarta Timur 13750 (IDN)
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-8 offset-lg-1">
                    <div class="contact-form">
                        <h4>Booking Order or A Question?</h4>
                
                        @if(Session::has('status'))
                            <div class="alert alert-success">{{ Session::get('status') }}</div>
                        @endif
                        
                        <form action="" method="post" >

                            {{ csrf_field() }}

                            <div class="row">
                                <div class="col-lg-6">
                                    <label for="name">Name</label>
                                    <input class= "form-control" type="text" name="name" placeholder="Name">
                                </div>
                                <div class="col-lg-6">
                                    <label for="name">Email</label>
                                    <input class="form-control" type="text" name="email" placeholder="your email address">
                                </div>
                                <div class="col-lg-12">
                                    <label for="message">Message</label>
                                    <textarea class="form-control" name="message" id="" placeholder="Your Message" cols="30" row="10"></textarea>
                                    <button type="submit" class="c-btn">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->

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

    @endsection