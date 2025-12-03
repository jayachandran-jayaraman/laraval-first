<!DOCTYPE html>
<html>
<head>
    <title>Student Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        :root {
            --mint-primary: #009879;
            --mint-light: #e8f6f3;
            --mint-dark: #004d40;
            --mint-gradient: linear-gradient(135deg, #a8ffdf, #5dd4b0);
            --shadow-light: 0 4px 12px rgba(0, 152, 121, 0.1);
            --shadow-medium: 0 6px 20px rgba(0, 77, 64, 0.15);
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            background: var(--mint-gradient);
            min-height: 100vh;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #333;
        }
        
        /* Header */
        .header {
            background: linear-gradient(135deg, var(--mint-dark) 0%, #00695c 100%);
            padding: 1.2rem 2rem;
            box-shadow: var(--shadow-medium);
            position: relative;
            overflow: hidden;
        }
        
        .header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url("data:image/svg+xml,%3Csvg width='100' height='100' viewBox='0 0 100 100' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M11 18c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm48 25c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm-43-7c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm63 31c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM34 90c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm56-76c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM12 86c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm28-65c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm23-11c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-6 60c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm29 22c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zM32 63c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm57-13c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-9-21c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM60 91c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM35 41c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM12 60c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2z' fill='%23007f64' fill-opacity='0.05' fill-rule='evenodd'/%3E%3C/svg%3E");
            opacity: 0.1;
        }
        
        .header h3 {
            color: white;
            font-weight: 600;
            margin: 0;
            display: flex;
            align-items: center;
            gap: 12px;
        }
        
        .header h3 i {
            color: #a8ffdf;
        }
        
        /* Main Container */
        .main-container {
            max-width: 1400px;
            margin: 2rem auto;
            padding: 0 1.5rem;
        }
        
        /* Cards */
        .dashboard-card {
            background: white;
            border-radius: 20px;
            box-shadow: var(--shadow-medium);
            overflow: hidden;
            border: none;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            height: 100%;
        }
        
        .dashboard-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 25px rgba(0, 77, 64, 0.18);
        }
        
        .card-header {
            background: linear-gradient(135deg, var(--mint-primary) 0%, #007f64 100%);
            color: white;
            padding: 1.5rem;
            border-bottom: none;
        }
        
        .card-header h4 {
            margin: 0;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        
        .card-body {
            padding: 2rem;
        }
        
        /* Form Elements */
        .form-label {
            font-weight: 600;
            color: var(--mint-dark);
            margin-bottom: 0.5rem;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        
        .form-control, .form-select {
            border-radius: 12px;
            padding: 12px 15px;
            border: 1px solid #d1f2eb;
            transition: all 0.3s;
            font-size: 1rem;
        }
        
        .form-control:focus, .form-select:focus {
            border-color: var(--mint-primary);
            box-shadow: 0 0 0 0.25rem rgba(0, 152, 121, 0.25);
        }
        
        .form-group {
            margin-bottom: 1.5rem;
        }
        
        /* Buttons */
        .btn-primary-custom {
            background: linear-gradient(135deg, var(--mint-primary) 0%, #007f64 100%);
            border: none;
            border-radius: 12px;
            padding: 12px 28px;
            color: white;
            font-weight: 600;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }
        
        .btn-primary-custom:hover {
            background: linear-gradient(135deg, #007f64 0%, var(--mint-dark) 100%);
            transform: translateY(-2px);
            box-shadow: 0 6px 15px rgba(0, 152, 121, 0.3);
            color: white;
        }
        
        .btn-secondary-custom {
            background: white;
            border: 2px solid var(--mint-primary);
            border-radius: 12px;
            padding: 12px 28px;
            color: var(--mint-primary);
            font-weight: 600;
            transition: all 0.3s ease;
        }
        
        .btn-secondary-custom:hover {
            background: var(--mint-light);
            color: var(--mint-dark);
        }
        
        /* Alerts */
        .alert-custom {
            border-radius: 12px;
            border: none;
            padding: 1rem 1.5rem;
            box-shadow: var(--shadow-light);
        }
        
        .alert-success {
            background: #e8f6f3;
            color: var(--mint-dark);
            border-left: 4px solid var(--mint-primary);
        }
        
        .alert-danger {
            background: #ffeaea;
            color: #b00020;
            border-left: 4px solid #ff5252;
        }
        
        /* Students List */
        .students-list-container {
            max-height: 500px;
            overflow-y: auto;
            padding-right: 5px;
        }
        
        .students-list-container::-webkit-scrollbar {
            width: 6px;
        }
        
        .students-list-container::-webkit-scrollbar-track {
            background: #f1f1f1;
            border-radius: 10px;
        }
        
        .students-list-container::-webkit-scrollbar-thumb {
            background: var(--mint-primary);
            border-radius: 10px;
        }
        
        .student-item {
            background: white;
            border-radius: 12px;
            padding: 1.2rem;
            margin-bottom: 1rem;
            border-left: 4px solid var(--mint-primary);
            box-shadow: var(--shadow-light);
            transition: all 0.3s ease;
        }
        
        .student-item:hover {
            transform: translateX(5px);
            box-shadow: 0 8px 15px rgba(0, 152, 121, 0.15);
        }
        
        .student-name {
            font-weight: 600;
            color: var(--mint-dark);
            margin-bottom: 0.3rem;
        }
        
        .student-details {
            color: #666;
            font-size: 0.9rem;
            display: flex;
            align-items: center;
            gap: 15px;
            flex-wrap: wrap;
        }
        
        .student-details span {
            display: flex;
            align-items: center;
            gap: 5px;
        }
        
        /* Stats */
        .stats-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 1.5rem;
            margin-bottom: 2rem;
        }
        
        .stat-card {
            background: white;
            border-radius: 16px;
            padding: 1.5rem;
            box-shadow: var(--shadow-light);
            display: flex;
            align-items: center;
            gap: 1rem;
        }
        
        .stat-icon {
            width: 60px;
            height: 60px;
            border-radius: 12px;
            background: var(--mint-light);
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--mint-primary);
            font-size: 1.8rem;
        }
        
        .stat-content h3 {
            font-weight: 700;
            color: var(--mint-dark);
            margin: 0;
            font-size: 2rem;
        }
        
        .stat-content p {
            color: #666;
            margin: 0;
            font-size: 0.9rem;
        }
        
        /* Responsive */
        @media (max-width: 992px) {
            .main-container {
                padding: 1rem;
            }
            
            .card-body {
                padding: 1.5rem;
            }
            
            .stats-container {
                grid-template-columns: repeat(2, 1fr);
            }
        }
        
        @media (max-width: 768px) {
            .stats-container {
                grid-template-columns: 1fr;
            }
            
            .header {
                padding: 1rem;
            }
            
            .header h3 {
                font-size: 1.4rem;
            }
        }
        
        /* Checkbox styling */
        .form-check-input:checked {
            background-color: var(--mint-primary);
            border-color: var(--mint-primary);
        }
        
        .form-check-input:focus {
            border-color: var(--mint-primary);
            box-shadow: 0 0 0 0.25rem rgba(0, 152, 121, 0.25);
        }
        
        .form-check-label {
            color: #555;
            font-weight: 500;
        }
        
        /* Empty state */
        .empty-state {
            text-align: center;
            padding: 3rem 2rem;
            color: #888;
        }
        
        .empty-state i {
            font-size: 3rem;
            margin-bottom: 1rem;
            color: #d1f2eb;
        }
    </style>
</head>

<body>
    <!-- Header -->
    <div class="header">
        <div class="container">
            <h3>
                <i class="fas fa-graduation-cap"></i>
                Student Management System
            </h3>
        </div>
    </div>
    
    <!-- Main Content -->
    <div class="main-container">
        <!-- Stats Section -->
        <div class="stats-container">
            <div class="stat-card">
                <div class="stat-icon">
                    <i class="fas fa-users"></i>
                </div>
                <div class="stat-content">
                    <h3>{{ isset($students) ? count($students) : '0' }}</h3>
                    <p>Total Students</p>
                </div>
            </div>
            
            <div class="stat-card">
                <div class="stat-icon">
                    <i class="fas fa-user-clock"></i>
                </div>
                <div class="stat-content">
                    <h3>{{ isset($students) ? $students->where('parttime', 1)->count() : '0' }}</h3>
                    <p>Part-Time Students</p>
                </div>
            </div>
            
            <div class="stat-card">
                <div class="stat-icon">
                    <i class="fas fa-building"></i>
                </div>
                <div class="stat-content">
                    <h3>{{ isset($students) ? $students->pluck('department')->unique()->count() : '0' }}</h3>
                    <p>Departments</p>
                </div>
            </div>
        </div>
        
        <!-- Main Content Row -->
        <div class="row g-4">
            <!-- Registration Form Column -->
            <div class="col-lg-6">
                <div class="dashboard-card">
                    <div class="card-header">
                        <h4><i class="fas fa-user-plus"></i> Register New Student</h4>
                    </div>
                    <div class="card-body">
                        <!-- Alerts -->
                        @if(session('message'))
                            <div class="alert alert-success alert-custom mb-4">
                                <i class="fas fa-check-circle me-2"></i>
                                {{ session('message') }}
                            </div>
                        @endif
                        
                        @if ($errors->any())
                            <div class="alert alert-danger alert-custom mb-4">
                                <i class="fas fa-exclamation-triangle me-2"></i>
                                <strong>Please fix the following errors:</strong>
                                <ul class="mb-0 mt-2">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        
                        <!-- Registration Form -->
                        <form action="/add-student" method="post" id="studentForm">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name" class="form-label">
                                            <i class="fas fa-user"></i> Full Name
                                        </label>
                                        <input type="text" name="name" id="name" class="form-control" placeholder="Enter student name" required>
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email" class="form-label">
                                            <i class="fas fa-envelope"></i> Email Address
                                        </label>
                                        <input type="email" name="email" id="email" class="form-control" placeholder="student@example.com" required>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="phone" class="form-label">
                                            <i class="fas fa-phone"></i> Phone Number
                                        </label>
                                        <input type="text" name="phone" id="phone" class="form-control" placeholder="+1 (123) 456-7890" required>
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="gender" class="form-label">
                                            <i class="fas fa-venus-mars"></i> Gender
                                        </label>
                                        <select name="gender" id="gender" class="form-select" required>
                                            <option value="" disabled selected>Select gender</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                            <option value="Other">Other</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="address" class="form-label">
                                    <i class="fas fa-map-marker-alt"></i> Address
                                </label>
                                <input type="text" name="address" id="address" class="form-control" placeholder="Enter full address" required>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="department" class="form-label">
                                            <i class="fas fa-building"></i> Department
                                        </label>
                                        <input type="text" name="department" id="department" class="form-control" placeholder="e.g., Computer Science" required>
                                    </div>
                                </div>
                                
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="joining_date" class="form-label">
                                            <i class="fas fa-calendar-alt"></i> Joining Date
                                        </label>
                                        <input type="date" name="joining_date" id="joining_date" class="form-control" value="{{ date('Y-m-d') }}">
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-group form-check mt-4">
                                <input type="checkbox" class="form-check-input" id="parttime" name="parttime" value="1">
                                <label class="form-check-label" for="parttime">
                                    <i class="fas fa-user-clock me-1"></i> Part-Time Student
                                </label>
                            </div>
                            
                            <div class="d-flex justify-content-between mt-4 pt-3 border-top">
                                <button type="reset" class="btn btn-secondary-custom">
                                    <i class="fas fa-redo me-2"></i> Clear Form
                                </button>
                                <button type="submit" class="btn btn-primary-custom">
                                    <i class="fas fa-save me-2"></i> Add Student
                                </button>
                            </div>
                            
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
            
            <!-- Students List Column -->
            <div class="col-lg-6">
                <div class="dashboard-card">
                    <div class="card-header">
                        <h4><i class="fas fa-list-alt"></i> Registered Students</h4>
                    </div>
                    <div class="card-body">
                        <div class="students-list-container">
                            @if(isset($students) && count($students) > 0)
                                @foreach($students as $student)
                                    <div class="student-item">
                                        <div class="student-name">
                                            {{ $student->name }}
                                            @if($student->parttime)
                                                <span class="badge bg-info ms-2">Part-Time</span>
                                            @endif
                                        </div>
                                        <div class="student-details">
                                            <span>
                                                <i class="fas fa-envelope text-muted"></i>
                                                {{ $student->email }}
                                            </span>
                                            <span>
                                                <i class="fas fa-calendar text-muted"></i>
                                                {{ \Carbon\Carbon::parse($student->joining_date)->format('M d, Y') }}
                                            </span>
                                            <span>
                                                <i class="fas fa-building text-muted"></i>
                                                {{ $student->department }}
                                            </span>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <div class="empty-state">
                                    <i class="fas fa-user-graduate"></i>
                                    <h5>No Students Registered</h5>
                                    <p>Add your first student using the form on the left</p>
                                </div>
                            @endif
                        </div>
                        
                        @if(isset($students) && count($students) > 0)
                            <div class="mt-4 pt-3 border-top text-center">
                                <p class="text-muted mb-0">
                                    Showing {{ count($students) }} student{{ count($students) > 1 ? 's' : '' }}
                                </p>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        // Set today's date as default for joining date
        document.addEventListener('DOMContentLoaded', function() {
            const today = new Date().toISOString().split('T')[0];
            const joiningDateInput = document.getElementById('joining_date');
            
            if (joiningDateInput && !joiningDateInput.value) {
                joiningDateInput.value = today;
            }
            
            // Form validation feedback
            const form = document.getElementById('studentForm');
            const inputs = form.querySelectorAll('input, select');
            
            inputs.forEach(input => {
                input.addEventListener('blur', function() {
                    if (this.value.trim() !== '') {
                        this.classList.add('is-valid');
                        this.classList.remove('is-invalid');
                    } else if (this.required) {
                        this.classList.add('is-invalid');
                        this.classList.remove('is-valid');
                    }
                });
            });
            
            // Phone number formatting
            const phoneInput = document.getElementById('phone');
            phoneInput.addEventListener('input', function(e) {
                let value = e.target.value.replace(/\D/g, '');
                if (value.length > 0) {
                    value = value.match(/(\d{0,3})(\d{0,3})(\d{0,4})/);
                    e.target.value = !value[2] ? value[1] : '(' + value[1] + ') ' + value[2] + (value[3] ? '-' + value[3] : '');
                }
            });
        });
    </script>
</body>
</html>