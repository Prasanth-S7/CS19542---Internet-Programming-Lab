<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Academic Record Management System</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        header {
            background-color: #003366;
            color: white;
            text-align: center;
            padding: 1rem;
        }
        nav {
            background-color: #004080;
            color: white;
            padding: 0.5rem;
        }
        nav ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
            display: flex;
            justify-content: center;
        }
        nav ul li {
            margin: 0 1rem;
        }
        nav ul li a {
            color: white;
            text-decoration: none;
        }
        main {
            padding: 2rem;
            max-width: 800px;
            margin: 0 auto;
            background-color: white;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h1, h2 {
            color: #003366;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 1rem;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 0.5rem;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
            font-weight: bold;
        }
        .student-info {
            display: flex;
            justify-content: space-between;
            margin-bottom: 1rem;
        }
        .student-info div {
            flex: 1;
        }
    </style>
</head>
<body>
    <header>
        <h1>Student Academic Record Management System</h1>
    </header>
    <nav>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Students</a></li>
            <li><a href="#">Courses</a></li>
            <li><a href="#">Grades</a></li>
            <li><a href="#">Reports</a></li>
        </ul>
    </nav>
    <main>
        <h2>Student Record</h2>
        <div class="student-info">
            <div>
                <p><strong>Name:</strong> John Doe</p>
                <p><strong>Student ID:</strong> 12345</p>
                <p><strong>Date of Birth:</strong> 01/01/2000</p>
            </div>
            <div>
                <p><strong>Major:</strong> Computer Science</p>
                <p><strong>Year:</strong> Junior</p>
                <p><strong>GPA:</strong> 3.75</p>
            </div>
        </div>
        <h3>Course History</h3>
        <table>
            <thead>
                <tr>
                    <th>Course Code</th>
                    <th>Course Name</th>
                    <th>Semester</th>
                    <th>Grade</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>CS101</td>
                    <td>Introduction to Programming</td>
                    <td>Fall 2021</td>
                    <td>A</td>
                </tr>
                <tr>
                    <td>MATH201</td>
                    <td>Calculus I</td>
                    <td>Fall 2021</td>
                    <td>B+</td>
                </tr>
                <tr>
                    <td>ENG102</td>
                    <td>English Composition</td>
                    <td>Spring 2022</td>
                    <td>A-</td>
                </tr>
                <tr>
                    <td>CS201</td>
                    <td>Data Structures</td>
                    <td>Spring 2022</td>
                    <td>A</td>
                </tr>
            </tbody>
        </table>
    </main>
</body>
</html>