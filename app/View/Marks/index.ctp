
	<!-- <?php var_dump($marks);?>  -->

<style>
/*	.radio-toolbar input[type="radio"] {
	    display:none;
	}
	input[type="radio"] + label {
		display: block;
		width: 50%;
		float: left;
	  	margin: 0;
	  	margin: 10px 0;
	}
	.radio-toolbar label {
		padding: 18px;
	  	font-size: 16px;
	  	background: #333;
	  	border: 1px solid black;
	  	color: #ddd;
	}

	.radio-toolbar input[type="radio"]:checked + label {
	    background-color: #43ac6a;
	    border-color: #3c9a5f;
	    color: white;
	}

	.radio li {
		border: 1px solid black;
		margin: 0;
		padding: 0;
		margin: 10px 0;
		list-style: none;
	}*/
</style>

<div class="navbar ">
		
	  <nav class="white darken-1 ">
	    <div class="nav-wrapper">
	    		<div class="container">
			      <div class="col s12">
			        <a href="#!" class="brand-logo amber-text text-darken-2"><i class="mdi-social-person"></i><p><?=$user["User"]["name"] ?></p></a>
			        <ul class="right side-nav amber-text text-darken-2">
			          <!-- <li><i class="mdi-social-person"></i><p><?=$user["User"]["name"] ?></p></li> -->
			          <li class="amber darken-1"><a href="<?php $this->Path->myroot(); ?>marks/logout"><i class="mdi-action-lock-open white-text text-darken-2"></i></a></li>
			        </ul>
			      </div>
			    </div>
	    </div>
	  </nav>
</div>
<div class="container">
<!-- 
<div class="header">
	<div class="row">	
		<div class="large-8 medium-8 small-6 columns">
			<h1>培正中學歌唱比賽</h1>
		</div>
		<div class="large-4 medium-4 small-6 columns">
			<a href="<?php $this->Path->myroot(); ?>marks/logout" class="button logout small">登出<br><?=$user["User"]["name"] ?></a>
		</div>
	</div>
</div> -->
        	<?php echo $this->Session->flash(); ?>


	<div class="row">
			
	</div>
	<div class="row">
		<form action="<?php $this->Path->myroot(); ?>marks/add" method="post" id="marking-form" data-abide>
			<div class="box">
		
			<div class="card white lighten-5">
		    <div class="card-content black-text">
		      <!-- <span class="card-title black-text">評分</span> -->
					<div class="input">
						<label>No</label>
						<input type="number" name="Mark[singer_id]" id="singer_id" required>
					</div>
					<center>
						<div id="loading" class="preloader-wrapper small active">
						    <div class="spinner-layer spinner-blue">
						      <div class="circle-clipper left">
						        <div class="circle"></div>
						      </div><div class="gap-patch">
						        <div class="circle"></div>
						      </div><div class="circle-clipper right">
						        <div class="circle"></div>
						      </div>
						    </div>

						    <div class="spinner-layer spinner-red">
						      <div class="circle-clipper left">
						        <div class="circle"></div>
						      </div><div class="gap-patch">
						        <div class="circle"></div>
						      </div><div class="circle-clipper right">
						        <div class="circle"></div>
						      </div>
						    </div>

						    <div class="spinner-layer spinner-yellow">
						      <div class="circle-clipper left">
						        <div class="circle"></div>
						      </div><div class="gap-patch">
						        <div class="circle"></div>
						      </div><div class="circle-clipper right">
						        <div class="circle"></div>
						      </div>
						    </div>

						    <div class="spinner-layer spinner-green">
						      <div class="circle-clipper left">
						        <div class="circle"></div>
						      </div><div class="gap-patch">
						        <div class="circle"></div>
						      </div><div class="circle-clipper right">
						        <div class="circle"></div>
						      </div>
						    </div>
						  </div>
					</center>
					<ul class="collection">
			     <li class="collection-item">
							<label>Use of English (1-30)</label>
							<div class="row">
							  <div class="small-10 medium-11 columns">
							    <div id="m1_slider" class="range-slider radius" data-slider data-options="display_selector: #sliderOutput1; start: 1; end: 30;">
							      <span class="range-slider-handle" role="slider" tabindex="0"></span>
							      <span class="range-slider-active-segment"></span>
							      <input type="hidden" name="Mark[m1]">
							    </div>
							  </div>
							  <div class="small-2 medium-1 columns">
							    <span id="sliderOutput1"></span>
							  </div>
							</div>
			     </li>
			     <li class="collection-item">
							<label>Overall Performance & Organization (1-35)</label>
							<div class="row">
							  <div class="small-10 medium-11 columns">
							    <div id="m2_slider" class="range-slider radius" data-slider data-options="display_selector: #sliderOutput2; start: 1; end: 35;">
							      <span class="range-slider-handle" role="slider" tabindex="0"></span>
							      <span class="range-slider-active-segment"></span>
							      <input type="hidden" name="Mark[m2]">
							    </div>
							  </div>
							  <div class="small-2 medium-1 columns">
							    <span id="sliderOutput2"></span>
							  </div>
							</div>

			     </li>
			     <li class="collection-item">
							<label>Originality & Creatvity (1-20)</label>
							<div class="row">
							  <div class="small-10 medium-11 columns">
							    <div id="m3_slider" class="range-slider radius" data-slider data-options="display_selector: #sliderOutput3; start: 1; end: 20;">
							      <span class="range-slider-handle" role="slider" tabindex="0"></span>
							      <span class="range-slider-active-segment"></span>
							      <input type="hidden" name="Mark[m3]">
							    </div>
							  </div>
							  <div class="small-2 medium-1 columns">
							    <span id="sliderOutput3"></span>
							  </div>
							</div>

			     </li>
			     <li class="collection-item">
							<label>Audience Response (1-15)</label>
							<div class="row">
							  <div class="small-10 medium-11 columns">
							    <div id="m4_slider"  class="range-slider radius" data-slider data-options="display_selector: #sliderOutput4; start: 1; end: 15;">
							      <span class="range-slider-handle" role="slider" tabindex="0"></span>
							      <span class="range-slider-active-segment"></span>
							      <input type="hidden" name="Mark[m4]">
							    </div>
							  </div>
							  <div class="small-2 medium-1 columns">
							    <span id="sliderOutput4"></span>
							  </div>
							</div>

			     </li>
	          <li class="collection-item" style="display:none;">
	     				<label>Singing (if any)</label>
	     				<div class="row">
	     				  <div class="small-10 medium-11 columns">
	     				    <div id="m5_slider"  class="range-slider radius" data-slider data-options="display_selector: #sliderOutput5; start: 0; end: 10;">
	     				      <span class="range-slider-handle" role="slider" tabindex="0"></span>
	     				      <span class="range-slider-active-segment"></span>
	     				      <input type="hidden" name="Mark[m5]">
	     				    </div>
	     				  </div>
	     				  <div class="small-2 medium-1 columns">
	     				    <span id="sliderOutput5"></span>
	     				  </div>
	     				</div>

	          </li>
			   </ul>
		    </div>
		  </div>
				
			<button id="submit_score" type="submit" class="btn-large waves-effect waves-light amber darken-1">Submit<i class="mdi-content-send right"></i></button>
		</form>

	</div>

</div>

<script>
$(document).ready(function(){
	$("#loading").hide();
	function initSlider() {
		$("#m1_slider").foundation('slider', 'set_value', 1);
		$("#m2_slider").foundation('slider', 'set_value', 1);
		$("#m3_slider").foundation('slider', 'set_value', 1);
		$("#m4_slider").foundation('slider', 'set_value', 1);
		$("#m5_slider").foundation('slider', 'set_value', 0);
	}

	initSlider();

		function singerChanged() {
			var singer_id = $("#singer_id").val();

			if (singer_id!="") {
				$("#loading").show();
				$.getJSON( '<?php echo str_replace("//","/", $this->webroot); ?>marks/getMarks.json?singer_id='+singer_id, function( data ) {
					console.log(data);
					if (data!="") {
						var m1 = data["m1"];
						var m2 = data["m2"];
						var m3 = data["m3"];
						var m4 = data["m4"];
						var m5 = data["m5"];
						$("#m1_slider").foundation('slider', 'set_value', m1);
						$("#m2_slider").foundation('slider', 'set_value', m2);
						$("#m3_slider").foundation('slider', 'set_value', m3);
						$("#m4_slider").foundation('slider', 'set_value', m4);
						$("#m5_slider").foundation('slider', 'set_value', m5);
					}
					else {
						initSlider();
					}

				 // 	var myhtml = "";
				 // 	$.each( data, function( key, val ) {
				 // 		myhtml += "<option value='" + key + "'>" + val["name"] + " - $"+ val["price"]+ "</option>";
				 // 	});
				 // 	if (myhtml == "") myhtml = "<option value='0'>-</option>";
					// console.log(myhtml);
					// $("#book").html(myhtml);


				}).done(function(){
					$("#loading").hide();
					console.log("loaded");
				});
			}
			else {
				initSlider();
			}
		}
		singerChanged();

		$("#singer_id").change(singerChanged);
})
</script>