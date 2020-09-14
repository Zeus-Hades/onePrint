<!DOCTYPE html>
<html>
    <head>
    <link rel="styleSheet" href="{{URL::asset('/css/home.css') }}" type="text/css">
    <script type="text/javascript" src="{{URL::asset('/js/home.js') }}"></script>
    <script type="text/javascript" src="{{URL::asset('/js/jquery-3.5.1.js') }}"></script>
    <script type="text/javascript" src="{{URL::asset('/js/jquery-3.5.1.min.js') }}"></script>
    </head>
    <body onload="initPage()">
        <!-- header -->
        <div class="header" id="header_id">
            <div class="companyLogo" id="companyLogo_id"></div>
            <div class="home" id="home_id" onclick="clickHeader(0)">
                <p>home</p>
            </div>
            <div class="product" id="product_id" onclick="clickHeader(1)">
                <p>product</p>
                <ul id="product_ul">
                    <li><p>booklets</p></li>
                    <li><p>product_2</p></li>
                    <li><p>product_3</p></li>
                    <li><p>product_4</p></li>
                </ul>
            </div>
            <div class="design" id="design_id" onclick="clickHeader(2)">
                <p>design</p>
                <ul id="design_ul">
                    <li><p>booklets</p></li>
                    <li><p>product_2</p></li>
                    <li><p>product_3</p></li>
                </ul>
            </div>
            <div class="gallary" id="gallary_id" onclick="clickHeader(3)">  
                <p>gallary</p>
                <ul id="gallary_ul">
                    <li><p>booklets</p></li>
                    <li><p>product_2</p></li>
                    <li><p>product_3</p></li>
                </ul>
            </div>
            <div class="support" id="support_id" onclick="clickHeader(4)"><p>support</p></div>
            <div class="aboutUs" id="aboutUs_id" onclick="clickHeader(5)"><p>about us</p></div>
            <div class="contact" id="contact_id" onclick="clickHeader(6)"><p>contact us</p></div>
            <div class="cart" id="cart_id" onclick="clickHeader(7)"><p>cart</p></div>
            <div class="login" id="login_id" onclick="clickHeader(8)"><p>login</p></div>
            <div class="register" id="register_id" onclick="clickHeader(9)"><p>register</p></div>
        </div>
        <!-- diaplayBox -->
        <div class = "diaplayBox" id="diaplayBox_id">
            <img id="home_img_showPhoto1">
            <img id="home_img_showPhoto2">
            <img id="home_img_showPhoto3">
        </div>



        <!-- home -->
        <div class = "home_div" id="home_div_id" style="display:block">
            <div class="home_width_holder" id="home_width_holder_id">
			    <div class="booklets_holder home_menu">
			        <a href="" title="Online Booklet Printing Services">
                    <!-- 到时候改-->
				    <div class="home_panel_img booklets_img"></div>
				        Booklets
			        </a>
                </div>
                <div class="brochures_holder home_menu">
                    <a href="" title="Online Brochure Printing Services">
                    <div class="home_panel_img brochures_img"></div>
                        Brochures
                    </a>
                </div>
			<div class="clear"></div>
            </div>
            
            <div class="home_content_holder">
                <div class="home_content_left">
                    <h1 class="hp_title">we deliver quality printing <br style="">at the lowest possible price.</h1>
                    <p>Find the most cost effective solution for your business with our instant online pricing.</p>
                    <p>&nbsp;</p>
                    <p>Supply your print ready artwork and upload your file using our online ordering system. Alternatively, call or email our friendly staff who can assist you with your order.</p>                   
                </div>
                <div class="home_content_right">
                    
                    <div class="home_subtitle">an online store with a difference...</div>
                    <div class="home_panel1">
                        <a href="">
                            <div class="home_panel1_img">
                            </div>
                            <h4>Easy Ordering</h4>
                            <p>Shopping cart, email, FTP or Dropbox services available.</p>
                            </a><a class="blue_link" href="">read more+</a>
                        
                    </div>
                    
                    <div class="home_panel2">
                        <a href="">
                            <div class="home_panel2_img">
                            </div>
                            <h4>Need Help?</h4>
                            <p>Our friendly team is ready to offer you industry help or advice.</p>
                            </a><a class="blue_link" href="">read more+</a>
                    </div>
                </div>
                <div class="clear"></div>
                </div>
            </div>
        </div>

        <!-- product -->
        <div class = "product_div" id="product_div_id" style="display:none">

        </div>

        <!-- design -->
        <div class = "design_div" id="design_div_id" style="display:none">

        </div>

        <!-- gallary -->
        <div class = "gallary_div" id="gallary_div_id" style="display:none">

        </div>

        <!-- support -->
        <div class = "support_div" id="support_div_id" style="display:none">

        </div>

        <!-- aboutUs -->
        <div class = "aboutUs_div" id="aboutUs_div_id" style="display:none">

        </div>

        <!-- contact -->
        <div class = "contact_div" id="contact_div_id" style="display:none">

        </div>

        <!-- cart -->
        <div class = "cart_div" id="cart_div_id" style="display:none">

        </div>

        <!-- login -->
        <div class = "login_div" id="login_div_id" style="display:none">

        </div>

        <!-- register -->
        <div class = "register_div" id="register_div_id" style="display:none">

        </div>
        
        <!-- footer -->
        <div class = "footer" id="footer_id">
            <div class = "footer_div_message" id="footer_div_message_id">
                <div class = "footer_div_phoneNumber"></div>
                <div class = "footer_div_placeInfo"></div>
            </div>
        </div>

    </body>
</html>