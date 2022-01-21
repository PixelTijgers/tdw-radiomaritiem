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
<div id="countdown">

    <div class="cd-box">
        <p class="numbers days">00</p><br>
        <p class="strings timeRefDays">dagen</p>
    </div>

    <div class="cd-box">
        <p class="numbers hours">00</p><br>
        <p class="strings timeRefHours">uren</p>
    </div>

    <div class="cd-box">
        <p class="numbers minutes">00</p><br>
        <p class="strings timeRefMinutes">minuten</p>
    </div>

    <div class="cd-box">
        <p class="numbers seconds">00</p><br>
        <p class="strings timeRefSeconds">seconden</p>
    </div>

</div>
<!-- end div#countdown -->

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
  				days == 1 ? thisEl.find(".timeRefDays").text("Days") : thisEl.find(".timeRefDays").text("Days");
  				hours == 1 ? thisEl.find(".timeRefHours").text("Hours") : thisEl.find(".timeRefHours").text("Hours");
  				minutes == 1 ? thisEl.find(".timeRefMinutes").text("Minutes") : thisEl.find(".timeRefMinutes").text("Minutes");
  				seconds == 1 ? thisEl.find(".timeRefSeconds").text("Seconds") : thisEl.find(".timeRefSeconds").text("Seconds");
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
