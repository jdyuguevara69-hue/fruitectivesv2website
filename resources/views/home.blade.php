<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Fruitectives V2 | AI-Powered Fruit Intelligence</title>

    <meta name="description"
          content="Fruitectives V2 is an AI-powered mobile application for fruit detection, ripeness assessment, and quality analysis.">

    <link rel="preconnect"
          href="https://fonts.googleapis.com">

    <link rel="preconnect"
          href="https://fonts.gstatic.com"
          crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Manrope:wght@500;600;700;800&display=swap"
          rel="stylesheet">

    @vite(['resources/css/fruitectives.css'])
</head>


<body>

<!-- =====================================================
     NAVIGATION
===================================================== -->

<header class="navbar">

    <div class="container nav-container">

        <a href="#" class="logo">

            <span class="logo-icon">
                F
            </span>

            <span>
                Fruitectives
                <span class="logo-v2">V2</span>
            </span>

        </a>


        <nav class="nav-links">

            <a href="#about">
                About
            </a>

            <a href="#features">
                Features
            </a>

            <a href="#fruits">
                Fruits
            </a>

            <a href="#how-it-works">
                How It Works
            </a>

            <a href="#download">
                Download
            </a>

        </nav>


        <a href="#download"
           class="nav-download">

            Get the App

        </a>


        <button
            class="mobile-menu-button"
            id="mobileMenuButton"
            type="button">

            ☰

        </button>

    </div>

</header>


<!-- =====================================================
     MOBILE MENU
===================================================== -->

<div class="mobile-menu"
     id="mobileMenu">

    <a href="#about">
        About
    </a>

    <a href="#features">
        Features
    </a>

    <a href="#fruits">
        Fruits
    </a>

    <a href="#how-it-works">
        How It Works
    </a>

    <a href="#download">
        Download
    </a>

</div>


<!-- =====================================================
     HERO
===================================================== -->

<section class="hero">

    <div class="hero-background"></div>


    <div class="container hero-grid">


        <!-- HERO TEXT -->

        <div class="hero-content">

            <div class="eyebrow">

                <span class="pulse-dot"></span>

                AI-Powered Fruit Intelligence

            </div>


            <h1>

                Smarter fruit.
                <span>Better decisions.</span>

            </h1>


            <p class="hero-description">

                Fruitectives V2 uses artificial intelligence
                to identify fruits, assess ripeness, and
                evaluate fruit quality directly from your
                smartphone.

            </p>


            <div class="hero-buttons">

                <a href="#download"
                   class="btn btn-primary">

                    Download Fruitectives

                    <span>
                        →
                    </span>

                </a>


                <a href="#how-it-works"
                   class="btn btn-secondary">

                    See how it works

                </a>

            </div>


            <div class="hero-trust">

                <div class="trust-item">

                    <strong>
                        AI
                    </strong>

                    <span>
                        Powered
                    </span>

                </div>


                <div class="trust-divider"></div>


                <div class="trust-item">

                    <strong>
                        6+
                    </strong>

                    <span>
                        New Fruits
                    </span>

                </div>


                <div class="trust-divider"></div>


                <div class="trust-item">

                    <strong>
                        iOS
                    </strong>

                    <span>
                        & Android
                    </span>

                </div>

            </div>

        </div>


        <!-- HERO PHONE -->

        <div class="hero-visual">

            <div class="glow"></div>


            <div class="floating-card card-top">

                <span class="status-dot"></span>

                <div>

                    <small>
                        AI Detection
                    </small>

                    <strong>
                        Banana detected
                    </strong>

                </div>

            </div>


            <div class="phone">

                <div class="phone-notch"></div>


                <div class="phone-screen">

                    <div class="app-header">

                        <span>
                            Fruitectives
                        </span>

                        <span class="app-menu">
                            •••
                        </span>

                    </div>


                    <div class="camera-preview">

                        <div class="fruit-circle">

                            <div class="fruit-shape">
                                🍌
                            </div>

                        </div>


                        <div class="scan-line"></div>

                    </div>


                    <div class="detection-panel">

                        <div class="detection-header">

                            <div>

                                <small>
                                    Detected fruit
                                </small>

                                <h3>
                                    Banana
                                </h3>

                            </div>


                            <div class="confidence">
                                96%
                            </div>

                        </div>


                        <div class="progress">

                            <span
                                style="width: 96%;">
                            </span>

                        </div>


                        <div class="result-grid">

                            <div>

                                <small>
                                    Ripeness
                                </small>

                                <strong>
                                    Ripe
                                </strong>

                            </div>


                            <div>

                                <small>
                                    Quality
                                </small>

                                <strong>
                                    Good
                                </strong>

                            </div>

                        </div>

                    </div>

                </div>

            </div>


            <div class="floating-card card-bottom">

                <div class="mini-icon">
                    ✦
                </div>

                <div>

                    <small>
                        AI Analysis
                    </small>

                    <strong>
                        Ready in seconds
                    </strong>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- =====================================================
     ABOUT
===================================================== -->

<section class="section about-section"
         id="about">

    <div class="container">

        <div class="section-heading">

            <div class="section-label">
                ABOUT FRUITECTIVES
            </div>


            <h2>

                Understanding your fruit
                <span>starts with AI.</span>

            </h2>


            <p>

                Fruitectives V2 is a mobile-based artificial
                intelligence application designed to help
                users identify fruits and understand their
                ripeness and quality through image analysis.

            </p>

        </div>


        <div class="about-grid">


            <div class="about-card large-card">

                <div class="card-number">
                    01
                </div>


                <h3>
                    Intelligent Recognition
                </h3>


                <p>

                    Capture an image of a fruit and let the
                    AI model analyze its visual characteristics
                    to identify the fruit.

                </p>


                <div class="card-decoration">

                    <span>
                        AI
                    </span>

                    <span>
                        ROBOFLOW VISION
                    </span>

                </div>

            </div>


            <div class="about-card">

                <div class="card-number">
                    02
                </div>


                <h3>
                    Ripeness Analysis
                </h3>


                <p>

                    Determine the current ripeness stage of
                    supported fruits through visual
                    characteristics.

                </p>

            </div>


            <div class="about-card">

                <div class="card-number">
                    03
                </div>


                <h3>
                    Quality Insights
                </h3>


                <p>

                    Receive AI-powered information that can
                    help users make better decisions when
                    evaluating fruits.

                </p>

            </div>

        </div>

    </div>

</section>


<!-- =====================================================
     FEATURES
===================================================== -->

<section class="section features-section"
         id="features">

    <div class="container">


        <div class="section-heading centered">

            <div class="section-label">
                FEATURES
            </div>


            <h2>

                Built to make fruit
                <span>intelligence simple.</span>

            </h2>

        </div>


        <div class="features-grid">


            <div class="feature-card">

                <div class="feature-icon">
                    ◉
                </div>


                <h3>
                    Fruit Detection
                </h3>


                <p>

                    Identify supported fruits using
                    AI-powered image recognition.

                </p>


                <span class="feature-number">
                    01
                </span>

            </div>


            <div class="feature-card">

                <div class="feature-icon">
                    ◒
                </div>


                <h3>
                    Ripeness Detection
                </h3>


                <p>

                    Analyze the visual state of a fruit
                    to determine its ripeness.

                </p>


                <span class="feature-number">
                    02
                </span>

            </div>


            <div class="feature-card">

                <div class="feature-icon">
                    ✦
                </div>


                <h3>
                    Quality Assessment
                </h3>


                <p>

                    Get useful AI-generated insights
                    about the observed fruit.

                </p>


                <span class="feature-number">
                    03
                </span>

            </div>


            <div class="feature-card">

                <div class="feature-icon">
                    ⌁
                </div>


                <h3>
                    Recommendations
                </h3>


                <p>

                    Explore recommendations based on
                    the detected fruit and its condition.

                </p>


                <span class="feature-number">
                    04
                </span>

            </div>

        </div>

    </div>

</section>


<!-- =====================================================
     FRUITS
===================================================== -->

<section class="section fruits-section"
         id="fruits">

    <div class="container">


        <div class="fruits-heading">

            <div>

                <div class="section-label">
                    SUPPORTED FRUITS
                </div>


                <h2>

                    From familiar favorites
                    <span>to Filipino fruits.</span>

                </h2>

            </div>


            <p>

                Fruitectives V2 expands the original
                application with additional fruit classes,
                including selected fruits commonly found
                in the Philippines.

            </p>
// Fix to the list of fruits sa objectives
        </div>


        <div class="fruit-grid">


            <div class="fruit-item">

                <div class="fruit-image">
                    🍎
                </div>

                <h3>
                    Apple
                </h3>

                <span>
                    Detected by AI
                </span>

            </div>


            <div class="fruit-item">

                <div class="fruit-image">
                    🍌
                </div>

                <h3>
                    Banana
                </h3>

                <span>
                    Detected by AI
                </span>

            </div>


            <div class="fruit-item">

                <div class="fruit-image">
                    🥭
                </div>

                <h3>
                    Mango
                </h3>

                <span>
                    Detected by AI
                </span>

            </div>


            <div class="fruit-item">

                <div class="fruit-image">
                    🍊
                </div>

                <h3>
                    Orange
                </h3>

                <span>
                    Detected by AI
                </span>

            </div>


            <div class="fruit-item">

                <div class="fruit-image">
                    🍍
                </div>

                <h3>
                    Pineapple
                </h3>

                <span>
                    Detected by AI
                </span>

            </div>


            <div class="fruit-item">

                <div class="fruit-image">
                    🥥
                </div>

                <h3>
                    Coconut
                </h3>

                <span>
                    Detected by AI
                </span>

            </div>

        </div>

    </div>

</section>


<!-- =====================================================
     HOW IT WORKS
===================================================== -->

<section class="section process-section"
         id="how-it-works">

    <div class="container">


        <div class="section-heading centered">

            <div class="section-label">
                HOW IT WORKS
            </div>


            <h2>

                Three steps.
                <span>One intelligent result.</span>

            </h2>

        </div>


        <div class="process">

            <div class="process-line"></div>


            <div class="process-step">

                <div class="step-number">
                    01
                </div>

                <div class="step-icon">
                    📷
                </div>

                <h3>
                    Capture
                </h3>

                <p>
                    Take a photo of the fruit using
                    your smartphone.
                </p>

            </div>


            <div class="process-step">

                <div class="step-number">
                    02
                </div>

                <div class="step-icon">
                    🧠
                </div>

                <h3>
                    Analyze
                </h3>

                <p>
                    Fruitectives processes the image
                    using its AI model.
                </p>

            </div>


            <div class="process-step">

                <div class="step-number">
                    03
                </div>

                <div class="step-icon">
                    ✦
                </div>

                <h3>
                    Discover
                </h3>

                <p>
                    View the detected fruit, ripeness
                    and quality insights.
                </p>

            </div>

        </div>

    </div>

</section>


<!-- =====================================================
     APP PREVIEW
===================================================== -->

<section class="section preview-section">

    <div class="container preview-grid">


        <div class="preview-content">

            <div class="section-label">
                THE MOBILE EXPERIENCE
            </div>


            <h2>

                Your fruit assistant,
                <span>in your pocket.</span>

            </h2>


            <p>

                Fruitectives V2 brings AI-powered fruit
                analysis into a simple mobile experience
                designed for everyday use.

            </p>


            <ul class="check-list">

                <li>
                    <span>✓</span>
                    Simple fruit scanning
                </li>

                <li>
                    <span>✓</span>
                    AI-powered analysis
                </li>

                <li>
                    <span>✓</span>
                    Easy-to-understand results
                </li>

                <li>
                    <span>✓</span>
                    Designed for mobile devices
                </li>

            </ul>

        </div>


        <div class="screenshots">


            <div class="app-screen screen-one">

                <div class="fake-status">
                    9:41
                </div>

                <div class="fake-title">
                    Fruitectives
                </div>

                <div class="fake-camera">
                    🍎
                </div>

                <div class="fake-button">
                    Scan Fruit
                </div>

            </div>


            <div class="app-screen screen-two">

                <div class="fake-status">
                    9:41
                </div>

                <div class="fake-title">
                    Analysis
                </div>

                <div class="fake-result">
                    🥭
                </div>

                <h3>
                    Mango
                </h3>


                <div class="fake-result-row">

                    <span>
                        Ripeness
                    </span>

                    <strong>
                        Ripe
                    </strong>

                </div>


                <div class="fake-result-row">

                    <span>
                        Quality
                    </span>

                    <strong>
                        Good
                    </strong>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- =====================================================
     DOWNLOAD
===================================================== -->

<section class="download-section"
         id="download">

    <div class="container">


        <div class="download-box">


            <div class="download-content">

                <div class="section-label">
                    GET FRUITECTIVES V2
                </div>


                <h2>

                    Ready to explore
                    <span>fruit intelligence?</span>

                </h2>


                <p>

                    Download Fruitectives V2 and experience
                    AI-powered fruit detection directly from
                    your mobile device.

                </p>


                <div class="download-buttons">


                    <a href="{{ route('download.android') }}"
                       class="download-button android">

                        <span class="download-icon">
                            A
                        </span>

                        <div>

                            <small>
                                DOWNLOAD FOR
                            </small>

                            <strong>
                                Android
                            </strong>

                        </div>

                    </a>


                    <a href="#"
                       class="download-button ios"
                       onclick="alert('The iOS version will be available soon.'); return false;">

                        <span class="download-icon">
                            
                        </span>

                        <div>

                            <small>
                                COMING SOON
                            </small>

                            <strong>
                                iOS
                            </strong>

                        </div>

                    </a>

                </div>

            </div>


            <div class="download-decoration">

                <div class="big-fruit">
                    🍊
                </div>

                <div class="orbit orbit-one"></div>

                <div class="orbit orbit-two"></div>

            </div>

        </div>

    </div>

</section>


<!-- =====================================================
     PROJECT
===================================================== -->

<section class="section project-section">

    <div class="container project-grid">


        <div>

            <div class="section-label">
                CAPSTONE PROJECT
            </div>


            <h2>

                Developed as
                <span>Fruitectives V2.</span>

            </h2>

        </div>


        <div>

            <p>

                Fruitectives V2 is an Capstone project research and
                software development project focused on
                applying artificial intelligence to fruit
                recognition, ripeness assessment and quality
                analysis.

            </p>


            <div class="project-meta">


                <div>

                    <small>
                        PROJECT
                    </small>

                    <strong>
                        Fruitectives V2
                    </strong>

                </div>


                <div>

                    <small>
                        INSTITUTION
                    </small>

                    <strong>
                        University of Santo Tomas
                    </strong>

                </div>


                <div>

                    <small>
                        APPLICATION
                    </small>

                    <strong>
                        Mobile AI
                    </strong>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- =====================================================
     FOOTER
===================================================== -->

<footer>

    <div class="container footer-content">


        <div class="footer-brand">

            <a href="#" class="logo">

                <span class="logo-icon">
                    F
                </span>

                <span>

                    Fruitectives
                    <span class="logo-v2">
                        V2
                    </span>

                </span>

            </a>


            <p>
                AI-powered fruit intelligence.
            </p>

        </div>


        <div class="footer-links">

            <a href="#about">
                About
            </a>

            <a href="#features">
                Features
            </a>

            <a href="#fruits">
                Fruits
            </a>

            <a href="#download">
                Download
            </a>

        </div>


        <div class="footer-bottom">

            <span>
                © {{ date('Y') }} Fruitectives V2
            </span>

            <span>
                Capstone Project
            </span>

        </div>

    </div>

</footer>


<!-- =====================================================
     JAVASCRIPT
===================================================== -->

<script>

    document.addEventListener(
        'DOMContentLoaded',
        function () {

            const menuButton =
                document.getElementById(
                    'mobileMenuButton'
                );

            const mobileMenu =
                document.getElementById(
                    'mobileMenu'
                );


            menuButton.addEventListener(
                'click',
                function () {

                    mobileMenu.classList.toggle(
                        'active'
                    );

                }
            );


            document
                .querySelectorAll('.mobile-menu a')
                .forEach(function (link) {

                    link.addEventListener(
                        'click',
                        function () {

                            mobileMenu.classList.remove(
                                'active'
                            );

                        }
                    );

                });


            const observer =
                new IntersectionObserver(
                    function (entries) {

                        entries.forEach(
                            function (entry) {

                                if (
                                    entry.isIntersecting
                                ) {

                                    entry.target.classList.add(
                                        'visible'
                                    );

                                }

                            }
                        );

                    },
                    {
                        threshold: 0.1
                    }
                );


            document
                .querySelectorAll(
                    '.feature-card, .about-card, .fruit-item, .process-step'
                )
                .forEach(function (element) {

                    observer.observe(element);

                });

        }
    );

</script>

</body>
</html>
