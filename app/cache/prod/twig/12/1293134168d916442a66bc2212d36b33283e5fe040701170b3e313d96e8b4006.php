<?php

/* authority/new.html.twig */
class __TwigTemplate_99fc01b917999f8b39e563d2cd334a1a135c295f3c4b2f737e3743cd90beeef8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("frontoffice.html.twig", "authority/new.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "frontoffice.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5dee0bbb04784112e92f4df6ba833dc958e48b542201621d2dca1aaab5cb83fd = $this->env->getExtension("native_profiler");
        $__internal_5dee0bbb04784112e92f4df6ba833dc958e48b542201621d2dca1aaab5cb83fd->enter($__internal_5dee0bbb04784112e92f4df6ba833dc958e48b542201621d2dca1aaab5cb83fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "authority/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5dee0bbb04784112e92f4df6ba833dc958e48b542201621d2dca1aaab5cb83fd->leave($__internal_5dee0bbb04784112e92f4df6ba833dc958e48b542201621d2dca1aaab5cb83fd_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_2d1e608243ffaad6fb182034763b49f378d3f2794dcc8c7192b28cee6a0d1177 = $this->env->getExtension("native_profiler");
        $__internal_2d1e608243ffaad6fb182034763b49f378d3f2794dcc8c7192b28cee6a0d1177->enter($__internal_2d1e608243ffaad6fb182034763b49f378d3f2794dcc8c7192b28cee6a0d1177_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "     <div class=\"container\">
        <div class=\"jumbotron\">
            <h1>Authority creation</h1>

            <h2>create New Authority</h2>
        </div>

    <div class=\"row\">
    <div class=\"col-lg-12\">
    

    ";
        // line 15
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul class=\"list-unstyled\">
        <li>
            <a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("authority_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
    </div>
            <div>
            </div>
";
        
        $__internal_2d1e608243ffaad6fb182034763b49f378d3f2794dcc8c7192b28cee6a0d1177->leave($__internal_2d1e608243ffaad6fb182034763b49f378d3f2794dcc8c7192b28cee6a0d1177_prof);

    }

    public function getTemplateName()
    {
        return "authority/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 22,  62 => 18,  57 => 16,  53 => 15,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'frontoffice.html.twig' %}*/
/* */
/* {% block content %}*/
/*      <div class="container">*/
/*         <div class="jumbotron">*/
/*             <h1>Authority creation</h1>*/
/* */
/*             <h2>create New Authority</h2>*/
/*         </div>*/
/* */
/*     <div class="row">*/
/*     <div class="col-lg-12">*/
/*     */
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul class="list-unstyled">*/
/*         <li>*/
/*             <a href="{{ path('authority_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/*     </div>*/
/*             <div>*/
/*             </div>*/
/* {% endblock %}*/
/* */
