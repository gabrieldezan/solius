<?php

require_once "../class/BlogPostagens.class.php";

$BlogPostagens = new BlogPostagens();
$BlogPostagens->setId_blog_marcadores($_POST['viFiltroIdBlogMarcadores']);

if ($BlogPostagens->consulta_dados()):
    print $BlogPostagens->getRetorno_dados();
else:
    print 0;
endif;