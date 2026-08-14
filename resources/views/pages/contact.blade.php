@extends('layouts.app')

@section('title', 'Contact | Aklat Atbp.')

@section('content')

<!-- Contact Hero -->

<section class="hero">

<div class="container">

    <p class="hero-tag">
        GET IN TOUCH
    </p>

    <h1>
        Contact Aklat Atbp.
    </h1>

    <p>
        Have a question or want to learn more about our
        bookstore? We'd be happy to hear from you.
    </p>

</div>

</section>

<!-- Contact Information -->

<section>

<div class="container">

    <p class="hero-tag">
        FIND US
    </p>

    <h2>Visit Aklat Atbp.</h2>

    <div class="card-grid">


        <!-- Address -->
        <div class="card">

            <div class="card-icon icon-location">

                <svg viewBox="0 0 64 64"
                     xmlns="http://www.w3.org/2000/svg"
                     aria-hidden="true">

                    <path d="M32 56
                             C32 56 50 39 50 25
                             C50 15 42 8 32 8
                             C22 8 14 15 14 25
                             C14 39 32 56 32 56 Z"
                          fill="none"
                          stroke="currentColor"
                          stroke-width="2.5"
                          stroke-linejoin="round"/>

                    <circle cx="32"
                            cy="25"
                            r="6"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2.5"/>

                </svg>

            </div>

            <h3>Address</h3>

            <p>
                Santa Cruz, Laguna<br>
                Philippines
            </p>

        </div>


        <!-- Phone -->
        <div class="card">

            <div class="card-icon icon-phone">

                <svg viewBox="0 0 64 64"
                     xmlns="http://www.w3.org/2000/svg"
                     aria-hidden="true">

                    <path d="M18 10
                             L27 8
                             L32 20
                             L25 25
                             C28 32 32 36 39 39
                             L44 32
                             L56 37
                             L54 46
                             C53 51 48 54 43 53
                             C25 49 15 39 11 21
                             C10 16 13 11 18 10 Z"
                          fill="none"
                          stroke="currentColor"
                          stroke-width="2.5"
                          stroke-linejoin="round"
                          stroke-linecap="round"/>

                </svg>

            </div>

            <h3>Phone</h3>

            <p>
                (049) 123-4567
            </p>

        </div>


        <!-- Email -->
        <div class="card">

            <div class="card-icon icon-email">

                <svg viewBox="0 0 64 64"
                     xmlns="http://www.w3.org/2000/svg"
                     aria-hidden="true">

                    <rect x="8"
                          y="15"
                          width="48"
                          height="34"
                          rx="3"
                          fill="none"
                          stroke="currentColor"
                          stroke-width="2.5"/>

                    <path d="M10 18
                             L32 36
                             L54 18"
                          fill="none"
                          stroke="currentColor"
                          stroke-width="2.5"
                          stroke-linejoin="round"/>

                </svg>

            </div>

            <h3>Email</h3>

            <p>
                hello@aklatatbp.com
            </p>

        </div>


    </div>

</div>

</section>

<!-- Contact Form -->

<section>

<div class="container">

    <p class="hero-tag">
        SEND US A MESSAGE
    </p>

    <h2>Contact Form</h2>

    <form class="contact-form">

        <div class="form-group">

            <label for="name">
                Name
            </label>

            <input
                type="text"
                id="name"
                name="name"
                placeholder="Enter your name"
            >

        </div>


        <div class="form-group">

            <label for="email">
                Email
            </label>

            <input
                type="email"
                id="email"
                name="email"
                placeholder="Enter your email"
            >

        </div>


        <div class="form-group">

            <label for="subject">
                Subject
            </label>

            <input
                type="text"
                id="subject"
                name="subject"
                placeholder="Enter your subject"
            >

        </div>


        <div class="form-group">

            <label for="message">
                Message
            </label>

            <textarea
                id="message"
                name="message"
                rows="6"
                placeholder="Write your message"
            ></textarea>

        </div>


        <button type="button" class="btn">
            Send Message
        </button>

    </form>

</div>

</section>

<!-- Business Hours -->

<section>

<div class="container">

    <p class="hero-tag">
        STORE HOURS
    </p>

    <h2>When to Visit Us</h2>

    <p>
        Monday – Saturday: 9:00 AM – 6:00 PM
    </p>

    <p>
        Sunday: 10:00 AM – 5:00 PM
    </p>

</div>

</section>

<!-- Contact Message -->

<section>

<div class="container">

    <p class="hero-tag">
        WE'D LOVE TO HEAR FROM YOU
    </p>

    <h2>Have a Question?</h2>

    <p>
        For inquiries about our books, stationery, services,
        or community activities, you may contact us through
        phone or email.
    </p>

</div>

</section>

@endsection
