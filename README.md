ASSIGMENT 2:BASH SCRIPT FOR SERVER MANAGEMENT
The different between backup schemes and explain how each is executed, including the
advantages and disadvantages of each as follows
A) Full Backup
•	Backs up everything (entire project and database).
•	Advantage: Easy to restore.
•	Disadvantage: Takes up a lot of space and time.

B) Incremental Backup
•   Backs up only what changed since the last backup.
•	Advantage: Saves space and time.
•	Disadvantage: Restoration takes longer (requires the full and all incremental backups).

C) Differential Backup
•	Backs up all changes since the last full backup.
•	Advantage: Faster restore than incremental.
•	Disadvantage: Larger than incremental, smaller than full.

Description of Scripts
1. health_check.sh
•	Purpose: Monitor system resources and API health.
•	What it does:
o	Checks CPU, memory, and disk usage.
o	Ensures the Apache server is running.
o	Verifies /students and /subjects API endpoints return HTTP 200.
o	Logs status to /var/log/server_health.log.
o	Logs warnings if any issues are found (e.g., high disk usage or API downtime).

2. backup_api.sh
•	Purpose: Create daily backups of the Laravel API and database.
•	What it does:
o	Archives the project directory into /home/ubuntu/backups/.
o	Dumps the database (MySQL/PostgreSQL) into .sql format.
o	Deletes backups older than 7 days to conserve space.
o	Logs to /var/log/backup.log.

3. update_server.sh
•	Purpose: Automatically update the server and Laravel project.
•	What it does:
o	Updates Ubuntu packages.
o	Pulls the latest code from GitHub.
o	Restarts the Apache web server.
o	Logs success or failure in /var/log/update.log.



ASSIGMENT 1
Student and Subject API
This project is a RESTful API built with Laravel that provides a simple system for managing
students and their associated subjects across four academic years: First Year, Second Year,
Third Year, and Fourth Year.
Project Overview
The main goal of this API is to serve as a backend system that can:
 Store and manage student records.
 Organize subjects offered each year.
 Retrieve subjects by year for easy filtering.
 Perform basic Create, Read, Update, and Delete (CRUD) operations on both students and
subjects.
Installation
Prerequisite
Computer has the following software
 PHP (7.4)
 Composer
 MySQL
 Laravel
Setup Instructions
1. Install dependencies:
composer install
2. Create the laravel project:
composer create-project laravel/laravel student-api
3. Set up database in .env:
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=
4. Run migrations:
php artisan migrate
5. Run the app:
php artisan serve
API Endpoints
Students
Method Endpoint Description
GET /api/students Get all students
POST /api/students Create new student
GET /api/students/{id} Get student by ID
PUT /api/students/{id} Update student
DELETE /api/students/{id} Delete student
Sample POST /api/students JSON
{
“name”: “Joyce Katambi”,
“program”: “Software Engineering”
}
…..
Subjects
Method Endpoint Description
GET /api/subjects Get all subjects
POST /api/subjects Create new subject
GET /api/subjects/{id} Get subject by ID
PUT /api/subjects/{id} Update subject
DELETE /api/subjects/{id} Delete subject
Sample POST /api/subjects JSON
{
"name": "cloud Computing",
"year": "4"
}
……..
GitHub Integration
This project is version-controlled and hosted On GitHub
Cloning the Project
To get a copy of this project locally:
git clone https://github.com/Mengwa2025/student-api.git
cd student-api
Using Git for Version Control
You can track your changes and push updates using standard Git commands:
git status # Check changes
git add . # Stage changes
git commit -m "commit" # Commit with a message
git push origin main # Push to GitHub (main branch)
AWS Deployment
This Laravel API is deployed to an AWS EC2 instance
Requirements
 EC2 instance
 Ubuntu
 Open ports 80 (HTTP) and 22 (SSH)
 Apache installed
 PHP, Composer, MySQL installed
Laravel Setup on AWS
SSH into your EC2 instance:
ssh -i "your-key.pem" ubuntu@your-ec2-public-ip
Install required packages (if not already):
sudo apt update
sudo apt install php php-mbstring php-xml php-bcmath php-curl php-mysql unzip curl git
mysql-server apache2 composer -y
Clone your GitHub project:
git clone https://github.com/yourusername/student-subject-api.git
cd student-subject-api
Set permissions:
sudo chown -R www-data:www-data .
chmod -R 775 storage bootstrap/cache
Configure .env and set up database:
o Update your .env with your AWS server DB credentials
o Run php artisan migrate
Serve your app with Apache or Laravel’s server:
php artisan serve --host=0.0.0.0 --port=8000

