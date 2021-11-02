<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Page;
use DB;
class PageTableSeeder extends Seeder{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        DB::table('pages')->delete();
        // Rules & Instructions (How To) Page
        $page['name']= 'How to Use our website';
        $page['content'] =
                            '<p class="text-center">First, select what you wish to purchase or sell If you are looking to purchase resin for example, you then will need to select the type of resin you are looking for to view the listing page. From here, more ilters can be selected to narrow your search usinig out Resin Search. Once you&rsquo;ve found a listnig of interest, select it to view the complete listing. Contating the seller and the sale of the items will be done through the site.</p>
                            
                            <h4 class="mt-3 mb-3">Rules of using Resin Trader:</h4>
                            <p>The negootiation and sale of any product should not be taken outside of this platform. If a violation is discovered, you may be removed from the platform.</p>
                            <ul class="questions">
                                <li>Are you sitting on lots of inventory that has been sitting on your books for months or years?</li>
                                <li>Did you purchase more resin than you needed for a small volume program due to a manufacturer\'s high MOQ requirement? Now you have no need for this resin and no way to create value from it?</li>
                                <li>Do you find yourself scraping or writing down resin quarterly?</li>
                                <li>Do you find yourself having to sell your old or excess inventory off to brokers each quarter or year for "dime on the dollar" or scrap value?</li>
                                <li>Do you have a need for a small quantity of resin for a smaller job and don\'t want to have to purchase a large quantity of that resin from a manufacturer or distributor?</li>
                                <li>Do you need to find some specific resin material quickly for a rush new program you have?</li>
                                <li>Do you need to find some specific resin material quickly for a tool trial sampling you want to do for a customer?</li>
                                <li>Do you not want to pay really high prices for smaller quantities of resin you must purchase?</li>
                            </ul>
                            <p>Resin Trader is here to help plastics converters of all sizes to create value from their excess and/or unused inventory AND to help them find resin on short notice AT AFFORDABLE PRICES in times of need.</p>
                            <p>We connect plastics CONVERTERS DIRECTLY TO OTHER PLASTIC CONVERTERS to help them share resources and save money and time!</p>

                            ';
        
        $page['status'] = '1';
        $page['type'] = 'how-to';
        Page::create($page);

        //Terms of Use
        $page['name'] = 'Terms of Use';
        $page['content'] = '
                                <h4>Resin Trader Terms of Use</h4>

                                <p>Babarusi Cristian built the Key Code Generator app as an Ad Supported app. This SERVICE is provided by Babarusi Cristian at no cost and is intended for use as is.</p>
                                
                                <p>This page is used to inform visitors regarding my policies with the collection, use, and disclosure of Personal Information if anyone decided to use my Service.</p>
                                
                                <p>If you choose to use my Service, then you agree to the collection and use of information in relation to this policy. The Personal Information that I collect is used for providing and improving the Service. I will not use or share your information with anyone except as described in this Privacy Policy.</p>
                                
                                <p>The terms used in this Privacy Policy have the same meanings as in our Terms and Conditions, which is accessible at Key Code Generator unless otherwise defined in this Privacy Policy.</p>
                                
                                <h5>Information Collection and Use</h5>
                                
                                <p>For a better experience, while using our Service, I may require you to provide us with certain personally identifiable information. The information that I request will be retained on your device and is not collected by me in any way.</p>
                                
                                <p>The app does use third party services that may collect information used to identify you.</p>
                                
                                <p>Link to privacy policy of third party service providers used by the app</p>
                                
                                <ul>
                                    <li><a href="">Google Play Services</a></li>
                                    <li><a href="">AdMob</a></li>
                                </ul>
                                
                                <h5>Log Data</h5>
                                
                                <p>I want to inform you that whenever you use my Service, in a case of an error in the app I collect data and information (through third party products) on your phone called Log Data. This Log Data may include information such as your device Internet Protocol (&ldquo;IP&rdquo;) address, device name, operating system version, the configuration of the app when utilizing my Service, the time and date of your use of the Service, and other statistics.</p>
                                
                                <h5>Cookies</h5>
                                
                                <p>Cookies are files with a small amount of data that are commonly used as anonymous unique identifiers. These are sent to your browser from the websites that you visit and are stored on your device&#39;s internal memory.</p>
                                
                                <p>This Service does not use these &ldquo;cookies&rdquo; explicitly. However, the app may use third party code and libraries that use &ldquo;cookies&rdquo; to collect information and improve their services. You have the option to either accept or refuse these cookies and know when a cookie is being sent to your device. If you choose to refuse our cookies, you may not be able to use some portions of this Service.</p>
                                
                                <h5>Service Providers</h5>
                                
                                <p>I may employ third-party companies and individuals due to the following reasons:</p>
                                
                                <ul>
                                    <li>To facilitate our Service;</li>
                                    <li>To provide the Service on our behalf;</li>
                                    <li>To perform Service-related services; or</li>
                                    <li>To assist us in analyzing how our Service is used.</li>
                                </ul>
                                
                                <p>I want to inform users of this Service that these third parties have access to your Personal Information. The reason is to perform the tasks assigned to them on our behalf. However, they are obligated not to disclose or use the information for any other purpose.</p>
                                
                                <h5>Security</h5>
                                
                                <p>I value your trust in providing us your Personal Information, thus we are striving to use commercially acceptable means of protecting it. But remember that no method of transmission over the internet, or method of electronic storage is 100% secure and reliable, and I cannot guarantee its absolute security.</p>
                                
                                <h5>Links to Other Sites</h5>
                                
                                <p>This Service may contain links to other sites. If you click on a third-party link, you will be directed to that site. Note that these external sites are not operated by me. Therefore, I strongly advise you to review the Privacy Policy of these websites. I have no control over and assume no responsibility for the content, privacy policies, or practices of any third-party sites or services.</p>
                                
                                <h5>Children&rsquo;s Privacy</h5>
                                
                                <p>These Services do not address anyone under the age of 13. I do not knowingly collect personally identifiable information from children under 13. In the case I discover that a child under 13 has provided me with personal information, I immediately delete this from our servers. If you are a parent or guardian and you are aware that your child has provided us with personal information, please contact me so that I will be able to do necessary actions.</p>
                                
                                <h5>Changes to This Privacy Policy</h5>
                                
                                <p>I may update our Privacy Policy from time to time. Thus, you are advised to review this page periodically for any changes. I will notify you of any changes by posting the new Privacy Policy on this page. These changes are effective immediately after they are posted on this page.</p>
                                
                                <h5>Contact Us</h5>
                                
                                <p>If you have any questions or suggestions about my Privacy Policy, do not hesitate to contact me at info@resintrader.com</p>';
        $page['status'] = '1';
        $page['type'] = 'terms-of-use';
        Page::create($page);

        //Privacy Policy
        $page['name'] = 'Privacy Policy';
        $page['content'] = '
                                <h4>Privacy Policy</h4>

                                <p>Babarusi Cristian built the Key Code Generator app as an Ad Supported app. This SERVICE is provided by Babarusi Cristian at no cost and is intended for use as is.</p>
                                
                                <p>This page is used to inform visitors regarding my policies with the collection, use, and disclosure of Personal Information if anyone decided to use my Service.</p>
                                
                                <p>If you choose to use my Service, then you agree to the collection and use of information in relation to this policy. The Personal Information that I collect is used for providing and improving the Service. I will not use or share your information with anyone except as described in this Privacy Policy.</p>
                                
                                <p>The terms used in this Privacy Policy have the same meanings as in our Terms and Conditions, which is accessible at Key Code Generator unless otherwise defined in this Privacy Policy.</p>
                                
                                <h5>Information Collection and Use</h5>
                                
                                <p>For a better experience, while using our Service, I may require you to provide us with certain personally identifiable information. The information that I request will be retained on your device and is not collected by me in any way.</p>
                                
                                <p>The app does use third party services that may collect information used to identify you.</p>
                                
                                <p>Link to privacy policy of third party service providers used by the app</p>
                                
                                <ul>
                                    <li><a href="">Google Play Services</a></li>
                                    <li><a href="">AdMob</a></li>
                                </ul>
                                
                                <h5>Log Data</h5>
                                
                                <p>I want to inform you that whenever you use my Service, in a case of an error in the app I collect data and information (through third party products) on your phone called Log Data. This Log Data may include information such as your device Internet Protocol (&ldquo;IP&rdquo;) address, device name, operating system version, the configuration of the app when utilizing my Service, the time and date of your use of the Service, and other statistics.</p>
                                
                                <h5>Cookies</h5>
                                
                                <p>Cookies are files with a small amount of data that are commonly used as anonymous unique identifiers. These are sent to your browser from the websites that you visit and are stored on your device&#39;s internal memory.</p>
                                
                                <p>This Service does not use these &ldquo;cookies&rdquo; explicitly. However, the app may use third party code and libraries that use &ldquo;cookies&rdquo; to collect information and improve their services. You have the option to either accept or refuse these cookies and know when a cookie is being sent to your device. If you choose to refuse our cookies, you may not be able to use some portions of this Service.</p>
                                
                                <h5>Service Providers</h5>
                                
                                <p>I may employ third-party companies and individuals due to the following reasons:</p>
                                
                                <ul>
                                    <li>To facilitate our Service;</li>
                                    <li>To provide the Service on our behalf;</li>
                                    <li>To perform Service-related services; or</li>
                                    <li>To assist us in analyzing how our Service is used.</li>
                                </ul>
                                
                                <p>I want to inform users of this Service that these third parties have access to your Personal Information. The reason is to perform the tasks assigned to them on our behalf. However, they are obligated not to disclose or use the information for any other purpose.</p>
                                
                                <h5>Security</h5>
                                
                                <p>I value your trust in providing us your Personal Information, thus we are striving to use commercially acceptable means of protecting it. But remember that no method of transmission over the internet, or method of electronic storage is 100% secure and reliable, and I cannot guarantee its absolute security.</p>
                                
                                <h5>Links to Other Sites</h5>
                                
                                <p>This Service may contain links to other sites. If you click on a third-party link, you will be directed to that site. Note that these external sites are not operated by me. Therefore, I strongly advise you to review the Privacy Policy of these websites. I have no control over and assume no responsibility for the content, privacy policies, or practices of any third-party sites or services.</p>
                                
                                <h5>Children&rsquo;s Privacy</h5>
                                
                                <p>These Services do not address anyone under the age of 13. I do not knowingly collect personally identifiable information from children under 13. In the case I discover that a child under 13 has provided me with personal information, I immediately delete this from our servers. If you are a parent or guardian and you are aware that your child has provided us with personal information, please contact me so that I will be able to do necessary actions.</p>
                                
                                <h5>Changes to This Privacy Policy</h5>
                                
                                <p>I may update our Privacy Policy from time to time. Thus, you are advised to review this page periodically for any changes. I will notify you of any changes by posting the new Privacy Policy on this page. These changes are effective immediately after they are posted on this page.</p>
                                
                                <h5>Contact Us</h5>
                                
                                <p>If you have any questions or suggestions about my Privacy Policy, do not hesitate to contact me at info@resintrader.com</p>';
        $page['status'] = '1';
        $page['type'] = 'privacy-policy';
        Page::create($page);

        //Return Policy
        $page['name'] = 'Return Policy';
        $page['content'] = '
                            <h4>Return Policy</h4>

                            <p>Babarusi Cristian built the Key Code Generator app as an Ad Supported app. This SERVICE is provided by Babarusi Cristian at no cost and is intended for use as is.</p>
                            
                            <p>This page is used to inform visitors regarding my policies with the collection, use, and disclosure of Personal Information if anyone decided to use my Service.</p>
                            
                            <p>If you choose to use my Service, then you agree to the collection and use of information in relation to this policy. The Personal Information that I collect is used for providing and improving the Service. I will not use or share your information with anyone except as described in this Privacy Policy.</p>
                            
                            <p>The terms used in this Privacy Policy have the same meanings as in our Terms and Conditions, which is accessible at Key Code Generator unless otherwise defined in this Privacy Policy.</p>
                            
                            <h5>Information Collection and Use</h5>
                            
                            <p>For a better experience, while using our Service, I may require you to provide us with certain personally identifiable information. The information that I request will be retained on your device and is not collected by me in any way.</p>
                            
                            <p>The app does use third party services that may collect information used to identify you.</p>
                            
                            <p>Link to privacy policy of third party service providers used by the app</p>
                            
                            <ul>
                                <li><a href="">Google Play Services</a></li>
                                <li><a href="">AdMob</a></li>
                            </ul>
                            
                            <h5>Log Data</h5>
                            
                            <p>I want to inform you that whenever you use my Service, in a case of an error in the app I collect data and information (through third party products) on your phone called Log Data. This Log Data may include information such as your device Internet Protocol (&ldquo;IP&rdquo;) address, device name, operating system version, the configuration of the app when utilizing my Service, the time and date of your use of the Service, and other statistics.</p>
                            
                            <h5>Cookies</h5>
                            
                            <p>Cookies are files with a small amount of data that are commonly used as anonymous unique identifiers. These are sent to your browser from the websites that you visit and are stored on your device&#39;s internal memory.</p>
                            
                            <p>This Service does not use these &ldquo;cookies&rdquo; explicitly. However, the app may use third party code and libraries that use &ldquo;cookies&rdquo; to collect information and improve their services. You have the option to either accept or refuse these cookies and know when a cookie is being sent to your device. If you choose to refuse our cookies, you may not be able to use some portions of this Service.</p>
                            
                            <h5>Service Providers</h5>
                            
                            <p>I may employ third-party companies and individuals due to the following reasons:</p>
                            
                            <ul>
                                <li>To facilitate our Service;</li>
                                <li>To provide the Service on our behalf;</li>
                                <li>To perform Service-related services; or</li>
                                <li>To assist us in analyzing how our Service is used.</li>
                            </ul>
                            
                            <p>I want to inform users of this Service that these third parties have access to your Personal Information. The reason is to perform the tasks assigned to them on our behalf. However, they are obligated not to disclose or use the information for any other purpose.</p>
                            
                            <h5>Security</h5>
                            
                            <p>I value your trust in providing us your Personal Information, thus we are striving to use commercially acceptable means of protecting it. But remember that no method of transmission over the internet, or method of electronic storage is 100% secure and reliable, and I cannot guarantee its absolute security.</p>
                            
                            <h5>Links to Other Sites</h5>
                            
                            <p>This Service may contain links to other sites. If you click on a third-party link, you will be directed to that site. Note that these external sites are not operated by me. Therefore, I strongly advise you to review the Privacy Policy of these websites. I have no control over and assume no responsibility for the content, privacy policies, or practices of any third-party sites or services.</p>
                            
                            <h5>Children&rsquo;s Privacy</h5>
                            
                            <p>These Services do not address anyone under the age of 13. I do not knowingly collect personally identifiable information from children under 13. In the case I discover that a child under 13 has provided me with personal information, I immediately delete this from our servers. If you are a parent or guardian and you are aware that your child has provided us with personal information, please contact me so that I will be able to do necessary actions.</p>
                            
                            <h5>Changes to This Privacy Policy</h5>
                            
                            <p>I may update our Privacy Policy from time to time. Thus, you are advised to review this page periodically for any changes. I will notify you of any changes by posting the new Privacy Policy on this page. These changes are effective immediately after they are posted on this page.</p>
                            
                            <h5>Contact Us</h5>
                            
                            <p>If you have any questions or suggestions about my Privacy Policy, do not hesitate to contact me at info@resintrader.com</p> ';
        $page['status'] = '1';
        $page['type'] = 'return-policy';
        Page::create($page);

        //Shipping Policy
        $page['name'] = 'Shipping Policy';
        $page['content'] = '
                        <h4>Shipping Policy</h4>

                        <h5>What are the delivery charges?</h5>
                        
                        <p>Delivery charge varies with each Seller.</p>
                        
                        <p>Sellers incur relatively higher shipping costs on low value items. In such cases, charging a nominal delivery charge helps them offset logistics costs. Please check your order summary to understand the delivery charges for individual products.</p>
                        
                        <p>For Products listed as F-Assured a Rs 40 charge for delivery per item is applied if the order value is less than Rs 500. While, orders of Rs 500 or above are delivered free.</p>
                        
                        <h5>Why does the delivery date not correspond to the delivery timeline of X-Y business days?</h5>
                        
                        <p>It is possible that the Seller or our courier partners have a holiday between the day your placed your order and the date of delivery, which is based on the timelines shown on the product page. In this case, we add a day to the estimated date. Some courier partners and Sellers do not work on Sundays and this is factored in to the delivery dates.</p>
                        
                        <h5>What is the estimated delivery time?</h5>
                        
                        <p>Sellers generally procure and ship the items within the time specified on the product page. Business days exclude public holidays and Sundays.</p>
                        
                        <p>Estimated delivery time depends on the following factors:</p>
                        
                        <ul>
                            <li>The Seller offering the product</li>
                            <li>Product&#39;s availability with the Seller</li>
                            <li>The destination to which you want the order shipped to and location of the Seller.</li>
                        </ul>
                        
                        <h5>Are there any hidden costs (sales tax, octroi etc) on items sold by Sellers on Flipkart?</h5>
                        
                        <p>There are NO hidden charges when you make a purchase on Flipkart. List prices are final and all-inclusive. The price you see on the product page is exactly what you would pay.</p>
                        
                        <p>Delivery charges are not hidden charges and are charged (if at all) extra depending on the Seller&#39;s shipping policy.</p>
                        
                        <h5>Why does the estimated delivery time vary for each seller?</h5>
                        
                        <p>You have probably noticed varying estimated delivery times for sellers of the product you are interested in. Delivery times are influenced by product availability, geographic location of the Seller, your shipping destination and the courier partner&#39;s time-to-deliver in your location.</p>
                        
                        <p>Please enter your default pin code on the product page (you don&#39;t have to enter it every single time) to know more accurate delivery times on the product page itself.</p>
                        
                        <h5>Seller does not/cannot ship to my area. Why?</h5>
                        
                        <p>Please enter your pincode on the product page (you don&#39;t have to enter it every single time) to know whether the product can be delivered to your location.</p>
                        
                        <p>If you haven&#39;t provided your pincode until the checkout stage, the pincode in your shipping address will be used to check for serviceability.</p>
                        
                        <p>Whether your location can be serviced or not depends on</p>
                        
                        <ul>
                            <li>Whether the Seller ships to your location</li>
                            <li>Legal restrictions, if any, in shipping particular products to your location</li>
                            <li>The availability of reliable courier partners in your location</li>
                        </ul>
                        
                        <p>At times Sellers prefer not to ship to certain locations. This is entirely at their discretion.</p>
                        
                        <h5>Why is the CoD option not offered in my location?</h5>
                        
                        <p>Availability of CoD depends on the ability of our courier partner servicing your location to accept cash as payment at the time of delivery.</p>
                        
                        <p>Our courier partners have limits on the cash amount payable on delivery depending on the destination and your order value might have exceeded this limit. Please enter your pin code on the product page to check if CoD is available in your location.</p>
                        
                        <h5>I need to return an item, how do I arrange for a pick-up?</h5>
                        
                        <p>Returns are easy. Contact Us to initiate a return. You will receive a call explaining the process, once you have initiated a return.</p>
                        
                        <p>Wherever possible Ekart Logistics will facilitate the pick-up of the item. In case, the pick-up cannot be arranged through Ekart, you can return the item through a third-party courier service. Return fees are borne by the Seller.</p>
                        
                        <h5>&nbsp;</h5>';
        $page['status'] = '1';
        $page['type'] = 'shipping-policy';
        Page::create($page);

        // About Us
        $page['name'] = 'About Us';
        $page['content'] = 
                            json_encode([
                                'headingFirst' => 'Business Management',
                                'contentFirst' => "<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>",
                                "headingTwo"   => "Business Partnership",
                                "contentTwo"=>"<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>",
                                "headingThree" =>"Business Analysis",
                                "contentThree"=>"<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>",
                            ]);

        $page['status'] = '1';
        $page['type'] = 'about-us';
        Page::create($page);
        

        //HOW IT WORKS

        $page['name'] = 'How it Works';
        $page['content'] = '
                            <p>Are you sitting on lots of inventory that has been sitting on your books for months or years? 
Did you purchase more resin than you needed for a small volume program due to a manufacturers high MOQ requirement?  Now you have no need for this resin and no way to create value from it?
Do you find yourself scraping or writing down resin quarterly?
Do you find yourself having to sell your old or excess inventory off to brokers each quarter or year for "dime on the dollar" or scrap value?
</p>
                            <p>Do you have a need for a small quantity of resin for a smaller job and dont want to have to purchase a large quantity of that resin from a manufacturer or distributor?
Do you need to find some specific resin material quickly for a rush new program you have?
Do you need to find some specific resin material quickly for a tool trial sampling you want to do for a customer?
Do you not want to pay really high prices for smaller quantities of resin you must purchase?
</p>            
                            <p>Resin Trader is here to help plastics converters of all sizes to create value from their excess and/or unused inventory AND to help them find resin on short notice AT AFFORDABLE PRICES in times of need.</p>
                            <p>We connect plastics <b>CONVERTERS DIRECTLY TO OTHER PLASTIC CONVERTERS</b> to help them share resources and save money and time!</p>
                            ';

        // $page['content'] = 
        //                     json_encode([
        //                         'heading1' => 'International Shipping',
        //                         'content1' => "<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>",
        //                         'filePath1'=>url('/frontend/assets/images/icon-1.png'),

        //                         "heading2"   => "Access & Discover",
        //                         "content2"=>"<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>",
        //                         'filePath2'=>url('/frontend/assets/images/icon-2.png'),

        //                         "heading3" =>"One Stop Shop",
        //                         "content3"=>"<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>",
        //                         'filePath3'=>url('/frontend/assets/images/icon-3.png'),


        //                         "heading4" =>"Unrivalled Product Range",
        //                         "content4"=>"<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>",
        //                         'filePath4'=>url('/frontend/assets/images/icon-4.png'),


        //                         "heading5" =>"Transparent Pricing",
        //                         "content5"=>"<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>",
        //                         'filePath5'=>url('/frontend/assets/images/icon-5.png'),

        //                         "heading6" =>"Personalized Service",
        //                         "content6"=>"<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>",
        //                         'filePath6'=>url('/frontend/assets/images/icon-6.png'),
        //                     ]);

        $page['status'] = '1';
        $page['type'] = 'how-it-works';
        Page::create($page);
    }
}



