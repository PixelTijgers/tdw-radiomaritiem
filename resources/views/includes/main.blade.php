<div class="col-span-12 lg:col-start-2 lg:col-span-7">

    <div class="bg-white overflow-hidden">

        <div>

            <video
                id="player"
                class="video-js vjs-default-skin vjs-16-9 vjs-big-play-centered"
                controls
                data-setup='{}'
            >
                <source src="https://140238.global.ssl.fastly.net/edge/live_113f3660810f11eb9d9f7ba439872695/index.m3u8" type="application/x-mpegURL" />
                <p class="vjs-no-js">
                    To view this video please enable JavaScript, and consider upgrading to a
                    web browser that
                    <a href="https://videojs.com/html5-video-support/" target="_blank"
                    >supports HTML5 video</a
                    >
                </p>
            </video>

            <script>

                var player = videojs('player');

                player.ready(function() {
                    var promise = player.play();

                    if (promise !== undefined) {
                        promise.then(function() {
                            // Autoplay started!
                        }).catch(function(error) {
                            // Autoplay was prevented.
                        });
                    }
                });

            </script>

        </div>

        @if($meta === true)
            <div class="p-8">

                <h3 class="block mt-1 text-lg leading-tight font-medium text-black">{{ $title }}</h3>
                <p class="mt-2 text-gray-500 font-light">{{ $description }}</p>

            </div>
        @endif

    </div>

</div>
