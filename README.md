# Aklat Atbp. – Company Profile Website

## 1. Project Title

**Aklat Atbp. – Company Profile Website**

A multi-page company profile website developed using Laravel MVC for the ITST 302 – Client-Server Technologies Week 3 Mini Project.

## 2. Introduction

### What is a Company Profile Website?

A company profile website is a website that presents important information about a business, including its background, services, team, and contact information.

### Why Businesses Need One

Businesses need a company profile website to establish an online presence and provide customers with an easy way to learn about the company and its services.

### Purpose of the Project

The purpose of this project is to develop a professional multi-page company profile website using Laravel's MVC architecture. The project demonstrates routing, controllers, Blade templating, reusable layouts, and organized project structure.

The company used for this project is **Aklat Atbp.**, an independent bookstore based in Santa Cruz, Laguna.

## 3. Objectives

The project aims to:

* Understand the Laravel MVC architecture.
* Create and manage Laravel routes.
* Develop a controller for handling page requests.
* Create reusable Blade layouts and components.
* Build multiple company profile pages.
* Apply responsive and professional web design.
* Practice Git version control.
* Document the development process using Markdown.
* Publish the project through GitHub.

## 4. MVC Architecture

### What is MVC?

MVC stands for **Model-View-Controller**. It is a software architecture that separates an application into three main parts:

* **Model** – Handles data and database-related operations.
* **View** – Handles the user interface and presentation.
* **Controller** – Handles requests and connects the application logic with the views.

### Why Laravel Uses MVC

Laravel uses MVC to keep application code organized and easier to maintain. Each part of the application has a specific responsibility instead of putting all the code in one place.

### Advantages of MVC

MVC provides:

* Better code organization
* Easier maintenance
* Separation of concerns
* Reusable components
* Easier debugging
* Better scalability for larger applications

### Laravel Request Flow

```text
Browser
   │
   ▼
Route (web.php)
   │
   ▼
CompanyController
   │
   ▼
Blade View
   │
   ▼
HTML Response
   │
   ▼
Browser
```

## 5. Laravel Routing

Laravel Routing is used to define how the application responds to different URLs or browser requests. In this project, the routes are defined in `routes/web.php` and connected to the appropriate methods in `CompanyController`.

The project uses four main routes:

| Route       | Controller Method | Purpose                    |
| ----------- | ----------------- | -------------------------- |
| `/`         | `home()`          | Displays the Home page     |
| `/about`    | `about()`         | Displays the About page    |
| `/services` | `services()`      | Displays the Services page |
| `/contact`  | `contact()`       | Displays the Contact page  |

Each route uses `Route::get()` to handle GET requests. The routes are connected to `CompanyController`, which determines which Blade view should be displayed.

For example:

```php
Route::get('/about', [CompanyController::class, 'about'])->name('about');
```

This means that when a user visits `/about`, Laravel calls the `about()` method in `CompanyController`. The route is also given the name `about`, which allows it to be referenced easily using Laravel's `route()` helper.

### Route Flow

```text
Browser Request
      ↓
routes/web.php
      ↓
CompanyController
      ↓
Controller Method
      ↓
Blade View
      ↓
HTML Response
```

**Screenshot:** `routes/web.php`

## 6. Controllers

Controllers handle the requests received by the application and determine what response should be returned. In this project, `CompanyController` is located in `app/Http/Controllers/CompanyController.php`.

The controller contains four methods:

* `home()` returns the Home page.
* `about()` returns the About page.
* `services()` returns the Services page.
* `contact()` returns the Contact page.

For example:

```php
public function about()
{
    return view('pages.about');
}
```

When the `/about` route is accessed, Laravel calls the `about()` method. The method then returns the `pages.about` Blade view.

The controller helps keep the routing and page presentation organized because the routes determine where the request should go, while the controller determines which view should be returned.

**Screenshot:** `CompanyController.php`

## 7. Blade Templating Engine

Blade is Laravel's templating engine used to create dynamic and reusable views. In this project, Blade templates are stored inside the `resources/views` directory.

The project uses a reusable layout located at:

```text
resources/views/layouts/app.blade.php
```

The main layout contains the common structure of the website, including the navigation bar, page content area, and footer.

### Blade Directives Used

#### `@extends`

The page templates use `@extends` to inherit the main layout.

```php
@extends('layouts.app')
```

This allows pages such as `home.blade.php` to use the common structure defined in `app.blade.php`.

#### `@section`

`@section` is used to provide content for a specific section of the layout.

```php
@section('title', 'Home | Aklat Atbp.')

@section('content')
```

The first section defines the page title, while the second contains the actual Home page content.

#### `@yield`

The main layout uses `@yield` as a placeholder for content provided by individual pages.

```php
<title>@yield('title', 'Aklat Atbp.')</title>

@yield('content')
```

This allows each page to provide its own title and content while still using the same layout.

#### `@include`

`@include` is used to insert reusable Blade components.

```php
@include('components.navbar')

@include('components.footer')
```

This allows the navigation bar and footer to be reused across different pages without copying the same code into every page.

### Laravel Helpers Used in the Blade Views

The project also uses Laravel helpers for navigation and images.

```php
{{ route('services') }}
```

The `route()` helper generates a URL using the name of a defined route.

```php
{{ asset('images/books/book1.jpg') }}
```

The `asset()` helper generates the correct URL for files stored in the public directory.

### Blade Layout Structure

```text
layouts/app.blade.php
        │
        ├── components/navbar.blade.php
        │
        ├── @yield('content')
        │       │
        │       └── pages/home.blade.php
        │
        └── components/footer.blade.php
```

Using Blade layouts and reusable components makes the website easier to maintain because common elements such as the navbar and footer only need to be created once.

**Screenshots:**

* `layouts/app.blade.php`
* `pages/home.blade.php`
## 8. Laravel Folder Structure

Laravel follows an organized folder structure that separates different parts of the application. In this project, the following folders and files were mainly used:

```text
week03-company-profile/
│
├── app/
│   └── Http/
│       └── Controllers/
│           └── CompanyController.php
│
├── public/
│   └── images/
│       └── books/
│
├── resources/
│   ├── css/
│   ├── js/
│   └── views/
│       ├── components/
│       │   ├── navbar.blade.php
│       │   └── footer.blade.php
│       │
│       ├── layouts/
│       │   └── app.blade.php
│       │
│       └── pages/
│           ├── home.blade.php
│           ├── about.blade.php
│           ├── services.blade.php
│           └── contact.blade.php
│
├── routes/
│   └── web.php
│
└── README.md
```

## 9. Screenshots

The following screenshots document the different parts of the Aklat Atbp. company profile website and its Laravel implementation.

### Home Page

The Home page introduces Aklat Atbp. and displays featured books, store highlights, services, and a call-to-action section.

**Screenshot:** Home Page

### About Page

The About page provides information about Aklat Atbp., its background, and its purpose as an independent bookstore.

**Screenshot:** About Page

### Services Page

The Services page presents the different services offered by Aklat Atbp.

**Screenshot:** Services Page

### Contact Page

The Contact page provides the company's contact information and location details.

**Screenshot:** Contact Page

### Navigation Bar

The navigation bar provides links to the Home, About, Services, and Contact pages.

**Screenshot:** Navigation Bar

### Footer

The footer contains reusable information displayed at the bottom of the website.

**Screenshot:** Footer

### Laravel Code Screenshots

The following screenshots show the main Laravel files used to implement the company profile website:

- `routes/web.php`
- `app/Http/Controllers/CompanyController.php`
- `resources/views/layouts/app.blade.php`
## 10. Problems Encountered

During the development of the Aklat Atbp. company profile website, several challenges were encountered while working with Laravel MVC.

### 1. Understanding Laravel MVC

At first, it was difficult to understand how routes, controllers, and Blade views work together. It was necessary to understand which part of the application handles the browser request and which part displays the page.

### 2. Connecting Routes to the Controller

Another challenge was properly connecting each route to the corresponding method in `CompanyController`. Each page needed its own route and controller method to display the correct Blade view.

### 3. Creating Reusable Blade Components

It was also challenging to understand how Blade layouts and components work. The navigation bar and footer needed to be separated into reusable components instead of being copied into every page.

### 4. Organizing the Project Files

Keeping the Laravel files organized was another challenge, especially when working with different folders such as `routes`, `app/Http/Controllers`, and `resources/views`.

### 5. Documenting the Project

Another challenge was organizing the README documentation and making sure that the important Laravel concepts, code examples, folder structure, and screenshots were properly documented.
## 11. Solutions

The problems encountered during the development process were addressed by reviewing the Laravel structure, checking the code, and testing the website after making changes.

### 1. Understanding Laravel MVC

To understand MVC better, the project was divided into routes, controller methods, and Blade views. The relationship between these components was tested by following the request flow from the browser to the route, controller, and view.

### 2. Connecting Routes to the Controller

The routes in `routes/web.php` were checked to make sure that each URL was connected to the correct method in `CompanyController`. The controller methods were also checked to ensure that they returned the correct Blade views.

### 3. Creating Reusable Blade Components

The reusable layout in `layouts/app.blade.php` was used together with `@extends`, `@section`, and `@yield`. The navigation bar and footer were separated into components and included using `@include`.

### 4. Organizing the Project Files

The Laravel folder structure was followed to keep controllers, routes, Blade views, components, and public assets in their proper locations. This made the project easier to navigate and maintain.

### 5. Documenting the Project

The README was organized into sections covering the project introduction, objectives, MVC architecture, routing, controllers, Blade templating, folder structure, screenshots, problems, and solutions. Markdown formatting was also used to make the documentation easier to read.
## 12. Reflection

## 12. Reflection

Creating the Aklat Atbp. company profile website was a challenging experience for me because I was still trying to understand how Laravel works. At the beginning, I was confused about the Laravel project structure and which files I needed to edit. I knew that Laravel uses MVC, but I did not fully understand how the different parts were connected. I had to learn the process step by step instead of understanding everything at once.

One of the parts I had difficulty with was understanding the difference between routes, controllers, and views. At first, I was confused about why I needed to create a controller instead of directly displaying a page from the route. As I worked on the project, I slowly understood that `routes/web.php` receives the browser request, the `CompanyController` handles the request, and the Blade view is responsible for displaying the actual page. Seeing the flow from the route to the controller and then to the view helped me understand MVC better.

I also had difficulty understanding Blade templating. The use of `@extends`, `@section`, `@yield`, and `@include` was confusing to me at first because I was not used to reusable layouts and components. I eventually understood that the main layout can contain the common parts of the website, while the individual pages can provide their own content. The reusable navbar and footer also helped me understand why components are useful in a website.

Another challenge was organizing the files and making sure that the correct code was placed in the correct folder. I had to work with `routes`, `app/Http/Controllers`, `resources/views`, `public/images`, layouts, components, and page files. Sometimes I was unsure where a file should be placed or what file needed to be edited. Checking the Laravel structure and testing the website helped me become more familiar with the project organization.

I also experienced difficulties with Git and documentation while working on the project. I had to check the repository status, review changes using `git diff`, and make sure that the README was properly updated. I also encountered problems with Markdown formatting while adding the different sections to the README. At one point, the formatting of headings, bullet points, code blocks, and tables became confusing. Fixing these issues helped me understand that documentation also needs to be organized and checked carefully.

The biggest lesson I learned from this project is that I do not have to understand everything immediately. There were parts of Laravel that confused me at first, and I needed to go through them one at a time. By actually creating the routes, controller methods, Blade layout, pages, reusable components, and documentation, I was able to understand the concepts better than I would have by only reading about them.

This project gave me a better understanding of Laravel MVC and how the different parts of a web application work together. I still have a lot to learn, but I am now more familiar with Laravel's structure, routing, controllers, Blade templates, reusable components, Git, and project documentation. The experience also taught me to be more patient when working with unfamiliar technologies and to solve problems step by step.
## 13. References

Laravel. (n.d.). *Laravel documentation*. https://laravel.com/docs

Laravel. (n.d.). *Blade templates*. https://laravel.com/docs/blade

Laravel. (n.d.). *Routing*. https://laravel.com/docs/routing

Laravel. (n.d.). *Controllers*. https://laravel.com/docs/controllers

GitHub. (n.d.). *GitHub documentation*. https://docs.github.com/en