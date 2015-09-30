<?php
include "formMain.php";


class loginForm{

    public $loginform;
    public function createLogin(){
        $loginform = new formMain("LOGIN FORM", 3, 2,['charity', 'nyandwaki', 'zablon'],['submit', 'cancel']);
//            new formMain("MAIN FORM", 3, 2,['charity', 'nyandwaki', 'zablon'],['submit', 'cancel'),
//            new formMain("MAIN FORM", 3, 2,['charity', 'nyandwaki', 'zablon'],['submit', 'cancel'])];

        echo'<form action="" method="POST">
<form class="form-horizontal">
<fieldset>
<div class=" well col-md-6 col-md-offset-3 container">
<!-- Form Name -->
<legend class="well">'.$loginform->formname;'</legend>';
        for($val=0;$val<$loginform->fields;$val++) {
            echo '
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="First name"></label>
  <div class="col-md-6">
  <input id="" name="'.$loginform->fieldnames[$val].'" type="text" placeholder="'.$loginform->fieldnames[$val].'" class="form-control input-md">
  <span class="help-block"></span>
  </div>
</div>';
        }

        echo '<div class="form-group" >
  <label class="col-md-4 control-label" for="submit" ></label >
  <div class="col-md-8 center-block" >';


        for($val=0;$val<$loginform->buttons;$val++){
            echo '
    <button id="Cancel" name="'.$loginform->buttonNames[$val].'" class="btn btn-warning ">'.$loginform->buttonNames[$val].'</button>';
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