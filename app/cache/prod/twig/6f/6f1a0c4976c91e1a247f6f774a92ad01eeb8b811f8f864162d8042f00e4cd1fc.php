<?php

/* media/index.html.twig */
class __TwigTemplate_74e2ebfc2df60e78fcb46742e068819366b804e0f3f84a7f7311c654c65fd3e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("frontoffice.html.twig", "media/index.html.twig", 1);
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
        $__internal_fce1f1f4fcbc37ed9056320e8b62ee5b77cddfb1162d80fa3a5e75cbd48acb75 = $this->env->getExtension("native_profiler");
        $__internal_fce1f1f4fcbc37ed9056320e8b62ee5b77cddfb1162d80fa3a5e75cbd48acb75->enter($__internal_fce1f1f4fcbc37ed9056320e8b62ee5b77cddfb1162d80fa3a5e75cbd48acb75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "media/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fce1f1f4fcbc37ed9056320e8b62ee5b77cddfb1162d80fa3a5e75cbd48acb75->leave($__internal_fce1f1f4fcbc37ed9056320e8b62ee5b77cddfb1162d80fa3a5e75cbd48acb75_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_dbbaa49e06036bf4a7c867dd3072fe120f1195f13a47c206271c0c56ef1a257f = $this->env->getExtension("native_profiler");
        $__internal_dbbaa49e06036bf4a7c867dd3072fe120f1195f13a47c206271c0c56ef1a257f->enter($__internal_dbbaa49e06036bf4a7c867dd3072fe120f1195f13a47c206271c0c56ef1a257f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <div class=\"container\">
    <h1>Media list</h1>
    <div class=\"row\">
    <div class=\"col-sm-12\">  
    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Type</th>
                <th>Extension</th>
                <th>Path</th>
                <th>Alternative</th>
                <th>Createdat</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["media"]) ? $context["media"] : $this->getContext($context, "media")));
        foreach ($context['_seq'] as $context["_key"] => $context["medium"]) {
            // line 22
            echo "            <tr>
                <td><a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("media_show", array("id" => $this->getAttribute($context["medium"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["medium"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["medium"], "type", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["medium"], "extension", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["medium"], "path", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["medium"], "alternative", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            if ($this->getAttribute($context["medium"], "createdAt", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["medium"], "createdAt", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("media_show", array("id" => $this->getAttribute($context["medium"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("media_edit", array("id" => $this->getAttribute($context["medium"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['medium'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "        </tbody>
    </table>
    </div>
        <div>
    <ul>
        <li>
            <a href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("media_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
    </div>
";
        
        $__internal_dbbaa49e06036bf4a7c867dd3072fe120f1195f13a47c206271c0c56ef1a257f->leave($__internal_dbbaa49e06036bf4a7c867dd3072fe120f1195f13a47c206271c0c56ef1a257f_prof);

    }

    public function getTemplateName()
    {
        return "media/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 47,  115 => 41,  103 => 35,  97 => 32,  88 => 28,  84 => 27,  80 => 26,  76 => 25,  72 => 24,  66 => 23,  63 => 22,  59 => 21,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'frontoffice.html.twig' %}*/
/* */
/* {% block content %}*/
/*     <div class="container">*/
/*     <h1>Media list</h1>*/
/*     <div class="row">*/
/*     <div class="col-sm-12">  */
/*     <table class="table">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Type</th>*/
/*                 <th>Extension</th>*/
/*                 <th>Path</th>*/
/*                 <th>Alternative</th>*/
/*                 <th>Createdat</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for medium in media %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('media_show', { 'id': medium.id }) }}">{{ medium.id }}</a></td>*/
/*                 <td>{{ medium.type }}</td>*/
/*                 <td>{{ medium.extension }}</td>*/
/*                 <td>{{ medium.path }}</td>*/
/*                 <td>{{ medium.alternative }}</td>*/
/*                 <td>{% if medium.createdAt %}{{ medium.createdAt|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('media_show', { 'id': medium.id }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('media_edit', { 'id': medium.id }) }}">edit</a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/*     </div>*/
/*         <div>*/
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('media_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/*     </div>*/
/* {% endblock %}*/
/* */
