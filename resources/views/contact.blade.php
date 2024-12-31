@extends('Layouts.app')

@section('title', 'Contact Us')

@section('content')
<div class="custom-page-header-1 page-header page-header-modern page-header-lg bg-primary border-0 z-index-1 my-0">
    <div class="custom-page-header-1-wrapper overflow-hidden">
        <div class="custom-bg-grey-1 py-5 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="800">
            <div class="container py-3 my-3">
                <div class="row">
                    <div class="col-md-12 align-self-center p-static text-center">
                        <div class="overflow-hidden mb-2">
                            <h1 class="font-weight-black text-12 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="1200">Contact</h1>
                        </div>
                    </div>
                    <div class="col-md-12 align-self-center">
                        <div class="overflow-hidden">
                            <ul class="custom-breadcrumb-style-1 breadcrumb breadcrumb-light custom-font-secondary d-block text-center custom-ls-1 text-5 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="1450">
                                <li class="text-transform-none"><a href="{{ url('demo-architecture-2.html') }}" class="text-decoration-none">Home</a></li>
                                <li class="text-transform-none active">Contact</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="custom-page-wrapper pt-5 pb-1">
    <div class="spacer py-4 my-5"></div>
    <div class="container container-xl-custom pb-5 mb-5">
        <div class="row pb-3">
            <div class="col-lg-6 position-relative">
                <div class="position-absolute z-index-0 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="3000" style="top: 110px; left: -206px;">
                    <h2 class="text-color-dark custom-stroke-text-effect-1 custom-big-font-size-1 font-weight-black opacity-1 mb-0">YOUR PLACE</h2>
                </div>
                <div class="overflow-hidden mb-2">
                    <h2 class="text-color-default positive-ls-3 line-height-3 text-4 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="1500">WE'RE HERE TO HELP</h2>
                </div>
                <div class="overflow-hidden mb-4">
                    <h3 class="text-transform-none text-color-dark font-weight-black text-10 line-height-2 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="1700">Get Your Project Done</h3>
                </div>
                <img src="{{ asset('img/demos/architecture-2/divider.jpg') }}" class="img-fluid opacity-5 mb-4 mt-2 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="1900" alt="" />
                <p class="custom-font-tertiary text-5 line-height-4 mb-4 mt-2 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="2100">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet libero id nisi euismod, sed porta est consectetur.</p>
                <p class="text-3-5 pb-2 mb-5 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="2300">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <div class="row">
                    <div class="col-lg-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="2500">
                        <h4 class="alternative-font-4 text-color-dark font-weight-bold line-height-3 text-3-5 mb-0">Work Inquiries</h4>
                        <a href="tel:1234567890" class="text-decoration-none text-color-default text-color-hover-primary">(800) 123-4567</a>
                        <h4 class="alternative-font-4 text-color-dark font-weight-bold line-height-3 text-3-5 mt-4 mb-0">Careers & Press</ ```blade
h4>
                        <a href="tel:0987654321" class="text-decoration-none text-color-default text-color-hover-primary">(800) 987-6543</a>
                    </div>
                    <div class="col-lg-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="2700">
                        <h4 class="alternative-font-4 text-color-dark font-weight-bold line-height-3 text-3-5 mb-0">General Inquiries</h4>
                        <a href="mailto:info@example.com" class="text-decoration-none text-color-default text-color-hover-primary">info@example.com</a>
                    </div>
                    <div class="col-lg-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="2900">
                        <h4 class="alternative-font-4 text-color-dark font-weight-bold line-height-3 text-3-5 mb-0">Follow Us</h4>
                        <ul class="social-icons social-icons-clean social-icons-icon-light social-icons-medium">
                            <li class="social-icons-facebook">
                                <a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li class="social-icons-x">
                                <a href="http://www.x.com/" target="_blank" title="X"><i class="fab fa-x-twitter"></i></a>
                            </li>
                            <li class="social-icons-instagram">
                                <a href="http://www.instagram.com/" target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a>
                            </li>
                            <li class="social-icons-linkedin">
                                <a href="http://www.linkedin.com/" target="_blank" title="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="3100">
                <form action="#" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name" class="text-color-dark">Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email" class="text-color-dark">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="message" class="text-color-dark">Message</label>
                        <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Send Message</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection