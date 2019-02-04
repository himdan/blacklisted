<?php

/* media/show.html.twig */
class __TwigTemplate_6dd53d653fda41ecc2d82b4cc77998503a9810727a0feac1678f8c8ba68004af extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("frontoffice.html.twig", "media/show.html.twig", 1);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "media/show.html.twig"));

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
    <h1>Media</h1>
    <div class=\"row\">
    <div class=\"col-sm-12\">  
    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["medium"]) || array_key_exists("medium", $context) ? $context["medium"] : (function () { throw new Twig_Error_Runtime('Variable "medium" does not exist.', 12, $this->source); })()), "id", []), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>image</th>
                <td><img  class=\"img-responsive\" src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, (isset($context["medium"]) || array_key_exists("medium", $context) ? $context["medium"] : (function () { throw new Twig_Error_Runtime('Variable "medium" does not exist.', 16, $this->source); })()), "webpath", [])), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["medium"]) || array_key_exists("medium", $context) ? $context["medium"] : (function () { throw new Twig_Error_Runtime('Variable "medium" does not exist.', 16, $this->source); })()), "alternative", []), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["medium"]) || array_key_exists("medium", $context) ? $context["medium"] : (function () { throw new Twig_Error_Runtime('Variable "medium" does not exist.', 16, $this->source); })()), "alternative", []), "html", null, true);
        echo "\"/></td>
            </tr>
            <tr>
                <th>Type</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["medium"]) || array_key_exists("medium", $context) ? $context["medium"] : (function () { throw new Twig_Error_Runtime('Variable "medium" does not exist.', 20, $this->source); })()), "type", []), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Extension</th>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["medium"]) || array_key_exists("medium", $context) ? $context["medium"] : (function () { throw new Twig_Error_Runtime('Variable "medium" does not exist.', 24, $this->source); })()), "extension", []), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Path</th>
                <td>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["medium"]) || array_key_exists("medium", $context) ? $context["medium"] : (function () { throw new Twig_Error_Runtime('Variable "medium" does not exist.', 28, $this->source); })()), "path", []), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Alternative</th>
                <td>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["medium"]) || array_key_exists("medium", $context) ? $context["medium"] : (function () { throw new Twig_Error_Runtime('Variable "medium" does not exist.', 32, $this->source); })()), "alternative", []), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Createdat</th>
                <td>";
        // line 36
        if (twig_get_attribute($this->env, $this->source, (isset($context["medium"]) || array_key_exists("medium", $context) ? $context["medium"] : (function () { throw new Twig_Error_Runtime('Variable "medium" does not exist.', 36, $this->source); })()), "createdAt", [])) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["medium"]) || array_key_exists("medium", $context) ? $context["medium"] : (function () { throw new Twig_Error_Runtime('Variable "medium" does not exist.', 36, $this->source); })()), "createdAt", []), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 43
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("media_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("media_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["medium"]) || array_key_exists("medium", $context) ? $context["medium"] : (function () { throw new Twig_Error_Runtime('Variable "medium" does not exist.', 46, $this->source); })()), "id", [])]), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 49
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 49, $this->source); })()), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 51
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 51, $this->source); })()), 'form_end');
        echo "
        </li>
    </ul>
    </div>
    </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "media/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 51,  124 => 49,  118 => 46,  112 => 43,  100 => 36,  93 => 32,  86 => 28,  79 => 24,  72 => 20,  61 => 16,  54 => 12,  44 => 4,  38 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'frontoffice.html.twig' %}

{% block content %}
    <div class=\"container\">
    <h1>Media</h1>
    <div class=\"row\">
    <div class=\"col-sm-12\">  
    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ medium.id }}</td>
            </tr>
            <tr>
                <th>image</th>
                <td><img  class=\"img-responsive\" src=\"{{ asset(medium.webpath) }}\" alt=\"{{ medium.alternative }}\" title=\"{{ medium.alternative }}\"/></td>
            </tr>
            <tr>
                <th>Type</th>
                <td>{{ medium.type }}</td>
            </tr>
            <tr>
                <th>Extension</th>
                <td>{{ medium.extension }}</td>
            </tr>
            <tr>
                <th>Path</th>
                <td>{{ medium.path }}</td>
            </tr>
            <tr>
                <th>Alternative</th>
                <td>{{ medium.alternative }}</td>
            </tr>
            <tr>
                <th>Createdat</th>
                <td>{% if medium.createdAt %}{{ medium.createdAt|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('media_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('media_edit', { 'id': medium.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
    </div>
    </div>
    </div>
{% endblock %}
", "media/show.html.twig", "/home/mohamed/PhpstormProjects/Quickstart3/symfony/app/Resources/views/media/show.html.twig");
    }
}
