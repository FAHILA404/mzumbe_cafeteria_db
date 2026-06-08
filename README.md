# mzumbe_cafeteria_db  @kadefue @kadefue@yahoo.co.uk
SHUKRANI FAHILA with reg no 14325068/T.24, submitting an assignment concerning cafeteria management

# Mzumbe University Cafeteria Food Ordering System

## Course Details
* **Institution:** Mzumbe University
* **Faculty:** Faculty of Science and Technology (FST)
* **Department:** Computing Science Studies
* **Course Code & Title:** CSS 221: Introduction to Web Programming
* **Academic Guidance:** Bertha Msuliche Lebalwa (MSc)
* **Instructor / Evaluator:** Mr. Kadefue

---

## Project Description
The **Mzumbe University Cafeteria Food Ordering System** is a lightweight, secure, and asynchronous web-based application designed to streamline meal pre-ordering for students across all main university cafeterias (Main Cafeteria, FST Cafeteria, and Chox Cafeteria). 

This system has been built from the ground up in strict compliance with the **CSS 221 Curriculum roadmap**, demonstrating a profound understanding of modern web engineering principles, web protocols, client-side scripts, and server-side relational database abstractions.

---

## Architectural Implementation (Based on Lecture Modules)

The system architecture heavily enforces the **Separation of Concerns (SoC)** framework as introduced in Lecture 2, decoupling structure, presentation, behavioral scripts, and persistent backend storage.

### 1. Structural Layer (XHTML 1.0 Strict Validation) — *Lecture 2*
In accordance with the markup quality rules taught in class, `index.php` is formatted using a strict **XHTML 1.0 Strict DOCTYPE**. 
* All element tags and attributes are explicitly written in lower-case letters.
* Elements are properly nested and sealed with appropriate closing tags.
* The form uses the safe and secret `POST` action standard to transmit contextual inputs.

### 2. Presentation Layer (CSS Box Model & Campus Palette) — *Lecture 2 & 3*
The user interface styles embedded inside `style.css` demonstrate full mastery over the **CSS Box Model** (Content boundaries, Padding cushions, Border edges, and Margin separations). 
* To align with institutional branding guidelines, the layout features Mzumbe's official color palette: **Mzumbe Green** (`rgb(0, 102, 51)`) and **Mzumbe Gold** (`#FFCC00`).
* Absolute structural bounds with dynamic flex properties prevent clipping across standard viewport frames.

### 3. Behavioral Client Layer (jQuery Asynchronous AJAX Validation) — *Lecture 3 & 5*
The system integrates client-side script optimization using the **jQuery library** within `app.js` to process operational logic asynchronously.
* **Event Interception:** Traditional form submission is explicitly halted using `event.preventDefault()` to bypass complete page flickers or data-wipe refreshes.
* **Data Serialization:** Dynamic inputs are seamlessly serialized into centralized query strings via jQuery `serialize()`.
* **Asynchronous Transport:** Utilizes the HTTP POST protocol using `$.post()` to communicate silently with the server backend and parse returning data vectors into dynamic DOM response blocks.

### 4. Server Controller Layer & Database Security (PHP & PDO Mechanics) — *Lecture 4*
The backend processor engine (`process.php`) and database router (`db.php`) are fully reinforced against modern web vulnerabilities.
* **SQL Injection (SQLi) Elimination:** Following the core instructions from Lecture 4 (Slide 20-21), older `mysqli` syntax has been completely abandoned. The system utilizes the **PHP Data Objects (PDO) API** configured with native server-side **Prepared Statements**. Database query parameterization keeps instructions isolated from raw user strings.
* **XSS Attack Defenses:** Incoming server inputs are sanitized using strict validation principles (`htmlspecialchars`) to intercept cross-site scripting vulnerabilities before state commitment.
* **Database Normalization:** Handles auto-incrementing transactional entity relations (`order_id`) where secondary entries require no manual variable population from client forms.

---

## System File Directory Tree
```text
mzumbe_cafeteria/
│
├── db.php          # Database connectivity layer via secure PDO instance
├── process.php     # Server-side controller engine handling data sanitization & SQL injection checks
├── index.php       # Client-side user structure engineered in XHTML 1.0 Strict
├── style.css       # Visual styling implementing Mzumbe Color Palette and CSS Box Model
└── app.js          # Client-side validation and Asynchronous jQuery AJAX event handler
