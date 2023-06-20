<!DOCTYPE html>
<html>
    <head>
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic/assets.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100&display=swap" rel="stylesheet">

      <link rel="icon" type="image/x-icon" href="{{ asset('images/img.jpg') }}">   
      <title>NeuralCop</title>
      <link href="{{ asset('css/login.css') }}" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined" rel="stylesheet">

</head>
<body>
   

<div class="page">

    <div class="header">
    <a href="/" class="header-link">
        <img src="{{ asset('images/img.jpg') }}" class="header-img">
        <span  >NeuralCop</span>
    </a>

      <div class="header-left"> 
         
      </div>
    </div>


<div class="main-content">
  



	<div id="card">
		<div id="card-content">
		  <div id="card-title">
			<h2>LOGIN</h2>
			<div class="underline-title"></div>
		  </div>
		  <form method="post" class="form">
          @csrf
			<label for="user-email" style="padding-top:13px">
				&nbsp;Username
			  </label>
			<input id="user-email" class="form-content" type="text" name="email" autocomplete="on" required />
            <div class="form-border"></div>
            @error('email')
                <span class="invalidfeedback">
                {{ $message }}
                </span>
            @enderror
			<label for="user-password" style="padding-top:22px">&nbsp;Password
			  </label>
			<input id="user-password" class="form-content" type="password" name="password" required />
			<div class="form-border"></div>
            @error('password')
                <span class="invalidfeedback" >
                {{ $message }}
                </span>
            @enderror
                          
			<input id="submit-btn" type="submit" name="submit" value="LOGIN" />
		
		  </form>
		</div>
	  </div>


</div>




<div class="footer">
   Made by Team 7
</div>


</div>


</body>
</html>
