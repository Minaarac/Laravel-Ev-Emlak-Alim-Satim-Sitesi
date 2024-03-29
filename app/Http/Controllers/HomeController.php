<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Image;
use App\Models\Message;
use App\Models\Product;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use MongoDB\Driver\Session;

class HomeController extends Controller
{
    public static function categoryList(){
        return Category::where('parent_id','=',0)->with('children')->get();
    }

    public static function getsetting(){
        return Setting::first();
    }

    public function index()
    {
        $setting = Setting::first();
        $slider = Product::select('id','title', 'image', 'price','description')->limit(4)->get();
        #$daily = Product::select('id','title', 'image', 'price','description')->limit(4)->get();
        $last = Product::select('id','title', 'image', 'price','description')->limit(4)->get();
        #print_r($slider);
        #exit();
        $data = [
            'setting' => $setting,
            'slider' => $slider,
            #'daily' => $daily,
            'last' => $last,
            'page' => 'home'

        ];
        return view('home.index',$data);
    }

    public function product($id){

        $data = Product::find($id);
        $datalist = Image::where('product_id',$id)->get();
        return view('home.product_detail',['data'=>$data,'datalist'=>$datalist]);
    }

    public function getproduct(Request $request){

        $data = Product::where('title',$request -> input('search'))->first();
        return redirect()->route('product',['id' => $data ->id]);
    }

    public function categoryproducts($id){

        $datalist = Product::where('category_id',$id)->get();
        $data = Category::find($id);
        #print_r($data);
        #exit();
        return view('home.category_products',['data'=>$data,'datalist'=>$datalist]);
    }

    public function aboutus(){

        $setting = Setting::first();
        return view('home.about',['setting'=>$setting]);
    }

    public function references(){

        $setting = Setting::first();
        return view('home.references',['setting'=>$setting]);
    }

    public function contact(){

        $setting = Setting::first();
        return view('home.contact',['setting'=>$setting]);
    }

    public function sendmessage(Request $request){
        $data=new Message();
        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->phone = $request->input('phone');
        $data->subject = $request->input('subject');
        $data->message= $request->input('message');

        $data->save();

        return redirect()->route('contact')->with('info','Mesajınız Kaydedilmiştir.');

        return view('home');
    }

    public function test($id,$name)
    {
        return view('home.test',['id'=>$id,'name'=>$name]);
        /*
        echo "Number".$id;
        for ($i=1;$i<=$id;$i++)
        {
            echo "<br> $i -- $name";
        }*/
    }
    public function login()
    {
        return view('admin.login');
    }
    public function logincheck(Request $request)
    {
        if($request->isMethod('post'))
        {
            $credentials = $request->only('email','password');
            if(Auth::attempt($credentials))
            {
                $request->session()->regenerate();
                return redirect()->intended('admin');
            }
            return back()->withErrors([
                'email'=>'The Provided credentials do not ']);
        }
        else
        {
            return view('admin.login');
        }

    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }


}
