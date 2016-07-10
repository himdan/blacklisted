<?php

/* claim/index.html.twig */
class __TwigTemplate_16cd5900f7a35351e70275037c2e3429dfd29107487a5dfed9093313dc2d5b1c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("frontoffice.html.twig", "claim/index.html.twig", 1);
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
        $__internal_09ce3f59306f3c8aa22e0e9c2ba4ab4ea92bfd54f2471b2f679567b7d3abbb23 = $this->env->getExtension("native_profiler");
        $__internal_09ce3f59306f3c8aa22e0e9c2ba4ab4ea92bfd54f2471b2f679567b7d3abbb23->enter($__internal_09ce3f59306f3c8aa22e0e9c2ba4ab4ea92bfd54f2471b2f679567b7d3abbb23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "claim/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_09ce3f59306f3c8aa22e0e9c2ba4ab4ea92bfd54f2471b2f679567b7d3abbb23->leave($__internal_09ce3f59306f3c8aa22e0e9c2ba4ab4ea92bfd54f2471b2f679567b7d3abbb23_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_902e3df280d88aa02ce7c0500adb6cce394b0430eb06a397070421868c5fb5d9 = $this->env->getExtension("native_profiler");
        $__internal_902e3df280d88aa02ce7c0500adb6cce394b0430eb06a397070421868c5fb5d9->enter($__internal_902e3df280d88aa02ce7c0500adb6cce394b0430eb06a397070421868c5fb5d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        $context['_seq'] = twig_ensure_traversable((isset($context["claims"]) ? $context["claims"] : $this->getContext($context, "claims")));
        foreach ($context['_seq'] as $context["_key"] => $context["claim"]) {
            // line 25
            echo "            <tr>
                <td><a title=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["claim"], "title", array()), "html", null, true);
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("claim_show", array("id" => $this->getAttribute($context["claim"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["claim"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["claim"], "title", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["claim"], "description", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            if ($this->getAttribute($context["claim"], "createdAt", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["claim"], "createdAt", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>
                    <ul class=\"list-unstyled\">
                        <li>
                            <a class=\"btn btn-primary\" href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("claim_show", array("id" => $this->getAttribute($context["claim"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a class=\"btn btn-warning\" href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("claim_edit", array("id" => $this->getAttribute($context["claim"], "id", array()))), "html", null, true);
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
        echo $this->env->getExtension('routing')->getPath("claim_new");
        echo "\" class=\"btn btn-default\">Create a new entry</a></p>

    </div>
";
        
        $__internal_902e3df280d88aa02ce7c0500adb6cce394b0430eb06a397070421868c5fb5d9->leave($__internal_902e3df280d88aa02ce7c0500adb6cce394b0430eb06a397070421868c5fb5d9_prof);

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
        return array (  119 => 47,  112 => 42,  100 => 36,  94 => 33,  85 => 29,  81 => 28,  77 => 27,  69 => 26,  66 => 25,  62 => 24,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'frontoffice.html.twig' %}*/
/* */
/* {% block content %}*/
/*     <div class="container">*/
/*         <div class="jumbotron">*/
/*             <h1>My Claims</h1>*/
/* */
/*             <h2>manage your claims</h2>*/
/*         </div>*/
/* */
/*     <div class="row">*/
/*     <div class="col-lg-12">*/
/*     <table class="table">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Title</th>*/
/*                 <th>Description</th>*/
/*                 <th>Created At</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for claim in claims %}*/
/*             <tr>*/
/*                 <td><a title="{{ claim.title }}" href="{{ path('claim_show', { 'id': claim.id }) }}">{{ claim.id }}</a></td>*/
/*                 <td>{{ claim.title }}</td>*/
/*                 <td>{{ claim.description }}</td>*/
/*                 <td>{% if claim.createdAt %}{{ claim.createdAt|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                 <td>*/
/*                     <ul class="list-unstyled">*/
/*                         <li>*/
/*                             <a class="btn btn-primary" href="{{ path('claim_show', { 'id': claim.id }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a class="btn btn-warning" href="{{ path('claim_edit', { 'id': claim.id }) }}">edit</a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/*     </div>*/
/*     </div>*/
/*            <hr>*/
/*             <p class="text-center"><a href="{{ path('claim_new') }}" class="btn btn-default">Create a new entry</a></p>*/
/* */
/*     </div>*/
/* {% endblock %}*/
/* */
