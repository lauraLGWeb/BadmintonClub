Blois Badminton Club

A comprehensive web application for managing a badminton club, developed as a final graduation project.
This platform allows members to register, book training sessions, purchase equipment, and stay updated with club news.

📋 Table of Contents
* About the Project
* Features
* Technologies Used
* Prerequisites
* Installation
* Database Configuration
* User Roles
* Project Structure
* Professional Skills Validated
* Roadmap
* License
* Contact
  
🎯 About the Project
Blois Badminton Club is a full-stack web application built with Symfony 8, combining both SQL and NoSQL databases.
The project demonstrates modern web development practices including user authentication, role-based access control, e-commerce functionality, and social media integration.

This project is developed as part of my web development training program and aims to validate 8 professional competencies required for the Web and Mobile Web Application Developer certification.

✨ Features

- For All Users
Multilingual support: Switch between French and English
Dark mode: Toggle between light and dark themes
Responsive design: Optimized for desktop and mobile devices
Training schedules
News feed: Real-time updates from social media (Facebook or Instagram integration)
Contact form: Get in touch with the club
FAQ section: Accordion-style about frequently asked questions
Partner showcase: View sponsors with clickable redirects
Junior badminton section: Dedicated page for children's programs

- For Visitors (Non-authenticated)
View club information and schedules
Register for club membership (redirect to FFBAD website)
Request a trial session via contact form

- For Members (Authenticated)
Access to the club shop in order to urchase shuttlecocks and t-shirts
Online payment or pre-order for in-person payment

- For Coaches
All member privileges
Access to training session schedules
View registered participants for each session to send them email

- For Administrators
All previous role privileges
Member management: Register, modify, and delete members
Training session management: Create and manage sessions with capacity limits
Registration management: Enroll members or external players to sessions
Inventory management: Add, modify, or delete products or actuality
Stock management: Track product availability
Full CRUD operations on all entities

🛠️ Technologies Used
- Backend
Symfony 8.0 - PHP framework
MySQL - Relational database (via MAMP)
MongoDB - NoSQL database for news/posts
Doctrine ORM - Database abstraction layer

- Frontend
HTML5 - Markup language
CSS3 - Styling
Vanilla JavaScript - Client-side interactivity
No framework - Pure JavaScript implementation


Payment Integration
Online payment gateway for credit card transactions (implementation in progress)
Additional Tools
Composer - PHP dependency management
MAMP - Local development environment
Git/GitHub - Version control
📦 Prerequisites
Before you begin, ensure you have the following installed:

PHP: Version 8.1 or higher
Composer: Latest version
MySQL: Version 8.0 or higher (via MAMP or standalone)
MongoDB: Version 6.0 or higher
Node.js & NPM: For potential frontend dependencies
MAMP/WAMP/XAMPP: Local development server (optional but recommended)

🚀 Installation
1️⃣ Clone the repository
bashgit clone https://github.com/lauraLGWeb/blois-badminton-club.git
cd blois-badminton-club
2️⃣ Install PHP dependencies
bashcomposer install
3️⃣ Configure environment variables
Copy the .env file and configure your database credentials:
bashcp .env .env.local
Edit .env.local and update the following variables:
env# MySQL Configuration
DATABASE_URL="mysql://db_user:db_password@127.0.0.1:3306/blois_badminton?serverVersion=8.0"

# MongoDB Configuration
MONGODB_URL="mongodb://localhost:27017"
MONGODB_DB="blois_badminton_news"

# Mailer Configuration (for contact forms)
MAILER_DSN=smtp://localhost

# Payment Gateway Configuration (to be configured)
PAYMENT_API_KEY=your_payment_api_key
💡 Tip for MAMP users: The MySQL port is often 8889 instead of 3306. Check your MAMP preferences!
4️⃣ Create the databases
bash# Create MySQL database
php bin/console doctrine:database:create

# Run migrations
php bin/console doctrine:migrations:migrate

# Load fixtures (optional - for test data)
php bin/console doctrine:fixtures:load
⚠️ Important: Ensure your MongoDB service is running before proceeding.
5️⃣ Start the development server
Using Symfony CLI (recommended):
bashsymfony server:start
Or using PHP's built-in server:
bashphp -S localhost:8000 -t public/
✅ The application should now be accessible at http://localhost:8000


🗄️ Database Configuration
💾 SQL Database (MySQL)
The relational database handles:

User accounts and authentication
Member profiles and roles
Training sessions and registrations
Products and inventory
Orders and transactions
Partners and sponsors

📊 NoSQL Database (MongoDB)
The NoSQL database handles:

News posts and announcements
Social media feed integration
Real-time event updates


👥 User Roles
The application implements four distinct user roles with specific permissions:
RoleDescriptionAccess Level👤 VisitorNon-authenticated userView public pages, contact form, registration links🏅 MemberAuthenticated club memberVisitor access + shop access and training schedules👨‍🏫 TrainerClub trainerMember access + session schedules and participant lists with email contact👑 AdminAdministratorFull access - manage users, sessions, products, registrations, and news
📊 Role Hierarchy
        👑 Admin
           ↓
      👨‍🏫 Trainer
           ↓
       🏅 Member
           ↓
       👤 Visitor

🎓 Professional Skills Validated
This project validates the following 8 professional competencies (UC) required for the Web and Mobile Web Application Developer certification:
📱 Activity Type 1: Develop the front-end of a secure web or mobile web application
CPCompetencyCP1Install and configure the work environment according to the web or mobile web projectCP2Create mockups for web or mobile web user interfacesCP3Develop static web or mobile web user interfacesCP4Develop the dynamic part of web or mobile web user interfaces
⚙️ Activity Type 2: Develop the back-end of a secure web or mobile web application
CPCompetencyCP5Set up a relational database (MySQL)CP6Develop data access components for SQL and NoSQL (MySQL + MongoDB)CP7Develop server-side business components (Symfony services)CP8Document the deployment of a dynamic web or mobile web application

🗓️ Roadmap
Phase 1: Design & Planning ✅
 Create MCD Diagram
 Create MLD Diagram
 Create MPD Diagram
 Homepage and another page wireframe and zoning
 
Phase 2: Development (In Progress)
 Database setup (SQL + NoSQL)
 User authentication system
 Role-based access control
 Training session management
 Shop and product catalog
 Payment integration
 News feed with MongoDB
 Multilingual support (FR/EN)
 Dark mode implementation
 Contact form and FAQ
 Social media integration
 
Phase 3: Testing & Deployment
 Unit tests
 Integration tests
 User acceptance testing
 Documentation completion
 Deployment preparation
 
🎯 Target completion: End of January 2026
📅 Final submission: End of February 2026

📝 License
This project is licensed under the MIT License - see the LICENSE file for details.

📧 Contact
Project developed by: Laura Le Gall

🐙 GitHub: @lauraLGWeb
💼 LinkedIn: Laura Le Gall - Web Developer

🎓 Training Program: Web and Mobile Web Application Developer
🏫 Institution: École Européenne du Numérique
📚 Project Type: Final Graduation Project

<div align="center">
This project is part of a professional certification training program and demonstrates competencies in full-stack web development, database management, and secure application architecture.

Made with ❤️ and Symfony

</div>


