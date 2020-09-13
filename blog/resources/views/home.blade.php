<!DOCTYPE html>
<html>
    <head>
    <link rel="styleSheet" href="{{URL::asset('/css/home.css') }}" type="text/css">
    <script type="text/javascript" src="{{URL::asset('/js/home.js') }}"></script>
    <script type="text/javascript" src="{{URL::asset('/js/jquery-3.5.1.js') }}"></script>
    <script type="text/javascript" src="{{URL::asset('/js/jquery-3.5.1.min.js') }}"></script>
    </head>
    <body>
        <!-- header -->
        <div class="header" id="header_id">
            <div class="companyLogo" id="companyLogo_id"></div>
            <div class="home" id="home_id"><p>home</p></div>
            <div class="product" id="product_id" onclick="clickHeader(1)">
                <p>product</p>
                <ul id="product_ul">
                    <li><p>product_1</p></li>
                    <li><p>product_2</p></li>
                    <li><p>product_3</p></li>
                    <li><p>product_4</p></li>
                </ul>
            </div>
            <div class="design" id="design_id" onclick="clickHeader(2)"><p>design</p></div>
            <div class="gallary" id="gallary_id"><p>gallary</p></div>
            <div class="support" id="support_id"><p>support</p></div>
            <div class="aboutUs" id="aboutUs_id"><p>about us</p></div>
            <div class="contact" id="contact_id"><p>contact us</p></div>
            <div class="cart" id="cart_id"><p>cart</p></div>
            <div class="login" id="login_id"><p>login</p></div>
            <div class="register" id="register_id"><p>register</p></div>
        </div>
        <!-- diaplayBox -->
        <div class = "diaplayBox" id="diaplayBox_id">
            <img id="home_img_showPhoto1">
            <img id="home_img_showPhoto2">
            <img id="home_img_showPhoto3">
        </div>
        <!-- home -->
        <div class = "home_div" id="home_div_id" style="display:">

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