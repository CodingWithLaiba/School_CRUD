<!DOCTYPE html>
<html>

<head>
    <title>Teachers</title>
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
        <div class="d-flex justify-content-between mb-3">
            <h2 class="text-primary">Teacher List</h2>
            <a href="/practicproject/teachers/create" class="btn btn-success">+ Add Teacher</a>
        </div>

        <div class="card shadow">
            <div class="card-body">
                <table class="table table-bordered table-hover table-striped text-center">
                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>Phone NO:</th>
                            <th width="200">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($teachers as $t): ?>
                            <tr>
                                <td><?= $t['id'] ?></td>
                                <td><?= $t['first_name'] ?></td>
                                <td><?= $t['last_name'] ?></td>
                                <td><?= $t['email'] ?></td>
                                <td><?= $t['phone'] ?></td>
                                <td>
                                    <a href="/practicproject/teachers/edit/<?= $t['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="/practicproject/teachers/delete/<?= $t['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>