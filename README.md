# Loy Paupit Barbershop - Responsive Product Landing Page

## 1. Introduction
A Product Landing Page serves as a critical digital storefront for modern businesses, acting as the primary point of interaction for potential customers. It focuses on communicating value, displaying key services or features, and driving user conversions. 

The purpose of this project is to develop a modern, responsive, and high-converting landing page for **Loy Paupit Barbershop**, a local barbershop business in Santa Cruz, Laguna. Built using **Laravel**, **Blade Components**, and **Tailwind CSS**, this platform streamlines service selection and appointment bookings for customers.

---

## 2. Objectives
* Build a mobile-first, fully responsive landing page using Tailwind CSS.
* Implement reusable Laravel Blade Components to create modular and maintainable UI architecture.
* Apply responsive design layouts using CSS Grid and Flexbox.
* Establish a consistent visual hierarchy with dark-themed styling (`slate-900` and `amber-500`).
* Develop an interactive booking modal with form validation using vanilla JavaScript.
* Publish a complete portfolio project using GitHub and LinkedIn.

---

## 3. Responsive Web Design
Responsive Web Design (RWD) ensures that web applications adapt seamlessly across various viewport sizes—desktop, laptop, tablet, and mobile devices. 

In this application:
* **Mobile-First Approach:** Base styles prioritize smaller screens, ensuring readability and smooth navigation without horizontal overflow.
* **Responsive Breakpoints:** Tailored layout adjustments are applied at key Tailwind breakpoints (`md:`, `lg:`).
* **Flexbox & Grid:** Used extensively for navbar alignment, service card distribution, and footer column balancing.
* **User Experience (UX):** Responsive design eliminates non-functional elements on mobile devices, providing fast access to booking and service lists.

---

## 4. Tailwind CSS
Tailwind CSS is a utility-first CSS framework that provides low-level utility classes to build custom designs directly in markup.

### Key Advantages Used:
* **Utility Classes:** Enables rapid interface styling without writing custom CSS files.
* **Custom Color Palette:** Utilizes dark slate background surfaces combined with warm amber highlights for a premium barbershop feel.
* **Component Styling Example:**

---

## 5. Blade Components
Laravel Blade Components allow developers to break down complex UI layouts into modular, reusable blocks. This approach significantly improves code maintainability and reduces duplication.

### Integrated Components:
* `x-navbar`: Responsive navigation header with brand identity and menu actions.
* `x-hero`: High-impact landing presentation featuring primary Call-To-Action (CTA) buttons.
* `x-services`: Service showcase highlighting haircut types and pricing cards.
* `x-barbers`: Specialist team showcase cards.
* `x-booking-modal`: Interactive popup dialog for scheduling hair appointments.
* `x-footer`: Business contact details, site links, and copyright notices.

---

## 6. User Interface Design
* **Color Palette:** Primary Dark (`slate-900`, `slate-950`), Accent (`amber-500`, `amber-600`), Text (`slate-100`, `slate-400`).
* **Typography:** Clean sans-serif fonts with strong font weights for section titles.
* **Card Design:** Elevated background surfaces (`slate-800`) with subtle border highlights (`slate-700/50`) and smooth hover transformations.
* **Button Styles:** High-contrast amber action buttons paired with subtle outline buttons for secondary actions.

---

## 7. Folder Structure

    week05-product-landing-page/
├── app/
├── documentation/
│   ├── before.png
│   └── after.png
├── public/
├── resources/
│   └── views/
│       ├── components/
│       │   ├── barbers.blade.php
│       │   ├── booking-modal.blade.php
│       │   ├── footer.blade.php
│       │   ├── hero.blade.php
│       │   ├── navbar.blade.php
│       │   └── services.blade.php
│       ├── layouts/
│       │   └── app.blade.php
│       └── welcome.blade.php
├── screenshots/
│   ├── desktop-view.png
│   └── mobile-view.png
├── README.md
└── routes/
    └── web.php

    ---

## 8. Screenshots & Before-and-After Comparison

### Desktop View
![Desktop View](screenshots/desktop-view.png)

### Mobile View
![Mobile View](screenshots/mobile-view.png)

### Before & After Evolution
| Before (Early Layout / Wireframe) | After (Polished Responsive UI) |
|---|---|
| ![Before](documentation/before.png) | ![After](documentation/after.png) |