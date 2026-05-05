<?php

namespace App\Controllers\Api;

use App\Controllers\BaseController;
use App\Models\StudentModel;
use CodeIgniter\API\ResponseTrait;

class StudentApi extends BaseController
{
    use ResponseTrait;

    // ✅ GET ALL STUDENTS
    public function index()
    {
        $model = new StudentModel();

        $data = $model->findAll();

        return $this->respond([
            'status' => 200,
            'data' => $data
]);
    }

    // ✅ GET SINGLE STUDENT
    public function show($id)
    {
        $model = new StudentModel();
        $student = $model->find($id);

        if (!$student) {
            return $this->failNotFound('Student not found');
        }

        return $this->respond($student);
    }

    // ✅ CREATE STUDENT
    public function create()
    {
        $model = new StudentModel();

        $data = [
            'name'   => $this->request->getVar('name'),
            'email'  => $this->request->getVar('email'),
            'course' => $this->request->getVar('course'),
        ];

        $model->insert($data);

        return $this->respondCreated([
            'message' => 'Student created successfully'
        ]);
    }

    // ✅ UPDATE STUDENT
    public function update($id)
    {
        $model = new StudentModel();

        $student = $model->find($id);

        if (!$student) {
            return $this->failNotFound('Student not found');
        }

        $data = [
            'name'   => $this->request->getVar('name'),
            'email'  => $this->request->getVar('email'),
            'course' => $this->request->getVar('course'),
        ];

        $model->update($id, $data);

        return $this->respond([
            'message' => 'Student updated successfully'
        ]);
    }

    // ✅ DELETE (SOFT DELETE)
    public function delete($id)
    {
        $model = new StudentModel();

        $student = $model->find($id);

        if (!$student) {
            return $this->failNotFound('Student not found');
        }

        $model->delete($id);

        return $this->respondDeleted([
            'message' => 'Student deleted successfully'
        ]);
    }
}