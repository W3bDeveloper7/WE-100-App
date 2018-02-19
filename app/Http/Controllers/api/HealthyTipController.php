<?php

namespace App\Http\Controllers\api;

use App\healthyTip;
use App\Http\Requests\CreateTipRequest;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;
use OneSignal;
class HealthyTipController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    use ApiResponser;
    public function index()
    {
        //
        if(empty($_GET['page']) || $_GET['page']==''){
            $tips = healthyTip::orderBY('id', 'desc')->get();
        }else{
            $tips = healthyTip::paginate(3);
            return response()->json(['data' => $tips, 'state' => 1], 200);
        }
        return $this->showAll($tips);
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateTipRequest $request)
    {

        $tip = healthyTip::create($request->all());

        OneSignal::sendNotificationCustom([
            'contents' => [
                'en' => str_limit($request->content, 50),
            ],
            'headings' => [ 'en' => $request->title ],
            'data' => ['type'=>'healthyTips'],
            'include_player_ids' => [

                'd2ef0531-c971-427d-b84a-296236802f14',
            ]
        ]);

        $tip->notifications()->create(['type'=>'healthyTips']);
        $foo = '';
        $image = base64_decode($foo);
        $fp = fopen('mypic.jpg','wb+');
        fwrite($fp,$image);
        fclose($fp);


        return response()->json(['message'=>'created Successfully', 'state'=>1]);
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
        $tip = healthyTip::findOrFail($id);

        return $this->showOne($tip);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
