<?php

/* default/view.claim.html.twig */
class __TwigTemplate_cefe64d80e6bbab6673e45271172227e5a72944a074c2d638544a1f41b122759 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 2
        $this->parent = $this->loadTemplate("frontoffice.html.twig", "default/view.claim.html.twig", 2);
        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "frontoffice.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/view.claim.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["claim"]) || array_key_exists("claim", $context) ? $context["claim"] : (function () { throw new Twig_Error_Runtime('Variable "claim" does not exist.', 3, $this->source); })()), "title", [])), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_content($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "    <div class=\"conainer\">
        <div class=\"row\">
            <div class=\"col-lg-3\">
            </div>
            <div class=\"col-lg-6\">
        <h1>";
        // line 10
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["claim"]) || array_key_exists("claim", $context) ? $context["claim"] : (function () { throw new Twig_Error_Runtime('Variable "claim" does not exist.', 10, $this->source); })()), "title", [])), "html", null, true);
        echo "</h1>
        <p>";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["claim"]) || array_key_exists("claim", $context) ? $context["claim"] : (function () { throw new Twig_Error_Runtime('Variable "claim" does not exist.', 11, $this->source); })()), "description", []), "html", null, true);
        echo "</p>
        <h2>Media list</h2>
        
  <div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\">
  <!-- Indicators -->
  <ol class=\"carousel-indicators\">
      ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["claim"]) || array_key_exists("claim", $context) ? $context["claim"] : (function () { throw new Twig_Error_Runtime('Variable "claim" does not exist.', 17, $this->source); })()), "medias", []));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["medium"]) {
            // line 18
            echo "          <li data-target=\"#myCarousel\" data-slide-to=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index0", []), "html", null, true);
            echo "\" ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [])) {
                echo " class=\"active\" ";
            }
            echo "></li>
          ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['medium'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "  </ol>

  <!-- Wrapper for slides -->
  <div class=\"carousel-inner\" role=\"listbox\">
      ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["claim"]) || array_key_exists("claim", $context) ? $context["claim"] : (function () { throw new Twig_Error_Runtime('Variable "claim" does not exist.', 24, $this->source); })()), "medias", []));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["medium"]) {
            // line 25
            echo "          <div ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [])) {
                echo "class=\"item active\" ";
            } else {
                echo " class=\"item\" ";
            }
            echo ">
      <img class=\"img-responsive center-block\" src=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["medium"], "webpath", [])), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["medium"], "alternative", []), "html", null, true);
            echo "\">
          </div>
          ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['medium'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "  </div>
  <!-- Left and right controls -->
  <a class=\"left carousel-control\" href=\"#myCarousel\" role=\"button\" data-slide=\"prev\">
    <span class=\"glyphicon glyphicon-chevron-left\" aria-hidden=\"true\"></span>
    <span class=\"sr-only\">Previous</span>
  </a>
  <a class=\"right carousel-control\" href=\"#myCarousel\" role=\"button\" data-slide=\"next\">
    <span class=\"glyphicon glyphicon-chevron-right\" aria-hidden=\"true\"></span>
    <span class=\"sr-only\">Next</span>
  </a>
</div>
        <!--
        <div class=\"row\">
           ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["claim"]) || array_key_exists("claim", $context) ? $context["claim"] : (function () { throw new Twig_Error_Runtime('Variable "claim" does not exist.', 42, $this->source); })()), "medias", []));
        foreach ($context['_seq'] as $context["_key"] => $context["medium"]) {
            echo " 
               <div class=\"col-lg-3\">
                   <img class=\"img-responsive center-block\" src=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["medium"], "webpath", [])), "html", null, true);
            echo "\">
               </div>
           ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['medium'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "        </div>
        -->
    </div>
        <div class=\"col-lg-3\"></div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "default/view.claim.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 47,  188 => 44,  181 => 42,  166 => 29,  147 => 26,  138 => 25,  121 => 24,  115 => 20,  94 => 18,  77 => 17,  68 => 11,  64 => 10,  57 => 5,  51 => 4,  39 => 3,  15 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# empty Twig template #}
{% extends 'frontoffice.html.twig' %}
{% block title %}{{ claim.title|capitalize }}{% endblock %}
{% block content %}
    <div class=\"conainer\">
        <div class=\"row\">
            <div class=\"col-lg-3\">
            </div>
            <div class=\"col-lg-6\">
        <h1>{{ claim.title|capitalize }}</h1>
        <p>{{ claim.description }}</p>
        <h2>Media list</h2>
        
  <div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\">
  <!-- Indicators -->
  <ol class=\"carousel-indicators\">
      {% for medium in claim.medias %}
          <li data-target=\"#myCarousel\" data-slide-to=\"{{ loop.index0 }}\" {%if loop.first %} class=\"active\" {% endif %}></li>
          {% endfor%}
  </ol>

  <!-- Wrapper for slides -->
  <div class=\"carousel-inner\" role=\"listbox\">
      {% for medium in  claim.medias %}
          <div {%if loop.first %}class=\"item active\" {% else%} class=\"item\" {% endif %}>
      <img class=\"img-responsive center-block\" src=\"{{ asset(medium.webpath) }}\" alt=\"{{ medium.alternative}}\">
          </div>
          {% endfor %}
  </div>
  <!-- Left and right controls -->
  <a class=\"left carousel-control\" href=\"#myCarousel\" role=\"button\" data-slide=\"prev\">
    <span class=\"glyphicon glyphicon-chevron-left\" aria-hidden=\"true\"></span>
    <span class=\"sr-only\">Previous</span>
  </a>
  <a class=\"right carousel-control\" href=\"#myCarousel\" role=\"button\" data-slide=\"next\">
    <span class=\"glyphicon glyphicon-chevron-right\" aria-hidden=\"true\"></span>
    <span class=\"sr-only\">Next</span>
  </a>
</div>
        <!--
        <div class=\"row\">
           {% for medium in claim.medias %} 
               <div class=\"col-lg-3\">
                   <img class=\"img-responsive center-block\" src=\"{{ asset(medium.webpath) }}\">
               </div>
           {% endfor %}
        </div>
        -->
    </div>
        <div class=\"col-lg-3\"></div>
        </div>
    </div>
{%endblock%}
", "default/view.claim.html.twig", "/home/mohamed/PhpstormProjects/Quickstart3/symfony/app/Resources/views/default/view.claim.html.twig");
    }
}
