@extends('partials.layout')

@section('content')
<section id="inner-headline">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="pageTitle">Contatti</h2>
            </div>
        </div>
    </div>
</section>

<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div id="k-contact-map" class="clearfix internal-text"><!-- map -->
                <div 
                id="g-map-1" 
                class="new-map" 
                data-gmaptitle="Contact" 
                data-gmapzoom="15" 
                data-gmaplon="12.4707399"
                data-gmaplat="41.8542364"
                data-gmapmarker="" 
                data-cname="Università Roma Tre"
                data-caddress="Via Vito Volterra 62"
                data-ccity="Roma"
                data-cstate="Lazio"
                data-czip="00146"
                data-ccountry="ITA">
                </div>
            </div>
            
            <div class="news-body">
            
                <p>
                Per avere informazioni più dettagliate:
                </p>
                
                <div class="row">
                	<div class="col-lg-8 col-md-8 col-sm-12">
                    	<h6>Scientific Foundation</h6>
						<p>Tel:  06.5733.9999 | e-mail: <a href="mailto:test@uniroma3.it?subject=Richiesta%20informazioni%20ScientificFoundation:">test@uniroma3.it</a>  </p>
                        
						<!--<h6 class="remove-margin-top remove-margin-bottom">Washington Primary School</h6>
						<p class="small">Tel: 631 552 32 77   |   Fax: 631 552 32 78</p>
						
                        <h6 class="remove-margin-top remove-margin-bottom">Woodland Intermediate School</h6>
                        <p class="small">Tel: 631 553 33 77   |   Fax: 631 553 33 78</p>-->
                    </div>
                    
                	<!--<div class="col-lg-6 col-md-6 col-sm-12">
                    	<h6 class="remove-margin-bottom">Brisbane Intermediate School</h6>
						<p class="small">Tel: 631 554 34 77   |   Fax: 631 554 34 78</p>
                        
						<h6 class="remove-margin-top remove-margin-bottom">New York Middle School</h6>
						<p class="small">Tel: 631 555 35 77   |   Fax: 631 555 35 78</p>
						
                        <h6 class="remove-margin-top remove-margin-bottom">Buntington High School</h6>
                        <p class="small">Tel: 631 556 36 77   |   Fax: 631 556 36 78</p>
                    </div>-->
                </div>
                
                <hr />
                
                <!--<h6>Oppure lascia un messaggio!</h6>
                
                <form id="contactform" method="post" action="#">
                    <div class="row">&lt;!&ndash; starts row &ndash;&gt;
                        <div class="form-group col-lg-6 col-md-6 col-sm-12">
                            <label for="contactName"><span class="required">*</span> Name</label>
                            <input type="text" aria-required="true" size="30" value="" name="contactName" id="contactName" class="form-control requiredField" />
                        </div>
                        <div class="form-group col-lg-6 col-md-6 col-sm-12">
                            <label for="email"><span class="required">*</span> E-mail</label>
                            <input type="text" aria-required="true" size="30" value="" name="email" id="email" class="form-control requiredField" />
                        </div>
                    </div>&lt;!&ndash; ends row &ndash;&gt;
                    
                    <div class="row">&lt;!&ndash; starts row &ndash;&gt;
                        <div class="form-group col-lg-6 col-md-6 col-sm-12">
                            <label for="contactPhone">Phone / Cell</label>
                            <input type="text" aria-required="true" size="30" value="" name="contactPhone" id="contactPhone" class="form-control" />
                        </div>
                        &lt;!&ndash;<div class="form-group col-lg-6 col-md-6 col-sm-12">
                            <label for="contactSchool">Select School</label>
                            <select name="contactSchool" id="contactSchool" class="form-control">
                                <option value="High School">High School</option>
                                <option value="Middle School">Middle School</option>
                                <option value="Intermediate School">Intermediate School</option>
                                <option value="Primary School">Primary School</option>
                            </select>
                        </div>&ndash;&gt;
                    </div>&lt;!&ndash; ends row &ndash;&gt;
                    
                    <div class="row">&lt;!&ndash; starts row &ndash;&gt;
                        <div class="form-group col-lg-12">
                            <label for="contactSubject">Message Subject</label>
                            <input type="text" aria-required="true" size="30" value="" name="contactSubject" id="contactSubject" class="form-control" />
                        </div>
                    </div>&lt;!&ndash; ends row &ndash;&gt;
                    
                    <div class="row">&lt;!&ndash; starts row &ndash;&gt;
                        <div class="form-group clearfix col-lg-12">
                            <label for="comments"><span class="required">*</span> Message</label>
                            <textarea aria-required="true" rows="5" cols="45" name="comments" id="comments" class="form-control requiredField mezage"></textarea>
                        </div>
        
                        <div class="form-group clearfix col-lg-12 text-right remove-margin-bottom">
                            <input type="hidden" name="submitted" id="submitted" value="true" />
                            <input type="submit" value="Send Message" id="submit" name="submit" class="btn btn-default" />
                        </div>
                    </div>&lt;!&ndash; ends row &ndash;&gt;
                </form>-->
                
            </div>
        
        </div>
    
    </div><!-- row end -->             

</div><!-- inner custom column end -->

@endsection