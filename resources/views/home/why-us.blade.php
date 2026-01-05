<x-landing-layout>
    <div class="position-relative">
        @include('home.partials.home.hero')
    </div>
    <!-- About Us Section -->
    <section class="py-5 py-lg-6 bg-light mt-200">
        <div class="container mw-md">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center mb-4">
                    <h2 class="fw-bold mb-3">Our Blog</h2>
                    <p class="text-muted fs-5">
                        Insights, updates, and stories from our tech team
                    </p>
                </div>
            </div>
            <div class="row g-4">
                <!-- Blog Card -->
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 shadow-sm border-0">
                        <div class="card-body">
                            <span class="badge bg-primary mb-2">SaaS</span>
                            <h5 class="card-title fw-semibold">
                                Building Scalable SaaS Applications
                            </h5>
                            <p class="card-text text-muted small">
                                Learn best practices for designing scalable and secure SaaS platforms.
                            </p>
                        </div>
                        <div class="card-footer bg-transparent border-0 d-flex justify-content-between align-items-center">
                            <small class="text-muted">Mar 12, 2025</small>
                            <a href="#" class="text-decoration-none fw-semibold">
                                Read More →
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Blog Card -->
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 shadow-sm border-0">
                        <div class="card-body">
                            <span class="badge bg-success mb-2">Cloud</span>
                            <h5 class="card-title fw-semibold">
                                Why Cloud-Native Apps Matter
                            </h5>
                            <p class="card-text text-muted small">
                                Discover how cloud-native architecture improves performance and scalability.
                            </p>
                        </div>
                        <div class="card-footer bg-transparent border-0 d-flex justify-content-between align-items-center">
                            <small class="text-muted">Feb 28, 2025</small>
                            <a href="#" class="text-decoration-none fw-semibold">
                                Read More →
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Blog Card -->
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 shadow-sm border-0">
                        <div class="card-body">
                            <span class="badge bg-warning text-dark mb-2">Security</span>
                            <h5 class="card-title fw-semibold">
                                Securing Modern Web Applications
                            </h5>
                            <p class="card-text text-muted small">
                                Essential security practices every SaaS company should follow.
                            </p>
                        </div>
                        <div class="card-footer bg-transparent border-0 d-flex justify-content-between align-items-center">
                            <small class="text-muted">Feb 10, 2025</small>
                            <a href="#" class="text-decoration-none fw-semibold">
                                Read More →
                            </a>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Pagination -->
            <div class="row mt-5">
                <div class="col text-center">
                    <nav>
                        <ul class="pagination justify-content-center">
                            <li class="page-item disabled">
                                <span class="page-link">Previous</span>
                            </li>
                            <li class="page-item active">
                                <span class="page-link">1</span>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">2</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>
</x-landing-layout>
