<x-landing-layout>
    <div class="position-relative">
        @include('home.partials.home.hero')
    </div>
    <section class="py-5 py-lg-6 bg-light mt-200">
        <div class="container mw-md">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center mb-4">
                    <h2 class="fw-bold mb-3">Help & Support</h2>
                    <p class="text-muted fs-5">
                        We’re here to help you. Find answers or get in touch with our support team.
                    </p>
                </div>
            </div>
            <div class="row g-4">
                <!-- Knowledge Base -->
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm text-center">
                        <div class="card-body">
                            <div class="mb-3 fs-1 text-primary">
                                <i class="bi bi-journal-text"></i>
                            </div>
                            <h5 class="fw-semibold">Knowledge Base</h5>
                            <p class="text-muted">
                                Browse our documentation, tutorials, and guides to get started quickly.
                            </p>
                            <a href="#" class="btn btn-outline-primary btn-sm">
                                View Docs
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Support Ticket -->
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm text-center">
                        <div class="card-body">
                            <div class="mb-3 fs-1 text-success">
                                <i class="bi bi-headset"></i>
                            </div>
                            <h5 class="fw-semibold">Submit a Ticket</h5>
                            <p class="text-muted">
                                Need help? Submit a support request and our team will respond shortly.
                            </p>
                            <a href="#" class="btn btn-outline-success btn-sm">
                                Create Ticket
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Contact Support -->
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm text-center">
                        <div class="card-body">
                            <div class="mb-3 fs-1 text-warning">
                                <i class="bi bi-envelope"></i>
                            </div>
                            <h5 class="fw-semibold">Contact Support</h5>
                            <p class="text-muted">
                                Reach out to us directly for urgent issues or general inquiries.
                            </p>
                            <a href="{{ route('contact-us') }}" class="btn btn-outline-warning btn-sm">
                                Contact Us
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-landing-layout>

