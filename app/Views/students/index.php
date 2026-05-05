<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student List</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .pagination li {
            margin: 0 4px;
        }

        .pagination .page-link {
            border-radius: 8px;
        }

        .card {
            border-radius: 12px;
        }
    </style>
</head>

<body class="bg-light">

<div class="container mt-5">

    <!-- CARD WRAPPER -->
    <div class="card shadow p-4">

        <!-- TITLE -->
        <h2 class="text-center mb-4">Student List</h2>

        <!-- TOP ACTIONS -->
        <div class="d-flex justify-content-between align-items-center mb-3 flex-wrap gap-2">

            <!-- ADD BUTTON -->
            <a href="/students/create" class="btn btn-primary">
                + Add Student
            </a>

            <!-- SEARCH -->
            <form method="get" action="/students" class="d-flex">
                <input type="text" name="search" class="form-control me-2" placeholder="Search student...">
                <button class="btn btn-success">Search</button>
            </form>

        </div>

        <!-- TABLE -->
        <div class="table-responsive">
            <table class="table table-bordered table-hover text-center align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Course</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    <?php if (!empty($students)): ?>
                        <?php foreach ($students as $student): ?>
                        <tr>
                            <td><?= $student['id'] ?></td>
                            <td><?= $student['name'] ?></td>
                            <td><?= $student['email'] ?></td>
                            <td><?= $student['course'] ?></td>
                            <td>
                                <a href="/students/edit/<?= $student['id'] ?>" 
                                   class="btn btn-warning btn-sm me-1">
                                    Edit
                                </a>

                                <a href="/students/delete/<?= $student['id'] ?>" 
                                   class="btn btn-danger btn-sm"
                                   onclick="return confirm('Are you sure you want to delete this student?')">
                                    Delete
                                </a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="5">No students found.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>

        <!-- PAGINATION -->
        <div class="d-flex justify-content-center mt-4">
            <?= $pager->links() ?>
        </div>

    </div>

</div>

</body>
</html>