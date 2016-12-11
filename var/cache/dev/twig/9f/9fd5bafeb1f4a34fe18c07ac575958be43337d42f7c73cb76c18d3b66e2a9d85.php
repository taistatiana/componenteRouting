<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_d275c52649b26d985d07a86809fb551a37be2ac1893e3e45e88368560ff4bec3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_6445f8b558bc8ac094292de9ea0eaeb44dc656268180ddbd51f8f6b462ccd0ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6445f8b558bc8ac094292de9ea0eaeb44dc656268180ddbd51f8f6b462ccd0ef->enter($__internal_6445f8b558bc8ac094292de9ea0eaeb44dc656268180ddbd51f8f6b462ccd0ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_24d607de26650b91886613f0a811cace548c7ecc129bde5162f7e6ab23a030a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24d607de26650b91886613f0a811cace548c7ecc129bde5162f7e6ab23a030a6->enter($__internal_24d607de26650b91886613f0a811cace548c7ecc129bde5162f7e6ab23a030a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6445f8b558bc8ac094292de9ea0eaeb44dc656268180ddbd51f8f6b462ccd0ef->leave($__internal_6445f8b558bc8ac094292de9ea0eaeb44dc656268180ddbd51f8f6b462ccd0ef_prof);

        
        $__internal_24d607de26650b91886613f0a811cace548c7ecc129bde5162f7e6ab23a030a6->leave($__internal_24d607de26650b91886613f0a811cace548c7ecc129bde5162f7e6ab23a030a6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_cfeedda8455e5615f8954bee4b9be810e62e112202355384a0063879938b7354 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfeedda8455e5615f8954bee4b9be810e62e112202355384a0063879938b7354->enter($__internal_cfeedda8455e5615f8954bee4b9be810e62e112202355384a0063879938b7354_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_440e711e0555acfb96a1a8b92a758b4fa5b365695bdd117a3ac2156a301f0950 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_440e711e0555acfb96a1a8b92a758b4fa5b365695bdd117a3ac2156a301f0950->enter($__internal_440e711e0555acfb96a1a8b92a758b4fa5b365695bdd117a3ac2156a301f0950_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_440e711e0555acfb96a1a8b92a758b4fa5b365695bdd117a3ac2156a301f0950->leave($__internal_440e711e0555acfb96a1a8b92a758b4fa5b365695bdd117a3ac2156a301f0950_prof);

        
        $__internal_cfeedda8455e5615f8954bee4b9be810e62e112202355384a0063879938b7354->leave($__internal_cfeedda8455e5615f8954bee4b9be810e62e112202355384a0063879938b7354_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ced07825715c26c29be2d5183946a18bba3dd32b2619aaca2ed3aaa91708b590 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ced07825715c26c29be2d5183946a18bba3dd32b2619aaca2ed3aaa91708b590->enter($__internal_ced07825715c26c29be2d5183946a18bba3dd32b2619aaca2ed3aaa91708b590_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_c5f97b1897eee45807c08bab07e204cea5525d85b5c5b3739335529d27f79495 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5f97b1897eee45807c08bab07e204cea5525d85b5c5b3739335529d27f79495->enter($__internal_c5f97b1897eee45807c08bab07e204cea5525d85b5c5b3739335529d27f79495_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_c5f97b1897eee45807c08bab07e204cea5525d85b5c5b3739335529d27f79495->leave($__internal_c5f97b1897eee45807c08bab07e204cea5525d85b5c5b3739335529d27f79495_prof);

        
        $__internal_ced07825715c26c29be2d5183946a18bba3dd32b2619aaca2ed3aaa91708b590->leave($__internal_ced07825715c26c29be2d5183946a18bba3dd32b2619aaca2ed3aaa91708b590_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_875975a9607329e536bafdb2a03eb8cce635242c8fbd33c58cbce562e452ce13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_875975a9607329e536bafdb2a03eb8cce635242c8fbd33c58cbce562e452ce13->enter($__internal_875975a9607329e536bafdb2a03eb8cce635242c8fbd33c58cbce562e452ce13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4a8cc95f8dec756900c661eab16023d812e97591fb0d197b154ae9c85476211d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a8cc95f8dec756900c661eab16023d812e97591fb0d197b154ae9c85476211d->enter($__internal_4a8cc95f8dec756900c661eab16023d812e97591fb0d197b154ae9c85476211d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_4a8cc95f8dec756900c661eab16023d812e97591fb0d197b154ae9c85476211d->leave($__internal_4a8cc95f8dec756900c661eab16023d812e97591fb0d197b154ae9c85476211d_prof);

        
        $__internal_875975a9607329e536bafdb2a03eb8cce635242c8fbd33c58cbce562e452ce13->leave($__internal_875975a9607329e536bafdb2a03eb8cce635242c8fbd33c58cbce562e452ce13_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/var/www/html/componenteRouting/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
