<style>
    .al {
        margin-left: 10%;
        margin-right: 10%;
    }

    .pj {
        text-align: justify;
        font-size: 14px;
    }

    .h {
        margin-top: 10px;
        text-transform: capitalize;
        color: black;
        text-align: justify;
    }

    .hb {
        margin-top: 60px;
        text-transform: uppercase;
        color: black;

    }

    h4::after {
        content: "";
        position: initial;
        display: block;
        width: 60px;
        height: 4px;
        margin-top: 10px;
        background: black;
        bottom: 0;
        left: calc(50% - 20px);
    }

    h5::after {
        content: "";
        position: relative;
        display: block;
        width: 60px;
        height: 4px;
        margin-top: 10px;
        background: black;
        bottom: 0;
        left: calc(50% - 20px);
    }

    .photos-list ul,
    .videos-list ul {
        margin: 0px;
        padding: 0px;
    }

    .photos-list ul li,
    .videos-list ul li {
        list-style: none;
        float: left;
        width: 18%;
        margin-left: 25px;
        position: relative;
    }

    .photos-list ul li p {
        margin-left: 25px;
        color: #fff;
    }

    .photos-list ul li img,
    .videos-list ul li img {
        float: left;
        height: 155px;
        width: 100%;
        margin-left: 25px;
        position: relative;
        border-radius: 10px;
        cursor: pointer;
    }

    .photos-list ul li span,
    .videos-list ul li span {
        position: absolute;
        bottom: 0;
        right: 0;
        background: rgba(0, 0, 0, .5);
        padding: 5px 10px;
        cursor: pointer;
    }

    .photos-list ul li span svg,
    .videos-list ul li span svg {
        color: #fff;
    }

    .hidden {
        display: none;
    }
    .media-body h6{
        color: black;
        font-size: 20px;
        font-family: work sans, sans-serif;
        font-weight: 600;
    }
    i{
        font-size: xx-large;
    }
    .divider-line {
    height: 2px;
    margin-top: 18px;
    width: 50px;
}

.bg-maincolor {
    background-color: #dd4454;
}
form {
    padding: 25px;
    margin: 2px !important;
    box-shadow: 0 2px 5px #f5f5f5;
    background:#fff;
}
.c-gutter-10 .row, div.row.c-gutter-10 {
    margin-left: -5px;
    margin-right: -5px;
}
.btn-gradient {
    background-image: linear-gradient(to right, #dd4454 0%, #dd9044 50%, #dd4454 100%);
    background-size: 200% auto;
    transition: .5s;
}
.divider-line.text-center {
    margin-left: auto;
    margin-right: auto;
   margin-top: 20px;
   margin-bottom: 20px;
}
.ls {
    background-color: #f2f5f7;
    color: #878787;
}
</style>



<section id="service" style="padding:60px 0px !important;background-color: white; ">
    <div class="container text-center">
        <div class="">
            <div class="row" data-aos="fade-up" data-aos-delay="100">
                <div class="col-lg-6 text-start">
                    <span class="" style="font-size: 32px; color:black;font-family: work sans, sans-serif;font-weight: 600;">
                        Send a Query
                    </span>
                    <div class="divider-line bg-maincolor"></div>
                    <p class="special-heading text-left">
                        <span>
                            Send us your message and we will get back to you at the soonest.
                        </span> 
                        <span>
                        Your feedback is important to us. Write to us at <a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                        data-cfemail="543d3a323b14312c35392438317a373b39">connect@letusth.ink</a> in or contact us at +91-8800980394
                        </span>
                    </p>
                    <form class="contact-form" method="post" action="">
						<div class="row c-mb-10 c-gutter-10">
							<div class="col-lg-6">
								<div class="form-group has-placeholder">
									<label for="name335x5553">Full Name <span class="required"></span></label>
									<i class="fas fa-user"></i>
									<input type="text" aria-required="true" size="30" value="" name="name" id="name335x5553" class="form-control" placeholder="Full Name">
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group has-placeholder">
									<label for="email333">Email address<span class="required"></span></label>
									<i class="fas fa-envelope"></i>
									<input type="email" aria-required="true" size="30" value="" name="email" id="email333" class="form-control" placeholder="Email">
								</div>
							</div>
						</div>
						<div class="row c-mb-10 c-gutter-10">
							<div class="col-lg-6">
								<div class="form-group has-placeholder">
									<label for="name3355553">Phone Number <span class="required"></span></label>
									<i class="fas fa-phone"></i>
									<input type="text" aria-required="true" size="30" value="" name="name" id="name3355553" class="form-control" placeholder="Phone Number">
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group has-placeholder">
									<label for="name3355d553">Subject <span class="required"></span></label>
									<i class="fas fa-paperclip"></i>
									<input type="text" aria-required="true" size="30" value="" name="name" id="name3355d553" class="form-control" placeholder="Subject">
								</div>
							</div>
						</div>
						<div class="row c-mb-10 c-gutter-10">
							<div class="col-sm-12">
								<div class="form-group has-placeholder">
									<label for="message335553">Message</label>
									<i class="fas fa-edit"></i>
									<textarea aria-required="true" rows="4" cols="45" name="message" id="message335553" class="form-control" placeholder="Your Message"></textarea>
								</div>
							</div>
						</div>
						<div class="row c-mb-10 c-gutter-10">
							<div class="col-sm-12 mb-0 mt-lg-50 mt-3">
								<div class="form-group">
									<input class="btn btn-gradient big-btn" type="submit" style="width: 200px;border-radius: 50px;" value="Send message">
								</div>
							</div>
						</div>
					</form>
                </div>
                
                <div class="col-lg-6 ls">
                    <div class="special-column2 ">
                        <div class="fw-divider-space divider-xl-160 divider-lg-130 divider-md-90 divider-60"></div>
                        <div class="media text-center text-sm-left">
                            <div class="icon-styled fs-60 color-main" style="padding-top:20px ;">
                                <i class="bx bx-map" aria-hidden="true"></i>
                            </div>
                            <div class="media-body ">
                                <h6 class="">
                                    Address
                                </h6>
                                <p class="" style="margin-top: 20px;">The Urban Hub ,<br>39, Pankaj Singhvi Marg, Everest Colony, Vidhayak Nagar, Lalkothi, Jaipur, Rajasthan 302015</p>
                            </div>
                            
                        </div>
                        
                        
                        <div class="divider-line bg-maincolor text-center"></div>
                        
                        <div class="media text-center text-sm-left">
                            <div class="icon-styled fs-60 color-main">
                                <i class="bx bx-phone-call"></i>
                            </div>
                            <div class="media-body">
                                <h6 class="">
                                    Phone
                                </h6>
                                <p class="" style="margin-top: 20px;">+91-8800980394</p>
                                
                            </div>
                            <div class="divider-line bg-maincolor text-center"></div>
                        </div>
                        
                        
                        
                        <div class="media text-center text-sm-left">
                            <div class="icon-styled fs-60 color-main">
                                <i class="fa fa-envelope"></i>
                            </div>
                            <div class="media-body">
                                <h6 class="">
                                    Email
                                </h6>
                                <p class=""style="margin-top: 20px;"><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                    data-cfemail="543d3a323b14312c35392438317a373b39">connect@letusth.ink</a></p>
                            </div>
                        </div>
                        <div class="divider-50 hidden-below-lg"></div>
                        <div class="divider-30 hidden-above-lg"></div>
                        <div class="divider-line bg-maincolor text-center"></div>
                        <div class="divider-60 hidden-below-lg"></div>
                        <div class="divider-30 hidden-above-lg"></div>
                        <span class="social-icons">
                            <a target="_blank" href="https://www.facebook.com/" class="fab fa-facebook-f bg-icon light-bg rounded-icon"></a>
                            <a target="_blank" href="https://www.linkedin.com/" class="fab fa-linkedin-in bg-icon light-bg rounded-icon"></a>
                            <a target="_blank" href="https://www.instagram.com/" class="fab fa-instagram bg-icon light-bg rounded-icon"></a>
                            <a target="_blank" href="https://twitter.com/" class="fab fa-twitter rounded-icon bg-icon light-bg" title="telegram"></a>
    
                        </span>
                        <div class="fw-divider-space divider-xl-160 divider-lg-130 divider-md-90 divider-60"></div>
    
                    </div>

                </div>

                
                <div class="">
                    <div class="info-box mb-4">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1496.1132716046427!2d75.80249523394183!3d26.891524903940994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396db42131c1b9e5%3A0xf8abc7b66f823427!2sThe%20Urban%20Hub%20Co-Working%20Cafe!5e0!3m2!1sen!2sin!4v1667997020932!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>  </div>
                </div>
            </div>
        </div>

</section>




<script>
    $(document).ready(function () {
        const maxLoad = 7

        function showEl(el) {
            return el.removeClass('hidden')
        }

        $('li').each(function (index) {
            index < maxLoad ?
                showEl($(this)) : null
        })

        $('#loadAllImages').click(function () {
            $('li').each(function () {
                showEl($(this))
            })
        })
    });


    // active link 

    $(document).ready(function () {
        $('.office').addClass(" active");
    })

</script>