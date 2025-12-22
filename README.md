# 🏸 Blois Badminton Club

[![Symfony](https://img.shields.io/badge/Symfony-7.4-000000?style=flat&logo=symfony&logoColor=white)](https://symfony.com)
[![PHP](https://img.shields.io/badge/PHP-8.1%2B-777BB4?style=flat&logo=php&logoColor=white)](https://php.net)
[![MySQL](https://img.shields.io/badge/MySQL-8.0-4479A1?style=flat&logo=mysql&logoColor=white)](https://www.mysql.com)
[![MongoDB](https://img.shields.io/badge/MongoDB-6.0-47A248?style=flat&logo=mongodb&logoColor=white)](https://www.mongodb.com)
[![License](https://img.shields.io/badge/License-MIT-green.svg?style=flat)](LICENSE)

> A comprehensive web application for managing a badminton club, developed as a final graduation project. This platform enables members to register, book training sessions, purchase equipment, and stay updated with club news.

---

## 📋 Table of Contents

- [About the Project](#-about-the-project)
- [Features](#-features)
- [Technologies Used](#️-technologies-used)
- [Prerequisites](#-prerequisites)
- [Installation](#-installation)
- [Database Configuration](#️-database-configuration)
- [User Roles](#-user-roles)
- [Project Structure](#-project-structure)
- [Professional Skills Validated](#-professional-skills-validated)
- [Roadmap](#️-roadmap)
- [License](#-license)
- [Contact](#-contact)

---

## 🎯 About the Project

**Blois Badminton Club** is a full-stack web application built with **Symfony 8**, combining both SQL and NoSQL databases. The project demonstrates modern web development practices including user authentication, role-based access control, e-commerce functionality, and social media integration.

This project is developed as part of my web development training program and aims to validate **8 professional competencies** required for the **Web and Mobile Web Application Developer** certification.

---

## ✨ Features

### 🌐 For All Users

- **Multilingual Support**: Switch between French and English
- **Dark Mode**: Toggle between light and dark themes
- **Responsive Design**: Optimized for desktop and mobile devices
- **Training Schedules**: View available time slots and pricing
- **News Feed**: Real-time updates from social media (Facebook/Instagram integration)
- **Contact Form**: Get in touch with the club
- **FAQ Section**: Accordion-style frequently asked questions
- **Partner Showcase**: View sponsors with clickable redirects
- **Junior Badminton**: Dedicated page for children's programs

### 👤 For Visitors (Non-authenticated)

- View club information and schedules
- Register for club membership (redirect to FFBAD website)
- Request a trial session via contact form

### 🏅 For Members (Authenticated)

- **All Visitor privileges** +
- Access to the club shop
- Purchase shuttlecocks and t-shirts
- Online payment or pre-order for in-person payment
- View training schedules

### 👨‍🏫 For Trainers

- **All Member privileges** +
- Access to training session schedules
- View registered participants for each session
- Send emails to participants

### 👑 For Administrators

- **All previous role privileges** +
- **Member Management**: Register, modify, and delete members
- **Training Session Management**: Create and manage sessions with capacity limits
- **Registration Management**: Enroll members or external players to sessions
- **Inventory Management**: Add, modify, or delete products
- **News Management**: Create, edit, and delete news posts
- **Stock Management**: Track product availability
- **Full CRUD operations** on all entities

---

## 🛠️ Technologies Used

### Backend
- ![Symfony](https://img.shields.io/badge/Symfony-8.0-black?style=flat-square&logo=symfony) **Symfony 8.0** - PHP framework
- ![MySQL](https://img.shields.io/badge/MySQL-8.0-blue?style=flat-square&logo=mysql) **MySQL** - Relational database (via MAMP)
- ![MongoDB](https://img.shields.io/badge/MongoDB-6.0-green?style=flat-square&logo=mongodb) **MongoDB** - NoSQL database for news/posts
- **Doctrine ORM** - Database abstraction layer

### Frontend
- **HTML5** - Markup language
- **CSS3** - Styling
- **Vanilla JavaScript** - Client-side interactivity
- **No framework** - Pure JavaScript implementation

### Payment Integration
- Online payment gateway for credit card transactions *(implementation in progress)*

### Additional Tools
- **Composer** - PHP dependency management
- **MAMP** - Local development environment
- **Git/GitHub** - Version control

---

## 📦 Prerequisites

Before you begin, ensure you have the following installed:

| Requirement | Version |
|------------|---------|
| **PHP** | 8.1 or higher |
| **Composer** | Latest version |
| **MySQL** | 8.0 or higher (via MAMP or standalone) |
| **MongoDB** | 6.0 or higher |
| **Node.js & NPM** | For potential frontend dependencies |
| **MAMP/WAMP/XAMPP** | Local development server *(optional but recommended)* |

---

## 🚀 Installation

### 1️⃣ Clone the repository

```bash
git clone https://github.com/lauraLGWeb/blois-badminton-club.git
cd blois-badminton-club
```

### 2️⃣ Install PHP dependencies

```bash
composer install
```

### 3️⃣ Configure environment variables

Copy the `.env` file and configure your database credentials:

```bash
cp .env .env.local
```

Edit `.env.local` and update the following variables:

```env
# MySQL Configuration
DATABASE_URL="mysql://db_user:db_password@127.0.0.1:3306/blois_badminton?serverVersion=8.0"

# MongoDB Configuration
MONGODB_URL="mongodb://localhost:27017"
MONGODB_DB="blois_badminton_news"

# Mailer Configuration (for contact forms)
MAILER_DSN=smtp://localhost

# Payment Gateway Configuration (to be configured)
PAYMENT_API_KEY=your_payment_api_key
```

**💡 Tip for MAMP users**: The MySQL port is often `8889` instead of `3306`. Check your MAMP preferences!

### 4️⃣ Create the databases

```bash
# Create MySQL database
php bin/console doctrine:database:create

# Run migrations
php bin/console doctrine:migrations:migrate

# Load fixtures (optional - for test data)
php bin/console doctrine:fixtures:load
```

⚠️ **Important**: Ensure your MongoDB service is running before proceeding.

### 5️⃣ Start the development server

**Using Symfony CLI** *(recommended)*:
```bash
symfony server:start
```

**Or using PHP's built-in server**:
```bash
php -S localhost:8000 -t public/
```

✅ The application should now be accessible at `http://localhost:8000`

---

## 🗄️ Database Configuration

### 💾 SQL Database (MySQL)

The relational database handles:

- User accounts and authentication
- Member profiles and roles
- Training sessions and registrations
- Products and inventory
- Orders and transactions
- Partners and sponsors

### 📊 NoSQL Database (MongoDB)

The NoSQL database handles:

- News posts and announcements
- Social media feed integration
- Real-time event updates

---

## 👥 User Roles

The application implements **four distinct user roles** with specific permissions:

| Role | Description | Access Level |
|------|-------------|--------------|
| **👤 Visitor** | Non-authenticated user | View public pages, contact form, registration links |
| **🏅 Member** | Authenticated club member | Visitor access + shop access and training schedules |
| **👨‍🏫 Trainer** | Club trainer | Member access + session schedules and participant lists with email contact |
| **👑 Admin** | Administrator | Full access - manage users, sessions, products, registrations, and news |

### 📊 Role Hierarchy

```
        👑 Admin
           ↓
      👨‍🏫 Trainer
           ↓
       🏅 Member
           ↓
       👤 Visitor
```

---

## 📁 Project Structure

```
blois-badminton-club/
├── 📂 config/              # Configuration files
├── 📂 public/              # Public assets (CSS, JS, images)
│   ├── 📂 css/
│   ├── 📂 js/
│   └── 📂 images/
├── 📂 src/
│   ├── 📂 Controller/      # Symfony controllers
│   ├── 📂 Entity/          # Doctrine entities
│   ├── 📂 Form/            # Form types
│   ├── 📂 Repository/      # Database repositories
│   └── 📂 Service/         # Business logic services
├── 📂 templates/           # Twig templates
├── 📂 migrations/          # Database migrations
├── 📂 var/                 # Cache and logs
├── 📂 vendor/              # Composer dependencies
├── 📄 .env                 # Environment variables template
├── 📄 .env.local           # Local environment variables (not committed)
├── 📄 composer.json        # PHP dependencies
└── 📄 README.md            # This file
```

---

## 🎓 Professional Skills Validated

This project validates the following **8 professional competencies (UC)** required for the **Web and Mobile Web Application Developer** certification:

### 📱 Activity Type 1: Develop the front-end of a secure web or mobile web application

| CP | Competency |
|----|------------|
| **CP1** | Install and configure the work environment according to the web or mobile web project |
| **CP2** | Create mockups for web or mobile web user interfaces |
| **CP3** | Develop static web or mobile web user interfaces |
| **CP4** | Develop the dynamic part of web or mobile web user interfaces |

### ⚙️ Activity Type 2: Develop the back-end of a secure web or mobile web application

| CP | Competency |
|----|------------|
| **CP5** | Set up a relational database (MySQL) |
| **CP6** | Develop data access components for SQL and NoSQL (MySQL + MongoDB) |
| **CP7** | Develop server-side business components (Symfony services) |
| **CP8** | Document the deployment of a dynamic web or mobile web application |

---

## 🗓️ Roadmap

### ✅ Phase 1: Design & Planning (Completed)

- [x] Create MCD (Conceptual Data Model)
- [x] Create MLD (Logical Data Model)
- [x] Create MPD (Physical Data Model)
- [x] Homepage wireframe and zoning
- [x] Second page wireframe and zoning

### 🚧 Phase 2: Development (In Progress)

- [ ] Database setup (SQL + NoSQL)
- [ ] User authentication system
- [ ] Role-based access control
- [ ] Training session management
- [ ] Shop and product catalog
- [ ] Payment integration
- [ ] News feed with MongoDB
- [ ] Multilingual support (FR/EN)
- [ ] Dark mode implementation
- [ ] Contact form and FAQ
- [ ] Social media integration

### 🎯 Phase 3: Testing & Deployment

- [ ] Unit tests
- [ ] Integration tests
- [ ] User acceptance testing
- [ ] Documentation completion
- [ ] Deployment preparation

**🎯 Target completion**: End of January 2025  
**📅 Final submission**: End of February 2025

---

## 📝 License

This project is licensed under the **MIT License** - see the [LICENSE](LICENSE) file for details.

---

## 📧 Contact

**Project developed by**: Laura Le Gall

- 🐙 **GitHub**: [@lauraLGWeb](https://github.com/lauraLGWeb)
- 💼 **LinkedIn**: [Laura Le Gall - Web Developer](https://www.linkedin.com/in/laura-le-gall-web-dev/)

**🎓 Training Program**: Web and Mobile Web Application Developer  
**🏫 Institution**: École Européenne du Numérique  
**📚 Project Type**: Final Graduation Project

---

<div align="center">

*This project is part of a professional certification training program and demonstrates competencies in full-stack web development, database management, and secure application architecture.*

**Made with ❤️ and Symfony**

</div>
