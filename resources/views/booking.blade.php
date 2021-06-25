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
                                                                            <div class="col-sm-3">
                                                                                <div class="mapouter"><div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=nairobi&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://123movies-to.org"></a><br><style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}</style><a href="https://www.embedgooglemap.net"></a><style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style></div></div>
                                                                            </div>
                                                                            
                                                                            <div class="divider-lg hidden-lg hidden-md hidden-sm"></div>
                                                                            <div class="col-sm-7 col-md-8 pull-center">
                                                                                <div class="box-wrapper">
                                                                                    <div class="block-title text-left">
                                                                                        <h2 class="block-title__title">Enter your location</h2>
                                                                                        <div class="block-title__description">Get your automotive-related questions answered by a mechanic</div>
                                                                                        <div class="title-separator"></div>
                                                                                    </div>
                                                                                    
                                                                                        
                                                                                        <form action="{{ route('booking.postlocation') }}" method="POST" class="wpcf7-form init" novalidate="novalidate" data-status="init">
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
                                                                                                    <div class="select-wrapper"> 
                                                                                                        <span class="wpcf7-form-control-wrap select1">
                                                                                                            <select name="county" id="county" value="{{ session()->get('booking.county') }}" class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required input-custom" aria-required="true" aria-invalid="false">
                                                                                                                <option value="" selected>Select Your County</option>
                                                                                                                @foreach($countries as $key => $country)
                                                                                                                   <option value="{{$key}}"> {{$country}}</option>
                                                                                                                   @endforeach
                                                                                                                
                                                                                                            </select>
                                                                                                        </span>
                                                                                                    </div>
                                                                                                        </p>
                                                                                                </div>
                                                                                                    <div class="col-md-6">
                                                                                                        <div class="select-wrapper">
                                                                                                        <span class="wpcf7-form-control-wrap select1">
                                                                                                        <select name="state" id="state" value="{{ session()->get('booking.state') }}" class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required input-custom" aria-required="true" aria-invalid="false">
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
    $('#county').change(function(){
     var countryID = $(this).val();  
     if(countryID){
       $.ajax({
         type:"GET",
         url:"{{url('getState')}}?counties_id="+countryID,
         success:function(res){        
         if(res){
           $("#state").empty();
           $("#state").append('<option>Select Location</option>');
           $.each(res,function(key,value){
             $("#state").append('<option value="'+key+'">'+value+'</option>');
           });
         
         }else{
           $("#state").empty();
         }
         }
       });
     }else{
       $("#state").empty();
       $("#city").empty();
     }   
     });
   </script>   
@endsection

@push('js')
<script src="{{ asset('demo2/wp-content/cache/min/11/afab7c6b1b8549c29e6e6030d0cf40af.js') }}" data-minify="1" defer></script>

@endpush