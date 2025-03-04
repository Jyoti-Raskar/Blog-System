<?php
namespace App\Models;
use CodeIgniter\Model;

class BlogModel extends Model {
    protected $table = 'blogs';
    protected $primaryKey = 'id';
    protected $allowedFields = ['title', 'short_content', 'content', 'author', 'category', 'image', 'meta_title', 'meta_keywords', 'meta_description', 'created_at'];
} 