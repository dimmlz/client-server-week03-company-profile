@extends('layouts.app')

@section('title', 'Home | Aklat Atbp.')

@section('content')

<!-- =====================================================
     HERO SECTION
     ===================================================== -->

<section class="home-hero">

<div class="container home-hero-container">

    <div class="home-hero-copy">

        <p class="hero-tag">
            INDEPENDENT BOOKSTORE • SANTA CRUZ, LAGUNA
        </p>

        <h1>
            Higit pa sa isang libro.
        </h1>

        <p class="home-hero-description">
            Discover stories, ideas, and reading essentials
            carefully chosen for every kind of reader.
        </p>

        <div class="hero-search">

            <input
                type="text"
                placeholder="Search for a book..."
                aria-label="Search for a book"
            >

            <button
                type="button"
                aria-label="Search"
            >
                ⌕
            </button>

        </div>

        <div class="hero-actions">

            <a
                href="{{ route('services') }}"
                class="btn"
            >
                Discover Our Services
            </a>

            <a
                href="{{ route('about') }}"
                class="text-link"
            >
                Learn more
                <span>→</span>
            </a>

        </div>

    </div>

    <div
        class="home-hero-visual"
        aria-label="Featured books"
    >

        <div class="hero-paper hero-paper-one"></div>

        <div class="hero-paper hero-paper-two"></div>


        <div class="hero-book hero-book-one">

            <span class="hero-book-label">
                NEW
            </span>

            <img
                src="{{ asset('images/books/book1.jpg') }}"
                alt="Si Miggy, Ang Batang Tausug"
            >

        </div>

        <div class="hero-book hero-book-two">

            <img
                src="{{ asset('images/books/book4.jpg') }}"
                alt="Luha ng Buwaya"
            >

        </div>


        <div class="hero-book hero-book-three">

            <img
                src="{{ asset('images/books/book5.jpg') }}"
                alt="May Isang Bata sa Libro"
            >

        </div>


        <div class="hero-note">

            <span>
                CURATED FOR READERS
            </span>

            <strong>
                Your next story awaits.
            </strong>

        </div>

    </div>

</div>

</section>

<!-- =====================================================
     STORE HIGHLIGHTS
     ===================================================== -->

<section class="home-stats">

<div class="container stats-grid">

    <div class="stat-item">

        <strong>
            6+
        </strong>

        <span>
            BOOK & READING SERVICES
        </span>

    </div>


    <div class="stat-item">

        <strong>
            2
        </strong>

        <span>
            BOOK COLLECTIONS
        </span>

    </div>


    <div class="stat-item">

        <strong>
            1
        </strong>

        <span>
            WELCOMING READING SPACE
        </span>

    </div>

</div>

</section>

<!-- =====================================================
     FEATURED BOOKS
     ===================================================== -->

<section class="for-you">

<div class="container">

    <div class="section-heading">

        <div>

            <p class="section-eyebrow">
                OUR SELECTION
            </p>

            <h2>
                FOR YOU
            </h2>

        </div>


        <a href="{{ route('services') }}">
            View all
            <span>→</span>
        </a>

    </div>


    <div class="book-grid">


        <div class="book-card">

            <div class="book-image">

                <span class="book-label">
                    NEW
                </span>

                <img
                    src="{{ asset('images/books/book1.jpg') }}"
                    alt="Si Miggy, Ang Batang Tausug"
                >

            </div>

            <h3>
                Si Miggy, Ang Batang Tausug
            </h3>

            <p class="book-author">
                Nelson Canlas &amp; Dr. Isabel Cabel Moreno-Go
            </p>

            <p class="book-price">
                ₱235
            </p>

        </div>


        <div class="book-card">

            <div class="book-image">

                <span class="book-label">
                    NEW
                </span>

                <img
                    src="{{ asset('images/books/book2.jpg') }}"
                    alt="From The Archives Box Set"
                >

            </div>

            <h3>
                From The Archives Box Set
            </h3>

            <p class="book-author">
                Jonaxx
            </p>

            <p class="book-price">
                ₱1,499
            </p>

        </div>


        <div class="book-card">

            <div class="book-image">

                <img
                    src="{{ asset('images/books/book3.jpg') }}"
                    alt="The Secret Lives of OFWs"
                >

            </div>

            <h3>
                The Secret Lives of OFWs
            </h3>

            <p class="book-author">
                Filipino Literature
            </p>

            <p class="book-price">
                ₱355
            </p>

        </div>


        <div class="book-card">

            <div class="book-image">

                <span class="book-label">
                    NEW
                </span>

                <img
                    src="{{ asset('images/books/book4.jpg') }}"
                    alt="Luha ng Buwaya"
                >

            </div>

            <h3>
                Luha ng Buwaya
            </h3>

            <p class="book-author">
                Filipino Literature
            </p>

            <p class="book-price">
                ₱699
            </p>

        </div>


        <div class="book-card">

            <div class="book-image">

                <span class="book-label">
                    NEW
                </span>

                <img
                    src="{{ asset('images/books/book5.jpg') }}"
                    alt="May Isang Bata sa Libro"
                >

            </div>

            <h3>
                May Isang Bata sa Libro
            </h3>

            <p class="book-author">
                Filipino Literature
            </p>

            <p class="book-price">
                ₱499
            </p>

        </div>


        <div class="book-card">

            <div class="book-image">

                <img
                    src="{{ asset('images/books/book6.jpg') }}"
                    alt="The Solem Lantern Maker"
                >

            </div>

            <h3>
                The Solem Lantern Maker
            </h3>

            <p class="book-author">
                Fiction
            </p>

            <p class="book-price">
                ₱899
            </p>

        </div>

    </div>

</div>

</section>

<!-- =====================================================
     COMPANY INTRODUCTION
     ===================================================== -->

<section class="home-intro">

<div class="container intro-grid">

    <div class="intro-copy">

        <p class="section-eyebrow">
            ABOUT AKLAT ATPB.
        </p>

        <h2>
            Welcome to Aklat Atbp.
        </h2>

        <p class="intro-lead">
            More than a bookstore, we are a welcoming space
            where readers can discover stories, explore ideas,
            and find something worth keeping.
        </p>

        <p>
            Aklat Atbp. is an independent bookstore located
            in Santa Cruz, Laguna. We offer carefully selected
            new and pre-loved books, stationery, and reading
            accessories for our community.
        </p>

        <a
            href="{{ route('about') }}"
            class="text-link"
        >
            Our story
            <span>→</span>
        </a>

    </div>


    <div class="intro-card">

        <div class="intro-card-small">
            A PLACE FOR
        </div>

        <div class="intro-card-title">
            Stories.<br>
            Ideas.<br>
            Readers.
        </div>

        <div class="intro-card-line"></div>

        <p>
            Carefully chosen for every kind of reader.
        </p>

    </div>

</div>

</section>

<!-- =====================================================
     FEATURED SERVICES
     ===================================================== -->

<section class="home-services">

<div class="container">


    <div class="section-heading section-heading-center">

        <div>

            <p class="section-eyebrow">
                WHAT WE OFFER
            </p>

            <h2>
                Made for Every Reader
            </h2>

        </div>

    </div>


    <div class="card-grid">


        <!-- Service 1: Book Selection -->
        <div class="card">

            <div class="card-icon icon-book">

                <svg viewBox="0 0 64 64"
                     xmlns="http://www.w3.org/2000/svg"
                     aria-hidden="true">

                    <path d="M10 12
                             C20 9 27 12 32 16
                             C37 12 44 9 54 12
                             V50
                             C44 47 37 49 32 53
                             C27 49 20 47 10 50
                             Z"
                          fill="none"
                          stroke="currentColor"
                          stroke-width="2.5"
                          stroke-linejoin="round"/>

                    <path d="M32 16 V53"
                          fill="none"
                          stroke="currentColor"
                          stroke-width="2.5"/>

                    <path d="M14 45
                             C21 43 27 45 32 49"
                          fill="none"
                          stroke="currentColor"
                          stroke-width="2"/>

                    <path d="M50 45
                             C43 43 37 45 32 49"
                          fill="none"
                          stroke="currentColor"
                          stroke-width="2"/>

                </svg>

            </div>

            <h3>
                Book Selection
            </h3>

            <p>
                Explore our collection of new and pre-loved
                books from different genres and interests.
            </p>

            <a
                href="{{ route('services') }}"
                class="card-link"
            >
                Explore
                <span>→</span>
            </a>

        </div>


        <!-- Service 2: Stationery -->
        <div class="card">

            <div class="card-icon icon-stationery">

                <svg viewBox="0 0 64 64"
                     xmlns="http://www.w3.org/2000/svg"
                     aria-hidden="true">

                    <path d="M14 48
                             L17 38
                             L43 12
                             C45 10 48 10 50 12
                             L52 14
                             C54 16 54 19 52 21
                             L26 47
                             Z"
                          fill="none"
                          stroke="currentColor"
                          stroke-width="2.5"
                          stroke-linejoin="round"/>

                    <path d="M14 48
                             L17 38
                             L26 47
                             Z"
                          fill="none"
                          stroke="currentColor"
                          stroke-width="2.5"
                          stroke-linejoin="round"/>

                    <path d="M39 16 L48 25"
                          fill="none"
                          stroke="currentColor"
                          stroke-width="2.5"/>

                    <path d="M43 12 L52 21"
                          fill="none"
                          stroke="currentColor"
                          stroke-width="2.5"/>

                </svg>

            </div>

            <h3>
                Stationery
            </h3>

            <p>
                Find notebooks, journals, pens, bookmarks,
                and other reading essentials.
            </p>

            <a
                href="{{ route('services') }}"
                class="card-link"
            >
                Explore
                <span>→</span>
            </a>

        </div>


        <!-- Service 3: Book Gifting -->
        <div class="card">

            <div class="card-icon icon-gift">

                <svg viewBox="0 0 64 64"
                     xmlns="http://www.w3.org/2000/svg"
                     aria-hidden="true">

                    <rect x="10"
                          y="24"
                          width="44"
                          height="30"
                          rx="3"
                          fill="none"
                          stroke="currentColor"
                          stroke-width="2.5"/>

                    <path d="M32 24 V54"
                          fill="none"
                          stroke="currentColor"
                          stroke-width="2.5"/>

                    <rect x="8"
                          y="18"
                          width="48"
                          height="9"
                          rx="2"
                          fill="none"
                          stroke="currentColor"
                          stroke-width="2.5"/>

                    <path d="M32 18
                             C25 17 20 13 22 10
                             C24 7 29 10 32 18"
                          fill="none"
                          stroke="currentColor"
                          stroke-width="2.5"
                          stroke-linecap="round"/>

                    <path d="M32 18
                             C39 17 44 13 42 10
                             C40 7 35 10 32 18"
                          fill="none"
                          stroke="currentColor"
                          stroke-width="2.5"
                          stroke-linecap="round"/>

                </svg>

            </div>

            <h3>
                Book Gifting
            </h3>

            <p>
                Choose meaningful books and accessories
                for friends, family, and loved ones.
            </p>

            <a
                href="{{ route('services') }}"
                class="card-link"
            >
                Explore
                <span>→</span>
            </a>

        </div>

    </div>

</div>

</section>

<!-- =====================================================
     CALL TO ACTION
     ===================================================== -->

<section class="home-cta">

<div class="container home-cta-inner">

    <div>

        <p class="section-eyebrow">
            YOUR NEXT STORY AWAITS
        </p>

        <h2>
            Find something worth reading.
        </h2>

        <p>
            Visit Aklat Atbp. and discover a book that might
            become your next favorite.
        </p>

    </div>


    <a
        href="{{ route('contact') }}"
        class="btn btn-light"
    >
        Contact Us
        <span>→</span>
    </a>

</div>

</section>

@endsection
