<h2>Student List</h2>

<a href="/students/create">Add Student</a>
<form method="get" action="/students">
    <input type="text" name="search" placeholder="Search student...">
    <button type="submit">Search</button>
</form>
<br>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Course</th>
        <th>Action</th>
    </tr>

    <?php foreach ($students as $student): ?>
    <tr>
        <td><?= $student['id'] ?></td>
        <td><?= $student['name'] ?></td>
        <td><?= $student['email'] ?></td>
        <td><?= $student['course'] ?></td>
        <td>
            <a href="/students/delete/<?= $student['id'] ?>">Delete</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>