<div align="center">
  <em> Powered by </em>
  <div align="center">
    <div align="center">
      <img alt="Laravel" src="https://img.shields.io/badge/Laravel-FF2D20.svg?&style=flat&logo=Laravel&logoColor=white" />
      <img alt="PHP" src="https://img.shields.io/badge/PHP-777BB4.svg?&style=flat&logo=PHP&logoColor=white" />
      <img alt="MySQL" src="https://img.shields.io/badge/MySQL-4479A1.svg?&style=flat&logo=MySQL&logoColor=white" />
      <img alt="Laravel Sanctum" src="https://img.shields.io/badge/Laravel%20Sanctum-FF2D20.svg?&style=flat&logo=Laravel&logoColor=white" />
      <img alt="REST API" src="https://img.shields.io/badge/REST-API-009688.svg?&style=flat" />
    </div>
  </div>
</div>

## About the Project

This is a Pet Veterinary Management REST API built with Laravel.
The project is designed as a backend system for managing users, pets, appointments, and veterinary operations, focusing on clean API structure, validation, and secure authentication.

The API is intended for learning, portfolio showcase, and as a foundation for a full veterinary clinic system.

## Features
- Uses REST API architecture
- Request validation with proper JSON error responses
- Authentication using Laravel Sanctum
- Role-based access (Admin, Staff, Client)
- Clean database relationships and constraints
- Ready for frontend consumption (React, Vue, mobile apps)

## Authentication
- Authentication is handled using Laravel Sanctum.
- Token-based authentication
- Protected routes using auth:sanctum
- Role-based authorization for sensitive endpoints

## Request Validation
- All incoming requests are validated using Laravel’s built-in validation system.

Invalid requests return structured JSON responses such as:

{
  "message": "The given data was invalid.",
  "errors": {
    "email": ["The email field is required."]
  }
}

This makes the API frontend-friendly and predictable.

## Database
- Uses MySQL (recommended for production)
- Foreign key constraints for data integrity
- Cascading deletes to prevent orphan records
- Migration-based schema management


## Project Goals
- Demonstrate proper REST API design
- Show secure authentication using Sanctum
- Practice database relationships and constraints
- Serve as a backend for a real-world veterinary system


