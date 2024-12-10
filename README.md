# Project Ideas

Basic project ideas to practice and improve PHP skills.

---

## 1. PHP Tic-Tac-Toe

### Features:
- **Game Board Representation:** Use a 3x3 grid stored in a two-dimensional array to represent the board state.
- **Rendering the Board:** 
  - Create a function to dynamically display the board.
  - Use HTML and CSS for styling, and PHP to generate the board.
- **User Input:** 
  - Implement input handling using HTML forms with POST or GET methods to capture player moves.
- **Game Logic:** 
  - Write functions for:
    - Checking for a win.
    - Detecting a tie.
    - Validating user input.
- **Game Loop:** 
  - Alternate between players (X and O).
  - Update the board and check game status after each turn.
- **Game End:** 
  - Display the winner or indicate a tie.
  - Provide an option to restart the game.

---

## 2. Email Contact Form

### Features:
- **HTML Form:**
  - Collect input fields for:
    - Name
    - Email
    - Subject
    - Message
- **PHP Script:**
  - Filter, validate, and sanitize user input.
  - Use the `mail()` function to send the email.
- **Error Handling:**
  - Ensure server-side validation.
  - Display error messages for invalid input.
- **User Experience:** 
  - Provide a seamless interaction flow by managing success/error messages.

---

## 3. User Authentication System

### Features:
1. **Database Setup:**
   - Create a database table with columns for:
     - Username
     - Email address
     - Hashed password
   - Set up a connection using a PHP database extension (e.g., MySQLi or PDO).

2. **Registration:**
   - **Form:** HTML form to collect:
     - Username
     - Email address
     - Password
   - **Script:** PHP script to:
     - Validate and sanitize input.
     - Hash passwords using `password_hash()`.
     - Insert user data into the database.
     - Check for duplicate usernames or emails.

3. **Login:**
   - **Form:** HTML form to capture:
     - Username or email.
     - Password.
   - **Script:** PHP script to:
     - Validate and sanitize input.
     - Query the database for the user.
     - Verify the password using `password_verify()`.
     - Create a session to manage user state.

4. **Logout:**
   - Destroy the session and redirect the user to the login page.

5. **Additional Considerations:**
   - Implement error messages for invalid login attempts.
   - Use secure session management techniques to protect user data.

---

## Reference

- [Zend's PHP Beginner Projects](https://www.zend.com/blog/php-beginner-projects).
