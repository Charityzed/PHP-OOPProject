<?php
include "formMain.php";

class createForm
{

    public static $form;

    public function createForm()
    {
        $form = [new formMain("MAIN FORM", 3, 2,['charity', 'nyandwaki', 'zablon'],['submit', 'cancel']),
            new formMain("SIGNUP FORM", 5, 2,['FULL NAME', 'EMAIL', 'PHONE NUMBER','PASSWORD'],['submit', 'cancel']),
            new formMain("EXIT", 3, 2,['DOOR1', 'DOOR2', 'DOOR4'],['submit', 'cancel']),
            new formMain("PAUL", 3, 2,['charity', 'nyandwaki', 'zablon'],['submit', 'cancel'])
        ];
//            new formMain("MAIN FORM", 3, 2,['charity', 'nyandwaki', 'zablon'],['submit', 'cancel'),
//            new formMain("MAIN FORM", 3, 2,['charity', 'nyandwaki', 'zablon'],['submit', 'cancel'])];
for($value=0;$value<count($form);$value++) {

  echo '<form action="" method="POST">
<form class="form-horizontal">
<fieldset>
<div class=" well col-md-6 col-md-offset-3 container">
<!-- Form Name -->
<legend class="well">' . $form[$value]->formname;
  '</legend>';
  for ($val = 0; $val < $form[$value]->fields; $val++) {
    echo '
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="First name"></label>
  <div class="col-md-6">
  <input id="" name="' . $form[$value]->fieldnames[$val] . '" type="text" placeholder="' . $form[$value]->fieldnames[$val] . '" class="form-control input-md">
  <span class="help-block"></span>
  </div>
</div>';
  }

  echo '<div class="form-group" >
  <label class="col-md-4 control-label" for="submit" ></label >
  <div class="col-md-8 center-block" >';


  for ($val = 0; $val < $form[$value]->buttons; $val++) {
    echo '
    <button id="Cancel" name="' . $form[$value]->buttonNames[$val] . '" class="btn btn-warning ">' . $form[$value]->buttonNames[$val] . '</button>';
  }
  echo '
  </div>
</div>

</fieldset>
</div>
</form>';
}
    }

}

?>