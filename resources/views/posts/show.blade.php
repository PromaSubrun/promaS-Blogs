@extends('layouts.app')

@section('content')

    <h1>{{ $post->title }}</h1>
    <div class="post-body">{{ $post->body }}</div>
    </br></br>
    <div class="post-data">Created at {{ date('d D M, Y', strtotime($post->created_at)) }}</div>
    </br></br></br></br></br></br></br></br>

    <div class="col-md-8">
                <div class="col-md-4">
                    <form action="{{ route('posts.destroy', $post->id) }}" method="post">
                        @csrf
                        @method('DELETE')
        
                        <input type="submit" value="Delete post" class="btn btn-sm btn-outline-danger">
                    </form>
                </div>
    </div>

    </br></br></br></br></br></br></br></br>
    	<!-- Footer -->
	<footer class="site-footer">
		<div class="site-container">
			<div class="footer-inner">
				<div class="footer-info">
					<div class="footer-info__left">
						<img src="./images/footer-img.jpg" alt="about me image">
						<p>Read more about me</p>
					</div>
					<div class="footer-info__right">
						<h5>Get In Touch</h5>
						<p class="footer-phone">Phone: +958734902847</p>
						<p>Email : Subrun@Example.com</p>
						<div class="social-icons">
							<a href="#" target="_blank"><img src="./images/social-twitter.png" alt="social icon"></a>
							<a href="#" target="_blank"><img src="./images/social-pinterest.png" alt="social icon"></a>
							<a href="#" target="_blank"><img src="./images/social-youtube.png" alt="social icon"></a>
							<a href="#" target="_blank"><img src="./images/social-twitter.png" alt="social icon"></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="footer-bottom">
			<div class="site-container footer-bottom-inner">
				<p>© 2021 Author | All rights Reserved.</p>
				<div class="footer-bottom__img">
					<img src="./images/footer-mastercard.png" alt="footer image">
					<img src="./images/footer-paypal.png" alt="footer image">
					<img src="./images/footer-visa.png" alt="footer image">
					<img src="./images/footer-fedex.png" alt="footer image">
					<img src="./images/footer-dhl.png" alt="footer image">
				</div>
			</div>
		</div>
	</footer>
	<!-- Footer end -->

	<!-- Scripts -->
	<script src="{{Asset('website')}}/js/jquery.min.js"></script>
	<script src="{{Asset('website')}}/js/slick.min.js"></script>
	<script src="{{Asset('website')}}/js/main.js"></script>
    <!-- Scripts end -->

@endsection