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
<br>      
      
      
2 - link : <a href="#"> https://we100.we-champions.com/api/v1/login </a> &nbsp; |  method: <b>POST</b> <br><br>
data : [{<br/>
             
            'email' => $request->email, user can login with his email or username<br/>
            'password' => $request->password<br/>
}]
<br/>
response : [{<br/>
  "data": {
        "id": 1,<br>
        "country": "Egypt",<br>
        "program_id": 1,<br>
        "name": "Mahmoud Elbaz",<br>
        "username": "dolabeh",<br>
        "email": "adesouky@cat.com.eg",<br>
        "gender": 0,<br>
        "height": "176",<br>
        "weight": "90",<br>
        "bmi": "100",<br>
        "verified": 0,<br>
        "active": 0,<br>
        "admin": "true",<br>
        "created_at": "2018-03-21 14:20:45",<br>
        "updated_at": "2018-03-27 12:54:25",<br>
        "player_id": "dfdfd5454-fdfdf454-fdfd5f45",<br>
        "photos": [<br>
            {<br>
                "id": 1,<br>
                "path": "uploads/129067403_203005257121755_4161332549680889856_n.jpg",<br>
                "imageable_id": 1,<br>
                "imageable_type": "App\\User",<br>
                "created_at": "2018-03-22 11:09:33",<br>
                "updated_at": "2018-03-27 08:43:21"<br>
            }<br>
        ]<br>
    },<br>
    "state": "1"
<br/>}]

Validation: <br>
            'email' => 'required|string|email',<br>
            'password' => 'required|strin',<br>
            user can't login before admin set his status to active (0 inactive, 1 active)<br>

