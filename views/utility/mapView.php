<title>Utility Inspection</title>
<link href="/views/utility/styles/style1.css" rel="stylesheet" type="text/css">

<!--jquery library -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
<!--Contains token reading functions -->
<script src="/views/utility/methods/login.js"></script>
<!--Creates global variables and contains getAll Ajax Call -->
<script src="/views/utility/methods/global.js"></script>
<!--Creates map object -->
<script src="/views/utility/methods/initMap.js"></script>
<!--Creates Marker objects/Contains functions and event listeners-->
<script src="/views/utility/methods/addMarker++.js"></script>
<!--Creates Next Buttons -->
<script src="/views/utility/methods/nextMarker.js"></script>

<!-- Does a callback. Not sure if needed. Further testing required!!!
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAdB8aLpUldzTnezuHqo8T0_YKSa2vIS-o&callback=initMap"
	async defer></script> -->

<!--Same as above but without callback -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAdB8aLpUldzTnezuHqo8T0_YKSa2vIS-o"
        async defer></script>
<img class="source-image" src="/views/utility/images/PowerLinesBackgroundColor.jpg" alt=""/>

<!--Filter boxes -->
<nav id="filter-group" class="filter-group shadow-z-2">

	<div id="timeEntryLabel">
		<textarea class ="shadow-z-1" id="dateArea" rows="1"  placeholder="yyyy-mm-dd" maxlength="10"></textarea>
	</div>
	<input type="checkbox" id="poi-Green">
	<label for="poi-Green">Green</label>
	<input type="checkbox" id="poi-Yellow">
	<label for="poi-Yellow">Yellow</label>
	<input type="checkbox" id="poi-Red">
	<label for="poi-Red">red</label>


	<div id="selectButtons">
		<button type="button" class="selectButtons" id="timeFilterButton" onclick="timeFilter()">&raquo;</button>
		<button type="button" class="selectButtons" id="nextGreenButton" onclick="nextGreenMarker()">&raquo;</button>
		<button type="button" class="selectButtons" id="previousGreenButton" onclick="previousGreenMarker()">&laquo;</button>
		<button type="button" class="selectButtons" id="nextYellowButton" onclick="nextYellowMarker()">&raquo;</button>
		<button type="button" class="selectButtons" id="previousYellowButton" onclick="previousYellowMarker()">&laquo;</button>
		<button type="button" class="selectButtons" id="nextRedButton" onclick="nextRedMarker()">&raquo;</button>
		<button type="button" class="selectButtons" id="previousRedButton" onclick="previousRedMarker()">&laquo;</button>
	</div>
</nav>



<div id="box">

	<!-- Old unedited image -->
	<!--<img id="myImg" src="https://craftsmanproperties.net/wp-content/uploads/sf_img/default.jpg"> -->
	<img class ="shadow-z-2" id="myImg" src="/views/utility/images/awaitingImage.jpg">


	<div class ="shadow-z-2" id='infoBox'>

		<input class='css-checkbox' type="checkbox" name="powerline" id="powerline" value="False">
		<label for='powerline' class='css-label'>Powerline</label>

		<input class='css-checkbox' type="checkbox" name="powerpole" id="powerpole" value="False">
		<label for='powerpole' class='css-label'>Powerpole</label>

		<input class='css-checkbox' type="checkbox" name="overgrowth" id="overgrowth" value="False">
		<label for='overgrowth' class='css-label'>Overgrowth</label>

		<input class='css-checkbox' type="checkbox" name="oversag" id="oversag" value="False">
		<label for='oversag' class='css-label'>Oversag</label><br><br>
		<label id="latitudeLabel">Latitude: </label>
		<label id="Latitude"></label>
		<br>
		<label id="longitudeLabel">Longitude: </label>
		<label id="Longitude"></label>
		<br>
		<label id="timeLabel">Date Added: </label>
		<label id="time"></label>
		<br><br>
		<div id="commentDiv">
			<label>Location Comment:</label>
			<br>
			<textarea class ="shadow-z-1" id="commentArea" rows="3"  placeholder="Enter notes about the current location."></textarea>
		</div>
		<div id="prevCommentDiv">
			<label id="prevCommentLabel">Previous Comments:</label>
			<br>
			<textarea class ="shadow-z-1" id="prevCommentArea" rows="3"  placeholder="Previous entries for location will be found here." readonly></textarea>
		</div>
		<br>

		<button id="button" type="button">Update</button>
	</div><!--End of infoBox -->

	<!-- The Modal -->
	<div id="myModal" class="modal">

		<!-- The Close Button -->
		<span class="close" onclick="document.getElementById('myModal').style.display='none'">&times;</span>

		<!-- Modal Content (The Image) -->
		<img class="modal-content" id="img01">

		<!-- Modal Caption (Image Text) -->
		<div id="caption"></div>
	</div><!--End of Modal -->

</div><!--End of box -->


<div id="map" class ="shadow-z-2"></div>

<!-- javascript for modal operation -->
<script src="/views/utility/methods/modal.js"></script>
<!-- javascript for filter operation -->
<script src="/views/utility/methods/filter.js"></script>