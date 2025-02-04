<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management</title>
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
            flex-direction: column;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            padding: 20px;
        }

        .management-container {
            background: rgba(255, 255, 255, 0.95);
            padding: 2rem;
            border-radius: 1rem;
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 1200px;
            margin: 1rem auto;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }

        .management-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 2rem;
        }

        .management-header h1 {
            color: #1a202c;
            font-size: 1.875rem;
            font-weight: 700;
        }

        .search-input {
            padding: 0.75rem 1rem;
            border: 1px solid #e2e8f0;
            border-radius: 0.5rem;
            font-size: 1rem;
            width: 300px;
            transition: all 0.3s ease;
        }

        .search-input:focus {
            outline: none;
            border-color: #667eea;
            box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
        }

        .student-table {
            width: 100%;
            border-collapse: collapse;
            font-size: 0.875rem;
        }

        .student-table th,
        .student-table td {
            padding: 1rem;
            text-align: left;
            border-bottom: 1px solid #e2e8f0;
        }

        .student-table th {
            color: #4a5568;
            font-weight: 500;
        }

        .student-table td {
            color: #1a202c;
        }

        .student-table tr:hover {
            background-color: #f7fafc;
        }

        .student-table a {
            color: #667eea;
            text-decoration: none;
            margin-right: 0.5rem;
            transition: color 0.3s ease;
        }

        .student-table a:hover {
            color: #5a67d8;
        }

        @media (max-width: 768px) {
            .management-container {
                padding: 1.5rem;
            }

            .management-header {
                flex-direction: column;
                align-items: flex-start;
                gap: 1rem;
            }

            .search-input {
                width: 100%;
            }
        }
    </style>
</head>

<body>
    <div class="management-container">
        <div class="management-header">
            <h1>Student Management</h1>

            <input type="text" class="search-input" placeholder="Search students..." />
            <button type="button"
                style="padding: 0.75rem; background: #667eea; color: white; border: none; border-radius: 0.5rem; font-size: 1rem; font-weight: 500; cursor: pointer; transition: background-color 0.3s ease;"
                onclick="window.location.href='StudentRegistration.php'">
                Register New Student
            </button>

        </div>

        <table class="student-table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>NIC</th>
                    <th>Course</th>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>John Doe</td>
                    <td>123456789</td>
                    <td>Computer Science</td>
                    <td>john.doe@example.com</td>
                    <td>
                        <a href="#" onclick="updateStudent(this)">Update</a>
                        <a href="#" onclick="deleteStudent(this)">Delete</a>
                    </td>
                </tr>
                <tr>
                    <td>Jane Smith</td>
                    <td>987654321</td>
                    <td>Business Administration</td>
                    <td>jane.smith@example.com</td>
                    <td>
                        <a href="#" onclick="updateStudent(this)">Update</a>
                        <a href="#" onclick="deleteStudent(this)">Delete</a>
                    </td>
                </tr>
                <tr>
                    <td>Michael Johnson</td>
                    <td>456789123</td>
                    <td>Engineering</td>
                    <td>michael.johnson@example.com</td>
                    <td>
                        <a href="#" onclick="updateStudent(this)">Update</a>
                        <a href="#" onclick="deleteStudent(this)">Delete</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <script>
        function updateStudent(element) {
            // Implement update functionality here
            console.log('Update student:', element.closest('tr').getElementsByTagName('td')[0].textContent);
        }

        function deleteStudent(element) {
            // Implement delete functionality here
            console.log('Delete student:', element.closest('tr').getElementsByTagName('td')[0].textContent);
        }
    </script>
</body>

</html>