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

/* home/frontend/index.html.twig */
class __TwigTemplate_a041fd06386b6ff4216a723684146114 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/frontend/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/frontend/index.html.twig"));

        $this->parent = $this->loadTemplate("home/frontend/base.html.twig", "home/frontend/index.html.twig", 1);
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

        echo "Homepage";
        
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
        echo "<div class=\"row\">
    <div class=\"col-3\"></div>
    <div class=\"col\">
        <div class=\"row\">
            <div class=\"col-md mt-3\">

                <div class=\"title\">
                    <h4>New Releases</h4>
                </div>

                <hr>
            </div>
        </div>

        <div class=\"row\">
            ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tapes"]) || array_key_exists("tapes", $context) ? $context["tapes"] : (function () { throw new RuntimeError('Variable "tapes" does not exist.', 23, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
            // line 24
            echo "                <div class=\"col-2\">
                    <div class=\"row\">
                        <div class=\"col\">
                        <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("view_tape", ["id" => twig_get_attribute($this->env, $this->source, $context["t"], "id", [], "any", false, false, false, 27)]), "html", null, true);
            echo "\">
                            ";
            // line 28
            if ((twig_get_attribute($this->env, $this->source, $context["t"], "cover", [], "any", true, true, false, 28) && (twig_get_attribute($this->env, $this->source, $context["t"], "cover", [], "any", false, false, false, 28) != ""))) {
                // line 29
                echo "                            <img src=\"/uploads/covers/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["t"], "cover", [], "any", false, false, false, 29), "html", null, true);
                echo "\" width=\"100%\" alt=\"cover\">
                            ";
            } else {
                // line 31
                echo "                                <img src=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["genius"]) || array_key_exists("genius", $context) ? $context["genius"] : (function () { throw new RuntimeError('Variable "genius" does not exist.', 31, $this->source); })()), "getArtistProfilePic", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["t"], "getMainArtist", [], "any", false, false, false, 31), "name", [], "any", false, false, false, 31)], "method", false, false, false, 31), "html", null, true);
                echo "\" alt=\"\" class=\"avatar-img\">
                                ";
            }
            // line 33
            echo "                        </a>
                    </div>
                    </div>

                    <div class=\"row mt-3\">
                        <div class=\"col\">
                            <h5>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["t"], "name", [], "any", false, false, false, 39), "html", null, true);
            echo "</h5>
                        </div>
                    </div>

                    <div class=\"row\">
                        <div class=\"col\">
                            <span class=\"badge bg-secondary\"><a href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("view_artist", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["t"], "getMainArtist", [], "any", false, false, false, 45), "id", [], "any", false, false, false, 45)]), "html", null, true);
            echo "\" class=\"text-white\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["t"], "getMainArtist", [], "any", false, false, false, 45), "name", [], "any", false, false, false, 45), "html", null, true);
            echo "</a></span>
                        </div>
                    </div>

                    <hr />

                    <div class=\"row mt-3\">
                        <div class=\"col\">
                                <span class=\"badge bg-success\"><strong>";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["t"], "getAverageScore", [], "any", false, false, false, 53), "html", null, true);
            echo "</strong></span> - Average Score
                        </div>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "        </div>
    </div>
    <div class=\"col-3\"></div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "home/frontend/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 58,  181 => 53,  168 => 45,  159 => 39,  151 => 33,  145 => 31,  139 => 29,  137 => 28,  133 => 27,  128 => 24,  124 => 23,  107 => 8,  97 => 7,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'home/frontend/base.html.twig' %}

{% block title %}Homepage{% endblock %}

{% block header %}{% endblock %}

{% block main %}
<div class=\"row\">
    <div class=\"col-3\"></div>
    <div class=\"col\">
        <div class=\"row\">
            <div class=\"col-md mt-3\">

                <div class=\"title\">
                    <h4>New Releases</h4>
                </div>

                <hr>
            </div>
        </div>

        <div class=\"row\">
            {% for t in tapes %}
                <div class=\"col-2\">
                    <div class=\"row\">
                        <div class=\"col\">
                        <a href=\"{{ path('view_tape', {'id': t.id}) }}\">
                            {% if t.cover is defined and t.cover != '' %}
                            <img src=\"/uploads/covers/{{ t.cover }}\" width=\"100%\" alt=\"cover\">
                            {% else %}
                                <img src=\"{{ genius.getArtistProfilePic(t.getMainArtist.name) }}\" alt=\"\" class=\"avatar-img\">
                                {% endif %}
                        </a>
                    </div>
                    </div>

                    <div class=\"row mt-3\">
                        <div class=\"col\">
                            <h5>{{ t.name }}</h5>
                        </div>
                    </div>

                    <div class=\"row\">
                        <div class=\"col\">
                            <span class=\"badge bg-secondary\"><a href=\"{{ path('view_artist', {'id': t.getMainArtist.id}) }}\" class=\"text-white\">{{ t.getMainArtist.name }}</a></span>
                        </div>
                    </div>

                    <hr />

                    <div class=\"row mt-3\">
                        <div class=\"col\">
                                <span class=\"badge bg-success\"><strong>{{ t.getAverageScore }}</strong></span> - Average Score
                        </div>
                    </div>
                </div>
            {% endfor %}
        </div>
    </div>
    <div class=\"col-3\"></div>
</div>
{% endblock %}
", "home/frontend/index.html.twig", "/var/www/symfony/templates/home/frontend/index.html.twig");
    }
}
