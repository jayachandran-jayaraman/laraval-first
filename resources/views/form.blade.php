<!DOCTYPE html>
<html>
<head>
    <title>Add New Student</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <style>
        body {
            background: #e8fff5; /* Mint background */
        }
        .navbar-mint {
            background: #36c8a9 !important;
        }
        .section-mint {
            background: #d1fff1;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }
        .btn-mint {
            background: #36c8a9;
            color: white;
            border-radius: 25px;
        }
        .btn-mint:hover {
            background: #28a68c;
            color: #fff;
        }
        h1, h3, label {
            color: #1b6b5d;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-dark navbar-mint p-3">
        <h3 class="text-white m-0">Laravel Project</h3>
    </nav>

    <div class="container mt-4">
        <div class="row">

            <!-- Left Form Section -->
            <div class="col-md-6">
                <div class="section-mint">
                    <h1>Register Student</h1>

                    @if(session('message'))
                        <div class="alert alert-success">{{ session('message') }}</div>
                    @endif

                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger">{{ $error }}</div>
                    @endforeach

                    <form action="/add-student" method="post">
                        @csrf

                        <div class="form-group">
                            <label>Name:</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label>Email:</label>
                            <input type="email" name="email" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label>Phone:</label>
                            <input type="text" name="phone" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label>Address:</label>
                            <input type="text" name="address" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label>Gender:</label>
                            <select name="gender" class="form-control" required>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Department:</label>
                            <input type="text" name="department" class="form-control" required>
                        </div>

                        <div class="form-check">
                            <input type="checkbox" name="parttime" value="1" class="form-check-input">
                            <label class="form-check-label">Is Part-Time Student</label>
                        </div>

                        <div class="form-group mt-3">
                            <label>Joining Date:</label>
                            <input type="date" name="joining_date" class="form-control">
                        </div>

                        <button type="submit" class="btn btn-mint px-4 mt-3">Add Student</button>
                    </form>
                </div>
            </div>

            <!-- Right Student List -->
            <div class="col-md-6">
                <div class="section-mint">
                    <h3>Registered Students</h3>

                    @if(isset($students))
                        <ul class="list-group mt-3">
                            @foreach($students as $student)
                                <li class="list-group-item">
                                    <strong>{{ $student->name }}</strong> — 
                                    {{ $student->email }} — 
                                    {{ $student->joining_date }}
                                </li>
                            @endforeach
                        </ul>
                    @else
                        <p>No students</p>
                    @endif
                </div>
            </div>

        </div>
    </div>

</body>
</html>
