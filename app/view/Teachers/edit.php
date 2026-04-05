<!DOCTYPE html>
<html>

<head>
    <title>Edit Teacher</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-4">
        <div class="container">
            <a class="navbar-brand" href="#">My School</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/practicproject/students/index">Students</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/practicproject/teachers/index">Teachers</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="card shadow">
            <div class="card-header bg-warning">
                <h4>Edit Teacher</h4>
            </div>
            <div class="card-body">
                <form method="POST" action="/practicproject/teachers/update/<?= $teacher['id'] ?>">
                    <div class="mb-3">
                        <label class="form-label">First Name</label>
                        <input type="text" name="first_name" class="form-control" value="<?= $teacher['first_name'] ?>" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Last Name</label>
                        <input type="text" name="last_name" class="form-control" value="<?= $teacher['last_name'] ?>" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email Address</label>
                        <input type="email" name="email" class="form-control" value="<?= $teacher['email'] ?>" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Phone Number</label>
                        <input type="text" name="phone" class="form-control" value="<?= $teacher['phone'] ?>" required>
                    </div>
                    <button type="submit" class="btn btn-warning">Update</button>
                    <a href="/practicproject/teachers" class="btn btn-secondary">Back</a>
                </form>
            </div>
        </div>
    </div>
</body>

</html>