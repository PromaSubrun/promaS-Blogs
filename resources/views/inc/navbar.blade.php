<header class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-body border-bottom shadow-sm">
</br></br>
   <nav class="my-2 my-md-0 me-md-3">
      <div class="site-navigation-inner site-container">
         <a href="{{ route('home') }}"><img src= "./images/SadiaSubrunLogo.png" alt="site logo" length="70px" width="70px"></a>
			<div class="main-navigation">
            <ul class="main-navigation__ul">
               <li><a class="p-2 text-dark" href="{{ route('about') }}">About</a></li>
               <li><a class="p-2 text-dark" href="{{ route('services')}}">Services</a></li>
               <li><a class="p-2 text-dark" href="{{ route('posts.index') }}">Blog</a></li>
			   <li><a href="{{ route('posts.create') }}" class="btn btn-sm btn-primary">Create Post</a></li>
               <li><a class="p-2 text-dark" href="{{ route('contact') }}">Contact</a></li>
			   <li><a class="btn btn-outline-primary" href="{{ route('home') }}">Sign in</a></li>
            </ul>
			</div>
			<div id="myBtn" class="burger-container" onclick="myFunction(this)">
				<div class="bar1"></div>
				<div class="bar2"></div>
				<div class="bar3"></div>
			</div>
			<script>
				function myFunction(x) {
					x.classList.toggle("change");
				}
			</script>
      </div>
	</nav>

</header>