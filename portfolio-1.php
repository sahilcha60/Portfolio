<!DOCTYPE html>
<html lang="zxx">

<?php require_once 'components/header.php'; ?>

<body>
  
<!-- Header Start --> 

<?php require_once 'components/navigation.php'; ?>
<!-- Header Close --> 



<section class="section banner pb-lg-0">
	<div class="container">
		<div class="row justify-content-center">
			<div class="cd-headline clip is-full-width col-lg-8 text-center">
				<h2>I provide <br>
					<span class="cd-words-wrapper text-color">
						<b class="is-visible">Visual Storytelling through Design.</b>
						<b>Full-Stack Web Experiences.</b>
						<b>Ready-to-Print Perfection.</b>
						<b>Creative Brand Solutions.</b>
						<b>Designs that Convert.</b>
						<b>Code that Performs.</b>
						<b>Print Files that Deliver.</b>
						<b>Innovation at Every Pixel.</b>
					</span>
				<br>My work is presented here, check them below.</h2>
			</div>
		</div>
	</div>
</section>

<section class=" portfolio ">
	<div class="container">
		<div class="row mb-5 justify-content-center">
	      	<div class="col-10 text-center">
		        <div class="btn-group btn-group-toggle " data-toggle="buttons">
		          <label class="btn active ">
		            <input type="radio" name="shuffle-filter" value="all" checked="checked" />All Projects
		          </label>
		          <label class="btn">
		            <input type="radio" name="shuffle-filter" value="design" />UI/UX Design
		          </label>
		          <label class="btn">
		            <input type="radio" name="shuffle-filter" value="branding" />branding
		          </label>
		          <label class="btn">
		            <input type="radio" name="shuffle-filter" value="illustration" />Web Development
		          </label>
		           <label class="btn">
		            <input type="radio" name="shuffle-filter" value="photo" />Photography
		          </label>
		        </div>
	      	</div>
    	</div>	

		<div class="row shuffle-wrapper portfolio-gallery">
	      <div class="col-lg-4 col-6 mb-4 shuffle-item"  data-groups="[&quot;design&quot;,&quot;illustration&quot;]">
		      	<div class="position-relative inner-box">
		          <div class="image position-relative ">
	               <img src="images/portfolio/1.jpg" alt="portfolio-image" class="img-fluid w-100 d-block">
	                <div class="overlay-box">
	                  <div class="overlay-inner">
	                    <a class="overlay-content" href="portfolio-single.html">
	                      <h5 class="mb-0 ">Painting</h5>
	                      <p>Design</p>
	                    </a>
	                  </div>
	                </div> 
	            </div>
		      </div>
	      </div>

	      <div class="col-lg-4 col-6 mb-4 shuffle-item" data-groups="[&quot;branding&quot;]">
	        <div class="position-relative inner-box" >
	            <div class="image position-relative ">
	               <img src="images/portfolio/bag.jpg" alt="portfolio-image" class="img-fluid w-100 d-block">
	                <div class="overlay-box">
	                  <div class="overlay-inner">
	                    <a class="overlay-content" href="portfolio-single.html">
	                      <h5 class="mb-0">Web app</h5>
	                      <p>Development</p>
	                    </a>
		                </div> 
		            </div>
		        </div>
		      </div>
	      </div>

	      <div class="col-lg-4 col-6 mb-4 shuffle-item" data-groups="[&quot;illustration&quot;]">
	        <div class="position-relative inner-box">
	            <div class="image position-relative ">
	               <img src="images/portfolio/3.jpg" alt="portfolio-image" class="img-fluid w-100 d-block">
	                <div class="overlay-box">
	                  <div class="overlay-inner">
	                    <a class="overlay-content" href="portfolio-single.html">
	                      <h5 class="mb-0">Business </h5>
	                      <p>marketing</p>
	                    </a>
	                  </div>
	                </div> 
	            </div>
	        </div>
	      </div>

	      <div class="col-lg-4 col-6 mb-4 shuffle-item" data-groups="[&quot;design&quot;,&quot;branding&quot;]">
	        <div class="position-relative inner-box">
	            <div class="image position-relative ">
	               <img src="images/portfolio/m-3.jpg" alt="portfolio-image" class="img-fluid w-100 d-block">
	                <div class="overlay-box">
	                  <div class="overlay-inner">
	                    <a class="overlay-content" href="portfolio-single.html">
	                      <h5 class="mb-0">Portfolio</h5>
	                      <p>Design</p>
	                    </a>
	                  </div>
	                </div> 
	            </div>
	        </div>
	      </div>

	      <div class="col-lg-4 col-6 mb-4 shuffle-item" data-groups="[&quot;illustration&quot;]">
	        <div class="position-relative inner-box">
	            <div class="image position-relative ">
	               <img src="images/portfolio/bottle.jpg" alt="portfolio-image" class="img-fluid w-100 d-block">
	                <div class="overlay-box">
	                  <div class="overlay-inner">
	                    <a class="overlay-content" href="portfolio-single.html">
	                       <h5 class="mb-0">Modern web</h5>
	                      	<p>Seo</p>
	                    </a>
	                  </div>
	                </div> 
	            </div>
	        </div>
	      </div>

	      <div class="col-lg-4 col-6 mb-4 shuffle-item" data-groups="[&quot;design&quot;,&quot;photo&quot;]">
	        <div class="position-relative inner-box">
	            <div class="image position-relative ">
	               <img src="images/portfolio/6.jpg" alt="portfolio-image" class="img-fluid w-100 d-block">
	                <div class="overlay-box">
	                  <div class="overlay-inner">
	                    <a class="overlay-content" href="portfolio-single.html">
	                       <h5 class="mb-0">Agency web</h5>
	                      	<p>Design</p>
	                    </a>
	                  </div>
	                </div> 
	            </div>
	        </div>
	      </div>
	    </div>
	</div>
</section>

<?php require_once 'components/footer.php'; ?>

</html>