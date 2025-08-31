# Lego University
"This is a UNI empowered by LEGOs, designed for LEGOs, tailored to YOU". 

[Live Demo](https://maheshr03.github.io/My-First-Website/)

Welcome to the README for the University Website! This document provides an overview of the website's structure, components, and guidelines for contributors and maintainers.
This repository hosts the source code for an engaging and user-friendly university website. It encompasses HTML, CSS, basic JavaScript, and PHP. 

<img width="1901" height="894" alt="image" src="https://github.com/user-attachments/assets/c843f265-d4b5-4f35-bd47-3bf52a87eac4" />
<br>
<br>
<img width="1897" height="916" alt="image" src="https://github.com/user-attachments/assets/4938e7f0-5deb-4008-a975-4f788e0f107d" />
<br>
<br>
<img width="1899" height="880" alt="image" src="https://github.com/user-attachments/assets/68b9fe84-4415-4e97-9eba-8f1a8a783a5b" />
<br>
<br>
<img width="1867" height="856" alt="image" src="https://github.com/user-attachments/assets/e3478625-c337-4385-bebc-014f7882fc88" />

# Purpose

The University Website serves as an online platform to showcase information about our institution, academic programs, facilities, events, blog, and various resources for students, faculty, staff, and visitors.

# Structure

The website is structured into different sections:
1. Homepage:: Offers an introduction to the university and highlights current LEGO events, news, and announcements.
 
2. About:: Provides information about the LEGO university's history, mission, vision, and leadership.

3. Course:: Includes details about academic programs, departments, LEGO courses, and research opportunities.
  
4. Blog:: LEGO Certificates and Online Programs for the following year with post categories and a comment section

5. Contact:: Location, Contact information and forms for inquiries and feedback.

# Description

# index.html
In this page, the navigation bar is created using html, styled with css

The course section is created

3 different campus are created and a hover efffect is added over them

The facilities section is created, some of the facilities available are library, cafeteria and playground for various sports

Student review section is created with 2 student reviews

Jvascript is included for the toggle function

The footer is added with multiple social media handles

Google tag (gtag.js) is added for google analytics which helps us track the traffic to the website

# about.html

The navLinks, footer and gtag.js are included from the previous page

About us content is initialized

This page tells us about the university in depth

# course.html

The navLinks, footer and gtag.js are included from the previous page

The course section is added with 3 different courses: Intermediate, Degree and PostGraduate

The facilities section is included again

# blog.html

The navLinks, footer and gtag.js are included from the previous page

The blog page content is added with one of the honarary LEGO student who received his certification

The programs for the year are specified

The credits for different courses are alloted

A comment box is created

A user can leave a comment by entering their name and email

# contact.html

The navLinks, footer and gtag.js are included from the previous page

A google map is added to locate the university on the map

THe address, contact number and email of the university are mentioned

A php form is created to send a message via email

# style.css

All the above html files are styled, modified, tweaked and updated using css

The background image of the website is set

The navigation bar, headers, footer, links, icons, rows, columns, text box, comments, layers, hover, testimonials, buttons are styled and adjusted using css

Box sizing, body weight, body size, color, border, outline, margin, padding, width, height, align items, jusify content, flex basis, cursor, display, text align, transorm, position, opacity, background, z-index are some of the most used ones

@media is used to modify the elements of the page to make the website responsive

# Technologies Used

The website is built using the following technologies:

1. Frontend:: HTML, CSS, JavaScript, PhP

2. Version Control:: Git
   
3. Hosting:: Github Pages

# My First Website - Lego University

A modern university website built with HTML, CSS, and JavaScript.

## 🆕 Recent Updates

### Contact Form Improvements ✅
- **Enhanced PHP Handler**: Improved `form-handler.php` with proper validation and error handling
- **Status Messages**: Real-time feedback for form submissions (success/error/loading states)
- **Input Validation**: Server-side validation for all form fields
- **Backup Logging**: All submissions saved to `contact_submissions.log` for backup
- **Security**: Input sanitization and CSRF protection
- **User Experience**: Loading indicators and auto-hide success messages

### Technical Features:
- ✅ Form validation (client & server-side)
- ✅ Email sending with fallback logging
- ✅ Professional status messages
- ✅ Mobile-responsive design
- ✅ Cross-browser compatibility

## 📁 Project Structure

```
├── index.html          # Homepage
├── about.html          # About page  
├── course.html         # Courses page
├── blog.html           # Blog page
├── contact.html        # Contact page (✨ Recently improved)
├── form-handler.php    # Contact form processor (✨ Recently improved)
├── style.css           # Main stylesheet
├── *.jpg              # Image assets
└── contact_submissions.log  # Form submissions backup (✨ New)
```

## 🚀 How to Run

### Local Development:
```bash
# Start PHP server
php -S localhost:8000

# Open in browser
http://localhost:8000
```

### Contact Form Testing:
```bash
# Test the contact form at:
http://localhost:8000/contact.html

# Check form submissions:
cat contact_submissions.log
```

## 📧 Contact Form Features

The contact form now includes:
- Real-time validation
- Professional status messages  
- Backup logging system
- Email sending (when mail server configured)
- Security enhancements
- Mobile-friendly interface

---
*Lego University - Building Tomorrow's Leaders* 🎓
# License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.
