<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_3d6e33a93c02a64ba591ff5411c9967b1351b12962c96502b24feee67119e959 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_70c479604afe3b817046cebde3b676faff8da6a999a15fa60a540f459b912b36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70c479604afe3b817046cebde3b676faff8da6a999a15fa60a540f459b912b36->enter($__internal_70c479604afe3b817046cebde3b676faff8da6a999a15fa60a540f459b912b36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_eb8a971412e392d4cdf9061972807791bfc7e8ceb6f69beced0ac5c541a4c4a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb8a971412e392d4cdf9061972807791bfc7e8ceb6f69beced0ac5c541a4c4a4->enter($__internal_eb8a971412e392d4cdf9061972807791bfc7e8ceb6f69beced0ac5c541a4c4a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_70c479604afe3b817046cebde3b676faff8da6a999a15fa60a540f459b912b36->leave($__internal_70c479604afe3b817046cebde3b676faff8da6a999a15fa60a540f459b912b36_prof);

        
        $__internal_eb8a971412e392d4cdf9061972807791bfc7e8ceb6f69beced0ac5c541a4c4a4->leave($__internal_eb8a971412e392d4cdf9061972807791bfc7e8ceb6f69beced0ac5c541a4c4a4_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ebc7b12819f6d56b2f9c68044c54426aa11c24dc0d82085dbb4e7d81330d65b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebc7b12819f6d56b2f9c68044c54426aa11c24dc0d82085dbb4e7d81330d65b8->enter($__internal_ebc7b12819f6d56b2f9c68044c54426aa11c24dc0d82085dbb4e7d81330d65b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_421fcff916afb6eeea3a518efdbba0b9a85e3b80f9d52e46dbfde34ed86ec29b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_421fcff916afb6eeea3a518efdbba0b9a85e3b80f9d52e46dbfde34ed86ec29b->enter($__internal_421fcff916afb6eeea3a518efdbba0b9a85e3b80f9d52e46dbfde34ed86ec29b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_421fcff916afb6eeea3a518efdbba0b9a85e3b80f9d52e46dbfde34ed86ec29b->leave($__internal_421fcff916afb6eeea3a518efdbba0b9a85e3b80f9d52e46dbfde34ed86ec29b_prof);

        
        $__internal_ebc7b12819f6d56b2f9c68044c54426aa11c24dc0d82085dbb4e7d81330d65b8->leave($__internal_ebc7b12819f6d56b2f9c68044c54426aa11c24dc0d82085dbb4e7d81330d65b8_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/var/www/html/componenteRouting/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
