<?php

form_begin("F_AIRBUS","F_AIRBUS");
echo "
<fieldset>
<legend> Enregistrer un nouvel avion... </legend>";
form_input_text("Label :","AVION_LABEL","AVION_LABEL",'40');
form_input_text("Annee :","AVION_ANNEE","AVION_ANNEE",'40');
form_input_text("Nb. passager(s) :","AVION_NB_PASSAGER","AVION_NB_PASSAGER",'40');
echo"
</fieldset>
";
form_submit("AVION_SUBMIT","AVION_SUBMIT","Envoyer");
form_reset("AVION_RESET","AVION_RESET","Annuler");
form_end();
?>