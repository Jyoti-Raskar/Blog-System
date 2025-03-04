<?php
namespace App\Controllers;
use App\Models\BlogModel;
use CodeIgniter\Controller;

class BlogController extends Controller {
    public function index() {
        $model = new BlogModel();
        $data['blogs'] = $model->findAll();
        return view('blog/index', $data);
    }

    public function view($id) {
        $model = new BlogModel();
        $data['blog'] = $model->find($id);
        $data['otherBlogs'] = $model->where('id !=', $id)->findAll(5);
        return view('blog/view', $data);
    }
}
