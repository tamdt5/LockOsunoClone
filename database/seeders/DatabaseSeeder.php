<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $product=array();
        $user=array();
        $category=array();
        $new=array();
        $feedback=array();
        $cskh=array();
        for($i=1;$i<=4;$i++)
        {      
            
            $o=$i+1;
            $p=$o+1;
            $q=$p+1;
            $w=$q+1;
            $product[]=[
                'tensanpham' => 'Khóa Biệt Thự '.$i,
                'masanpham' => 'OSN',
                'hinhanhsanpham' => 'bietthu'.$i.' - Copy ('.$o.').webp',
                'hinhanhsanpham2' => 'bietthu'.$i.' - Copy ('.$p.').webp',
                'hinhanhsanpham3' => 'bietthu'.$i.' - Copy ('.$q.').webp',
                'hinhanhsanpham4' => 'bietthu'.$i.' - Copy ('.$w.').webp',
                'danhgia' => ($i+1),
                'luotdanhgia' => ($i*100),
                'giasanpham' => ($i+1).'000000',
                'daban' => 50,
                'tinhnang' => 'Tính năng '.$i,
                'delete' => 0,
                'tonkho' => 100,
                'theloai'=> 1,
                'hidden' => 0,
                'congnghe' => 'Nhật bản',
                'thuonghieu' => 'ASANZO',
                'baohanh' => 12,
                'lapdat' => 'toanquoc',
            ];
            $product[]=[
                'tensanpham' => 'Khóa Khách Sạn '.$i,
                'masanpham' => 'OSN',
                'tinhnang' => 'Tính năng '.$i,
                'hinhanhsanpham' => 'khachsan'.$i.' - Copy ('.$o.').webp',
                'hinhanhsanpham2' => 'khachsan'.$i.' - Copy ('.$p.').webp',
                'hinhanhsanpham3' => 'khachsan'.$i.' - Copy ('.$q.').webp',
                'hinhanhsanpham4' => 'khachsan'.$i.' - Copy ('.$w.').webp',
                'danhgia' => ($i+1),
                'luotdanhgia' => ($i*100),
                'giasanpham' => ($i+1).'000000',
                'delete' => 0,
                'daban' => 20,
                'tonkho' => 170,
                'theloai'=> 2,
                'hidden' => 0,
                'congnghe' => 'Nhật bản',
                'thuonghieu' => 'ASANZO',
                'baohanh' => 12,
                'lapdat' => 'toanquoc',
                
            ];
            $product[]=[
                'tensanpham' => 'Khóa Thông Minh '.$i,
                'masanpham' => 'OSN',
                'tinhnang' => 'Tính năng '.$i,
                'hinhanhsanpham1' => 'thongminh'.$i.' - Copy ('.$o.').webp',
                'hinhanhsanpham2' => 'thongminh'.$i.' - Copy ('.$p.').webp',
                'hinhanhsanpham3' => 'thongminh'.$i.' - Copy ('.$q.').webp',
                'hinhanhsanpham4' => 'thongminh'.$i.' - Copy ('.$w.').webp',
                'danhgia' => ($i+1),
                'luotdanhgia' => ($i*100),
                'giasanpham' => ($i+1).'000000',
                'delete' => 0,
                'daban' => 10,
                'tonkho' => 100,
                'theloai'=> 3,
                'hidden' => 0,
                'congnghe' => 'Nhật bản',
                'thuonghieu' => 'ASANZO',
                'baohanh' => 12,
                'lapdat' => 'toanquoc',
            ];
            $product[]=[
                'tensanpham' => 'Khóa Vân Tay '.$i,
                'tinhnang' => 'Tính năng '.$i,
                'masanpham' => 'OSN',
                'hinhanhsanpham1' => 'vantay'.$i.' - Copy ('.$o.').webp',
                'hinhanhsanpham2' => 'vantay'.$i.' - Copy ('.$p.').webp',
                'hinhanhsanpham3' => 'vantay'.$i.' - Copy ('.$q.').webp',
                'hinhanhsanpham4' => 'vantay'.$i.' - Copy ('.$w.').webp',
                'daban' => 5,
                'luotdanhgia' => ($i*100),
                'delete' => 0,
                'tonkho' => 100,
                'danhgia' => ($i+1),
                'giasanpham' => ($i+1).'000000',
                'theloai'=> 4,
                'hidden' => 0,
                'congnghe' => 'Nhật bản',
                'thuonghieu' => 'ASANZO',
                'baohanh' => 12,
                'lapdat' => 'toanquoc',
            ];
            $cskh[]=[
                'sdt' => '077275253'.$i,
                'tuvan' => 0,
                'sanpham' => $i,
            ];
        }
        $category[]=[
            'tentheloai' => 'Khóa biệt thự',
            'delete' => 0,
            'type' => 'sanpham',
            'icon'=>'fa-shopping-cart',
            'hidden' => 0,
        ];
        $category[]=[
            'tentheloai' => 'Khóa khách sạn',
                'delete' => 0,
            'type' => 'sanpham',
            'icon'=>'fa-shopping-cart',
            'hidden' => 0,
        ];
        $category[]=[
            'tentheloai' => 'Khóa thông minh',
            'type' => 'sanpham',
            'delete' => 0,
                'icon'=>'fa-shopping-cart',
            'hidden' => 0,
        ];
        $category[]=[
            'tentheloai' => 'Khóa vân tay',
            'type' => 'sanpham',
            'delete' => 0,
                'icon'=>'fa-shopping-cart',
            'hidden' => 0,
        ];
        $category[]=[
            'tentheloai' => 'Giải thưởng tiêu biểu',
            'type' => 'giaithuong',
            'delete' => 0,
                'icon'=>'fa-award',
            'hidden' => 0,
        ];
        $category[]=[
            'tentheloai' => 'Video',
            'type' => 'video',
            'delete' => 0,
                'icon'=>'fa-brands fa-youtube',
            'hidden' => 0,
        ];
        $category[]=[
            'tentheloai' => 'Tin tức',
            'type' => 'tintuc',
            'delete' => 0,
                'icon'=>'fa-newspaper',
            'hidden' => 0,
        ];
        $category[]=[
            'tentheloai' => 'Hình ảnh thực tế',
            'type' => 'hinhanhthucte',
            'delete' => 0,
                'icon'=>'fa-solid fa-bars',
            'hidden' => 0,
        ];
        for($i=1;$i<=4;$i++)
        {
            $new[]=[
                'tieude' => 'Những lưu ý khi lắp khóa cửa, số thứ '.$i,
                'delete' => 0,
                'hinhanhbaiviet' => 'tinso'.$i.'.webp',
                'noidung' => 'nội dung bài viết của "Những lưu ý khi lắp khóa điện tử số"'.$i,
                'theloai' => 7,
                'hidden' => 0,
            ];
            $new[]=[
                'tieude' => 'Giải thưởng ISO',
                'delete' => 0,
                'hinhanhbaiviet' => 'giaithuong'.$i.'.webp',
                'noidung' => 'nội dung giải thưởng"'.$i,
                'theloai' => 5,
                'hidden' => 0,
            ];
            $new[]=[
                'tieude' => 'Khôi phục cài đặt gốc khóa KS OSN số '.$i,
                'hinhanhbaiviet' => 'video'.$i.'.webp',
                'delete' => 0,
                'noidung' => 'nội dung bài viết của "Khôi phục cài đặt gốc khóa KS OSN"'.$i,
                'theloai' => 6,
                'hidden' => 0,
            ];
            $new[]=[
                'tieude' => 'Hình Ảnh Thực Tế Số  '.$i,
                'hinhanhbaiviet' => 'hinhanhthucte'.$i.'.webp',
                'delete' => 0,
                'noidung' => 'nội dung Hình Ảnh Thực Tế Số "'.$i,
                'theloai' => 8,
                'hidden' => 0,
            ];
        }
       $feedback []=[
            'comment' => 'Bài viết hay lắm',
            'delete' => 0,
            'hoten' => 'Đặng Thanh Tâm',
            'email' => 'thanhtamdang103@gmail.com',
                'danhgia' => 5,
                'sanpham' => 1,
                'baiviet' => null,
       ];
       $feedback []=[
            'comment' => 'Bài viết cũng được',
            'delete' => 0,
            'hoten' => 'Đặng Thanh Tâm',
                'danhgia' => 5,
            'email' => 'thanhtamdang103@gmail.com',
                'sanpham' => 1,
                'baiviet' => null,
        ];
        for($i=0;$i<=10;$i++)
        {
            $feedback []=[
                'comment' => 'Bài viết cũng được',
                'delete' => 0,
                'hoten' => 'Đặng Thanh Tâm',
                'email' => 'thanhtamdang103@gmail.com',
                'danhgia' => 5,
                'sanpham' => null,
                'baiviet' => 2,
            ];
            $feedback []=[
                'comment' => 'Sản phẩm rất OK',
                'danhgia' => 5,
                'delete' => 0,
                'hoten' => 'Đặng Thanh Tâm',
                'email' => 'thanhtamdang103@gmail.com',
                'baiviet' => null,
                'sanpham' => 2,
            ];
        }
        for($i=1;$i<=2;$i++)
        {
            $user []=[
                'email' => 'thanhtamdang10'.$i.'@gmail.com',
                'password' => bcrypt('1231231'),
                'fullname' => 'Dang Thanh Tam',
                'phone' => '0772752531',
                'level' => 1,
                'avatar' => 'hinh1.jpg'
            ];
        }

        DB::table('category')->insert($category);
        DB::table('product')->insert($product);
        DB::table('cskh')->insert($cskh);
        DB::table('new')->insert($new);
        DB::table('feedback')->insert($feedback);
        DB::table('users')->insert($user);
    }
}
