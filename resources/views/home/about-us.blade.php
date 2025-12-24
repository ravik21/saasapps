<x-landing-layout>
    <!-- Hero Section -->
    <div class="position-relative">
        @include('home.partials.hero-section')
    </div>

    <!-- About Us Section -->
    <section class="py-5 py-lg-6 bg-light mt-200">
        <div class="container mw-md">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center mb-4">
                    <h2 class="fw-bold mb-3">About Us</h2>
                    <p class="text-muted fs-5">
                        Building scalable, secure, and high-performance SaaS solutions for modern businesses.
                    </p>
                </div>
            </div>

            <div class="row g-4 align-items-stretch">
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm border-0">
                        <div class="card-body">
                            <h5 class="card-title fw-semibold mb-3">
                                Who We Are
                            </h5>
                            <p class="card-text text-muted">
                                We are an IT and Software company focused on delivering innovative SaaS solutions
                                that help organizations streamline operations and accelerate growth.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card h-100 shadow-sm border-0">
                        <div class="card-body">
                            <h5 class="card-title fw-semibold mb-3">
                                What We Build
                            </h5>
                            <p class="card-text text-muted">
                                With a strong focus on cloud-based platforms and user-centric design, we create
                                intuitive, flexible, and scalable software tailored to real business needs.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card h-100 shadow-sm border-0">
                        <div class="card-body">
                            <h5 class="card-title fw-semibold mb-3">
                                Our Philosophy
                            </h5>
                            <p class="card-text text-muted">
                                We believe in long-term partnerships, continuous improvement, and delivering
                                measurable value through reliable and future-ready technology.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-landing-layout>
