<!-- start Courses section -->
       
            
<div class="offset p_120 courses_area" id="courses">
            
     <div class="container-fluid">
		<div class="main_title">
			<h2>PROFESSIONAL COMPUTER, TECHINCAL & VOCATIONAL PROGRAMS</h2>
			<p> We Offer variety of Professional, Industry standard Programs </p>
		</div>
        		
        <!-- Intermediate Programs Section -->
         <div class="container_fluid latest_course_inner my-3 py-5 text-center">
			<div class="row mb-5">
				<div class="col sub_title">
					<h3>Inter Equivalent Diplomas</h3>
					<p class="mt-3"> Registered & Affiliated With Sindh Board of Technical Education karachi </p>
				</div>
			
			</div>
          
			<div class="row">
            @foreach($courses as $course)
				<div class="col-lg-3 col-md-6 d-flex">
					<div class="card card_bg">          
							<div class="card-body course_body">
								 <img src="{{asset('storage/'.$course->titleimage)}}" alt="" class="img-fluid rounded-circle w-50 mb-3">
								<h4>{{$course->title}}</h4>
								<h5>{{$course->description}}</h5>
								<p>{{$course->leads}}</p>
								<a href="dba.html" class="btn btn-success mb-3">Details</a>
							 </div>
						
						<div class="card-footer">
						  <h5>{{$course->duration}}</h5>
						</div>
					</div>
				</div>
             @endforeach
			</div>
           
                        
                        <!-- for saving the code
                        <div class="col-lg-3 col-md-6">
                            <div class="card card_bg">
                                <div class="card-body course_body">
                                    <img src="resources/images/daecit.jpg" alt="" class="img-fluid rounded-circle w-50 mb-3">
                                    <h4>Diploma of Associate Engineer</h4>
                                    <h5>Computer Information Technology</h5>
                                    <p>Leads to Computer(B.Tech, B.E, BSCS, BSIT, BSSE)</p>
                                 </div>
                                <div class="card-footer">
                                  <h5>Duration: 03 Years</h5>
                                </div>
                            </div>
                        </div>
                        
                        -->
        </div>
                    
    </div>
                
                <!-- Intermediate Programs Section Ends -->
                
                
                <!-- Diploma Courses  Section 
                <div class="container_fluid latest_course_inner my-3 py-5 text-center">
                    <div class="row mb-5">
                        <div class="col sub_title">
                            <h3>Diploma Courses</h3>
                            <p class="mt-3">Professional Diploma Courses With Local and International Certification </p>
                        </div>
                    
                    </div>
                    <div class="row">
                    
            
                        
                      
                    </div>
                    
        		</div>
                
               Diploma Courses Section Ends -->
                
                
                    
</div>
                    
        
      