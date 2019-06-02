<!-- start Gallery section -->
<div id="gallery" class="offset gallery_area p_120">
            <div class="container justify-content-center">
        		<div class="main_title">
        			<h2>ECIC IMAGE GALLERY</h2>
        			<p> BUILDING, COMPUTER LABS, ELECTRICAL LABS, PROJECTOR BASED ROOMS, EVENTS</p>
        		</div>
                
                <div class="btn_container" id="btn_controller">
                    
                    <ul>
                        <li class="btn btn-light" data-filter="all"> SHOW ALL </li>
                        <li class="btn btn-light" data-filter="building"> BUILDING </li>
                        <li class="btn btn-light" data-filter="computer"> COMPUTER LABS </li>
                        <li class="btn btn-light" data-filter="electrician"> ELECTRICIAN LABS </li>
                        <li class="btn btn-light" data-filter="theory"> THEORY ROOMS </li>
                        <li class="btn btn-light" data-filter="ece">EARLY CHILD EDUCATION </li>
                        <li class="btn btn-light" data-filter="events"> EVENTS </li>
                    </ul>
        			
        		</div>
                
             
        		<div class="gallery_inner justify-content-center">
            
                    <div class="row mb-3 filtr-container">
                        @foreach($gallery as $gallery)
                            <div class="col-md-3 filtr-item" data-category="{{$gallery->category}}" data-sort="value" >
                                    <a href="{{asset('storage/'.$gallery->image)}}" data-lightbox="mygallery" data-title="{{$gallery->title}}">
                                        <img src="{{asset('storage/'.$gallery->imageicon)}}" alt="Lab" class="img-thumbnail">
                                    </a>
                            </div>
                        @endforeach
                    </div>
        

                </div>

            
                
            </div>
      </div>
      <!--End gallery Section -->