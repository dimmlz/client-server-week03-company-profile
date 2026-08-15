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

- Understand the Laravel MVC architecture.
- Create and manage Laravel routes.
- Develop a controller for handling page requests.
- Create reusable Blade layouts and components.
- Build multiple company profile pages.
- Apply responsive and professional web design.
- Practice Git version control.
- Document the development process using Markdown.
- Publish the project through GitHub.

## 4. MVC Architecture

### What is MVC?

MVC stands for **Model-View-Controller**. It is a software architecture that separates an application into three main parts:

- **Model** – Handles data and database-related operations.
- **View** – Handles the user interface and presentation.
- **Controller** – Handles requests and connects the application logic with the views.

### Why Laravel Uses MVC

Laravel uses MVC to keep application code organized and easier to maintain. Each part of the application has a specific responsibility instead of putting all the code in one place.

### Advantages of MVC

MVC provides:

- Better code organization
- Easier maintenance
- Separation of concerns
- Reusable components
- Easier debugging
- Better scalability for larger applications

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