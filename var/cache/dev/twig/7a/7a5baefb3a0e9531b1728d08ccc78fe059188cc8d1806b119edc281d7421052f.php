<?php

/* @WebProfiler/Profiler/toolbar.html.twig */
class __TwigTemplate_bb0847fee97d97553f3d39d4c0b98ce36d40639c3201be527fe3b4cecb784137 extends Twig_Template
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
        $__internal_66fcc46257b4d33e914f7e61c5ce3cfe732f32ab46eabb09fb28cf720553ed81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66fcc46257b4d33e914f7e61c5ce3cfe732f32ab46eabb09fb28cf720553ed81->enter($__internal_66fcc46257b4d33e914f7e61c5ce3cfe732f32ab46eabb09fb28cf720553ed81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar.html.twig"));

        $__internal_0b8d595c604dd4e7d7510ad0e585d2906790d68bea8338c2a553961876cd5d25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b8d595c604dd4e7d7510ad0e585d2906790d68bea8338c2a553961876cd5d25->enter($__internal_0b8d595c604dd4e7d7510ad0e585d2906790d68bea8338c2a553961876cd5d25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar.html.twig"));

        // line 1
        echo "<!-- START of Symfony Web Debug Toolbar -->
";
        // line 2
        if (("normal" != ($context["position"] ?? $this->getContext($context, "position")))) {
            // line 3
            echo "    <div id=\"sfMiniToolbar-";
            echo twig_escape_filter($this->env, ($context["token"] ?? $this->getContext($context, "token")), "html", null, true);
            echo "\" class=\"sf-minitoolbar\" data-no-turbolink>
        <a href=\"#\" title=\"Show Symfony toolbar\" tabindex=\"-1\" id=\"sfToolbarMiniToggler-";
            // line 4
            echo twig_escape_filter($this->env, ($context["token"] ?? $this->getContext($context, "token")), "html", null, true);
            echo "\" accesskey=\"D\">
            ";
            // line 5
            echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
            echo "
        </a>
    </div>
    <style";
            // line 8
            if (($context["csp_style_nonce"] ?? $this->getContext($context, "csp_style_nonce"))) {
                echo " nonce=\"";
                echo twig_escape_filter($this->env, ($context["csp_style_nonce"] ?? $this->getContext($context, "csp_style_nonce")), "html", null, true);
                echo "\"";
            }
            echo ">
        ";
            // line 9
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar.css.twig", array("position" => ($context["position"] ?? $this->getContext($context, "position")), "floatable" => true));
            echo "
    </style>
    <div id=\"sfToolbarClearer-";
            // line 11
            echo twig_escape_filter($this->env, ($context["token"] ?? $this->getContext($context, "token")), "html", null, true);
            echo "\" class=\"sf-toolbar-clearer\"></div>
";
        }
        // line 13
        echo "
<div id=\"sfToolbarMainContent-";
        // line 14
        echo twig_escape_filter($this->env, ($context["token"] ?? $this->getContext($context, "token")), "html", null, true);
        echo "\" class=\"sf-toolbarreset clear-fix\" data-no-turbolink>
    ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["templates"] ?? $this->getContext($context, "templates")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["name"] => $context["template"]) {
            // line 16
            echo "        ";
            $__internal_9881beea69311c9f70bc74c2649579cde5e5245e097f2dfb004f5883deb6e67b = array("collector" => $this->getAttribute(            // line 17
($context["profile"] ?? $this->getContext($context, "profile")), "getcollector", array(0 => $context["name"]), "method"), "profiler_url" =>             // line 18
($context["profiler_url"] ?? $this->getContext($context, "profiler_url")), "token" => $this->getAttribute(            // line 19
($context["profile"] ?? $this->getContext($context, "profile")), "token", array()), "name" =>             // line 20
$context["name"], "profiler_markup_version" =>             // line 21
($context["profiler_markup_version"] ?? $this->getContext($context, "profiler_markup_version")), "csp_script_nonce" =>             // line 22
($context["csp_script_nonce"] ?? $this->getContext($context, "csp_script_nonce")), "csp_style_nonce" =>             // line 23
($context["csp_style_nonce"] ?? $this->getContext($context, "csp_style_nonce")));
            if (!is_array($__internal_9881beea69311c9f70bc74c2649579cde5e5245e097f2dfb004f5883deb6e67b)) {
                throw new Twig_Error_Runtime('Variables passed to the "with" tag must be a hash.');
            }
            $context['_parent'] = $context;
            $context = array_merge($context, $__internal_9881beea69311c9f70bc74c2649579cde5e5245e097f2dfb004f5883deb6e67b);
            // line 25
            echo "            ";
            $this->loadTemplate($context["template"], "@WebProfiler/Profiler/toolbar.html.twig", 25)->displayBlock("toolbar", $context);
            echo "
        ";
            $context = $context['_parent'];
            // line 27
            echo "    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['template'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "
    ";
        // line 29
        if (("normal" != ($context["position"] ?? $this->getContext($context, "position")))) {
            // line 30
            echo "        <a class=\"hide-button\" id=\"sfToolbarHideButton-";
            echo twig_escape_filter($this->env, ($context["token"] ?? $this->getContext($context, "token")), "html", null, true);
            echo "\" title=\"Close Toolbar\" tabindex=\"-1\" accesskey=\"D\">
            ";
            // line 31
            echo twig_include($this->env, $context, "@WebProfiler/Icon/close.svg");
            echo "
        </a>
    ";
        }
        // line 34
        echo "</div>
<!-- END of Symfony Web Debug Toolbar -->
";
        
        $__internal_66fcc46257b4d33e914f7e61c5ce3cfe732f32ab46eabb09fb28cf720553ed81->leave($__internal_66fcc46257b4d33e914f7e61c5ce3cfe732f32ab46eabb09fb28cf720553ed81_prof);

        
        $__internal_0b8d595c604dd4e7d7510ad0e585d2906790d68bea8338c2a553961876cd5d25->leave($__internal_0b8d595c604dd4e7d7510ad0e585d2906790d68bea8338c2a553961876cd5d25_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 34,  132 => 31,  127 => 30,  125 => 29,  122 => 28,  108 => 27,  102 => 25,  95 => 23,  94 => 22,  93 => 21,  92 => 20,  91 => 19,  90 => 18,  89 => 17,  87 => 16,  70 => 15,  66 => 14,  63 => 13,  58 => 11,  53 => 9,  45 => 8,  39 => 5,  35 => 4,  30 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- START of Symfony Web Debug Toolbar -->
{% if 'normal' != position %}
    <div id=\"sfMiniToolbar-{{ token }}\" class=\"sf-minitoolbar\" data-no-turbolink>
        <a href=\"#\" title=\"Show Symfony toolbar\" tabindex=\"-1\" id=\"sfToolbarMiniToggler-{{ token }}\" accesskey=\"D\">
            {{ include('@WebProfiler/Icon/symfony.svg') }}
        </a>
    </div>
    <style{% if csp_style_nonce %} nonce=\"{{ csp_style_nonce }}\"{% endif %}>
        {{ include('@WebProfiler/Profiler/toolbar.css.twig', { 'position': position, 'floatable': true }) }}
    </style>
    <div id=\"sfToolbarClearer-{{ token }}\" class=\"sf-toolbar-clearer\"></div>
{% endif %}

<div id=\"sfToolbarMainContent-{{ token }}\" class=\"sf-toolbarreset clear-fix\" data-no-turbolink>
    {% for name, template in templates %}
        {% with {
            collector: profile.getcollector(name),
            profiler_url: profiler_url,
            token: profile.token,
            name: name,
            profiler_markup_version: profiler_markup_version,
            csp_script_nonce: csp_script_nonce,
            csp_style_nonce: csp_style_nonce
          } %}
            {{ block('toolbar', template) }}
        {% endwith %}
    {% endfor %}

    {% if 'normal' != position %}
        <a class=\"hide-button\" id=\"sfToolbarHideButton-{{ token }}\" title=\"Close Toolbar\" tabindex=\"-1\" accesskey=\"D\">
            {{ include('@WebProfiler/Icon/close.svg') }}
        </a>
    {% endif %}
</div>
<!-- END of Symfony Web Debug Toolbar -->
", "@WebProfiler/Profiler/toolbar.html.twig", "/var/www/html/componenteRouting/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar.html.twig");
    }
}
