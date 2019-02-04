<?php

/* claim/index.html.twig */
class __TwigTemplate_650a65e94f1009df90b2f7a4300587873a131303f0e158955fc6e9b9fecfe0a6 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("frontoffice.html.twig", "claim/index.html.twig", 1);
        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "frontoffice.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "claim/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <div class=\"container\">
        <div class=\"jumbotron\">
            <h1>My Claims</h1>

            <h2>manage your claims</h2>
        </div>

    <div class=\"row\">
    <div class=\"col-lg-12\">
    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Description</th>
                <th>Created At</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["claims"]) || array_key_exists("claims", $context) ? $context["claims"] : (function () { throw new Twig_Error_Runtime('Variable "claims" does not exist.', 24, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["claim"]) {
            // line 25
            echo "            <tr>
                <td><a title=\"";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["claim"], "title", []), "html", null, true);
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("claim_show", ["id" => twig_get_attribute($this->env, $this->source, $context["claim"], "id", [])]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["claim"], "id", []), "html", null, true);
            echo "</a></td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["claim"], "title", []), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["claim"], "description", []), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            if (twig_get_attribute($this->env, $this->source, $context["claim"], "createdAt", [])) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["claim"], "createdAt", []), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>
                    <ul class=\"list-unstyled\">
                        <li>
                            <a class=\"btn btn-primary\" href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("claim_show", ["id" => twig_get_attribute($this->env, $this->source, $context["claim"], "id", [])]), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a class=\"btn btn-warning\" href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("claim_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["claim"], "id", [])]), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['claim'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "        </tbody>
    </table>
    </div>
    </div>
           <hr>
            <p class=\"text-center\"><a href=\"";
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("claim_new");
        echo "\" class=\"btn btn-default\">Create a new entry</a></p>

    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "claim/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 47,  116 => 42,  104 => 36,  98 => 33,  89 => 29,  85 => 28,  81 => 27,  73 => 26,  70 => 25,  66 => 24,  44 => 4,  38 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'frontoffice.html.twig' %}

{% block content %}
    <div class=\"container\">
        <div class=\"jumbotron\">
            <h1>My Claims</h1>

            <h2>manage your claims</h2>
        </div>

    <div class=\"row\">
    <div class=\"col-lg-12\">
    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Description</th>
                <th>Created At</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for claim in claims %}
            <tr>
                <td><a title=\"{{ claim.title }}\" href=\"{{ path('claim_show', { 'id': claim.id }) }}\">{{ claim.id }}</a></td>
                <td>{{ claim.title }}</td>
                <td>{{ claim.description }}</td>
                <td>{% if claim.createdAt %}{{ claim.createdAt|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>
                    <ul class=\"list-unstyled\">
                        <li>
                            <a class=\"btn btn-primary\" href=\"{{ path('claim_show', { 'id': claim.id }) }}\">show</a>
                        </li>
                        <li>
                            <a class=\"btn btn-warning\" href=\"{{ path('claim_edit', { 'id': claim.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
    </div>
    </div>
           <hr>
            <p class=\"text-center\"><a href=\"{{ path('claim_new') }}\" class=\"btn btn-default\">Create a new entry</a></p>

    </div>
{% endblock %}
", "claim/index.html.twig", "/home/mohamed/PhpstormProjects/Quickstart3/symfony/app/Resources/views/claim/index.html.twig");
    }
}
