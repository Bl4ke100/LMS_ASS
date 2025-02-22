<!DOCTYPE html>
<html>
<head>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
    }

    body {
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    }

    .login-container {
      background: rgba(255, 255, 255, 0.95);
      padding: 2rem;
      border-radius: 1rem;
      box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1);
      width: 100%;
      max-width: 400px;
      margin: 1rem;
    }

    .login-header {
      text-align: center;
      margin-bottom: 2rem;
    }

    .login-header h1 {
      color: #1a202c;
      font-size: 1.875rem;
      font-weight: 700;
      margin-bottom: 0.5rem;
    }

    .login-header p {
      color: #4a5568;
      font-size: 0.875rem;
    }

    .form-group {
      margin-bottom: 1.5rem;
    }

    .form-group label {
      display: block;
      color: #4a5568;
      margin-bottom: 0.5rem;
      font-size: 0.875rem;
      font-weight: 500;
    }

    .form-group input {
      width: 100%;
      padding: 0.75rem 1rem;
      border: 1px solid #e2e8f0;
      border-radius: 0.5rem;
      font-size: 1rem;
      transition: all 0.3s ease;
    }

    .form-group input:focus {
      outline: none;
      border-color: #667eea;
      box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
    }

    .remember-forgot {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 1.5rem;
    }

    .remember-me {
      display: flex;
      align-items: center;
      gap: 0.5rem;
    }

    .remember-me input[type="checkbox"] {
      width: 1rem;
      height: 1rem;
    }

    .forgot-password {
      color: #667eea;
      text-decoration: none;
      font-size: 0.875rem;
      transition: color 0.3s ease;
    }

    .forgot-password:hover {
      color: #5a67d8;
    }

    .login-button {
      width: 100%;
      padding: 0.75rem;
      background: #667eea;
      color: white;
      border: none;
      border-radius: 0.5rem;
      font-size: 1rem;
      font-weight: 500;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .login-button:hover {
      background: #5a67d8;
    }

    .signup-link {
      text-align: center;
      margin-top: 1.5rem;
      color: #4a5568;
      font-size: 0.875rem;
    }

    .signup-link a {
      color: #667eea;
      text-decoration: none;
      font-weight: 500;
      transition: color 0.3s ease;
    }

    .signup-link a:hover {
      color: #5a67d8;
    }

    @media (max-width: 480px) {
      .login-container {
        margin: 1rem;
        padding: 1.5rem;
      }
    }
  </style>
  <title>Student Login</title>
</head>
<body>
  <div class="login-container">
    <div class="login-header">
      <h1>Welcome Back</h1>
      <p>Please enter your credentials to login</p>
    </div>
    
    <form>
      <div class="form-group">
        <label for="nic">NIC</label>
        <input type="nic" id="nic" placeholder="Enter your NIC" required>
      </div>
      
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" id="password" placeholder="Enter your password" required>
      </div>
      
      <button type="submit" class="login-button" onclick="handleSubmit(event)">Log In</button>
    </form>
    
    <div class="signup-link">
      Don't have an account? <a href="StudentRegistration.php">Sign up</a>
    </div>
  </div>

  <script>
    function handleSubmit(event) {
        event.preventDefault(); // Prevent default form submission
        
        // Add any form validation here if needed
        
        // Redirect to student.html
        window.location.href = 'student.html';
    }
</script>
</body>
</html>