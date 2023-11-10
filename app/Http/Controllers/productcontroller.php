<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\baseproductInterface;
use App\Models\product;
use Illuminate\Support\Facades\Redis;
use Predis\Client;



class productcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $product;
    public function __construct(baseproductInterface $baseproduct){
        $this->product = $baseproduct;
    }

    
    
    public function index()
    {
         
            $dulieu = $this->product->hoan();

            return response()->json($dulieu);
        }
    
    

    public function phimmoicapnhat(){
        $cachedData = Redis::get('phimmoicapnhat');
    
        if ($cachedData !== null) {
            // Data is cached, return it directly
            return $cachedData;
        } else {
            // Data is not cached, fetch it from the database
            $dulieu = $this->product->phimmoicapnhat();
            
            // Cache the data in Redis for future use
            Redis::setex('phimmoicapnhat',600, $dulieu);
    
            return $dulieu;
        }
    }

    public function phimbomoi(){
        $dulieu = $this->product->phimbomoi();
        return response()->json($dulieu);
    }

    public function phimnetflix(){
        $dulieu = $this->product->phimnetflix();
        return response()->json($dulieu);
    }

    public function phimchieurap(){
        $dulieu = $this->product->phimchieurap();
        return response()->json($dulieu);
    }

    public function phimkinhdi(){
        $dulieu = $this->product->phimkinhdi();
        return response()->json($dulieu);
    }

    public function phimvientuong(){
        $dulieu = $this->product->phimvientuong();
        return response()->json($dulieu);
    }

    public function phimhoathinh(){
        $dulieu = $this->product->phimhoathinh();
        return response()->json($dulieu);
    }

    public function phimtinhcamlangman()
    {
        $cachedData = Redis::get('tclm');
    
        if ($cachedData !== null) {
            // Data is cached, return it directly
            return $cachedData;
        } else {
            // Data is not cached, fetch it from the database
            $dulieu = $this->product->phimtinhcamlangman();
            
            // Cache the data in Redis for future use
            Redis::setex('tclm',600, $dulieu);
    
            return $dulieu;
        }
    }
    

    public function theloaiphimhanhdong(){
        $cachedData = Redis::get('theloaiphimhanhdong');
    
        if ($cachedData !== null) {
            // Data is cached, return it directly
            return $cachedData;
        } else {
            // Data is not cached, fetch it from the database
            $dulieu = $this->product->theloaiphimhanhdong();
            
            // Cache the data in Redis for future use
            Redis::setex('theloaiphimhanhdong',600, $dulieu);
    
            return $dulieu;
        }
    }

    public function theloaiphimtinhcamlangman(){
        $cachedData = Redis::get('theloaiphimtinhcamlangman');
    
        if ($cachedData !== null) {
            // Data is cached, return it directly
            return $cachedData;
        } else {
            // Data is not cached, fetch it from the database
            $dulieu = $this->product->theloaiphimtinhcamlangman();
            
            // Cache the data in Redis for future use
            Redis::setex('theloaiphimtinhcamlangman',600, $dulieu);
    
            return $dulieu;
        }
    }

    public function theloaiphimchientranh(){
        $cachedData = Redis::get('theloaiphimchientranh');
    
        if ($cachedData !== null) {
            // Data is cached, return it directly
            return $cachedData;
        } else {
            // Data is not cached, fetch it from the database
            $dulieu = $this->product->theloaiphimchientranh();
            
            // Cache the data in Redis for future use
            Redis::setex('theloaiphimchientranh',600, $dulieu);
    
            return $dulieu;
        }
    }

    public function theloaiphimphieuluu(){
        $cachedData = Redis::get('theloaiphimphieuluu');
    
        if ($cachedData !== null) {
            // Data is cached, return it directly
            return $cachedData;
        } else {
            // Data is not cached, fetch it from the database
            $dulieu = $this->product->theloaiphimphieuluu();
            
            // Cache the data in Redis for future use
            Redis::setex('theloaiphimphieuluu',600, $dulieu);
    
            return $dulieu;
        }
    }

    public function theloaiphimhaihuoc(){
        $cachedData = Redis::get('theloaiphimhaihuoc');
    
        if ($cachedData !== null) {
            // Data is cached, return it directly
            return $cachedData;
        } else {
            // Data is not cached, fetch it from the database
            $dulieu = $this->product->theloaiphimhaihuoc();
            
            // Cache the data in Redis for future use
            Redis::setex('theloaiphimhaihuoc',600, $dulieu);
    
            return $dulieu;
        }
    }

    public function theloaiphimvientuong(){
        $cachedData = Redis::get('theloaiphimvientuong');
    
        if ($cachedData !== null) {
            // Data is cached, return it directly
            return $cachedData;
        } else {
            // Data is not cached, fetch it from the database
            $dulieu = $this->product->theloaiphimvientuong();
            
            // Cache the data in Redis for future use
            Redis::setex('theloaiphimvientuong',600, $dulieu);
    
            return $dulieu;
        }
    }

    public function theloaiphimcotrang(){
        $cachedData = Redis::get('theloaiphimcotrang');
    
        if ($cachedData !== null) {
            // Data is cached, return it directly
            return $cachedData;
        } else {
            // Data is not cached, fetch it from the database
            $dulieu = $this->product->theloaiphimcotrang();
            
            // Cache the data in Redis for future use
            Redis::setex('theloaiphimcotrang',600, $dulieu);
    
            return $dulieu;
        }
    }

    public function theloaiphimhoathinh(){
        $cachedData = Redis::get('theloaiphimhoathinh');
    
        if ($cachedData !== null) {
            // Data is cached, return it directly
            return $cachedData;
        } else {
            // Data is not cached, fetch it from the database
            $dulieu = $this->product->theloaiphimhoathinh();
            
            // Cache the data in Redis for future use
            Redis::setex('theloaiphimhoathinh',600, $dulieu);
    
            return $dulieu;
        }
    }


    public function theloaiphimkinhdi(){
        $cachedData = Redis::get('theloaiphimkinhdi');
    
        if ($cachedData !== null) {
            // Data is cached, return it directly
            return $cachedData;
        } else {
            // Data is not cached, fetch it from the database
            $dulieu = $this->product->theloaiphimkinhdi();
            
            // Cache the data in Redis for future use
            Redis::setex('theloaiphimkinhdi',600, $dulieu);
    
            return $dulieu;
        }
    }


    public function theloaiphimhinhsu(){
        $cachedData = Redis::get('theloaiphimhinhsu');
    
        if ($cachedData !== null) {
            // Data is cached, return it directly
            return $cachedData;
        } else {
            // Data is not cached, fetch it from the database
            $dulieu = $this->product->theloaiphimhinhsu();
            
            // Cache the data in Redis for future use
            Redis::setex('theloaiphimhinhsu',600, $dulieu);
    
            return $dulieu;
        }
    }


    public function theloaiphimhoihopgaycan(){
        $cachedData = Redis::get('theloaiphimhoihopgaycan');
    
        if ($cachedData !== null) {
            // Data is cached, return it directly
            return $cachedData;
        } else {
            // Data is not cached, fetch it from the database
            $dulieu = $this->product->theloaiphimhoihopgaycan();
            
            // Cache the data in Redis for future use
            Redis::setex('theloaiphimhoihopgaycan',600, $dulieu);
    
            return $dulieu;
        }
    }


    public function theloaiphimtamly(){
        $cachedData = Redis::get('theloaiphimtamly');
    
        if ($cachedData !== null) {
            // Data is cached, return it directly
            return $cachedData;
        } else {
            // Data is not cached, fetch it from the database
            $dulieu = $this->product->theloaiphimtamly();
            
            // Cache the data in Redis for future use
            Redis::setex('theloaiphimtamly',600, $dulieu);
    
            return $dulieu;
        }
    }


    public function theloaiphimle(){
        $cachedData = Redis::get('theloaiphimle');
    
        if ($cachedData !== null) {
            // Data is cached, return it directly
            return $cachedData;
        } else {
            // Data is not cached, fetch it from the database
            $dulieu = $this->product->theloaiphimle();
            
            // Cache the data in Redis for future use
            Redis::setex('theloaiphimle',600, $dulieu);
    
            return $dulieu;
        }
    }


    public function theloaiphimchieurap(){
        $cachedData = Redis::get('theloaiphimchieurap');
    
        if ($cachedData !== null) {
            // Data is cached, return it directly
            return $cachedData;
        } else {
            // Data is not cached, fetch it from the database
            $dulieu = $this->product->theloaiphimchieurap();
            
            // Cache the data in Redis for future use
            Redis::setex('theloaiphimchieurap',600, $dulieu);
    
            return $dulieu;
        }
    }


    public function theloaiphimnetflix(){
        $cachedData = Redis::get('theloaiphimnetflix');
    
        if ($cachedData !== null) {
            // Data is cached, return it directly
            return $cachedData;
        } else {
            // Data is not cached, fetch it from the database
            $dulieu = $this->product->theloaiphimnetflix();
            
            // Cache the data in Redis for future use
            Redis::setex('theloaiphimnetflix',600, $dulieu);
    
            return $dulieu;
        }
    }

    public function theloaiphimbomy(){
        $cachedData = Redis::get('theloaiphimbomy');
    
        if ($cachedData !== null) {
            // Data is cached, return it directly
            return $cachedData;
        } else {
            // Data is not cached, fetch it from the database
            $dulieu = $this->product->theloaiphimbomy();
            
            // Cache the data in Redis for future use
            Redis::setex('theloaiphimbomy',600, $dulieu);
    
            return $dulieu;
        }
    }

    public function theloaiphimbohanquoc(){
        $cachedData = Redis::get('theloaiphimbohanquoc');
    
        if ($cachedData !== null) {
            // Data is cached, return it directly
            return $cachedData;
        } else {
            // Data is not cached, fetch it from the database
            $dulieu = $this->product->theloaiphimbohanquoc();
            
            // Cache the data in Redis for future use
            Redis::setex('theloaiphimbohanquoc',600, $dulieu);
    
            return $dulieu;
        }
    }

    public function theloaiphimbotrungquoc(){
        $cachedData = Redis::get('theloaiphimbotrungquoc');
    
        if ($cachedData !== null) {
            // Data is cached, return it directly
            return $cachedData;
        } else {
            // Data is not cached, fetch it from the database
            $dulieu = $this->product->theloaiphimbotrungquoc();
            
            // Cache the data in Redis for future use
            Redis::setex('theloaiphimbotrungquoc',600, $dulieu);
    
            return $dulieu;
        }
    }

    public function theloaiphimvietnam(){
        $cachedData = Redis::get('theloaiphimvietnam');
    
        if ($cachedData !== null) {
            // Data is cached, return it directly
            return $cachedData;
        } else {
            // Data is not cached, fetch it from the database
            $dulieu = $this->product->theloaiphimvietnam();
            
            // Cache the data in Redis for future use
            Redis::setex('theloaiphimvietnam',600, $dulieu);
    
            return $dulieu;
        }
    }

    public function imagedetail($slug){
        $img = $this->product->imgdetail($slug);
        return response()->json($img);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
      

        
        $ktra = $request['Name'];
        $dulieudatontai = product::where('Name',$ktra)->first();
        if($dulieudatontai){
           return response()->json(['error'=>'error']);
        }
        else{
        $data = new product;
        $data->Name = $request['Name'];
        $data->phimhanhdong = $request['phimhanhdong'];
        $data->phimtinhcamlangman = $request['phimtinhcamlangman'];
        $data->phimchientranh = $request['phimchientranh'];
        $data->phimphieuluu = $request['phimphieuluu'];
        $data->phimhaihuoc = $request['phimhaihuoc'];
        $data->phimvientuong = $request['phimvientuong'];
        $data->phimcotrang = $request['phimcotrang'];
        $data->hoathinh = $request['hoathinh'];
        $data->kinhdi = $request['kinhdi'];
        $data->phimhinhsu = $request['phimhinhsu'];
        $data->phimhoihopgaycan = $request['phimhoihopgaycan'];
        $data->phimtamly = $request['phimtamly'];
        $data->phimle = $request['phimle'];
        $data->phimchieurap = $request['phimchieurap'];
        $data->phimnetflix = $request['phimnetflix'];
        $data->phimbomy = $request['phimbomy'];
        $data->phimbohanquoc = $request['phimbohanquoc'];
        $data->phimbotrungquoc = $request['phimbotrungquoc'];
        $data->phimvietnam = $request['phimvietnam'];
        
    


       
    
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('upload'), $imageName);
            $data['image'] = $imageName; // Thêm tên hình ảnh vào dữ liệu
        }
         
    
        $data->save();
        
        return response()->json(['message' => 'success']);
    }
    }
    

  

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       $dulieusua = product::find($id);
       $dulieusua -> Name = $request['Name'];
       $dulieusua -> id = $request['id'];

       $dulieusua -> image = $request['image'];

       $dulieusua->save();

        return response()->json([$dulieusua]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dulieuxoa = $this->product->delete($id);

        return response()->json(['message'=>'xóa thành công']);
    }

    public function search($slug){
        $dulieu = $this->product->searchfilm($slug);
        return response()->json($dulieu);
    }
 
}
