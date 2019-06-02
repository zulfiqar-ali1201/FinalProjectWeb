  <!-- start contact section -->
  <div id="contact" class="offset contact_area">
            <div class="container">
                 <div class="main_title">
        			<h2>CONTACT US</h2>
        			<p> You cant Get Connected with us with the following</p>
        		</div>
                
                <div class="container contact_inner my-3 py-5 text-center">
                    <div class="row mb-5">
                        <div class="col sub_title">
                            <h3>OUR CAMPUSES</h3>
                        </div>
                    </div>
					
                    <div class="row mb-5">
					@foreach($contacts as $contact)
                        <div class="col-md-6 campus text-justify-center">
                            <div class="map"><iframe src="" width="400" height="350" frameborder="0" style="border:0" allowfullscreen></iframe></div>
                            <h3>{{$contact->campus}}</h3>
                            <div class="add_block">
                                <ion-icon name="pin" class="icon_small"></ion-icon>
                                <p>{{$contact->address}}</p>
                            </div>
                            
                            <div class="add_block">
                                <ion-icon name="call" class="icon_small"></ion-icon>
                               <p>{{$contact->number}}</p>
                            </div>
                            
                            <div class="add_block">
                                <ion-icon name="mail" class="icon_small"></ion-icon>
                                <p>{{$contact->email}}</p>
                            </div>
                            
            
                        </div>
					@endforeach
                    
                    </div>
                    <div class="row mb-5">
                        <div class="col sub_title">
                            <h3>FEEDBACKS/SUGGESTIONS/QUERY/MESSAGE</h3>
							<p>Please Feel Free to ask any Query, any Feedback, give us any suggestion or leave any message</p>
                        </div>
                    </div>
                    @if($errors->any())
                    <div class="alert alert-danger">
                        @foreach($errors->all() as $error)
                         <ul class="list-group">
                            {{$error}}

                         @endforeach
                     </ul>
                 </div>
                 @endif
					<div class="row mb-5">

                                 <form id="demo" action="{{route('feedbacks.store')}}" method="post">
                                    <div class="form-row">
                                      <div class="form-group col-md-6">
                                        <label for="EnquiryName">Name</label>
                                        <input type="text" class="form-control" id=name" name="name" aria-describedby="name" placeholder="Enter Your Name" required>

                                      </div>
                                        
                                        <div class="form-group col-md-6">
                                            <label for="qualification">Qualificaiton</label>
                                            <select id="qualificaiton" name="qualification" class="form-control" aria-describedby="qualification" placeholder="Enter Your Qualification" required>
                                                <option value="Middle">Middle</option>
                                                <option value="Matric">Matric</option>
                                                <option value="Intermediate">Intermediate or Equaivalent</option>
                                                <option value="Graduate">Graduation</option>
                                                <option value="Masters">Masters</option>
                                                <option value="M.Phil/Phd">M.Phil / Phd</option>
                                            </select>
                                            <!--<input type="text" class="form-control" id="qualification" name="qualificaiton"  aria-describedby="qualification" placeholder="Enter Your Qualification" required> -->
                                        </div>
                                     </div>
                                     
                                    <div class="form-row">
                                      <div class="form-group col-md-12">
                                        <label for="previouscourse">Message</label>
                                        <textarea class="form-control" id="message" name="message" aria-describedby="message" placeholder="Your Message/Query/Suggestin/Feedback">
										</textarea>
										
                                     </div>
                                        
                                   
                                     </div>
                                
                                     
                                    <div class="form-row">
                                         <div class="form-group col-md-6">
                                            <label for="contact">Contact Number</label>
                                            <input type="number" class="form-control" id="number" name="number" aria-describedby="contact" placeholder="Enter Your Contact Number" required>
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
      <!--End contact Section -->