<?php

/* claim/addmedia.html.twig */
class __TwigTemplate_f3a0cecf78d2051ad99de23aeb82dcfe8b172f69693911516d31a8136b770bef extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 2
        $this->parent = $this->loadTemplate("frontoffice.html.twig", "claim/addmedia.html.twig", 2);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "claim/addmedia.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_content($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "    <div class=\"container\">
    <div class=\"jumbotron\"    >
    <h1>Add a medium to Your claim</h1>
        </div>
    <div class=\"row\">
    <div class=\"col-sm-3\"></div>
    <div class=\"col-sm-6\">
     <a class=\"btn btn-info center-block\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("claim_show", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["claim"]) || array_key_exists("claim", $context) ? $context["claim"] : (function () { throw new Twig_Error_Runtime('Variable "claim" does not exist.', 12, $this->source); })()), "id", [])]), "html", null, true);
        echo "\">back to the claim</a>
    ";
        // line 13
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 13, $this->source); })()), 'form_start', ["attr" => ["class" => "form"]]);
        echo "
        <div class=\"form-group-lg\">
        ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 15, $this->source); })()), "alternative", []), 'label');
        echo "
        ";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 16, $this->source); })()), "alternative", []), 'errors');
        echo "
        ";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 17, $this->source); })()), "alternative", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "say a word about this medium"]]);
        echo "
        </div>
        <div class=\"form-group-lg\">
            ";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 20, $this->source); })()), "file", []), 'label');
        echo "
            ";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 21, $this->source); })()), "file", []), 'errors');
        echo "
            ";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 22, $this->source); })()), "file", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
        </div>

        <input type=\"submit\" value=\"Create\" class=\"btn btn-primary center-block\" />

    ";
        // line 27
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->source); })()), 'form_end');
        echo "

    </div>
    </div>





    </div>       
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "claim/addmedia.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 27,  84 => 22,  80 => 21,  76 => 20,  70 => 17,  66 => 16,  62 => 15,  57 => 13,  53 => 12,  44 => 5,  38 => 4,  15 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# empty Twig template #}
{% extends 'frontoffice.html.twig' %}

{% block content %}
    <div class=\"container\">
    <div class=\"jumbotron\"    >
    <h1>Add a medium to Your claim</h1>
        </div>
    <div class=\"row\">
    <div class=\"col-sm-3\"></div>
    <div class=\"col-sm-6\">
     <a class=\"btn btn-info center-block\" href=\"{{ path('claim_show',{'id':claim.id}) }}\">back to the claim</a>
    {{ form_start(form,{'attr':{'class':'form'}}) }}
        <div class=\"form-group-lg\">
        {{ form_label(form.alternative) }}
        {{ form_errors(form.alternative) }}
        {{ form_widget(form.alternative,{'attr':{'class' : 'form-control', 'placeholder' : 'say a word about this medium'}}) }}
        </div>
        <div class=\"form-group-lg\">
            {{ form_label(form.file) }}
            {{ form_errors(form.file) }}
            {{ form_widget(form.file,{'attr':{'class' : 'form-control', }}) }}
        </div>

        <input type=\"submit\" value=\"Create\" class=\"btn btn-primary center-block\" />

    {{ form_end(form) }}

    </div>
    </div>





    </div>       
{% endblock %}
", "claim/addmedia.html.twig", "/home/mohamed/PhpstormProjects/Quickstart3/symfony/app/Resources/views/claim/addmedia.html.twig");
    }
}
