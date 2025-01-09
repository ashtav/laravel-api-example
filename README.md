<p align="center">
  <a href="https://laravel.com" target="_blank">
    <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo">
  </a>
</p>

<p align="center">
  <a href="https://github.com/laravel/framework/actions">
    <img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status">
  </a>
  <a href="https://packagist.org/packages/laravel/framework">
    <img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads">
  </a>
  <a href="https://packagist.org/packages/laravel/framework">
    <img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version">
  </a>
  <a href="https://packagist.org/packages/laravel/framework">
    <img src="https://img.shields.io/packagist/l/laravel/framework" alt="License">
  </a>
</p>

## About This App

This is a simple Laravel API example application that provides basic functionality for user authentication and article management. The app demonstrates the following features:

- **Authentication**: Login and logout functionality.
- **Article CRUD**: Create, read, update, and delete articles.

This project is designed as an educational example to understand the basics of building APIs using Laravel.

---

## API Endpoints

### Authentication
1. **Login**
   - Endpoint: `POST /api/login`
   - Description: Authenticates a user and returns a token.

2. **Logout**
   - Endpoint: `POST /api/logout`
   - Description: Logs out the authenticated user.

---

### Articles
1. **List Articles**
   - Endpoint: `GET /api/articles`
   - Description: Retrieves all articles.

2. **Create Article**
   - Endpoint: `POST /api/articles`
   - Description: Creates a new article.

3. **View Article**
   - Endpoint: `GET /api/articles/{id}`
   - Description: Retrieves a single article by its ID.

4. **Update Article**
   - Endpoint: `PUT /api/articles/{id}`
   - Description: Updates an article.

5. **Delete Article**
   - Endpoint: `DELETE /api/articles/{id}`
   - Description: Deletes an article.

