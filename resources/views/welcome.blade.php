<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/dist/style.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.0.2/glide.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    @vite('resources/css/app.css')
</head>

<body>
    <nav id="navbar h-[90px]" class="p-4 w-full shadow z-10 bg-white fixed transition-transform duration-300 ease-in-out transform border">
        <div class="flex justify-between items-center">
            <div class="flex items-center">

                <div>
                    <img src="https://cdn.lecollectionist.com/lc/production/assets/images/lecollectionist-luxury-villas-rentals-holidays.svg?q=65&w=300" alt="" srcset="" />
                </div>

                <nav>
                    <ul class="bg-white absolute left-0 w-full py-8 pl-7 z-1 hidden transition-all duration-500 ease-in md:static xl:flex md:w-auto md:items-center md:py-0 md:pl-0">
                        <li class="px-[16px] font-sans text-base font-normal md:my-0"><a href="http://">Find a house</a>
                        </li>
                        <li class="px-[16px] font-sans text-base font-normal md:my-0"><a href="http://">Our
                                destenation</a></li>
                        <li class="px-[16px] font-sans text-base font-normal md:my-0"><a href="http://">Inspiration</a>
                        </li>
                        <li class="px-[16px] font-sans text-base font-normal md:my-0"><a href="http://">About Us</a>
                        </li>
                    </ul>
                </nav>
            </div>

            <div class="flex items-center">
                <div class="md:block xl:hidden hidden">Contact Us at: </div>
                <span class="md:block hidden group mr-4"><a class="text-[#B78C47] font-bold" href="tel: +1 646 851 2321">+1 646
                        851 2321</a>
                    <div class="w-[570px] border py-5 pr-3 absolute top-15 right-[230px] bg-white opacity-0 group-hover:opacity-100 transition-opacity">
                        <div class="flex items-center">
                            <div class="p-4 items-center"><img class="w-8" src="https://cdn2.iconfinder.com/data/icons/ios-7-icons/50/phone1-256.png" alt="">
                            </div>
                            <div>Call us at <a class="text-[#B78C47] font-bold" href="tel-+1 646 851 2321">+1 646
                                    851 2321</a>
                                <strong>CURRENTLY OPEN</strong><br> We are available from Monday to Friday,
                                <strong>9:30 a.m. to 6:30
                                    p.m. (UTC +2)</strong> and on Saturday, <strong>10 a.m. to 6 p.m. (UTC
                                    +2)</strong>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <div class="p-4"><img class="w-5" src="https://cdn0.iconfinder.com/data/icons/eon-social-media-contact-info-2/32/mail_email_e-mail_letter-256.png" alt=""></div>
                            <div>Or contact us at anytime <a class="text-[#B78C47] font-bold" href="">here</a></div>
                        </div>
                    </div>
                </span>
                <div class="mx-6 hidden xl:block">
                    <button class="navLanguage xl:block relative">EN - €</i></button>

                    <div class="hidden font-inter absolute right-[150px] top-[70px] mt-2  w-[380px] overflow-hidden rounded-md border bg-white p-6 z-[5]">
                        <p class="mb">Language</p>
                        <div class="mb-6 flex">
                            <button class="mr-6">English</button>
                            <button>Francais</button>
                        </div>
                        <p class="mb-4">Currency</p>
                        <div class="flex">
                            <button class="w-1/4">CHF</button>
                            <button class="w-1/4">EUR</button>
                            <button class="w-1/4">USD</button>
                            <button class="w-1/4">GBP</button>
                        </div>
                        <button type="submit" class="font-inter mt-5 w-full bg-[#033d3d] py-3.5 text-xl font-bold text-white">Validate</button>
                    </div>
                </div>
                <div class="flex items-center">
                    <ul>
                        <i><img class="w-7 h-7" src="/images/search_icon.png" alt=""></i>
                    </ul>
                    <span class="flex items-center text-3xl cursor-pointer ml-2 xl:hidden">
                        <ion-icon name="menu" onclick="Menu(this)"></ion-icon>
                    </span>
                </div>

                <nav class="hidden xl:block">
                    <ul>
                        <i class="fa fa-heart mx-6"></i>
                        <i class="fa fa-user"></i>
                    </ul>
                </nav>
            </div>
        </div>
    </nav>

    <!-- Dropdown Hampburger Start -->
    <div id="dropdownMenu" class="xl:hidden hidden border z-[9] bg-white fixed w-full">
        <div class="flex h-screen flex-col items-center justify-center uppercase">
            <a class="my-2 md:my-3 lg:my-4" href="http://">Find a house</a>
            <a class="my-2 md:my-3 lg:my-4" href="http://">Our destinations</a>
            <a class="my-2 md:my-3 lg:my-4" href="http://">Inspirations</a>
            <a class="my-2 md:my-3 lg:my-4" href="http://">About Us</a>

            <div class="my-2 md:my-3 lg:my-4 w-2/4 border-t border-gray-300 py-4 lg:py-8 text-center"><a href="">My
                    account</a></div>
        </div>

        <div class="fixed bottom-0 left-0 w-full items-center justify-center border bg-white z-[5]">
            <div class="flex items-center justify-center z-[5]">
                <div class="w-1/4 flex items-center justify-center">
                    <img class="w-7 py-4 cursor-pointer" src="https://cdn1.iconfinder.com/data/icons/outline-imperial-seo/128/SEO_C_50_09.12.14-1_Artboard_15-256.png" alt="" />
                </div>
                <div class="w-1/4 flex items-center justify-center">
                    <img class="w-6 py-5 cursor-pointer" src="https://cdn1.iconfinder.com/data/icons/material-design-icons-light/24/phone-256.png" alt="" />
                </div>
                <div class="w-1/4 flex items-center justify-center cursor-pointer">
                    <img class="w-7 py-4" src="https://cdn0.iconfinder.com/data/icons/business-office-1-7/55/35-256.png" alt="" />
                </div>
                <div class="w-1/4 flex items-center justify-center cursor-pointer">
                    <img class="w-7 py-4" src="https://cdn2.iconfinder.com/data/icons/thin-line-icons-for-seo-and-development-1/64/SEO_international-256.png" alt="" />
                </div>
            </div>
        </div>
    </div>
    <!-- Dropdown Hampburger End-->

    <!-- Banner Part start -->
    <div class="relative">
        <img class="w-full h-[350px] md:h-[550px] lg:h-[700px] z-[-10]" src="https://cdn.lecollectionist.com/__lecollectionist__/production/houses/6499/photos/ftWKjxLQjmRqoZWuvKgY_451d5cba-e310-4b06-9e9c-2b72d6f1d189.jpg?q=65&w=1500" alt="" srcset="" />
        <button class="w-40 bg-black bg-opacity-50 text-center rounded absolute bottom-4 left-4 text-white 
            px-3.5 font-sans text-sm font-medium py-3">View
            all photos(29)</button>
    </div>
    <!-- Banner Part end -->

    <div class="mx-auto mb-12 flex w-full max-w-full justify-between border-b border-gray-200 px-4 pb-12 sm:px-6 lg:max-w-screen-xl pt-4">
        <div class="w-full lg:w-[55%] xl:w-[60%]">

            <!-- House Details Part Start -->
            <div class="w-full border-b border-gray-200 mb-9 pb-9 ">
                <div class="flex justify-between">
                    <h1 class="font-serif text-2xl font-bold mb-0.5">Villa Courela</h1>
                    <div class="flex">
                        <img class="w-7 h-7" src="/images/heart_icon.png" alt="">
                        <img class="px-2 w-9 h-6" src="/images/upload.png" alt="">
                    </div>
                </div>

                <ul class="flex text-md text-gray-600 text-sm font-normal font-serif mt-2">
                    <li><a href="http://">Melides and surroundings,</a></li>
                    <li><a class="mx-2" href="http://">Portugal</a></li>
                </ul>

                <div class="flex w-full mt-2 text-base text-gray-600">
                    <span>8 guests</span>
                    <span class="px-2 md:px-2">·</span>
                    <span>4 bathrooms</span>
                    <span class="px-2 md:px-2">·</span>
                    <span class="md:block hidden">4 bedrooms</span>
                    <span class="px-2 md:px-2 md:block hidden">·</span>
                    <span>200 sqm</span>
                </div>

                <div class="font-serif text-base font-normal mt-6 mb-2 ">
                    <p id="readmp">Magnificent property, ideally located in Melides near Comporta for vacations with
                        family or
                        friends. Brand new and air-conditioned, it boasts a swimming pool with breath... </p>

                    <p id="readlp" class="hidden">Magnificent property, ideally located in Melides near Comporta for
                        vacations with family or friends.
                        Brand new and air-conditioned, it boasts a swimming pool with breathtaking views of nature and
                        the
                        sea. It's also the only villa with a climbing wall. Villa Courela can accommodate up to 8 people
                        with its 4 bedrooms and 4 bathrooms. Our local team and concierge will be on hand to help you
                        organize your tailor-made luxury stay. </p>

                    <div id="readm" class="flex mt-2">
                        <p class="mr-2 font-bold flex items-center">Read the whole description</p>
                        <img class="w-6 h-6" src="/images/arrow_bottom_down.png" alt="">
                    </div>

                    <div id="readl" class="mt-2 hidden">
                        <p class="mr-2 font-bold flex items-center">Read less</p>
                        <img class="w-6 h-6 rotate-180" src="/images/arrow_bottom_down.png" alt="">
                    </div>
                </div>
            </div>
            <!-- House Details Part End -->


            <!-- Key feature part start -->
            <div class="border-b border-gray-200">
                <h1 class="font-serif text-2xl font-bold my-6">Key features</h1>
                <div class="flex flex-wrap mb-9">
                    <div class="w-1/2 text-left mb-2">Swimming pool overflow</div>
                    <div class="w-1/2 text-left mb-2">View mountain, nature</div>
                    <div class="w-1/2 text-left mb-2">Air conditioning</div>
                    <div class="w-1/2 text-left mb-2">Petanque</div>
                    <div class="w-1/2 text-left mb-2">Barbecue</div>
                    <div class="w-1/2 text-left mb-2">Fireplace</div>
                    <div class="w-1/2 text-left mb-2">Garden Mediterranean</div>
                    <div class="w-1/2 text-left mb-2">Surrounded by fields</div>
                </div>
                <button class="w-full text-center border-green-900 border rounded-md font-bold inter text-green-900 py-3 mb-9 md:w-max px-4">See
                    all the equipments (36)</button>
            </div>
            <!-- Key feature part end -->

            <!-- Service part start  -->
            <div class="border-b border-gray-200">
                <h1 class="font-serif text-2xl font-bold my-6">Conciergerie service included</h1>
                <div class="font-bold text-primary-800 flex items-center justify-between mb-6">
                    <div class="text-base font-bold text-[#976D29]">Tailor level</div>
                    <div>C c c</div>
                </div>
                <ul class="mb-9">
                    <li class="flex items-center mb-4 last:mb-0"><img class="w-4 h-4" src="/images/check_icon.png" alt="">
                        <span class="px-2 text-gray-600">
                            Reservation of your transfers
                        </span>
                    </li>
                    <li class="flex items-center mb-4 last:mb-0"><img class="w-4 h-4" src="/images/check_icon.png" alt="">
                        <span class="px-2 text-gray-600">
                            Personalisation of your stay, with possible adjustments before your arrival
                        </span>
                    </li>
                    <li class="flex items-center mb-4 last:mb-0"><img class="w-4 h-4" src="/images/check_icon.png" alt="">
                        <span class="px-2 text-gray-600">
                            A local team will be available during your stay
                        </span>
                    </li>
                    <li class="flex items-center mb-4 last:mb-0"><img class="w-4 h-4" src="/images/check_icon.png" alt="">
                        <span class="px-2 text-gray-600">
                            Cleaning included
                        </span>
                    </li>
                </ul>

                <div>
                    <div class="grid grid-cols-2 gap-2 mb-9">
                        <div class="first:col-span-2 cursor-pointer"><img src="https://cdn.lecollectionist.com/__lecollectionist__/production/houses/6499/photos/KKoC8Kk3RKWoF9Eqdvpb_641deada-4455-4823-f7b5-9231f0ab1982.jpg?h=600&amp; quality=65" alt="Villa Courela" class="h-[180px] md:h-[240px] block mx-auto w-full object-cover">
                        </div>
                        <div class="first:col-span-2 cursor-pointer"><img src="https://cdn.lecollectionist.com/__lecollectionist__/production/houses/6499/photos/J30gvzXTUywRTRJXmMLr_dc036664-6bde-4dca-b952-e8f7cddaee51.jpg?h=600&amp;quality=65" alt="Villa Courela" class="h-[180px] md:h-[240px] block mx-auto w-full object-cover">
                        </div>
                        <div class="first:col-span-2 cursor-pointer"><img src="https://cdn.lecollectionist.com/__lecollectionist__/production/houses/6499/photos/oazot3mSiaf4LzUEoiQx_282b064d-e895-480b-ecc1-6d700030e254.jpg?h=600&amp;quality=65" alt="Villa Courela" class="h-[180px] md:h-[240px] block mx-auto w-full object-cover">
                        </div>
                        <div class="first:col-span-2 cursor-pointer"><img src="https://cdn.lecollectionist.com/__lecollectionist__/production/houses/6499/photos/SgB8Eh4UTBOncgw16qPr_8a15d784-5233-4baa-fde2-067e135d1642.jpg?h=600&amp;quality=65" alt="Villa Courela" class="h-[180px] md:h-[240px] block mx-auto w-full object-cover">
                        </div>
                        <div class="first:col-span-2 cursor-pointer"><img src="https://cdn.lecollectionist.com/__lecollectionist__/production/houses/6499/photos/jdHS06AhQoCsrr3aY8NG_7ec47769-4635-4ae5-baef-e349af980a58.jpg?h=600&amp;quality=65" alt="Villa Courela" class="h-[180px] md:h-[240px] block mx-auto w-full object-cover">
                        </div>
                    </div>
                    <button type="button" class="w-full text-center border-green-900 border rounded-md font-bold inter text-green-900 py-3 mb-9 md:w-max px-4">
                        View all photos
                    </button>
                </div>
            </div>
            <!-- Service part end  -->


            <!-- Sorounding Part Start -->
            <div class="pb-9 mb-9 border-b border-gray-200">
                <h2 class="inter m-0 mb-1 text-2xl">
                    The surroundings
                </h2>
                <ul class="pl-0 mb-2 flex items-center list-none">
                    <li class="text-md"><a href="/en/luxury-villas-rentals/melides-and-surroundings" class="house-destination-breadcrumb__link mr-1">
                            Melides and surroundings
                        </a></li>
                </ul>
                <div class="mx-auto mb-6 lg:h-72">
                    <div id="BaseMap" class="base-map house-map">
                        <iframe class="h-[400px] w-full lg:h-[300px]" src="https://www.openstreetmap.org/export/embed.html?bbox=89.77581024169923%2C23.568550119541033%2C89.90730285644533%2C23.657260880072567&amp;layer=mapnik"></iframe>
                    </div>
                </div>


                <!-- Mobile div -->
                <div class="md:hidden">
                    <div class="flew-nowrap mb-9 flex border-b border-gray-200">
                        <div id="setting-mb" class="mr-9 border-b border-gray-700 pb-2 text-base font-bold text-gray-700 hover:cursor-pointer">
                            Setting</div>
                        <div id="nearby-mb" class="mr-9 pb-2 text-base font-bold text-gray-500 hover:cursor-pointer">
                            Nearby
                        </div>
                    </div>
                    <!-- Setting-info -->
                    <div id="setting-info-mb" class="flex flex-wrap">
                        <p class="font-inter mb-2 w-1/2 pb-2 text-base">Out of town</p>
                        <p class="font-inter mb-2 w-1/2 pb-2 text-base">Without neighbours</p>
                        <p class="font-inter mb-2 w-1/2 pb-2 text-base">Surrounded by fields</p>
                    </div>
                    <!-- Nearby info -->
                    <div id="nearby-info-mb" class="hidden">
                        <p class="font-inter text-base text-[#202020]">Beach</p>
                        <p class="font-inter mt-2 text-sm text-[#757575]">10 minutes by car</p>
                    </div>
                </div>

                <!-- Create Desktop Setting Nearby Here -->
                <div class="hidden md:block">
                    <div class="mr-9 pb-2 text-base font-bold text-gray-700 hover:cursor-pointer">Setting</div>

                    <!-- Setting-info -->
                    <div class="mb-4 flex flex-wrap">
                        <p class="font-inter mb-2 w-1/2 pb-2 text-base">Out of town</p>
                        <p class="font-inter mb-2 w-1/2 pb-2 text-base">Without neighbours</p>
                        <p class="font-inter mb-2 w-1/2 pb-2 text-base">Surrounded by fields</p>
                    </div>

                    <!-- Nearby info -->
                    <div class="mr-9 pb-2 text-base font-bold text-gray-700 hover:cursor-pointer">Nearby</div>
                    <div>
                        <p class="font-inter text-base text-[#202020]">Beach</p>
                        <p class="font-inter mt-2 text-sm text-[#757575]">10 minutes by car</p>
                    </div>
                </div>
            </div>

            <!-- Additional Part Start -->
            <div class="border-b border-grey-200 mb-9 pb-9">
                <h2 class="text-2xl mb-5 font-leitura">Additional Information</h2>
                <div class="flex justify-between md:justify-normal mb-5">
                    <div class="flex items-center md:mr-20">
                        <span><img class="w-4 h-4 mx-2" src="/images/check-in.png" alt=""></span>
                        <div class="text-md">
                            <div class="font-semibold">Check-in</div>
                            <span class="lg:text-gray-500">16:00</span>
                        </div>
                    </div>

                    <div class="flex items-center md:mr-20">
                        <span><img class="w-4 h-4 mx-2" src="/images/check-out.png" alt=""></span>
                        <div class="text-md">
                            <div class="font-semibold">Check-out</div>
                            <span class="lg:text-gray-500">10:00</span>
                        </div>
                    </div>
                </div>
                <ul>
                    <li class="flex items-center mb-4 last:mb-0"><img class="w-4 h-4" src="/images/check_icon.png" alt="">
                        <span class="px-2 text-gray-600">
                            Suitable for children
                        </span>
                    </li>
                    <li class="flex items-center mb-4 last:mb-0"><img class="w-4 h-4" src="/images/check_icon.png" alt="">
                        <span class="px-2 text-gray-600">
                            Cleaning service included
                        </span>
                    </li>
                </ul>
            </div>
            <!-- Additional Part Start -->

            <!-- Booking Conditions Part Start -->
            <div class="border-b border-grey-200 mb-9 pb-9">
                <h2 class="text-2xl mb-5 font-leitura">Booking Conditions</h2>

                <button class="accordion border-b border-grey-200 py-5 text-left font-bold text-base inter">How do i pay
                    for
                    my
                    stay?</button>
                <div class="panel">
                    <p class="mb-2 my-4">In order to confirm your booking, you will need to pay a deposit up to 3
                        business
                        days after signing your contract.</p>
                    <p class="mb-2 my-4">You will then have until one month before the start of your rental period to
                        pay
                        the remaining balance.</p>
                </div>

                <button class="accordion border-b border-grey-200 py-5 text-left font-bold text-base inter">Will i be
                    asked
                    for
                    a security deposit?</button>
                <div class="panel">
                    <p class="mb-2 my-4">Before your stay, we will ask you for a security deposit to cover any damage
                        that
                        may occur. The amount will be quoted prior to your booking and in your contract.</p>

                    <p class="mb-2 my-4">Any specific rental conditions for the property will be outlined by your
                        advisor
                        and detailed in your rental contract.</p>
                </div>


                <!-- Slider part start -->
                <div class="mt-9 mb-8 p-2 bg-red-50">
                    <h1 class="font-serif text-2xl font-bold my-5">They travelled with us </h1>
                    <div class="relative w-full glide-01">
                        <!-- Slides -->
                        <div class="overflow-hidden" data-glide-el="track">
                            <ul class="pl-2 relative w-full overflow-hidden p-0 whitespace-no-wrap flex flex-no-wrap">
                                <li>
                                    <div>
                                        <img class="w-6 h-5" src="/images/straight-quotes.png" alt="">
                                        <p class="py-5 mb-2 text-base font-normal">Heaven: there’s no other word to
                                            describe
                                            holidays with
                                            Le Collectionist. An extraordinary team, showing great kindness and
                                            professionalism.</p>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <img class="w-6 h-5" src="/images/straight-quotes.png" alt="">
                                        <p class="py-5 mb-2 text-base font-normal">The Le Collectionist team is vibrant,
                                            you
                                            breathe new life into the profession. Thanks to your insights, we were able
                                            to
                                            discover our holiday destination like insiders.</p>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <img class="w-6 h-5" src="/images/straight-quotes.png" alt="">
                                        <p class="py-5 mb-2 text-base font-normal">Sad to return home after such
                                            extraordinary holidays, a magnificent home, incredible chefs. Thank you very
                                            much and see you soon for our next holidays.</p>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <img class="w-6 h-5" src="/images/straight-quotes.png" alt="">
                                        <p class="py-5 mb-2 text-base font-normal">Two wonderful weeks celebrating our
                                            parents’ 60 year wedding anniversary. The team was very attentive. We were
                                            delighted by the surprise concert waiting for us after our return from the
                                            boat
                                            on Sunday.</p>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <img class="w-6 h-5" src="/images/straight-quotes.png" alt="">
                                        <p class="py-5 mb-2 text-base font-normal">Thank you for your excellent
                                            organisation
                                            of our stay. The location was magical and our whole family fell in love with
                                            it.
                                            The staff on site were lovely, flexible, and very attentive.</p>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <img class="w-6 h-5" src="/images/straight-quotes.png" alt="">
                                        <p class="py-5 mb-2 text-base font-normal">We had a wonderful stay. We’ve been
                                            renting beautiful villas as gifts for our children for 5 years now, but we
                                            had
                                            never before received such a warm welcome and so much attention.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <!-- Indicators -->
                        <div class="flex items-center justify-center w-full gap-2 mb-8" data-glide-el="controls[nav]">
                            <button data-glide-dir="=0" aria-label="goto slide 1"><span class="block w-1 h-1 transition-colors duration-300 rounded-full ring-1 ring-slate-700 bg-white/20 focus:outline-none"></span></button>
                            <button data-glide-dir="=1" aria-label="goto slide 2"><span class="block w-1 h-1 transition-colors duration-300 rounded-full ring-1 ring-slate-700 bg-white/20 focus:outline-none"></span></button>
                            <button data-glide-dir="=2" aria-label="goto slide 3"><span class="block w-1 h-1 transition-colors duration-300 rounded-full ring-1 ring-slate-700 bg-white/20 focus:outline-none"></span></button>
                            <button data-glide-dir="=3" aria-label="goto slide 4"><span class="block w-1 h-1 transition-colors duration-300 rounded-full ring-1 ring-slate-700 bg-white/20 focus:outline-none"></span></button>
                            <button data-glide-dir="=3" aria-label="goto slide 4"><span class="block w-1 h-1 transition-colors duration-300 rounded-full ring-1 ring-slate-700 bg-white/20 focus:outline-none"></span></button>
                            <button data-glide-dir="=3" aria-label="goto slide 4"><span class="block w-1 h-1 transition-colors duration-300 rounded-full ring-1 ring-slate-700 bg-white/20 focus:outline-none"></span></button>
                        </div>
                    </div>
                </div>
                <!-- Slider part end -->
            </div>
            <!-- Booking Conditions Part End -->
        </div>

        <div class="relative hidden h-max -translate-y-[40%] z-[8] border bg-white p-6 lg:block lg:w-[40%] xl:w-[35%]">
            <h2 class="font-leitura mb-2 text-2xl font-semibold text-[#202020]">Villa Courela</h2>
            <p class="font-inter mb-8 text-base font-semibold text-[#202020]">From €5,995 to €12,495 per week</p>
            <p class="text-sm">Dates</p>
            <div class="mt-2 flex w-full border border-gray-500 py-3">
                <img src="https://cdn.iconfinder.com/stored_data/1201978/128/png?token=1691744037-WLheHqrByixkUH1pVGww7MJ5v7rvLs%2BrNYfHQ9y9uwQ%3D" alt="Calender" class="ml-5 w-6" />
                <p class="font-inter mx-3 text-[#757575]">Check-in</p>
                <img src="https://cdn3.iconfinder.com/data/icons/arrow-outline-8/32/right_2-512.png" alt="Calender" class="w-6" />
                <p class="font-inter mx-3 pr-10 text-[#757575]">Check-out</p>
            </div>
            <button type="submit" class="font-inter my-4 w-full bg-[#033d3d] px-4 py-3.5 text-base text-white">Make a request</button>

            <div class="mt-6 flex flex-col items-center border-t border-gray-200 pt-6">
                <p class="font-inter text-center">Our advisors are available from Monday to Friday between 9:30am and 6:30pm (UTC +2)</p>
                <a href="tel: +44 20 7131 0270" class="font-inter font-semibold text-[#033d3d]">+44 20 7131 0270</a>
            </div>
        </div>
    </div>
    <!-- Sorounding Part End -->




    <!-- Destination part start -->
    <div class="mx-auto px-4 pb-20 md:px-6 lg:max-w-screen-xl">
        <h2 class="font-leitura mb-10 text-2xl font-semibold text-[#202020]">Our top destinations</h2>

        <div class="lg:hidden">
            <button class="accordion font-inter py-4 text-base font-semibold uppercase">Austria</button>
            <div class="panel">
                <a href="#" class="font-inter mb-2 pb-2 text-base font-semibold">Austrian alps</a>
                <a href="#" class="font-inter mb-2 pb-2 text-base">Lech</a>
                <a href="#" class="font-inter mb-2 pb-2 text-base">St Anton</a>
            </div>
            <div class="mb-4 border-b border-gray-200 md:px-6"></div>

            <button class="accordion font-inter py-4 text-base font-semibold uppercase">Caribbean</button>
            <div class="panel">
                <a href="#" class="font-inter mb-2 pb-2 text-base font-semibold">Austrian alps</a>
                <a href="#" class="font-inter mb-2 pb-2 text-base">Lech</a>
                <a href="#" class="font-inter mb-2 pb-2 text-base">St Anton</a>
            </div>
            <div class="mb-4 border-b border-gray-200"></div>

            <button class="accordion font-inter py-4 text-base font-semibold uppercase">Croatiie</button>
            <div class="panel">
                <a href="#" class="font-inter mb-2 pb-2 text-base font-semibold">Austrian alps</a>
                <a href="#" class="font-inter mb-2 pb-2 text-base">Lech</a>
                <a href="#" class="font-inter mb-2 pb-2 text-base">St Anton</a>
            </div>
            <div class="mb-4 border-b border-gray-200"></div>

            <button class="accordion font-inter py-4 text-base font-semibold uppercase">Espagne</button>
            <div class="panel">
                <a href="#" class="font-inter mb-2 pb-2 text-base font-semibold">Austrian alps</a>
                <a href="#" class="font-inter mb-2 pb-2 text-base">Lech</a>
                <a href="#" class="font-inter mb-2 pb-2 text-base">St Anton</a>
            </div>
            <div class="mb-4 border-b border-gray-200"></div>

            <button class="accordion font-inter py-4 text-base font-semibold uppercase">France</button>
            <div class="panel">
                <a href="#" class="font-inter mb-2 pb-2 text-base font-semibold">Austrian alps</a>
                <a href="#" class="font-inter mb-2 pb-2 text-base">Lech</a>
                <a href="#" class="font-inter mb-2 pb-2 text-base">St Anton</a>
            </div>
            <div class="mb-4 border-b border-gray-200"></div>

            <button class="accordion font-inter py-4 text-base font-semibold uppercase">Greece</button>
            <div class="panel">
                <a href="#" class="font-inter mb-2 pb-2 text-base font-semibold">Austrian alps</a>
                <a href="#" class="font-inter mb-2 pb-2 text-base">Lech</a>
                <a href="#" class="font-inter mb-2 pb-2 text-base">St Anton</a>
            </div>
            <div class="mb-4 border-b border-gray-200"></div>

            <button class="accordion font-inter py-4 text-base font-semibold uppercase">Italy</button>
            <div class="panel">
                <a href="#" class="font-inter mb-2 pb-2 text-base font-semibold">Austrian alps</a>
                <a href="#" class="font-inter mb-2 pb-2 text-base">Lech</a>
                <a href="#" class="font-inter mb-2 pb-2 text-base">St Anton</a>
            </div>
            <div class="mb-4 border-b border-gray-200"></div>

            <button class="accordion font-inter py-4 text-base font-semibold uppercase">Maroc</button>
            <div class="panel">
                <a href="#" class="font-inter mb-2 pb-2 text-base font-semibold">Austrian alps</a>
                <a href="#" class="font-inter mb-2 pb-2 text-base">Lech</a>
                <a href="#" class="font-inter mb-2 pb-2 text-base">St Anton</a>
            </div>
            <div class="mb-4 border-b border-gray-200"></div>

            <button class="accordion font-inter py-4 text-base font-semibold uppercase">Portugal</button>
            <div class="panel">
                <a href="#" class="font-inter mb-2 pb-2 text-base font-semibold">Austrian alps</a>
                <a href="#" class="font-inter mb-2 pb-2 text-base">Lech</a>
                <a href="#" class="font-inter mb-2 pb-2 text-base">St Anton</a>
            </div>
            <div class="mb-4 border-b border-gray-200"></div>

            <button class="accordion font-inter py-4 text-base font-semibold uppercase">Switzerland</button>
            <div class="panel">
                <a href="#" class="font-inter mb-2 pb-2 text-base font-semibold">Austrian alps</a>
                <a href="#" class="font-inter mb-2 pb-2 text-base">Lech</a>
                <a href="#" class="font-inter mb-2 pb-2 text-base">St Anton</a>
            </div>
            <div class="mb-4 border-b border-gray-200"></div>

            <button class="accordion font-inter py-4 text-base font-semibold uppercase">Souoth Africa</button>
            <div class="panel">
                <a href="#" class="font-inter mb-2 pb-2 text-base font-semibold">Austrian alps</a>
                <a href="#" class="font-inter mb-2 pb-2 text-base">Lech</a>
                <a href="#" class="font-inter mb-2 pb-2 text-base">St Anton</a>
            </div>
            <div class="mb-4 border-b border-gray-200"></div>
        </div>

        <!-- Desktop part -->
        <div class="hidden lg:block">
            <div class="mb-9 flex">
                <p id="frace-lrg" class="mr-4 rounded-full bg-[#1c5050] px-4 py-1 text-xl text-white hover:cursor-pointer">France</p>
                <p id="europe-xlrg" class="mr-4 rounded-full border border-[#cacaca] px-4 py-1 text-xl text-[#cacaca] hover:cursor-pointer">
                    Europe</p>
                <p id="other-xlrg" class="mr-4 rounded-full border border-[#cacaca] px-4 py-1 text-xl text-[#cacaca] hover:cursor-pointer">
                    Other destinations</p>
            </div>

            <!-- France -->
            <div id="frace-lrg-div" class="flex max-h-[400px] flex-col flex-wrap">
                <div class="">
                    <h2 class="mb-4 text-xl font-bold uppercase text-[#1c5050]">French Alps</h2>
                    <div class="border-l border-gray-200 pl-4 mb-4">
                        <p class="mb-2">Courchevel</p>
                        <p class="my-2">Courchevel</p>
                        <p class="my-2">Courchevel</p>
                        <p class="my-2">Courchevel</p>
                        <p class="mt-2">Courchevel</p>
                    </div>
                    <h2 class="mb-4 text-xl font-bold uppercase text-[#1c5050]">French Alps</h2>
                    <div class="border-l border-gray-200 pl-4 mb-4">
                        <p class="mb-2">Courchevel</p>
                        <p class="my-2">Courchevel</p>
                        <p class="my-2">Courchevel</p>
                        <p class="my-2">Courchevel</p>
                        <p class="mt-2">Courchevel</p>
                    </div>
                </div>
                <div class="">
                    <h2 class="mb-4 text-xl font-bold uppercase text-[#1c5050]">French Alps</h2>
                    <div class="border-l border-gray-200 pl-4 mb-4">
                        <p class="mb-2">Courchevel</p>
                        <p class="my-2">Courchevel</p>
                        <p class="my-2">Courchevel</p>
                        <p class="my-2">Courchevel</p>
                        <p class="mt-2">Courchevel</p>
                    </div>
                    <h2 class="mb-4 text-xl font-bold uppercase text-[#1c5050]">French Alps</h2>
                    <div class="border-l border-gray-200 pl-4 mb-4">
                        <p class="mb-2">Courchevel</p>
                        <p class="my-2">Courchevel</p>
                        <p class="my-2">Courchevel</p>
                        <p class="my-2">Courchevel</p>
                        <p class="mt-2">Courchevel</p>
                    </div>
                </div>
                <div class="">
                    <h2 class="mb-4 text-xl font-bold uppercase text-[#1c5050]">French Alps</h2>
                    <div class="border-l border-gray-200 pl-4 mb-4">
                        <p class="mb-2">Courchevel</p>
                        <p class="my-2">Courchevel</p>
                        <p class="my-2">Courchevel</p>
                        <p class="my-2">Courchevel</p>
                        <p class="mt-2">Courchevel</p>
                    </div>
                    <h2 class="mb-4 text-xl font-bold uppercase text-[#1c5050]">French Alps</h2>
                    <div class="border-l border-gray-200 pl-4 mb-4">
                        <p class="mb-2">Courchevel</p>
                        <p class="my-2">Courchevel</p>
                        <p class="my-2">Courchevel</p>
                        <p class="my-2">Courchevel</p>
                        <p class="mt-2">Courchevel</p>
                    </div>
                </div>
                <div class="">
                    <h2 class="mb-4 text-xl font-bold uppercase text-[#1c5050]">French Alps</h2>
                    <div class="border-l border-gray-200 pl-4 mb-4">
                        <p class="mb-2">Courchevel</p>
                        <p class="my-2">Courchevel</p>
                        <p class="my-2">Courchevel</p>
                        <p class="my-2">Courchevel</p>
                        <p class="mt-2">Courchevel</p>
                    </div>
                    <h2 class="mb-4 text-xl font-bold uppercase text-[#1c5050]">French Alps</h2>
                    <div class="border-l border-gray-200 pl-4 mb-4">
                        <p class="mb-2">Courchevel</p>
                        <p class="my-2">Courchevel</p>
                        <p class="my-2">Courchevel</p>
                        <p class="my-2">Courchevel</p>
                        <p class="mt-2">Courchevel</p>
                    </div>
                </div>
            </div>

            <!-- Europe -->
            <div id="europe-xlrg-div" class="hidden max-h-[500px] flex-col flex-wrap">
                <div class="">
                    <h2 class="mb-4 text-xl font-bold uppercase text-[#1c5050]">Switzerland</h2>
                    <div class="border-l border-gray-200 pl-4 mb-4">
                        <p class="mb-2">Courchevel</p>
                        <p class="my-2">Courchevel</p>
                        <p class="my-2">Courchevel</p>
                        <p class="my-2">Courchevel</p>
                        <p class="mt-2">Courchevel</p>
                    </div>
                    <h2 class="mb-4 text-xl font-bold uppercase text-[#1c5050]">French Alps</h2>
                    <div class="border-l border-gray-200 pl-4 mb-4">
                        <p class="mb-2">Courchevel</p>
                        <p class="my-2">Courchevel</p>
                        <p class="my-2">Courchevel</p>
                        <p class="my-2">Courchevel</p>
                        <p class="mt-2">Courchevel</p>
                    </div>
                </div>
                <div class="">
                    <h2 class="mb-4 text-xl font-bold uppercase text-[#1c5050]">Austria</h2>
                    <div class="border-l border-gray-200 pl-4 mb-4">
                        <p class="mb-2">Courchevel</p>
                        <p class="my-2">Courchevel</p>
                        <p class="my-2">Courchevel</p>
                        <p class="my-2">Courchevel</p>
                        <p class="mt-2">Courchevel</p>
                    </div>
                    <h2 class="mb-4 text-xl font-bold uppercase text-[#1c5050]">Croatie</h2>
                    <div class="border-l border-gray-200 pl-4 mb-4">
                        <p class="mb-2">Courchevel</p>
                        <p class="my-2">Courchevel</p>
                        <p class="my-2">Courchevel</p>
                        <p class="my-2">Courchevel</p>
                        <p class="mt-2">Courchevel</p>
                    </div>
                </div>
                <div class="">
                    <h2 class="mb-4 text-xl font-bold uppercase text-[#1c5050]">Espagne</h2>
                    <div class="border-l border-gray-200 pl-4 mb-4">
                        <p class="mb-2">Courchevel</p>
                        <p class="my-2">Courchevel</p>
                        <p class="my-2">Courchevel</p>
                        <p class="my-2">Courchevel</p>
                        <p class="mt-2">Courchevel</p>
                    </div>
                    <h2 class="mb-4 text-xl font-bold uppercase text-[#1c5050]">Greece</h2>
                    <div class="border-l border-gray-200 pl-4 mb-4">
                        <p class="mb-2">Courchevel</p>
                        <p class="my-2">Courchevel</p>
                        <p class="my-2">Courchevel</p>
                        <p class="my-2">Courchevel</p>
                        <p class="mt-2">Courchevel</p>
                    </div>
                </div>
                <div class="">
                    <h2 class="mb-4 text-xl font-bold uppercase text-[#1c5050]">Italy</h2>
                    <div class="border-l border-gray-200 pl-4 mb-4">
                        <p class="mb-2">Courchevel</p>
                        <p class="my-2">Courchevel</p>
                        <p class="my-2">Courchevel</p>
                        <p class="my-2">Courchevel</p>
                        <p class="mt-2">Courchevel</p>
                    </div>
                    <h2 class="mb-4 text-xl font-bold uppercase text-[#1c5050]">Portugal</h2>
                    <div class="border-l border-gray-200 pl-4 mb-4">
                        <p class="mb-2">Courchevel</p>
                        <p class="my-2">Courchevel</p>
                        <p class="my-2">Courchevel</p>
                        <p class="my-2">Courchevel</p>
                        <p class="mt-2">Courchevel</p>
                    </div>
                </div>
            </div>

            <!-- Other -->
            <div id="other-xlrg-div" class="hidden max-h-[500px] flex-col flex-wrap">
                <div class="">
                    <h2 class="mb-4 text-xl font-bold uppercase text-[#1c5050]">Caribbean</h2>
                    <div class="border-l border-gray-200 pl-4 mb-4">
                        <p class="mb-2">Courchevel</p>
                        <p class="my-2">Courchevel</p>
                        <p class="my-2">Courchevel</p>
                        <p class="my-2">Courchevel</p>
                        <p class="mt-2">Courchevel</p>
                    </div>
                    <h2 class="mb-4 text-xl font-bold uppercase text-[#1c5050]">Maroc</h2>
                    <div class="border-l border-gray-200 pl-4 mb-4">
                        <p class="mb-2">Courchevel</p>
                        <p class="my-2">Courchevel</p>
                        <p class="my-2">Courchevel</p>
                        <p class="my-2">Courchevel</p>
                        <p class="mt-2">Courchevel</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Destination part end -->
    </div>





    <!-- Footer Part Start -->
    <footer id="footer" class="w-full bg-[#202020]">
        <div class="flex w-full flex-col py-16 lg:pb-10 pb-24 md:flex-row lg:mx-auto lg:max-w-screen-xl">
            <div class="mb-9 lg:w-1/4">
                <div class="mx-4 mb-2 flex items-center justify-start">
                    <img src="https://cdn3.iconfinder.com/data/icons/computers-and-network-2/64/rl_20_network_internet_computers_globe_connect_share_earth-256.png" alt="Earth" class="mx-2 w-5" />
                    <a href="#" class="font-inter mx-4 text-sm text-[#e3e3e3]">FR</a>
                    <a href="#" class="font-inter mx-2 text-sm text-[#ccad7b]">EN</a>
                </div>
                <div class="mb-9 ml-2 flex w-28 items-center justify-around rounded-sm border border-white py-2 md:w-24">
                    <img src="https://cdn4.iconfinder.com/data/icons/aami-web-internet/64/aami5-87-256.png" alt="Coins" class="white-icon w-7" />
                    <h3 class="font-inter py-1 text-[#ccad7b]">USD</h3>
                </div>
                <div class="flex justify-evenly md:pl-2 xl:justify-start">
                    <img src="/images/conde-nast-award-2020.png" class="w-20 md:w-10 xl:mr-4" alt="" />
                    <img src="/images/conde-nast-award--2021.png" class="w-20 md:w-10 xl:mr-4" alt="" />
                    <img src="/images/travel-made.png" class="w-20 md:w-10 xl:mr-4" alt="" />
                </div>
            </div>
            <div class="mb-9 flex px-4 lg:w-[37%]">
                <div class="flex w-1/2 flex-col">
                    <h3 class="font-inter mb-6 text-base text-[#ccad7b]">Discover</h3>
                    <a href="#" class="font-inter mb-2 text-xs text-[#eaeaea]">How it works</a>
                    <a href="#" class="font-inter mb-2 text-xs text-[#eaeaea]">Our event service</a>
                    <a href="#" class="font-inter mb-2 text-xs text-[#eaeaea]">Our Conciergerie</a>
                    <a href="#" class="font-inter mb-2 text-xs text-[#eaeaea]">How is Le Collectionist different?</a>
                    <a href="#" class="font-inter mb-2 text-xs text-[#eaeaea]">Get inspired</a>
                    <a href="#" class="font-inter mb-2 text-xs text-[#eaeaea]">Travel partners</a>
                    <a href="#" class="font-inter mb-2 text-xs text-[#eaeaea]">Owners</a>
                    <a href="#" class="font-inter mb-2 text-xs text-[#eaeaea]">Buy a house</a>
                </div>
                <div class="flex w-1/2 flex-col pl-3">
                    <h3 class="font-inter mb-6 text-base text-[#ccad7b]">Get Informed</h3>
                    <a href="#" class="font-inter mb-2 text-xs text-[#eaeaea]">Careers</a>
                    <a href="#" class="font-inter mb-2 text-xs text-[#eaeaea]">Privacy policy</a>
                    <a href="#" class="font-inter mb-2 text-xs text-[#eaeaea]">Manage cookies</a>
                    <a href="#" class="font-inter mb-2 text-xs text-[#eaeaea]">Terms of use</a>
                    <a href="#" class="font-inter mb-2 text-xs text-[#eaeaea]">FAQ</a>
                    <a href="#" class="font-inter mb-2 text-xs text-[#eaeaea]">Contact us</a>
                    <a href="#" class="font-inter mb-2 text-xs text-[#eaeaea]">Sitemap</a>
                </div>
            </div>
            <div class="px-4">
                <h2 class="font-leitura text-3xl text-white">Sign up for the newsletter</h2>
                <p class="font-inter mb-4 text-xs text-[#eaeaea]">Subscribe to our newsletter to get curated travel
                    inspirations.</p>
                <div class="mb-9 flex h-[50px] overflow-hidden items-center">
                    <input name="email" placeholder="Email" type="email" class=" w-3/4 md:w-1/2 text-gray-700 font-normal text-base leading-normal px-4 bg-white rounded-sm rounded-r-none overflow-hidden h-[45px]">

                    <button type="submit " class="flex items-center justify-center w-1/4 font-inter rounded-sm rounded-l-none bg-[#c29c61] px-7 text-base font-semibold text-white md:px-12 h-[45px]">
                        <p>Send</p>
                    </button>
                </div>
                <div class="flex justify-normal">
                    <img src="https://cdn1.iconfinder.com/data/icons/seo-and-web-development-6/32/development_facebook_logo-256.png" alt="Facebook" class="white-icon mx-2 w-10 md:ml-0 md:w-10" />
                    <img src="https://cdn4.iconfinder.com/data/icons/social-media-and-logos-12/32/Logo_Instagram-256.png" alt="Instagram" class="white-icon mx-2 w-10 md:w-10" />
                    <img src="https://cdn0.iconfinder.com/data/icons/brands-outlined-3/211/twiter-social-network-brand-logo-256.png" alt="twitter" class="white-icon mx-2 w-8 md:w-8" />
                    <img src="https://cdn4.iconfinder.com/data/icons/social-media-outline-3/60/Social-35-Linkedin-Outline-256.png" alt="linkedin" class="white-icon mx-2 w-9 md:w-9" />
                </div>
                <p class="font-inter mb-4 mt-6 text-sm text-[#eaeaea]">2023 All right reserved</p>
            </div>
        </div>
    </footer>
    <!-- Footer Part End -->

    <!-- Bottom Sticky Part Start -->
    <div id="bottomsticky" class="lg:hidden w-full px-4 py-5 border flex justify-between fixed left-0 bottom-0 bg-white z-[4]">
        <div class="w-[45%]">
            <p class="text-base font-semibold">From $6,570 to $13,695</p>
            <p>per week</p>
        </div>
        <button class="w-[55%] bg-teal-950 text-white text-base font-serif font-extrabold rounded py-2">Select
            dates</button>
    </div>
    <!-- Bottom Sticky Part End -->


</body>

<script src="/js/script.js"></script>

</html>