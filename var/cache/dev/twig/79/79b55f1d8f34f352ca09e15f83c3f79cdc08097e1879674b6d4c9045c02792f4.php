<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_cdb121b994fedb7e316fa0ae9f9b9a37bf91d06fc1be2535810f0a80a7cdc8ac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_599fba6ee2adeef1b52fa67a7b55e002ddb2d7d25e3bdeb088d185115f6e066f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_599fba6ee2adeef1b52fa67a7b55e002ddb2d7d25e3bdeb088d185115f6e066f->enter($__internal_599fba6ee2adeef1b52fa67a7b55e002ddb2d7d25e3bdeb088d185115f6e066f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_61f442a7cef3055ac97fd57da46bc9985f11705c804a251ccacc30f882936b0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61f442a7cef3055ac97fd57da46bc9985f11705c804a251ccacc30f882936b0c->enter($__internal_61f442a7cef3055ac97fd57da46bc9985f11705c804a251ccacc30f882936b0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_599fba6ee2adeef1b52fa67a7b55e002ddb2d7d25e3bdeb088d185115f6e066f->leave($__internal_599fba6ee2adeef1b52fa67a7b55e002ddb2d7d25e3bdeb088d185115f6e066f_prof);

        
        $__internal_61f442a7cef3055ac97fd57da46bc9985f11705c804a251ccacc30f882936b0c->leave($__internal_61f442a7cef3055ac97fd57da46bc9985f11705c804a251ccacc30f882936b0c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f40525bdbbba84ac88fcebb8b9067314a5f9d8ee8743b64e4b61ae2dd6bb56a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f40525bdbbba84ac88fcebb8b9067314a5f9d8ee8743b64e4b61ae2dd6bb56a3->enter($__internal_f40525bdbbba84ac88fcebb8b9067314a5f9d8ee8743b64e4b61ae2dd6bb56a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_ffb04d823f52451c019b2c0f4dc9492c0f323b9a4c995460a05b95571de7a878 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffb04d823f52451c019b2c0f4dc9492c0f323b9a4c995460a05b95571de7a878->enter($__internal_ffb04d823f52451c019b2c0f4dc9492c0f323b9a4c995460a05b95571de7a878_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ffb04d823f52451c019b2c0f4dc9492c0f323b9a4c995460a05b95571de7a878->leave($__internal_ffb04d823f52451c019b2c0f4dc9492c0f323b9a4c995460a05b95571de7a878_prof);

        
        $__internal_f40525bdbbba84ac88fcebb8b9067314a5f9d8ee8743b64e4b61ae2dd6bb56a3->leave($__internal_f40525bdbbba84ac88fcebb8b9067314a5f9d8ee8743b64e4b61ae2dd6bb56a3_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f1ae24224a7a32516d53216366edb5d71b77f5dc9ae6946650d1b088a42ec79d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1ae24224a7a32516d53216366edb5d71b77f5dc9ae6946650d1b088a42ec79d->enter($__internal_f1ae24224a7a32516d53216366edb5d71b77f5dc9ae6946650d1b088a42ec79d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_04495a853a9ce502c84227501c6a302538e98442dacfc54d35af72c57d6a0c7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04495a853a9ce502c84227501c6a302538e98442dacfc54d35af72c57d6a0c7f->enter($__internal_04495a853a9ce502c84227501c6a302538e98442dacfc54d35af72c57d6a0c7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_04495a853a9ce502c84227501c6a302538e98442dacfc54d35af72c57d6a0c7f->leave($__internal_04495a853a9ce502c84227501c6a302538e98442dacfc54d35af72c57d6a0c7f_prof);

        
        $__internal_f1ae24224a7a32516d53216366edb5d71b77f5dc9ae6946650d1b088a42ec79d->leave($__internal_f1ae24224a7a32516d53216366edb5d71b77f5dc9ae6946650d1b088a42ec79d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_70a8d7e79ba4c257d556334dfa117626f714c7b0890ed37a8a66ac2d049b35f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70a8d7e79ba4c257d556334dfa117626f714c7b0890ed37a8a66ac2d049b35f8->enter($__internal_70a8d7e79ba4c257d556334dfa117626f714c7b0890ed37a8a66ac2d049b35f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_282ec9ee764d8b9ac190f20d0adc656a349d00332896816882fa64f6b3f33030 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_282ec9ee764d8b9ac190f20d0adc656a349d00332896816882fa64f6b3f33030->enter($__internal_282ec9ee764d8b9ac190f20d0adc656a349d00332896816882fa64f6b3f33030_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_282ec9ee764d8b9ac190f20d0adc656a349d00332896816882fa64f6b3f33030->leave($__internal_282ec9ee764d8b9ac190f20d0adc656a349d00332896816882fa64f6b3f33030_prof);

        
        $__internal_70a8d7e79ba4c257d556334dfa117626f714c7b0890ed37a8a66ac2d049b35f8->leave($__internal_70a8d7e79ba4c257d556334dfa117626f714c7b0890ed37a8a66ac2d049b35f8_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/componenteRouting/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
