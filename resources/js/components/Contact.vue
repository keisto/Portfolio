<template>
    <div class="animated fadeInUp">
        <div class="rounded border shadow overflow-hidden w-full mb-8">
            <div id='map' style='width: 100%; height: 300px;'></div>
        </div>

        <div class="bg-white rounded border borer-grey-light shadow p-6 lg:p-12 xl:p-12">
            <h1 class="text-black mb-4 lg:mb-10 xl:mb-10">Contact Me</h1>
            <div class="flex items-center justify-between flex-col md:flex-row lg:flex-row xl:flex-row">
                <p class="w-full text-grey-darker text-base mb-6">
                    Get in touch out with me for all your designing and developing needs.
                </p>

                <div class="w-full flex flex-col text-left md:text-right lg:text-right xl:text-right mb-6">
                    <p class="text-black">
                        <i class="text-grey-dark fal fa-map-marker-alt mr-2"></i>Seattle, Wa 98121
                    </p>
                    <p class="py-2">
                        <i class="text-grey-dark fal fa-mobile mr-2"></i>
                        <a href="tel:206-353-3484">206-353-3484</a>
                    </p>
                    <p>
                        <i class="text-grey-dark fal fa-envelope-open-text mr-2"></i>
                        <a href="mailto:keisertony@gmail.com">keisertony@gmail.com</a>
                    </p>
                </div>
            </div>

            <form @submit.prevent="submit" id="form">
                <div class="flex items-center">
                    <div class="w-full md:flex-1 lg:flex-1 xl:flex-1">
                        <div class="mb-2">
                            <div class="flex items-center justifiy-between">
                                <label class="block text-black font-bold flex-1" for="name">Name</label>
                                <div v-if="errors && errors.name" class="text-orange animated zoomIn text-sm">{{ errors.name[0] }}</div>
                            </div>

                            <input class="text-black bg-grey-lightest border rounded w-full py-2 px-3 focus:border-orange my-4" id="name" type="text" placeholder="Name" name="name" v-model="fields.name">
                        </div>
                        <div class="mb-2">
                            <div class="flex items-center justifiy-between">
                                <label class="flex-1 block text-black font-bold" for="email">Email</label>
                                <div v-if="errors && errors.email" class="text-orange animated zoomIn text-sm">{{ errors.email[0] }}</div>
                            </div>

                            <input class="text-black bg-grey-lightest border rounded w-full py-2 px-3 focus:border-orange my-4" id="email" type="text" name="email" placeholder="Someone@somewhere.something" v-model="fields.email">
                        </div>
                        <div class="mb-2">
                            <div class="flex items-center justifiy-between">
                                <label class="flex-1 block text-black font-bold" for="message">Message</label>
                                <div v-if="errors && errors.message" class="text-orange animated zoomIn text-sm">{{ errors.message[0] }}</div>
                            </div>

                            <textarea class="text-black bg-grey-lightest border rounded w-full py-2 px-3 focus:border-orange my-4" id="message" name="message" rows="4" placeholder="Something to say/ask?" v-model="fields.message"></textarea>
                        </div>
                    </div>
                    <div class="w-2/5 hidden md:block lg:block xl:block bg-center" style="height:256px;
                        background:url('/images/space-shuttle.png');
                        background-size: contain;
                        background-position: center right;
                        background-repeat: no-repeat no-repeat;">
                    </div>
                </div>

                <button type="submit" class="button" style="margin:0"><i class="fas fa-paper-plane fa-fw mr-2"></i>Send Message</button>
            </form>
            <div class="items-center justifiy-center hidden" id="success" style="height:376px">
                <div class="mx-auto max-w-sm">
                    <div class="rounded border border-green bg-green-lightest shadow-md text-green py-4 px-8">
                        <i class="far fa-hand-peace mr-2"></i>We'll be in touch soon!
                    </div>
                </div>
            </div>
        </div>

    </div>
</template>

<script>

    export default {
        mounted() {
            mapboxgl.accessToken = 'pk.eyJ1Ijoia2Vpc3RvIiwiYSI6ImNpa2l3c2twZTA1NmV1ZG02dDU2dDh0Y3AifQ.IsAoh6-Oygo60Myhyu-eXg';
            var map = new mapboxgl.Map({
                center: [-122.3448, 47.6156],
                zoom: 12,
                container: 'map',
                style: 'mapbox://styles/mapbox/navigation-guidance-day-v4'
            });
            var popup = new mapboxgl.Popup({closeOnClick: false})
                .setLngLat([-122.3448, 47.6156])
                .setHTML('<h2>I\'m Here!</h2>')
                .addTo(map);

            map.scrollZoom.disable();
            map.doubleClickZoom.disable();

            setTimeout(function() {
                $('.mapboxgl-popup-content h2').css('color','#382b5f');
            }, 250);
        },
        data() {
            return {
                fields: {},
                errors: {},
                success: false,
                loaded: true,
                action: '',
            }
        },

        methods: {

            submit() {
                if (this.loaded) {
                    this.loaded = false;
                    this.success = false;
                    this.errors = {};

                    axios.post('/send-message', this.fields).then(response => {
                        this.fields = {}; //Clear input fields.
                        this.loaded = true;
                        this.success = true;
                        // $('#form').addClass('animated').addClass('zoomOut');
                        // $('#form').addClass('animated').addClass('zoomOut');
                        //
                        animateCSS('#form', 'zoomOut', function() {
                            $('#form').toggle();
                            $('#success').removeClass('hidden').addClass('flex');
                            animateCSS('#success', 'zoomIn', function() {
                                setTimeout(function() {
                                    animateCSS('#success', 'zoomOut', function() {
                                        $('#success').removeClass('flex').addClass('hidden');
                                        $('#form').toggle();
                                    });
                                    animateCSS('#form', 'zoomIn', null);
                                }, 3000);
                            });
                        });


                    }).catch(error => {
                        this.loaded = true;

                        if (error.response.status === 422) {
                            this.errors = error.response.data.errors || {};
                        }
                    });
                }
            },
        },
    }
</script>
