<?php

namespace App\Controllers;

use App\Models\StudentModel;

class Students extends BaseController
{
    public function index()
    {
        $model = new StudentModel();

        $keyword = $this->request->getGet('search');

        if ($keyword) {
            $data['students'] = $model
                ->like('name', $keyword)
                ->orLike('email', $keyword)
                ->orLike('course', $keyword)
                ->findAll();
        } else {
            $data['students'] = $model->findAll();
        }

        return view('students/index', $data);
    }
}