<?php
 $emoji = $_GET['emoji'];
 $ownerid = $_GET['ownerid'];
 $object = $_GET['object'];
 $phone = $_GET['phone'];
?>

<!DOCTYPE html>
<html>
<body>
<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>Service Request Resolved - Survey</title>
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="starSurvey.css" media="screen"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  
</head>
<body>

<div class="container">
    <form name="onloadform" action="http://xxx/maxrest/rest/os/MXSURVEY/?_lid=maxadmin&_lpwd=maxadmin&_action=Change" method="POST"  target="myframe">
          <input type="hidden" class="form-control" id="orgid" placeholder="EL" name="orgid" value="EL" />
          <input type="hidden" class="form-control" id="siteid" placeholder="creativELodge" name="siteid" value="creativELodge"  />
          <input type="hidden" class="form-control" id="phone"  name="phone" value="<?php echo $phone; ?>" />
          <input type="hidden" class="form-control" id="ownerid" placeholder="<?php echo $ownerid; ?>"  name="ownerid" value="<?php echo $ownerid; ?>"  >
          <input type="hidden" class="form-control" id="object" placeholder="<?php echo $object; ?>" name="object" value="<?php echo $object; ?>" >
          <input type="hidden" class="form-control" id="emoji" placeholder="<?php echo $emoji; ?>" name="emoji" value="<?php echo $emoji; ?>" >
  </form>
  <h2>Please help us improve our service by filling a quick survey:</h2>
  <form name="input" action="http://xxx/maxrest/rest/os/MXSURVEY/?_lid=maxadmin&_lpwd=maxadmin&_action=Change" method="POST"  onsubmit="myFunction()">
      <input type="hidden" class="form-control" id="orgid" placeholder="EL" name="orgid" value="EL">
      <input type="hidden" class="form-control" id="siteid" placeholder="creativELodge" name="siteid" value="creativELodge"  readonly>
      <input type="hidden" class="form-control" id="ownerid" placeholder="<?php echo $ownerid; ?>"  name="ownerid" value="<?php echo $ownerid; ?>">
      <input type="hidden" class="form-control" id="object" placeholder="<?php echo $object; ?>" name="object" value="<?php echo $object; ?>" >
      <input type="hidden" class="form-control" id="emoji" name="emoji" value="<?php echo $emoji; ?>" >
    <table>
        <tr>
            <td><label for="email">Team arrived as per agreed time?</label></td>
            <td>            
                <fieldset class="rating one">
                <input type="radio" id="q1-4" name="q1" value="4" /><label for="q1-4" title="Extremely Satisfied"><span>&#9733</span></label>
                <input type="radio" id="q1-3" name="q1" value="3" /><label for="q1-3" title="Satisfied"><span>&#9733</span></label>
                <input type="radio" id="q1-2" name="q1" value="2" /><label for="q1-2" title="Unsatisfied"><span>&#9733</span></label>
                <input type="radio" id="q1-1" name="q1" value="1" /><label for="q1-1" title="Extremely Unsatisfied"><span>&#9733</span></label>
                </fieldset>
            </td>
            <td style="padding:0px 0px 0px 15px;">
                <input type="text" class="form-control" id="q1comments" placeholder="Text * Optional" name="q1comments" >
            </td>
        </tr>
        <tr>
            <td><label for="email">Job completed in a timely manner?</label></td>
            <td>            
                <fieldset class="rating two">
                <input type="radio" id="q2-4" name="q2" value="4" /><label for="q2-4" title="Extremely Satisfied"><span>&#9733</span></label>
                <input type="radio" id="q2-3" name="q2" value="3" /><label for="q2-3" title="Satisfied"><span>&#9733</span></label>
                <input type="radio" id="q2-2" name="q2" value="2" /><label for="q2-2" title="Unsatisfied"><span>&#9733</span></label>
                <input type="radio" id="q2-1" name="q2" value="1" /><label for="q2-1" title="Extremely Unsatisfied"><span>&#9733</span></label>
                </fieldset>
            </td>
            <td style="padding:0px 0px 0px 15px;">
                <input type="text" class="form-control" id="q2comments" placeholder="Text * Optional" name="q2comments" >
            </td>
            
        </tr>
        <tr>
            <td><label for="email">Team courtesy and professionalism?</label></td>
            <td>            
                <fieldset class="rating three" >
                <input type="radio" id="q3-4" name="q3" value="4" /><label for="q3-4" title="Extremely Satisfied"><span>&#9733</span></label>
                <input type="radio" id="q3-3" name="q3" value="3" /><label for="q3-3" title="Satisfied"><span>&#9733</span></label>
                <input type="radio" id="q3-2" name="q3" value="2" /><label for="q3-2" title="Unsatisfied"><span>&#9733</span></label>
                <input type="radio" id="q3-1" name="q3" value="1" /><label for="q3-1" title="Extremely Unsatisfied"><span>&#9733</span></label>
                </fieldset>
            </td>
            <td style="padding:0px 0px 0px 15px;">
                <input type="text" class="form-control" id="q3comments" placeholder="Text * Optional" name="q3comments" >
            </td>
        </tr>
        <tr>
            <td><label for="email">Team overall appearance ?</label></td>
            <td>            
                <fieldset class="rating four" >
                <input type="radio" id="q4-4" name="q4" value="4" /><label for="q4-4" title="Extremely Satisfied"><span>&#9733</span></label>
                <input type="radio" id="q4-3" name="q4" value="3" /><label for="q4-3" title="Satisfied"><span>&#9733</span></label>
                <input type="radio" id="q4-2" name="q4" value="2" /><label for="q4-2" title="Unsatisfied"><span>&#9733</span></label>
                <input type="radio" id="q4-1" name="q4" value="1" /><label for="q4-1" title="Extremely Unsatisfied"><span>&#9733</span></label>
                </fieldset>
            </td>
            <td style="padding:0px 0px 0px 15px;">
                <input type="text" class="form-control" id="q4comments" placeholder="Text * Optional" name="q4comments" >
            </td>
        </tr>
        <tr>
            <td><label for="email">Work area cleanliness ?</label></td>
            <td>            
                <fieldset class="rating five" >
                <input type="radio" id="q5-4" name="q5" value="4" /><label for="q5-4" title="Extremely Satisfied"><span>&#9733</span></label>
                <input type="radio" id="q5-3" name="q5" value="3" /><label for="q5-3" title="Satisfied"><span>&#9733</span></label>
                <input type="radio" id="q5-2" name="q5" value="2" /><label for="q5-2" title="Unsatisfied"><span>&#9733</span></label>
                <input type="radio" id="q5-1" name="q5" value="1" /><label for="q5-1" title="Extremely Unsatisfied"><span>&#9733</span></label>
                </fieldset>
            </td>
            <td style="padding:0px 0px 0px 15px;">
                <input type="text" class="form-control" id="q5comments" placeholder="Text * Optional" name="q5comments" >
            </td>
        </tr>
        <tr>
            <td style="width:350px;"><label for="email">Overall experience with the maintenance service and any suggestions to improve ?</label></td>
            <td>            
                <fieldset class="rating six" >
                <input type="radio" id="q6-4" name="q6" value="4" /><label for="q6-4" title="Extremely Satisfied"><span>&#9733</span></label>
                <input type="radio" id="q6-3" name="q6" value="3" /><label for="q6-3" title="Satisfied"><span>&#9733</span></label>
                <input type="radio" id="q6-2" name="q6" value="2" /><label for="q6-2" title="Unsatisfied"><span>&#9733</span></label>
                <input type="radio" id="q6-1" name="q6" value="1" /><label for="q6-1" title="Extremely Unsatisfied"><span>&#9733</span></label>
                </fieldset>
            </td>
            <td style="padding:0px 0px 0px 15px;">
                <input type="text" class="form-control" id="q6comments" placeholder="Text * Optional" name="q6comments" >
            </td>
        </tr>

    </table>


        
    <div class="form-group" style="float:left;">
        <button type="submit" class="btn btn-default" formtarget="myframe">Submit & Close</button>
    </div>
  </form>
  
  <form name="input" action="http://xxx/maxrest/rest/os/MXSURVEY/?_lid=maxadmin&_lpwd=maxadmin&_action=Change" method="POST"  target="myframe" onsubmit="myAlert()" >
          <input type="hidden" class="form-control" id="orgid" placeholder="EL" name="orgid" value="EL" />
          <input type="hidden" class="form-control" id="siteid" placeholder="creativELodge" name="siteid" value="creativELodge" />
          <input type="hidden" class="form-control" id="phone"  name="phone" value="<?php echo $phone; ?>" />
          <input type="hidden" class="form-control" id="phone"  name="phone" value="<?php echo $phone; ?>" />
          <input type="hidden" class="form-control" id="ownerid" placeholder="<?php echo $ownerid; ?>"  name="ownerid" value="<?php echo $ownerid; ?>" />
          <input type="hidden" class="form-control" id="object" placeholder="<?php echo $object; ?>" name="object" value="<?php echo $object; ?>" />
          <input type="hidden" class="form-control" id="emoji" placeholder="<?php echo $emoji; ?>" name="emoji" value="<?php echo $emoji; ?>" >
          <input type="hidden" class="form-control" id="description" name="description" value="CallBack" > 
          <button type="submit" class="btn btn-default" formtarget="myframe">Call Me Back</button>
   </form>

</div>
<script>
window.onload = function(){
  document.forms['onloadform'].submit();
  //alert("Yallah! You are <?php echo $emoji; ?> with us, Thankyou very much.");
  //window.location.href='https://maximo.creativELodge.edu.sa/maximo';
}
function myFunction() {
  alert("Thankyou for your valuable contribution");
  window.location.href='https://maximo.creativELodge.edu.sa/maximo';
  
}
function myAlert(){
  alert("Customer care team will contact you shortely.\n Thankyou");
  window.location.href='https://maximo.creativELodge.edu.sa/maximo';
}
</script>
<iframe name='myframe' style="display: none;">
    
</iframe>
</body>
</html>




