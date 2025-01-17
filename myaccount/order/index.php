<!DOCTYPE html>
<html lang="en">

<?php
$title="Sign Up/Login - ExTravelMoney"; 
$description="Contact us for any foreign currency exchange related queries or for all your international money transfer needs. We are here to help you."; 
$fold="../../"; 
$ogurl="https://www.extravelmoney.com/myaccount";
$ogtype="article";

$title="Total Orders";
$myAccountOrderPage = true;

    include $fold . 'includesv2/head.php';
?>




<style>
    .pending {
    background: rgba(255, 169, 40, 0.1);
    color: #ffa928;
}

.pending #orderStatusDot {
    background: #ffa928;
}

.confirmed {
    background: rgba(23, 178, 106, 0.1);
    color: #17B26A;
}

.confirmed #orderStatusDot {
    background: #17B26A;
}

.cancelled {
    background: rgba(227, 55, 58, 0.1);
    color: #E3373A;
}

.cancelled #orderStatusDot {
    background: #E3373A;
}

.processed {
    background: rgba(72, 133, 237, 0.1);
    color: #4885ED;
}

.processed #orderStatusDot {
    background: #4885ED;
}

.postponed {
    background: rgba(124, 81, 255, 0.1);
    color: #7C51FF;
}

.postponed #orderStatusDot {
    background: #7C51FF;
}
</style>
<body class="flex flex-col items-center">
    <div class="flex flex-col items-center justify-center relative bg-white w-full max-w-[800px]">


        <div class="w-full chooseCityOverlayMain  relative" >

            <?php 

                include $fold . 'includesv2/header.php';

            ?>
            
        
            <div class="flex flex-col  px-5 py-5 " id="singleOrderContainer">
                        <div class="w-full mt-4">

                        <div class="h-7 justify-start items-center gap-2 inline-flex" >
                            <div class="cursor-pointer" id="backBtn">
                                <svg   xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M20.812 11.9996C20.812 12.1488 20.7527 12.2919 20.6473 12.3974C20.5418 12.5029 20.3987 12.5621 20.2495 12.5621H5.10794L10.897 18.3521C10.9523 18.4036 10.9966 18.4657 11.0273 18.5347C11.0581 18.6037 11.0746 18.6782 11.0759 18.7537C11.0773 18.8293 11.0634 18.9043 11.0351 18.9743C11.0068 19.0444 10.9647 19.108 10.9113 19.1614C10.8579 19.2148 10.7942 19.2569 10.7242 19.2852C10.6542 19.3135 10.5791 19.3274 10.5036 19.3261C10.4281 19.3248 10.3536 19.3082 10.2846 19.2775C10.2156 19.2467 10.1535 19.2024 10.102 19.1471L3.352 12.3971C3.24667 12.2917 3.1875 12.1487 3.1875 11.9996C3.1875 11.8506 3.24667 11.7076 3.352 11.6021L10.102 4.85214C10.2086 4.75278 10.3497 4.69869 10.4954 4.70126C10.6411 4.70383 10.7802 4.76286 10.8832 4.86592C10.9863 4.96898 11.0453 5.10802 11.0479 5.25375C11.0505 5.39947 10.9964 5.54051 10.897 5.64714L5.10794 11.4371H20.2495C20.3987 11.4371 20.5418 11.4964 20.6473 11.6019C20.7527 11.7074 20.812 11.8505 20.812 11.9996Z" fill="black"/>
                                </svg>
                            </div>
                            
                            <span class="text-[#0f1728] text-xl font-semibold  leading-7">Order Details</span>
                        </div>


                        <div class="flex justify-between mt-8  pb-8">

                                    <div class="h-[61px] flex-col justify-start items-start gap-[3px] inline-flex">
                                        <p class="text-black/40 text-base font-medium leading-normal tracking-tight">Estimate No</p>
                                            <div class="justify-center items-center gap-1 inline-flex">
                                                <span class="opacity-90 text-black text-base font-semibold leading-normal tracking-tight" id="estimateNo">122362</span>
                                                <svg id="copyBtn" class="cursor-pointer" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                    <path d="M13.5 2H5.5C5.36739 2 5.24021 2.05268 5.14645 2.14645C5.05268 2.24021 5 2.36739 5 2.5V5H2.5C2.36739 5 2.24021 5.05268 2.14645 5.14645C2.05268 5.24021 2 5.36739 2 5.5V13.5C2 13.6326 2.05268 13.7598 2.14645 13.8536C2.24021 13.9473 2.36739 14 2.5 14H10.5C10.6326 14 10.7598 13.9473 10.8536 13.8536C10.9473 13.7598 11 13.6326 11 13.5V11H13.5C13.6326 11 13.7598 10.9473 13.8536 10.8536C13.9473 10.7598 14 10.6326 14 10.5V2.5C14 2.36739 13.9473 2.24021 13.8536 2.14645C13.7598 2.05268 13.6326 2 13.5 2ZM10 13H3V6H10V13ZM13 10H11V5.5C11 5.36739 10.9473 5.24021 10.8536 5.14645C10.7598 5.05268 10.6326 5 10.5 5H6V3H13V10Z" fill="black" fill-opacity="0.4"/>
                                                </svg>
                                            </div>
                                    </div>
                                    
                                    <div class="h-[61px] flex-col justify-start items-start gap-[3px] inline-flex">
                                        <p class="text-black/40 text-base font-medium leading-normal tracking-tight">Type</p>
                                            <div class="justify-center items-center gap-1 inline-flex">
                                                <span class="opacity-90 text-black text-base font-semibold leading-normal tracking-tight" id="orderType"></span>
                                                
                                            </div>
                                    </div>


                                    <div class="h-[61px] flex-col justify-start items-start gap-[3px] inline-flex">
                                        <span class="text-black/40 text-base font-medium  leading-normal tracking-tight">Status</span>
                                        
                                            <div id="orderStatusContainer" class="h-[34px] pl-2 pr-3 py-2  rounded-[20px] border justify-start items-center gap-1 inline-flex">
                                                
                                                    <div class="w-1.5 h-1.5 left-[1px] top-[1px]  rounded-full" id="orderStatusDot"></div>
                                                
                                                <span class="text-center  text-sm font-medium" id="orderStatus">Pending (Add Additional KYC Documents )</span>
                                            
                                            </div>
                                    </div>

                        </div>

                        
                        <div class="flex justify-between mt-8  pb-8 deliveryStatusContainer" >
                            <div class="flex-col justify-center items-start gap-1.5 inline-flex">
                                <span class="text-black text-base font-bold leading-normal">Delivery Address</span>
                                <div class="flex-col justify-start items-start flex">
                                    <span class="text-black text-sm font-normal leading-7" id="customerName">John Jacobs</span>
                                    <span class="text-black text-sm font-normal leading-7" id="customerEmail">johnjacobs@gmail.com</span>
                                    <span class="text-black text-sm font-normal leading-7" id="customerAddress">711-2880 Nulla St.Mankato Mississippi 96522</span>
                                </div>
                            </div>
                        </div>
                        

                        
                        <div class="bg-white rounded-2xl border border-[#0e51a0]/10 px-2 mt-4">
                        
                            <div class="flex flex-col mt-6 gap-4">

                            <div class="text-black text-base font-bold ">Order Summary</div>
                                <div class="flex flex-col  gap-4 " id="productList">
                                    
                                </div>
                                
                                <div  class="deliveryStatusContainer justify-between items-start inline-flex w-full">
                                    <p class="text-[#677489] text-sm font-medium  tracking-tight">Delivery Fee</p>
                                    <p class="text-[#111729] text-sm font-medium  tracking-tight" id="deliveryFee">₹ 000</p>
                                </div>
                                

                                <div class="hidden  gap-4 mb-4 justify-between" id="mtOrderProduct">
                                    <div class="flex flex-col gap-2">
                                        <span class=" text-[#0e51a0] text-sm font-medium  leading-relaxed tracking-tight">Currency</span>
                                        <span class=" text-[#111729] text-sm font-medium  leading-relaxed tracking-tight" id="currencyMt">USD@ 84.17</span>
                                    </div>
                                    <div class="flex flex-col gap-2 items-end">
                                        <span class=" text-[#0e51a0] text-sm font-medium  leading-relaxed tracking-tight">Fx Amount</span>
                                        <span class=" text-[#111729] text-sm font-medium  leading-relaxed tracking-tight" id="currencyMtAmnt">5000</span>
                                    </div>
                                    <div class="flex flex-col gap-2 items-end">
                                        <span class=" text-[#0e51a0] text-sm font-medium  leading-relaxed tracking-tight">Amount in INR</span>
                                        <span class=" text-[#111729] text-sm font-medium  leading-relaxed tracking-tight" id="currencyMtAmntinr">₹ 4,84,000</span>
                                    </div>
                                </div>
                                
                                
                                <div class=" justify-between items-start inline-flex w-full">
                                    <p class="text-[#677489] text-sm font-medium  tracking-tight">GST</p>
                                    <p class="text-[#111729] text-sm font-medium  tracking-tight" id="gstRate">₹ 000</p>
                                </div>
                                <div class="justify-between items-start inline-flex w-full ">
                                    <p class="text-[#677489] text-sm font-medium  tracking-tight">Bank Charges</p>
                                    <p class="text-[#111729] text-sm font-medium  tracking-tight" id="bankCharges">0</p>
                                </div>

                                <div class="justify-between items-start inline-flex w-full py-4 mt-4">
                                <p class="text-black text-base font-bold  leading-relaxed tracking-tight">Total</p>
                                <p class="text-[#111729] text-base font-bold  leading-relaxed" id="totalAmnt">₹ 000</p>
                            </div>
                                  
                            </div>
                            
                        </div>
    
                            
                            
    
                            
                        </div>
    
                        <div class="w-full  border border-primary-red rounded-xl p-2 mt-4">
                            <p class="text-black text-lg font-bold leading-[27px] hidden md:block">No Need to Remember Documents; Go Paperless.</p>
                            <p class="text-[#677489] mt-4 text-sm font-medium leading-[21px] tracking-tight">Please Upload the following  documents listed below</p>
    
    

                            <template id="kyc-uploader-template">
                                <div class="kycUploader">
                                  <div class="kycUploaderContainer h-12 pl-4 pr-1 py-1 rounded-lg border border-black/10 justify-between items-center inline-flex w-full">
                                    <div class="justify-start items-center gap-2 flex">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="33" viewBox="0 0 32 33" fill="none">
                                            <path d="M26.53 11.0342L19.53 4.03421C19.3895 3.89352 19.1988 3.81438 19 3.81421H7C6.53587 3.81421 6.09075 3.99858 5.76256 4.32677C5.43437 4.65496 5.25 5.10008 5.25 5.56421V27.5642C5.25 28.0283 5.43437 28.4735 5.76256 28.8016C6.09075 29.1298 6.53587 29.3142 7 29.3142H25C25.4641 29.3142 25.9092 29.1298 26.2374 28.8016C26.5656 28.4735 26.75 28.0283 26.75 27.5642V11.5642C26.7498 11.3654 26.6707 11.1747 26.53 11.0342ZM19.75 6.37421L24.19 10.8142H19.75V6.37421ZM25 27.8142H7C6.9337 27.8142 6.87011 27.7879 6.82322 27.741C6.77634 27.6941 6.75 27.6305 6.75 27.5642V5.56421C6.75 5.4979 6.77634 5.43432 6.82322 5.38743C6.87011 5.34055 6.9337 5.31421 7 5.31421H18.25V11.5642C18.25 11.7631 18.329 11.9539 18.4697 12.0945C18.6103 12.2352 18.8011 12.3142 19 12.3142H25.25V27.5642C25.25 27.6305 25.2237 27.6941 25.1768 27.741C25.1299 27.7879 25.0663 27.8142 25 27.8142ZM19.53 18.0342C19.6037 18.1029 19.6628 18.1857 19.7038 18.2777C19.7448 18.3697 19.7668 18.469 19.7686 18.5697C19.7704 18.6704 19.7518 18.7704 19.7141 18.8638C19.6764 18.9572 19.6203 19.042 19.549 19.1132C19.4778 19.1845 19.393 19.2406 19.2996 19.2783C19.2062 19.3161 19.1062 19.3346 19.0055 19.3328C18.9048 19.331 18.8055 19.309 18.7135 19.268C18.6215 19.227 18.5387 19.1679 18.47 19.0942L16.75 17.3755V23.5642C16.75 23.7631 16.671 23.9539 16.5303 24.0945C16.3897 24.2352 16.1989 24.3142 16 24.3142C15.8011 24.3142 15.6103 24.2352 15.4697 24.0945C15.329 23.9539 15.25 23.7631 15.25 23.5642V17.3755L13.53 19.0942C13.3878 19.2267 13.1998 19.2988 13.0055 19.2954C12.8112 19.292 12.6258 19.2132 12.4884 19.0758C12.351 18.9384 12.2723 18.753 12.2688 18.5587C12.2654 18.3644 12.3375 18.1764 12.47 18.0342L15.47 15.0342C15.6106 14.8938 15.8012 14.8149 16 14.8149C16.1988 14.8149 16.3894 14.8938 16.53 15.0342L19.53 18.0342Z" fill="black"/>
                                          </svg>
                              
                                      <span class="text-black text-sm font-medium leading-[21px] doc-name">Document Title</span>
                                      
                                    </div>
                              
                                    <div class="uploadBtn self-stretch pl-3 pr-2 py-1 bg-[#0e51a0]/5 rounded justify-center items-center gap-2.5 flex relative cursor-pointer">
                                      <span class="text-[#0e51a0] text-xs font-semibold leading-[18px]">Upload</span>
                                      <input type="file" tag="" class="file_upload absolute border-none outline-none bg-transparent opacity-0 w-full h-full left-0 top-0">
                                    </div>
                              
                                    <span class="text-[#ffa928] text-xs font-semibold leading-normal uploadingText mr-4">Uploading</span>
                              
                                    <div class="uploadedContent h-14 px-2 py-1 rounded justify-center items-center gap-1 inline-flex">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 20 20" fill="none">
                                            <path d="M17.8313 5.95628L7.83128 15.9563C7.74339 16.0441 7.62425 16.0934 7.50003 16.0934C7.37581 16.0934 7.25667 16.0441 7.16878 15.9563L2.79378 11.5813C2.71098 11.4924 2.6659 11.3749 2.66804 11.2535C2.67018 11.132 2.71938 11.0161 2.80526 10.9303C2.89115 10.8444 3.00701 10.7952 3.12845 10.793C3.24989 10.7909 3.36742 10.836 3.45628 10.9188L7.50003 14.9617L17.1688 5.29378C17.2576 5.21098 17.3752 5.1659 17.4966 5.16804C17.618 5.17018 17.7339 5.21938 17.8198 5.30526C17.9057 5.39115 17.9549 5.50701 17.957 5.62845C17.9592 5.74989 17.9141 5.86742 17.8313 5.95628Z" fill="#20BC73"/>
                                          </svg>
                                      <span class="text-[#20bc73] text-xs font-semibold leading-normal">Uploaded</span>
                                    </div>
                                  </div>
                              
                                  <div class="flex gap-4 items-center px-2 mt-1 kycExtender">
                                    <span class="text-[#606060] text-xs font-normal leading-[21px]">Sample_Document.PDF</span>
                                    <a href="" target="_blank" class="preview_link border border-primary-blue rounded-lg  px-[3px] gap-1 flex items-center justify-center">
                                        <svg fill="#0E51A0" height="17" width="17" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 488.85 488.85" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <path d="M244.425,98.725c-93.4,0-178.1,51.1-240.6,134.1c-5.1,6.8-5.1,16.3,0,23.1c62.5,83.1,147.2,134.2,240.6,134.2 s178.1-51.1,240.6-134.1c5.1-6.8,5.1-16.3,0-23.1C422.525,149.825,337.825,98.725,244.425,98.725z M251.125,347.025 c-62,3.9-113.2-47.2-109.3-109.3c3.2-51.2,44.7-92.7,95.9-95.9c62-3.9,113.2,47.2,109.3,109.3 C343.725,302.225,302.225,343.725,251.125,347.025z M248.025,299.625c-33.4,2.1-61-25.4-58.8-58.8c1.7-27.6,24.1-49.9,51.7-51.7 c33.4-2.1,61,25.4,58.8,58.8C297.925,275.625,275.525,297.925,248.025,299.625z"></path> </g> </g></svg>
                                        <span class="text-[12px] text-primary-blue">View</span>
                                    </a>
                                    <svg class="deleteIcon cursor-pointer ml-auto" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none">
                                        <path d="M20.25 4.6875H16.3125V3.75C16.3125 3.20299 16.0952 2.67839 15.7084 2.29159C15.3216 1.9048 14.797 1.6875 14.25 1.6875H9.75C9.20299 1.6875 8.67839 1.9048 8.29159 2.29159C7.9048 2.67839 7.6875 3.20299 7.6875 3.75V4.6875H3.75C3.60082 4.6875 3.45774 4.74676 3.35225 4.85225C3.24676 4.95774 3.1875 5.10082 3.1875 5.25C3.1875 5.39918 3.24676 5.54226 3.35225 5.64775C3.45774 5.75324 3.60082 5.8125 3.75 5.8125H4.6875V19.5C4.6875 19.8481 4.82578 20.1819 5.07192 20.4281C5.31806 20.6742 5.6519 20.8125 6 20.8125H18C18.3481 20.8125 18.6819 20.6742 18.9281 20.4281C19.1742 20.1819 19.3125 19.8481 19.3125 19.5V5.8125H20.25C20.3992 5.8125 20.5423 5.75324 20.6477 5.64775C20.7532 5.54226 20.8125 5.39918 20.8125 5.25C20.8125 5.10082 20.7532 4.95774 20.6477 4.85225C20.5423 4.74676 20.3992 4.6875 20.25 4.6875ZM8.8125 3.75C8.8125 3.50136 8.91127 3.2629 9.08709 3.08709C9.2629 2.91127 9.50136 2.8125 9.75 2.8125H14.25C14.4986 2.8125 14.7371 2.91127 14.9129 3.08709C15.0887 3.2629 15.1875 3.50136 15.1875 3.75V4.6875H8.8125V3.75ZM18.1875 19.5C18.1875 19.5497 18.1677 19.5974 18.1326 19.6326C18.0974 19.6677 18.0497 19.6875 18 19.6875H6C5.95027 19.6875 5.90258 19.6677 5.86742 19.6326C5.83225 19.5974 5.8125 19.5497 5.8125 19.5V5.8125H18.1875V19.5ZM10.3125 9.75V15.75C10.3125 15.8992 10.2532 16.0423 10.1477 16.1477C10.0423 16.2532 9.89918 16.3125 9.75 16.3125C9.60082 16.3125 9.45774 16.2532 9.35225 16.1477C9.24676 16.0423 9.1875 15.8992 9.1875 15.75V9.75C9.1875 9.60082 9.24676 9.45774 9.35225 9.35225C9.45774 9.24676 9.60082 9.1875 9.75 9.1875C9.89918 9.1875 10.0423 9.24676 10.1477 9.35225C10.2532 9.45774 10.3125 9.60082 10.3125 9.75ZM14.8125 9.75V15.75C14.8125 15.8992 14.7532 16.0423 14.6477 16.1477C14.5423 16.2532 14.3992 16.3125 14.25 16.3125C14.1008 16.3125 13.9577 16.2532 13.8523 16.1477C13.7468 16.0423 13.6875 15.8992 13.6875 15.75V9.75C13.6875 9.60082 13.7468 9.45774 13.8523 9.35225C13.9577 9.24676 14.1008 9.1875 14.25 9.1875C14.3992 9.1875 14.5423 9.24676 14.6477 9.35225C14.7532 9.45774 14.8125 9.60082 14.8125 9.75Z" fill="black"/>
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

                        
    
                        
                        </div>

                        <div  class="border border-black/10 bg-white  mt-4 rounded-xl">
            <div class="bg-primary-blue/2 rounded-xl">

                <a href="https://api.whatsapp.com/send?phone=914842886900" target="_blank">
                    <div class="flex  items-center border-0 border-b border-black/10 px-4 py-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                            <path d="M17.5858 14.0787L14.5858 12.5787C14.4677 12.5199 14.3362 12.4933 14.2045 12.5015C14.0728 12.5097 13.9456 12.5525 13.8358 12.6256L12.4586 13.5444C11.8264 13.1968 11.3062 12.6766 10.9586 12.0444L11.8774 10.6672C11.9505 10.5573 11.9933 10.4302 12.0015 10.2985C12.0097 10.1668 11.9831 10.0353 11.9242 9.91719L10.4242 6.91719C10.3621 6.79163 10.266 6.686 10.1468 6.61226C10.0277 6.53853 9.89028 6.49964 9.75017 6.5C8.75561 6.5 7.80179 6.89509 7.09852 7.59835C6.39526 8.30161 6.00018 9.25544 6.00017 10.25C6.00266 12.4373 6.87265 14.5343 8.41928 16.0809C9.96592 17.6275 12.0629 18.4975 14.2502 18.5C14.7426 18.5 15.2303 18.403 15.6852 18.2145C16.1402 18.0261 16.5536 17.7499 16.9018 17.4017C17.25 17.0534 17.5263 16.64 17.7147 16.1851C17.9032 15.7301 18.0002 15.2425 18.0002 14.75C18.0003 14.6107 17.9616 14.4741 17.8884 14.3555C17.8152 14.2369 17.7104 14.1411 17.5858 14.0787ZM14.2502 17C12.4606 16.998 10.7448 16.2862 9.4794 15.0208C8.21396 13.7553 7.50216 12.0396 7.50017 10.25C7.50003 9.7298 7.68014 9.22562 8.00986 8.82326C8.33958 8.4209 8.79853 8.14521 9.30861 8.04313L10.3849 10.1994L9.46892 11.5625C9.40048 11.6652 9.35842 11.7831 9.34649 11.906C9.33455 12.0288 9.3531 12.1526 9.40049 12.2666C9.9371 13.5419 10.9517 14.5565 12.227 15.0931C12.3413 15.1426 12.4661 15.1629 12.5902 15.1521C12.7143 15.1413 12.8337 15.0998 12.9377 15.0312L14.3074 14.1181L16.4636 15.1944C16.3607 15.705 16.0838 16.1642 15.6802 16.4935C15.2765 16.8228 14.7711 17.0018 14.2502 17ZM12.0002 2.75C10.3169 2.74963 8.66213 3.18508 7.19704 4.01396C5.73194 4.84285 4.50641 6.03692 3.63971 7.47997C2.77302 8.92301 2.29469 10.5659 2.25129 12.2486C2.20789 13.9314 2.60089 15.5967 3.39205 17.0825L2.32799 20.2747C2.23985 20.539 2.22706 20.8226 2.29105 21.0938C2.35504 21.3649 2.49328 21.6129 2.69029 21.8099C2.88729 22.0069 3.13526 22.1451 3.40642 22.2091C3.67757 22.2731 3.96119 22.2603 4.22549 22.1722L7.41768 21.1081C8.72527 21.8036 10.1741 22.1921 11.6543 22.244C13.1344 22.2959 14.6069 22.01 15.9601 21.4079C17.3132 20.8057 18.5114 19.9033 19.4636 18.769C20.4159 17.6346 21.0972 16.2983 21.4559 14.8613C21.8146 13.4244 21.8412 11.9246 21.5337 10.4758C21.2263 9.02701 20.5928 7.66732 19.6813 6.49992C18.7699 5.33253 17.6045 4.38811 16.2736 3.73836C14.9427 3.08861 13.4812 2.75061 12.0002 2.75ZM12.0002 20.75C10.5498 20.751 9.12495 20.3691 7.86955 19.6428C7.77763 19.5895 7.67544 19.5563 7.56974 19.5455C7.46404 19.5347 7.35724 19.5464 7.25643 19.58L3.75018 20.75L4.91924 17.2438C4.95294 17.143 4.96485 17.0362 4.95418 16.9305C4.94351 16.8248 4.91051 16.7226 4.85736 16.6306C3.94796 15.0584 3.58284 13.2299 3.81864 11.429C4.05444 9.62801 4.87798 7.9552 6.16151 6.67006C7.44503 5.38491 9.11679 4.55925 10.9175 4.32118C12.7181 4.0831 14.547 4.44591 16.1204 5.35333C17.6938 6.26074 18.9238 7.66204 19.6196 9.33983C20.3153 11.0176 20.4379 12.8781 19.9684 14.6327C19.4989 16.3873 18.4634 17.9379 17.0227 19.0439C15.582 20.15 13.8165 20.7497 12.0002 20.75Z" fill="#20BC73" />
                        </svg>
                        <div class="flex flex-col ml-2">
                            <span class="text-black text-sm font-semibold font-['Plus Jakarta Sans'] leading-[21px]">WhatsApp Now</span>
                            <span class="text-black/40 text-xs font-normal font-['Plus Jakarta Sans'] leading-3">+91 4842886900</span>
                        </div>
                        <svg class="ml-auto" xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="none">
                            <path d="M7.94058 4.47153L14.1906 10.7215C14.2487 10.7796 14.2948 10.8485 14.3262 10.9244C14.3577 11.0003 14.3739 11.0816 14.3739 11.1637C14.3739 11.2459 14.3577 11.3272 14.3262 11.4031C14.2948 11.4789 14.2487 11.5479 14.1906 11.6059L7.94058 17.8559C7.82331 17.9732 7.66425 18.0391 7.49839 18.0391C7.33254 18.0391 7.17348 17.9732 7.05621 17.8559C6.93893 17.7386 6.87305 17.5796 6.87305 17.4137C6.87305 17.2479 6.93893 17.0888 7.05621 16.9715L12.8648 11.1637L7.05621 5.3559C6.99814 5.29783 6.95207 5.2289 6.92065 5.15303C6.88922 5.07716 6.87305 4.99584 6.87305 4.91372C6.87305 4.83159 6.88922 4.75028 6.92065 4.67441C6.95207 4.59853 6.99814 4.5296 7.05621 4.47153C7.11428 4.41346 7.18321 4.3674 7.25908 4.33597C7.33495 4.30454 7.41627 4.28837 7.49839 4.28837C7.58052 4.28837 7.66183 4.30454 7.7377 4.33597C7.81358 4.3674 7.88251 4.41346 7.94058 4.47153Z" fill="black" fill-opacity="0.4" />
                        </svg>
                    </div>
                </a>


                <a href="mailto:care@extravelmoney.com">
                    <div class="flex  items-center border-0 border-b border-black/10 px-4 py-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                            <rect x="0.5" y="1" width="23" height="23" rx="11.5" stroke="#0E51A0" />
                            <path d="M17.4223 14.8175L14.5957 13.5509L14.5879 13.5473C14.4411 13.4846 14.281 13.4594 14.1221 13.474C13.9632 13.4887 13.8104 13.5428 13.6777 13.6313C13.662 13.6417 13.647 13.6529 13.6327 13.6649L12.1722 14.9099C11.247 14.4605 10.2918 13.5125 9.84243 12.5993L11.0892 11.1167C11.1012 11.1017 11.1126 11.0867 11.1234 11.0705C11.2101 10.9381 11.2627 10.7863 11.2765 10.6286C11.2903 10.471 11.2649 10.3124 11.2026 10.1669V10.1597L9.93243 7.32828C9.85008 7.13824 9.70847 6.97993 9.52874 6.87698C9.34902 6.77404 9.14082 6.73198 8.93523 6.75708C8.1222 6.86406 7.37592 7.26334 6.83577 7.88034C6.29562 8.49734 5.99854 9.28987 6.00001 10.1099C6.00001 14.8739 9.87603 18.75 14.6401 18.75C15.4601 18.7514 16.2526 18.4543 16.8696 17.9142C17.4866 17.374 17.8859 16.6278 17.9929 15.8147C18.018 15.6092 17.9761 15.4011 17.8732 15.2214C17.7704 15.0416 17.6122 14.9 17.4223 14.8175ZM14.6401 17.79C12.6039 17.7877 10.6517 16.9779 9.2119 15.5381C7.7721 14.0983 6.96224 12.1461 6.96001 10.1099C6.95775 9.52399 7.16884 8.95729 7.55386 8.51564C7.93887 8.07398 8.47148 7.78757 9.05223 7.70989C9.05199 7.71228 9.05199 7.71469 9.05223 7.71709L10.3122 10.5371L9.07203 12.0215C9.05944 12.036 9.048 12.0514 9.03783 12.0677C8.94754 12.2063 8.89457 12.3658 8.88405 12.5308C8.87354 12.6959 8.90584 12.8608 8.97783 13.0097C9.52143 14.1215 10.6416 15.2333 11.7654 15.7763C11.9154 15.8477 12.0813 15.8788 12.247 15.8668C12.4126 15.8549 12.5723 15.8001 12.7105 15.7079C12.7259 15.6976 12.7407 15.6863 12.7549 15.6743L14.2135 14.4299L17.0335 15.6929C17.0335 15.6929 17.0383 15.6929 17.0401 15.6929C16.9634 16.2745 16.6774 16.8082 16.2356 17.1942C15.7939 17.5801 15.2267 17.7919 14.6401 17.79Z" fill="#0E51A0" />
                        </svg>
                        <div class="flex flex-col ml-2">
                            <span class="text-black text-sm font-semibold font-['Plus Jakarta Sans'] leading-[21px]">Mail US@</span>
                            <span class="text-black/40 text-xs font-normal font-['Plus Jakarta Sans'] leading-3">care@extravelmoney.com</span>
                        </div>
                        <svg class="ml-auto" xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="none">
                            <path d="M7.94058 4.47153L14.1906 10.7215C14.2487 10.7796 14.2948 10.8485 14.3262 10.9244C14.3577 11.0003 14.3739 11.0816 14.3739 11.1637C14.3739 11.2459 14.3577 11.3272 14.3262 11.4031C14.2948 11.4789 14.2487 11.5479 14.1906 11.6059L7.94058 17.8559C7.82331 17.9732 7.66425 18.0391 7.49839 18.0391C7.33254 18.0391 7.17348 17.9732 7.05621 17.8559C6.93893 17.7386 6.87305 17.5796 6.87305 17.4137C6.87305 17.2479 6.93893 17.0888 7.05621 16.9715L12.8648 11.1637L7.05621 5.3559C6.99814 5.29783 6.95207 5.2289 6.92065 5.15303C6.88922 5.07716 6.87305 4.99584 6.87305 4.91372C6.87305 4.83159 6.88922 4.75028 6.92065 4.67441C6.95207 4.59853 6.99814 4.5296 7.05621 4.47153C7.11428 4.41346 7.18321 4.3674 7.25908 4.33597C7.33495 4.30454 7.41627 4.28837 7.49839 4.28837C7.58052 4.28837 7.66183 4.30454 7.7377 4.33597C7.81358 4.3674 7.88251 4.41346 7.94058 4.47153Z" fill="black" fill-opacity="0.4" />
                        </svg>
                    </div>
                </a>

                <a href="tel:04842886900">
                    <div class="flex  items-center px-4 py-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                            <rect x="0.5" y="1" width="23" height="23" rx="11.5" stroke="#E5A339" />
                            <path d="M17.4223 14.8175L14.5957 13.5509L14.5879 13.5473C14.4411 13.4846 14.281 13.4594 14.1221 13.474C13.9632 13.4887 13.8104 13.5428 13.6777 13.6313C13.662 13.6417 13.647 13.6529 13.6327 13.6649L12.1722 14.9099C11.247 14.4605 10.2918 13.5125 9.84243 12.5993L11.0892 11.1167C11.1012 11.1017 11.1126 11.0867 11.1234 11.0705C11.2101 10.9381 11.2627 10.7863 11.2765 10.6286C11.2903 10.471 11.2649 10.3124 11.2026 10.1669V10.1597L9.93243 7.32828C9.85008 7.13824 9.70847 6.97993 9.52874 6.87698C9.34902 6.77404 9.14082 6.73198 8.93523 6.75708C8.1222 6.86406 7.37592 7.26334 6.83577 7.88034C6.29562 8.49734 5.99854 9.28987 6.00001 10.1099C6.00001 14.8739 9.87603 18.75 14.6401 18.75C15.4601 18.7514 16.2526 18.4543 16.8696 17.9142C17.4866 17.374 17.8859 16.6278 17.9929 15.8147C18.018 15.6092 17.9761 15.4011 17.8732 15.2214C17.7704 15.0416 17.6122 14.9 17.4223 14.8175ZM14.6401 17.79C12.6039 17.7877 10.6517 16.9779 9.2119 15.5381C7.7721 14.0983 6.96224 12.1461 6.96001 10.1099C6.95775 9.52399 7.16884 8.95729 7.55386 8.51564C7.93887 8.07398 8.47148 7.78757 9.05223 7.70989C9.05199 7.71228 9.05199 7.71469 9.05223 7.71709L10.3122 10.5371L9.07203 12.0215C9.05944 12.036 9.048 12.0514 9.03783 12.0677C8.94754 12.2063 8.89457 12.3658 8.88405 12.5308C8.87354 12.6959 8.90584 12.8608 8.97783 13.0097C9.52143 14.1215 10.6416 15.2333 11.7654 15.7763C11.9154 15.8477 12.0813 15.8788 12.247 15.8668C12.4126 15.8549 12.5723 15.8001 12.7105 15.7079C12.7259 15.6976 12.7407 15.6863 12.7549 15.6743L14.2135 14.4299L17.0335 15.6929C17.0335 15.6929 17.0383 15.6929 17.0401 15.6929C16.9634 16.2745 16.6774 16.8082 16.2356 17.1942C15.7939 17.5801 15.2267 17.7919 14.6401 17.79Z" fill="#E5A339" />
                        </svg>
                        <div class="flex flex-col ml-2">
                            <span class="text-black text-sm font-semibold font-['Plus Jakarta Sans'] leading-[21px]">Call US@</span>
                            <span class="text-black/40 text-xs font-normal font-['Plus Jakarta Sans'] leading-3">0484 2886 900</span>
                        </div>
                        <svg class="ml-auto" xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="none">
                            <path d="M7.94058 4.47153L14.1906 10.7215C14.2487 10.7796 14.2948 10.8485 14.3262 10.9244C14.3577 11.0003 14.3739 11.0816 14.3739 11.1637C14.3739 11.2459 14.3577 11.3272 14.3262 11.4031C14.2948 11.4789 14.2487 11.5479 14.1906 11.6059L7.94058 17.8559C7.82331 17.9732 7.66425 18.0391 7.49839 18.0391C7.33254 18.0391 7.17348 17.9732 7.05621 17.8559C6.93893 17.7386 6.87305 17.5796 6.87305 17.4137C6.87305 17.2479 6.93893 17.0888 7.05621 16.9715L12.8648 11.1637L7.05621 5.3559C6.99814 5.29783 6.95207 5.2289 6.92065 5.15303C6.88922 5.07716 6.87305 4.99584 6.87305 4.91372C6.87305 4.83159 6.88922 4.75028 6.92065 4.67441C6.95207 4.59853 6.99814 4.5296 7.05621 4.47153C7.11428 4.41346 7.18321 4.3674 7.25908 4.33597C7.33495 4.30454 7.41627 4.28837 7.49839 4.28837C7.58052 4.28837 7.66183 4.30454 7.7377 4.33597C7.81358 4.3674 7.88251 4.41346 7.94058 4.47153Z" fill="black" fill-opacity="0.4" />
                        </svg>
                    </div>
                </a>



            </div>
        </div>
                </div>
            
                

        </div>

    </div>
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

    


</body>

</html>