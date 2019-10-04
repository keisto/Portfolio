<template>
    <div class="animated fadeInUp">
        <div class="bg-white rounded border borer-grey-light shadow p-6 lg:p-12 xl:p-12">
            <h1 class="text-black mb-4 lg:mb-10 xl:mb-10">About Me</h1>
            <p class="text-grey-darker text-base mb-4">
                Developing has always been a great passion of mine. In the past, I tended to work on personal projects, but now I am looking to be a part of something more; therefore, I moved to Seattle in hopes to find a full-time career. I am self-motivated and I love to learn new things. I spend most my time developing and watching coding courses through Lynda.com, LinkedIn.com/Learning, Laracasts.com, Udemy.com, and Codecourse.com. Most of my playground work goes unpublished, but I do have a couple of projects making their way to the public check them out.
                <router-link to="/projects"><i class="far fa-long-arrow-right arrow"></i></router-link>
            </p>

            <span class="divider my-10 md:my-24 lg:my-24 xl:my-24"></span>

            <h2 class="text-black mb-8 mt-4">Education</h2>
            <div class="flex flex-row-reverse items-center">
                <div class="flex-1">
                    <div class="flex justify-between items-center mb-4">
                        <h4 class="text-black">Fail Sail University</h4>
                        <span class="rounded-full border border-green bg-green-lightest text-green text-xs px-2 py-1 ml-4"><i class="far fa-graduation-cap mr-1"></i>Graduated: <strong>2016</strong></span>
                    </div>
                    <p class="mb-4 text-black">
                        Bachelor's Degree in <u>Mobile Development</u>
                    </p>
                    <p class="text-grey-darker text-base">
                        In Mobile Development we learned how to build mobile applications for both iOS and Android devices. It was common to have these applications cross platformed <span class="hint">(sharing the same data)</span>. I achieved this by using Google's NoSQL database called Firebase.
                    </p>
                </div>


                <div class="w-2/5 hidden md:block lg:block xl:block bg-center" style="height:256px;
                    background:url('/images/astronaut.png');
                    background-size: contain;
                    background-position: center left;
                    background-repeat: no-repeat no-repeat;">
                </div>
            </div>

            <span class="divider my-10 md:my-24 lg:my-24 xl:my-24"></span>
            <div class="flex justify-between items-center mb-8 mt-4">
                <h2 class="text-black">Programming Languages</h2>
                <p class="text-xs hint">In order of mastery.</p>
            </div>
            <div class="flex flex-row items-center">
                <ul class="flex-1 text-black">
                    <li class="text-base">HTML5 &amp; CSS3 <span class="rounded-full border border-green bg-green-lightest text-green text-xs px-2 py-1 ml-4">7 years</span></li>
                    <li class="text-base">PHP <span class="rounded-full border border-green bg-green-lightest text-green text-xs px-2 py-1 ml-4">6 years</span></li>
                    <li class="text-base">JavaScript <span class="rounded-full border border-green bg-green-lightest text-green text-xs px-2 py-1 ml-4">6 years</span></li>
                    <li class="text-base">Swift <span class="rounded-full border border-green bg-green-lightest text-green text-xs px-2 py-1 ml-4">4 years</span></li>
                    <li class="text-base">Flutter <span class="rounded-full border border-green bg-green-lightest text-green text-xs px-2 py-1 ml-4"><1 year</span></li>
                </ul>
                <div class="w-2/5 hidden md:block lg:block xl:block bg-center" style="height:256px;
                    background:url('/images/alien.png');
                    background-size: contain;
                    background-position: center right;
                    background-repeat: no-repeat no-repeat;">
                </div>
            </div>

            <span class="divider my-10 md:my-24 lg:my-24 xl:my-24"></span>

            <h2 class="text-black mb-8 mt-4">Frameworks</h2>
            <div class="flex flex-row-reverse items-center">
                <ul class="w-full md:w-2/5 lg:w-2/5 xl:w-2/5 text-black">
                    <li class="text-base">Laravel <span class="rounded-full border border-green bg-green-lightest text-green text-xs px-2 py-1 ml-4">4 years</span></li>
                    <li class="text-base">Sass <span class="rounded-full border border-green bg-green-lightest text-green text-xs px-2 py-1 ml-4">3 year</span></li>
                    <li class="text-base">TailwindCSS <span class="rounded-full border border-green bg-green-lightest text-green text-xs px-2 py-1 ml-4">2 years</span></li>
                    <li class="text-base">Vue.JS <span class="rounded-full border border-green bg-green-lightest text-green text-xs px-2 py-1 ml-4">1 year</span></li>
                    <li class="text-base"><span class="line-through">Bootstrap</span> <span class="rounded-full border border-green bg-green-lightest text-green text-xs px-2 py-1 ml-4">3 years</span></li>
                </ul>
                <div class="flex-1 hidden md:block lg:block xl:block bg-center" style="height:256px;
                    background:url('/images/capsule.png');
                    background-size: contain;
                    background-position: center left;
                    background-repeat: no-repeat no-repeat;">
                </div>
            </div>
            <span class="divider my-10 md:my-24 lg:my-24 xl:my-24"></span>
            <h2 class="text-black mb-8 mt-4">Integrated Development Environments <span class="hint">(IDE)</span></h2>
            <div class="flex flex-row items-center">
                <ul class="flex-1 text-black">
                    <li class="text-base">VS Code <span class="rounded-full border border-green bg-green-lightest text-green text-xs px-2 py-1 ml-4">1 years</span></li>
                    <li class="text-base">PHPStorm <span class="rounded-full border border-green bg-green-lightest text-green text-xs px-2 py-1 ml-4">3 years</span></li>
                    <li class="text-base"><span class="line-through">Atom</span> <span class="rounded-full border border-green bg-green-lightest text-green text-xs px-2 py-1 ml-4">3 years</span></li>
                    <li class="text-base"><span class="line-through">Xcode</span> <span class="rounded-full border border-green bg-green-lightest text-green text-xs px-2 py-1 ml-4">5 years</span></li>
                    <li class="text-base"><span class="line-through">Android Studio</span> <span class="rounded-full border border-green bg-green-lightest text-green text-xs px-2 py-1 ml-4">3 years</span></li>
                </ul>
                <div class="flex-1 hidden md:block lg:block xl:block bg-center" style="height:256px;
                    background:url('/images/dish.png');
                    background-size: contain;
                    background-position: center right;
                    background-repeat: no-repeat no-repeat;">
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {};
</script>
