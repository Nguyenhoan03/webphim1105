<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\basedetailfilmInterface;
use App\Models\detailfilm;
use App\Models\product;
use App\Models\category;

class detailfilmcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $detailfilm;
public function __construct(basedetailfilmInterface $basedetailfilm){
     $this->detailfilm = $basedetailfilm;
}

    public function index()
    {
        $alldulieu = $this->detailfilm->layalldulieu();
        return response()->json($alldulieu);
    }

    public function detailfilm($slug){
        $dulieu = $this->detailfilm->detailfilm($slug);
        return response()->json($dulieu);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    { 
       $data = new detailfilm;
       $data->title = $request['title'];
       $data->nameenglish = $request['nameenglish'];
       $data->moicapnhat = $request['moicapnhat'];
       $data->tinhtrang = $request['tinhtrang'];
       $data->nam = $request['nam'];
       $data->theloai = $request['theloai'];
       $data->quocgia = $request['quocgia'];
       $data->daodien = $request['daodien'];
       $data->dienvien = $request['dienvien'];
       $data->thoiluong = $request['thoiluong'];
       $data->descripts = $request['descripts'];
       $data->product_id = $request['product_id'];

       $data->save();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $dulieusua = detailfilm::find($id);
        $dulieusua -> nameenglish = $request['nameenglish'];
        $dulieusua -> moicapnhat = $request['moicapnhat'];
        $dulieusua -> tinhtrang = $request['tinhtrang'];
        $dulieusua -> nam = $request['nam'];
        $dulieusua -> theloai = $request['theloai'];
        $dulieusua -> quocgia = $request['quocgia'];
        $dulieusua -> daodien = $request['daodien'];
        $dulieusua -> dienvien = $request['dienvien'];
        $dulieusua -> thoiluong = $request['thoiluong'];
        $dulieusua -> descripts = $request['descripts'];
 
  
 
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
        $dulieuxoa = $this->detailfilm->delete($id);
        return response()->json(['message'=>'xóa thành công']);
    }
    public function dulieuadmin(){
        $theloaifilm = category::count();
        $film = product::count();
        $tongfilmlecr = detailfilm::where('tinhtrang','Full')->count();
       

        // dd($theloaifilm);
        $data = [
            'theloaifilm'=>$theloaifilm,
            'film'=>$film,
            'tongfilmlecr'=>$tongfilmlecr,
         
        ];
        return response()->json($data);
    }
}
