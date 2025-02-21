<!-- orderV3/index.php  -->
<!DOCTYPE html>
<html lang="en">

<?php


$fold = "../";
$title = "Forex Cash";
$orderV3Page = true;
$newHeader = false;
include $fold . 'includesv2/head.php';

?>
<style>
    .bottomSheetMain {
        display: none;
    }

    .bottomSheetMainVisible {
        display: flex;

    }


    .bottomSheet {
        transform: translateX(100%);
        transition: 0.3s;
    }

    .popBottomSheet {
        transform: translateX(0%);
    }

    @media (max-width:950px) {
        .bottomSheet {
            transform: translateY(100%);
            transition: 0.3s;
        }

        .popBottomSheet {
            transform: translateY(0%);
        }
    }

    /* Progress bar animations */
    [role="progressbar"] {
        transition: width 300ms ease-in-out;
    }

    .text-black.text-base.font-bold {
        transition: opacity 200ms ease-in-out;
    }

    .fade-out {
        opacity: 0;
    }

    /* Optional: Add animation for the number transition */
    .text-lg.font-bold {
        transition: transform 200ms ease-in-out;
    }

    .text-lg.font-bold.animate {
        transform: scale(1.1);
    }

    /* Add to your CSS */
    .grow.shrink.basis-0.h-0\\.5 {
        transition: all 400ms ease-in-out;
    }

    .rounded-\[30px\] {
        transition: all 400ms ease-in-out;
    }

    span.text-lg {
        transition: all 400ms ease-in-out;
    }

    @keyframes pulse {

        0%,
        100% {
            opacity: 1;
        }

        50% {
            opacity: 0.5;
        }
    }

    .animate-pulse {
        animation: pulse 1s cubic-bezier(0.4, 0, 0.6, 1) infinite;
    }

    .no-scroll {
        overflow: hidden;
        height: 100vh;
    }

    @media (max-width:950px) {
        .hideCartSection {
            display: none;
        }
    }

    .contactMainContainer .hideCartSection {
        display: none;
    }

    .contactMainContainer #sectionContainer {
        max-width: none;
    }

    #getRatesContainerMt::-webkit-scrollbar {
        display: none;
    }

    @media screen and (max-width:950px) {
        .deliveryMainContainer .borderSectionCart {
            border: none;
        }

        .deliveryMainContainer .headSectionCart {
            display: none;
        }

        .deliveryMainContainer .amountSectionCart {
            display: none;
        }

        .deliveryMainContainer #cartSection {
            padding-bottom: 0;
        }

        .deliveryMainContainer .btncontainerCart {
            padding: 0;
        }

    }

    .disabled-date {
        opacity: 0.4;
    }
</style>

<body class="flex justify-center">
    <div class="w-full flex flex-col items-center justify-center" id="containerWholeMain">
        <div class="w-full chooseCityOverlayMain  relative" style="max-width: 103rem;">

            <div class="w-full h-4 px-4 mt-6 flex items-center justify-start">
                <div class="w-fit cursor-pointer p-4" id="backBtn">
                    <svg  xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                        <path d="M27.9998 15.9999C27.9998 16.2652 27.8945 16.5195 27.7069 16.7071C27.5194 16.8946 27.265 16.9999 26.9998 16.9999H7.41356L14.7073 24.2924C14.8002 24.3854 14.8739 24.4957 14.9242 24.6171C14.9745 24.7384 15.0004 24.8686 15.0004 24.9999C15.0004 25.1313 14.9745 25.2614 14.9242 25.3828C14.8739 25.5042 14.8002 25.6145 14.7073 25.7074C14.6144 25.8004 14.5041 25.8741 14.3827 25.9243C14.2613 25.9746 14.1312 26.0005 13.9998 26.0005C13.8684 26.0005 13.7383 25.9746 13.6169 25.9243C13.4955 25.8741 13.3852 25.8004 13.2923 25.7074L4.29231 16.7074C4.19933 16.6146 4.12557 16.5043 4.07525 16.3829C4.02493 16.2615 3.99902 16.1314 3.99902 15.9999C3.99902 15.8685 4.02493 15.7384 4.07525 15.617C4.12557 15.4956 4.19933 15.3853 4.29231 15.2924L13.2923 6.29245C13.4799 6.1048 13.7344 5.99939 13.9998 5.99939C14.2652 5.99939 14.5197 6.1048 14.7073 6.29245C14.895 6.48009 15.0004 6.73458 15.0004 6.99995C15.0004 7.26531 14.895 7.5198 14.7073 7.70745L7.41356 14.9999H26.9998C27.265 14.9999 27.5194 15.1053 27.7069 15.2928C27.8945 15.4804 27.9998 15.7347 27.9998 15.9999Z" fill="black" />
                    </svg>
                </div>

            </div>






            <section class="mt-4 flex items-center justify-center md:mt-20" id="templateContainer">


            </section>

        </div>

    </div>

    <div class="fixed top-0 left-0 w-full h-[100vh] bg-black/20 z-20 bottomSheetMain">
        <div class="absolute bottom-0 left-0 w-full z-50 md:w-[30%] md:right-0 md:left-auto md:top-0">
            <div class="bg-white rounded-tl-[32px] rounded-tr-[32px] rounded-bl-lg rounded-br-lg md:rounded-none md:h-full w-full flex flex-col items-center py-6 pb-12 md:pt-12 bottomSheet h-full">

            </div>
        </div>
    </div>
    <footer>




        <div
            class="loadingAnimationContainer hidden items-center justify-center h-screen fixed top-0 left-0 w-full bg-white z-50">
            <div class="loading">
                <svg viewBox="0 0 187.3 93.7" height="200px" width="300px" class="svgbox">
                    <defs>
                        <linearGradient y2="0%" x2="100%" y1="0%" x1="0%" id="gradient">
                            <stop stop-color="#2C5AA2" offset="0%"></stop>
                            <stop stop-color="#E3373A" offset="100%"></stop>
                        </linearGradient>
                    </defs>
                    <path stroke="url(#gradient)"
                        d="M93.9,46.4c9.3,9.5,13.8,17.9,23.5,17.9s17.5-7.8,17.5-17.5s-7.8-17.6-17.5-17.5c-9.7,0.1-13.3,7.2-22.1,17.1c-8.9,8.8-15.7,17.9-25.4,17.9s-17.5-7.8-17.5-17.5s7.8-17.5,17.5-17.5S86.2,38.6,93.9,46.4z">
                    </path>
                </svg>
            </div>
        </div>




        <?php
        include $fold . 'includesv2/footerScripts.php';
        ?>



    </footer>







    <script type="module" src="../orderv3/main.js?ver=3.2"></script>
</body>


</html>