@extends('layouts.safetyapp')
@section('title', 'Contact Us')
@section('body')
    <section class="about-contact address py-5">
        <div class="container clearfix">
            <div class="row">
                <div class="col text-center">
                    <div class="content">
                        <h5>Our official address</h5>
                        <h2>Contact us</h2>
                        <div class="small-line"></div>
                    </div>
                </div>
            </div>
            <div class="row py-5 mt-3 justify-content-between section-content">
                <div class="col-sm-5">
                    <h3>Call us</h3>
                    <p class="mt-4">We are always happy to answer your inquiries and talk with business people about ways in which we can work together to improve business performance. Our doors are open to everyone, welcome to you</p>
                    <p class="mb-0"><b>Mobile:</b> 0551175959 </p>
                    <p><b>Email:</b> info@riadahonline.com </p>
                </div>
                <div class="col-sm-5">
                    <h3>Our Office</h3>
                    <p class="mt-4">Riyadh Olaya - next to King Fahd Library - Kingdom of Saudi Arabia. <br> Use this form for immediate follow-up if you would like us to serve you..   Which type of our professional services are most important to you?</p>
                    <p class="mt-3">Riyadh, Saudi Arabia </p>
                </div>
            </div>
        </div>
        <div class="container contact mt-5">
            <div class="row p-3 p-md-5 mt-2 mt-sm-0">
                <div class="col-12 text-center mb-5">
                    <h4>I hope your honorable person will fill out this form to <br class="d-none d-sm-block"> 
                        serve you to the fullest</h4>
                </div>
                <div class="col-sm-6">
                    <div class="mb-4">
                        <label for="name" class="form-label">I’m honored by Name</label>
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="mb-4">
                        <label for="name" class="form-label">Email Address</label>
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="mb-4" >
                        <label for="name" class="form-label">Enterprise </label>
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="mb-4">
                        <label for="name" class="form-label">What do you want to inquire about?</label>
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="mb-4">
                        <label for="name" class="form-label">What programs & services are you interested?</label>
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="mb-4">
                        <label for="name" class="form-label">Would you like us to contact directly?</label>
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="col-12">
                    <div class="mb-2">
                        <textarea name="description" rows="5" class="form-control" placeholder="What do you need?"></textarea>
                    </div>
                </div>

                <div class="col">
                    <button type="submit">Send Massage</button>
                </div>
            </div>
        </div>
        <br>
    </section>

    <!-- Map start -->
    <section class="map py-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h4>Google Map</h4>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3710.2835191560466!2d39.21701581397685!3d21.57485347428898!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15c3d1730ac2c1f7%3A0x13a1d2b048ec9be8!2sMasjid%20Ash%20Shakrin%2C%20Al-Safa%2C%20Jeddah%2023453%2C%20Saudi%20Arabia!5e0!3m2!1sen!2sbd!4v1632650648639!5m2!1sen!2sbd" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </section>
    <!-- Map end -->
@endsection