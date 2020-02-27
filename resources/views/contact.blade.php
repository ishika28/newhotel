@extends ('layouts.main')
@section('title',"Hotel Sneha-Contact")
@section('content-section')

<main id="main">
			<div class="container">
				<div class="contact g-padding">
					<div class="row">
						<div class="col-xs-12">
							<h1>Contact Us</h1>
						</div>
					</div>
					 @include('success_message')
					<div class="row">
						<div class="col-sm-6">
							<p>We are known for our warmth and homely care. All our guests are treated as V.I.P.s our staff is also efficient in handling large groups. We invite your to visit us and experience the Wild West Nepal effect.</p>

							<dl class="contact-info">
								<dt><span class="icon-location"></span>Address:</dt>
								<dd>Surkhet Road-13, Nepalgunj</dd>
								<dt><span class="icon-phone"></span>Phone:</dt>
								<dd><a href="tel:400748978045">081-520487, 081-520119</a></dd>
								<dt><span class="icon-paperplane"></span>E-MAIL:</dt>
								<dd><a href="mailto:&#111;&#102;&#102;&#105;&#099;&#101;&#064;&#103;&#097;&#108;&#108;&#105;&#097;&#115;&#111;&#102;&#116;&#046;&#099;&#111;&#109;">&#111;&#102;&#102;&#105;&#099;&#101;&#064;&#103;&#097;&#108;&#108;&#105;&#097;&#115;&#111;&#102;&#116;&#046;&#099;&#111;&#109;</a></dd>
							</dl>
						</div>
						<div class="col-sm-6">
							<form  class="contact-form" method="POST" action="{{route('user.comment.submit')}}">
								   {{ csrf_field() }}
								<div class="form-group">
									<label for="f-name">*Full Name</label>
									<input id="full_name" name="full_name" type="text" class="form-control">
								</div>
								<div class="form-group">
									<label for="email">*Email</label>
									<input id="email" name="email" type="email" class="form-control">
								</div>
								<div class="form-group">
									<label for="website">Phone</label>
									<input id="phone" name="phone" type="text" class="form-control">
								</div>
								<div class="form-group">
									<label for="comment">Comment</label>
									<textarea id="comment" name="comment" class="form-control" rows="8" cols="45"></textarea>
								</div>
								<input class="btn btn-default" type="submit" value="Send Message">
							</form>
						</div>
					</div>
				</div>
			</div>
		</main>

@endsection