<!--
<div class="flex flex-col justify-center md:pt-5 md:pb-5 lg:pt-10 lg:pb-10" id="request">

    <div class="embed-container">

        <iframe src="https://www.videoask.com/f7c9vext7"
                allow="camera *; microphone *; autoplay *; encrypted-media *; fullscreen *; display-capture *;"
                width="100%"
                height="600px"
                style="border: none; border-radius: 24px"
        >
        </iframe>

    </div>

</div>
-->
<h3 class="text-center text-4xl mt-10 mb-6">Nog maar:</h3>

<div id="countdown" class="lg:px-16">

    <div class="cd-box w-1/4">
        <p class="numbers days text-5xl lg:text-8xl">00</p>
        <p class="strings timeRefDays">dagen</p>
    </div>

    <div class="cd-box w-1/4 mx-3">
        <p class="numbers hours text-5xl lg:text-8xl">00</p>
        <p class="strings timeRefHours">uren</p>
    </div>

    <div class="cd-box w-1/4 mr-3">
        <p class="numbers minutes text-5xl lg:text-8xl">00</p>
        <p class="strings timeRefMinutes">minuten</p>
    </div>

    <div class="cd-box w-1/4">
        <p class="numbers seconds text-5xl lg:text-8xl">00</p>
        <p class="strings timeRefSeconds">seconden</p>
    </div>

</div>
<!-- end div#countdown -->

<h4 class="text-center text-2xl mb-10 mt-8">Tot Radio Mariteam</h4>

  <script>

  $(document).ready(function(){
  	//
    (function(e){
  		e.fn.countdown = function (t, n){
  			function i(){
  				eventDate = Date.parse(r.date) / 1e3;
  				currentDate = Math.floor(e.now() / 1e3);
  				//
  				if(eventDate <= currentDate){
  					n.call(this);
  					clearInterval(interval)
  				}
  				//
  				seconds = eventDate - currentDate;
  				days = Math.floor(seconds / 86400);
  				seconds -= days * 60 * 60 * 24;
  				hours = Math.floor(seconds / 3600);
  				seconds -= hours * 60 * 60;
  				minutes = Math.floor(seconds / 60);
  				seconds -= minutes * 60;
  				//
  				days == 1 ? thisEl.find(".timeRefDays").text("dagen") : thisEl.find(".timeRefDays").text("dagen");
  				hours == 1 ? thisEl.find(".timeRefHours").text("uren") : thisEl.find(".timeRefHours").text("uren");
  				minutes == 1 ? thisEl.find(".timeRefMinutes").text("minuten") : thisEl.find(".timeRefMinutes").text("minuten");
  				seconds == 1 ? thisEl.find(".timeRefSeconds").text("seconden") : thisEl.find(".timeRefSeconds").text("seconden");
  				//
  				if(r["format"] == "on"){
  					days = String(days).length >= 2 ? days : "0" + days;
  					hours = String(hours).length >= 2 ? hours : "0" + hours;
  					minutes = String(minutes).length >= 2 ? minutes : "0" + minutes;
  					seconds = String(seconds).length >= 2 ? seconds : "0" + seconds
  				}
  				//
  				if(!isNaN(eventDate)){
  					thisEl.find(".days").text(days);
  					thisEl.find(".hours").text(hours);
  					thisEl.find(".minutes").text(minutes);
  					thisEl.find(".seconds").text(seconds)
  				}
          else{
            errorMessage = "Invalid date. Example: 27 March 2015 17:00:00";
  					alert(errorMessage);
  					console.log(errorMessage);
  					clearInterval(interval)
  				}
  			}
  			//
  			var thisEl = e(this);
  			var r = {
  				date: null,
  				format: null
  			};
  			//
  			t && e.extend(r, t);
  			i();
  			interval = setInterval(i, 1e3)
  		}
  	})(jQuery);
  	//
  	$(document).ready(function(){
  		function e(){
  			var e = new Date;
  			e.setDate(e.getDate() + 60);
  			dd = e.getDate();
  			mm = e.getMonth() + 1;
  			y = e.getFullYear();
  			futureFormattedDate = mm + "/" + dd + "/" + y;
  			return futureFormattedDate
  		}
  		//
  		$("#countdown").countdown({
  			date: "27 Januari 2022 10:00:00", // change date/time here - do not change the format!
  			format: "on"
  		});
  	});
  });

  </script>
