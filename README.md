# Student Management API - Software Engineering Assignment

![Laravel](https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)
![AWS](https://img.shields.io/badge/AWS-%23FF9900.svg?style=for-the-badge&logo=amazon-aws&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-005C84?style=for-the-badge&logo=mysql&logoColor=white)

A RESTful API for managing student information and Software Engineering curriculum.


#### Endpoint 1: `/api/students`
**Method:** GET  
**Description:** Returns a list of 10+ students with their enrolled programs  
[
  {
    "name": "Joyce Katambi",
    "program": "Software Engineering"
  },
  {
    "name": "Jane Masuke",
    "program": "Computer Science"
  },
  {
    "name": "Michael Johnson",
    "program": "Software Engineering"
  },
  {
    "name": "Emily Williams",
    "program": "Information Technology"
  },
  {
    "name": "David Brown",
    "program": "Software Engineering"
  },
  {
    "name": "Sarah Davis",
    "program": "Computer Science"
  },
  {
    "name": "Robert Miller",
    "program": "Information Systems"
  },
  {
    "name": "Jennifer Wilson",
    "program": "Software Engineering"
  },
  {
    "name": "Thomas Moore",
    "program": "Computer Science"
  },
  ....
###Endpoint 2: /api/subjects
**Method: **GET
Description: Returns Software Engineering curriculum by academic year
{
  "1": [
    {
      "name": "Introduction to Programming",
      "year": "1"
    },
    {
      "name": "Discrete Mathematics",
      "year": "1"
    },
    {
      "name": "Computer Fundamentals",
      "year": "1"
    },
    {
      "name": "Calculus for Computing",
      "year": "1"
    },
    {
      "name": "Communication Skills",
      "year": "1"
    },
    {
      "name": "Development Perspectives ",
      "year": "1"
    },
    {
      "name": "Discrete Mathematics for ICT",
      "year": "1"
    },
...
 Deployment
AWS EC2 Setup
1 Launch Ubuntu 22.04 LTS instance (t2.micro)

2 Connect via SSH and run:
# Update system
sudo apt update && sudo apt upgrade -y

# Install dependencies
sudo apt install php8.2 php8.2-mbstring php8.2-xml php8.2-sqlite3 composer nginx

# Clone repository
git clone https://github.com/mengwa-udom2025/student-api.git
cd student-api

# Configure environment
cp .env.example .env
php artisan key:generate

# Setup database
touch database/database.sqlite
php artisan migrate --seed

# Configure Nginx
sudo cp deployment/nginx.conf /etc/nginx/sites-available/student-api
sudo ln -s /etc/nginx/sites-available/student-api /etc/nginx/sites-enabled
sudo systemctl restart nginx

