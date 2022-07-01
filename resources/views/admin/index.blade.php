@include('admin.auth.header')

    <div class="login-box">
	 <form action="" method="post">
	  <h1>Login</h1>
	 <div class="textbox">
	   <i class="fa fa-user"></i>
       <input type="text" name="username"  placeholder="Username" required autocomplete="off">
     </div>

	 <div class="textbox">
	  <i class="fa fa-lock"></i>
       <input type="password" name="password" placeholder="Password" required autocomplete="off">
     </div>

	 <input type="submit" name="submit" class="btn" value="Log In" >

	  </form>

	</div>

  @include('admin.auth.footer')
