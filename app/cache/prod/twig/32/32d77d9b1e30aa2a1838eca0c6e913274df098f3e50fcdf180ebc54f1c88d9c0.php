<?php

/* authority/show.html.twig */
class __TwigTemplate_1ca93667a62edbce7eaba60da7fff07d2e9ed2b686aa4e6fa5f7b721de5b2fa4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("frontoffice.html.twig", "authority/show.html.twig", 1);
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
        $__internal_c88242e6007743be22930acab75059ab0977e0c1b1055551852c1b5fa7a377fb = $this->env->getExtension("native_profiler");
        $__internal_c88242e6007743be22930acab75059ab0977e0c1b1055551852c1b5fa7a377fb->enter($__internal_c88242e6007743be22930acab75059ab0977e0c1b1055551852c1b5fa7a377fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "authority/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c88242e6007743be22930acab75059ab0977e0c1b1055551852c1b5fa7a377fb->leave($__internal_c88242e6007743be22930acab75059ab0977e0c1b1055551852c1b5fa7a377fb_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_91275f858e833be0e0f3c60bc64d3f7778256f8ff6b6112fc56fdaf49cf5b0c6 = $this->env->getExtension("native_profiler");
        $__internal_91275f858e833be0e0f3c60bc64d3f7778256f8ff6b6112fc56fdaf49cf5b0c6->enter($__internal_91275f858e833be0e0f3c60bc64d3f7778256f8ff6b6112fc56fdaf49cf5b0c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "   <div class=\"container\">
        <div class=\"jumbotron\">
            <h1>Authority</h1>

            <h2>Show Authority</h2>
        </div>

    <div class=\"row\">
    <div class=\"col-lg-12\">
    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["authority"]) ? $context["authority"] : $this->getContext($context, "authority")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["authority"]) ? $context["authority"] : $this->getContext($context, "authority")), "name", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Context</th>
                <td>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["authority"]) ? $context["authority"] : $this->getContext($context, "authority")), "context", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>HQ address</th>
                <td>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["authority"]) ? $context["authority"] : $this->getContext($context, "authority")), "hqAdress", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["authority"]) ? $context["authority"] : $this->getContext($context, "authority")), "description", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Url</th>
                <td>";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["authority"]) ? $context["authority"] : $this->getContext($context, "authority")), "url", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["authority"]) ? $context["authority"] : $this->getContext($context, "authority")), "email", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul class=\"list-unstyled\">
        <li>
            <a class=\"btn btn-default\" href=\"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("authority_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a class=\"btn btn-default\" href=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("authority_edit", array("id" => $this->getAttribute((isset($context["authority"]) ? $context["authority"] : $this->getContext($context, "authority")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 54
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input class=\"btn btn-danger\" type=\"submit\" value=\"Delete\">
            ";
        // line 56
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
    </div>
    </div>
   </div>
";
        
        $__internal_91275f858e833be0e0f3c60bc64d3f7778256f8ff6b6112fc56fdaf49cf5b0c6->leave($__internal_91275f858e833be0e0f3c60bc64d3f7778256f8ff6b6112fc56fdaf49cf5b0c6_prof);

    }

    public function getTemplateName()
    {
        return "authority/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 56,  119 => 54,  113 => 51,  107 => 48,  97 => 41,  90 => 37,  83 => 33,  76 => 29,  69 => 25,  62 => 21,  55 => 17,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'frontoffice.html.twig' %}*/
/* */
/* {% block content %}*/
/*    <div class="container">*/
/*         <div class="jumbotron">*/
/*             <h1>Authority</h1>*/
/* */
/*             <h2>Show Authority</h2>*/
/*         </div>*/
/* */
/*     <div class="row">*/
/*     <div class="col-lg-12">*/
/*     <table class="table">*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ authority.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Name</th>*/
/*                 <td>{{ authority.name }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Context</th>*/
/*                 <td>{{ authority.context }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>HQ address</th>*/
/*                 <td>{{ authority.hqAdress }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Description</th>*/
/*                 <td>{{ authority.description }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Url</th>*/
/*                 <td>{{ authority.url }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Email</th>*/
/*                 <td>{{ authority.email }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul class="list-unstyled">*/
/*         <li>*/
/*             <a class="btn btn-default" href="{{ path('authority_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a class="btn btn-default" href="{{ path('authority_edit', { 'id': authority.id }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input class="btn btn-danger" type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/*     </div>*/
/*     </div>*/
/*    </div>*/
/* {% endblock %}*/
/* */
