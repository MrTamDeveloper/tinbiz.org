<div class="scenter container">
   <div class="search-inside search-in-status toogle-search">
      <h3>FIND YOUR TRIP</h3>
      <form name="frmSearch" class="form-horizontal" id="frmSearch" action="{{ url('search') }}" method="get">
         <ul>
            <li>
               <select class="form-control" name="slDestination" id="slDestination">
                  <option value="1">-- [Vietnam Destinations] --</option>
                  <?php
                     $destinations = App\TourDestination::where('active', 1)->orderBy('name','ASC')->get();
                  ?>
                  @foreach($destinations as $destination) 
                     <option value="{{ $destination->name }}">{{ $destination->name }}</option>
                  @endforeach 
               </select>
            </li>
            <li>
               <select class="form-control" name="slDuration" id="slDuration">
                  <option value="-1">-- [Trip Duration] --</option>
                  <option value="1 - 2">1 - 2 days</option>
                  <option value="2 - 5">2 - 5 days</option>
                  <option value="6 - 12">6 - 12 days</option>
                  <option value="13 -&gt;">13 -&gt; days</option>
               </select>
            </li>
            <li>
               <select class="form-control" name="slPrice" id="slPrice">
                  <option value="-1">-- [Price] --</option>
                  <option value="100 - 300">100 - 300 USD</option>
                  <option value="200 - 500">200 - 500 USD</option>
                  <option value="500 - 1000">500 - 1000 USD</option>
                  <option value="1000 -&gt;">&gt; 1000 USD</option>
                  </select>
            </li>
            <li class="lsearchlast">
               <input type="submit" name="Submit" id="Submit" value="Search" class="btn btn-main btn-orange" onclick="return validate();">
         </li>
         </ul>
     </form>
   </div>
</div>