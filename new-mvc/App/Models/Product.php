<?php
// Định nghĩa namespace theo tên thư mục từ ngoài vào trong;
namespace App\Models;

//Đây là model base chứa các phương thức để truy vấn 
//VD: where, join,...
use Illuminate\Database\Eloquent\Model;

class Product extends Model {
    protected $table = 'products';
    //Sau này sẽ không cần select * form bảng
    //Mà chỉ cần Product::all() lấy tất cả
}


