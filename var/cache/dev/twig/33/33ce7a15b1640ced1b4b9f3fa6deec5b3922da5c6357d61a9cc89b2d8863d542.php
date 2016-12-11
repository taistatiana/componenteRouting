<?php

/* base.html.twig */
class __TwigTemplate_a32954a9c5fe60746a3f0460b7565f7bb8414ffcd92d9e410ec7b53cacb13c46 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6d56629378945d464661dd966d666cb2a23059341ce97ba486ee32d0ee6055ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d56629378945d464661dd966d666cb2a23059341ce97ba486ee32d0ee6055ad->enter($__internal_6d56629378945d464661dd966d666cb2a23059341ce97ba486ee32d0ee6055ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_57f41561988501b9cc2b63c5e92afe469fed19b8ab27881677f7b64238648ebd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57f41561988501b9cc2b63c5e92afe469fed19b8ab27881677f7b64238648ebd->enter($__internal_57f41561988501b9cc2b63c5e92afe469fed19b8ab27881677f7b64238648ebd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_6d56629378945d464661dd966d666cb2a23059341ce97ba486ee32d0ee6055ad->leave($__internal_6d56629378945d464661dd966d666cb2a23059341ce97ba486ee32d0ee6055ad_prof);

        
        $__internal_57f41561988501b9cc2b63c5e92afe469fed19b8ab27881677f7b64238648ebd->leave($__internal_57f41561988501b9cc2b63c5e92afe469fed19b8ab27881677f7b64238648ebd_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_5d839dd64c31e5c0d6b6935484ec33f0f23e812b2d725dc99765f07a1b16c4bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d839dd64c31e5c0d6b6935484ec33f0f23e812b2d725dc99765f07a1b16c4bc->enter($__internal_5d839dd64c31e5c0d6b6935484ec33f0f23e812b2d725dc99765f07a1b16c4bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d89496e56a910258409d6f884b7e7b4c3e6e6fee5060ea6df672087be6578857 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d89496e56a910258409d6f884b7e7b4c3e6e6fee5060ea6df672087be6578857->enter($__internal_d89496e56a910258409d6f884b7e7b4c3e6e6fee5060ea6df672087be6578857_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_d89496e56a910258409d6f884b7e7b4c3e6e6fee5060ea6df672087be6578857->leave($__internal_d89496e56a910258409d6f884b7e7b4c3e6e6fee5060ea6df672087be6578857_prof);

        
        $__internal_5d839dd64c31e5c0d6b6935484ec33f0f23e812b2d725dc99765f07a1b16c4bc->leave($__internal_5d839dd64c31e5c0d6b6935484ec33f0f23e812b2d725dc99765f07a1b16c4bc_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a310eac33b0e9a0ff886e7b01862de30c52474326137012c5a8ceb3f6f006b05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a310eac33b0e9a0ff886e7b01862de30c52474326137012c5a8ceb3f6f006b05->enter($__internal_a310eac33b0e9a0ff886e7b01862de30c52474326137012c5a8ceb3f6f006b05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_9c8c40dfeed7f09c0bb1983190b506c071b4133c8dbe326c35cbbad3f0502910 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c8c40dfeed7f09c0bb1983190b506c071b4133c8dbe326c35cbbad3f0502910->enter($__internal_9c8c40dfeed7f09c0bb1983190b506c071b4133c8dbe326c35cbbad3f0502910_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_9c8c40dfeed7f09c0bb1983190b506c071b4133c8dbe326c35cbbad3f0502910->leave($__internal_9c8c40dfeed7f09c0bb1983190b506c071b4133c8dbe326c35cbbad3f0502910_prof);

        
        $__internal_a310eac33b0e9a0ff886e7b01862de30c52474326137012c5a8ceb3f6f006b05->leave($__internal_a310eac33b0e9a0ff886e7b01862de30c52474326137012c5a8ceb3f6f006b05_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_493fffe4391e2605078e2e48169d84464d108909b24cbe9753c3f6dc6e5cff4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_493fffe4391e2605078e2e48169d84464d108909b24cbe9753c3f6dc6e5cff4d->enter($__internal_493fffe4391e2605078e2e48169d84464d108909b24cbe9753c3f6dc6e5cff4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_02e5cd7924291e7ab294dffbf80f89998ecad92b2227c6ef358b8b5521c1d620 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02e5cd7924291e7ab294dffbf80f89998ecad92b2227c6ef358b8b5521c1d620->enter($__internal_02e5cd7924291e7ab294dffbf80f89998ecad92b2227c6ef358b8b5521c1d620_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_02e5cd7924291e7ab294dffbf80f89998ecad92b2227c6ef358b8b5521c1d620->leave($__internal_02e5cd7924291e7ab294dffbf80f89998ecad92b2227c6ef358b8b5521c1d620_prof);

        
        $__internal_493fffe4391e2605078e2e48169d84464d108909b24cbe9753c3f6dc6e5cff4d->leave($__internal_493fffe4391e2605078e2e48169d84464d108909b24cbe9753c3f6dc6e5cff4d_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_93352f2257f29ab3f80673b2640db24f9c5d1b9f5622f7c6434a8aae269859e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93352f2257f29ab3f80673b2640db24f9c5d1b9f5622f7c6434a8aae269859e4->enter($__internal_93352f2257f29ab3f80673b2640db24f9c5d1b9f5622f7c6434a8aae269859e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_17e86e4a51563a52c57ed8ea4830fa43d6a38d0b9d2b2436bba07ce37fc55f45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17e86e4a51563a52c57ed8ea4830fa43d6a38d0b9d2b2436bba07ce37fc55f45->enter($__internal_17e86e4a51563a52c57ed8ea4830fa43d6a38d0b9d2b2436bba07ce37fc55f45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_17e86e4a51563a52c57ed8ea4830fa43d6a38d0b9d2b2436bba07ce37fc55f45->leave($__internal_17e86e4a51563a52c57ed8ea4830fa43d6a38d0b9d2b2436bba07ce37fc55f45_prof);

        
        $__internal_93352f2257f29ab3f80673b2640db24f9c5d1b9f5622f7c6434a8aae269859e4->leave($__internal_93352f2257f29ab3f80673b2640db24f9c5d1b9f5622f7c6434a8aae269859e4_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/var/www/html/componenteRouting/app/Resources/views/base.html.twig");
    }
}
