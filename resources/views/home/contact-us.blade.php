<x-landing-layout>
    <div class="position-relative">
        @include('home.partials.hero-section')
    </div>
    <div class="container py-lg-6 mw-md mt-5">
        <div class="row">
            <!-- Contact Form Overlay
                ============================================= -->
            <div class="contact-forms-overlay p-5">
                <div class="fancy-title title-border">
                    <h3>Send us an Email</h3>
                </div>
                <div class="form-widget">
                    <div class="form-result"></div>
                    <!-- Contact Form
                        ============================================= -->
                    <form class="row mb-0" id="template-contactform" name="template-contactform" action="include/form.php" method="post" novalidate="novalidate">
                        <div class="col-md-6 form-group">
                            <label for="template-contactform-name">Name <small>*</small></label>
                            <input type="text" id="template-contactform-name" name="template-contactform-name" value="" class="form-control required">
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="template-contactform-email">Email <small>*</small></label>
                            <input type="email" id="template-contactform-email" name="template-contactform-email" value="" class="required email form-control">
                        </div>
                        <div class="w-100"></div>
                        <div class="col-md-6 form-group">
                            <label for="template-contactform-phone">Phone</label>
                            <input type="text" id="template-contactform-phone" name="template-contactform-phone" value="" class="form-control">
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="template-contactform-service">Services</label>
                            <select id="template-contactform-service" name="template-contactform-service" class="form-select">
                                <option value="">-- Select One --</option>

                                @foreach (config('landing.services') as $service)
                                    <option value="{{ $service }}">{{ $service }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="w-100"></div>
                        <div class="col-12 form-group">
                            <label for="template-contactform-subject">Subject <small>*</small></label>
                            <input type="text" id="template-contactform-subject" name="subject" value="" class="required form-control">
                        </div>
                        <div class="col-12 form-group">
                            <label for="template-contactform-message">Message <small>*</small></label>
                            <textarea class="required form-control" id="template-contactform-message" name="template-contactform-message" rows="6" cols="30"></textarea>
                        </div>
                        <div class="col-12 form-group d-none">
                            <input type="text" id="template-contactform-botcheck" name="template-contactform-botcheck" value="" class="form-control">
                        </div>
                        <div class="col-12 form-group">
                            <button class="button button-3d m-0" type="submit" id="template-contactform-submit" name="template-contactform-submit" value="submit">Send Message</button>
                        </div>
                        <input type="hidden" name="prefix" value="template-contactform-">
                    </form>
                </div>
                <div class="line"></div>
                <div class="row col-mb-50">
                    <!-- Contact Info
                        ============================================= -->
                    <div class="col-md-4">
                        <address>
                            <strong>Headquarters:</strong><br>
                            D-258, GR Tower<br>
                            Sector 75, Mohali, PB 160055<br>
                        </address>
                        <abbr title="Phone Number"><strong>Phone:</strong></abbr> (+91) 9876 543210<br>
                        <abbr title="Email Address"><strong>Email:</strong></abbr> info@saasapps.com
                    </div>
                    <!-- Contact Info End -->
                    <!-- Testimonails
                        ============================================= -->
                    <div class="col-md-8">
                        <div class="fslider customjs testimonial" data-count="3" data-animation="slide" data-arrows="false">
                            <div class="row gx-2">
                                <div class="col-auto">
                                    <i class="i-plain i-large color fa-brands fa-twitter mb-0"></i>
                                </div>
                                <div class="col-auto">
                                    <i class="i-plain i-large color fa-brands fa-facebook mb-0"></i>
                                </div>
                                <div class="col-auto">
                                    <i class="i-plain i-large color fa-brands fa-instagram mb-0"></i>
                                </div>
                                <div class="col-auto">
                                    <i class="i-plain i-large color fa-brands fa-git mb-0"></i>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- Testimonials End -->
                </div>
            </div>
            <!-- Contact Form Overlay End -->
        </div>
    </div>
</x-landing-layout>