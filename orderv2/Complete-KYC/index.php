<!DOCTYPE html>
<html lang="en">

<?php

$fold = "../../";
$kycCompletePage = true;
$newHeader = true;
$title = "Complete KYC";
include $fold . 'includesv2/head.php';

?>

<body class="w-full flex flex-col  items-center justify-center">
    <div class="flex flex-col items-center justify-center w-full ">
        <div class="w-full chooseCityOverlayMain  relative">

            <?php

            include $fold . 'includesv2/header.php';

            ?>



            <!-- rest here -->
            <div class="progressBar mb-0 md:mb-8 hidden md:block">
                            <div class="w-full justify-start items-center progressBar hidden md:inline-flex mt-8">
                                <div class="grow shrink basis-0 h-0.5 progress-line bg-[#20bc73]"></div>
                                <div class="flex flex-col relative">
                                    <div class="w-12 h-12 p-2.5 bg-white rounded-[30px] border-2 border-[#20bc73] step-circle flex-col justify-center items-center gap-2.5 inline-flex">
                                        <span class="text-black text-xl font-bold">1</span>
                                    </div>
                                    <span class="step-label text-black text-lg font-bold absolute -bottom-12 min-w-48 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-center">Get Rates</span>
                                </div>

                                <div class="grow shrink basis-0 h-0.5 progress-line bg-[#20bc73]"></div>
                                <div class="flex flex-col relative">
                                    <div class="w-12 h-12 p-2.5 bg-white rounded-[30px] border-2 border-[#20bc73] step-circle flex-col justify-center items-center gap-2.5 inline-flex">
                                        <span class="text-black text-xl font-bold">2</span>
                                    </div>
                                    <span class="step-label text-black text-lg font-bold absolute -bottom-12 min-w-48 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-center">Delivery Details</span>
                                </div>

                                <div class="grow shrink basis-0 h-0.5 progress-line bg-[#20bc73]"></div>
                                <div class="flex flex-col relative">
                                    <div class="w-12 h-12 p-2.5 bg-white rounded-[30px] border-2 border-[#20bc73] step-circle flex-col justify-center items-center gap-2.5 inline-flex">
                                        <span class="text-black text-xl font-bold">3</span>
                                    </div>
                                    <span class="step-label text-black text-lg font-bold absolute -bottom-12 min-w-48 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-center">Contact Details</span>
                                </div>

                                <div class="grow shrink basis-0 h-0.5 progress-line bg-[#20bc73]"></div>
                                <div class="flex flex-col relative">
                                    <div class="w-12 h-12 p-2.5 bg-white rounded-[30px] border-2 border-[#20bc73] step-circle flex-col justify-center items-center gap-2.5 inline-flex">
                                        <span class="text-black text-xl font-bold">4</span>
                                    </div>
                                    <span class="step-label text-black text-lg font-bold absolute -bottom-12 min-w-48 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-center">Review & Payment</span>
                                </div>

                                <div class="grow shrink basis-0 h-0.5 progress-line bg-[#20bc73]"></div>
                                <div class="flex flex-col relative">
                                    <div class="w-12 h-12 p-2.5 bg-white rounded-[30px] border-2 border-[#20bc73] step-circle flex-col justify-center items-center gap-2.5 inline-flex">
                                        <span class="text-black text-xl font-bold">5</span>
                                    </div>
                                    <span class="step-label text-black text-lg font-bold absolute -bottom-12 min-w-48 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-center">Complete KYC</span>
                                </div>
                                <div class="grow shrink basis-0 h-0.5 progress-line bg-[#20bc73]"></div>
                            </div>
                        </div>

            <div class=" flex flex-col justify-center items-center">
                <section class="px-5 flex flex-col rounded-xl p-10 gap-8 w-full max-w-[900px]">


                    <div id="finalKycSection">
                        <div class="w-full progressBar justify-start items-center gap-2 inline-flex mt-6 md:hidden">
                            <div
                                class=" w-10 aspect-square bg-white rounded-3xl border-2 border-primary flex-col justify-center items-center gap-2.5 inline-flex">
                                <div><span class="text-primary text-lg font-bold ">5</span><span
                                        class="text-black/40 text-base font-medium ">/5</span></div>
                            </div>
                            <span id="completeKycText"
                                class="text-black text-lg  text-center">Complete
                                KYC</span>
                            <div class="flex flex-1 shrink gap-2.5 self-stretch my-auto h-0.5 bg-primary basis-4 w-[198px]"
                                role="progressbar"></div>
                        </div>


                        


                        <div class="w-full border-2 border-primary rounded-3xl mt-6 px-3 py-8">
                            <p class="text-black text-lg font-bold leading-[27px] block">Upload traveler's documents for verification.</p>
                            <p class="text-[#677489] mt-4 text-sm font-medium leading-[21px] tracking-tight">These documents are shared with the processing money changer to verify eligibility.</p>



                            <template id="kyc-uploader-template">
                                <div class="kycUploader">
                                    <div class="kycUploaderContainer h-12 pl-4 pr-1 py-1 rounded-lg border border-black/10 justify-between items-center inline-flex w-full">
                                        <div class="justify-start items-center gap-2 flex">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="33" viewBox="0 0 32 33" fill="none">
                                                <path d="M26.53 11.0342L19.53 4.03421C19.3895 3.89352 19.1988 3.81438 19 3.81421H7C6.53587 3.81421 6.09075 3.99858 5.76256 4.32677C5.43437 4.65496 5.25 5.10008 5.25 5.56421V27.5642C5.25 28.0283 5.43437 28.4735 5.76256 28.8016C6.09075 29.1298 6.53587 29.3142 7 29.3142H25C25.4641 29.3142 25.9092 29.1298 26.2374 28.8016C26.5656 28.4735 26.75 28.0283 26.75 27.5642V11.5642C26.7498 11.3654 26.6707 11.1747 26.53 11.0342ZM19.75 6.37421L24.19 10.8142H19.75V6.37421ZM25 27.8142H7C6.9337 27.8142 6.87011 27.7879 6.82322 27.741C6.77634 27.6941 6.75 27.6305 6.75 27.5642V5.56421C6.75 5.4979 6.77634 5.43432 6.82322 5.38743C6.87011 5.34055 6.9337 5.31421 7 5.31421H18.25V11.5642C18.25 11.7631 18.329 11.9539 18.4697 12.0945C18.6103 12.2352 18.8011 12.3142 19 12.3142H25.25V27.5642C25.25 27.6305 25.2237 27.6941 25.1768 27.741C25.1299 27.7879 25.0663 27.8142 25 27.8142ZM19.53 18.0342C19.6037 18.1029 19.6628 18.1857 19.7038 18.2777C19.7448 18.3697 19.7668 18.469 19.7686 18.5697C19.7704 18.6704 19.7518 18.7704 19.7141 18.8638C19.6764 18.9572 19.6203 19.042 19.549 19.1132C19.4778 19.1845 19.393 19.2406 19.2996 19.2783C19.2062 19.3161 19.1062 19.3346 19.0055 19.3328C18.9048 19.331 18.8055 19.309 18.7135 19.268C18.6215 19.227 18.5387 19.1679 18.47 19.0942L16.75 17.3755V23.5642C16.75 23.7631 16.671 23.9539 16.5303 24.0945C16.3897 24.2352 16.1989 24.3142 16 24.3142C15.8011 24.3142 15.6103 24.2352 15.4697 24.0945C15.329 23.9539 15.25 23.7631 15.25 23.5642V17.3755L13.53 19.0942C13.3878 19.2267 13.1998 19.2988 13.0055 19.2954C12.8112 19.292 12.6258 19.2132 12.4884 19.0758C12.351 18.9384 12.2723 18.753 12.2688 18.5587C12.2654 18.3644 12.3375 18.1764 12.47 18.0342L15.47 15.0342C15.6106 14.8938 15.8012 14.8149 16 14.8149C16.1988 14.8149 16.3894 14.8938 16.53 15.0342L19.53 18.0342Z" fill="black" />
                                            </svg>

                                            <span class="text-black text-sm font-medium leading-[21px] doc-name">Document Title</span>

                                        </div>

                                        <div class="uploadBtn self-stretch pl-3 pr-2 py-1 bg-primary-5 rounded justify-center items-center gap-2.5 flex relative cursor-pointer">
                                            <span class="text-primary text-xs font-semibold leading-[18px]">Upload</span>
                                            <input type="file" tag="" class="file_upload absolute border-none outline-none bg-transparent opacity-0 w-full h-full left-0 top-0">
                                        </div>

                                        <span class="text-[#ffa928] text-xs font-semibold leading-normal uploadingText mr-4">Uploading</span>

                                        <div class="uploadedContent h-14 px-2 py-1 rounded justify-center items-center gap-1 inline-flex">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 20 20" fill="none">
                                                <path d="M17.8313 5.95628L7.83128 15.9563C7.74339 16.0441 7.62425 16.0934 7.50003 16.0934C7.37581 16.0934 7.25667 16.0441 7.16878 15.9563L2.79378 11.5813C2.71098 11.4924 2.6659 11.3749 2.66804 11.2535C2.67018 11.132 2.71938 11.0161 2.80526 10.9303C2.89115 10.8444 3.00701 10.7952 3.12845 10.793C3.24989 10.7909 3.36742 10.836 3.45628 10.9188L7.50003 14.9617L17.1688 5.29378C17.2576 5.21098 17.3752 5.1659 17.4966 5.16804C17.618 5.17018 17.7339 5.21938 17.8198 5.30526C17.9057 5.39115 17.9549 5.50701 17.957 5.62845C17.9592 5.74989 17.9141 5.86742 17.8313 5.95628Z" fill="#20BC73" />
                                            </svg>
                                            <span class="text-[#20bc73] text-xs font-semibold leading-normal">Uploaded</span>
                                        </div>
                                    </div>

                                    <div class="flex gap-4 items-center px-2 mt-1 kycExtender">
                                        <span class="text-[#606060] text-xs font-normal leading-[21px]">Sample_Document.PDF</span>
                                        <a href="" target="_blank" class="preview_link rounded-lg  px-[3px] gap-1 flex items-center justify-center ml-auto">
                                            
                                            <span class="text-[12px] text-primary">View</span>
                                        </a>
                                        <svg class="deleteIcon cursor-pointer ml-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none">
                                            <path d="M20.25 4.6875H16.3125V3.75C16.3125 3.20299 16.0952 2.67839 15.7084 2.29159C15.3216 1.9048 14.797 1.6875 14.25 1.6875H9.75C9.20299 1.6875 8.67839 1.9048 8.29159 2.29159C7.9048 2.67839 7.6875 3.20299 7.6875 3.75V4.6875H3.75C3.60082 4.6875 3.45774 4.74676 3.35225 4.85225C3.24676 4.95774 3.1875 5.10082 3.1875 5.25C3.1875 5.39918 3.24676 5.54226 3.35225 5.64775C3.45774 5.75324 3.60082 5.8125 3.75 5.8125H4.6875V19.5C4.6875 19.8481 4.82578 20.1819 5.07192 20.4281C5.31806 20.6742 5.6519 20.8125 6 20.8125H18C18.3481 20.8125 18.6819 20.6742 18.9281 20.4281C19.1742 20.1819 19.3125 19.8481 19.3125 19.5V5.8125H20.25C20.3992 5.8125 20.5423 5.75324 20.6477 5.64775C20.7532 5.54226 20.8125 5.39918 20.8125 5.25C20.8125 5.10082 20.7532 4.95774 20.6477 4.85225C20.5423 4.74676 20.3992 4.6875 20.25 4.6875ZM8.8125 3.75C8.8125 3.50136 8.91127 3.2629 9.08709 3.08709C9.2629 2.91127 9.50136 2.8125 9.75 2.8125H14.25C14.4986 2.8125 14.7371 2.91127 14.9129 3.08709C15.0887 3.2629 15.1875 3.50136 15.1875 3.75V4.6875H8.8125V3.75ZM18.1875 19.5C18.1875 19.5497 18.1677 19.5974 18.1326 19.6326C18.0974 19.6677 18.0497 19.6875 18 19.6875H6C5.95027 19.6875 5.90258 19.6677 5.86742 19.6326C5.83225 19.5974 5.8125 19.5497 5.8125 19.5V5.8125H18.1875V19.5ZM10.3125 9.75V15.75C10.3125 15.8992 10.2532 16.0423 10.1477 16.1477C10.0423 16.2532 9.89918 16.3125 9.75 16.3125C9.60082 16.3125 9.45774 16.2532 9.35225 16.1477C9.24676 16.0423 9.1875 15.8992 9.1875 15.75V9.75C9.1875 9.60082 9.24676 9.45774 9.35225 9.35225C9.45774 9.24676 9.60082 9.1875 9.75 9.1875C9.89918 9.1875 10.0423 9.24676 10.1477 9.35225C10.2532 9.45774 10.3125 9.60082 10.3125 9.75ZM14.8125 9.75V15.75C14.8125 15.8992 14.7532 16.0423 14.6477 16.1477C14.5423 16.2532 14.3992 16.3125 14.25 16.3125C14.1008 16.3125 13.9577 16.2532 13.8523 16.1477C13.7468 16.0423 13.6875 15.8992 13.6875 15.75V9.75C13.6875 9.60082 13.7468 9.45774 13.8523 9.35225C13.9577 9.24676 14.1008 9.1875 14.25 9.1875C14.3992 9.1875 14.5423 9.24676 14.6477 9.35225C14.7532 9.45774 14.8125 9.60082 14.8125 9.75Z" fill="black" />
                                        </svg>

                                        <div class="uploadProgress flex justify-between items-center gap-2 w-56">
                                            <div class="h-1 w-40 bg-[#eb8f00] rounded-lg progressBar"></div>
                                            <span class="progressText text-[#2c5aa2] text-xs font-semibold leading-[18px]"></span>
                                        </div>
                                    </div>
                                </div>
                            </template>

                            <div class="kycList mt-6 flex flex-col gap-4">














                            </div>



                            <!--<div-->
                            <!--            class="w-full h-12 px-2 py-3 bg-primary rounded-lg justify-center items-center gap-1 inline-flex mt-20 mb-4">-->
                            <!--            <div class="text-white text-sm font-bold">View Order</div>-->
                            <!--            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"-->
                            <!--                fill="none">-->
                            <!--                <path-->
                            <!--                    d="M15.781 12.7823L8.28104 20.2823C8.21136 20.3519 8.12863 20.4072 8.03759 20.4449C7.94654 20.4826 7.84896 20.5021 7.75042 20.5021C7.65187 20.5021 7.55429 20.4826 7.46324 20.4449C7.3722 20.4072 7.28947 20.3519 7.21979 20.2823C7.15011 20.2126 7.09483 20.1299 7.05712 20.0388C7.01941 19.9478 7 19.8502 7 19.7516C7 19.6531 7.01941 19.5555 7.05712 19.4645C7.09483 19.3734 7.15011 19.2907 7.21979 19.221L14.1901 12.2516L7.21979 5.28226C7.07906 5.14153 7 4.95066 7 4.75164C7 4.55261 7.07906 4.36174 7.21979 4.22101C7.36052 4.08028 7.55139 4.00122 7.75042 4.00122C7.94944 4.00122 8.14031 4.08028 8.28104 4.22101L15.781 11.721C15.8508 11.7907 15.9061 11.8734 15.9438 11.9644C15.9816 12.0555 16.001 12.1531 16.001 12.2516C16.001 12.3502 15.9816 12.4478 15.9438 12.5388C15.9061 12.6299 15.8508 12.7126 15.781 12.7823Z"-->
                            <!--                    fill="white" />-->
                            <!--            </svg>-->
                            <!--</div>-->
                        </div>

                        <div id="finishFinalKycSection" class="w-full h-14  mt-6 bg-button-gradient rounded-md justify-center items-center gap-4 inline-flex">
                            <div class="text-white text-base font-bold ">Finish KYC</div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="21" height="20" viewBox="0 0 21 20" fill="none">
                                <path d="M13.6943 10.6389L7.60294 16.7337C7.54635 16.7903 7.47916 16.8352 7.40521 16.8659C7.33127 16.8965 7.25201 16.9123 7.17198 16.9123C7.09194 16.9123 7.01268 16.8965 6.93874 16.8659C6.86479 16.8352 6.79761 16.7903 6.74101 16.7337C6.68442 16.677 6.63952 16.6098 6.60889 16.5358C6.57826 16.4618 6.5625 16.3825 6.5625 16.3025C6.5625 16.2224 6.57826 16.1431 6.60889 16.0691C6.63952 15.9951 6.68442 15.9279 6.74101 15.8713L12.4022 10.2077L6.74101 4.54419C6.62671 4.42983 6.5625 4.27472 6.5625 4.11299C6.5625 3.95125 6.62671 3.79615 6.74101 3.68178C6.85531 3.56742 7.01033 3.50317 7.17198 3.50317C7.33362 3.50317 7.48864 3.56742 7.60294 3.68178L13.6943 9.77652C13.7509 9.83312 13.7959 9.90034 13.8265 9.97433C13.8572 10.0483 13.873 10.1276 13.873 10.2077C13.873 10.2878 13.8572 10.3671 13.8265 10.4411C13.7959 10.5151 13.7509 10.5823 13.6943 10.6389Z" fill="white" />
                            </svg>
                        </div>
                    </div>

                    <div id="finalInfoSection" class="hidden">

                        <div id="backBtnKycSection">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="20" viewBox="0 0 24 20" fill="none">
                                <path d="M23.9998 10.0001C23.9998 10.2653 23.8945 10.5196 23.7069 10.7072C23.5194 10.8947 23.265 11.0001 22.9998 11.0001H3.41356L10.7073 18.2926C10.8002 18.3855 10.8739 18.4958 10.9242 18.6172C10.9745 18.7386 11.0004 18.8687 11.0004 19.0001C11.0004 19.1315 10.9745 19.2616 10.9242 19.383C10.8739 19.5044 10.8002 19.6147 10.7073 19.7076C10.6144 19.8005 10.5041 19.8742 10.3827 19.9245C10.2613 19.9747 10.1312 20.0006 9.99981 20.0006C9.86841 20.0006 9.73831 19.9747 9.61691 19.9245C9.49552 19.8742 9.38522 19.8005 9.29231 19.7076L0.29231 10.7076C0.199334 10.6147 0.125575 10.5044 0.0752504 10.383C0.0249261 10.2616 -0.000976562 10.1315 -0.000976562 10.0001C-0.000976562 9.86865 0.0249261 9.73853 0.0752504 9.61713C0.125575 9.49573 0.199334 9.38544 0.29231 9.29257L9.29231 0.292568C9.47995 0.104927 9.73445 -0.000488283 9.99981 -0.000488281C10.2652 -0.000488279 10.5197 0.104927 10.7073 0.292568C10.895 0.480208 11.0004 0.734704 11.0004 1.00007C11.0004 1.26543 10.895 1.51993 10.7073 1.70757L3.41356 9.00007H22.9998C23.265 9.00007 23.5194 9.10542 23.7069 9.29296C23.8945 9.4805 23.9998 9.73485 23.9998 10.0001Z" fill="black" />
                            </svg>
                        </div>

                        <div class="w-full mt-8">
                            <div class=" flex-col justify-center items-center gap-4 inline-flex">
                                <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 64 64" fill="none">
                                    <g clip-path="url(#clip0_1103_11302)">
                                        <path d="M40.0544 6V2C40.0544 1.46957 40.2651 0.960859 40.6402 0.585787C41.0152 0.210714 41.5239 0 42.0544 0C42.5848 0 43.0935 0.210714 43.4686 0.585787C43.8437 0.960859 44.0544 1.46957 44.0544 2V6C44.0544 6.53043 43.8437 7.03914 43.4686 7.41421C43.0935 7.78929 42.5848 8 42.0544 8C41.5239 8 41.0152 7.78929 40.6402 7.41421C40.2651 7.03914 40.0544 6.53043 40.0544 6ZM49.0244 10.25C49.3379 10.4426 49.6989 10.5439 50.0669 10.5425C50.4101 10.543 50.7477 10.4553 51.0472 10.2876C51.3467 10.1199 51.598 9.87792 51.7769 9.585L53.7769 6.3075C53.9136 6.08294 54.0048 5.83365 54.0452 5.57385C54.0856 5.31406 54.0744 5.04885 54.0123 4.79337C53.9502 4.5379 53.8384 4.29715 53.6833 4.08489C53.5281 3.87262 53.3327 3.69299 53.1081 3.55625C52.8836 3.41951 52.6343 3.32834 52.3745 3.28795C52.1147 3.24755 51.8495 3.25872 51.594 3.32082C51.3385 3.38292 51.0978 3.49473 50.8855 3.64987C50.6733 3.80501 50.4936 4.00044 50.3569 4.225L48.3569 7.5C48.22 7.72436 48.1287 7.9735 48.0882 8.23316C48.0476 8.49283 48.0587 8.75795 48.1207 9.01334C48.1827 9.26874 48.2944 9.50942 48.4495 9.72161C48.6045 9.9338 48.7999 10.1134 49.0244 10.25ZM60.9019 13.3975C60.8213 13.1472 60.6922 12.9152 60.5219 12.7149C60.3516 12.5145 60.1435 12.3497 59.9094 12.2299C59.6753 12.1101 59.4199 12.0376 59.1578 12.0166C58.8957 11.9956 58.632 12.0265 58.3819 12.1075L54.6169 13.32C54.162 13.4654 53.7742 13.7688 53.5236 14.1753C53.2729 14.5817 53.176 15.0644 53.2503 15.5362C53.3246 16.0079 53.5652 16.4374 53.9286 16.7472C54.2921 17.0569 54.7544 17.2264 55.2319 17.225C55.4407 17.2242 55.6481 17.1913 55.8469 17.1275L59.6094 15.915C59.8608 15.8348 60.0938 15.7055 60.295 15.5348C60.4962 15.3641 60.6617 15.1553 60.7818 14.9203C60.902 14.6854 60.9744 14.429 60.995 14.1659C61.0156 13.9028 60.984 13.6383 60.9019 13.3875V13.3975ZM54.2494 24.395C56.3675 28.0777 57.2614 32.3379 56.8022 36.5614C56.343 40.785 54.5544 44.7535 51.6944 47.895C51.6094 48.3275 51.5144 48.76 51.3969 49.19C50.3658 53.0142 48.2247 56.4471 45.2441 59.0553C42.2634 61.6636 38.5768 63.3303 34.6497 63.8449C30.7225 64.3595 26.7309 63.6991 23.1789 61.9469C19.6268 60.1947 16.6735 57.4294 14.6919 54L5.87438 38.75C5.33881 37.8221 5.0409 36.7763 5.00714 35.7055C4.97337 34.6347 5.20481 33.5721 5.68085 32.6124C6.1569 31.6526 6.86279 30.8254 7.73573 30.2043C8.60867 29.5833 9.62159 29.1876 10.6844 29.0525L9.93438 27.7525C9.39951 26.8254 9.10186 25.7806 9.06785 24.7108C9.03383 23.641 9.26452 22.5794 9.73942 21.6202C10.2143 20.661 10.9187 19.834 11.7901 19.2124C12.6615 18.5909 13.6728 18.1942 14.7344 18.0575L14.5594 17.75C13.818 16.4732 13.5333 14.9819 13.7524 13.5218C13.9714 12.0616 14.681 10.7196 15.7645 9.71644C16.8479 8.71334 18.2405 8.10898 19.7132 8.00285C21.1859 7.89671 22.6508 8.29512 23.8669 9.1325C24.4538 8.16588 25.2821 7.36867 26.2705 6.81926C27.2589 6.26986 28.3733 5.98718 29.5041 5.99904C30.6349 6.01089 31.7431 6.31687 32.7197 6.88688C33.6964 7.45689 34.5079 8.27129 35.0744 9.25L38.1394 14.55C38.7913 13.6998 39.6427 13.0234 40.6182 12.5807C41.5938 12.138 42.6635 11.9426 43.7326 12.0118C44.8017 12.081 45.8373 12.4127 46.7476 12.9775C47.658 13.5423 48.4151 14.3228 48.9519 15.25L54.2494 24.395ZM27.2669 13.75L33.5169 24.5425C34.0382 23.8603 34.6894 23.2882 35.433 22.8591C36.1766 22.43 36.9979 22.1524 37.8494 22.0425L31.6044 11.25C31.2729 10.6748 30.7264 10.2549 30.0853 10.0826C29.4441 9.91028 28.7608 9.99973 28.1856 10.3313C27.6104 10.6628 27.1905 11.2092 27.0182 11.8503C26.8459 12.4915 26.9354 13.1748 27.2669 13.75ZM18.0294 15.75L19.6444 18.5425C20.1658 17.8611 20.8168 17.2894 21.5599 16.8604C22.303 16.4314 23.1235 16.1534 23.9744 16.0425L22.3619 13.25C22.1977 12.9655 21.9792 12.7162 21.7186 12.5162C21.4581 12.3162 21.1607 12.1694 20.8435 12.0843C20.5263 11.9993 20.1954 11.9775 19.8698 12.0203C19.5441 12.0631 19.2301 12.1696 18.9456 12.3338C18.6612 12.4979 18.4118 12.7165 18.2118 12.977C18.0118 13.2375 17.8651 13.5349 17.78 13.8521C17.6949 14.1693 17.6731 14.5002 17.7159 14.8259C17.7587 15.1515 17.8652 15.4655 18.0294 15.75ZM45.9144 36L40.8594 27.25C40.5527 26.6619 40.025 26.2197 39.3923 26.0207C38.7596 25.8216 38.0738 25.8821 37.4856 26.1888C36.8975 26.4954 36.4553 27.0231 36.2563 27.6558C36.0573 28.2885 36.1177 28.9744 36.4244 29.5625L39.5744 35C39.8396 35.4598 39.9113 36.0062 39.7737 36.5188C39.6361 37.0315 39.3005 37.4685 38.8406 37.7338C38.3808 37.999 37.8345 38.0707 37.3218 37.9331C36.8091 37.7955 36.3721 37.4598 36.1069 37L26.9819 21.25C26.6504 20.6748 26.1039 20.2549 25.4628 20.0826C24.8216 19.9103 24.1383 19.9997 23.5631 20.3313C22.9879 20.6628 22.568 21.2092 22.3957 21.8503C22.2234 22.4915 22.3129 23.1748 22.6444 23.75L29.1569 35C29.4221 35.4598 29.4938 36.0062 29.3562 36.5188C29.2186 37.0315 28.8829 37.4685 28.4231 37.7338C27.9633 37.999 27.417 38.0707 26.9043 37.9331C26.3916 37.7955 25.9546 37.4598 25.6894 37L17.7494 23.25C17.4179 22.6755 16.8717 22.2562 16.231 22.0843C15.5903 21.9125 14.9077 22.0022 14.3331 22.3338C13.7586 22.6653 13.3393 23.2114 13.1675 23.8521C12.9956 24.4928 13.0854 25.1755 13.4169 25.75L22.2219 41C22.4871 41.4605 22.5585 42.0075 22.4205 42.5206C22.2824 43.0338 21.9461 43.471 21.4856 43.7363C21.0251 44.0015 20.4782 44.0729 19.965 43.9348C19.4519 43.7968 19.0146 43.4605 18.7494 43L13.6794 34.25C13.3479 33.6751 12.8016 33.2555 12.1606 33.0835C11.5197 32.9114 10.8367 33.001 10.2619 33.3325C9.68702 33.664 9.26741 34.2103 9.09534 34.8512C8.92328 35.4921 9.01286 36.1751 9.34438 36.75L18.1619 52C19.748 54.7421 22.111 56.9528 24.9526 58.3529C27.7942 59.7531 30.9869 60.2799 34.1276 59.8669C37.2684 59.4539 40.2164 58.1196 42.5994 56.0325C44.9824 53.9454 46.6936 51.1989 47.5169 48.14C48.0666 46.1111 48.2079 43.9933 47.9329 41.9093C47.6578 39.8254 46.9717 37.8168 45.9144 36ZM50.7669 26.395L45.4819 17.25C45.3177 16.9647 45.099 16.7145 44.8382 16.5138C44.5773 16.313 44.2795 16.1656 43.9617 16.0799C43.3198 15.9069 42.6356 15.996 42.0594 16.3275C41.7741 16.4917 41.5239 16.7104 41.3232 16.9712C41.1224 17.2321 40.975 17.5299 40.8893 17.8477C40.7163 18.4895 40.8054 19.1738 41.1369 19.75L49.3869 34.0125C50.5305 35.9844 51.3294 38.137 51.7494 40.3775C52.6533 38.1242 53.0346 35.6953 52.8644 33.2734C52.6942 30.8515 51.9771 28.4997 50.7669 26.395Z" fill="#008E4C" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_1103_11302">
                                            <rect width="64" height="64" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                                <div class="self-stretch h-[91px] flex-col justify-center items-center gap-1 flex">
                                    <p class="self-stretch text-[#008e4b] text-2xl font-bold  leading-[28.80px] text-center" id="customerGreeting"></p>
                                    <p class="self-stretch text-[#008e4b] text-2xl font-bold  leading-[28.80px] moneyT">Your order has been placed. </p>
                                    <p class="self-stretch text-[#008e4b] text-2xl font-bold  leading-[28.80px] forexContainer text-center">Your order has been placed and is pending stock confirmation. </p>
                                </div>
                            </div>

                            <div class="mt-8 flex gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" class="w-12">
                                    <defs>
                                        <radialGradient id="paint0_radial" cx="24" cy="24" r="18" gradientUnits="userSpaceOnUse">
                                            <stop offset="0" stop-color="#33FFA0" />
                                            <stop offset="1" stop-color="#33FFA0" />
                                        </radialGradient>
                                        <radialGradient id="paint1_radial" cx="24" cy="24" r="12" gradientUnits="userSpaceOnUse">
                                            <stop offset="0" stop-color="#33FFA0" />
                                            <stop offset="1" stop-color="#33FFA0" />
                                        </radialGradient>
                                    </defs>

                                    <!-- Outer circle with gradient -->
                                    <circle cx="24" cy="24" r="18" fill="url(#paint0_radial)" fill-opacity="0.3">
                                        <animate attributeName="r"
                                            values="18;20;18"
                                            dur="1s"
                                            repeatCount="indefinite"
                                            begin="0s" />
                                        <animate attributeName="fill-opacity"
                                            values="0.3;0.1;0.3"
                                            dur="1s"
                                            repeatCount="indefinite"
                                            begin="0s" />
                                    </circle>

                                    <!-- Middle circle with gradient -->
                                    <circle cx="24" cy="24" r="12" fill="url(#paint1_radial)" fill-opacity="0.4">
                                        <animate attributeName="r"
                                            values="12;14;12"
                                            dur="1s"
                                            repeatCount="indefinite"
                                            begin="0.3s" />
                                        <animate attributeName="fill-opacity"
                                            values="0.4;0.2;0.4"
                                            dur="1s"
                                            repeatCount="indefinite"
                                            begin="0.3s" />
                                    </circle>

                                    <!-- Inner circle solid color -->
                                    <circle cx="24" cy="24" r="6" fill="#00DD76">
                                        <animate attributeName="r"
                                            values="6;7;6"
                                            dur="1s"
                                            repeatCount="indefinite"
                                            begin="0.6s" />
                                        <animate attributeName="fill-opacity"
                                            values="1;0.8;1"
                                            dur="1s"
                                            repeatCount="indefinite"
                                            begin="0.6s" />
                                    </circle>
                                </svg>
                                <span class="text-black text-base font-normal  leading-normal tracking-tight" id="contactSoonText">Our Customer Executive will reach you within <b class="text-primary">60 Minutes</b> for Pending Stock Confirmation.</span>
                            </div>
                            <div class="mt-4">
                                <p class="text-black/40 text-base font-medium  leading-normal tracking-tight">Forex Order No</p>
                                <div class="opacity-90 text-black text-xl font-semibold flex items-center gap-2 leading-[30px] tracking-tight">
                                    <span id="orderId"></span>
                                    <svg id="copyBtn" class="cursor-pointer" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                        <path d="M13.5 2H5.5C5.36739 2 5.24021 2.05268 5.14645 2.14645C5.05268 2.24021 5 2.36739 5 2.5V5H2.5C2.36739 5 2.24021 5.05268 2.14645 5.14645C2.05268 5.24021 2 5.36739 2 5.5V13.5C2 13.6326 2.05268 13.7598 2.14645 13.8536C2.24021 13.9473 2.36739 14 2.5 14H10.5C10.6326 14 10.7598 13.9473 10.8536 13.8536C10.9473 13.7598 11 13.6326 11 13.5V11H13.5C13.6326 11 13.7598 10.9473 13.8536 10.8536C13.9473 10.7598 14 10.6326 14 10.5V2.5C14 2.36739 13.9473 2.24021 13.8536 2.14645C13.7598 2.05268 13.6326 2 13.5 2ZM10 13H3V6H10V13ZM13 10H11V5.5C11 5.36739 10.9473 5.24021 10.8536 5.14645C10.7598 5.05268 10.6326 5 10.5 5H6V3H13V10Z" fill="black" fill-opacity="0.4" />
                                    </svg>
                                </div>
                            </div>


                            <div class="mt-6 flex flex-col pb-8">

                                <p class="text-black/40 text-[13px] font-medium leading-tight tracking-tight forexContainer">Currencies are subject to their availability. In the rare case that your chosen currency is currently unavailable, We shall intimate you in advance and propose the best possible solution for your consideration. In such cases, the final exchange rate would be subject to fluctuations in the market. If you are unhappy with the rate provided, the Rate Lock Deposit(if any) will be fully refunded to you.</p>
                                <div class="mt-4">
                                    <p class="text-black text-sm font-normal leading-[21px] tracking-tight">If you have any doubts</p>
                                    <div class="flex flex-col md:flex-row md:gap-8">

                                        <a class="w-full h-20 pl-5 py-[19px] bg-[#20bc73]/5 rounded-2xl justify-start items-center inline-flex mt-4" href="https://api.whatsapp.com/send?phone=919995023600" target="_blank">
                                            <div>
                                                <div class="self-stretch justify-start items-center gap-2 inline-flex">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                                                        <path d="M23.4484 18.105L19.4484 16.105C19.2909 16.0265 19.1156 15.991 18.94 16.002C18.7644 16.0129 18.5948 16.07 18.4484 16.1675L16.6121 17.3925C15.7692 16.9291 15.0755 16.2354 14.6121 15.3925L15.8371 13.5562C15.9346 13.4098 15.9917 13.2402 16.0027 13.0646C16.0136 12.8891 15.9781 12.7137 15.8996 12.5562L13.8996 8.55625C13.8167 8.38884 13.6886 8.248 13.5298 8.14968C13.3709 8.05137 13.1877 7.99952 13.0009 8C11.6748 8 10.403 8.52678 9.46535 9.46447C8.52767 10.4021 8.00088 11.6739 8.00088 13C8.00419 15.9164 9.16418 18.7123 11.2264 20.7745C13.2885 22.8367 16.0845 23.9967 19.0009 24C19.6575 24 20.3077 23.8707 20.9143 23.6194C21.5209 23.3681 22.0721 22.9998 22.5364 22.5355C23.0007 22.0712 23.369 21.52 23.6203 20.9134C23.8716 20.3068 24.0009 19.6566 24.0009 19C24.001 18.8142 23.9494 18.6321 23.8518 18.474C23.7542 18.3159 23.6145 18.1881 23.4484 18.105ZM19.0009 22C16.6147 21.9974 14.3271 21.0483 12.6398 19.361C10.9526 17.6738 10.0035 15.3861 10.0009 13C10.0007 12.3064 10.2408 11.6342 10.6805 11.0977C11.1201 10.5612 11.732 10.1936 12.4121 10.0575L13.8471 12.9325L12.6259 14.75C12.5346 14.8869 12.4786 15.0442 12.4626 15.2079C12.4467 15.3717 12.4714 15.5368 12.5346 15.6888C13.2501 17.3892 14.6029 18.742 16.3034 19.4575C16.4558 19.5235 16.6222 19.5505 16.7876 19.5361C16.953 19.5217 17.1122 19.4663 17.2509 19.375L19.0771 18.1575L21.9521 19.5925C21.815 20.2734 21.4458 20.8856 20.9076 21.3247C20.3693 21.7637 19.6955 22.0024 19.0009 22ZM16.0009 3C13.7565 2.99951 11.5502 3.58011 9.5967 4.68529C7.64324 5.79046 6.00919 7.38256 4.8536 9.30662C3.69801 11.2307 3.06024 13.4212 3.00237 15.6648C2.9445 17.9085 3.46851 20.1289 4.52338 22.11L3.10463 26.3662C2.98712 26.7186 2.97006 27.0968 3.05538 27.4583C3.1407 27.8199 3.32503 28.1505 3.5877 28.4132C3.85037 28.6759 4.181 28.8602 4.54254 28.9455C4.90408 29.0308 5.28224 29.0138 5.63463 28.8962L9.89088 27.4775C11.6343 28.4048 13.5662 28.9228 15.5397 28.992C17.5132 29.0613 19.4765 28.68 21.2807 27.8772C23.0849 27.0743 24.6825 25.871 25.9521 24.3586C27.2218 22.8462 28.1303 21.0644 28.6085 19.1484C29.0868 17.2325 29.1223 15.2328 28.7123 13.301C28.3023 11.3693 27.4577 9.55642 26.2424 7.9999C25.0272 6.44337 23.4733 5.18415 21.6988 4.31782C19.9242 3.45149 17.9756 3.00081 16.0009 3ZM16.0009 27C14.0671 27.0013 12.1673 26.4921 10.4934 25.5238C10.3708 25.4527 10.2346 25.4085 10.0936 25.394C9.9527 25.3796 9.81031 25.3953 9.67588 25.44L5.00088 27L6.55963 22.325C6.60457 22.1907 6.62045 22.0483 6.60622 21.9074C6.592 21.7665 6.548 21.6301 6.47713 21.5075C5.2646 19.4111 4.77777 16.9732 5.09217 14.572C5.40657 12.1707 6.50463 9.94027 8.21599 8.22674C9.92736 6.51321 12.1564 5.41234 14.5573 5.0949C16.9581 4.77747 19.3967 5.26122 21.4945 6.47111C23.5924 7.68099 25.2324 9.54939 26.1601 11.7864C27.0877 14.0235 27.2512 16.5042 26.6252 18.8436C25.9991 21.1831 24.6185 23.2505 22.6976 24.7253C20.7766 26.2 18.4227 26.9996 16.0009 27Z" fill="#20BC73" />
                                                    </svg>



                                                    <div class="flex-col justify-start items-start inline-flex">
                                                        <p class="text-black text-sm font-semibold font-['Plus Jakarta Sans'] leading-[21px]">WhatsApp Now</p>
                                                        <p class="text-black text-sm font-normal font-['Plus Jakarta Sans'] leading-[21px]">+91 9995023600</p>
                                                    </div>


                                                </div>
                                            </div>

                                        </a>


                                        <a class="w-full h-20 pl-5 py-[17.50px] bg-[#0e51a0]/5 rounded-2xl justify-start items-center inline-flex mt-4" href="tel:04842886900">

                                            <div>
                                                <div class="self-stretch justify-start items-center gap-2 inline-flex">

                                                    <svg class="w-8 h-8 relative rounded-[42.67px] border border-[#0e51a0]" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                                                        <rect x="0.666667" y="0.666667" width="30.6667" height="30.6667" rx="15.3333" stroke="#0E51A0" stroke-width="1.33333" />
                                                        <path d="M23.2297 19.0902L19.4609 17.4014L19.4505 17.3966C19.2548 17.3129 19.0414 17.2793 18.8295 17.2989C18.6176 17.3184 18.4139 17.3905 18.2369 17.5086C18.216 17.5224 18.196 17.5373 18.1769 17.5534L16.2297 19.2134C14.9961 18.6142 13.7224 17.3502 13.1232 16.1326L14.7857 14.1558C14.8017 14.1358 14.8169 14.1158 14.8313 14.0942C14.9468 13.9176 15.0169 13.7152 15.0353 13.505C15.0537 13.2948 15.0199 13.0833 14.9369 12.8894V12.8798L13.2432 9.10454C13.1334 8.85115 12.9446 8.64007 12.705 8.50281C12.4654 8.36554 12.1878 8.30946 11.9136 8.34293C10.8296 8.48558 9.83456 9.01795 9.11436 9.84062C8.39416 10.6633 7.99805 11.72 8.00001 12.8134C8.00001 19.1654 13.168 24.3334 19.5201 24.3334C20.6135 24.3354 21.6702 23.9393 22.4928 23.2191C23.3155 22.4989 23.8479 21.5039 23.9905 20.4198C24.0241 20.1458 23.9681 19.8683 23.831 19.6286C23.6939 19.389 23.483 19.2001 23.2297 19.0902ZM19.5201 23.0534C16.8052 23.0505 14.2023 21.9707 12.2825 20.0509C10.3628 18.1312 9.28298 15.5283 9.28002 12.8134C9.27701 12.0322 9.55846 11.2766 10.0718 10.6877C10.5852 10.0988 11.2953 9.71692 12.0696 9.61334C12.0693 9.61654 12.0693 9.61975 12.0696 9.62294L13.7496 13.383L12.096 15.3622C12.0793 15.3815 12.064 15.4021 12.0504 15.4238C11.93 15.6085 11.8594 15.8212 11.8454 16.0413C11.8314 16.2613 11.8745 16.4813 11.9704 16.6798C12.6952 18.1622 14.1889 19.6446 15.6873 20.3686C15.8872 20.4637 16.1085 20.5053 16.3293 20.4893C16.5501 20.4733 16.7631 20.4003 16.9473 20.2774C16.9678 20.2636 16.9876 20.2486 17.0065 20.2326L18.9513 18.5734L22.7113 20.2574C22.7113 20.2574 22.7177 20.2574 22.7201 20.2574C22.6178 21.0328 22.2365 21.7444 21.6475 22.259C21.0585 22.7737 20.3022 23.0561 19.5201 23.0534Z" fill="#0E51A0" />
                                                    </svg>


                                                    <div class="flex-col justify-start items-start inline-flex">
                                                        <div class="text-black text-sm font-semibold font-['Plus Jakarta Sans'] leading-[21px]">Call US </div>
                                                        <div class="text-black text-base font-normal font-['Plus Jakarta Sans'] leading-normal">+91 4842 8869 00</div>
                                                    </div>


                                                </div>
                                            </div>
                                        </a>

                                    </div>


                                    <p class="text-black/40 text-xs font-light  leading-[18px] mt-4">Please Note : The forex store may sometimes request for original KYC documents for verification. Kindly keep the originals handy in such a case. If you are not able to upload the KYC, simply e-mail the documents to kyc@extravelmoney.com or send via Whatsapp to +91 9995023600</p>
                                </div>
                            </div>
                        </div>

                        <div class="flex flex-col  mt-6 w-full md:flex-row-reverse justify-center items-center gap-4">
                            <a href="/myaccount" class="w-full">
                                <div class="h-14  bg-primary rounded-md justify-center items-center inline-flex w-full">
                                    <div class="text-white text-[13px] font-bold ">My Account</div>
                                </div>
                            </a>


                            <a href="/" class="w-full">
                                <div class="h-14  bg-[#0e1226]/5 rounded-md justify-center items-center inline-flex w-full">
                                    <div class="text-[#0e1226] text-[13px] font-bold ">Go back to Home</div>
                                </div>
                            </a>

                        </div>




                    </div>














                </section>
            </div>








        </div>

    </div>
    <footer>


        <div class="loadingAnimationContainer flex items-center justify-center h-screen fixed top-0 left-0 w-full bg-white z-50">
            <div class="loading">
                <svg viewBox="0 0 187.3 93.7" height="200px" width="300px" class="svgbox">
                    <defs>
                        <linearGradient y2="0%" x2="100%" y1="0%" x1="0%" id="gradient">
                            <stop stop-color="#2C5AA2" offset="0%"></stop>
                            <stop stop-color="#E3373A" offset="100%"></stop>
                        </linearGradient>
                    </defs>
                    <path stroke="url(#gradient)" d="M93.9,46.4c9.3,9.5,13.8,17.9,23.5,17.9s17.5-7.8,17.5-17.5s-7.8-17.6-17.5-17.5c-9.7,0.1-13.3,7.2-22.1,17.1c-8.9,8.8-15.7,17.9-25.4,17.9s-17.5-7.8-17.5-17.5s7.8-17.5,17.5-17.5S86.2,38.6,93.9,46.4z"></path>
                </svg>
            </div>
        </div>


        <?php
        include $fold . 'includesv2/footerScripts.php';
        ?>

    </footer>

    <script>
        document.querySelector('#finishFinalKycSection').addEventListener('click', () => {
            document.querySelector('#finalKycSection').style.display = 'none'
            document.querySelector('#finalInfoSection').style.display = 'block'
        })

        document.querySelector('#backBtnKycSection').addEventListener('click', () => {
            document.querySelector('#finalKycSection').style.display = 'block'
            document.querySelector('#finalInfoSection').style.display = 'none'
        })
    </script>
</body>

</html>