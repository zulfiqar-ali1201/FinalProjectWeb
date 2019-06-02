    <!-- start aboutus section -->
    <div id="about" class="offset about_area">
            <div class="contaienr-fluid">
                <div class="main_title">
        			<h2>ABOUT ECIC</h2>
        			<p> What We Were, What We are, What We will be </p>
        		</div>
				@foreach($abouts as $about)
				<div class="container-fluid about_inner my-3 py-5 text-center">
					<div class="row mb-5">
						<div class="col sub_title">
							<h3>{{$about->title}}</h3>
						</div>
					</div>
				<div class="row about_content">
					{{$about->description}}
				</div>
					
					
					
					
					<!--
					<div class="row mb-5">
							<div class="col sub_title">
								<h3>Major Achievements</h3>
								<p class="mt-3">Some of our Students Highlighted Achievements</p>
							</div>
							

					</div>
					<div class="row about_content">
						<h4>ACHIEVEMENTS-DBA (SBTE)</h4>
						<p>
							Since August 2010 -2011 D.B.A (Equal to Intermediate) Program has been launched Affiliated 
							with Sindh Board of Technical Education. 
						</p>
						<h5>Positions in Diploma in Business Administration (D.B.A) in all over SINDH.</h5>
						<table class="table">
							<thead class="thead-light">
								<tr>
									<th>Batch No</th>	
									<th>Student Name</th>
									<th>Postion</th>
									<th>Roll No.</th>
								</tr>
							</thead>
							<tbody>
							<tr>
								<td>2010-2012</td>	
								<td>Sajida Parveen</td>
								<td>1st</td>
								<td>610</td>
							</tr>
							<tr>
								<td>2010-2012</td>	
								<td>Uroosa Kanwal</td>
								<td>2nd</td>
								<td>605</td>
							</tr>
							
							<tr>
								<td>2011-2013</td>	
								<td>Qurat-ul-Ain </td>
								<td>1st</td>
								<td>614</td>
							</tr>
							
							<tr>
								<td>2011-2013</td>	
								<td>Syeda Saira batool Rizvi </td>
								<td>2nd</td>
								<td>597</td>
							</tr>
							
							<tr>
								<td>2012-2014</td>	
								<td>Gullnaz Tabassum  </td>
								<td>1st</td>
								<td>641</td>
							</tr>
							
							<tr>
								<td>2012-2014</td>	
								<td>Hakim Zadi </td>
								<td>645</td>
								<td>597</td>
							</tr>
							
							<tr>
								<td>2012-2014</td>	
								<td>Fareen Waheed Khan </td>
								<td>3rd</td>
								<td>656</td>
							</tr>
							
							
							</tbody>
						</table>

						
						
						<h5>Students of DBA got Cash Prizes, Certificates & I Pad from Governor of Sindh (Dr. Ishrat ul-Ibad) </h5>
						<div class="row">
							<div class="col-md-3">
								<img class="rounded float-left" src={{URL::asset('images/achievements/1st.jpg')}}/>
							</div>
							
							<div class="col-md-3">
								<img class="rounded float-left" src={{URL::asset('images/achievements/2nd.jpg')}}/>
							</div>
							
							<div class="col-md-3">
								<img class="rounded float-left" src={{URL::asset('images/achievements/3rd.jpg')}}/>
							</div>
                            <div class="col-md-3">
								<img class="rounded float-left" src={{URL::asset('images/achievements/4th.jpg')}}/>
							</div>
						</div>
					</div>
					
					
					
					
					<div class="row about_content">
						<h4>ACHIEVEMENTS-NAVTTC (SKILL COMPETITION)</h4>
						<p>
							OUR NAVTTC Students participates in Zonal Skill Karachi Level Competitions and got Positions
						</p>
						<h5>List of Students Who got Positions in NAVTTC Zonal Skill Competition</h5>
						<table class="table">
							<thead class="thead-light">
								<tr>
									<th>Batch No</th>	
									<th>Student Name</th>
									<th>Trade</th>
									<th>Postion</th>
									
								</tr>
							</thead>
							<tbody>
							<tr>
								<td>Phase III, Batch-I</td>	
								<td>Kamran Ali </td>
								<td>AutoCAD 2D & 3D</td>
								<td>3rd</td>
							</tr>
							<tr>
								<td>Phase III, Batch-II</td>	
								<td>Faizan Bhatti </td>
								<td>General Electrician</td>
								<td>1st</td>
							</tr>
							
							<tr>
								<td>Phase III, Batch-II</td>	
								<td>Tehreem Shafi </td>
								<td>AutoCAD 2D & 3D</td>
								<td>2nd</td>
							</tr>
							
							<tr>
								<td>Phase IV, Batch-II</td>	
								<td>Maria Qasmi </td>
								<td>Graphics Designing</td>
								<td>3rd</td>
							</tr>
							
							
							</tbody>
						</table>
						
						<h5>Students of DBA got Cash Prizes, Certificates & I Pad from Governor of Sindh (Dr. Ishrat ul-Ibad) </h5>
						<div class="row">
							<div class="col-md-4">
								<img class="rounded float-left" src="resources/images/image1.jpg"/>
							</div>
							
							<div class="col-md-4">
								<img class="rounded float-left" src="resources/images/image1.jpg"/>
							</div>
							
							<div class="col-md-4">
								<img class="rounded float-left" src="resources/images/image1.jpg"/>
							</div>
						</div>
					</div> -->
				 </div>
				@endforeach
               
            </div>
  </div>
      <!--End about Section -->