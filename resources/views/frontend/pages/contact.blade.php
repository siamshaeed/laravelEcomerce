@extends('frontend.layouts.master')
@section('content')
@include('frontend.layouts.breadcrumb')
<!-- header end -->

<!-- breadcrumb-section end -->
<!-- product tab start -->
<div class="map">
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.5480490037507!2d90.42897841550803!3d23.76349088458297!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c78ab2187d4d%3A0x4d5f8a6c610c144b!2sHasTech%20Digital%20Item%20%26%20Service%20Provider!5e0!3m2!1sen!2sua!4v1595747193974!5m2!1sen!2sua"></iframe>
</div>

<section class="contact-section pt-80 pb-50">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-12 mb-30">
                <!--  contact page side content  -->
                <div class="contact-page-side-content">
                    <h3 class="contact-page-title">Contact Us</h3>
                    <p class="contact-page-message mb-30">Claritas est etiam processus dynamicus, qui sequitur
                        mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum
                        claram anteposuerit litterarum formas human.</p>
                    <!--  single contact block  -->

                    <div class="single-contact-block">
                        <h4><i class="fa fa-fax"></i> Address</h4>
                        <p>123 Main Street, Anytown, CA 12345 – USA</p>
                    </div>

                    <!--  End of single contact block -->

                    <!--  single contact block -->

                    <div class="single-contact-block">
                        <h4><i class="fa fa-phone"></i> Phone</h4>
                        <p>
                            <a href="tel:123456789">Mobile: (08) 123 456 789</a>
                        </p>
                        <p><a href="tel:1009678456">Hotline: 1009 678 456</a></p>
                    </div>

                    <!-- End of single contact block -->

                    <!--  single contact block -->

                    <div class="single-contact-block">
                        <h4><i class="fas fa-envelope"></i> Email</h4>
                        <p>
                            <a href="mailto:yourmail@domain.com">yourmail@domain.com</a>
                        </p>
                        <p> <a href="mailto:support@hastech.company">support@hastech.company</a></p>
                    </div>

                    <!--=======  End of single contact block  =======-->
                </div>

                <!--=======  End of contact page side content  =======-->

            </div>
            <div class="col-lg-6 col-12 mb-30">
                <!--  contact form content -->
                <div class="contact-form-content">
                    <h3 class="contact-page-title">Tell Us Your Message</h3>
                    <div class="contact-form">
                        <form id="contact-form" action="assets/php/mail.php" method="post">
                            <div class="form-group">
                                <label>Your Name <span class="required">*</span></label>
                                <input type="text" name="customerName" id="customername" required="">
                            </div>
                            <div class="form-group">
                                <label>Your Email <span class="required">*</span></label>
                                <input type="email" name="customerEmail" id="customerEmail" required="">
                            </div>
                            <div class="form-group">
                                <label>Subject</label>
                                <input type="text" name="contactSubject" id="contactSubject" required="">
                            </div>
                            <div class="form-group">
                                <label>Your Message</label>
                                <textarea name="contactMessage" class="pb-10" id="contactMessage"
                                    required=""></textarea>
                            </div>
                            <div class="form-group mb-0">
                                <button type="submit" value="submit" id="submit" class="btn theme-btn--dark1 btn--lg"
                                    name="submit">submit</button>
                            </div>
                        </form>
                    </div>
                    <p class="form-messegemt-10"></p>
                </div>
                <!-- End of contact -->
            </div>
        </div>
    </div>
</section>
<!-- product tab end -->
<!-- footer strat -->
@endsection