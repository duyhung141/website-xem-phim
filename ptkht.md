Chưa xong:  breadcumb
            comments
            views
            FilmActor
            FilmCategory
            User_comment
(thêm phim yêu thích)


Trang chủ -> phim hot -> do thằng admin chọn/ phim oscar -> do thằng admin chọn/
phim nhiều người xem-> lượt xem -> tính lượt xem / phim mới cập nhật -> thời gian upload phim

Trang danh mục phim-> danh mục phim theo thể loại -> phim theo thể loại
Trang tìm kiếm -> tìm kiếm theo tên phim/ diễn viên/ đạo diễn/ năm phát hành/ quốc gia/ thể loại
Trang xem phim -> player xem phim/ bình luận
Trang Đăng nhập-> email/password
Trang Đăng ký-> email/tên/password
Trang Hồ sơ -> cập nhật hồ sơ (thông tin/mk) 

User:
    - id
    - email
    - password
    - username

Film:
   - id
   - name
   - description
   - image
   - path
   - year-> năm phát hành 
   - country_id -> bảng quốc gia 
   - category_id -> bảng thể loại
   - director_id -> bảng đạo diễn
   - actor_id -> bảng diễn viên/tách ra bảng phụ n-n
   - views -> lượt xem
   - is_hot (0)-> phim hot /0 là ko hot/1 là hot
   - is_oscar (0)-> phim oscar /0 là ko oscar/1 là oscar

Category:
    - id
    - name

Country:
    - id
    - name

Director:
    - id
    - name

Actor:
    - id
    - name

FirmActor:
    - id
    - film_id
    - actor_id

Comment:
    - id
    - user_id
    - film_id
    - content
<?php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'description',
        'image',
        'path',
        'year',
        'country_id',
        'category_id',
        'director_id',
        'actor_id',
        'is_hot',
        'is_oscar'
    ];
    public function countries(){
        return $this->hasOne(Country::class);
    }

    public function directors(){
        return $this->hasOne(Director::class);
    }

    public function actors(){
        return $this->belongsToMany(Actor::class,'film_actors','actor_id','film_id');
    }

    public function categories(){
        return $this->belongsToMany(Categories::class,'film_categories','category_id','film_id');
    }
}







