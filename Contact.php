<?php
	$title = "Contact Us";
	$description = "Mobiopush Contact us.";
	require 'include/header.php';
?>
		<div class="content message-box-4 bt box-padding white-bg">
			<div class="row">
				<div class="small-12 columns align-center">
					<h2>Reach Us</h2>
					<p>No matter where you are in the world, we're here when you need us.</p>
					
				</div>
			</div>
			<div class="row bt box-padding">
				<div class="small-12 medium-6 large-6 columns">
					<div class="form-style" id="contact_form">
					    <div id="contact_results"></div>
					    <div id="contact_body">
					        <label><span>Name <span class="required">*</span></span>
					            <input type="text" name="name" id="name" required="true" class="input-field"/>
					        </label>
					        <label><span>Email <span class="required">*</span></span>
					            <input type="email" name="email" required="true" class="input-field"/>
					        </label>
					        
				            <label for="subject"><span>Regarding</span>
					            <select name="subject" class="select-field">
					            <option value="General Question">General Question</option>
					            <option value="Support">Support</option>
					            <option value="Others">Others</option>
					            </select>
					        </label>
					        <label for="field5"><span>Message <span class="required">*</span></span>
					            <textarea name="message" id="message" class="textarea-field" required="true" rows="5"></textarea>
					        </label>
					        <label>
					            <span>&nbsp;</span><input type="submit" class="button expand" id="submit_btn" value="Reach Us" />
					        </label>
					    </div>
					</div>
				</div>
				<div class="small-12 medium-5 large-5 columns">
					<small>Support</small>
					<p>Email : support [at] mobiopush.com</p>
					<small>Sales</small>
					<p>Email : sales [at] mobiopush.com</p>
					<small>Physical Location</small><br/>
					<strong>MobioGlobal</strong><br/>
					startupvillage
					kinfra infopark<br/>
					kalamassery, kochi<br/>
					kerala, India<br/>
				</div>
			</div>
		</div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<!-- Start jQuery code -->
<script type="text/javascript">
$(document).ready(function() {
    $("#submit_btn").click(function() {
       
        var proceed = true;
        //simple validation at client's end
        //loop through each field and we simply change border color to red for invalid fields      
        $("#contact_form input[required=true], #contact_form textarea[required=true]").each(function(){
            $(this).css('border-color','');
            if(!$.trim($(this).val())){ //if this field is empty
                $(this).css('border-color','red'); //change border color to red  
                proceed = false; //set do not proceed flag
            }
            //check invalid email
            var email_reg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
            if($(this).attr("type")=="email" && !email_reg.test($.trim($(this).val()))){
                $(this).css('border-color','red'); //change border color to red  
                proceed = false; //set do not proceed flag             
            }  
        });
       
        if(proceed) //everything looks good! proceed...
        {
            //get input field values data to be sent to server
            post_data = {
                'user_name'     : $('input[name=name]').val(),
                'user_email'    : $('input[name=email]').val(),
                'subject'       : $('select[name=subject]').val(),
                'msg'           : $('textarea[name=message]').val()
            };
           
            //Ajax post data to server
            $.post('Contact_me.php', post_data, function(response){  
                if(response.type == 'error'){ //load json data from server and output message    
                    output = '<div class="error">'+response.text+'</div>';
                }else{
                    output = '<div class="success">'+response.text+'</div>';
                    //reset values in all input fields
                    $("#contact_form  input[required=true], #contact_form textarea[required=true]").val('');
                    $("#contact_form #contact_body").slideUp(); //hide form after success
                }
                $("#contact_form #contact_results").hide().html(output).slideDown();
            }, 'json');
        }
    });
   
    //reset previously set border colors and hide all message on .keyup()
    $("#contact_form  input[required=true], #contact_form textarea[required=true]").keyup(function() {
        $(this).css('border-color','');
        $("#result").slideUp();
    });
});
		</script>
<?php
	require 'include/footer.php';
?>
