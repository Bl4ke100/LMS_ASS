<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
        }

        .signup-link a:hover {
            color: #5a67d8;
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

        body {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            padding: 20px;
        }

        .registration-container {
            background: rgba(255, 255, 255, 0.95);
            padding: 2rem;
            border-radius: 1rem;
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 500px;
        }

        .registration-header {
            text-align: center;
            margin-bottom: 2rem;
        }

        .registration-header h1 {
            color: #1a202c;
            font-size: 1.875rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
        }

        .registration-header p {
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

        .form-group input,
        .form-group select {
            width: 100%;
            padding: 0.75rem 1rem;
            border: 1px solid #e2e8f0;
            border-radius: 0.5rem;
            font-size: 1rem;
            transition: all 0.3s ease;
        }

        .form-group input:focus,
        .form-group select:focus {
            outline: none;
            border-color: #667eea;
            box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
        }

        .submit-button {
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
            margin-top: 1rem;
        }

        .submit-button:hover {
            background: #5a67d8;
        }

        @media (max-width: 480px) {
            .registration-container {
                padding: 1.5rem;
            }
        }
    </style>
</head>
<body>
    <div class="registration-container">
        <div class="registration-header">
            <h1>Student Registration</h1>
            <p>Please fill in your details to register as a student</p>
        </div>

        <form>
            <div class="form-group">
                <label for="nic">NIC Number</label>
                <input type="text" id="nic" placeholder="Enter your NIC number" required>
            </div>

            <div class="form-group">
                <label for="name">Full Name</label>
                <input type="text" id="name" placeholder="Enter your full name" required>
            </div>

            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" id="address" placeholder="Enter your full address" required>
            </div>

            <div class="form-group">
                <label for="tel">Telephone Number</label>
                <input type="tel" id="tel" placeholder="Enter your telephone number" required>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" placeholder="Enter your password" required>
            </div>

            <div class="form-group">
                <label for="confirm-password">Confirm Password</label>
                <input type="password" id="confirm-password" placeholder="Confirm your password" required>
            </div>

            <div class="form-group">
                <label for="confirm-password">Course</label>
                <input type="password" id="confirm-password" placeholder="Enter your course name" required>
            </div>

            <button type="submit" class="submit-button">Register</button>

            <div class="signup-link">
                Back to Manage Students? <a href="StudentManage.php">Go Back</a>
            </div>
        </form>
    </div>
</body>
</html>