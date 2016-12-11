<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_42903bb814699c2ef044f75642fb7d99d1befea73c433d2804dd22cdf22cc625 extends Twig_Template
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
        $__internal_a4a2420e98dd1c7511322c38593730f7cc1e0544731301646fcfc5134af02816 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4a2420e98dd1c7511322c38593730f7cc1e0544731301646fcfc5134af02816->enter($__internal_a4a2420e98dd1c7511322c38593730f7cc1e0544731301646fcfc5134af02816_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_688770ac5b387bb9748dbcd399c690d732671a0fb7aed7dba04c34c620cf099c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_688770ac5b387bb9748dbcd399c690d732671a0fb7aed7dba04c34c620cf099c->enter($__internal_688770ac5b387bb9748dbcd399c690d732671a0fb7aed7dba04c34c620cf099c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_a4a2420e98dd1c7511322c38593730f7cc1e0544731301646fcfc5134af02816->leave($__internal_a4a2420e98dd1c7511322c38593730f7cc1e0544731301646fcfc5134af02816_prof);

        
        $__internal_688770ac5b387bb9748dbcd399c690d732671a0fb7aed7dba04c34c620cf099c->leave($__internal_688770ac5b387bb9748dbcd399c690d732671a0fb7aed7dba04c34c620cf099c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "@Twig/Exception/traces.txt.twig", "/var/www/html/componenteRouting/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.txt.twig");
    }
}
