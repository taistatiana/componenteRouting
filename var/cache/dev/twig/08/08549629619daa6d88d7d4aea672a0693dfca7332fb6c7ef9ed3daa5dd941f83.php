<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_e62b9f44c1a74674d7b8d6a0d138e2347bb2a94fc5cd59e15b833fb56d9fb565 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0043c14737b33f718cd189fe71c6df885b8172565501add5a65807cfcb02624c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0043c14737b33f718cd189fe71c6df885b8172565501add5a65807cfcb02624c->enter($__internal_0043c14737b33f718cd189fe71c6df885b8172565501add5a65807cfcb02624c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_5b24c47e5be7c8c08633c1081d27e5d1568926a99ea643b58261e9543b93c984 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b24c47e5be7c8c08633c1081d27e5d1568926a99ea643b58261e9543b93c984->enter($__internal_5b24c47e5be7c8c08633c1081d27e5d1568926a99ea643b58261e9543b93c984_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0043c14737b33f718cd189fe71c6df885b8172565501add5a65807cfcb02624c->leave($__internal_0043c14737b33f718cd189fe71c6df885b8172565501add5a65807cfcb02624c_prof);

        
        $__internal_5b24c47e5be7c8c08633c1081d27e5d1568926a99ea643b58261e9543b93c984->leave($__internal_5b24c47e5be7c8c08633c1081d27e5d1568926a99ea643b58261e9543b93c984_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9aa5745bc4c05a257d9d2296cd175fb860aef53a4aac55a274921f1eb989f83e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9aa5745bc4c05a257d9d2296cd175fb860aef53a4aac55a274921f1eb989f83e->enter($__internal_9aa5745bc4c05a257d9d2296cd175fb860aef53a4aac55a274921f1eb989f83e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a38c79650d374969820edd8e2f6f826c816e6430af302799c03a9db7ebda44e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a38c79650d374969820edd8e2f6f826c816e6430af302799c03a9db7ebda44e6->enter($__internal_a38c79650d374969820edd8e2f6f826c816e6430af302799c03a9db7ebda44e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_a38c79650d374969820edd8e2f6f826c816e6430af302799c03a9db7ebda44e6->leave($__internal_a38c79650d374969820edd8e2f6f826c816e6430af302799c03a9db7ebda44e6_prof);

        
        $__internal_9aa5745bc4c05a257d9d2296cd175fb860aef53a4aac55a274921f1eb989f83e->leave($__internal_9aa5745bc4c05a257d9d2296cd175fb860aef53a4aac55a274921f1eb989f83e_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_21b256f06e71d2c01e3bb3c4d321e78088468663b2d236df5b5803617858f385 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21b256f06e71d2c01e3bb3c4d321e78088468663b2d236df5b5803617858f385->enter($__internal_21b256f06e71d2c01e3bb3c4d321e78088468663b2d236df5b5803617858f385_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2dd67a3c4c05254b88a61d3f9b124ac99ad3609dac1d0a40db8cde2bcafe6ece = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2dd67a3c4c05254b88a61d3f9b124ac99ad3609dac1d0a40db8cde2bcafe6ece->enter($__internal_2dd67a3c4c05254b88a61d3f9b124ac99ad3609dac1d0a40db8cde2bcafe6ece_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_2dd67a3c4c05254b88a61d3f9b124ac99ad3609dac1d0a40db8cde2bcafe6ece->leave($__internal_2dd67a3c4c05254b88a61d3f9b124ac99ad3609dac1d0a40db8cde2bcafe6ece_prof);

        
        $__internal_21b256f06e71d2c01e3bb3c4d321e78088468663b2d236df5b5803617858f385->leave($__internal_21b256f06e71d2c01e3bb3c4d321e78088468663b2d236df5b5803617858f385_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_b49014c01dbc83c6039aef082be55fd75df5d66190d3a2ca1612ded7a37e33b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b49014c01dbc83c6039aef082be55fd75df5d66190d3a2ca1612ded7a37e33b6->enter($__internal_b49014c01dbc83c6039aef082be55fd75df5d66190d3a2ca1612ded7a37e33b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a6a9a7cffc56062ac771d4b0993fe18afe53a6aa3405ecc0cabfd4c0f81ffcce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6a9a7cffc56062ac771d4b0993fe18afe53a6aa3405ecc0cabfd4c0f81ffcce->enter($__internal_a6a9a7cffc56062ac771d4b0993fe18afe53a6aa3405ecc0cabfd4c0f81ffcce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_a6a9a7cffc56062ac771d4b0993fe18afe53a6aa3405ecc0cabfd4c0f81ffcce->leave($__internal_a6a9a7cffc56062ac771d4b0993fe18afe53a6aa3405ecc0cabfd4c0f81ffcce_prof);

        
        $__internal_b49014c01dbc83c6039aef082be55fd75df5d66190d3a2ca1612ded7a37e33b6->leave($__internal_b49014c01dbc83c6039aef082be55fd75df5d66190d3a2ca1612ded7a37e33b6_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/var/www/html/componenteRouting/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
