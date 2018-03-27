<h1> WE 100 App</h1>
<hr>
<h3> USER Module </h3>
<b>End Points</b>
<br/>
1 - link : <a href="#"> https://we100.we-champions.com/api/v1/register </a> &nbsp; |  method: <b>POST</b> <br><br>
data : [{<br/>
             'name' => $request->name,<br/>
            'username' => $request->username,<br/>
            'email' => $request->email,<br/>
            'gender' => $request->gender, gender accept 0 for male and 1 for female<br/>
            'height' => $request->height,<br/>
            'weight' => $request->weight,<br/>
            'bmi' => $request->bmi,<br/>
            'country' => $request->country,<br/>
            'password' => bcrypt($request->password)<br/>
}]
<br/>
response : [{<br/>
  'data': 'registration success',<br>
  'state' : 1 
<br/>}]

Validation: <br>
            'name' => 'required|string|max:255',<br>
            'username' => 'required|string|max:255|unique:users',<br>
            'email' => 'required|string|email|max:255|regex:/(.*)@merckgroup\.com/i|unique',<br>
            'password' => 'required|string|min:6|confirmed',<br>
