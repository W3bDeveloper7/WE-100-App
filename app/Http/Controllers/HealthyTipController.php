<?php

namespace App\Http\Controllers;

use OneSignal;
use App\healthyTip;
use App\Http\Requests\CreateTipRequest;
use Illuminate\Http\Request;

class HealthyTipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tips = healthyTip::orderBy('created_at', 'DESC')->get();
        return view('tips.index', compact('tips'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('tips.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateTipRequest $request)
    {
        //
        $tip = healthyTip::create($request->all());
        OneSignal::sendNotificationCustom([
                'contents' => [
                    'en' => str_limit($request->body, 50),
                ],
                'headings' => [ 'en' => $request->title ],
                'data' => ['type'=>'healthyTips'],
                'include_player_ids' => [

                    'd2ef0531-c971-427d-b84a-296236802f14',
                ]
            ]);

        $tip->notifications()->create(['type'=>'healthyTips']);

        return redirect('/admin/healthyTips');
    }

    /**
     * Display the specified resource.
     *                    'd5fb141c-e648-4507-89cb-e7efb69deb49',
     * @param  \App\healthyTip  $healthyTip
     * @return \Illuminate\Http\Response
     */
    public function show(healthyTip $healthyTip)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\healthyTip  $healthyTip
     * @return \Illuminate\Http\Response
     */
    public function edit(healthyTip $healthyTip)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\healthyTip  $healthyTip
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, healthyTip $healthyTip)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\healthyTip  $healthyTip
     * @return \Illuminate\Http\Response
     */
    public function destroy($healthyTip)
    {
        //
        $healthyTip = healthyTip::find($healthyTip);

        $healthyTip->notifications()->delete();
        $healthyTip->delete();


        return redirect('admin/healthyTips');
    }
}
