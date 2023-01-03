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

/* artists/frontend/view.html.twig */
class __TwigTemplate_caffcfd37042ef52d81616aa5bf3d631 extends Template
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
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doGetParent(array $context)
    {
        // line 10
        return "home/frontend/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "artists/frontend/view.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "artists/frontend/view.html.twig"));

        $this->parent = $this->loadTemplate("home/frontend/base.html.twig", "artists/frontend/view.html.twig", 10);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 12
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

    // line 14
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

    // line 16
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 17
        echo "<div class=\"row\">
    <div class=\"col-3\"></div>
    <div class=\"col-6\">
        <div class=\"row mt-3\">
            <h2>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["artist"]) || array_key_exists("artist", $context) ? $context["artist"] : (function () { throw new RuntimeError('Variable "artist" does not exist.', 21, $this->source); })()), "name", [], "any", false, false, false, 21), "html", null, true);
        echo "</h2>
        </div>
        <div class=\"row\">
            <div class=\"col-3\">
                <div class=\"l-profile-pic rounded-circle\">
                    <img src=\"/uploads/artists/";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["artist"]) || array_key_exists("artist", $context) ? $context["artist"] : (function () { throw new RuntimeError('Variable "artist" does not exist.', 26, $this->source); })()), "cover", [], "any", false, false, false, 26), "html", null, true);
        echo "\" alt=\"picture\" class=\"img img-responsive\">
                </div>
            </div>
            <div class=\"col-6\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        <h3 class=\"card-title\">
                            Score
                        </h3>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"col-4 d-flex justify-content-center\">
                                <h1>";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["artist"]) || array_key_exists("artist", $context) ? $context["artist"] : (function () { throw new RuntimeError('Variable "artist" does not exist.', 39, $this->source); })()), "getAverageScore", [], "any", false, false, false, 39), "html", null, true);
        echo "</h1>
                            </div>
                            <div class=\"col-8\">
                                Based on ";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["artist"]) || array_key_exists("artist", $context) ? $context["artist"] : (function () { throw new RuntimeError('Variable "artist" does not exist.', 42, $this->source); })()), "getReviewCount", [], "any", false, false, false, 42), "html", null, true);
        echo " review(s)
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-3\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        <h3 class=\"card-title\">
                            Details
                        </h3>
                    </div>
                </div>
            </div>
        </div>

        <hr class=\"my-3\">

        <div class=\"row\">
            <div class=\"col-3\">
                <h3 class=\"text-muted\">Type</h3>
                <ul class=\"list-group list-group-flush\">
                    ";
        // line 65
        echo twig_call_macro($macros["_self"], "macro_type_list", ["lp", "Unofficial Comps"], 65, $context, $this->getSourceContext());
        echo "
                    ";
        // line 66
        echo twig_call_macro($macros["_self"], "macro_type_list", ["leak", "Leaks"], 66, $context, $this->getSourceContext());
        echo "
                </ul>
            </div>

            <!-- LP -->
            <div class=\"col\">
                <div class=\"row\">
                    <h2 class=\"text-muted\">LP</h2>
                    <hr>
                </div>
                <div class=\"row\">
                    ";
        // line 77
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["artist"]) || array_key_exists("artist", $context) ? $context["artist"] : (function () { throw new RuntimeError('Variable "artist" does not exist.', 77, $this->source); })()), "getTapesByType", [0 => "LP"], "method", false, false, false, 77));
        foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
            // line 78
            echo "                    <div class=\"col-3\">
                        <div class=\"row\">
                            <div class=\"col\">
                            <a href=\"";
            // line 81
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("view_tape", ["id" => twig_get_attribute($this->env, $this->source, $context["t"], "id", [], "any", false, false, false, 81)]), "html", null, true);
            echo "\">
                                <img src=\"/uploads/covers/";
            // line 82
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["t"], "cover", [], "any", false, false, false, 82), "html", null, true);
            echo "\" width=\"100%\" alt=\"cover\">
                            </a>
                        </div>
                        </div>

                        <div class=\"row mt-3\">
                            <div class=\"col\">
                                <h5>";
            // line 89
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["t"], "name", [], "any", false, false, false, 89), "html", null, true);
            echo "</h5>
                            </div>
                        </div>

                        <div class=\"row\">
                            <div class=\"col\">
                                <span class=\"badge bg-secondary\">";
            // line 95
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["t"], "getFormat", [], "any", false, false, false, 95), "html", null, true);
            echo "</span>
                            </div>
                        </div>

                        <hr />
                    </div>

                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        echo "

                <hr class=\"my-3\"/>

                <!-- Leaks -->

                <div class=\"row\">
                    <h2 class=\"text-muted\">Leaks</h2>
                    <hr>
                </div>
                <div class=\"row\">
                    ";
        // line 114
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["artist"]) || array_key_exists("artist", $context) ? $context["artist"] : (function () { throw new RuntimeError('Variable "artist" does not exist.', 114, $this->source); })()), "getTapesByType", [0 => "LEAK"], "method", false, false, false, 114));
        foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
            // line 115
            echo "                    <div class=\"col-3\">
                        <div class=\"row\">
                            <div class=\"col\">
                            <a href=\"";
            // line 118
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("view_tape", ["id" => twig_get_attribute($this->env, $this->source, $context["t"], "id", [], "any", false, false, false, 118)]), "html", null, true);
            echo "\">
                                <img src=\"/uploads/covers/";
            // line 119
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["t"], "cover", [], "any", false, false, false, 119), "html", null, true);
            echo "\" width=\"100%\" alt=\"cover\">
                            </a>
                        </div>
                        </div>

                        <div class=\"row mt-3\">
                            <div class=\"col\">
                                <h5>";
            // line 126
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["t"], "name", [], "any", false, false, false, 126), "html", null, true);
            echo "</h5>
                            </div>
                        </div>

                        <div class=\"row\">
                            <div class=\"col\">
                                <span class=\"badge bg-secondary\">";
            // line 132
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["t"], "getFormat", [], "any", false, false, false, 132), "html", null, true);
            echo "</span>
                            </div>
                        </div>

                        <hr />
                    </div>

                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 140
        echo "                </div>
            </div>
        </div>
    </div>
    <div class=\"col-3\"></div>

</div>  
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 1
    public function macro_type_list($__type__ = null, $__caption__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "type" => $__type__,
            "caption" => $__caption__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "type_list"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "type_list"));

            // line 2
            echo "
    <li class=\"list-group-item py-2\">
        <a href=\"#\">
            ";
            // line 5
            echo twig_escape_filter($this->env, (isset($context["caption"]) || array_key_exists("caption", $context) ? $context["caption"] : (function () { throw new RuntimeError('Variable "caption" does not exist.', 5, $this->source); })()), "html", null, true);
            echo "
        </a>
    </li>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "artists/frontend/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  335 => 5,  330 => 2,  310 => 1,  293 => 140,  279 => 132,  270 => 126,  260 => 119,  256 => 118,  251 => 115,  247 => 114,  234 => 103,  220 => 95,  211 => 89,  201 => 82,  197 => 81,  192 => 78,  188 => 77,  174 => 66,  170 => 65,  144 => 42,  138 => 39,  122 => 26,  114 => 21,  108 => 17,  98 => 16,  80 => 14,  61 => 12,  38 => 10,);
    }

    public function getSourceContext()
    {
        return new Source("{% macro type_list(type, caption) %}

    <li class=\"list-group-item py-2\">
        <a href=\"#\">
            {{ caption }}
        </a>
    </li>
{% endmacro %}

{% extends 'home/frontend/base.html.twig' %}

{% block title %}Homepage{% endblock %}

{% block header %}{% endblock %}

{% block main %}
<div class=\"row\">
    <div class=\"col-3\"></div>
    <div class=\"col-6\">
        <div class=\"row mt-3\">
            <h2>{{ artist.name }}</h2>
        </div>
        <div class=\"row\">
            <div class=\"col-3\">
                <div class=\"l-profile-pic rounded-circle\">
                    <img src=\"/uploads/artists/{{ artist.cover }}\" alt=\"picture\" class=\"img img-responsive\">
                </div>
            </div>
            <div class=\"col-6\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        <h3 class=\"card-title\">
                            Score
                        </h3>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"col-4 d-flex justify-content-center\">
                                <h1>{{ artist.getAverageScore }}</h1>
                            </div>
                            <div class=\"col-8\">
                                Based on {{ artist.getReviewCount }} review(s)
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-3\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        <h3 class=\"card-title\">
                            Details
                        </h3>
                    </div>
                </div>
            </div>
        </div>

        <hr class=\"my-3\">

        <div class=\"row\">
            <div class=\"col-3\">
                <h3 class=\"text-muted\">Type</h3>
                <ul class=\"list-group list-group-flush\">
                    {{ _self.type_list('lp', 'Unofficial Comps')}}
                    {{ _self.type_list('leak', 'Leaks')}}
                </ul>
            </div>

            <!-- LP -->
            <div class=\"col\">
                <div class=\"row\">
                    <h2 class=\"text-muted\">LP</h2>
                    <hr>
                </div>
                <div class=\"row\">
                    {% for t in artist.getTapesByType('LP') %}
                    <div class=\"col-3\">
                        <div class=\"row\">
                            <div class=\"col\">
                            <a href=\"{{ path('view_tape', {'id': t.id}) }}\">
                                <img src=\"/uploads/covers/{{ t.cover }}\" width=\"100%\" alt=\"cover\">
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
                                <span class=\"badge bg-secondary\">{{ t.getFormat }}</span>
                            </div>
                        </div>

                        <hr />
                    </div>

                    {% endfor %}


                <hr class=\"my-3\"/>

                <!-- Leaks -->

                <div class=\"row\">
                    <h2 class=\"text-muted\">Leaks</h2>
                    <hr>
                </div>
                <div class=\"row\">
                    {% for t in artist.getTapesByType('LEAK') %}
                    <div class=\"col-3\">
                        <div class=\"row\">
                            <div class=\"col\">
                            <a href=\"{{ path('view_tape', {'id': t.id}) }}\">
                                <img src=\"/uploads/covers/{{ t.cover }}\" width=\"100%\" alt=\"cover\">
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
                                <span class=\"badge bg-secondary\">{{ t.getFormat }}</span>
                            </div>
                        </div>

                        <hr />
                    </div>

                    {% endfor %}
                </div>
            </div>
        </div>
    </div>
    <div class=\"col-3\"></div>

</div>  
{% endblock %}
", "artists/frontend/view.html.twig", "/var/www/symfony/templates/artists/frontend/view.html.twig");
    }
}
