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
class __TwigTemplate_fc4cb27570b51689836405b93a11e117 extends Template
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
        echo "<div class=\"bg-image img-responsive\" style=\"background-image: url('";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["genius"]) || array_key_exists("genius", $context) ? $context["genius"] : (function () { throw new RuntimeError('Variable "genius" does not exist.', 17, $this->source); })()), "getArtistHeaderPic", [0 => twig_get_attribute($this->env, $this->source, (isset($context["artist"]) || array_key_exists("artist", $context) ? $context["artist"] : (function () { throw new RuntimeError('Variable "artist" does not exist.', 17, $this->source); })()), "name", [], "any", false, false, false, 17)], "method", false, false, false, 17), "html", null, true);
        echo "'); height: 100vh\">
<div class=\"row\">

<div class=\"col-3\"></div>

<div class=\"col-6\">
    <div class=\"card shadow-lg mt-3\">

        <div class=\"card-body\">

            <div class=\"row mt-3\">
                <h2>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["artist"]) || array_key_exists("artist", $context) ? $context["artist"] : (function () { throw new RuntimeError('Variable "artist" does not exist.', 28, $this->source); })()), "name", [], "any", false, false, false, 28), "html", null, true);
        echo "</h2>
            </div>
            <div class=\"row\">
                <div class=\"col-3\">
                        ";
        // line 32
        if ((twig_get_attribute($this->env, $this->source, ($context["artist"] ?? null), "cover", [], "any", true, true, false, 32) &&  !(null === twig_get_attribute($this->env, $this->source, (isset($context["artist"]) || array_key_exists("artist", $context) ? $context["artist"] : (function () { throw new RuntimeError('Variable "artist" does not exist.', 32, $this->source); })()), "cover", [], "any", false, false, false, 32)))) {
            // line 33
            echo "                            <img src=\"/uploads/artists/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["artist"]) || array_key_exists("artist", $context) ? $context["artist"] : (function () { throw new RuntimeError('Variable "artist" does not exist.', 33, $this->source); })()), "cover", [], "any", false, false, false, 33), "html", null, true);
            echo "\" alt=\"picture\" class=\"avatar-img rounded-circle border border-4\">
                        ";
        } else {
            // line 35
            echo "                            <img src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["genius"]) || array_key_exists("genius", $context) ? $context["genius"] : (function () { throw new RuntimeError('Variable "genius" does not exist.', 35, $this->source); })()), "getArtistProfilePic", [0 => twig_get_attribute($this->env, $this->source, (isset($context["artist"]) || array_key_exists("artist", $context) ? $context["artist"] : (function () { throw new RuntimeError('Variable "artist" does not exist.', 35, $this->source); })()), "name", [], "any", false, false, false, 35)], "method", false, false, false, 35), "html", null, true);
            echo "\" alt=\"picture\" class=\"avatar-img rounded-circle border border-4\">
                        ";
        }
        // line 37
        echo "                </div>
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
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["artist"]) || array_key_exists("artist", $context) ? $context["artist"] : (function () { throw new RuntimeError('Variable "artist" does not exist.', 48, $this->source); })()), "getAverageScore", [], "any", false, false, false, 48), "html", null, true);
        echo "</h1>
                                </div>
                                <div class=\"col-8\">
                                    Based on ";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["artist"]) || array_key_exists("artist", $context) ? $context["artist"] : (function () { throw new RuntimeError('Variable "artist" does not exist.', 51, $this->source); })()), "getReviewCount", [], "any", false, false, false, 51), "html", null, true);
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
        // line 74
        echo twig_call_macro($macros["_self"], "macro_type_list", ["lp", "Unofficial Comps"], 74, $context, $this->getSourceContext());
        echo "
                        ";
        // line 75
        echo twig_call_macro($macros["_self"], "macro_type_list", ["leak", "Leaks"], 75, $context, $this->getSourceContext());
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
        // line 86
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["artist"]) || array_key_exists("artist", $context) ? $context["artist"] : (function () { throw new RuntimeError('Variable "artist" does not exist.', 86, $this->source); })()), "getTapesByType", [0 => "LP"], "method", false, false, false, 86));
        foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
            // line 87
            echo "                        <div class=\"col-3\">
                            <div class=\"row\">
                                <div class=\"col\">
                                <a href=\"";
            // line 90
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("view_tape", ["id" => twig_get_attribute($this->env, $this->source, $context["t"], "id", [], "any", false, false, false, 90)]), "html", null, true);
            echo "\">
                                    <img src=\"/uploads/covers/";
            // line 91
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["t"], "cover", [], "any", false, false, false, 91), "html", null, true);
            echo "\" width=\"100%\" alt=\"cover\">
                                </a>
                            </div>
                            </div>

                            <div class=\"row mt-3\">
                                <div class=\"col\">
                                    <h5>";
            // line 98
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["t"], "name", [], "any", false, false, false, 98), "html", null, true);
            echo "</h5>
                                </div>
                            </div>

                            <div class=\"row\">
                                <div class=\"col\">
                                    <span class=\"badge bg-secondary\">";
            // line 104
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["t"], "getFormat", [], "any", false, false, false, 104), "html", null, true);
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
        // line 112
        echo "

                    <hr class=\"my-3\"/>

                    <!-- Leaks -->

                    <div class=\"row\">
                        <h2 class=\"text-muted\">Leaks</h2>
                        <hr>
                    </div>
                    <div class=\"row\">
                        ";
        // line 123
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["artist"]) || array_key_exists("artist", $context) ? $context["artist"] : (function () { throw new RuntimeError('Variable "artist" does not exist.', 123, $this->source); })()), "getTapesByType", [0 => "LEAK"], "method", false, false, false, 123));
        foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
            // line 124
            echo "                        <div class=\"col-3\">
                            <div class=\"row\">
                                <div class=\"col\">
                                <a href=\"";
            // line 127
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("view_tape", ["id" => twig_get_attribute($this->env, $this->source, $context["t"], "id", [], "any", false, false, false, 127)]), "html", null, true);
            echo "\">
                                    <img src=\"/uploads/covers/";
            // line 128
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["t"], "cover", [], "any", false, false, false, 128), "html", null, true);
            echo "\" width=\"100%\" alt=\"cover\">
                                </a>
                            </div>
                            </div>

                            <div class=\"row mt-3\">
                                <div class=\"col\">
                                    <h5>";
            // line 135
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["t"], "name", [], "any", false, false, false, 135), "html", null, true);
            echo "</h5>
                                </div>
                            </div>

                            <div class=\"row\">
                                <div class=\"col\">
                                    <span class=\"badge bg-secondary\">";
            // line 141
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["t"], "getFormat", [], "any", false, false, false, 141), "html", null, true);
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
        // line 149
        echo "                    </div>
                </div>
            </div>
        </div>


        </div>
    </div>
</div>

<div class=\"col-3\"></div>

</div>
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
        return array (  361 => 5,  356 => 2,  336 => 1,  312 => 149,  298 => 141,  289 => 135,  279 => 128,  275 => 127,  270 => 124,  266 => 123,  253 => 112,  239 => 104,  230 => 98,  220 => 91,  216 => 90,  211 => 87,  207 => 86,  193 => 75,  189 => 74,  163 => 51,  157 => 48,  144 => 37,  138 => 35,  132 => 33,  130 => 32,  123 => 28,  108 => 17,  98 => 16,  80 => 14,  61 => 12,  38 => 10,);
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
<div class=\"bg-image img-responsive\" style=\"background-image: url('{{ genius.getArtistHeaderPic(artist.name) }}'); height: 100vh\">
<div class=\"row\">

<div class=\"col-3\"></div>

<div class=\"col-6\">
    <div class=\"card shadow-lg mt-3\">

        <div class=\"card-body\">

            <div class=\"row mt-3\">
                <h2>{{ artist.name }}</h2>
            </div>
            <div class=\"row\">
                <div class=\"col-3\">
                        {% if artist.cover is defined and artist.cover is not null %}
                            <img src=\"/uploads/artists/{{ artist.cover }}\" alt=\"picture\" class=\"avatar-img rounded-circle border border-4\">
                        {% else %}
                            <img src=\"{{ genius.getArtistProfilePic(artist.name) }}\" alt=\"picture\" class=\"avatar-img rounded-circle border border-4\">
                        {% endif %}
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


        </div>
    </div>
</div>

<div class=\"col-3\"></div>

</div>
</div>
{% endblock %}
", "artists/frontend/view.html.twig", "/var/www/symfony/templates/artists/frontend/view.html.twig");
    }
}
