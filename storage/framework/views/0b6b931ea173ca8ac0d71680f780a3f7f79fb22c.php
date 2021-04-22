<?php $__env->startSection('page_title'); ?>
    <?php if(isset($page_title)): ?>
        <?php echo e($page_title.' | '); ?>

    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-md-8">
            <a href="<?php echo e(route('posts.index')); ?>" class="btn btn-sm btn-outline-secondary">All posts</a>
        </div>
        <div class="col-md-4 collins-right-button">
            <div class="row">
                <div class="col-md-4">
                    <a href="<?php echo e(route('posts.create')); ?>" class="btn btn-sm btn-primary">New post</a>
                </div>
                <div class="col-md-4">
                    <a href="<?php echo e(route('posts.edit', $post->id)); ?>" class="btn btn-sm btn-outline-primary">Edit post</a>
                </div>
                <div class="col-md-4">
                    <form action="<?php echo e(route('posts.destroy', $post->id)); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
        
                        <input type="submit" value="Delete post" class="btn btn-sm btn-outline-danger">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <hr />
    <h1><?php echo e($post->title); ?></h1>
    <div class="post-body"><?php echo e($post->body); ?></div>
    </br></br>
    <div class="post-data">Created at <?php echo e(date('d D M, Y', strtotime($post->created_at))); ?></div>
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
	<script src="<?php echo e(Asset('website')); ?>/js/jquery.min.js"></script>
	<script src="<?php echo e(Asset('website')); ?>/js/slick.min.js"></script>
	<script src="<?php echo e(Asset('website')); ?>/js/main.js"></script>
    <!-- Scripts end -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Project\Postkiki-master\resources\views/posts/show.blade.php ENDPATH**/ ?>