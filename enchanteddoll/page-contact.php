<?php

get_header();

?>

<div class="contact-container">

    
    <!--FORM-->        
        <div id="formbox">
            
        <h2><span>Please fill in the details below:</span></h2>

            <form>

                <h1>Name</h1>

                    <input class="smallinput" type="text" name="fullname"><br>

                <h1>Email</h1> 

                    <input class="smallinput" type="email" name="email"><br>

                <h1>Subject</h1>

                    <input class="smallinput" type="text" name="subject"><br>

                <h1>Message</h1>

                    <input id="messageinput" type="text" name="message"><br> 
            </form>

            <button class="mybutton" id="sendbutt" type="submit">SEND</button>

        </div>
        
<!--MESSAGE FROM USER-->
    <div class="contact-message">

            <div id="extrabox">

                    <p>
                    You can send me an email directly at <a href="#">inquiries@enchanteddoll.com.</a> We will get back to you within 1-2 business days.<br>
                
                    At this time I no longer take orders for porcelain dolls. From time to time a porcelain doll will be available for purchase either directly through this website, through a gallery, or through an online auction. When a doll is available it will be announced on my <a href="#">blog</a> as well as Facebook/Twitter/email Newsletter.<br>
                
                    Sign up for the newsletter to receive monthly updates on Enchanted Doll.<br>
                
                    Interact with other Enchanted Doll fans and owners on the community run Enchanted Forum.<br>
                    </p>
                
                <img src="img/carousel/stockholm9.jpg" style="max-height: 300px; max-width: auto;">

            </div>
        
    </div>

</div>


<?php

get_footer();

?>
