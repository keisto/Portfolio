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
                        I'm currently just hanging out here! I'm looking for a good team to utilize my skills and passion for building great products and services.
                    </p>
                    <p class="text-grey-darker text-base mb-4">
                        I mostly use Laravel for my Back-End and VueJS for Front-End. However, I'm not stuck in my ways I'm open to learning different stacks as I am currently trying to switch out of PHP and MySQL. Additionally, I took it upon myself to learn Flutter to build mobile companions for my web applications.
                    </p>
                    <p class="text-grey-darker text-base mb-4">
                          Stay here a while and learn about me.
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
