<?php

/* media/show.html.twig */
class __TwigTemplate_aaa65309b88b379b00638fb12db01bec9e1831ce711ef0abfe3f948d3477b129 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("frontoffice.html.twig", "media/show.html.twig", 1);
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
        $__internal_f3d00b5e6a6290087c5ed6f1428041fcf79462b1a6020654c78a2c519a24554b = $this->env->getExtension("native_profiler");
        $__internal_f3d00b5e6a6290087c5ed6f1428041fcf79462b1a6020654c78a2c519a24554b->enter($__internal_f3d00b5e6a6290087c5ed6f1428041fcf79462b1a6020654c78a2c519a24554b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "media/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f3d00b5e6a6290087c5ed6f1428041fcf79462b1a6020654c78a2c519a24554b->leave($__internal_f3d00b5e6a6290087c5ed6f1428041fcf79462b1a6020654c78a2c519a24554b_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_93b5c94d7e01f844c056d34a3c760844ed9edbaae8f0f81ecd57d5b10af9cab7 = $this->env->getExtension("native_profiler");
        $__internal_93b5c94d7e01f844c056d34a3c760844ed9edbaae8f0f81ecd57d5b10af9cab7->enter($__internal_93b5c94d7e01f844c056d34a3c760844ed9edbaae8f0f81ecd57d5b10af9cab7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["medium"]) ? $context["medium"] : $this->getContext($context, "medium")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>image</th>
                <td><img  class=\"img-responsive\" src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute((isset($context["medium"]) ? $context["medium"] : $this->getContext($context, "medium")), "webpath", array())), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["medium"]) ? $context["medium"] : $this->getContext($context, "medium")), "alternative", array()), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["medium"]) ? $context["medium"] : $this->getContext($context, "medium")), "alternative", array()), "html", null, true);
        echo "\"/></td>
            </tr>
            <tr>
                <th>Type</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["medium"]) ? $context["medium"] : $this->getContext($context, "medium")), "type", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Extension</th>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["medium"]) ? $context["medium"] : $this->getContext($context, "medium")), "extension", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Path</th>
                <td>";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["medium"]) ? $context["medium"] : $this->getContext($context, "medium")), "path", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Alternative</th>
                <td>";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["medium"]) ? $context["medium"] : $this->getContext($context, "medium")), "alternative", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Createdat</th>
                <td>";
        // line 36
        if ($this->getAttribute((isset($context["medium"]) ? $context["medium"] : $this->getContext($context, "medium")), "createdAt", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["medium"]) ? $context["medium"] : $this->getContext($context, "medium")), "createdAt", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("media_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("media_edit", array("id" => $this->getAttribute((isset($context["medium"]) ? $context["medium"] : $this->getContext($context, "medium")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 49
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 51
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
    </div>
    </div>
    </div>
";
        
        $__internal_93b5c94d7e01f844c056d34a3c760844ed9edbaae8f0f81ecd57d5b10af9cab7->leave($__internal_93b5c94d7e01f844c056d34a3c760844ed9edbaae8f0f81ecd57d5b10af9cab7_prof);

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
        return array (  125 => 51,  120 => 49,  114 => 46,  108 => 43,  96 => 36,  89 => 32,  82 => 28,  75 => 24,  68 => 20,  57 => 16,  50 => 12,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'frontoffice.html.twig' %}*/
/* */
/* {% block content %}*/
/*     <div class="container">*/
/*     <h1>Media</h1>*/
/*     <div class="row">*/
/*     <div class="col-sm-12">  */
/*     <table class="table">*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ medium.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>image</th>*/
/*                 <td><img  class="img-responsive" src="{{ asset(medium.webpath) }}" alt="{{ medium.alternative }}" title="{{ medium.alternative }}"/></td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Type</th>*/
/*                 <td>{{ medium.type }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Extension</th>*/
/*                 <td>{{ medium.extension }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Path</th>*/
/*                 <td>{{ medium.path }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Alternative</th>*/
/*                 <td>{{ medium.alternative }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Createdat</th>*/
/*                 <td>{% if medium.createdAt %}{{ medium.createdAt|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('media_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('media_edit', { 'id': medium.id }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/*     </div>*/
/*     </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
