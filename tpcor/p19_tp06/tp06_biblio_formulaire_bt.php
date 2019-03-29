<?php

// 20/03/2019 : biliotheque fonctions formulaire avec bootstrap
// --------------------------------------------------
// form_begin
// --------------------------------------------------

function form_begin($class, $method, $action) {
    echo ("\n<!-- ============================================== -->\n");
    echo ("<!-- form_begin : $class $method $action) -->\n");

    printf("<form class='%s' method='%s' action='%s'>\n", $class, $method, $action);
}

// --------------------------------------------------
// form_input_text
// --------------------------------------------------

function form_input_text($label, $name, $size, $value) {
    echo ("\n<!-- form_input_text : $label $name $size $value -->\n");
    echo ("  <p>\n");

    echo ("<div class='form-group'>");
    echo (" <label for='$abel'>$label</label>");
    echo (" <input type='text' class='form-control' name='$name' size='$size' value='$value' >");
    echo ("</div>");
}

// --------------------------------------------------
// form_input_hidden
// --------------------------------------------------

function form_input_hidden($name, $value) {
    echo ("\n<!-- form_input_text : $label $name $size $value -->\n");
    echo ("  <p>\n");
    echo ("<div class='form-group'>");
    echo (" <input type='hidden' class='form-control' name='$name' value='$value' >");
    echo ("</div>");
}

// --------------------------------------------------
// form_end
// --------------------------------------------------

function form_end() {
    echo ("<!-- form_end -->\n");
    printf("</form>\n");
}


// --------------------------------------------------
// form_select
// --------------------------------------------------

function form_select($label, $name, $multiple, $size, $liste) {
    echo ("\n<!-- form_select : $label $multiple $name $size  -->\n");
    echo ("  <p>\n");

    echo ("<div class='form-group'>");
    echo (" <label for='$label'>$label</label>");

    if ($multiple) {
        printf(" <select class='form-control' name='%s[]' multiple='multiple' size='%s' />\n", $name, $size);
    } else {
        printf(" <select class='form-control' name='%s' size='%s' />\n", $name, $size);
    }

    foreach ($liste as $element) {
        printf("   <option value='%s'>%s</option>\n", $element, $element);
    }
    echo ("  </select>\n");
    echo ("</div>");
}

function form_input_checkbox($name, $checked, $label) {
    echo ("\n<!-- form_input_checkbox : $name $checked $label  -->\n");
    $select = ($checked ? "checked='checked'" : "");
    printf("<input type='checkbox' name='%s'>%s</input><br />", $name, $label);
}

function form_input_radio($name, $checked, $value, $label) {
    echo ("\n<!-- form_input_radio : $name $checked $value $label  -->\n");
    $select = ($checked ? "checked='checked'" : "");
    printf("<input type='radio' name='%s' %s value='%s'/>%s</<br />", $name, $select, $value, $label);
}

function form_input_submit($value) {
    echo ("\n<!-- form_input_submit : $value -->\n");
    printf("<input type='submit' value='%s' />\n", $value);
}

function form_input_reset($value) {
    echo ("\n<!-- form_input_reset : $value -->\n");
    printf("<input type='reset' value='%s' />\n", $value);
}

function form_textarea($label, $name, $value) {
    echo ("\n<!--  form_textarea : $label, $name, $value -->\n");
    printf("<label>%s</label>\n", $label);
    printf("<textarea name='%s'>%s</textarea>\n", $name, $value);
}

echo ("<!-- je suis bibio form bt -->");
1;

?>


