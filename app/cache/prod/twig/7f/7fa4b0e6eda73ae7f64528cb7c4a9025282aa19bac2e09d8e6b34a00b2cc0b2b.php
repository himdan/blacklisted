<?php

/* location/index.html.twig */
class __TwigTemplate_bcf5c4c85f9c398dabd435a3f029808ed6bf1d2481e98ca28413daab0ba75656 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("frontoffice.html.twig", "location/index.html.twig", 1);
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
        $__internal_f3ef3be4fa640f5dfe093fe7a4234b5b10ffa7af89193f347485a1dc11ba6f7e = $this->env->getExtension("native_profiler");
        $__internal_f3ef3be4fa640f5dfe093fe7a4234b5b10ffa7af89193f347485a1dc11ba6f7e->enter($__internal_f3ef3be4fa640f5dfe093fe7a4234b5b10ffa7af89193f347485a1dc11ba6f7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "location/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f3ef3be4fa640f5dfe093fe7a4234b5b10ffa7af89193f347485a1dc11ba6f7e->leave($__internal_f3ef3be4fa640f5dfe093fe7a4234b5b10ffa7af89193f347485a1dc11ba6f7e_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_826a0f8fedc01a9f7dbfd992834091bad7a9976cf6963647e8306186855bdf52 = $this->env->getExtension("native_profiler");
        $__internal_826a0f8fedc01a9f7dbfd992834091bad7a9976cf6963647e8306186855bdf52->enter($__internal_826a0f8fedc01a9f7dbfd992834091bad7a9976cf6963647e8306186855bdf52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <div class=\"container\">
        <div class=\"jumbotron\">
            <h1>My Authorities location</h1>

            <h2>manage your Authorities Locations</h2>
        </div>

    <div class=\"row\">
    <div class=\"col-lg-12\">
    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Longitude</th>
                <th>Latitude</th>
                <th>Info</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["locations"]) ? $context["locations"] : $this->getContext($context, "locations")));
        foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
            // line 26
            echo "            <tr>
                <td><a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("location_show", array("id" => $this->getAttribute($context["location"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["location"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["location"], "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["location"], "longitude", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["location"], "latitude", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["location"], "info", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul class=\"list-unsytled\">
                        <li>
                            <a class=\"btn btn-default\" href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("location_show", array("id" => $this->getAttribute($context["location"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a class=\"btn btn-default\" href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("location_edit", array("id" => $this->getAttribute($context["location"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['location'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "        </tbody>
    </table>

    <ul class=\"list-unstyled\">
        <li>
            <a class=\"btn btn-default\" href=\"";
        // line 49
        echo $this->env->getExtension('routing')->getPath("location_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
    </div>
    </div>
    </div>
";
        
        $__internal_826a0f8fedc01a9f7dbfd992834091bad7a9976cf6963647e8306186855bdf52->leave($__internal_826a0f8fedc01a9f7dbfd992834091bad7a9976cf6963647e8306186855bdf52_prof);

    }

    public function getTemplateName()
    {
        return "location/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 49,  113 => 44,  101 => 38,  95 => 35,  88 => 31,  84 => 30,  80 => 29,  76 => 28,  70 => 27,  67 => 26,  63 => 25,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'frontoffice.html.twig' %}*/
/* */
/* {% block content %}*/
/*     <div class="container">*/
/*         <div class="jumbotron">*/
/*             <h1>My Authorities location</h1>*/
/* */
/*             <h2>manage your Authorities Locations</h2>*/
/*         </div>*/
/* */
/*     <div class="row">*/
/*     <div class="col-lg-12">*/
/*     <table class="table">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Name</th>*/
/*                 <th>Longitude</th>*/
/*                 <th>Latitude</th>*/
/*                 <th>Info</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for location in locations %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('location_show', { 'id': location.id }) }}">{{ location.id }}</a></td>*/
/*                 <td>{{ location.name }}</td>*/
/*                 <td>{{ location.longitude }}</td>*/
/*                 <td>{{ location.latitude }}</td>*/
/*                 <td>{{ location.info }}</td>*/
/*                 <td>*/
/*                     <ul class="list-unsytled">*/
/*                         <li>*/
/*                             <a class="btn btn-default" href="{{ path('location_show', { 'id': location.id }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a class="btn btn-default" href="{{ path('location_edit', { 'id': location.id }) }}">edit</a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul class="list-unstyled">*/
/*         <li>*/
/*             <a class="btn btn-default" href="{{ path('location_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/*     </div>*/
/*     </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
