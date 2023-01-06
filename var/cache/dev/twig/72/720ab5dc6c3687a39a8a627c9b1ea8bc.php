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

/* home/_partial/navbar.html.twig */
class __TwigTemplate_4272ae6c2d3a93a93b3e7f1f41a9829d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/_partial/navbar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/_partial/navbar.html.twig"));

        // line 10
        echo "
<nav class=\"navbar navbar-expand-lg navbar-light\">
    <div class=\"container-fluid\">

        <a class=\"navbar-brand ms-3\" href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">
            <img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/Logo-dark.png"), "html", null, true);
        echo "\" class=\"navbar-brand-img mx-auto\" alt=\"Logo\">
        </a>

        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarText\" aria-controls=\"navbarText\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>

        <div class=\"collapse navbar-collapse\" id=\"navbarText\">
            <ul class=\"navbar-nav\">

                ";
        // line 25
        echo twig_call_macro($macros["_self"], "macro_nav_link", ["Top Leaks", "", "top_leaks"], 25, $context, $this->getSourceContext());
        echo "
                ";
        // line 26
        echo twig_call_macro($macros["_self"], "macro_nav_link", ["Discover", "", "t"], 26, $context, $this->getSourceContext());
        echo "
                ";
        // line 27
        echo twig_call_macro($macros["_self"], "macro_nav_link", ["New Releases", "", "t"], 27, $context, $this->getSourceContext());
        echo "
                ";
        // line 28
        echo twig_call_macro($macros["_self"], "macro_nav_link", ["Lists", "", "t"], 28, $context, $this->getSourceContext());
        echo "
                ";
        // line 29
        echo twig_call_macro($macros["_self"], "macro_nav_link", ["Genres", "", "t"], 29, $context, $this->getSourceContext());
        echo "
                ";
        // line 30
        echo twig_call_macro($macros["_self"], "macro_nav_link", ["News", "", "t"], 30, $context, $this->getSourceContext());
        echo "
                ";
        // line 31
        echo twig_call_macro($macros["_self"], "macro_nav_link", ["Community", "", "t"], 31, $context, $this->getSourceContext());
        echo "
            </ul>

        </div>

        <div class=\"navbar-user d-none d-md-flex me-3\" id=\"sidebarUser\">
            <div class=\"dropdown\">

                <a href=\"#\" class=\"avatar avatar-sm dropdown-toggle\"  id=\"sidebarIconCopy\" role=\"button\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    <span class=\"avatar-title rounded-circle\">
                        ";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 41, $this->source); })()), "user", [], "any", false, false, false, 41), "getInitials", [], "any", false, false, false, 41), "html", null, true);
        echo "
                    </span>
                </a>

                <div class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"sidebarIconCopy\">
                    ";
        // line 46
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 46, $this->source); })()), "user", [], "any", false, false, false, 46), "isAdmin", [], "any", false, false, false, 46)) {
            // line 47
            echo "                        <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
            echo "\" class=\"dropdown-item\">Admin</a>
                        <a href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("users_edit", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 48, $this->source); })()), "user", [], "any", false, false, false, 48), "id", [], "any", false, false, false, 48)]), "html", null, true);
            echo "\" class=\"dropdown-item\">Edit Profile</a>
                    ";
        }
        // line 50
        echo "                    <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("auth_logout");
        echo "\" class=\"dropdown-item\">Logout</a>
                </div>
            </div>
        </div>

    </div>
</nav>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 1
    public function macro_nav_link($__name__ = null, $__icon__ = null, $__route__ = null, $__additionalRoutes__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "icon" => $__icon__,
            "route" => $__route__,
            "additionalRoutes" => $__additionalRoutes__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "nav_link"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "nav_link"));

            // line 2
            echo "    ";
            $context["currentRoute"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 2, $this->source); })()), "request", [], "any", false, false, false, 2), "get", [0 => "_route"], "method", false, false, false, 2);
            // line 3
            echo "
    <li class=\"nav-item\">
        <a class=\"nav-link ";
            // line 5
            if ((((isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 5, $this->source); })()) == (isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 5, $this->source); })())) || twig_in_filter((isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 5, $this->source); })()), (isset($context["additionalRoutes"]) || array_key_exists("additionalRoutes", $context) ? $context["additionalRoutes"] : (function () { throw new RuntimeError('Variable "additionalRoutes" does not exist.', 5, $this->source); })())))) {
                echo "active";
            }
            echo "\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 5, $this->source); })()));
            echo "\">
            <i class=\"fe ";
            // line 6
            echo twig_escape_filter($this->env, (isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 6, $this->source); })()), "html", null, true);
            echo "\"></i> ";
            echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 6, $this->source); })()), "html", null, true);
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
        return "home/_partial/navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 6,  172 => 5,  168 => 3,  165 => 2,  143 => 1,  124 => 50,  119 => 48,  114 => 47,  112 => 46,  104 => 41,  91 => 31,  87 => 30,  83 => 29,  79 => 28,  75 => 27,  71 => 26,  67 => 25,  54 => 15,  50 => 14,  44 => 10,);
    }

    public function getSourceContext()
    {
        return new Source("{% macro nav_link(name, icon, route, additionalRoutes = []) %}
    {% set currentRoute = app.request.get(\"_route\") %}

    <li class=\"nav-item\">
        <a class=\"nav-link {% if currentRoute == route or currentRoute in additionalRoutes %}active{% endif %}\" href=\"{{ path(route) }}\">
            <i class=\"fe {{ icon }}\"></i> {{ name }}
        </a>
    </li>
{% endmacro %}

<nav class=\"navbar navbar-expand-lg navbar-light\">
    <div class=\"container-fluid\">

        <a class=\"navbar-brand ms-3\" href=\"{{ path(\"home\") }}\">
            <img src=\"{{ asset('assets/img/Logo-dark.png') }}\" class=\"navbar-brand-img mx-auto\" alt=\"Logo\">
        </a>

        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarText\" aria-controls=\"navbarText\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>

        <div class=\"collapse navbar-collapse\" id=\"navbarText\">
            <ul class=\"navbar-nav\">

                {{ _self.nav_link('Top Leaks', '', 'top_leaks') }}
                {{ _self.nav_link('Discover', '', 't') }}
                {{ _self.nav_link('New Releases', '', 't') }}
                {{ _self.nav_link('Lists', '', 't') }}
                {{ _self.nav_link('Genres', '', 't') }}
                {{ _self.nav_link('News', '', 't') }}
                {{ _self.nav_link('Community', '', 't') }}
            </ul>

        </div>

        <div class=\"navbar-user d-none d-md-flex me-3\" id=\"sidebarUser\">
            <div class=\"dropdown\">

                <a href=\"#\" class=\"avatar avatar-sm dropdown-toggle\"  id=\"sidebarIconCopy\" role=\"button\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    <span class=\"avatar-title rounded-circle\">
                        {{ app.user.getInitials }}
                    </span>
                </a>

                <div class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"sidebarIconCopy\">
                    {% if app.user.isAdmin %}
                        <a href=\"{{ path(\"admin\") }}\" class=\"dropdown-item\">Admin</a>
                        <a href=\"{{ path(\"users_edit\", {'id': app.user.id }) }}\" class=\"dropdown-item\">Edit Profile</a>
                    {% endif %}
                    <a href=\"{{ path(\"auth_logout\") }}\" class=\"dropdown-item\">Logout</a>
                </div>
            </div>
        </div>

    </div>
</nav>
", "home/_partial/navbar.html.twig", "/var/www/symfony/templates/home/_partial/navbar.html.twig");
    }
}
