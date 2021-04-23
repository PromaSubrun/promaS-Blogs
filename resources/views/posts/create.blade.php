@extends('layouts.app')


@section('content')


</br></br></br></br></br></br></br></br>
</br></br></br></br></br></br></br></br>

    <div class="row">
        <div class="col-md-8">
            <h2 class="universal-h2 universal-h2-bckg">Create New Post</h2>
        </div>
	</div>
		</br></br></br></br>

    <form action="{{ route('posts.store') }}" method="post">
        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">Post title</label>
            <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="title" value="{{ old('title') }}" required>
            @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
		</br></br>
        <div class="mb-3">
            <label for="post_body" class="form-label">Post body</label>
            <textarea name="post_body" class="form-control @error('post_body') is-invalid @enderror" id="post_body" rows="3" required>{{ old('post_body') }}</textarea>
            @error('post_body')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        </br></br>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

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