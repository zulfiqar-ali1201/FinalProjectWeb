@extends('layouts.main')
  @section('top')
  
  <!-- start Courses Details section -->
  <div class="course_details p_120">
        	<div class="container-fluid">
        		<div class="main_title">
        			<h2>COURSE DETIALS</h2>
        			
        		</div>
			<div class="row">
				<div class="col-md-8 col-lg-8">
                    <div class="details_content">
                        <nav>
                          <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="contents-tab" data-toggle="tab" href="#contents" role="tab" aria-controls="contents" aria-selected="true">CONTENTS</a>
                            <a class="nav-item nav-link" id="course_outcomes-tab" data-toggle="tab" href="#course_outcomes" role="tab" aria-controls="nav-profile" aria-selected="false">COURSE OUTCOMES</a>
                            <a class="nav-item nav-link" id="demo-tab" data-toggle="tab" href="#demo" role="tab" aria-controls="nav-contact" aria-selected="false">DEMO</a>
                          </div>
                        </nav>
                        <div class="tab-content inner_details" id="nav-tabContent">
                          <div class="tab-pane fade show active tab_content" id="contents" role="tabpanel" aria-labelledby="COURSE-CONTENTS">
                            <div class="content">
                                <h2>DIPLOMA IN BUSINESS ADMINISTRATION</h2>

                                <h3>COURSE CONTENTS</h3>
                                <h4>PART-I</h4>
                                <ul>
                                    <li>English-I</li>
                                    <li>Urdu-I</li>
                                    <li>Islamiat</li>
                                    <li>Financial Accounting-I</li>
                                    <li>Statistics</li>
                                    <li>Principle Of Commerce</li>
                                    <li>Computer Applicaiton to Business-I</li>
                                    <li>Information Technology</li>
                                </ul>

                                <h4>PART-II</h4>
                                <ul>
                                    <li>English-II</li>
                                    <li>Urdu-II</li>
                                    <li>Pakistan Studies</li>
                                    <li>Financial Accounting-II</li>
                                    <li>Economics</li>
                                    <li>Small Business Management</li>
                                    <li>Computer Applicaiton to Business-II</li>
                                    <li>Project</li>
                                </ul>
                                      <h4>Duration: 02  Years</h4>
                            </div>
                          </div>
                          <div class="tab-pane fade tab_content" id="course_outcomes" role="tabpanel" aria-labelledby="COURSE-OUTCOMES">
                            <div class="content">
                                <h3>COURSE OUTCOMES</h3>
                                <p>After Completion of This Diploma You will get Inter Equivalent Diploma, You will not need to do intermdiate again, after this diploma you can get admission in bachloers program in any unviersity</p>
                                <p>After Completion of This Degree you can apply for admission in any university in any discipline/field, like BBA, BCom, BA, BSc, BS(Business Administration, Accounting & Finance, Human Resource Management, Mass Communcation,Computer Science, Information Technology, Softwre Engineering) and in many more fields</p>
                            </div>

                          </div>
                          <div class="tab-pane fade tab_content" id="demo" role="tabpanel" aria-labelledby="DEMO">
                            <div class="content">
                                <h3>REGISTRATION FOR FREE DEMO CLASS</h3>
                                <h4>Please Fill Out This Follow, We Will Contact You for Demo Class Very Soon</h4>
                                
                                 <form id="demo" action="demoprocess.php">
                                    <div class="form-row">
                                      <div class="form-group col-md-6">
                                        <label for="EnquiryName">Name</label>
                                        <input type="text" class="form-control" id="EnquiryName" name="enquiryname" aria-describedby="name" placeholder="Enter Your Name" required>

                                      </div>
                                        
                                        <div class="form-group col-md-6">
                                            <label for="qualification">Qualificaiton</label>
                                            <input type="text" class="form-control" id="qualification" name="qualificaiton"  aria-describedby="qualification" placeholder="Enter Your Qualification" required>
                                        </div>
                                     </div>
                                     
                                    <div class="form-row">
                                      <div class="form-group col-md-6">
                                        <label for="previouscourse">Previous Course</label>
                                        <input type="text" class="form-control" id="previouscourse" name="previouscourse" aria-describedby="previouscourse" placeholder="Any Previous Course?">
                                     </div>
                                        
                                      <div class="form-group col-md-6">
                                            <label for="intersted">Intersted in Course</label>
                                            <input type="text" class="form-control" id="intersted" name="intersted" aria-describedby="intersted" placeholder="Enter Course for which you want Demo Class" required>
                                     </div>
                                     </div>
                                
                                     
                                    <div class="form-row">
                                         <div class="form-group col-md-6">
                                            <label for="contact">Contact Number</label>
                                            <input type="number" class="form-control" id="contact" name="contact" aria-describedby="contact" placeholder="Enter Your Contact Number" required>
                                        </div>
                                        
                                        <div class="form-group col-md-6">
                                            <label for="email">Email ID</label>
                                            <input type="email" class="form-control" id="email" name="email" aria-describedby="email" placeholder="Enter Your Email Id" required>
                                        </div>
                                     </div>
                                     
    
                                             <button type="submit" class="btn btn-primary">Submit</button>

                                </form>
                                
                            </div>
                          </div>
                        </div>
                    </div>
				</div>
                
                <div class="col-md-4 col-lg-4">
                    <div class="courses_list">
                        <div class="list_courses">
                            <ul>
                                <li><a href="#"><h3>VIRTUAL UNIVERSITY PROGRAMS</h3></a>
                                        <ul>
                                            <li><a href="#">MS/M.Phil, PHd Programs</a></li>
                                             <li><a href="#">Master's Programs</a></li>
                                             <li><a href="#">BS & Bachelors Programs</a></li>
                                             <li><a href="#">Post Graduate Diploma</a></li>
                                             <li><a href="#">Associate Degree Programs</a></li>
                                             <li><a href="#">Education Degree Programs</a></li>
                                        </ul>
                                    </li>
                                <li><a href="#"><h3>INTERMEDIATE PROGRAMS</h3></a>
                                    <ul>
                                        <li><a href="dba.html">Diploma In Buisness Administration</a></li>
                                         <li><a href="daeelectrical.html">DAE (Electricial)</a></li>
                                         <li><a href="daeelectronics.html">DAE (DAE Electronics)</a></li>
                                         <li><a href="daecit.html">DAE (Computer Information Technology)</a></li>
                                    </ul>
                                </li>
                                <li><a href="#"><h3>DIPLOMA COURSES</h3></a>
                                    <ul>
										<li><a href="pdit.html">Professional Diploma in Information Technology</a></li>
                                        <li><a href="iot.html">International Online Associate Training</a></li>
                                         <li><a href="awd.html">Advance Web Development</a></li>
                                        <li><a href="ceh.html">CERTIFIED ETHICAL HACKING</a></li>
                                    </ul>
                                </li>
                                <li><a href="#"><h3>CERTIFICATE COURSES</h3></a>
                                        <ul>
                                            <li><a href="cit.html">Certificate in Information Technology</a></li>
											<li><a href="clp.html">Computer Literacy Program</a></li>
                                             <li><a href="cmg.html">Certificate in Multimedia Graphics</a></li>
                                             <li><a href="cgd.html">Graphics Designing</a></li>
                                             <li><a href="oa.html">Microsoft Office</a></li>
                                             <li><a href="cad.html">AutoCAD 2D 3D</a></li>
                                             <li><a href="cc.html">Programming Courses</a></li>
											  <li><a href="chn.html">Certificate in Hardware & Networking</a></li>
                                        </ul>
                                    </li>

                            </ul>
                        </div>
                    
                    </div> 
                </div>
			</div>     

        </div>
        </div>
      <!--End Course Details Section -->

      @include('inc.footer')
      @endsection