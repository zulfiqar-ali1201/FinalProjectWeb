 
 <!-- start Announcements section -->
 <div id ="annoucements" class="offset latest_news_area p_120">
            <div class="container">
        		<div class="main_title">
        			<h2>Latest News & Announcemetns</h2>
        			<p> GET UPDATED WITH OUT NEW ANNOUNCEMENTS OFFERS</p>
        		</div>
        		<div class="row latest_news_inner">

						@foreach($announcements as $announcement)
        			<div class="col-lg-3 col-md-6">
        				<div class="l_news_item">
        					<img class="img-fluid" src="{{asset('storage/'.$announcement->image)}}" alt="">
        					<a class="date" href="#">{{$announcement->announcedate}}</a>
        					<a href="#"><h4>{{$announcement->description}}</h4></a>
        					<p>{{$announcement->description}}</p>
        				</div>
        			</div>
              @endforeach
        		</div>
        	</div>
        </div>
      <!--End announcements Section -->