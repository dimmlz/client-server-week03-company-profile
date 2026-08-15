@extends('layouts.app')

@section('title', 'Services | Aklat Atbp.')

@section('content')

<section class="services-section">


<div class="container">

    <!-- Services Introduction -->
    {{-- Services Introduction --}}
    <div class="services-intro">

        <span class="section-eyebrow">
            WHAT WE OFFER
        </span>

        <h2>
            Services for Every Reader
        </h2>

        <p>
            From finding your next favorite book to discovering
            thoughtful gifts and connecting with fellow readers,
            Aklat Atbp. is here to make reading more meaningful.
        </p>

    </div>


    <!-- Services Grid -->
     {{-- Services Grid --}}
    <div class="services-grid">


        <!-- 1. Book Selection -->
        <article class="service-card">

            <div class="service-icon">
                <svg viewBox="0 0 64 64"
                     xmlns="http://www.w3.org/2000/svg"
                     aria-hidden="true">

                    <!-- Book outline -->
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

                    <!-- Center line -->
                    <path d="M32 16 V53"
                          fill="none"
                          stroke="currentColor"
                          stroke-width="2.5"/>

                    <!-- Bottom lines -->
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
                Discover carefully selected new and pre-loved
                books across different genres, interests,
                and reading levels.
            </p>

        </article>


        <!-- 2. Pre-Loved Books -->
        <article class="service-card">

            <div class="service-icon">
                <svg viewBox="0 0 64 64"
                     xmlns="http://www.w3.org/2000/svg"
                     aria-hidden="true">

                    <!-- Rounded-bottom book -->
                    <path d="M13 11
                             H51
                             V45
                             C51 51 45 54 39 54
                             H25
                             C18 54 13 51 13 45
                             Z"
                          fill="none"
                          stroke="currentColor"
                          stroke-width="2.5"
                          stroke-linejoin="round"/>

                    <!-- Book spine -->
                    <path d="M20 11 V45"
                          fill="none"
                          stroke="currentColor"
                          stroke-width="2.5"/>

                    <!-- Bottom curve -->
                    <path d="M20 45
                             C20 50 23 52 28 52"
                          fill="none"
                          stroke="currentColor"
                          stroke-width="2"/>

                </svg>
            </div>

            <h3>
                Pre-Loved Books
            </h3>

            <p>
                Browse quality second-hand books that give
                stories a new home and readers more choices.
            </p>

        </article>


        <!-- 3. Stationery -->
        <article class="service-card">

            <div class="service-icon">
                <svg viewBox="0 0 64 64"
                     xmlns="http://www.w3.org/2000/svg"
                     aria-hidden="true">

                    <!-- Pencil body -->
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

                    <!-- Pencil tip -->
                    <path d="M14 48
                             L17 38
                             L26 47
                             Z"
                          fill="none"
                          stroke="currentColor"
                          stroke-width="2.5"
                          stroke-linejoin="round"/>

                    <!-- Pencil line -->
                    <path d="M39 16 L48 25"
                          fill="none"
                          stroke="currentColor"
                          stroke-width="2.5"/>

                    <!-- Pencil detail -->
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
                and useful stationery for everyday writing.
            </p>

        </article>


        <!-- 4. Book Gifting -->
        <article class="service-card">

            <div class="service-icon">
                <svg viewBox="0 0 64 64"
                     xmlns="http://www.w3.org/2000/svg"
                     aria-hidden="true">

                    <!-- Gift box -->
                    <rect x="10"
                          y="24"
                          width="44"
                          height="30"
                          rx="3"
                          fill="none"
                          stroke="currentColor"
                          stroke-width="2.5"/>

                    <!-- Box middle ribbon -->
                    <path d="M32 24 V54"
                          fill="none"
                          stroke="currentColor"
                          stroke-width="2.5"/>

                    <!-- Lid -->
                    <rect x="8"
                          y="18"
                          width="48"
                          height="9"
                          rx="2"
                          fill="none"
                          stroke="currentColor"
                          stroke-width="2.5"/>

                    <!-- Ribbon bow -->
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
                Choose thoughtful books and reading accessories
                for birthdays and other special occasions.
            </p>

        </article>


        <!-- 5. Recommendations -->
        <article class="service-card">

            <div class="service-icon">
                <svg viewBox="0 0 64 64"
                     xmlns="http://www.w3.org/2000/svg"
                     aria-hidden="true">

                    <!-- Lightbulb -->
                    <path d="M32 9
                             C21 9 13 17 13 27
                             C13 34 17 39 22 43
                             C24 45 25 47 25 50
                             H39
                             C39 47 40 45 42 43
                             C47 39 51 34 51 27
                             C51 17 43 9 32 9
                             Z"
                          fill="none"
                          stroke="currentColor"
                          stroke-width="2.5"
                          stroke-linejoin="round"/>

                    <!-- Lightbulb base -->
                    <path d="M25 50 H39"
                          fill="none"
                          stroke="currentColor"
                          stroke-width="2.5"/>

                    <path d="M27 55 H37"
                          fill="none"
                          stroke="currentColor"
                          stroke-width="2.5"
                          stroke-linecap="round"/>

                    <!-- Inner filament -->
                    <path d="M27 27
                             C29 24 31 24 32 27
                             C33 24 35 24 37 27
                             M32 27 V36"
                          fill="none"
                          stroke="currentColor"
                          stroke-width="2"
                          stroke-linecap="round"/>

                </svg>
            </div>

            <h3>
                Reading Recommendations
            </h3>

            <p>
                Get book suggestions based on your interests,
                favorite genres, and reading preferences.
            </p>

        </article>


        <!-- 6. Community -->
        <article class="service-card">

            <div class="service-icon">
                <svg viewBox="0 0 64 64"
                     xmlns="http://www.w3.org/2000/svg"
                     aria-hidden="true">

                    <!-- Left person -->
                    <circle cx="22"
                            cy="20"
                            r="8"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2.5"/>

                    <path d="M8 48
                             C8 38 14 32 22 32
                             C30 32 34 38 34 48"
                          fill="none"
                          stroke="currentColor"
                          stroke-width="2.5"
                          stroke-linecap="round"/>

                    <!-- Right person -->
                    <circle cx="42"
                            cy="20"
                            r="8"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2.5"/>

                    <path d="M30 48
                             C30 38 34 32 42 32
                             C50 32 56 38 56 48"
                          fill="none"
                          stroke="currentColor"
                          stroke-width="2.5"
                          stroke-linecap="round"/>

                </svg>
            </div>

            <h3>
                Reading Community
            </h3>

            <p>
                Connect with fellow readers through discussions,
                recommendations, and shared reading experiences.
            </p>

        </article>


    </div>


    <!-- Services CTA -->
     {{-- Services Call to Action --}}
    <div class="services-cta">

        <div>
            <span class="section-eyebrow">
                KEEP READING
            </span>

            <h2>
                Find something worth reading.
            </h2>

            <p>
                Explore our collection and discover books
                that might become your next favorite.
            </p>
        </div>

        <a href="{{ route('home') }}" class="btn btn-light">
            Explore Books
        </a>

    </div>

</div>


</section>

@endsection
