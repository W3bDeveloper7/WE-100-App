<h1> WE 100 App</h1>
<hr>
<h3> USER Module </h3>
<b>End Points</b>
<br/>
link : <a href="#"> https://we100.we-champions.com/api/v1/register </a> method: <b>POST</b> <br/>
data : [{
             'name' => $request->name,<br/>
            'username' => $request->username,<br/>
            'email' => $request->email,<br/>
            'gender' => $request->gender,<br/>
            'height' => $request->height,<br/>
            'weight' => $request->weight,<br/>
            'bmi' => $request->bmi,<br/>
            'country' => $request->country,<br/>
            'password' => bcrypt($request->password)<br/>
}]
