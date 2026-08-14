@extends('layouts.app')

@section('title', 'About | Aklat Atbp.')

@section('content')

<!-- =====================================================
     ABOUT HERO
     ===================================================== -->

<section class="hero">

<div class="container">

    <p class="section-eyebrow">
        ABOUT AKLAT ATPB.
    </p>

    <h1>
        Stories worth<br>
        discovering.
    </h1>

    <p>
        Learn more about the people, purpose, and values
        behind Aklat Atbp.
    </p>

</div>

</section>

<!-- =====================================================
     COMPANY HISTORY
     ===================================================== -->

<section class="about-history">

<div class="container about-history-grid">

    <div>

        <p class="section-eyebrow">
            OUR HISTORY
        </p>

    </div>

    <div class="about-history-content">

        <h2>
            A bookstore built around readers.
        </h2>

        <p>
            Aklat Atbp. is an independent bookstore based
            in Santa Cruz, Laguna, created with the idea
            that books can become more than objects on a shelf.
        </p>

        <p>
            We aim to create a welcoming place where students,
            professionals, families, and book lovers can discover
            stories, learn something new, and find books that
            become meaningful parts of their lives.
        </p>

        <p>
            From carefully selected books to stationery and
            reading accessories, Aklat Atbp. brings together
            useful and enjoyable products for everyday readers.
        </p>

    </div>

</div>

</section>

<!-- =====================================================
     MISSION & VISION
     ===================================================== -->

<section class="about-purpose">

<div class="container">

    <div class="purpose-grid">

        <article class="purpose-card">

            <p class="purpose-label">
                OUR MISSION
            </p>

            <h2>
                Make reading more accessible.
            </h2>

            <p>
                Our mission is to provide readers with
                carefully selected books and reading essentials
                while creating a welcoming environment that
                encourages learning, imagination, and a lasting
                appreciation for reading.
            </p>

        </article>


        <article class="purpose-card">

            <p class="purpose-label">
                OUR VISION
            </p>

            <h2>
                A community connected by stories.
            </h2>

            <p>
                We envision Aklat Atbp. as a trusted local
                bookstore and reading community where people
                can discover meaningful stories, exchange ideas,
                and develop a lifelong love for books.
            </p>

        </article>

    </div>

</div>

</section>

<!-- =====================================================
     CORE VALUES
     ===================================================== -->

<section class="about-values">

<div class="container">

    <div class="section-heading">

        <div>

            <p class="section-eyebrow">
                WHAT WE BELIEVE IN
            </p>

            <h2>
                Our Core Values
            </h2>

        </div>

    </div>


    <div class="values-grid">

        <article class="value-card">

            <h3>
                Accessibility
            </h3>

            <p>
                We believe everyone should have opportunities
                to discover books and enjoy reading.
            </p>

        </article>


        <article class="value-card">

            <h3>
                Community
            </h3>

            <p>
                We create a welcoming environment where readers
                and book lovers can connect.
            </p>

        </article>


        <article class="value-card">

            <h3>
                Discovery
            </h3>

            <p>
                We encourage curiosity by helping readers find
                stories and ideas beyond the familiar.
            </p>

        </article>


        <article class="value-card">

            <h3>
                Quality
            </h3>

            <p>
                We aim to provide thoughtfully selected products
                and a positive experience for every customer.
            </p>

        </article>

    </div>

</div>

</section>

<!-- =====================================================
     TEAM
     ===================================================== -->

<section id="team" class="about-team aklat-team-section">

<div class="container">

    <div class="team-intro">

        <p class="section-eyebrow">
            MEET THE TEAM
        </p>

        <h2>
            The people behind Aklat Atbp.
        </h2>

        <p>
            Our team works together to make every visit
            a welcoming experience for readers and customers.
        </p>

    </div>


    <div class="aklat-team-grid">


        <!-- TEAM MEMBER 1 -->

        <article class="aklat-team-card">

            <div class="aklat-team-photo">

                <img
                    src="{{ asset('images/team/image1.jpg') }}"
                    alt="Punlain Castro"
                >

            </div>

            <div class="aklat-team-info">

                <h3>
                    Punlain Castro
                </h3>

                <p class="aklat-team-role">
                    Founder &amp; Store Manager
                </p>

            </div>

        </article>


        <!-- TEAM MEMBER 2 -->

        <article class="aklat-team-card">

            <div class="aklat-team-photo">

                <img
                    src="{{ asset('images/team/image2.jpg') }}"
                    alt="Sasa Kabagani"
                >

            </div>

            <div class="aklat-team-info">

                <h3>
                    Sasa Kabagani
                </h3>

                <p class="aklat-team-role">
                    Book Curator
                </p>

            </div>

        </article>


        <!-- TEAM MEMBER 3 -->

        <article class="aklat-team-card">

            <div class="aklat-team-photo">

                <img
                    src="{{ asset('images/team/image3.jpg') }}"
                    alt="Ryzza Mae Dizon"
                >

            </div>

            <div class="aklat-team-info">

                <h3>
                    Ryzza Mae Dizon
                </h3>

                <p class="aklat-team-role">
                    Customer Experience
                </p>

            </div>

        </article>

    </div>

</div>

</section>

<!-- =====================================================
     CTA
     ===================================================== -->

<section class="home-cta">

<div class="container home-cta-inner">

    <div>

        <p class="section-eyebrow">
            KEEP EXPLORING
        </p>

        <h2>
            Find your next favorite book.
        </h2>

        <p>
            Explore our services and discover what
            Aklat Atbp. has to offer.
        </p>

    </div>

    <a
        href="{{ route('services') }}"
        class="btn btn-light"
    >
        Explore Services
        <span>→</span>
    </a>

</div>

</section>

@endsection
