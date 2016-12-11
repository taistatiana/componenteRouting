<?php

/* blog/index.html.php */
class __TwigTemplate_76705bfe44bb6eb37046a65579e2ee71667eceae44af2af407b9c21dc5723eee extends Twig_Template
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
        $__internal_e0b7e3e103441f6acf027680a9958a117c8abf3751b55e239d76c2d7571aa9ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0b7e3e103441f6acf027680a9958a117c8abf3751b55e239d76c2d7571aa9ad->enter($__internal_e0b7e3e103441f6acf027680a9958a117c8abf3751b55e239d76c2d7571aa9ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/index.html.php"));

        $__internal_11483d633f962fef5209f1bd814e6b203dc47bab17b61b679e7aabc0e4dfc3b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11483d633f962fef5209f1bd814e6b203dc47bab17b61b679e7aabc0e4dfc3b9->enter($__internal_11483d633f962fef5209f1bd814e6b203dc47bab17b61b679e7aabc0e4dfc3b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/index.html.php"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
\t<title> Seja Bem Vindo!!! </title>
\t<style type=\"text/css\"> body { background: #FF6984; }
\tinput[type=submit]{
\tmargin-left:6%;
\t}
\t</style>


</head>
<body>
  <h1><i> Efetue seu cadastro! </i></h1>
<form action=\"<?php echo \$view['router']->path('home_page') ?>\" method=\"post\">
\t<label><i> Nome: </i></label> 
\t<input type=\"text\" name=\"nome\"> <br> <br>
\t<label><i> Senha: </i> </label> 
\t<input type=\"password\" name=\"senha\"> <br> <br>
\t<input type=\"submit\" name=\"enviar\"> 
</form>

</body>
</html>";
        
        $__internal_e0b7e3e103441f6acf027680a9958a117c8abf3751b55e239d76c2d7571aa9ad->leave($__internal_e0b7e3e103441f6acf027680a9958a117c8abf3751b55e239d76c2d7571aa9ad_prof);

        
        $__internal_11483d633f962fef5209f1bd814e6b203dc47bab17b61b679e7aabc0e4dfc3b9->leave($__internal_11483d633f962fef5209f1bd814e6b203dc47bab17b61b679e7aabc0e4dfc3b9_prof);

    }

    public function getTemplateName()
    {
        return "blog/index.html.php";
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
\t<title> Seja Bem Vindo!!! </title>
\t<style type=\"text/css\"> body { background: #FF6984; }
\tinput[type=submit]{
\tmargin-left:6%;
\t}
\t</style>


</head>
<body>
  <h1><i> Efetue seu cadastro! </i></h1>
<form action=\"<?php echo \$view['router']->path('home_page') ?>\" method=\"post\">
\t<label><i> Nome: </i></label> 
\t<input type=\"text\" name=\"nome\"> <br> <br>
\t<label><i> Senha: </i> </label> 
\t<input type=\"password\" name=\"senha\"> <br> <br>
\t<input type=\"submit\" name=\"enviar\"> 
</form>

</body>
</html>", "blog/index.html.php", "/var/www/html/componenteRouting/app/Resources/views/blog/index.html.php");
    }
}
