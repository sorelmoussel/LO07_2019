<?php

form_begin("F_LIVRE","F_LIVRE");
echo "
<fieldset>
<legend> Enregistrer un nouvel message ... </legend>";
form_input_text("Pseudo :","LIVRE_PSEUDO","LIVRE_PSEUDO",'40');
form_textarea("Message :","LIVRE_MSG","LIVRE_MSG");
echo"
</fieldset>
";
form_submit("LIVRE_SUBMIT","LIVRE_SUBMIT","Envoyer");
form_reset("LIVRE_RESET","LIVRE_RESET","Annuler");
form_end();
?>