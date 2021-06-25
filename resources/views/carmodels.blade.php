@extends('layouts.frontend.app')
@section('content')
<div id="pageTitle" class="page-title-wrapper">
    <div class="container">
        <!-- //Breadcrumbs Block -->
        <h1>Contacts</h1>
        <!-- Breadcrumbs Block -->
        <div class="breadcrumbs">
            <div class="breadcrumb">
                <div class="breadcrumbs">
                    <div class="breadcrumb">
                        <!-- Breadcrumb section -->	<span><span><a href="../index.html">Home</a> / <span class="breadcrumb_last" aria-current="page">Contacts</span></span>
                        </span>
                    </div>
                </div>
                <!--end Breadcrumb section -->
            </div>
        </div>
    </div>
</div>
<div id="pageContent" class="content-area">
    <div id="primary" class="container">
        <div id="post-48" class="post-48 page type-page status-publish hentry">
            <!-- Block -->
            <div class="offset-sm">
                <div data-elementor-type="wp-page" data-elementor-id="48" class="elementor elementor-48" data-elementor-settings="[]">
                    <div class="elementor-inner">
                        <div class="elementor-section-wrap">
                            <section class="elementor-section elementor-top-section elementor-element elementor-element-6fc64d4 elementor-section-stretched elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="6fc64d4" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
                                <div class="elementor-container elementor-column-gap-no">
                                    <div class="elementor-row">
                                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-7273983" data-id="7273983" data-element_type="column">
                                            <div class="elementor-column-wrap elementor-element-populated">
                                                <div class="elementor-widget-wrap">
                                                    <div class="elementor-element elementor-element-b591a35 elementor-widget elementor-widget-contact_page" data-id="b591a35" data-element_type="widget" data-widget_type="contact_page.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="section-bg01">
                                                                <div class="block">
                                                                    <div class="container no-gutters">
                                                                        <div class="row ">
                                                                            
                                                                            <div class="divider-lg hidden-lg hidden-md hidden-sm"></div>
                                                                            <div class="col-sm-7 col-md-8 pull-center">
                                                                                <div class="box-wrapper">
                                                                                    <div class="block-title text-left">
                                                                                        <h2 class="block-title__title">Enter your Car Model Info</h2>
                                                                                        <div class="block-title__description">Get your automotive-related questions answered by a mechanic</div>
                                                                                        <div class="title-separator"></div>
                                                                                    </div>
                                                                                    
                                                                                        
                                                                                        <form action="{{ route('booking.postcarmodels') }}" method="POST" class="wpcf7-form init" novalidate="novalidate" data-status="init">
                                                                                            @csrf
                                                                                            <div style="display: none;">
                                                                                                <input type="hidden" name="_wpcf7" value="2225" />
                                                                                                <input type="hidden" name="_wpcf7_version" value="5.3.2" />
                                                                                                <input type="hidden" name="_wpcf7_locale" value="en_US" />
                                                                                                <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f2225-p48-o1" />
                                                                                                <input type="hidden" name="_wpcf7_container_post" value="48" />
                                                                                                <input type="hidden" name="_wpcf7_posted_data_hash" value="" />
                                                                                            </div>
                                                                                            <div class="contact-form form-default">
																								<div class="row">
																									<div class="col-md-6">
																										<h5>Car Model Info</h5>
																										<div class="select-wrapper"> 
																										<span class="wpcf7-form-control-wrap select1">
																											<select name="make" id="make" class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required input-custom" aria-required="true" aria-invalid="false">
																												<option value="" selected>Select Car Make</option>
																												@foreach($makes as $key => $make)
                                                                                                                   <option value="{{$key}}"> {{$make}}</option>
                                                                                                                   @endforeach
																											</select>
																										</span>
																										</div>
																										<div class="select-wrapper"> <span class="wpcf7-form-control-wrap select1">
																											<select name="year" id="year" class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required input-custom" aria-required="true" aria-invalid="false">
																												
																											</select>
																										</span>
																										</div>
																										<div class="select-wrapper"> <span class="wpcf7-form-control-wrap select1">
																											<select name="model" id="model" class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required input-custom" aria-required="true" aria-invalid="false">
																												
																											</select>
																										</span>
																										</div>
																										<div class="select-wrapper"> <span class="wpcf7-form-control-wrap select1">
																											<select name="engine" id="engine" class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required input-custom" aria-required="true" aria-invalid="false">
																												
																											</select>
																										</span>
																										</div>
																										</p>
																									</div>
																									
																									</p>
																								</div>
                                                                                                
                                                                                                <p><br><br>
                                                                                                    <button type="submit" id="submit-contact" class="btn btn-border btn-invert btn-wide wpcf7-form-control wpcf7-submit "><span>Next</span>
                                                                                                    </button>
                                                                                            </div>
                                                                                            <div class="wpcf7-response-output" aria-hidden="true"></div>
                                                                                        </form>
                                                                                        @if ($errors->any())
                                                                                        <div class="alert alert-danger">
                                                                                            <ul>
                                                                                                @foreach ($errors->all() as $error)
                                                                                                    <li>{{ $error }}</li>
                                                                                                @endforeach
                                                                                            </ul>
                                                                                        </div>
                                                                                    @endif
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
            <!-- //Block -->
        </div>
    </div>
    <!-- #primary -->
</div>
<script>
$('#make').change(function(){
	var makeID = $(this).val();  
	if(makeID){
	  $.ajax({
		type:"GET",
		url:"{{url('getYear')}}?make_id="+makeID,
		success:function(res){        
		if(res){
		  $("#year").empty();
		  $("#year").append('<option>Select Car Year</option>');
		  $.each(res,function(key,value){
			$("#year").append('<option value="'+key+'">'+value+'</option>');
		  });
		
		}else{
		  $("#year").empty();
		}
		}
	  });
	}else{
	  $("#year").empty();
	  $("#model").empty();
	}   
	});
	$('#year').change(function(){
	var yearID = $(this).val();  
	if(yearID){
	  $.ajax({
		type:"GET",
		url:"{{url('getModel')}}?year_id="+yearID,
		success:function(res){        
		if(res){
		  $("#model").empty();
		  $("#model").append('<option>Select Car Model</option>');
		  $.each(res,function(key,value){
			$("#model").append('<option value="'+key+'">'+value+'</option>');
		  });
		
		}else{
		  $("#model").empty();
		}
		}
	  });
	}else{
	  $("#model").empty();
	  $("#engine").empty();
	}   
	});
	$('#model').change(function(){
	var modelID = $(this).val();  
	if(modelID){
	  $.ajax({
		type:"GET",
		url:"{{url('getEngine')}}?model_id="+modelID,
		success:function(res){        
		if(res){
		  $("#engine").empty();
		  $("#engine").append('<option>Select Car Engine</option>');
		  $.each(res,function(key,value){
			$("#engine").append('<option value="'+key+'">'+value+'</option>');
		  });
		
		}else{
		  $("#engine").empty();
		}
		}
	  });
	}else{
	  $("#engine").empty();
	  $("#engine").empty();
	}   
	});
  </script>   


@endsection

@push('js')
<script src="{{ asset('demo2/wp-content/cache/min/11/afab7c6b1b8549c29e6e6030d0cf40af.js') }}" data-minify="1" defer></script>

@endpush