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

/* tapes/frontend/view.html.twig */
class __TwigTemplate_9484840d083d92ed1a33f1cfa426354b extends Template
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
            'scripts' => [$this, 'block_scripts'],
        ];
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doGetParent(array $context)
    {
        // line 15
        return "home/frontend/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tapes/frontend/view.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tapes/frontend/view.html.twig"));

        $this->parent = $this->loadTemplate("home/frontend/base.html.twig", "tapes/frontend/view.html.twig", 15);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 17
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

    // line 19
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

    // line 21
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 22
        echo "    <link rel=\"stylesheet\" href=\"https://cdn.plyr.io/3.7.3/plyr.css\" />
<div class=\"row\">
    <div class=\"col-2\"></div>
    <div class=\"col-8\">
        <nav class=\"navbar navbar-horizontal navbar-expand-md\">
        <ul class=\"navbar-nav\">
            <li class=\"nav-item\">
              <a class=\"nav-link active\" aria-current=\"page\" href=\"#\">Overview</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"#\">User Reviews</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"#\">Comments (0)</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\">Discography</a>
            </li>
          </ul>
        </nav>


        <div class=\"row mt-3\">
            <h2 class=\"text-muted\"><a href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("view_artist", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["tape"]) || array_key_exists("tape", $context) ? $context["tape"] : (function () { throw new RuntimeError('Variable "tape" does not exist.', 45, $this->source); })()), "getMainArtist", [], "any", false, false, false, 45), "id", [], "any", false, false, false, 45)]), "html", null, true);
        echo "\"><strong>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["tape"]) || array_key_exists("tape", $context) ? $context["tape"] : (function () { throw new RuntimeError('Variable "tape" does not exist.', 45, $this->source); })()), "getMainArtist", [], "any", false, false, false, 45), "name", [], "any", false, false, false, 45), "html", null, true);
        echo "</strong></a></h2>
        </div>

        <div class=\"row\">
            <h1>";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["tape"]) || array_key_exists("tape", $context) ? $context["tape"] : (function () { throw new RuntimeError('Variable "tape" does not exist.', 49, $this->source); })()), "name", [], "any", false, false, false, 49), "html", null, true);
        echo "</h1>
        </div>

        <div class=\"row\">

            <div class=\"col-4\">
                ";
        // line 55
        if ((twig_get_attribute($this->env, $this->source, ($context["tape"] ?? null), "cover", [], "any", true, true, false, 55) &&  !(null === twig_get_attribute($this->env, $this->source, (isset($context["tape"]) || array_key_exists("tape", $context) ? $context["tape"] : (function () { throw new RuntimeError('Variable "tape" does not exist.', 55, $this->source); })()), "cover", [], "any", false, false, false, 55)))) {
            // line 56
            echo "                <img src=\"/uploads/covers/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["tape"]) || array_key_exists("tape", $context) ? $context["tape"] : (function () { throw new RuntimeError('Variable "tape" does not exist.', 56, $this->source); })()), "cover", [], "any", false, false, false, 56), "html", null, true);
            echo "\" width=\"100%\" alt=\"cover\">
                ";
        } else {
            // line 58
            echo "                <img src=\"/uploads/covers/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["tape"]) || array_key_exists("tape", $context) ? $context["tape"] : (function () { throw new RuntimeError('Variable "tape" does not exist.', 58, $this->source); })()), "getAssociateCover", [], "any", false, false, false, 58), "html", null, true);
            echo "\" width=\"100%\" alt=\"cover\">
                ";
        }
        // line 60
        echo "            </div>

            <div class=\"col\">
                <div class=\"row\">
                    <div class=\"col-6\">
                        <div class=\"card\">
                            <div class=\"card-header\">
                                <h4 class=\"card-title\">Average Score</h4>
                            </div>
                            <div class=\"card-body\">
                                <div class=\"row\">
                                    <div class=\"col-4\">
                                        <span class=\"h1 badge bg-success\"><strong>";
        // line 72
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["tape"]) || array_key_exists("tape", $context) ? $context["tape"] : (function () { throw new RuntimeError('Variable "tape" does not exist.', 72, $this->source); })()), "averageScore", [], "any", false, false, false, 72), "html", null, true);
        echo "</strong></span>
                                    </div>
                                    <div class=\"col-auto\">
                                        Based on ";
        // line 75
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["reviews"]) || array_key_exists("reviews", $context) ? $context["reviews"] : (function () { throw new RuntimeError('Variable "reviews" does not exist.', 75, $this->source); })())), "html", null, true);
        echo " Review(s)
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-6\">
                        <div class=\"card\">
                            <div class=\"card-header\">
                                <h4 class=\"card-title\">Details</h4>
                            </div>
                            <div class=\"card-body\">
                                ";
        // line 87
        echo twig_call_macro($macros["_self"], "macro_details_line", [twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["tape"]) || array_key_exists("tape", $context) ? $context["tape"] : (function () { throw new RuntimeError('Variable "tape" does not exist.', 87, $this->source); })()), "ReleaseDate", [], "any", false, false, false, 87), "d/m/Y"), "Release Date"], 87, $context, $this->getSourceContext());
        echo "
                                ";
        // line 88
        echo twig_call_macro($macros["_self"], "macro_details_line", [twig_get_attribute($this->env, $this->source, (isset($context["tape"]) || array_key_exists("tape", $context) ? $context["tape"] : (function () { throw new RuntimeError('Variable "tape" does not exist.', 88, $this->source); })()), "format", [], "any", false, false, false, 88), "Format"], 88, $context, $this->getSourceContext());
        echo "
                                ";
        // line 89
        echo twig_call_macro($macros["_self"], "macro_details_line", [twig_get_attribute($this->env, $this->source, (isset($context["tape"]) || array_key_exists("tape", $context) ? $context["tape"] : (function () { throw new RuntimeError('Variable "tape" does not exist.', 89, $this->source); })()), "labelName", [], "any", false, false, false, 89), "Label"], 89, $context, $this->getSourceContext());
        echo "
                                ";
        // line 90
        echo twig_call_macro($macros["_self"], "macro_details_line", [twig_get_attribute($this->env, $this->source, (isset($context["tape"]) || array_key_exists("tape", $context) ? $context["tape"] : (function () { throw new RuntimeError('Variable "tape" does not exist.', 90, $this->source); })()), "genreNames", [], "any", false, false, false, 90), "Genres"], 90, $context, $this->getSourceContext());
        echo "
                                ";
        // line 91
        echo twig_call_macro($macros["_self"], "macro_details_line", [twig_get_attribute($this->env, $this->source, (isset($context["tape"]) || array_key_exists("tape", $context) ? $context["tape"] : (function () { throw new RuntimeError('Variable "tape" does not exist.', 91, $this->source); })()), "tagNames", [], "any", false, false, false, 91), "Tags"], 91, $context, $this->getSourceContext());
        echo "
                            </div>
                        </div>
                    </div>
                </div>
                ";
        // line 96
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["tape"]) || array_key_exists("tape", $context) ? $context["tape"] : (function () { throw new RuntimeError('Variable "tape" does not exist.', 96, $this->source); })()), "associate", [], "any", false, false, false, 96)) > 0)) {
            // line 97
            echo "                <div class=\"row\">
                    <div class=\"col\">
                        <h4 class=\"text-muted\">Other Versions...</h4>
                        <hr>
                    </div>
                </div>
                <div class=\"row\">
                    ";
            // line 104
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["tape"]) || array_key_exists("tape", $context) ? $context["tape"] : (function () { throw new RuntimeError('Variable "tape" does not exist.', 104, $this->source); })()), "associate", [], "any", false, false, false, 104));
            foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
                // line 105
                echo "                        <div class=\"col-3\">
                            <div class=\"card\">
                                <div class=\"card-body\">
                                    <h4 class=\"card-header-title\" class=\"mb-2\">";
                // line 108
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "name", [], "any", false, false, false, 108), "html", null, true);
                echo "</h4>
                                    <span class=\"text-muted\">";
                // line 109
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "releaseDate", [], "any", false, false, false, 109), "d/m/Y"), "html", null, true);
                echo "</span>
                                    <a href=\"";
                // line 110
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("view_tape", ["id" => twig_get_attribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 110)]), "html", null, true);
                echo "\" class=\"hidden stretched-link\"></a>
                                </div>
                            </div>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 115
            echo "                </div>
                ";
        }
        // line 117
        echo "            </div>
        </div>

        ";
        // line 120
        if ((array_key_exists("path", $context) &&  !(null === (isset($context["path"]) || array_key_exists("path", $context) ? $context["path"] : (function () { throw new RuntimeError('Variable "path" does not exist.', 120, $this->source); })())))) {
            // line 121
            echo "        <div class=\"row mt-3\">
            <audio crossorigin playsinline>
                <source src=\"/";
            // line 123
            echo twig_escape_filter($this->env, (isset($context["path"]) || array_key_exists("path", $context) ? $context["path"] : (function () { throw new RuntimeError('Variable "path" does not exist.', 123, $this->source); })()), "html", null, true);
            echo "\" type=\"audio/mpeg\">
            </audio>
        </div>
        ";
        }
        // line 127
        echo "
        <hr>

        ";
        // line 130
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 130, $this->source); })()), 'form_start');
        echo "
        <div class=\"row\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <div class=\"row\">
                        <div class=\"col-auto\">
                            <div class=\"rounded-circle bg-secondary p-3 d-flex justify-content-center align-items-center\" style=\"width: 50px; height: 50px\"><span class=\"text-white\"><strong>";
        // line 136
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 136, $this->source); })()), "user", [], "any", false, false, false, 136), "getInitials", [], "any", false, false, false, 136), "html", null, true);
        echo "</strong></span></div>
                        </div>
                        <div class=\"col-2\">
                            <div class=\"row\">
                                <div class=\"col\">
                                    ";
        // line 141
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 141, $this->source); })()), "user", [], "any", false, false, false, 141), "getFullName", [], "any", false, false, false, 141), "html", null, true);
        echo "
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col\">
                                    ";
        // line 146
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 146, $this->source); })()), "score", [], "any", false, false, false, 146), 'widget');
        echo "
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"row mt-2\">
                        ";
        // line 153
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 153, $this->source); })()), "description", [], "any", false, false, false, 153), 'widget');
        echo "
                    </div>

                    <div class=\"row mt-2\">
                        <div class=\"col\"></div>
                        <div class=\"col-auto\">
                            ";
        // line 159
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 159, $this->source); })()), "post", [], "any", false, false, false, 159), 'widget');
        echo "
                        </div>
                    </div>
                </div>
            </div>
        </div>
        ";
        // line 165
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 165, $this->source); })()), 'form_end');
        echo "


        ";
        // line 168
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reviews"]) || array_key_exists("reviews", $context) ? $context["reviews"] : (function () { throw new RuntimeError('Variable "reviews" does not exist.', 168, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            // line 169
            echo "        <div class=\"row\">
            <div class=\"card\">
                <div class=\"card-header my-3\">
                    <div class=\"card-title\">
                        <div class=\"row\">
                            <div class=\"col-auto\">
                                <div class=\"rounded-circle bg-secondary p-3 d-flex justify-content-center align-items-center\" style=\"width: 50px; height: 50px\"><span class=\"text-white\"><strong>";
            // line 175
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["r"], "author", [], "any", false, false, false, 175), "getInitials", [], "any", false, false, false, 175), "html", null, true);
            echo "</strong></span></div>
                            </div>
                            <div class=\"col-2\">
                                <div class=\"row\">
                                    <div class=\"col\">
                                        ";
            // line 180
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["r"], "author", [], "any", false, false, false, 180), "getFullName", [], "any", false, false, false, 180), "html", null, true);
            echo "
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col\">
                                        <span class=\"badge bg-success\"><strong>";
            // line 185
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "score", [], "any", false, false, false, 185), "html", null, true);
            echo "</strong></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"card-body\">
                    ";
            // line 193
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "description", [], "any", false, false, false, 193), "html", null, true);
            echo "
                </div>
            </div>
            
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 199
        echo "
    </div>
    <div class=\"col-2\">
        ";
        // line 202
        if (array_key_exists("geniusSearch", $context)) {
            // line 203
            echo "        <div class=\"card mt-3\">
            <div class=\"card-body\">
            ";
            // line 205
            echo (isset($context["geniusSearch"]) || array_key_exists("geniusSearch", $context) ? $context["geniusSearch"] : (function () { throw new RuntimeError('Variable "geniusSearch" does not exist.', 205, $this->source); })());
            echo "
        </div>
        </div>
        ";
        }
        // line 209
        echo "    </div>
</div>
    <script src=\"https://cdn.plyr.io/3.7.3/plyr.js\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 214
    public function block_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "scripts"));

        // line 215
        echo "    <script>
        const player = new Plyr('audio', {});
    </script>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 1
    public function macro_details_line($__detail__ = null, $__caption__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "detail" => $__detail__,
            "caption" => $__caption__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "details_line"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "details_line"));

            // line 2
            echo "
    <div class=\"row\">
        <div class=\"col\">
            ";
            // line 5
            if ((array_key_exists("detail", $context) &&  !twig_test_empty((isset($context["detail"]) || array_key_exists("detail", $context) ? $context["detail"] : (function () { throw new RuntimeError('Variable "detail" does not exist.', 5, $this->source); })())))) {
                // line 6
                echo "                ";
                echo twig_escape_filter($this->env, (isset($context["detail"]) || array_key_exists("detail", $context) ? $context["detail"] : (function () { throw new RuntimeError('Variable "detail" does not exist.', 6, $this->source); })()), "html", null, true);
                echo "
            ";
            } else {
                // line 8
                echo "                <span class=\"text-muted\">N/A</span>
            ";
            }
            // line 10
            echo "            <span class=\"text-muted\"> / ";
            echo twig_escape_filter($this->env, (isset($context["caption"]) || array_key_exists("caption", $context) ? $context["caption"] : (function () { throw new RuntimeError('Variable "caption" does not exist.', 10, $this->source); })()), "html", null, true);
            echo "</span>
        </div>
    </div>
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
        return "tapes/frontend/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  493 => 10,  489 => 8,  483 => 6,  481 => 5,  476 => 2,  456 => 1,  442 => 215,  432 => 214,  419 => 209,  412 => 205,  408 => 203,  406 => 202,  401 => 199,  389 => 193,  378 => 185,  370 => 180,  362 => 175,  354 => 169,  350 => 168,  344 => 165,  335 => 159,  326 => 153,  316 => 146,  308 => 141,  300 => 136,  291 => 130,  286 => 127,  279 => 123,  275 => 121,  273 => 120,  268 => 117,  264 => 115,  253 => 110,  249 => 109,  245 => 108,  240 => 105,  236 => 104,  227 => 97,  225 => 96,  217 => 91,  213 => 90,  209 => 89,  205 => 88,  201 => 87,  186 => 75,  180 => 72,  166 => 60,  160 => 58,  154 => 56,  152 => 55,  143 => 49,  134 => 45,  109 => 22,  99 => 21,  81 => 19,  62 => 17,  39 => 15,);
    }

    public function getSourceContext()
    {
        return new Source("{% macro details_line(detail, caption) %}

    <div class=\"row\">
        <div class=\"col\">
            {% if detail is defined and detail is not empty  %}
                {{ detail }}
            {% else %}
                <span class=\"text-muted\">N/A</span>
            {% endif %}
            <span class=\"text-muted\"> / {{ caption }}</span>
        </div>
    </div>
{% endmacro %}

{% extends 'home/frontend/base.html.twig' %}

{% block title %}Homepage{% endblock %}

{% block header %}{% endblock %}

{% block main %}
    <link rel=\"stylesheet\" href=\"https://cdn.plyr.io/3.7.3/plyr.css\" />
<div class=\"row\">
    <div class=\"col-2\"></div>
    <div class=\"col-8\">
        <nav class=\"navbar navbar-horizontal navbar-expand-md\">
        <ul class=\"navbar-nav\">
            <li class=\"nav-item\">
              <a class=\"nav-link active\" aria-current=\"page\" href=\"#\">Overview</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"#\">User Reviews</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"#\">Comments (0)</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\">Discography</a>
            </li>
          </ul>
        </nav>


        <div class=\"row mt-3\">
            <h2 class=\"text-muted\"><a href=\"{{ path('view_artist', {'id': tape.getMainArtist.id}) }}\"><strong>{{tape.getMainArtist.name}}</strong></a></h2>
        </div>

        <div class=\"row\">
            <h1>{{ tape.name }}</h1>
        </div>

        <div class=\"row\">

            <div class=\"col-4\">
                {% if tape.cover is defined and tape.cover is not null %}
                <img src=\"/uploads/covers/{{ tape.cover }}\" width=\"100%\" alt=\"cover\">
                {% else %}
                <img src=\"/uploads/covers/{{ tape.getAssociateCover }}\" width=\"100%\" alt=\"cover\">
                {% endif %}
            </div>

            <div class=\"col\">
                <div class=\"row\">
                    <div class=\"col-6\">
                        <div class=\"card\">
                            <div class=\"card-header\">
                                <h4 class=\"card-title\">Average Score</h4>
                            </div>
                            <div class=\"card-body\">
                                <div class=\"row\">
                                    <div class=\"col-4\">
                                        <span class=\"h1 badge bg-success\"><strong>{{ tape.averageScore }}</strong></span>
                                    </div>
                                    <div class=\"col-auto\">
                                        Based on {{ reviews | length }} Review(s)
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-6\">
                        <div class=\"card\">
                            <div class=\"card-header\">
                                <h4 class=\"card-title\">Details</h4>
                            </div>
                            <div class=\"card-body\">
                                {{_self.details_line( tape.ReleaseDate|date('d/m/Y') , 'Release Date')}}
                                {{_self.details_line(tape.format, 'Format')}}
                                {{_self.details_line(tape.labelName, 'Label')}}
                                {{_self.details_line(tape.genreNames, 'Genres')}}
                                {{_self.details_line(tape.tagNames, 'Tags')}}
                            </div>
                        </div>
                    </div>
                </div>
                {% if tape.associate|length > 0 %}
                <div class=\"row\">
                    <div class=\"col\">
                        <h4 class=\"text-muted\">Other Versions...</h4>
                        <hr>
                    </div>
                </div>
                <div class=\"row\">
                    {% for a in tape.associate %}
                        <div class=\"col-3\">
                            <div class=\"card\">
                                <div class=\"card-body\">
                                    <h4 class=\"card-header-title\" class=\"mb-2\">{{ a.name }}</h4>
                                    <span class=\"text-muted\">{{ a.releaseDate|date('d/m/Y') }}</span>
                                    <a href=\"{{ path('view_tape', {'id': a.id}) }}\" class=\"hidden stretched-link\"></a>
                                </div>
                            </div>
                        </div>
                    {% endfor %}
                </div>
                {% endif %}
            </div>
        </div>

        {% if path is defined and path is not null %}
        <div class=\"row mt-3\">
            <audio crossorigin playsinline>
                <source src=\"/{{ path }}\" type=\"audio/mpeg\">
            </audio>
        </div>
        {% endif %}

        <hr>

        {{ form_start(form) }}
        <div class=\"row\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <div class=\"row\">
                        <div class=\"col-auto\">
                            <div class=\"rounded-circle bg-secondary p-3 d-flex justify-content-center align-items-center\" style=\"width: 50px; height: 50px\"><span class=\"text-white\"><strong>{{ app.user.getInitials }}</strong></span></div>
                        </div>
                        <div class=\"col-2\">
                            <div class=\"row\">
                                <div class=\"col\">
                                    {{ app.user.getFullName }}
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col\">
                                    {{ form_widget(form.score) }}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"row mt-2\">
                        {{ form_widget(form.description) }}
                    </div>

                    <div class=\"row mt-2\">
                        <div class=\"col\"></div>
                        <div class=\"col-auto\">
                            {{ form_widget(form.post) }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{ form_end(form) }}


        {% for r in reviews %}
        <div class=\"row\">
            <div class=\"card\">
                <div class=\"card-header my-3\">
                    <div class=\"card-title\">
                        <div class=\"row\">
                            <div class=\"col-auto\">
                                <div class=\"rounded-circle bg-secondary p-3 d-flex justify-content-center align-items-center\" style=\"width: 50px; height: 50px\"><span class=\"text-white\"><strong>{{ r.author.getInitials }}</strong></span></div>
                            </div>
                            <div class=\"col-2\">
                                <div class=\"row\">
                                    <div class=\"col\">
                                        {{ r.author.getFullName }}
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col\">
                                        <span class=\"badge bg-success\"><strong>{{ r.score }}</strong></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"card-body\">
                    {{ r.description }}
                </div>
            </div>
            
        </div>
        {% endfor %}

    </div>
    <div class=\"col-2\">
        {% if geniusSearch is defined %}
        <div class=\"card mt-3\">
            <div class=\"card-body\">
            {{ geniusSearch | raw }}
        </div>
        </div>
        {% endif %}
    </div>
</div>
    <script src=\"https://cdn.plyr.io/3.7.3/plyr.js\"></script>
{% endblock %}

{% block scripts %}
    <script>
        const player = new Plyr('audio', {});
    </script>

{% endblock %}
", "tapes/frontend/view.html.twig", "/var/www/symfony/templates/tapes/frontend/view.html.twig");
    }
}
