@extends('layouts.app')

@section('content')
    <div id="contactPage">
    	<section class="p-0">
	    	<img src="{{ asset('img/banner-contact.jpg') }}" class="w-100">
	    </section>
	    <section>
	    	<div class="container">
		    	<div class="row">
		    		<div class="col-lg-6 col-md-12">
		    			<h2 class="sectionHeading text-uppercase">contact us</h2>
		    			<h5>How can we help you?</h5>
		    			<form action="">
		    				<div class="row">
		    					<div class="col-md-6">
		    						<div class="mb-3">
										<label class="form-label">Name <span class="text-danger">*</span></label>
										<input type="text" class="form-control">
									</div>	
		    					</div>
		    					<div class="col-md-6">
		    						<div class="mb-3">
										<label class="form-label">Email <span class="text-danger">*</span></label>
										<input type="email" class="form-control">
									</div>	
		    					</div>
		    					<div class="col-md-6">
		    						<div class="mb-3">
										<label class="form-label">Ragarding <span class="text-danger">*</span></label>
										<input type="text" class="form-control">
									</div>	
		    					</div>
		    					<div class="col-md-6">
		    						<div class="mb-3">
										<label class="form-label">Phone <span class="text-danger">*</span></label>
										<input type="text" class="form-control">
									</div>	
		    					</div>
		    					<div class="col-md-12">
		    						<div class="mb-3">
										<label class="form-label">Message <span class="text-danger">*</span></label>
										<textarea class="form-control"></textarea>
									</div>	
		    					</div>
		    				</div>
		    				<button class="btn btnOutlineRed text-uppercase">Submit</button>
						</form>
		    		</div>
		    		<div class="col-lg-6 d-lg-block d-none">
		    			<img src="{{ asset('img/img-contact.jpg') }}" class="w-100">		
		    		</div>
		    	</div>
	    	</div>
	    </section>
    </div>
@endsection
