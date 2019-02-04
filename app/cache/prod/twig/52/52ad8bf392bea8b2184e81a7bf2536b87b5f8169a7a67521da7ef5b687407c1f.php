<?php

/* authority/edit.html.twig */
class __TwigTemplate_8dccec3268c79bbc5455e53c3035649246c68b6a0ed4d610668776688c4e64ac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("frontoffice.html.twig", "authority/edit.html.twig", 1);
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
        $__internal_e702eaa966e9052fc98dff28068ce6dea756b5d0ee8dc13e5a4c5c315f9069db = $this->env->getExtension("native_profiler");
        $__internal_e702eaa966e9052fc98dff28068ce6dea756b5d0ee8dc13e5a4c5c315f9069db->enter($__internal_e702eaa966e9052fc98dff28068ce6dea756b5d0ee8dc13e5a4c5c315f9069db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "authority/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e702eaa966e9052fc98dff28068ce6dea756b5d0ee8dc13e5a4c5c315f9069db->leave($__internal_e702eaa966e9052fc98dff28068ce6dea756b5d0ee8dc13e5a4c5c315f9069db_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_28e57d3a4445db77a135243e793920b0033ad8645055cb16838b255919fdbc93 = $this->env->getExtension("native_profiler");
        $__internal_28e57d3a4445db77a135243e793920b0033ad8645055cb16838b255919fdbc93->enter($__internal_28e57d3a4445db77a135243e793920b0033ad8645055cb16838b255919fdbc93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "   <div class=\"container\">
        <div class=\"jumbotron\">
            <h1>Authority</h1>

            <h2>Edit Authority</h2>
        </div>

    <div class=\"row\">
    <div class=\"col-lg-12\">
    <h1>Authority edit</h1>

    ";
        // line 15
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("authority_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 25
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 27
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
    </div>
    </div>
   </div>
";
        
        $__internal_28e57d3a4445db77a135243e793920b0033ad8645055cb16838b255919fdbc93->leave($__internal_28e57d3a4445db77a135243e793920b0033ad8645055cb16838b255919fdbc93_prof);

    }

    public function getTemplateName()
    {
        return "authority/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 27,  75 => 25,  69 => 22,  62 => 18,  57 => 16,  53 => 15,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'frontoffice.html.twig' %}*/
/* */
/* {% block content %}*/
/*    <div class="container">*/
/*         <div class="jumbotron">*/
/*             <h1>Authority</h1>*/
/* */
/*             <h2>Edit Authority</h2>*/
/*         </div>*/
/* */
/*     <div class="row">*/
/*     <div class="col-lg-12">*/
/*     <h1>Authority edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('authority_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/*     </div>*/
/*     </div>*/
/*    </div>*/
/* {% endblock %}*/
/* */
