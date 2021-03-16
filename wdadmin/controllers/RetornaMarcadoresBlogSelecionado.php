<?php

require_once "../class/BlogMarcadores.class.php";

$BlogMarcadores = new BlogMarcadores();
$BlogMarcadores->setId_blog_marcadores($_POST['viIdMarcadoresBlog']);

if ($BlogMarcadores->edita_dados()):
    print $BlogMarcadores->getRetorno_dados();
else:
    print 0;
endif;