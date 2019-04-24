<template>
    <div class="animated fadeInUp">
        <div class="bg-white rounded border borer-grey-light shadow p-6 lg:p-12 xl:p-12">
            <h1 class="text-black mb-4 lg:mb-10 xl:mb-10">Hello World!</h1>
            <div class="flex flex-row items-center">
                <div class="w-2/5 hidden md:block lg:block xl:block bg-center mr-0 md:mr-6 lg:mr-6 xl:mr-6" style="height:256px;
                    background:url('/images/astronaut-dance.png');
                    background-size: contain;
                    background-position: center left;
                    background-repeat: no-repeat no-repeat;">
                </div>
                <div class="flex-1">
                    <h2 class="text-black mb-8 mt-4">You found me.</h2>
                    <p class="text-grey-darker text-base mb-4">
                        I'm currently a freelancer, full-stack developer, and software engineer. However, I am looking for a career with a great company. Stay here a while and learn about me.
                        <router-link to="/about"><i class="far fa-long-arrow-right arrow"></i></router-link>
                    </p>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {};
</script>
