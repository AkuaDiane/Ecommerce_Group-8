# Ecommerce (Lens & Frame Studio) - Project Documentation

## 1. Project Overview
**Lens & Frame Studio** is a premium, lightweight ecommerce web application designed for professional photographers and videographers. The platform allows users to browse high-quality camera gear, register for an account, and manage their profile through a dedicated, secure dashboard.

## 2. Technology Stack
- **Frontend**: HTML5, Vanilla CSS3 (Custom Design System), JavaScript
- **Backend**: PHP (Vanilla)
- **Data Persistence**: Session-based storage (Prototype Implementation)
- **Environment**: XAMPP (Local development)

## 3. Core Features

### 3.1. User Authentication
- **Registration**: Allows users to create an account by providing their name, email, and password, alongside a profile image upload.
- **Login**: Provides secure access to the dashboard by validating credentials against active session data.
- **Session Management**: Implements `session_start()` to maintain user state and security across different pages.

### 3.2. Product Browsing
- Features a clean, professional grid-based layout.
- Each product card includes high-resolution imagery, detailed descriptions, and pricing in GHS (₵).

### 3.3. User Dashboard
- A personalized area displaying the user's uploaded profile picture and account information.
- Includes a **Group Members** directory, listing the development team's IDs and names.

## 4. Challenges Encountered

### 4.1. Team Collaboration
- **Participation**: A significant challenge was the lack of active participation from the majority of the group members, requiring a more concentrated effort to complete the project features.

### 4.2. Session Management
- **Complexity**: Implementing a robust session-based authentication system from scratch using Vanilla PHP was technically demanding. Ensuring data was correctly retrieved, stored, and protected across page transitions required careful logic and testing.

### 4.3. File Uploads & Validation
- **Quality Control**: Developing a secure and user-friendly file upload system presented challenges. It was critical to implement strict validation to ensure users uploaded the correct image formats and adhered to file size limits to maintain system performance and security.

---
*Documented by Lens & Frame Studio Team*# Ecommerce_Group-8
