<template>
    <div class="animated fadeInUp">
        <div class="bg-white rounded border borer-grey-light shadow p-6 lg:p-12 xl:p-12">
            <h1 class="text-black mb-4 lg:mb-10 xl:mb-10">Projects</h1>
            <div class="flex items-center flex-col md:flex-row lg:flex-row xl:flex-row ">
                <img src="/images/navo-logo.png" width="256px" class="rounded-lg shadow-md flex-1 mb-6 mr-0 md:mr-6 lg:mr-6 xl:mr-6 border border-grey-light md:mb-0 lg:mb-0 xl:mb-0" />
                <div class="text-grey-darker text-base w-full md:w-2/3 lg:w-2/3 xl:w-2/3">
                    <div class="flex justify-between items-center mb-2">
                        <h2 class="text-black">Navo</h2>
                        <p class="text-xs hint">Version 3 - In Progress</p>
                        <a href="https://navoapp.io" target="_blank"><i class="far fa-external-link fa-fw"></i></a>
                    </div>

                    <div>
                        <p>Navo is a mobile application for oilfield workers to search and navigate to oil and gas well locations. The application utilizes ElasticSearch, Google's AdMob, and Stripe for handling payments for single users or teams.</p>
                    </div>

                    <div class="flex justify-between items-center mt-4">
                        <div>
                            <div class="rounded-lg bg-orange-lightest border border-orange-lighter text-orange-light px-4 py-2 mb-2 text-sm inline-block">Laravel</div>
                            <div class="rounded-lg bg-orange-lightest border border-orange-lighter text-orange-light px-4 py-2 mb-2 text-sm inline-block">VueJS</div>
                            <div class="rounded-lg bg-orange-lightest border border-orange-lighter text-orange-light px-4 py-2 mb-2 text-sm inline-block">Flutter</div>
                        </div>
                        <div class="rounded-lg bg-purple-lightest border border-purple-lighter text-purple-light px-4 py-2 mb-2 text-sm">Version: 3.0</div>
                    </div>
                </div>
            </div>

            <span class="divider my-10 md:my-24 lg:my-24 xl:my-24"></span>

            <div class="flex items-center flex-col-reverse md:flex-row lg:flex-row xl:flex-row ">
                <div class="text-grey-darker text-base w-full md:w-2/3 lg:w-2/3 xl:w-2/3">
                    <div class="flex justify-between items-center mb-2">
                        <h2 class="text-black">RoboTexter</h2>
                        <p class="text-xs hint">Developing</p>
                        <a href="https://robotexter.com" target="_blank"><i class="far fa-external-link fa-fw"></i></a>
                    </div>

                    <div>
                        <p>Currently a secret, but it will text.</p>
                    </div>

                    <div class="flex justify-between items-center mt-4">
                        <div>
                            <div class="rounded-lg bg-orange-lightest border border-orange-lighter text-orange-light px-4 py-2 mb-2 text-sm inline-block">Laravel</div>
                            <div class="rounded-lg bg-orange-lightest border border-orange-lighter text-orange-light px-4 py-2 mb-2 text-sm inline-block">VueJS</div>
                        </div>
                        <div class="rounded-lg bg-purple-lightest border border-purple-lighter text-purple-light px-4 py-2 mb-2 text-sm">Version: 1.0</div>
                    </div>
                </div>
                <img src="/images/robotexter-logo.png" width="256px" class="rounded-lg shadow-md flex-1 mb-6 ml-0 md:ml-6 lg:ml-6 xl:ml-6 border border-grey-light md:mb-0 lg:mb-0 xl:mb-0" />
            </div>

            <span class="divider my-10 md:my-24 lg:my-24 xl:my-24"></span>

            <div class="flex items-center flex-col md:flex-row lg:flex-row xl:flex-row">
                <img src="/images/pylon-logo.png" width="256px" class="rounded-lg shadow-md flex-1 mb-6 mr-0 md:mr-6 lg:mr-6 xl:mr-6 border border-grey-light md:mb-0 lg:mb-0 xl:mb-0" />
                <div class="text-grey-darker text-base w-full md:w-2/3 lg:w-2/3 xl:w-2/3">
                    <div class="flex justify-between items-center mb-2">
                        <h2 class="text-black">Pylon</h2>
                        <p class="text-xs hint">Back burner</p>
                        <a href="https://pylonapp.com" target="_blank"><i class="far fa-external-link fa-fw"></i></a>
                    </div>
                    <p>Pylon is a SaaS web application built in the Laravel framework. A MySQL database with multiple relationship tables is used to create a business ticketing/invoicing system. Ajax requests are used to fetch data through custom-built API's to provide a better user experience.</p>
                    <div class="flex justify-between items-center mt-4">
                        <div>
                            <div class="rounded-lg bg-orange-lightest border border-orange-lighter text-orange-light px-4 py-2 mb-2 text-sm inline-block">Undecided</div>
                        </div>
                        <div class="rounded-lg bg-purple-lightest border border-purple-lighter text-purple-light px-4 py-2 mb-2 text-sm">Version: 1.0</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {};
</script>
