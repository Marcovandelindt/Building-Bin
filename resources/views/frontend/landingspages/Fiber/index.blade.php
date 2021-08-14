@extends('layouts.app')

@section('content')

    <!-- Navigation -->
    <header class="header">
        <nav class="navigation">
            <div class="container">
                <div class="navigation-wrapper">
                    <div class="logo">
                        <a href="/">Fiber</a>
                    </div>
                    <div class="navigation-list">
                        <ul>
                            <li>
                                <a href="#">Community</a>
                            </li>
                            <li>
                                <a href="#">Pricing</a>
                            </li>
                            <li>
                                <a href="#">Features</a>
                            </li>
                        </ul>
                    </div>
                    <div class="actions">
                        <ul>
                            <li>
                                <a class="sign-in" href="#">Sign In</a>
                            </li>
                            <li>
                                <a class="button">Sign Up</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <!-- /Navigation -->

    <!-- Pageheader -->
    <div class="section section-pageheader">
        <div class="container">
            <div class="pageheader">
                <div class="content">
                    <div class="ratings">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <span>Rated 4.8/5 (243 reviews)</span>
                    </div>
                    <div class="inner-content">
                        <h1>Create your portfolio in minutes</h1>
                        <p>With Fiber, you can set up your own personal portfolio in minutes with dozens of pre-made,
                            beautiful templates.</p>
                    </div>
                    <div class="actions">
                        <a class="button" href="#">Start free trial</a>
                        <a class="link" href="#">View Examples</a>
                    </div>
                    <div class="usps">
                        <ul>
                            <li><span>No credit card required</span></li>
                            <li><span>10 Free Templates</span></li>
                        </ul>
                    </div>
                </div>
                <div class="image">
                    <img src="{{ asset('images/Fiber/hero-Illustration.png') }}" alt=""/>
                </div>
            </div>
        </div>
    </div>
    <!-- /Pageheader -->

    <!-- USPS -->
    <div class="section section-usps bg-white">
        <div class="container">
            <div class="title">
                <h3>Why Fiber?</h3>
                <h2>A good portfolio means a good employability.</h2>
            </div>
            <div class="usps">
                <div class="usp">
                    <div class="icon">
                        <img src="{{ asset('images/Fiber/time.svg') }}" alt=""/>
                    </div>
                    <div class="content">
                        <h5>Built in minutes</h5>
                        <p>With a selection of pre-made templates, you can build out a portfolio in less than 10
                            minutes.</p>
                    </div>
                </div>
                <div class="usp">
                    <div class="icon">
                        <img src="{{ asset('images/Fiber/code.svg') }}" alt=""/>
                    </div>
                    <div class="content">
                        <h5>Add custom CSS</h5>
                        <p>Customize your personal portfolio even more with the ability to add your own custom CSS
                            styles.</p>
                    </div>
                </div>
                <div class="usp">
                    <div class="icon">
                        <img src="{{ asset('images/Fiber/allSizes.svg') }}" alt=""/>
                    </div>
                    <div class="content">
                        <h5>Responsive</h5>
                        <p>All Fiber templates are fully responsive to ensure the experience is seemless across all
                            devices</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /USPS -->

    <!-- Image Content -->
    <div class="section section-image-content bg-white">
        <div class="container">
            <div class="image-content bg-purple">
                <div class="content">
                    <h2>Diversify your portfolio</h2>
                    <p>Create an even more impressive portfolio by creating case studies for your projects. Simply follow our step-by-step guide.</p>
                    <div class="button-holder">
                        <a class="button white">Start free trial</a>
                    </div>
                </div>
                <div class="image">
                    <img src="{{ asset('images/Fiber/Page Image.png') }}"
                </div>
            </div>
        </div>
    </div>
    <!-- /Image Content -->

    <!-- Reviews -->
    <div class="section section-reviews">

    </div>
    <!-- /Reviews -->

    <!-- Footer -->
    <footer class="footer">

    </footer>
    <!-- /Footer -->

@endsection
