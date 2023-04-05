<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Admin\BaseController;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        $cateMenu = DB::table('category')->where('type','sanpham')->limit(9)->get();
        $spbanchay = DB::table('product')->orderBy('daban','desc')->limit(4)->get();
        // // $data['index2'] = DB::table('product')->where('theloai','2')->limit(4)->get();
        // // $data['index3'] = DB::table('product')->where('theloai','2')->limit(4)->get();
        $categories = DB::table('category')->get();
        $news= DB::table('new')->get();
        $danhsach=[];
        foreach($categories as $category)
        {
            $queryNew = DB::table('new');
            $cate['id']=$category->id;
            $cate['name']=$category->tentheloai;
            $cate['icon']=$category->icon;
            $cate['type']=$category->type;
            $product=DB::table('product')->where('theloai',$category->id)->limit(4)->get();
            $new=$queryNew
                            ->where('theloai',$category->id)
                            ->get();
            $cate['new']=$new;
            $cate['isHidden']=$category->hidden;
            $cate['sanpham'] = $product;
            $danhsach[]=$cate;
        }
        // dd($danhsach);
        return view('website/welcome')->with(['danhsach'=>$danhsach,
                                      'spbanchay' =>$spbanchay,
                                       'cateMenu' =>$cateMenu ]);
    }

    public function detailCategory($id){
        $cateMenu = DB::table('category')->where('type','sanpham')->limit(9)->get();
        $spbanchay = DB::table('product')->orderBy('daban','desc')->limit(4)->get();
        $spbanchaynhat = DB::table('product')->orderBy('daban','desc')->limit(1)->first();
        $product_category = DB::table('category')
        ->join('product','category.id','product.theloai')
        ->where('tentheloai',$id)->get();
        return view('website/modules/detailCategory/detailCategory')
                ->with(['product_category' => $product_category,
                        'spbanchay' => $spbanchay,
                            'cateMenu' => $cateMenu,
                        'spbanchaynhat' => $spbanchaynhat]);
    }

    public function detailProduct($id)
    {
        $cateMenu = DB::table('category')->where('type','sanpham')->limit(9)->get();
        $idsanpham = DB::table('product')->select('id')->where('tensanpham',$id)->first();
        $feedbackQuery= DB::table('feedback')->join('product','feedback.sanpham','product.id');
        $countingRating= $feedbackQuery
                        ->where('product.tensanpham',$id)->count();
        $countingStar['1']= DB::table('feedback')
                        ->where('sanpham',$idsanpham->id)
                        ->where('feedback.danhgia',1)
                        ->count();  
        $countingStar['2']= DB::table('feedback')
                        ->where('sanpham',$idsanpham->id)
                        ->where('feedback.danhgia',2)
                        ->count();
        $countingStar['3']= DB::table('feedback')
                        ->where('sanpham',$idsanpham->id)
                        ->where('feedback.danhgia',3)
                        ->count();
        $countingStar['4']= DB::table('feedback')
                        ->where('sanpham',$idsanpham->id)
                        ->where('feedback.danhgia',4)
                        ->count();
        $countingStar['5']= DB::table('feedback')
                        ->where('sanpham',$idsanpham->id)
                        ->where('feedback.danhgia','=','5')
                        ->count();
        $averageStar= DB::table('feedback')
                        ->where('sanpham',$idsanpham->id)
                        ->avg('feedback.danhgia');
        $feedback = $feedbackQuery
                        ->select('*','feedback.comment as fbcomment',
                        'feedback.hoten as fbhoten','feedback.danhgia as fbdanhgia',
                        'feedback.email as fbemail','feedback.id as fbid',
                        'feedback.image as fbimg'
                        ,'feedback.created_at as fbtime')
                        ->where('product.id',$idsanpham->id)->limit(4)
                        ->get();
        $chitietsanpham = DB::table('product')
                ->select('*','category.tentheloai as tentheloai', 'product.id as prodid')
                ->join('category','product.theloai','category.id')
                ->where('tensanpham',$id)
                ->first();
        $spbanchay = DB::table('product')->orderBy('daban','desc')->limit(4)->get();
        $spbanchaynhat = DB::table('product')->orderBy('daban','desc')->limit(1)->first();
        return view('website/modules/detailProduct/detailProduct')->with(['tensanpham' => $id,
                                                                        'spbanchay' => $spbanchay,
                                                                        'sanpham' => $chitietsanpham,
                                                                        'feedback' => $feedback,
                                                                        'spbanchaynhat' => $spbanchaynhat,
                                                                        'countingRater' => $countingRating,
                                                                        'countingStar' => $countingStar,
                                                                        'cateMenu' => $cateMenu,
                                                                        'averageStar' =>$averageStar ]);
    }

    public function cskh(Request $request){
        DB::table('cskh')->insert($request->except('_token','tensanpham'));
        return redirect()->back();
    }

    public function danhgia( Request $request){
        $image_path = public_path('images/feedback') . "/" . $request->image;
        if (!is_null($request->image) && file_exists($image_path)) {
            unlink($image_path);
        }
        $imageName = time().'-'.$request->image->getClientOriginalName();  
        $request->image->move(public_path('images/feedback'), $imageName);
        $data=$request->except('_token');
        $data['image'] = $imageName; 
        $data['created_at'] = new \DateTime();
        DB::table('feedback')->insert($data);
        return redirect()->back();
    }
    public function sanphambanchay(){
        $cateMenu = DB::table('category')->where('type','sanpham')->limit(9)->get();
        $spbanchay = DB::table('product')->orderBy('daban','desc')->limit(4)->get();
        $spbanchaynhat = DB::table('product')->orderBy('daban','desc')->limit(1)->first();
        $danhsachbanchay = DB::table('product')->orderBy('daban','desc')
                ->get();
        return view('website/modules/detailCategory/detailCategory')
                ->with(['product_category' => $danhsachbanchay,
                        'spbanchay' => $spbanchay,
                            'cateMenu' => $cateMenu,
                        'spbanchaynhat' => $spbanchaynhat]);
    }
}
