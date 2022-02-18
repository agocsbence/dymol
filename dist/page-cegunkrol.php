<?php

/* Template Name: Cégünkről */

get_header(); ?>

<section id="home-hero" style="background-image: url('<?php bloginfo('template_url') ?>/assets/img/cegunkrol.jpg');">
	<img src="<?php bloginfo('template_url') ?>/assets/img/bigtext.png" alt="Dymol text logo" id="bigText">
</section>

<section class="py-4">
    <div class="container">
        <div class="border-top">
            <h1 class="uppercase">Munkatársak</h1>
        </div>
    </div>
    <div class="container">
        <div class="grid grid-2 grid-gap-2 mt-4">
            <div class="textbox">
                <p><?php the_field('munkatarsak_szoveg_bal'); ?></p>
            </div>
            <div class="textbox">
                <p><?php the_field('munkatarsak_szoveg_jobb'); ?></p>
            </div>
        </div>
    </div>
</section>
<section class="py-4">
    <div class="container">
        <div class="border-top">
            <h1 class="uppercase">Nyitott pozíciók</h1>
        </div>
    </div>
    <div class="container">
        <div class="mt-4">
            <?php the_field('nyitott_poziciok') ?>
        </div>
    </div>
</section>
<section class="py-4">
    <div class="container">
        <div class="border-top">
            <h1 class="uppercase">Kapcsolat</h1>
        </div>
    </div>
    <div class="container">
        <div class="grid grid-2 grid-gap-2 mt-4">
            <div class="textbox">
                <p><?php the_field('kapcsolat'); ?></p>
            </div>
            <div id="map" style="width: 100%; height: 100%;"></div>
        </div>
    </div>
</section>

<script>
    function initMap() {
        var location = { lat: 47.534628516575985, lng: 19.249071699989905 };
        var map = new google.maps.Map(document.getElementById("map"), {
            zoom: 15,
            center: location,
            disableDefaultUI: true,
            styles: [
                {
                    featureType: "all",
                    elementType: "geometry",
                    stylers: [
                        {
                            visibility: "simplified",
                        },
                    ],
                },
                {
                    featureType: "all",
                    elementType: "geometry.stroke",
                    stylers: [
                        {
                            color: "#eaecf2",
                        },
                    ],
                },
                {
                    featureType: "all",
                    elementType: "labels.text.fill",
                    stylers: [
                        {
                            color: "#9398a7",
                        },
                        {
                            gamma: "1.00",
                        },
                        {
                            saturation: "0",
                        },
                    ],
                },
                {
                    featureType: "administrative",
                    elementType: "labels.icon",
                    stylers: [
                        {
                            color: "#9398a7",
                        },
                    ],
                },
                {
                    featureType: "landscape",
                    elementType: "geometry.fill",
                    stylers: [
                        {
                            color: "#f7f8fa",
                        },
                    ],
                },
                {
                    featureType: "poi",
                    elementType: "all",
                    stylers: [
                        {
                            visibility: "on",
                        },
                    ],
                },
                {
                    featureType: "poi",
                    elementType: "geometry.fill",
                    stylers: [
                        {
                            color: "#eaecf2",
                        },
                    ],
                },
                {
                    featureType: "poi",
                    elementType: "labels.icon",
                    stylers: [
                        {
                            color: "#9398a7",
                        },
                    ],
                },
                {
                    featureType: "poi.business",
                    elementType: "all",
                    stylers: [
                        {
                            visibility: "off",
                        },
                    ],
                },
                {
                    featureType: "road",
                    elementType: "geometry",
                    stylers: [
                        {
                            color: "#fffffe",
                        },
                    ],
                },
                {
                    featureType: "road",
                    elementType: "labels.text.fill",
                    stylers: [
                        {
                            color: "#bec1ca",
                        },
                    ],
                },
                {
                    featureType: "road",
                    elementType: "labels.icon",
                    stylers: [
                        {
                            visibility: "off",
                        },
                    ],
                },
                {
                    featureType: "road.highway",
                    elementType: "labels.icon",
                    stylers: [
                        {
                            visibility: "off",
                        },
                    ],
                },
                {
                    featureType: "transit",
                    elementType: "geometry.fill",
                    stylers: [
                        {
                            color: "#eaecf2",
                        },
                    ],
                },
                {
                    featureType: "transit",
                    elementType: "labels.icon",
                    stylers: [
                        {
                            saturation: "-85",
                        },
                        {
                            lightness: "0",
                        },
                        {
                            gamma: "1.3",
                        },
                        {
                            hue: "#9398a7",
                        },
                    ],
                },
                {
                    featureType: "transit.line",
                    elementType: "geometry.fill",
                    stylers: [
                        {
                            color: "#eaecf2",
                        },
                    ],
                },
                {
                    featureType: "transit.line",
                    elementType: "labels.text.stroke",
                    stylers: [
                        {
                            color: "#ffffff",
                        },
                    ],
                },
                {
                    featureType: "water",
                    elementType: "geometry.fill",
                    stylers: [
                        {
                            color: "#d4d6dc",
                        },
                    ],
                },
                {
                    featureType: "water",
                    elementType: "labels.text.fill",
                    stylers: [
                        {
                            color: "#9398a7",
                        },
                    ],
                },
            ],
        });
        // The marker, positioned at Ferdio
        var marker = new google.maps.Marker({
            position: location,
            map: map,
            icon: "<?php bloginfo('template_url') ?>/assets/img/marker.svg",
        });
    }
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAS283uJIpV2r7KAFOGueUOO8CQnArZc6E&callback=initMap"></script>

<?php get_footer();