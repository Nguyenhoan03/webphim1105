<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\xemphim;
use App\Repositories\basexemphimInterface;
class xemphimcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $xemphim;
    public function __construct(basexemphimInterface $basexemphim){
           $this->xemphim = $basexemphim;
    } 
    public function index()
    {
        $data = $this->xemphim->getallxemphim();

        return response()->json($data);
    }

    public function gettapfilm($slug){
        $data = $this->xemphim->gettapfilm($slug);

        return response()->json($data);
    }

    public function getxemphim($slug,$episode){
          $data = $this->xemphim->getxemphim($slug,$episode);

          return response()->json($data);
    } 
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
       $data = new xemphim;
       $data->titlefilm = $request['titlefilm'];
       $data->linkfilm = $request['linkfilm'];
       $data->episode = $request['episode'];
       $data->detailfilm_id = $request['detailfilm_id'];

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
       $dulieusua = xemphim::find($id);
       $dulieusua -> linkfilm = $request['linkfilm'];
       $dulieusua -> episode = $request['episode'];

       $dulieusua -> id = $request['id'];

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
        $dulieuxoa = $this->xemphim->delete($id);

        return response()->json(['message'=>'xóa thành công']);
    }
}
