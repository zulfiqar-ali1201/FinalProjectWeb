      <!-- start Affiliations section -->
      <div id="affiliations" class="affiliations_area p_120">
        	<div class="container-fluid">
        		<div class="main_title">
        			<h2>REGISTRATIONS, AFFILIATIONS & MEMBERSHIPS</h2>
        			<p>We are Registered With Government and We are also International Organizations Certified </p>
        		</div>
        		<div class="row affiliations_inner">
        		    @foreach($affiliations as $affiliation)
                	<div class="col-md-2">
        				<div class="affiliations_item">
        					<div class="affiliations_img">
        						<img class="img-thumbnail" src="{{asset('storage/'.$affiliation->logo)}}" alt="STEVTA">
        					
        					</div>
        					<div class="affiliations_name">
        						<h4>{{$affiliation->title}}</h4>
        						<p>{{$affiliation->description}}</p>
        					</div>
        				</div>
        			</div>
                    
                    @endforeach
                    
               
        
        		</div>
                
                <!-- International Certifications -->
                
                <!--
                
                <div class="row affiliations_inner">
                    <div class="col-md-2">
                        <div class="affiliations_item">
                            <div class="affiliations_img">
                                <img class="rounded" src={{URL::asset('images/mia.jpg')}} alt="Microsoft">
                            
                                    
                            </div>
                            <div class="affiliations_name">
                                <h4>MIA</h4>
                                <p>Microsoft Imagine Academy</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="affiliations_item">
                            <div class="affiliations_img">
                                <img class="img-thumbnail" src={{URL::asset('images/cia.png')}} alt="CISCO">

                            </div>
                            <div class="affiliations_name">
                                <h4>CISCO</h4>
                                <p>CISCO Networking Academy</p>
                            </div>
                        </div>
                    </div>


                <div class="col-md-2">
                        <div class="affiliations_item">
                            <div class="affiliations_img">
                                <img class="img-thumbnail" src={{URL::asset('images/ec.png')}} alt="Certiport">

                            </div>
                            <div class="affiliations_name">
                                <h4>EC Council</h4>
                                <p>Certiport Authorized Testing Center</p>
                            </div>
                        </div>
                </div>

                 <div class="col-md-2">
                    <div class="affiliations_item">
                        <div class="affiliations_img">
                            <img class="img-thumbnail" src={{URL::asset('images/cpp.png')}} alt="CPLUSPLUS">

                        </div>
                        <div class="affiliations_name">
                            <h4>C ++ Academy</h4>
                            <p>C++ Institute Authorized Academy</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="affiliations_item">
                        <div class="affiliations_img">
                            <img class="img-thumbnail" src={{URL::asset('images/python.png')}} alt="Python">

                        </div>
                        <div class="affiliations_name">
                            <h4>Python</h4>
                            <p>PYTHON Academy</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-2">
                <div class="affiliations_item">
                    <div class="affiliations_img">
                        <img class="img-thumbnail" src={{URL::asset('images/ca.jpg')}} alt="Core Academy">

                    </div>
                    <div class="affiliations_name">
                        <h4>CORE ACADEMY</h4>
                        <p>LINK TOWARDS CORE TECHNOLOGIES</p>
                    </div>
                </div>
            </div>
            -->
        
        </div>
        </div>
        </div>
      <!--End Affiliations Section -->