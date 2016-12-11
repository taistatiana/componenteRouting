<?php

/* blog/home.html.php */
class __TwigTemplate_0e7196f221026962400259102bd0d7d7a725078586bc70538ca88902380c2d0e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_88e47c76d4e89cfa0f9be6a45700da92e14f8bbdc59c0293d62e32c56fea81ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88e47c76d4e89cfa0f9be6a45700da92e14f8bbdc59c0293d62e32c56fea81ea->enter($__internal_88e47c76d4e89cfa0f9be6a45700da92e14f8bbdc59c0293d62e32c56fea81ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/home.html.php"));

        $__internal_bc1b33c5fb96c68bebcd7104fd9e1583647217057085cc61dcf573d477c9cc43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc1b33c5fb96c68bebcd7104fd9e1583647217057085cc61dcf573d477c9cc43->enter($__internal_bc1b33c5fb96c68bebcd7104fd9e1583647217057085cc61dcf573d477c9cc43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/home.html.php"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
\t<title> Página home </title>

</head>
<body>

<h1> Olá, Seja bem vindo(a) <?php echo \$nome ?> </h1>



</body>
</html>";
        
        $__internal_88e47c76d4e89cfa0f9be6a45700da92e14f8bbdc59c0293d62e32c56fea81ea->leave($__internal_88e47c76d4e89cfa0f9be6a45700da92e14f8bbdc59c0293d62e32c56fea81ea_prof);

        
        $__internal_bc1b33c5fb96c68bebcd7104fd9e1583647217057085cc61dcf573d477c9cc43->leave($__internal_bc1b33c5fb96c68bebcd7104fd9e1583647217057085cc61dcf573d477c9cc43_prof);

    }

    public function getTemplateName()
    {
        return "blog/home.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
\t<title> Página home </title>

</head>
<body>

<h1> Olá, Seja bem vindo(a) <?php echo \$nome ?> </h1>



</body>
</html>", "blog/home.html.php", "/var/www/html/componenteRouting/app/Resources/views/blog/home.html.php");
    }
}
