# Personal Project: API

## Description
This repository contains the backend API for an educational project aimed at building a robust API using Laravel. The API is designed to be utilized with a separate frontend project.

## Endpoints

### User Endpoints

| Method | Endpoint           | Description               |
|--------|--------------------|---------------------------|
| GET    | /users             | Retrieve all users.       |
| POST   | /users             | Create a new user.        |
| GET    | /users/{user}      | Retrieve a specific user. |
| PUT    | /users/{user}      | Update a specific user.   |
| DELETE | /users/{user}      | Delete a specific user.   |

### Website Endpoints

| Method | Endpoint           | Description                   |
|--------|--------------------|-------------------------------|
| GET    | /websites          | Retrieve all websites.        |
| POST   | /websites          | Create a new website.         |
| GET    | /websites/{website}| Retrieve a specific website.  |
| PUT    | /websites/{website}| Update a specific website.    |
| DELETE | /websites/{website}| Delete a specific website.    |

### Task Endpoints

| Method | Endpoint        | Description               |
|--------|-----------------|---------------------------|
| GET    | /tasks          | Retrieve all tasks.       |
| POST   | /tasks          | Create a new task.        |
| GET    | /tasks/{task}   | Retrieve a specific task. |
| PUT    | /tasks/{task}   | Update a specific task.   |
| DELETE | /tasks/{task}   | Delete a specific task.   |

### Authentication-related Endpoints

| Method | Endpoint    | Description                      |
|--------|-------------|----------------------------------|
| POST   | /register   | Register a new user.             |
| POST   | /login      | Log in an existing user.         |
| POST   | /logout     | Log out the currently authenticated user. |
| POST   | /refresh    | Refresh the authentication token.|


Test release 0.0.1