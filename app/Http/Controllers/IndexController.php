<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Admin\BaseController;
use App\Http\Requests\IndexRequest;
use App\Http\Requests\CSKHRequest;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        $cateMenu = DB::table('category')->where('type','sanpham')->limit(9)->get();
        $spbanchay = DB::table('product')->select('*',DB::raw('round(AVG(danhgia),2) as danhgia'))
        ->join('feedback','product.id','feedback.sanpham')->groupBy('tensanpham')
        ->limit(4)->get();
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
            $product=DB::table('product')->select('*',DB::raw('round(AVG(danhgia),2) as danhgia'))
            ->join('feedback','product.id','feedback.sanpham')->groupBy('tensanpham')
            ->where('theloai',$category->id)->limit(4)->get();
            $new=$queryNew
                            ->where('theloai',$category->id)->limit(4)
                            ->get();
            $cate['new']=$new;
            $cate['isHidden']=$category->hidden;
            $cate['sanpham'] = $product;
            $danhsach[]=$cate;
            // dd($cate);
        }
        $temp=[];
        foreach ($danhsach as $item)
        {
            if($item['type']=='sanpham')
            {
                $temp[]=$item;
            }
        }
        // dd($danhsach)    ;
        return view('website/welcome')->with(['danhsach'=>$danhsach,
                                      'spbanchay' =>$spbanchay,
                                       'cateMenu' =>$cateMenu,
                                        'sanpham' => $temp]);
    }

    public function detailCategory($id){
        $cateMenu = DB::table('category')->where('type','sanpham')->limit(9)->get();
        $spbanchay = DB::table('product')->limit(4)->get();
        $spbanchaynhat = DB::table('product')->select('*',DB::raw('round(AVG(danhgia),2) as danhgia'))
        ->join('feedback','product.id','feedback.sanpham')
        ->limit(1)->first();
        
        $product_category = DB::table('category')->select('*',DB::raw('round(AVG(danhgia),2) as danhgia'))
        ->join('product','category.id','product.theloai')
        ->join('feedback','product.id','feedback.sanpham')->groupBy('tensanpham')
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
                        ->where('product.id',$idsanpham->id)->orderBy('feedback.created_at','desc')->limit(4)
                        ->get();
        $chitietsanpham = DB::table('product')
                ->select('*','category.tentheloai as tentheloai', 'product.id as prodid')
                ->join('category','product.theloai','category.id')
                ->where('tensanpham',$id)
                ->first();
        $spbanchay = DB::table('product')->limit(4)->get();
        $spbanchaynhat = DB::table('product')->limit(1)->first();
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

    public function filter($tentheloai, $range)
    {

        $cateMenu = DB::table('category')->where('type','sanpham')->limit(9)->get();
        $spbanchay = DB::table('product')->limit(4)->get();
        $spbanchaynhat = DB::table('product')->select('*',DB::raw('round(AVG(danhgia),2) as danhgia'))
        ->join('feedback','product.id','feedback.sanpham')->groupBy('tensanpham')
        ->limit(1)->first();
        $sanpham = [];
        switch ($range)
        {
            case 7:
                $sanpham = DB::table('product')->select('*',DB::raw('round(AVG(danhgia),2) as danhgia'))
                ->join('feedback','product.id','feedback.sanpham')->groupBy('tensanpham')
                ->join('category','product.theloai','category.id')
                ->where('giasanpham','<=',7000000)
                ->where('tentheloai',$tentheloai)
                ->get();
                return view('website/modules/detailCategory/detailCategoryFilter')->with(['product_category' => $sanpham,
                'spbanchay' => $spbanchay,
                    'cateMenu' => $cateMenu,
                'spbanchaynhat' => $spbanchaynhat,
                'tentheloai' => $tentheloai]);
                
            case 710:
                $sanpham = DB::table('product')->select('*',DB::raw('round(AVG(danhgia),2) as danhgia'))
                ->join('feedback','product.id','feedback.sanpham')->groupBy('tensanpham')
                ->whereBetween('giasanpham',[7000000,10000000])
                ->join('category','product.theloai','category.id')
                ->where('tentheloai',$tentheloai)
                ->get();
                return view('website/modules/detailCategory/detailCategoryFilter')->with(['product_category' => $sanpham,
                'spbanchay' => $spbanchay,
                    'cateMenu' => $cateMenu,
                'spbanchaynhat' => $spbanchaynhat,
                'tentheloai' => $tentheloai]);
                
            case 1012:
                $sanpham = DB::table('product')->select('*',DB::raw('round(AVG(danhgia),2) as danhgia'))
                ->join('feedback','product.id','feedback.sanpham')->groupBy('tensanpham')
                ->whereBetween('giasanpham',[10000000,12000000])->join('category','product.theloai','category.id')
                ->where('tentheloai',$tentheloai)
                ->get();
                return view('website/modules/detailCategory/detailCategoryFilter')->with(['product_category' => $sanpham,
                'spbanchay' => $spbanchay,
                    'cateMenu' => $cateMenu,
                'spbanchaynhat' => $spbanchaynhat,
                'tentheloai' => $tentheloai]);

            case 1215:
                $sanpham = DB::table('product')->select('*',DB::raw('round(AVG(danhgia),2) as danhgia'))
                ->join('feedback','product.id','feedback.sanpham')->groupBy('tensanpham')
                ->whereBetween('giasanpham',[12000000,15000000])->join('category','product.theloai','category.id')
                ->where('tentheloai',$tentheloai)
                ->get();
                return view('website/modules/detailCategory/detailCategoryFilter')->with(['product_category' => $sanpham,
                'spbanchay' => $spbanchay,
                    'cateMenu' => $cateMenu,
                'spbanchaynhat' => $spbanchaynhat,
                'tentheloai' => $tentheloai]);
                
            case 1525:
                $sanpham = DB::table('product')->select('*',DB::raw('round(AVG(danhgia),2) as danhgia'))
                ->join('feedback','product.id','feedback.sanpham')->groupBy('tensanpham')
                ->whereBetween('giasanpham',[15000000,25000000])->join('category','product.theloai','category.id')
                ->where('tentheloai',$tentheloai)
                ->get();
                return view('website/modules/detailCategory/detailCategoryFilter')->with(['product_category' => $sanpham,
                'spbanchay' => $spbanchay,
                    'cateMenu' => $cateMenu,
                'spbanchaynhat' => $spbanchaynhat,
                'tentheloai' => $tentheloai]);
            
            case 'macdinh':
                $sanpham = DB::table('product')->select('*',DB::raw('round(AVG(danhgia),2) as danhgia'))
                ->join('feedback','product.id','feedback.sanpham')->groupBy('tensanpham')
                ->join('category','product.theloai','category.id')
                ->where('tentheloai',$tentheloai)
                ->get();
                return view('website/modules/detailCategory/detailCategoryFilter')->with(['product_category' => $sanpham,
                'spbanchay' => $spbanchay,
                    'cateMenu' => $cateMenu,
                'spbanchaynhat' => $spbanchaynhat,
                'tentheloai' => $tentheloai]);
            
            case 'moinhat':
                $sanpham = DB::table('product')->select('*',DB::raw('round(AVG(danhgia),2) as danhgia'))
                ->join('feedback','product.id','feedback.sanpham')->groupBy('tensanpham')
                ->join('category','product.theloai','category.id')
                ->where('tentheloai',$tentheloai)->orderBy('product.created_at','desc')
                ->get();
                return view('website/modules/detailCategory/detailCategoryFilter')->with(['product_category' => $sanpham,
                'spbanchay' => $spbanchay,
                    'cateMenu' => $cateMenu,
                'spbanchaynhat' => $spbanchaynhat,
                'tentheloai' => $tentheloai]);
            
            case 'thapcao':
                $sanpham = DB::table('product')->select('*',DB::raw('round(AVG(danhgia),2) as danhgia'))
                ->join('feedback','product.id','feedback.sanpham')->groupBy('tensanpham')
                ->orderBy('giasanpham','asc')->join('category','product.theloai','category.id')
                ->where('tentheloai',$tentheloai)
                ->get();
                return view('website/modules/detailCategory/detailCategoryFilter')->with(['product_category' => $sanpham,
                'spbanchay' => $spbanchay,
                    'cateMenu' => $cateMenu,
                'spbanchaynhat' => $spbanchaynhat,
                'tentheloai' => $tentheloai]);

            case 'caothap':
                $sanpham = DB::table('product')->select('*',DB::raw('round(AVG(danhgia),2) as danhgia'))
                ->join('feedback','product.id','feedback.sanpham')->groupBy('tensanpham')
                ->orderBy('giasanpham','desc')->join('category','product.theloai','category.id')
                ->where('tentheloai',$tentheloai)
                ->get();
                return view('website/modules/detailCategory/detailCategoryFilter')->with(['product_category' => $sanpham,
                'spbanchay' => $spbanchay,
                    'cateMenu' => $cateMenu,
                'spbanchaynhat' => $spbanchaynhat,
                'tentheloai' => $tentheloai]);

        }
       
        
    }

    public function cskh(CSKHRequest $request){
        DB::table('cskh')->insert($request->except('_token','tensanpham'));
        return redirect()->back()->with(['cskh_success' => 'Thông tin đã được gửi đến tổng đài viên, cảm ơn quý khách']);
    }

    public function danhgia( IndexRequest $request){
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
        return redirect()->back()->with(['feedback_success' => 'Xin cảm ơn quý khách']);
    }
    public function sanphambanchay(){
        $cateMenu = DB::table('category')->where('type','sanpham')->limit(9)->get();
        $spbanchay = DB::table('product')->limit(4)->get();
        $spbanchaynhat = DB::table('product')->select('*',DB::raw('round(AVG(danhgia),2) as danhgia'))
        ->join('feedback','product.id','feedback.sanpham')
        ->limit(1)->first();
        $categories = DB::table('category')->where('type','sanpham')->get();
        foreach($categories as $category)
        {
            $cate['id']=$category->id;
            $cate['name']=$category->tentheloai;
            $cate['icon']=$category->icon;
            $cate['type']=$category->type;
            $product=DB::table('product')->select('*',DB::raw('round(AVG(danhgia),2) as danhgia'))
                        ->where('theloai',$category->id)
                        ->join('feedback','product.id','feedback.sanpham')
                        ->groupBy('tensanpham')
                        ->get();
            $cate['isHidden']=$category->hidden;
            $cate['sanpham'] = $product;
            $danhsach[]=$cate;
        }
        return view('website/modules/detailCategory/detailBanchay')
                ->with(['product_category' => $danhsach,
                        'spbanchay' => $spbanchay,
                        'cateMenu' => $cateMenu,
                        'spbanchaynhat' => $spbanchaynhat,
                        ]);
    }

    public function filterBanChay($range){
        $cateMenu = DB::table('category')->where('type','sanpham')->limit(9)->get();
        $spbanchay = DB::table('product')->limit(4)->get();
        $spbanchaynhat = DB::table('product')->select('*',DB::raw('round(AVG(danhgia),2) as danhgia'))
        ->join('feedback','product.id','feedback.sanpham')->groupBy('tensanpham')
        ->limit(1)->first();
        $sanpham = [];
        switch ($range)
        {
            case 7:
                $sanpham = DB::table('product')->select('*',DB::raw('round(AVG(danhgia),2) as danhgia'))
                ->join('feedback','product.id','feedback.sanpham')->groupBy('tensanpham')
                ->where('giasanpham','<=',7000000)
                ->get();
                // dd($sanpham);
                return view('website/modules/detailCategory/detailCategoryFilterBanChay')->with(['product_category' => $sanpham,
                'spbanchay' => $spbanchay,
                    'cateMenu' => $cateMenu,
                'spbanchaynhat' => $spbanchaynhat,
                ]);
                
            case 710:
                $sanpham = DB::table('product')->select('*',DB::raw('round(AVG(danhgia),2) as danhgia'))
                ->join('feedback','product.id','feedback.sanpham')->groupBy('tensanpham')
                ->whereBetween('giasanpham',[7000000,10000000])
                ->get();
                return view('website/modules/detailCategory/detailCategoryFilterBanChay')->with(['product_category' => $sanpham,
                'spbanchay' => $spbanchay,
                    'cateMenu' => $cateMenu,
                'spbanchaynhat' => $spbanchaynhat,
                ]);
                
            case 1012:
                $sanpham = DB::table('product')->select('*',DB::raw('round(AVG(danhgia),2) as danhgia'))
                ->join('feedback','product.id','feedback.sanpham')->groupBy('tensanpham')
                ->whereBetween('giasanpham',[10000000,12000000])
                ->get();
                return view('website/modules/detailCategory/detailCategoryFilterBanChay')->with(['product_category' => $sanpham,
                'spbanchay' => $spbanchay,
                    'cateMenu' => $cateMenu,
                'spbanchaynhat' => $spbanchaynhat,
                ]);

            case 1215:
                $sanpham = DB::table('product')->select('*',DB::raw('round(AVG(danhgia),2) as danhgia'))
                ->join('feedback','product.id','feedback.sanpham')->groupBy('tensanpham')
                ->whereBetween('giasanpham',[12000000,15000000])
                ->get();
                return view('website/modules/detailCategory/detailCategoryFilterBanChay')->with(['product_category' => $sanpham,
                'spbanchay' => $spbanchay,
                    'cateMenu' => $cateMenu,
                'spbanchaynhat' => $spbanchaynhat,
                ]);
                
            case 1525:
                $sanpham = DB::table('product')->select('*',DB::raw('round(AVG(danhgia),2) as danhgia'))
                ->join('feedback','product.id','feedback.sanpham')->groupBy('tensanpham')
                ->whereBetween('giasanpham',[15000000,25000000])
                ->get();
                return view('website/modules/detailCategory/detailCategoryFilterBanChay')->with(['product_category' => $sanpham,
                'spbanchay' => $spbanchay,
                    'cateMenu' => $cateMenu,
                'spbanchaynhat' => $spbanchaynhat,
                ]);
            
            case 'macdinh':
                $sanpham = DB::table('product')->select('*',DB::raw('round(AVG(danhgia),2) as danhgia'))
                ->join('feedback','product.id','feedback.sanpham')->groupBy('tensanpham')
                ->get();
                return view('website/modules/detailCategory/detailCategoryFilterBanChay')->with(['product_category' => $sanpham,
                'spbanchay' => $spbanchay,
                    'cateMenu' => $cateMenu,
                'spbanchaynhat' => $spbanchaynhat,
                ]);
            
            case 'moinhat':
                $sanpham = DB::table('product')->select('*',DB::raw('round(AVG(danhgia),2) as danhgia'))
                ->join('feedback','product.id','feedback.sanpham')->groupBy('tensanpham')
                ->orderBy('product.created_at','desc')
                ->get();
                return view('website/modules/detailCategory/detailCategoryFilterBanChay')->with(['product_category' => $sanpham,
                'spbanchay' => $spbanchay,
                    'cateMenu' => $cateMenu,
                'spbanchaynhat' => $spbanchaynhat,
               ]);
            
            case 'thapcao':
                $sanpham = DB::table('product')->select('*',DB::raw('round(AVG(danhgia),2) as danhgia'))
                ->join('feedback','product.id','feedback.sanpham')->groupBy('tensanpham')
                ->orderBy('giasanpham','asc')
                ->get();
                return view('website/modules/detailCategory/detailCategoryFilterBanChay')->with(['product_category' => $sanpham,
                'spbanchay' => $spbanchay,
                    'cateMenu' => $cateMenu,
                'spbanchaynhat' => $spbanchaynhat,
               ]);

            case 'caothap':
                $sanpham = DB::table('product')->select('*',DB::raw('round(AVG(danhgia),2) as danhgia'))
                ->join('feedback','product.id','feedback.sanpham')->groupBy('tensanpham')
                ->orderBy('giasanpham','desc')
                ->get();
                return view('website/modules/detailCategory/detailCategoryFilterBanChay')->with(['product_category' => $sanpham,
                'spbanchay' => $spbanchay,
                    'cateMenu' => $cateMenu,
                'spbanchaynhat' => $spbanchaynhat,
                ]);;
        }
    }

    public function categoryNews($type){
        $news= DB::table('new')->select('*','new.created_at as newtime','new.id as newid')
                ->join('category','new.theloai','category.id')
                ->where('type',$type)
                ->get();
        $newposts = DB::table('new')->select('*')
                    ->join('category','new.theloai','category.id')
                    ->where('type','tintuc')->get();
        $sanphammoi = DB::table('product')->orderBy('created_at','desc')->limit(3)->get();
        $cateMenu = DB::table('category')->where('type','sanpham')->limit(9)->get();
        return view('website/modules/categoryNews/news')->with(['cateMenu' => $cateMenu,
                                                                'news' => $news,
                                                                'newposts' =>$newposts,
                                                            'sanphammoi'=>$sanphammoi]);
    }

    public function detailNews($id){
        $cateMenu = DB::table('category')->where('type','sanpham')->limit(9)->get();
        $sanphammoi = DB::table('product')->orderBy('created_at','desc')->limit(3)->get();
        $newposts = DB::table('new')->select('*','new.id as newid')
                    ->join('category','new.theloai','category.id')
                    ->where('type','tintuc')->get();
        $content = DB::table('new')->where('id',$id)->first();
        $relateNew = DB::table('new')->select('*','new.id as newid')
        ->join('category','new.theloai','category.id')
        ->where('type','tintuc')->get();
        return view('website/modules/detailNews/detailNews')->with(['cateMenu' => $cateMenu,
                                                                    'newposts' =>$newposts,
                                                                'sanphammoi'=>$sanphammoi,
                                                                'content' => $content,
                                                                'relateNew' => $relateNew]);
    }

    public function gioithieu(){
        $cateMenu = DB::table('category')->where('type','sanpham')->limit(9)->get();
        
        return view('website/modules/gioithieu/gioithieu')->with(['cateMenu' => $cateMenu,
                ]);
    }
}
