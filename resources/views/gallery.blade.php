
@extends('layout')
@section('content')

<div class="photos"  style="background-image:url('images/background/bg11.jpg');">

</div>


<div class="gallery">
    <div class="heading-gallery">
        <h3> TSAP <span>Gallery</span></h3>
    </div>

    <div class="gal-box">
        <div class="gal-row">
        <img src="images/pics/pic1.jpg" alt=""/>
        <img src="images/pics/pic2.jpg" alt=""/>
        <img src="images/pics/pic8.jpg" alt=""/>
        <img src="images/pics/pic9.jpg" alt=""/>
        <img src="images/pics/pic15.jpg" alt=""/>
        <img src="images/pics/pic16.jpg" alt=""/>
        <img src="images/pics/pic17.jpg" alt=""/>
        <img src="images/pics/pic4.jpg" alt=""/>
        </div>

        <div class="gal-row">
        <img src="images/pics/pic6.jpg" alt=""/>
         <img src="images/pics/pic5.jpg" alt=""/>
        <img src="images/pics/pic7.jpg" alt=""/>
        <img src="images/pics/pic3.jpg" alt=""/>
        <img src="images/pics/pic4.jpg" alt=""/>
        <img src="images/pics/pic10.jpg" alt=""/>
        <img src="images/pics/pic18.jpg" alt=""/>
        <img src="images/pics/pic19.jpg" alt=""/>
        </div>

        <div class="gal-row">
        <img src="images/pics/pic11.jpg" alt=""/>
        <img src="images/pics/pic12.jpg" alt=""/>
        <img src="images/pics/pic13.jpg" alt=""/>
        <img src="images/pics/pic14.jpg" alt=""/>
        <img src="images/pics/pic5.jpg" alt=""/>
        <img src="images/pics/pic20.jpg" alt=""/>
        <img src="images/pics/pic21.jpg" alt=""/>
        <img src="images/pics/pic3.jpg" alt=""/>
        </div>

       
    </div>
    <div class="input-group-addon">
										<a href=""><button  class="btn btn-secondary mt-5 btn-rounded-lg">
											<span>More Photos</span>
											
										</button></a>
									</div>

</div>

<div class="call-action style-1 content-inner-1">
			<div class="container">
				<div class="inner-action overlay-primary-dark" style="background-image:url('images/background/bg1.jpg'); background-size: cover; background-repeat: no-repeat;">
					<div class="row inner-content justify-content-center">
						<div class="col-xl-6 col-lg-9">
							<div class="section-head text-center">
								<h2 class="title text-white">Don’t miss our updates</h2>
							</div>
							<form class="dzSubscribe" action="script/mailchamp.php" method="post">
								<div class="dzSubscribeMsg text-white"></div>
								<div class="input-group">
									<input name="dzEmail" required="required" type="email" class="form-control" placeholder="Enter your email address...">
									<div class="input-group-addon">
										<button name="submit" value="Submit" type="submit" class="btn btn-secondary btn-rounded-lg">
											<span>SUBSCRIBE</span>
											<i class="fa-solid fa-paper-plane"></i>
										</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>

@endsection