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

/* tapes/backend/add.html.twig */
class __TwigTemplate_ef9e234f9fa43fac3481e8978bf25aeb extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body_start' => [$this, 'block_body_start'],
            'header_title' => [$this, 'block_header_title'],
            'header_pretitle' => [$this, 'block_header_pretitle'],
            'header_actions' => [$this, 'block_header_actions'],
            'main' => [$this, 'block_main'],
            'body_end' => [$this, 'block_body_end'],
            'scripts' => [$this, 'block_scripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tapes/backend/add.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tapes/backend/add.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "tapes/backend/add.html.twig", 1);
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

        echo "Users";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body_start($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_start"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_start"));

        // line 6
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), 'form_start');
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 9
    public function block_header_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header_title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header_title"));

        echo "Tapes";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 10
    public function block_header_pretitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header_pretitle"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header_pretitle"));

        if ((isset($context["updating"]) || array_key_exists("updating", $context) ? $context["updating"] : (function () { throw new RuntimeError('Variable "updating" does not exist.', 10, $this->source); })())) {
            echo "Edit";
        } else {
            echo "Add New";
        }
        echo " Tape";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 12
    public function block_header_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header_actions"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header_actions"));

        // line 13
        echo "    <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tapes");
        echo "\" class=\"btn-light btn me-2\">Back</a>
    ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "save", [], "any", false, false, false, 14), 'widget');
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 17
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 18
        echo "    ";
        if ((isset($context["updating"]) || array_key_exists("updating", $context) ? $context["updating"] : (function () { throw new RuntimeError('Variable "updating" does not exist.', 18, $this->source); })())) {
            // line 19
            echo "    <div class=\"row mb-3\">
        <div class=\"col-4\">
            <img src=\"";
            // line 21
            echo twig_escape_filter($this->env, (isset($context["cover"]) || array_key_exists("cover", $context) ? $context["cover"] : (function () { throw new RuntimeError('Variable "cover" does not exist.', 21, $this->source); })()), "html", null, true);
            echo "\" width=\"100%\" alt=\"cover\">
        </div>
        <div class=\"col-md\">
            <div class=\"row\">
                <h1><strong>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["tape"]) || array_key_exists("tape", $context) ? $context["tape"] : (function () { throw new RuntimeError('Variable "tape" does not exist.', 25, $this->source); })()), "name", [], "any", false, false, false, 25), "html", null, true);
            echo "</strong></h1>
            </div>
            <div class=\"row\">
                ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["tape"]) || array_key_exists("tape", $context) ? $context["tape"] : (function () { throw new RuntimeError('Variable "tape" does not exist.', 28, $this->source); })()), "artist", [], "any", false, false, false, 28));
            foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
                // line 29
                echo "                <h4><span class=\"badge bg-secondary\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "name", [], "any", false, false, false, 29), "html", null, true);
                echo "</span></h4>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "            </div>
        </div>
    </div>
    <hr>
    ";
        }
        // line 36
        echo "
    <div class=\"row mb-3\">
        ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "db_file", [], "any", false, false, false, 38), 'row');
        echo "
    </div>

    <div class=\"row mb-3\">
        <div class=\"col-md\">
            ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "name", [], "any", false, false, false, 43), 'label');
        echo "
            ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "name", [], "any", false, false, false, 44), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
        </div>

        <div class=\"col-md\">
            ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "releaseYear", [], "any", false, false, false, 48), 'label');
        echo "
            ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "releaseYear", [], "any", false, false, false, 49), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
        </div>

        <div class=\"col-md\">
            ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "artist", [], "any", false, false, false, 53), 'label');
        echo "
            ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "artist", [], "any", false, false, false, 54), 'widget');
        echo "
        </div>

        <div class=\"col-md\">
            ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "extension", [], "any", false, false, false, 58), 'label');
        echo "
            ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "extension", [], "any", false, false, false, 59), 'widget');
        echo "
        </div>
    </div>

    <div class=\"row mb-3\">
        <div class=\"col-md\">
            ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "description", [], "any", false, false, false, 65), 'label');
        echo "
            ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "description", [], "any", false, false, false, 66), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
        </div>
    </div>

    <div class=\"row mb-3\">

";
        // line 76
        echo "        <div class=\"col-md\">
            ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "coverUrl", [], "any", false, false, false, 77), 'label');
        echo "
            ";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), "coverUrl", [], "any", false, false, false, 78), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
        </div>
    </div>

";
        // line 88
        echo "
    <hr class=\"my-3\">

    <div class=\"row mb-3\">
        <div class=\"col-6\">
            <div class=\"row\">
                <div class=\"col-md\">
                ";
        // line 95
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 95, $this->source); })()), "tags", [], "any", false, false, false, 95), 'row');
        echo "

                <button type=\"button\"
                    class=\"add-another-collection-widget form-control form-control-sm bg-primary text-white\"
                    data-list-selector=\"#tape_tags\"
                    data-list-id=\"tags\">Add another Tag</button>

                <button type=\"button\"
                class=\"delete-another-collection-widget form-control form-control-sm bg-danger text-white\"
                data-list-selector=\"#tape_tags\"
                data-list-id=\"tags\">Delete Tag</button>

                </div>
                <div class=\"col-md\">
                    <ul id=\"tags\" class=\"list-group\">

                    </ul>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md\">
                    ";
        // line 116
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 116, $this->source); })()), "genres", [], "any", false, false, false, 116), 'row');
        echo "

                    <button type=\"button\"
                        class=\"add-another-collection-widget form-control form-control-sm bg-primary text-white\"
                        data-list-selector=\"#tape_genres\"
                        data-list-id=\"genres\">Add another Genre</button>

                    <button type=\"button\"
                    class=\"delete-another-collection-widget form-control form-control-sm bg-danger text-white\"
                    data-list-selector=\"#tape_genres\"
                    data-list-id=\"genres\">Delete Tag</button>

                </div>
                <div class=\"col-md\">
                    
                    <ul id=\"genres\" class=\"list-group\">

                    </ul>
                </div>
            </div>
        </div>
        <div class=\"col-6\">
            ";
        // line 138
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 138, $this->source); })()), "label", [], "any", false, false, false, 138), 'row');
        echo "
            ";
        // line 139
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 139, $this->source); })()), "format", [], "any", false, false, false, 139), 'row');
        echo "
        </div>
    </div>

    <hr class=\"mt-3\">

    <div class=\"row\">
        <div class=\"col\">
            ";
        // line 147
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 147, $this->source); })()), "associate", [], "any", false, false, false, 147), 'row');
        echo "
        </div>
    </div>

    <hr class=\"mt-3\">


    ";
        // line 154
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 154, $this->source); })()), "_token", [], "any", false, false, false, 154), 'row');
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 157
    public function block_body_end($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_end"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_end"));

        // line 158
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 158, $this->source); })()), 'form_end', ["render_rest" => false]);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 162
    public function block_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "scripts"));

        // line 163
        echo "

    ";
        // line 165
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("tapeForm");
        echo "
    <script>

//        // add-collection-widget.js
//        jQuery(document).ready(function (\$) {
//            jQuery('.add-another-collection-widget').click(function (e) {
//                var list = jQuery(jQuery(this).attr('data-list-selector'));
//                // Try to find the counter of the list or use the length of the list
//                var counter = list.data('widget-counter') || list.children().length;
//
//                // grab the prototype template
//                var newWidget = list.attr('data-prototype');
//                // replace the \"__name__\" used in the id and name of the prototype
//                // with a number that's unique to your emails
//                // end name attribute looks like name=\"contact[emails][2]\"
//                newWidget = newWidget.replace(/__name__/g, counter);
//                // Increase the counter
//                counter++;
//                // And store it, the length cannot be used if deleting widgets is allowed
//                list.data('widget-counter', counter);
//
//                console.log(newWidget);
//
//                // create a new list element and add it to the list
//                var newElem = jQuery(list.attr('data-widget-tags')).html(newWidget);
//                \$('#' + \$(this).attr('data-list-id')).append(newWidget);
//
//            });
//
//            \$('.delete-another-collection-widget').click(function(e) {
//                var list = jQuery(jQuery(this).attr('data-list-selector'));
//                var counter = list.data('widget-counter') || list.children().length;
//                counter--;
//                list.data('widget-counter', counter);
//                \$('#' + \$(this).attr('data-list-id')).children().last().remove();
//            });
//        });
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "tapes/backend/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  444 => 165,  440 => 163,  430 => 162,  417 => 158,  407 => 157,  395 => 154,  385 => 147,  374 => 139,  370 => 138,  345 => 116,  321 => 95,  312 => 88,  305 => 78,  301 => 77,  298 => 76,  289 => 66,  285 => 65,  276 => 59,  272 => 58,  265 => 54,  261 => 53,  254 => 49,  250 => 48,  243 => 44,  239 => 43,  231 => 38,  227 => 36,  220 => 31,  211 => 29,  207 => 28,  201 => 25,  194 => 21,  190 => 19,  187 => 18,  177 => 17,  165 => 14,  160 => 13,  150 => 12,  126 => 10,  107 => 9,  94 => 6,  84 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Users{% endblock %}

{% block body_start %}
    {{ form_start(form) }}
{% endblock %}

{% block header_title %}Tapes{% endblock %}
{% block header_pretitle %}{% if updating %}Edit{% else %}Add New{% endif %} Tape{% endblock %}

{% block header_actions %}
    <a href=\"{{ path('tapes') }}\" class=\"btn-light btn me-2\">Back</a>
    {{ form_widget(form.save) }}
{% endblock %}

{% block main %}
    {% if updating %}
    <div class=\"row mb-3\">
        <div class=\"col-4\">
            <img src=\"{{ cover }}\" width=\"100%\" alt=\"cover\">
        </div>
        <div class=\"col-md\">
            <div class=\"row\">
                <h1><strong>{{ tape.name }}</strong></h1>
            </div>
            <div class=\"row\">
                {% for a in tape.artist %}
                <h4><span class=\"badge bg-secondary\">{{ a.name }}</span></h4>
                {% endfor %}
            </div>
        </div>
    </div>
    <hr>
    {% endif %}

    <div class=\"row mb-3\">
        {{ form_row(form.db_file) }}
    </div>

    <div class=\"row mb-3\">
        <div class=\"col-md\">
            {{ form_label(form.name) }}
            {{ form_widget(form.name, {'attr' : {'class' : 'form-control'}}) }}
        </div>

        <div class=\"col-md\">
            {{ form_label(form.releaseYear) }}
            {{ form_widget(form.releaseYear, {'attr' : {'class' : 'form-control'}}) }}
        </div>

        <div class=\"col-md\">
            {{ form_label(form.artist) }}
            {{ form_widget(form.artist) }}
        </div>

        <div class=\"col-md\">
            {{ form_label(form.extension) }}
            {{ form_widget(form.extension) }}
        </div>
    </div>

    <div class=\"row mb-3\">
        <div class=\"col-md\">
            {{ form_label(form.description) }}
            {{ form_widget(form.description, {'attr' : {'class' : 'form-control'}}) }}
        </div>
    </div>

    <div class=\"row mb-3\">

{#        <div class=\"col-md\">#}
{#            {{ form_label(form.cover) }}#}
{#            {{ form_widget(form.cover, {'attr' : {'class' : 'form-control'}}) }}#}
{#        </div>#}
        <div class=\"col-md\">
            {{ form_label(form.coverUrl) }}
            {{ form_widget(form.coverUrl, {'attr' : {'class' : 'form-control'}}) }}
        </div>
    </div>

{#    <div class=\"row mb-3\">#}
{#        <div class=\"col-md\">#}
{#            {{ form_label(form.audioFile) }}#}
{#            {{ form_widget(form.audioFile, {'attr' : {'class' : 'form-control'}}) }}#}
{#        </div>#}
{#    </div>#}

    <hr class=\"my-3\">

    <div class=\"row mb-3\">
        <div class=\"col-6\">
            <div class=\"row\">
                <div class=\"col-md\">
                {{ form_row(form.tags)}}

                <button type=\"button\"
                    class=\"add-another-collection-widget form-control form-control-sm bg-primary text-white\"
                    data-list-selector=\"#tape_tags\"
                    data-list-id=\"tags\">Add another Tag</button>

                <button type=\"button\"
                class=\"delete-another-collection-widget form-control form-control-sm bg-danger text-white\"
                data-list-selector=\"#tape_tags\"
                data-list-id=\"tags\">Delete Tag</button>

                </div>
                <div class=\"col-md\">
                    <ul id=\"tags\" class=\"list-group\">

                    </ul>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md\">
                    {{ form_row(form.genres)}}

                    <button type=\"button\"
                        class=\"add-another-collection-widget form-control form-control-sm bg-primary text-white\"
                        data-list-selector=\"#tape_genres\"
                        data-list-id=\"genres\">Add another Genre</button>

                    <button type=\"button\"
                    class=\"delete-another-collection-widget form-control form-control-sm bg-danger text-white\"
                    data-list-selector=\"#tape_genres\"
                    data-list-id=\"genres\">Delete Tag</button>

                </div>
                <div class=\"col-md\">
                    
                    <ul id=\"genres\" class=\"list-group\">

                    </ul>
                </div>
            </div>
        </div>
        <div class=\"col-6\">
            {{ form_row(form.label) }}
            {{ form_row(form.format) }}
        </div>
    </div>

    <hr class=\"mt-3\">

    <div class=\"row\">
        <div class=\"col\">
            {{ form_row(form.associate) }}
        </div>
    </div>

    <hr class=\"mt-3\">


    {{ form_row(form._token) }}
{% endblock %}

{% block body_end %}
    {{ form_end(form, {render_rest: false}) }}
{% endblock %}


{% block scripts %}


    {{ encore_entry_script_tags('tapeForm') }}
    <script>

//        // add-collection-widget.js
//        jQuery(document).ready(function (\$) {
//            jQuery('.add-another-collection-widget').click(function (e) {
//                var list = jQuery(jQuery(this).attr('data-list-selector'));
//                // Try to find the counter of the list or use the length of the list
//                var counter = list.data('widget-counter') || list.children().length;
//
//                // grab the prototype template
//                var newWidget = list.attr('data-prototype');
//                // replace the \"__name__\" used in the id and name of the prototype
//                // with a number that's unique to your emails
//                // end name attribute looks like name=\"contact[emails][2]\"
//                newWidget = newWidget.replace(/__name__/g, counter);
//                // Increase the counter
//                counter++;
//                // And store it, the length cannot be used if deleting widgets is allowed
//                list.data('widget-counter', counter);
//
//                console.log(newWidget);
//
//                // create a new list element and add it to the list
//                var newElem = jQuery(list.attr('data-widget-tags')).html(newWidget);
//                \$('#' + \$(this).attr('data-list-id')).append(newWidget);
//
//            });
//
//            \$('.delete-another-collection-widget').click(function(e) {
//                var list = jQuery(jQuery(this).attr('data-list-selector'));
//                var counter = list.data('widget-counter') || list.children().length;
//                counter--;
//                list.data('widget-counter', counter);
//                \$('#' + \$(this).attr('data-list-id')).children().last().remove();
//            });
//        });
    </script>
{% endblock %}", "tapes/backend/add.html.twig", "/var/www/symfony/templates/tapes/backend/add.html.twig");
    }
}
