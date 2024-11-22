<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Management System</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }
    .sidebar {
      width: 200px;
      background-color: #333;
      color: #fff;
      position: fixed;
      height: 100%;
      padding: 20px 0;
    }
    .sidebar a {
      display: block;
      padding: 10px 20px;
      color: #fff;
      text-decoration: none;
      margin-bottom: 10px;
    }
    .sidebar a:hover {
      background-color: #575757;
    }
    .logout {
      position: absolute;
      bottom: 20px;
      width: 100%;
      text-align: center;
    }
    .content {
      margin-left: 200px;
      padding: 20px;
    }
    .header {
      font-size: 24px;
      font-weight: bold;
      margin-bottom: 20px;
    }
    .form-container {
      background-color: #f9f9f9;
      padding: 20px;
      border-radius: 5px;
      margin-bottom: 20px;
    }
    .form-container input {
      width: 100%;
      padding: 10px;
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }
    .form-container button {
      background-color: #007bff;
      color: #fff;
      border: none;
      padding: 10px 20px;
      cursor: pointer;
      border-radius: 4px;
    }
    .form-container button:hover {
      background-color: #0056b3;
    }
    .table-container {
      background-color: #f9f9f9;
      padding: 20px;
      border-radius: 5px;
    }
    table {
      width: 100%;
      border-collapse: collapse;
    }
    table, th, td {
      border: 1px solid #ddd;
    }
    th, td {
      text-align: left;
      padding: 10px;
    }
    th {
      background-color: #f2f2f2;
    }
    .edit-btn {
      background-color: #17a2b8;
      color: #fff;
      border: none;
      padding: 5px 10px;
      cursor: pointer;
      border-radius: 4px;
    }
    .delete-btn {
      background-color: #dc3545;
      color: #fff;
      border: none;
      padding: 5px 10px;
      cursor: pointer;
      border-radius: 4px;
    }
  </style>
</head>
<body>
  <div class="sidebar">
        <div class="header">
        Student Management System
        </div>
        <a href="#"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
        <a href="#"><i class="fas fa-book"></i> Subjects</a>
        <a href="#"><i class="fas fa-user-graduate"></i> Students</a>
        <div class="spacer"></div> <!-- Spacer for additional space -->
        <a href="#"><i class="fas fa-sign-out-alt"></i> Logout</a>
  </div>
  <div class="content">
    <div class="header">Add a New Subject</div>
    <div class="form-container">
      <form>
        <input type="text" placeholder="Subject Code">
        <input type="text" placeholder="Subject Name">
        <button type="button">Add Subject</button>
      </form>
    </div>
    <div class="table-container">
      <table>
        <thead>
          <tr>
            <th>Subject Code</th>
            <th>Subject Name</th>
            <th>Option</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1001</td>
            <td>English</td>
            <td>
              <button class="edit-btn">Edit</button>
              <button class="delete-btn">Delete</button>
            </td>
          </tr>
          <tr>
            <td>1002</td>
            <td>Mathematics</td>
            <td>
              <button class="edit-btn">Edit</button>
              <button class="delete-btn">Delete</button>
            </td>
          </tr>
          <tr>
            <td>1003</td>
            <td>Science</td>
            <td>
              <button class="edit-btn">Edit</button>
              <button class="delete-btn">Delete</button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</body>
</html>
