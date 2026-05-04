<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student List</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<div class="container mt-4">

    <!-- TITLE -->
    <h2 class="text-center mb-4">Student List</h2>

    <!-- TOP ACTIONS -->
    <div class="d-flex justify-content-between align-items-center mb-3">

        <!-- ADD BUTTON -->
        <a href="/students/create" class="btn btn-primary">
            Add Student
        </a>

        <!-- SEARCH -->
        <form method="get" action="/students" class="d-flex">
            <input type="text" name="search" class="form-control me-2" placeholder="Search...">
            <button class="btn btn-success">Search</button>
        </form>

    </div>

    <!-- TABLE -->
    <table class="table table-bordered table-striped text-center">
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
            <?php foreach ($students as $student): ?>
            <tr>
                <td><?= $student['id'] ?></td>
                <td><?= $student['name'] ?></td>
                <td><?= $student['email'] ?></td>
                <td><?= $student['course'] ?></td>
                <td>
                    <a href="/students/delete/<?= $student['id'] ?>" 
                       class="btn btn-danger btn-sm">
                        Delete
                    </a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

   <!-- PAGINATION -->
<style>
    .pagination li {
        margin: 0 5px;
    }
</style>

<div class="d-flex justify-content-center mt-4">
    <?= $pager->links() ?>
</div>

</div>

</body>
</html>