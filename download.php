<?php
header("content-type:application/pdf");
header("content-disposition:attachment;filename=Elixandes_application_form.pdf");
readfile("admission_form.pdf");


?>