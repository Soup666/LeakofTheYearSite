<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* home/frontend/top_leaks.html.twig */
class __TwigTemplate_1355385841c9d3241ceff4920c7255a2 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'header' => [$this, 'block_header'],
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "home/frontend/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/frontend/top_leaks.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/frontend/top_leaks.html.twig"));

        $this->parent = $this->loadTemplate("home/frontend/base.html.twig", "home/frontend/top_leaks.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Top Leaks";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 7
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 8
        echo "
    <div class=\"row\">
        <div class=\"col-3\"></div>
        <div class=\"col\">
            <div class=\"row\">
                <div class=\"col-md mt-3\">

                    <div class=\"title\">
                        <h4>Top Rated Leaks</h4>
                    </div>

                    <hr>

                    ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["leaks"]) || array_key_exists("leaks", $context) ? $context["leaks"] : (function () { throw new RuntimeError('Variable "leaks" does not exist.', 21, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["leak"]) {
            // line 22
            echo "                        <div class=\"row\">
                            <div class=\"col-md-2\">
                                <img src=\"/uploads/covers/";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["leak"], "cover", [], "any", false, false, false, 24), "html", null, true);
            echo "\" alt=\"leak image\" class=\"img-fluid\">
                            </div>
                            <div class=\"col-md-8\">
                                <h5>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["leak"], "name", [], "any", false, false, false, 27), "html", null, true);
            echo "</h5>
                                <span>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["leak"], "getDescriptionShort", [], "any", false, false, false, 28), "html", null, true);
            echo "</span>
                                <p><a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("view_tape", ["id" => twig_get_attribute($this->env, $this->source, $context["leak"], "id", [], "any", false, false, false, 29)]), "html", null, true);
            echo "\">Listen now</a></p>
                            </div>
                            <div class=\"col-md-2 text-center\">

                                <span class=\"h1 badge bg-success\">";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["leak"], "getAverageScore", [], "any", false, false, false, 33), "html", null, true);
            echo "</span>
                            </div>
                        </div>
                        <hr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['leak'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "                </div>
            </div>
        </div>
        <div class=\"col-3\"></div>
    </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "home/frontend/top_leaks.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 38,  151 => 33,  144 => 29,  140 => 28,  136 => 27,  130 => 24,  126 => 22,  122 => 21,  107 => 8,  97 => 7,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'home/frontend/base.html.twig' %}

{% block title %}Top Leaks{% endblock %}

{% block header %}{% endblock %}

{% block main %}

    <div class=\"row\">
        <div class=\"col-3\"></div>
        <div class=\"col\">
            <div class=\"row\">
                <div class=\"col-md mt-3\">

                    <div class=\"title\">
                        <h4>Top Rated Leaks</h4>
                    </div>

                    <hr>

                    {% for leak in leaks %}
                        <div class=\"row\">
                            <div class=\"col-md-2\">
                                <img src=\"/uploads/covers/{{ leak.cover }}\" alt=\"leak image\" class=\"img-fluid\">
                            </div>
                            <div class=\"col-md-8\">
                                <h5>{{ leak.name }}</h5>
                                <span>{{ leak.getDescriptionShort }}</span>
                                <p><a href=\"{{ path('view_tape', {'id': leak.id}) }}\">Listen now</a></p>
                            </div>
                            <div class=\"col-md-2 text-center\">

                                <span class=\"h1 badge bg-success\">{{ leak.getAverageScore }}</span>
                            </div>
                        </div>
                        <hr>
                    {% endfor %}
                </div>
            </div>
        </div>
        <div class=\"col-3\"></div>
    </div>

{% endblock %}", "home/frontend/top_leaks.html.twig", "/var/www/symfony/templates/home/frontend/top_leaks.html.twig");
    }
}
