<div class="w-full  z-10 h-fit "
    style="border-radius: 16px;padding: 3px;">
    <div class="h-fit flex flex-col bg-white p-3 py-3 sm:py-5" style="border-radius: 14px; box-shadow: 0px 10px 32px 0px rgba(0, 0, 0, 0.10); border: 1px solid var(--color-primary)">





        <div class="forexSpace <?php echo ($widgetType == 'fx') ? 'activeSpace' : 'hiddenSpace'; ?>">
            <div class="hidden">
                <span
                    class="text-gray-500 text-sm sm:text-mediumFont  font-medium">Choose
                    your Travel Destination
                </span>


                <div class="dropdown relative mt-2 z-20">
                    <div class="dropdown-toggle text-sm text-black/60" id="dropdownToggle">
                        Select Your Travel Destination

                    </div>
                    <div class="dropdown-menu" id="dropdownMenu">
                        <input type="text" class="dropdown-search" id="dropdownSearch"
                            placeholder="Search for a country...">
                        <div id="dropdownItems">
                            <!-- Dropdown items will be dynamically populated here -->
                        </div>
                    </div>

                    <div
                        class="bg-primary-blue p-2  sm:px-1 sm:py-1 rounded-lg flex justify-center items-center ml-auto absolute top-1/2  transform -translate-x-1/2 -translate-y-1/2 right-0 -z-20">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="17"
                            viewBox="0 0 16 17" fill="none">
                            <path
                                d="M13.875 8.5C13.875 8.59946 13.8355 8.69484 13.7652 8.76517C13.6948 8.83549 13.5995 8.875 13.5 8.875H8.375V14C8.375 14.0995 8.33549 14.1948 8.26517 14.2652C8.19484 14.3355 8.09946 14.375 8 14.375C7.90054 14.375 7.80516 14.3355 7.73484 14.2652C7.66451 14.1948 7.625 14.0995 7.625 14V8.875H2.5C2.40054 8.875 2.30516 8.83549 2.23483 8.76517C2.16451 8.69484 2.125 8.59946 2.125 8.5C2.125 8.40054 2.16451 8.30516 2.23483 8.23484C2.30516 8.16451 2.40054 8.125 2.5 8.125H7.625V3C7.625 2.90054 7.66451 2.80516 7.73484 2.73483C7.80516 2.66451 7.90054 2.625 8 2.625C8.09946 2.625 8.19484 2.66451 8.26517 2.73483C8.33549 2.80516 8.375 2.90054 8.375 3V8.125H13.5C13.5995 8.125 13.6948 8.16451 13.7652 8.23484C13.8355 8.30516 13.875 8.40054 13.875 8.5Z"
                                fill="white"></path>
                        </svg>
                    </div>
                </div>


            </div>

            <div id="recomendationContainer"
                class="bg-emerald-500 bg-opacity-10 flex p-2 py-1 rounded-lg gap-1 justify-center items-start mt-2">
                <svg class="-mt-[3px] max-w-5 min-w-5" xmlns="http://www.w3.org/2000/svg"
                    width="28" height="28" viewBox="0 0 24 24" fill="none">
                    <path
                        d="M12 2.25C10.0716 2.25 8.18657 2.82183 6.58319 3.89317C4.97982 4.96451 3.73013 6.48726 2.99218 8.26884C2.25422 10.0504 2.06114 12.0108 2.43735 13.9021C2.81355 15.7934 3.74215 17.5307 5.10571 18.8943C6.46928 20.2579 8.20656 21.1865 10.0979 21.5627C11.9892 21.9389 13.9496 21.7458 15.7312 21.0078C17.5127 20.2699 19.0355 19.0202 20.1068 17.4168C21.1782 15.8134 21.75 13.9284 21.75 12C21.7473 9.41498 20.7192 6.93661 18.8913 5.10872C17.0634 3.28084 14.585 2.25273 12 2.25ZM12 20.25C10.3683 20.25 8.77326 19.7661 7.41655 18.8596C6.05984 17.9531 5.00242 16.6646 4.378 15.1571C3.75358 13.6496 3.5902 11.9908 3.90853 10.3905C4.22685 8.79016 5.01259 7.32015 6.16637 6.16637C7.32016 5.01259 8.79017 4.22685 10.3905 3.90852C11.9909 3.59019 13.6497 3.75357 15.1571 4.37799C16.6646 5.00242 17.9531 6.05984 18.8596 7.41655C19.7661 8.77325 20.25 10.3683 20.25 12C20.2475 14.1873 19.3775 16.2843 17.8309 17.8309C16.2843 19.3775 14.1873 20.2475 12 20.25ZM13.5 16.5C13.5 16.6989 13.421 16.8897 13.2803 17.0303C13.1397 17.171 12.9489 17.25 12.75 17.25C12.3522 17.25 11.9706 17.092 11.6893 16.8107C11.408 16.5294 11.25 16.1478 11.25 15.75V12C11.0511 12 10.8603 11.921 10.7197 11.7803C10.579 11.6397 10.5 11.4489 10.5 11.25C10.5 11.0511 10.579 10.8603 10.7197 10.7197C10.8603 10.579 11.0511 10.5 11.25 10.5C11.6478 10.5 12.0294 10.658 12.3107 10.9393C12.592 11.2206 12.75 11.6022 12.75 12V15.75C12.9489 15.75 13.1397 15.829 13.2803 15.9697C13.421 16.1103 13.5 16.3011 13.5 16.5ZM10.5 7.875C10.5 7.6525 10.566 7.43499 10.6896 7.24998C10.8132 7.06498 10.9889 6.92078 11.1945 6.83564C11.4001 6.75049 11.6263 6.72821 11.8445 6.77162C12.0627 6.81502 12.2632 6.92217 12.4205 7.0795C12.5778 7.23684 12.685 7.43729 12.7284 7.65552C12.7718 7.87375 12.7495 8.09995 12.6644 8.30552C12.5792 8.51109 12.435 8.68679 12.25 8.8104C12.065 8.93402 11.8475 9 11.625 9C11.3266 9 11.0405 8.88147 10.8295 8.6705C10.6185 8.45952 10.5 8.17337 10.5 7.875Z"
                        fill="#008E4C" />
                </svg>
                <p id="recomendationText" class="text-mediumFont text-emerald-600">We recommend
                    USD forex card for
                    United
                    States
                    of
                    America,
                    CAD in Cash for Canada, and GBK Cash for Germany</p>
            </div>


            <!-- <div
                                        class="flex gap-1 items-center px-2.5 py-2 text-sm text-emerald-600 rounded bg-emerald-500 bg-opacity-10 sm:hidden mt-1">
                                        <div
                                            class="flex flex-col flex-1 shrink justify-center self-stretch my-auto w-full basis-0 min-w-[240px]">
                                            <h3
                                                class="flex gap-0.5 justify-center items-center self-start font-medium leading-none">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <path
                                                        d="M12 2.25C10.0716 2.25 8.18657 2.82183 6.58319 3.89317C4.97982 4.96451 3.73013 6.48726 2.99218 8.26884C2.25422 10.0504 2.06114 12.0108 2.43735 13.9021C2.81355 15.7934 3.74215 17.5307 5.10571 18.8943C6.46928 20.2579 8.20656 21.1865 10.0979 21.5627C11.9892 21.9389 13.9496 21.7458 15.7312 21.0078C17.5127 20.2699 19.0355 19.0202 20.1068 17.4168C21.1782 15.8134 21.75 13.9284 21.75 12C21.7473 9.41498 20.7192 6.93661 18.8913 5.10872C17.0634 3.28084 14.585 2.25273 12 2.25ZM12 20.25C10.3683 20.25 8.77326 19.7661 7.41655 18.8596C6.05984 17.9531 5.00242 16.6646 4.378 15.1571C3.75358 13.6496 3.5902 11.9908 3.90853 10.3905C4.22685 8.79016 5.01259 7.32015 6.16637 6.16637C7.32016 5.01259 8.79017 4.22685 10.3905 3.90852C11.9909 3.59019 13.6497 3.75357 15.1571 4.37799C16.6646 5.00242 17.9531 6.05984 18.8596 7.41655C19.7661 8.77325 20.25 10.3683 20.25 12C20.2475 14.1873 19.3775 16.2843 17.8309 17.8309C16.2843 19.3775 14.1873 20.2475 12 20.25ZM13.5 16.5C13.5 16.6989 13.421 16.8897 13.2803 17.0303C13.1397 17.171 12.9489 17.25 12.75 17.25C12.3522 17.25 11.9706 17.092 11.6893 16.8107C11.408 16.5294 11.25 16.1478 11.25 15.75V12C11.0511 12 10.8603 11.921 10.7197 11.7803C10.579 11.6397 10.5 11.4489 10.5 11.25C10.5 11.0511 10.579 10.8603 10.7197 10.7197C10.8603 10.579 11.0511 10.5 11.25 10.5C11.6478 10.5 12.0294 10.658 12.3107 10.9393C12.592 11.2206 12.75 11.6022 12.75 12V15.75C12.9489 15.75 13.1397 15.829 13.2803 15.9697C13.421 16.1103 13.5 16.3011 13.5 16.5ZM10.5 7.875C10.5 7.6525 10.566 7.43499 10.6896 7.24998C10.8132 7.06498 10.9889 6.92078 11.1945 6.83564C11.4001 6.75049 11.6263 6.72821 11.8445 6.77162C12.0627 6.81502 12.2632 6.92217 12.4205 7.0795C12.5778 7.23684 12.685 7.43729 12.7284 7.65552C12.7718 7.87375 12.7495 8.09995 12.6644 8.30552C12.5792 8.51109 12.435 8.68679 12.25 8.8104C12.065 8.93402 11.8475 9 11.625 9C11.3266 9 11.0405 8.88147 10.8295 8.6705C10.6185 8.45952 10.5 8.17337 10.5 7.875Z"
                                                        fill="#008E4C" />
                                                </svg>
                                                <span>Our Recommendation</span>
                                            </h3>
                                            <ul class="flex flex-col mt-1 w-full leading-6 p-0 list-disc" >
                                                <li class="ml-5">USD forex card for United States of America.</li>
                                                <li class="ml-5">CAD in Cash for Canada</li>
                                                <li class="ml-5">GBK in Cash for Germany</li>
                                            </ul>
                                        </div>
                                    </div> -->

            <div class="flex flex-col">
                <div class="flex flex-col  gap-2">






                    <div class="flex flex-col gap-1 w-full">
                        <span
                            class="text-gray-500 text-sm sm:text-mediumFont  font-medium">Choose
                            Product
                        </span>


                        <div class="dropdownMain select-none" id="WidgetProduct" selectvalue="<?php echo $defaultProduct; ?>"
                            dataval="<?php echo $defaultProduct; ?>">
                            <div class="selectedItem">

                            </div>
                            <ul class="dropdownList">
                                <li value="forexCard">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon"
                                        width="29" height="29" viewBox="0 0 24 25" fill="none">
                                        <path
                                            d="M21 5.1875H3C2.6519 5.1875 2.31806 5.32578 2.07192 5.57192C1.82578 5.81806 1.6875 6.1519 1.6875 6.5V18.5C1.6875 18.8481 1.82578 19.1819 2.07192 19.4281C2.31806 19.6742 2.6519 19.8125 3 19.8125H21C21.3481 19.8125 21.6819 19.6742 21.9281 19.4281C22.1742 19.1819 22.3125 18.8481 22.3125 18.5V6.5C22.3125 6.1519 22.1742 5.81806 21.9281 5.57192C21.6819 5.32578 21.3481 5.1875 21 5.1875ZM3 6.3125H21C21.0497 6.3125 21.0974 6.33225 21.1326 6.36742C21.1677 6.40258 21.1875 6.45027 21.1875 6.5V8.9375H2.8125V6.5C2.8125 6.45027 2.83225 6.40258 2.86742 6.36742C2.90258 6.33225 2.95027 6.3125 3 6.3125ZM21 18.6875H3C2.95027 18.6875 2.90258 18.6677 2.86742 18.6326C2.83225 18.5974 2.8125 18.5497 2.8125 18.5V10.0625H21.1875V18.5C21.1875 18.5497 21.1677 18.5974 21.1326 18.6326C21.0974 18.6677 21.0497 18.6875 21 18.6875ZM19.3125 16.25C19.3125 16.3992 19.2532 16.5423 19.1477 16.6477C19.0423 16.7532 18.8992 16.8125 18.75 16.8125H15.75C15.6008 16.8125 15.4577 16.7532 15.3523 16.6477C15.2468 16.5423 15.1875 16.3992 15.1875 16.25C15.1875 16.1008 15.2468 15.9577 15.3523 15.8523C15.4577 15.7468 15.6008 15.6875 15.75 15.6875H18.75C18.8992 15.6875 19.0423 15.7468 19.1477 15.8523C19.2532 15.9577 19.3125 16.1008 19.3125 16.25ZM13.3125 16.25C13.3125 16.3992 13.2532 16.5423 13.1477 16.6477C13.0423 16.7532 12.8992 16.8125 12.75 16.8125H11.25C11.1008 16.8125 10.9577 16.7532 10.8523 16.6477C10.7468 16.5423 10.6875 16.3992 10.6875 16.25C10.6875 16.1008 10.7468 15.9577 10.8523 15.8523C10.9577 15.7468 11.1008 15.6875 11.25 15.6875H12.75C12.8992 15.6875 13.0423 15.7468 13.1477 15.8523C13.2532 15.9577 13.3125 16.1008 13.3125 16.25Z"
                                            fill="black" />
                                    </svg>
                                    <span>Forex Card</span>
                                </li>
                                <li value="currency">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon"
                                        width="29" height="29" viewBox="0 0 24 25" fill="none">
                                        <g clip-path="url(#clip0_1729_20077)">
                                            <mask id="mask0_1729_20077" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="25">
                                                <path d="M0 0.500071H23.9999V24.5H0V0.500071Z" fill="white" />
                                            </mask>
                                            <g mask="url(#mask0_1729_20077)">
                                                <path d="M0.703125 23.7969H23.2968V18.1719H0.703125V23.7969Z" stroke="black" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M0.703125 23.7969H23.2968V18.1719H0.703125V23.7969Z" stroke="black" stroke-opacity="0.2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                            </g>
                                            <path d="M6.375 18.1719H17.625" stroke="black" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                            <mask id="mask1_1729_20077" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="25">
                                                <path d="M0 0.500071H23.9999V24.5H0V0.500071Z" fill="white" />
                                            </mask>
                                            <g mask="url(#mask1_1729_20077)">
                                                <path d="M4.75433 18.0781L1.69346 12.7275C1.14607 11.7706 1.4762 10.5512 2.43156 10.0011L15.9719 2.20524C16.932 1.65249 18.1584 1.98543 18.7072 2.94777L22.3097 9.26537C22.8555 10.2224 22.5245 11.4405 21.5695 11.9898L10.984 18.0781" stroke="black" stroke-width="1.2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M14.4357 9.59012C15.2123 10.9353 14.7514 12.6554 13.4062 13.432C12.061 14.2087 10.341 13.7478 9.56429 12.4026C8.78762 11.0574 9.24854 9.33733 10.5938 8.56066C11.9389 7.78404 13.659 8.24491 14.4357 9.59012Z" stroke="black" stroke-width="1.2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M5.91064 14.512L7.1285 13.8088" stroke="black" stroke-width="1.2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M16.8716 8.18384L18.0894 7.48071" stroke="black" stroke-width="1.2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M0.703125 20.9844H9.18729" stroke="black" stroke-width="1.2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M14.8125 20.9844H23.2967" stroke="black" stroke-width="1.2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M9.18743 18.3125L9.18701 23.7969" stroke="black" stroke-width="1.2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M14.8125 18.4531L14.813 23.7969" stroke="black" stroke-width="1.2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                            </g>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_1729_20077">
                                                <rect width="24" height="24" fill="white" transform="translate(0 0.5)" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    <span>Currency</span>
                                </li>
                            </ul>
                            <svg class="dropdownArrow" xmlns="http://www.w3.org/2000/svg"
                                width="16" height="17" viewBox="0 0 16 17" fill="none">
                                <path
                                    d="M13.354 6.85354L8.35403 11.8535C8.30759 11.9 8.25245 11.9369 8.19175 11.9621C8.13105 11.9872 8.06599 12.0002 8.00028 12.0002C7.93457 12.0002 7.86951 11.9872 7.80881 11.9621C7.74811 11.9369 7.69296 11.9 7.64653 11.8535L2.64653 6.85354C2.55271 6.75972 2.5 6.63247 2.5 6.49979C2.5 6.36711 2.55271 6.23986 2.64653 6.14604C2.74035 6.05222 2.8676 5.99951 3.00028 5.99951C3.13296 5.99951 3.26021 6.05222 3.35403 6.14604L8.00028 10.7929L12.6465 6.14604C12.693 6.09958 12.7481 6.06273 12.8088 6.03759C12.8695 6.01245 12.9346 5.99951 13.0003 5.99951C13.066 5.99951 13.131 6.01245 13.1917 6.03759C13.2524 6.06273 13.3076 6.09958 13.354 6.14604C13.4005 6.19249 13.4373 6.24764 13.4625 6.30834C13.4876 6.36904 13.5006 6.43409 13.5006 6.49979C13.5006 6.56549 13.4876 6.63054 13.4625 6.69124C13.4373 6.75193 13.4005 6.80708 13.354 6.85354Z"
                                    fill="black" />
                            </svg>
                        </div>



                    </div>





                    <div class="flex flex-col gap-1 w-full">
                        <span
                            class="text-gray-500 text-sm sm:text-mediumFont  font-medium">Choose
                            Currency</span>

                        <div class="dropdownMain select-none" id="widgetCurrency" dataval="usa" custom-content>

                            <div class="selectedItem">

                            </div>

                            <ul id="currencyDropdown" class="dropdownList overflow-scroll">
                                <li value="USD" currency-name="US Dollar">
                                    <div class="flex flex-col justify-start items-start">
                                        <span class="font-medium">US Dollar</span>
                                        <span class="text-sm text-black/40 font-normal">USD</span>
                                    </div>
                                </li>
                                <li value="AUD" currency-name="Australian Dollar">
                                    <div class="flex flex-col justify-start items-start">
                                        <span class="font-medium">Australian Dollar</span>
                                        <span class="text-sm text-black/40 font-normal">AUD</span>
                                    </div>
                                </li>
                                <li value="GBP" currency-name="British Pound">
                                    <div class="flex flex-col justify-start items-start">
                                        <span class="font-medium">British Pound</span>
                                        <span class="text-sm text-black/40 font-normal">GBP</span>
                                    </div>
                                </li>
                                <li value="CAD" currency-name="Canadian Dollar">
                                    <div class="flex flex-col justify-start items-start">
                                        <span class="font-medium">Canadian Dollar</span>
                                        <span class="text-sm text-black/40 font-normal">CAD</span>
                                    </div>
                                </li>
                                <li value="EUR" currency-name="Euro">
                                    <div class="flex flex-col justify-start items-start">
                                        <span class="font-medium">Euro</span>
                                        <span class="text-sm text-black/40 font-normal">EUR</span>
                                    </div>
                                </li>
                                <li value="JPY" currency-name="Japanese Yen">
                                    <div class="flex flex-col justify-start items-start">
                                        <span class="font-medium">Japanese Yen</span>
                                        <span class="text-sm text-black/40 font-normal">JPY</span>
                                    </div>
                                </li>
                                <li value="MYR" currency-name="Malaysian Ringgit">
                                    <div class="flex flex-col justify-start items-start">
                                        <span class="font-medium">Malaysian Ringgit</span>
                                        <span class="text-sm text-black/40 font-normal">MYR</span>
                                    </div>
                                </li>
                                <li value="NZD" currency-name="New Zealand Dollar">
                                    <div class="flex flex-col justify-start items-start">
                                        <span class="font-medium">New Zealand Dollar</span>
                                        <span class="text-sm text-black/40 font-normal">NZD</span>
                                    </div>
                                </li>
                                <li value="SAR" currency-name="Saudi riyal">
                                    <div class="flex flex-col justify-start items-start">
                                        <span class="font-medium">Saudi riyal</span>
                                        <span class="text-sm text-black/40 font-normal">SAR</span>
                                    </div>
                                </li>
                                <li value="SGD" currency-name="Singapore Dollar">
                                    <div class="flex flex-col justify-start items-start">
                                        <span class="font-medium">Singapore Dollar</span>
                                        <span class="text-sm text-black/40 font-normal">SGD</span>
                                    </div>
                                </li>
                                <li value="CHF" currency-name="Swiss Franc">
                                    <div class="flex flex-col justify-start items-start">
                                        <span class="font-medium">Swiss Franc</span>
                                        <span class="text-sm text-black/40 font-normal">CHF</span>
                                    </div>
                                </li>
                                <li value="THB" currency-name="Thai Baht">
                                    <div class="flex flex-col justify-start items-start">
                                        <span class="font-medium">Thai Baht</span>
                                        <span class="text-sm text-black/40 font-normal">THB</span>
                                    </div>
                                </li>
                                <li value="AED" currency-name="UAE Dirham">
                                    <div class="flex flex-col justify-start items-start">
                                        <span class="font-medium">UAE Dirham</span>
                                        <span class="text-sm text-black/40 font-normal">AED</span>
                                    </div>
                                </li>
                            </ul>

                            <svg class="dropdownArrow" xmlns="http://www.w3.org/2000/svg"
                                width="16" height="17" viewBox="0 0 16 17" fill="none">
                                <path
                                    d="M13.354 6.85354L8.35403 11.8535C8.30759 11.9 8.25245 11.9369 8.19175 11.9621C8.13105 11.9872 8.06599 12.0002 8.00028 12.0002C7.93457 12.0002 7.86951 11.9872 7.80881 11.9621C7.74811 11.9369 7.69296 11.9 7.64653 11.8535L2.64653 6.85354C2.55271 6.75972 2.5 6.63247 2.5 6.49979C2.5 6.36711 2.55271 6.23986 2.64653 6.14604C2.74035 6.05222 2.8676 5.99951 3.00028 5.99951C3.13296 5.99951 3.26021 6.05222 3.35403 6.14604L8.00028 10.7929L12.6465 6.14604C12.693 6.09958 12.7481 6.06273 12.8088 6.03759C12.8695 6.01245 12.9346 5.99951 13.0003 5.99951C13.066 5.99951 13.131 6.01245 13.1917 6.03759C13.2524 6.06273 13.3076 6.09958 13.354 6.14604C13.4005 6.19249 13.4373 6.24764 13.4625 6.30834C13.4876 6.36904 13.5006 6.43409 13.5006 6.49979C13.5006 6.56549 13.4876 6.63054 13.4625 6.69124C13.4373 6.75193 13.4005 6.80708 13.354 6.85354Z"
                                    fill="black" />
                            </svg>
                        </div>

                    </div>

                </div>
                <div class="flex flex-col mt-4 w-full">



                    <span class="text-gray-500 text-sm    sm:text-mediumFont  font-medium">Enter Amount in
                        <span id="currencyName">USD</span></span>

                    <div
                        class="px-3 h-12 flex justify-between items-center border border-gray-300 rounded-lg mt-2 " id="widgetFxInputContainer">
                        <input id="widgetAmount"
                            class="h-full outline-none w-full  text-base font-semibold"
                            value="$ 1000" type="text">


                    </div>

                </div>
                <div class=" mt-3  gap-1 text-sm ml-auto hidden">
                    <!--<span class=" font-bold text-black text-opacity-70">approximately</span>-->
                    <span class=" text-primary text-lg font-bold underline approxVal ">₹ 0000</span>
                </div>
                <div id="getRatesButton"
                    class="bg-button-gradient flex gap-1 justify-center items-center py-3 rounded-xl mt-6  select-none cursor-pointer">
                    <span class="text-white text-base font-semibold">Get Best Rates</span> <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
                        <path d="M17.3971 12.9841L9.89714 20.4841C9.79051 20.5834 9.64948 20.6375 9.50375 20.6349C9.35802 20.6324 9.21898 20.5733 9.11592 20.4703C9.01287 20.3672 8.95383 20.2282 8.95126 20.0824C8.94869 19.9367 9.00278 19.7957 9.10214 19.6891L16.2037 12.5866L9.10214 5.48405C9.00278 5.37742 8.94869 5.23639 8.95126 5.09066C8.95383 4.94494 9.01287 4.8059 9.11592 4.70284C9.21898 4.59978 9.35802 4.54074 9.50375 4.53817C9.64948 4.5356 9.79051 4.58969 9.89714 4.68905L17.3971 12.1891C17.5025 12.2945 17.5616 12.4375 17.5616 12.5866C17.5616 12.7356 17.5025 12.8786 17.3971 12.9841Z" fill="white" />
                    </svg>

                </div>

            </div>
        </div>

        


    </div>
</div>