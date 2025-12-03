<!DOCTYPE html>
<html>
<head>
    <title>Student List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
    body {
        background: linear-gradient(135deg, #a8ffdf, #5dd4b0);
        min-height: 100vh;
        font-family: 'Segoe UI', sans-serif;
    }
    .top-bar {
        background: #004d40;
        padding: 15px 25px;
        box-shadow: 0px 4px 10px rgba(0,0,0,0.2);
    }
    .main-card {
        background: #ffffff;
        padding: 30px;
        border-radius: 20px;
        box-shadow: 0px 6px 20px rgba(0,0,0,0.15);
        width: 95%;
        max-width: 900px;
    }
    .mint-btn {
        background-color: #009879;
        border: none;
        border-radius: 12px;
        padding: 12px 20px;
        color: white;
        font-weight: 500;
    }
    .mint-btn:hover {
        background-color: #007f64;
    }
    .primary-btn {
        background-color: #00695c;
        border: none;
        border-radius: 12px;
        padding: 12px 20px;
        color: white;
        font-weight: 500;
    }
    .primary-btn:hover {
        background-color: #004f45;
    }
    table thead {
        background: #009879;
        color: white;
    }
    table tbody tr:hover {
        background: #e1fff2;
    }
    .form-control, .form-select {
        border-radius: 12px;
        padding: 10px;
    }
</style>

</head>

<body>

    <div class="top-bar text-white">
        <h3>Laravel Project</h3>
    </div>

    <div class="d-flex justify-content-center mt-4">
        <div class="main-card">

            <h2 class="text-center mb-4">Student List</h2>

            <div class="d-flex justify-content-end mb-3">
                <a href="/student-form" class="primary-btn">Add Student</a>
            </div>

            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Gender</th>
                        <th>Department</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Bob</td>
                        <td>bob@gmail.com</td>
                        <td>3737372772</td>
                        <td>London</td>
                        <td>Male</td>
                        <td>Civil Engineering</td>
                    </tr>
                </tbody>
            </table>

        </div>
    </div>

</body>
</html>
