<?php

/* default/aboutus.html.twig */
class __TwigTemplate_0d5c513fbd0c9b14259b246e3843118cbc038d8ae5d28ac290fff5785c652b98 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 2
        $this->parent = $this->loadTemplate("frontoffice.html.twig", "default/aboutus.html.twig", 2);
        $this->blocks = [
            'content' => [$this, 'block_content'],
            'javascript' => [$this, 'block_javascript'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "frontoffice.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/aboutus.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "<div class=\"container\">

        <!-- Introduction Row -->
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">About Us
                    <small>It's Nice to Meet You!</small>
                </h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint, explicabo dolores ipsam aliquam inventore corrupti eveniet quisquam quod totam laudantium repudiandae obcaecati ea consectetur debitis velit facere nisi expedita vel?</p>
            </div>
        </div>

        <!-- Team Members Row -->
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h2 class=\"page-header\">Our Team</h2>
            </div>
            <div class=\"col-lg-4 col-sm-6 text-center\">
                <img class=\"img-circle img-responsive img-center\" src=\"http://placehold.it/200x200\" alt=\"\">
                <h3>John Smith
                    <small>Job Title</small>
                </h3>
                <p>What does this team member to? Keep it short! This is also a great spot for social links!</p>
            </div>
            <div class=\"col-lg-4 col-sm-6 text-center\">
                <img class=\"img-circle img-responsive img-center\" src=\"http://placehold.it/200x200\" alt=\"\">
                <h3>John Smith
                    <small>Job Title</small>
                </h3>
                <p>What does this team member to? Keep it short! This is also a great spot for social links!</p>
            </div>
            <div class=\"col-lg-4 col-sm-6 text-center\">
                <img class=\"img-circle img-responsive img-center\" src=\"http://placehold.it/200x200\" alt=\"\">
                <h3>John Smith
                    <small>Job Title</small>
                </h3>
                <p>What does this team member to? Keep it short! This is also a great spot for social links!</p>
            </div>
            <div class=\"col-lg-4 col-sm-6 text-center\">
                <img class=\"img-circle img-responsive img-center\" src=\"http://placehold.it/200x200\" alt=\"\">
                <h3>John Smith
                    <small>Job Title</small>
                </h3>
                <p>What does this team member to? Keep it short! This is also a great spot for social links!</p>
            </div>
            <div class=\"col-lg-4 col-sm-6 text-center\">
                <img class=\"img-circle img-responsive img-center\" src=\"http://placehold.it/200x200\" alt=\"\">
                <h3>John Smith
                    <small>Job Title</small>
                </h3>
                <p>What does this team member to? Keep it short! This is also a great spot for social links!</p>
            </div>
            <div class=\"col-lg-4 col-sm-6 text-center\">
                <img class=\"img-circle img-responsive img-center\" src=\"http://placehold.it/200x200\" alt=\"\">
                <h3>John Smith
                    <small>Job Title</small>
                </h3>
                <p>What does this team member to? Keep it short! This is also a great spot for social links!</p>
            </div>
        </div>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 65
    public function block_javascript($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 66
        echo "            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "default/aboutus.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 66,  112 => 65,  45 => 4,  39 => 3,  15 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# empty Twig template #}
{% extends 'frontoffice.html.twig' %}
{% block content %}
<div class=\"container\">

        <!-- Introduction Row -->
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">About Us
                    <small>It's Nice to Meet You!</small>
                </h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint, explicabo dolores ipsam aliquam inventore corrupti eveniet quisquam quod totam laudantium repudiandae obcaecati ea consectetur debitis velit facere nisi expedita vel?</p>
            </div>
        </div>

        <!-- Team Members Row -->
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h2 class=\"page-header\">Our Team</h2>
            </div>
            <div class=\"col-lg-4 col-sm-6 text-center\">
                <img class=\"img-circle img-responsive img-center\" src=\"http://placehold.it/200x200\" alt=\"\">
                <h3>John Smith
                    <small>Job Title</small>
                </h3>
                <p>What does this team member to? Keep it short! This is also a great spot for social links!</p>
            </div>
            <div class=\"col-lg-4 col-sm-6 text-center\">
                <img class=\"img-circle img-responsive img-center\" src=\"http://placehold.it/200x200\" alt=\"\">
                <h3>John Smith
                    <small>Job Title</small>
                </h3>
                <p>What does this team member to? Keep it short! This is also a great spot for social links!</p>
            </div>
            <div class=\"col-lg-4 col-sm-6 text-center\">
                <img class=\"img-circle img-responsive img-center\" src=\"http://placehold.it/200x200\" alt=\"\">
                <h3>John Smith
                    <small>Job Title</small>
                </h3>
                <p>What does this team member to? Keep it short! This is also a great spot for social links!</p>
            </div>
            <div class=\"col-lg-4 col-sm-6 text-center\">
                <img class=\"img-circle img-responsive img-center\" src=\"http://placehold.it/200x200\" alt=\"\">
                <h3>John Smith
                    <small>Job Title</small>
                </h3>
                <p>What does this team member to? Keep it short! This is also a great spot for social links!</p>
            </div>
            <div class=\"col-lg-4 col-sm-6 text-center\">
                <img class=\"img-circle img-responsive img-center\" src=\"http://placehold.it/200x200\" alt=\"\">
                <h3>John Smith
                    <small>Job Title</small>
                </h3>
                <p>What does this team member to? Keep it short! This is also a great spot for social links!</p>
            </div>
            <div class=\"col-lg-4 col-sm-6 text-center\">
                <img class=\"img-circle img-responsive img-center\" src=\"http://placehold.it/200x200\" alt=\"\">
                <h3>John Smith
                    <small>Job Title</small>
                </h3>
                <p>What does this team member to? Keep it short! This is also a great spot for social links!</p>
            </div>
        </div>
        {% endblock %}
        {% block javascript %}
            {% endblock %}", "default/aboutus.html.twig", "/home/mohamed/PhpstormProjects/Quickstart3/symfony/app/Resources/views/default/aboutus.html.twig");
    }
}
