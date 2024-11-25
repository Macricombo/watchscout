# WatchScout

A PHP project running with Docker Compose, Apache, and MySQL.

## Project Structure
```
watchscout/
├── docker/
│   └── php/
│       └── Dockerfile
├── src/
│   └── index.php
└── docker-compose.yml
```

## Setup Instructions

1. Make sure you have Docker and Docker Compose installed on your system.
2. Clone this repository
3. Run the following command in the project root:
   ```bash
   docker-compose up -d
   ```
4. Access the application at: http://localhost:8080

## Database Configuration
- Database Name: watchscout
- Username: watchscout
- Password: watchscout
- Root Password: rootpassword
- Port: 3306

## Services
- PHP/Apache server running on port 8080
- MySQL 8.0 running on port 3306
