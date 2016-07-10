<?php

/* authority/index.html.twig */
class __TwigTemplate_fa1c7005048e9b7e9e39775d8ba49ce5fa7683513412a18cfd25d610462eec28 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("frontoffice.html.twig", "authority/index.html.twig", 1);
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
        $__internal_9344f95e1f6de4f576e06a8177e2ae8a00d371fdcfc8a5aa7d197e6920717155 = $this->env->getExtension("native_profiler");
        $__internal_9344f95e1f6de4f576e06a8177e2ae8a00d371fdcfc8a5aa7d197e6920717155->enter($__internal_9344f95e1f6de4f576e06a8177e2ae8a00d371fdcfc8a5aa7d197e6920717155_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "authority/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9344f95e1f6de4f576e06a8177e2ae8a00d371fdcfc8a5aa7d197e6920717155->leave($__internal_9344f95e1f6de4f576e06a8177e2ae8a00d371fdcfc8a5aa7d197e6920717155_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_b62401a2f297cbe0eef7d570bd6e22f38f8b11e369756acf23e184a0c045c944 = $this->env->getExtension("native_profiler");
        $__internal_b62401a2f297cbe0eef7d570bd6e22f38f8b11e369756acf23e184a0c045c944->enter($__internal_b62401a2f297cbe0eef7d570bd6e22f38f8b11e369756acf23e184a0c045c944_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "   <div class=\"container\">
        <div class=\"jumbotron\">
            <h1>Authorities</h1>

            <h2>manage your Authorties</h2>
        </div>

    <div class=\"row\">
    <div class=\"col-lg-12\">
    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Context</th>
                <th>HQ Address</th>
                <th>Description</th>
                <th>Url</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["authorities"]) ? $context["authorities"] : $this->getContext($context, "authorities")));
        foreach ($context['_seq'] as $context["_key"] => $context["authority"]) {
            // line 29
            echo "            <tr>
                <td><a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("authority_show", array("id" => $this->getAttribute($context["authority"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["authority"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["authority"], "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["authority"], "phone", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["authority"], "context", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["authority"], "hqAdress", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["authority"], "description", array()), "html", null, true);
            echo "</td>
                <td><a class=\"link\" href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["authority"], "url", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["authority"], "url", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["authority"], "email", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul class=\"list-unstyled\">
                        <li>
                            <a class=\"btn btn-default\" href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("authority_show", array("id" => $this->getAttribute($context["authority"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a class=\"btn btn-default\" href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("authority_edit", array("id" => $this->getAttribute($context["authority"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['authority'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "        </tbody>
    </table>
        <ul class=\"list-unstyled\">
        <li>
            <a class=\"btn btn-default\" href=\"";
        // line 54
        echo $this->env->getExtension('routing')->getPath("authority_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
    </div>
    
    </div>
   </div>
";
        
        $__internal_b62401a2f297cbe0eef7d570bd6e22f38f8b11e369756acf23e184a0c045c944->leave($__internal_b62401a2f297cbe0eef7d570bd6e22f38f8b11e369756acf23e184a0c045c944_prof);

    }

    public function getTemplateName()
    {
        return "authority/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 54,  130 => 50,  118 => 44,  112 => 41,  105 => 37,  99 => 36,  95 => 35,  91 => 34,  87 => 33,  83 => 32,  79 => 31,  73 => 30,  70 => 29,  66 => 28,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'frontoffice.html.twig' %}*/
/* */
/* {% block content %}*/
/*    <div class="container">*/
/*         <div class="jumbotron">*/
/*             <h1>Authorities</h1>*/
/* */
/*             <h2>manage your Authorties</h2>*/
/*         </div>*/
/* */
/*     <div class="row">*/
/*     <div class="col-lg-12">*/
/*     <table class="table">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Name</th>*/
/*                 <th>Phone</th>*/
/*                 <th>Context</th>*/
/*                 <th>HQ Address</th>*/
/*                 <th>Description</th>*/
/*                 <th>Url</th>*/
/*                 <th>Email</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for authority in authorities %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('authority_show', { 'id': authority.id }) }}">{{ authority.id }}</a></td>*/
/*                 <td>{{ authority.name }}</td>*/
/*                 <td>{{ authority.phone }}</td>*/
/*                 <td>{{ authority.context }}</td>*/
/*                 <td>{{ authority.hqAdress }}</td>*/
/*                 <td>{{ authority.description }}</td>*/
/*                 <td><a class="link" href="{{ authority.url }}">{{ authority.url }}</a></td>*/
/*                 <td>{{ authority.email }}</td>*/
/*                 <td>*/
/*                     <ul class="list-unstyled">*/
/*                         <li>*/
/*                             <a class="btn btn-default" href="{{ path('authority_show', { 'id': authority.id }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a class="btn btn-default" href="{{ path('authority_edit', { 'id': authority.id }) }}">edit</a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/*         <ul class="list-unstyled">*/
/*         <li>*/
/*             <a class="btn btn-default" href="{{ path('authority_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/*     </div>*/
/*     */
/*     </div>*/
/*    </div>*/
/* {% endblock %}*/
/* */
