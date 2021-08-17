<br>
<!--br is used to give a line break-->
<h1>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  &nbsp&nbsp&nbspThis is the Login page</h1> <!--h1 is the header/ the heading of the page and &nbsp is used to create the space-->
<h2> Enter your details in here</h2>
<form class="form-horizontal contactform" action="index.php" method="post" name="f">
  <fieldset> <!-- adds a box to the form-->
    <legend> <!--makes particular text appear in between the line of the box-->
      <b>Login Form</b>   <!-- b is used to make text bold-->
    </legend>
    <br>
  <div class="form-group">
    <label for="firstname"> First Name: </label>
    <input type="text" id="firstname" placeholder="Your First Name" name="first name">
    </div>
    <br>


    <div class="form-group">
      <label for="lastname"> Last Name: </label>
      <input type="text" id="lastname" placeholder="Your Last Name" name="last name">
      </div>
  <br>



    <div class="form-group">
      <label for="Email id"> Email: </label>
        <input type="varchar" id="email"  placeholder="Your Email address" name="email">
        </label>
      </div>
<br>


      <div class="form-group">
        <label for="Password"> Password: </label>
        <input type="password"  id="password" placeholder="Password" name="password">
        </label>
     </div>
<br>


     <div class="form-group">
       <label for="Confirm Password"> Confirm Password: </label>
       <input type="confirm password" id="confirm password" placeholder="Confirm Password" name="confirm password">
        </label>
       </div>
<br>


       <div class="form-group">
       <div class="col-lg-10">
       <button class="btn btn-primary" type="submit" name="sub">Submit</button>
       </div>
       </div>

   </fieldset>
</form>
