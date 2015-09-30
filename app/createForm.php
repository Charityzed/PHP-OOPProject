<?php
include "formMain.php";

class createForm
{

    public static $form;

    public function createForm()
    {
        $form = new formMain("MAIN FORM", 3, 2,['charity', 'nyandwaki', 'zablon'],['submit', 'cancel']);
  
        echo'<form action="" method="POST">
<form class="form-horizontal">
<fieldset>
<div class=" well col-md-6 col-md-offset-3 container">
<!-- Form Name -->
<legend class="well">'.$form->formname;'</legend>
';
      for($val=0;$val<$form->fields;$val++) {
        echo '
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="First name"></label>
  <div class="col-md-6">
  <input id="" name="'.$form->fieldnames[$val].'" type="text" placeholder="'.$form->fieldnames[$val].'" class="form-control input-md">
  <span class="help-block"></span>
  </div>
</div>


<div class="form-group" >
  <label class="col-md-4 control-label" for="submit" ></label >
  <div class="col-md-8 center-block" >';
        }

    for($val=0;$val<$form->buttons;$val++){
      echo '
    <button id="Cancel" name="'.$form->buttonNames[$val].'" class="btn btn-warning ">'.$form->buttonNames[$val].'</button>';
    }
    echo'
  </div>
</div>

</fieldset>
</div>
</form>';

    }

}

?>