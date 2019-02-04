<?php

/* default/contact.html.twig */
class __TwigTemplate_26decc8a2d9604106d4806546d6c40baa91fef8a5fe0d487dd3bfa09c25673c6 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 2
        $this->parent = $this->loadTemplate("frontoffice.html.twig", "default/contact.html.twig", 2);
        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
            'stylesheets' => [$this, 'block_stylesheets'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "frontoffice.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    contact us
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 8
        echo "<div class=\"container\">
 <h1>contact us</h1>
 <div class=\"page-header\">
     <p>we will be more than happy if you share with us your contructive critics about this platforme</p>   
 </div> 
 <h2> share with us your thoughts</h2>
<div class=\"row\">
    <div class=\"col-sm-3\"></div>
<div class=\"col-sm-6\">    
";
        // line 17
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 17, $this->source); })()), 'form_start');
        echo "    
<div class=\"form-group\">    
";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->source); })()), "firstname", []), 'errors');
        echo "
";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 20, $this->source); })()), "firstname", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "You First Name"]]);
        echo "
 </div>
 <div class=\"form-group\">    
";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 23, $this->source); })()), "lastname", []), 'errors');
        echo "
";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 24, $this->source); })()), "lastname", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Your last name"]]);
        echo "
 </div>
 <div class=\"form-group\">
 ";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->source); })()), "email", []), 'errors');
        echo "
";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 28, $this->source); })()), "email", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Your email"]]);
        echo "
 </div>
 <div class=\"form-group\">
 ";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 31, $this->source); })()), "about", []), 'errors');
        echo "
";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 32, $this->source); })()), "about", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
 </div>
  <div class=\"form-group\">
 ";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 35, $this->source); })()), "comment", []), 'label');
        echo "     
 ";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 36, $this->source); })()), "comment", []), 'errors');
        echo "
";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 37, $this->source); })()), "comment", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
 </div>
 ";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 39, $this->source); })()), 'rest');
        echo "

 <input type=\"submit\" value=\"send\" class=\"btn btn-default pull-left\" />

 </form>
</div>
 <div class=\"col-sm-3\"></div>
 </div>
</div>
 
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 51
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 52
        echo "    
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "default/contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 52,  147 => 51,  129 => 39,  124 => 37,  120 => 36,  116 => 35,  110 => 32,  106 => 31,  100 => 28,  96 => 27,  90 => 24,  86 => 23,  80 => 20,  76 => 19,  71 => 17,  60 => 8,  54 => 7,  46 => 4,  40 => 3,  15 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# empty Twig template #}
{% extends 'frontoffice.html.twig' %}
{% block title %}
    contact us
{% endblock %}

{% block content %}
<div class=\"container\">
 <h1>contact us</h1>
 <div class=\"page-header\">
     <p>we will be more than happy if you share with us your contructive critics about this platforme</p>   
 </div> 
 <h2> share with us your thoughts</h2>
<div class=\"row\">
    <div class=\"col-sm-3\"></div>
<div class=\"col-sm-6\">    
{{ form_start(form)}}    
<div class=\"form-group\">    
{{ form_errors(form.firstname) }}
{{ form_widget(form.firstname,{'attr': {'class': 'form-control','placeholder':'You First Name'} }) }}
 </div>
 <div class=\"form-group\">    
{{ form_errors(form.lastname) }}
{{ form_widget(form.lastname,{'attr': {'class': 'form-control','placeholder':'Your last name'} }) }}
 </div>
 <div class=\"form-group\">
 {{ form_errors(form.email) }}
{{ form_widget(form.email,{'attr': {'class': 'form-control','placeholder':'Your email'} }) }}
 </div>
 <div class=\"form-group\">
 {{ form_errors(form.about) }}
{{ form_widget(form.about,{'attr': {'class': 'form-control'} }) }}
 </div>
  <div class=\"form-group\">
 {{ form_label(form.comment) }}     
 {{ form_errors(form.comment) }}
{{ form_widget(form.comment,{'attr': {'class': 'form-control'} }) }}
 </div>
 {{ form_rest(form) }}

 <input type=\"submit\" value=\"send\" class=\"btn btn-default pull-left\" />

 </form>
</div>
 <div class=\"col-sm-3\"></div>
 </div>
</div>
 
{% endblock %}

{% block stylesheets %}
    
{% endblock %}", "default/contact.html.twig", "/home/mohamed/PhpstormProjects/Quickstart3/symfony/app/Resources/views/default/contact.html.twig");
    }
}
