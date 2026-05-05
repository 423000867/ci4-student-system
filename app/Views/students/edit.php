<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="container mt-5">
    <div class="card shadow p-4">
        <h3 class="text-center mb-4">Edit Student</h3>

        <form action="/students/update/<?= $student['id'] ?>" method="post">

            <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" name="name" value="<?= $student['name'] ?>" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email" value="<?= $student['email'] ?>" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Course</label>
                <input type="text" name="course" value="<?= $student['course'] ?>" class="form-control">
            </div>

            <button class="btn btn-success w-100">Update</button>
        </form>
    </div>
</div>