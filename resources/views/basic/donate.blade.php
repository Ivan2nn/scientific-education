@extends('partials.layout')

@section('content')
<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="pageTitle">Donate</h2>
			</div>
		</div>
	</div>
</section>

<div class="container">
	<div class="row">
		<div class="col-md-8">
			<p class='internal-text'>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed luctus, lectus at laoreet placerat, nisl odio tempor ante, in venenatis nisi orci vel sapien. Phasellus sed mauris nibh. Morbi in enim id tortor ullamcorper eleifend in eget nibh. Mauris sodales ligula quis urna tincidunt, ac lobortis neque tincidunt. Suspendisse id leo leo. Sed nec ornare tortor. Integer venenatis lectus ut libero efficitur, vel pretium felis pellentesque. Duis scelerisque risus orci, ut mollis dui pharetra eu. Proin mollis tincidunt massa. Nunc ac tempor lectus. Praesent nec semper massa. Cras non rutrum nisl, sit amet auctor leo. Duis viverra mi sit amet ultrices ornare. Nunc vulputate tempor erat at vulputate. Mauris eget turpis magna.</p>
			<p>Proin rutrum commodo aliquam. In porta ipsum ac rutrum facilisis. Fusce eu posuere augue. Proin consequat posuere justo, nec molestie diam commodo quis. Nunc maximus libero eget lacus laoreet ornare. Sed lacus magna, volutpat eget ultrices scelerisque, lacinia nec mauris. Aenean ut auctor ligula. Proin vitae sapien nisi. Phasellus libero velit, maximus non pharetra non, accumsan in dui. Cras imperdiet leo lobortis eros luctus placerat.</p>
			<p>Suspendisse ultrices, est non ultricies condimentum, diam tortor imperdiet magna, vitae rhoncus dolor risus sed magna. Aenean porttitor lectus efficitur mauris pharetra malesuada. Donec hendrerit risus turpis, nec tincidunt lectus dignissim non. Aliquam sit amet ipsum non ante posuere interdum. Donec porttitor tempus diam eu ornare. Nulla sit amet molestie urna. Mauris vitae magna vel justo interdum imperdiet et et enim. Donec turpis mi, porta nec ultrices sed, porttitor et quam. Duis non nunc ac est blandit tincidunt id sed orci. Morbi purus erat, porttitor non magna at, dignissim congue quam. Donec faucibus diam eget lacus volutpat pulvinar. Sed volutpat luctus velit a ultrices. In hac habitasse platea dictumst. Sed dictum tristique tincidunt. Sed lobortis condimentum sodales. </p>
		</div>
		<div class="col-md-4">
			<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top" class="donation">
			<input type="hidden" name="cmd" value="_s-xclick">
			<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----
			">
			<input type="image" src="https://www.paypalobjects.com/it_IT/IT/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal è il metodo rapido e sicuro per pagare e farsi pagare online.">
			<img alt="" border="0" src="https://www.paypalobjects.com/it_IT/i/scr/pixel.gif" width="1" height="1">
			</form>
		</div>
	</div>
</div>


@endsection