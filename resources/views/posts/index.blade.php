@extends('layouts.app')


@section('content')

</br></br></br></br></br></br></br></br>
</br></br></br></br></br></br></br></br>

    <div class="row">
        <div class="col-md-8">
            <h2 class="universal-h2 universal-h2-bckg">Posts</h2>
        </div>
        </br></br></br></br></br></br></br></br>

    </div>
    @if ($posts->count() > 0)
        @foreach ($posts as $post)
            <div class="post">
                <a href="{{ route('posts.show', $post->id) }}" class="post-link">
                    <h2 class="title">{{ $post->title }}</h2>
                </a>
                </br>

                <div class="post-data">Created at {{ date('d D M, Y', strtotime($post->created_at)) }}</div>
            </div>
        @endforeach
        {{ $posts->links() }}
    @else
        Coming soon!
    @endif
    </br></br></br></br></br></br></br></br>
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