<?php include('header.php'); ?>
<title>Ecofriendly Mechanical | Contact Us</title>

</head>
<?php include('menu.php'); ?>



<?php
                                         
 define('MAIL_TO','pam@ecofriendlyhvac.com,ashley@ecofriendlyhvac.com,amahboob@cinnova.com');
 $errors = array();
 
 $name = '';
 $email = '';
 $tel = '';
 $company = '';
 $address = '';
 $city = '';
 $state = '';
 $subject = 'Contact Us';
 $message = '';
 
 /**
 * validate form data 
 * @return boolean return true if no error found, otherwise return false
 */
 function validate_form(){
 
 global $errors, $name, $email, $tel, $company, $address, $city, $state, $subject, $message;
                    
 // validate name
 if($_POST['name'] != ''){
 $name = filter_var($_POST['name'],FILTER_SANITIZE_STRING);
 if($name == ''){
 $errors[] = 'Name is not valid';
 }
 }else{
 $errors[] = 'Name is required';
 }
  //validat name
     if(preg_match("/\b(?:(?:https?|ftp|http):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$_POST['name'])){
     // prevent form from saving code goes here
     $errors[] = 'Please remove URLs from Name';
     }

 
//validate phone
  if($_POST['tel'] != ''){
 $tel = filter_var($_POST['tel'], FILTER_SANITIZE_NUMBER_INT);
     
 //if(!filter_var($tel,FILTER_VALIDATE_PHONE)){
 if(!filter_var($tel,FILTER_SANITIZE_NUMBER_INT)){
 //if($tel == ''){
 $errors[] = 'Phone is not valid';
 }
 }else{
 $errors[] = 'Phone is required';
 }
 
           
 // validate email
 if($_POST['email'] != ''){
 $email = filter_var($_POST['email'],FILTER_SANITIZE_STRING);
 
 if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
 $errors[] = 'Email is not valid';
 }
 }else{
 $errors[] = 'Email is required';
 }
 
 // validate Company
 if($_POST['company'] != ''){
 $company = filter_var($_POST['company'],FILTER_SANITIZE_STRING);
 if($company == ''){
 $errors[] = 'Please enter company';
 }
 }else{
 $errors[] = 'Company is required';
 }
  //validat Company
     if(preg_match("/\b(?:(?:https?|ftp|http):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$_POST['company'])){
     // prevent form from saving code goes here
     $errors[] = 'Please remove URLs from Company';
     }
 
 // validate Address
 if($_POST['address'] != ''){
 $address = filter_var($_POST['address'],FILTER_SANITIZE_STRING);
 if($address == ''){
 $errors[] = 'Please enter address';
 }
 }else{
 $errors[] = 'Address is required';
 }
  //validat Address
     if(preg_match("/\b(?:(?:https?|ftp|http):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$_POST['address'])){
     // prevent form from saving code goes here
     $errors[] = 'Please remove URLs from Address';
     }
 

  // validate city
 if($_POST['city'] != ''){
 $city = filter_var($_POST['city'],FILTER_SANITIZE_STRING);
 if($city == ''){
 $errors[] = 'Please enter city';
 }
 }else{
 $errors[] = 'City is required';
 }
  //validat City
     if(preg_match("/\b(?:(?:https?|ftp|http):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$_POST['city'])){
     // prevent form from saving code goes here
     $errors[] = 'Please remove URLs from City';
     }
 
 // validate state
 if($_POST['state'] != ''){
 $state = filter_var($_POST['state'],FILTER_SANITIZE_STRING);
 if($state == ''){
 $errors[] = 'Please enter state';
 }
 }else{
 $errors[] = 'State is required';
 }
  //validat State
     if(preg_match("/\b(?:(?:https?|ftp|http):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$_POST['state'])){
     // prevent form from saving code goes here
     $errors[] = 'Please remove URLs from State';
     }
 
 
 // validate message
 if($_POST['message'] != ''){
 $message = filter_var($_POST['message'],FILTER_SANITIZE_STRING);
 if($message == ''){
 $errors[] = 'Message is not valid';
 }     
 }else{
 $errors[] = 'Message is required';
 }  
 //validat message
     if(preg_match("/\b(?:(?:https?|ftp|http):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$_POST['message'])){
     // prevent form from saving code goes here
     $errors[] = 'Please remove URLs';
     }
    
 
 if(count($errors)){
 return false;
 }else{
 return true;
 }
 }
 
 /**
 * display field value
 * @param string $fieldName
 */
 function display_value($fieldName){
 echo isset($_POST[$fieldName]) ? $_POST[$fieldName] : '';
 }
 
 /**
 * display message to users
 * @param array $errors array of errors
 */
 function display_message($errors){
 if(!isset($_POST['submit'])){
 return;
 }
 // 
 if(count($errors) === 0){
 ?>
 <div class="alert alert-success">
 <p>Thank you! your message has been sent.</p>
 </div> 
 <?php 
 }else{
 ?>
 <div class="alert alert-block alert-danger fade in">
 <p>The following error(s) occurred:</p>
 <ul>
 <?php 
 foreach ($errors as $error) {
 echo "<li>$error</li>";
 }
 ?>
 </ul>
 </div>
 <?php
 } 
 }
 
 /**
 * start form processing
 */
 function start_form(){
 global $errors, $name, $email, $company, $address, $city, $state, $tel , $subject, $message;
 
 $mail_msg = '';
     // if user submitted the form
     if(isset($_POST['submit']))
     {
     // validate form
     
         if(validate_form())
         {
         $mail_msg .= 'From: ' . $name . "\n";
         $mail_msg .= 'Email: ' . $email . "\n";
         $mail_msg .= 'Company: ' . $company . "\n";
         $mail_msg .= 'Address: ' . $address . "\n";
         $mail_msg .= 'City: ' . $city . "\n";
         $mail_msg .= 'State: ' . $state . "\n";
         $mail_msg .= 'Phone: ' . $tel . "\n";
         $mail_msg .= 'Message: ' . $message . "\n";
         
             // send email to the MAIL_TO email address
             if(!@mail(MAIL_TO, $subject, $mail_msg)){
             $errors[] = 'Error sending email';
             }
         }
     } 
 }
 /* if($_SERVER["REQUEST_METHOD"] === "POST")
 {
     $recaptcha_secret = "6Ld3SeckAAAAAAHEag2IS2-3_0S8QekYmvs5xn9c";
     $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$recaptcha_secret."&response=".$_POST['g-recaptcha-response']);
     $response = json_decode($response, true);
      if($response["success"] === true)
  {
  // start form processing
          start_form();
            $errors[] = "Thank you";
           
         $errors = array();
          $name = '';  
          $email  = '';
          $phone =  '';
          $company =  '';
          $city =  '';
          $state =  '';
          $address =  '';
          $message = '';           
  
     }  else{
         $errors[] = "You are a robot";
     }
 }   */ 

 // start form processing
 start_form();
 
?> 
    <div class="clearfix border-black"></div>
   
    <div class="container">   
        <div class="margin-bottom-lg margin-top-lg clearfix" style="padding-top:20px; padding-bottom:20px;">
             <div class="col-sm-8 col-xs-12 margin-bottom-sm">               
       <p><strong>CONTACT OUR TEAM TODAY!</strong></p>
       <br>
       <p>
        <strong>Contact Us</strong> <br>
        <strong>24/7 Phone:</strong> <br>
        (812) 333-1223
       </p>
  
       <p>
       <strong>Address:</strong> <br>
       Ecofriendly Mechanical <br>
       1297 N. Loesch Road <br>
       Bloomington, IN 47404 <br>
       </p>
       <p><strong>If after normal business hours, emails won't be answered until the next business day, if you need emergency service, please Call (812) 333-1223</strong></p>
        <br>
              <form action="<?php echo $base_url; ?>/contact-us.php" method="POST" class="form-horizontal">
               <?php
             display_message($errors);
             ?>
             <div class="control-group">
                 <label for="name" class="control-label">Name:</label> 
                 <div class="controls">
                 <input type="text"  
                    name="name" 
                    id="name"
                    value="<?php display_value('name')?>" 
                    class="input-xlarge form-control" required 
                    placeholder="Name"/>
                 </div>
             </div>
             <br>
             <div class="control-group">
                 <label for="tel" class="control-label">Phone:</label> 
                 <div class="controls">
                 <input type="tel"  
                    name="tel" 
                    id="tel"
                    value="<?php display_value('tel')?>" 
                    class="input-xlarge form-control" required 
                    placeholder="Phone"/>
                 </div>
             </div>
             <br>
             <div class="control-group">
             <label for="email" class="control-label">Email:</label>
             <div class="controls">
             <input type="email" required
                name="email"
                id="email" 
                value="<?php display_value('email')?>"
                class="input-xlarge form-control" 
                placeholder="Email"/>
             </div> 
             </div>
             <br>
             
                          <div class="control-group">
             <label for="company" class="control-label">Company:</label>
             <div class="controls">
             <input type="text"
                    name="company"
                    id="company" 
                    value="<?php display_value('company')?>" 
                    class="input-xlarge form-control" 
                    placeholder="Company" />
             </div> 
             </div>
             <br>
             
                                       <div class="control-group">
             <label for="Address" class="control-label">Address:</label>
             <div class="controls">
             <input type="text" required
                    name="address"
                    id="address" 
                    value="<?php display_value('address')?>" 
                    class="input-xlarge form-control" 
                    placeholder="Address" />
             </div> 
             </div>

             <br>
             

             <div class="control-group">
             <label for="city" class="control-label">City:</label>
             <div class="controls">
             <input type="text" required
                    name="city"
                    id="city" 
                    value="<?php display_value('city')?>" 
                    class="input-xlarge form-control" 
                    placeholder="City" />
             </div> 
             </div>

             <br>
             
                                       <div class="control-group">
             <label for="state" class="control-label">State:</label>
             <div class="controls">
             <input type="text" required
                    name="state"
                    id="state" 
                    value="<?php display_value('state')?>" 
                    class="input-xlarge form-control" 
                    placeholder="State" />
             </div> 
             </div>
             
             <br>
             
             <div class="control-group">
             <label for="message" class="control-label">Message:</label>
             <div class="controls">
             <textarea rows="7" 
                       cols="25" 
                       name="message" 
                       id="message"
                       class="input-xlarge form-control"><?php display_value('message')?></textarea>
             </div>
             </div>

             <br>

          <!--    <div class="control-group">
                     <label for="captcha" class="control-label">&nbsp;</label>
                         <div class="controls">
                                  <div class="g-recaptcha" data-sitekey="6Ld3SeckAAAAAFP1SADB_cUQm7mU8vJ4QWl4LIcf"></div>
                         </div>
                 </div>  
                 <br> -->
             
             <div class="control-group"> 
             <div class="controls" style="margin-top: 10px;">
             <input type="submit" name="submit" value="Send" class="btn btn-warning"> 
              </div>
             </div>
            
             </form>
        </div>
        </div>
    </div>     
<br>
<?php include('footer.php'); ?>