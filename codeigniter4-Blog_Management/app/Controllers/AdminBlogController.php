<?php

namespace App\Controllers;
use App\Models\BlogModel;
use CodeIgniter\Controller;

class AdminBlogController extends Controller {
    public function index() {
        $model = new BlogModel();
        $data['blogs'] = $model->findAll();
        return view('admin/blog_list', $data);
    }

    public function add() {
        return view('admin/blog_add');
    }

    public function create() {
        $model = new BlogModel();
        $data = [
            'title' => $this->request->getPost('title'),
            'short_content' => $this->request->getPost('short_content'),
            'content' => $this->request->getPost('content'),
            'author' => $this->request->getPost('author'),
            'category' => $this->request->getPost('category'),
            'meta_title' => $this->request->getPost('meta_title'),
            'meta_keywords' => $this->request->getPost('meta_keywords'),
            'meta_description' => $this->request->getPost('meta_description'),
            'created_at' => date('Y-m-d H:i:s')
        ];
        
        if ($image = $this->request->getFile('image')) {
            if ($image->isValid() && !$image->hasMoved()) {
                $imageName = $image->getRandomName();
                $image->move('uploads', $imageName);
                $data['image'] = $imageName;
            }
        }
        
        $model->insert($data);
        return redirect()->to('admin/blogs');
    }

    public function edit($id) {
        $model = new BlogModel();
        $data['blog'] = $model->find($id);
        return view('admin/blog_edit', $data);
    }

    public function update($id) {
        $model = new BlogModel();
        $data = [
            'title' => $this->request->getPost('title'),
            'short_content' => $this->request->getPost('short_content'),
            'content' => $this->request->getPost('content'),
            'author' => $this->request->getPost('author'),
            'category' => $this->request->getPost('category'),
            'meta_title' => $this->request->getPost('meta_title'),
            'meta_keywords' => $this->request->getPost('meta_keywords'),
            'meta_description' => $this->request->getPost('meta_description'),
        ];
        
        if ($image = $this->request->getFile('image')) {
            if ($image->isValid() && !$image->hasMoved()) {
                $imageName = $image->getRandomName();
                $image->move('uploads', $imageName);
                $data['image'] = $imageName;
            }
        }
        
        $model->update($id, $data);
        return redirect()->to('admin/blogs');
    }

    public function delete($id) {
        $model = new BlogModel();
        $model->delete($id);
        return redirect()->to('admin/blogs');
    }
}
