<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\User;

class FrontendController extends Controller
{
	public function index(){
    	return view('index');
    }

    public function signin(){
        return view('signin');
    }

    public function signup(Request $request){
        if (Request()->isMethod('post')) {
            $validated = $request->validate([
                'name' => 'required|max:255',
                'email' => 'required|email|unique:users',
                'password' => 'required|min:4',
            ]);

        }
        return view('signup');
    }
    public function about(){
    	return view('about');
    }

    public function adds(){
        $email = env('COGNITO_EMAIL');
         $password = env('COGNITO_PASSWORD');
         $response = Http::post('https://api.afterlib.com/login', [
         'email' => $email,
         'password' => $password,
         ]);

         $auth_token = $response->json()['auth_token'];

         $ads = Http::post('https://api.afterlib.com/ads', [
         'auth_token' => $auth_token,
         ]);
         // dd(json_decode($ads,true));
            $adds = json_decode($ads,true);
            $alladds = $adds['data']; 
         // return $ads->json()['data'];
            // dd($alladds);
        return view('adds',compact('alladds'));
    }

    public function store(){

         $curl = curl_init();
curl_setopt_array($curl, array(
CURLOPT_URL => 'https://nichescraper.com/includes/StoreProductHandler.php',
CURLOPT_RETURNTRANSFER => true,
CURLOPT_ENCODING => '',
CURLOPT_MAXREDIRS => 10,
CURLOPT_TIMEOUT => 0,
CURLOPT_FOLLOWLOCATION => true,
CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
CURLOPT_CUSTOMREQUEST => 'POST',
CURLOPT_POSTFIELDS => array('website' => 'https://godmerch.com','token' =>
'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6Im1hdmVyaWNrNzk4MTI0In0.0pn7oTRjTM-ZUy0i44KzBGogACGL4
NBctzU8FunObIw'),
CURLOPT_HTTPHEADER => array(
'Accept: application/json',
'Cookie: PHPSESSID=atj17m2na7gmee2kunii6r9sl4; landing_page=scraper; _fbp=fb.1.1698434891180.1501415036;
_gcl_au=1.1.200900123.1698434892; _ga_5LTX1FCFYE=GS1.1.1698779143.3.1.1698779253.0.0.0;
_ga=GA1.2.2089676244.1698434892; site_referral=https%3A%2F%2Fnichescraper.com%2Flogin.php;
_rdt_uuid=1698434942697.49e1fe19-675c-4de1-9456-fb536d74fceb; seen_scraper_proof_count=2;
_gid=GA1.2.483008590.1698779145; _gat_gtag_UA_119814666_1=1; email=sarmad.butt977%40gmail.com;
temp_token=c7479dab5461f0b0ecd5ed9778f821d9fb3e39ebbfc103298eff5566732562c7b8cc24e067baa443441003
bb5c25ffdda95f675c3fbf4c6a855fb391b7a27714; _uetsid=7db27b40782011ee889ec5b534852e15;
_uetvid=15ffe92074ff11ee81fdc3e8e3703a58',
'Content-Type: application/json'
),
));
$response = curl_exec($curl);
curl_close($curl);
echo $response;
dd($response);
        return view('adds',compact('alladds'));
    }

    public function product_update(){
        $email = env('COGNITO_EMAIL');
         $password = env('COGNITO_PASSWORD');
         $response = Http::post('https://cognito-idp.useast-1.amazonaws.com', [
         "AuthFlow" => "USER_SRP_AUTH",
         "AUTH_PARAMETERS" => [
         "USERNAME" => $email,
         "PASSWORD" => $password
         ],
         "ClientId" => "5smj62slr8j2ejqoja4uq0o40u"
         ]);
         $accesstoken = $response->json()['AccessToken'];
         $apiURL = 'https://app.shophunter.io/prod/staff/product-updates';
         $data = Http::post($apiURL, [
         'AccessToken' => $accesstoken,
        8
         ]);
         return $data->json();
    }

    public function earning(){
    	return view('earning');
    }

    public function testimonial(){
    	return view('testimonial');
    }

    public function support(){
    	return view('support');
    }

    public function contact(){
    	return view('contact');
    }

    public function pricing(){
        return view('pricing');
    }
}
