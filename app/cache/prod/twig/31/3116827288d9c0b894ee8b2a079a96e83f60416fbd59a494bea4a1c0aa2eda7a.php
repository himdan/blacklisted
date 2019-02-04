<?php

/* claim/show.html.twig */
class __TwigTemplate_b758acbe6155672522c369f882b7de741fd7cb779a23368aa65cb8334b8db44c extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("frontoffice.html.twig", "claim/show.html.twig", 1);
        $this->blocks = [
            'title' => [$this, 'block_title'],
            'headJs' => [$this, 'block_headJs'],
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "claim/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["claim"]) || array_key_exists("claim", $context) ? $context["claim"] : (function () { throw new Twig_Error_Runtime('Variable "claim" does not exist.', 2, $this->source); })()), "title", []), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_headJs($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headJs"));

        // line 4
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["claim"]) || array_key_exists("claim", $context) ? $context["claim"] : (function () { throw new Twig_Error_Runtime('Variable "claim" does not exist.', 4, $this->source); })()), "located", []) == true)) {
            // line 5
            echo "    <script src=\"http://maps.googleapis.com/maps/api/js\">
    </script>


    <script>

        var myCenter=new google.maps.LatLng(";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["claim"]) || array_key_exists("claim", $context) ? $context["claim"] : (function () { throw new Twig_Error_Runtime('Variable "claim" does not exist.', 11, $this->source); })()), "location", []), "latitude", []), "html", null, true);
            echo ",";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["claim"]) || array_key_exists("claim", $context) ? $context["claim"] : (function () { throw new Twig_Error_Runtime('Variable "claim" does not exist.', 11, $this->source); })()), "location", []), "longtitude", []), "html", null, true);
            echo ");
        var marker;

        function initialize()
        {
            var mapProp = {
                center:myCenter,
                zoom:5,
                mapTypeId:google.maps.MapTypeId.ROADMAP
            };

            var map=new google.maps.Map(document.getElementById(\"googleMap\"),mapProp);

            var marker=new google.maps.Marker({
                position:myCenter,
                animation:google.maps.Animation.BOUNCE
            });
            var infowindow = new google.maps.InfoWindow({
                content: 'Adresss: ' + '";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["claim"]) || array_key_exists("claim", $context) ? $context["claim"] : (function () { throw new Twig_Error_Runtime('Variable "claim" does not exist.', 29, $this->source); })()), "location", []), "address", []), "html", null, true);
            echo "' + '<br>Description: ' + '";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["claim"]) || array_key_exists("claim", $context) ? $context["claim"] : (function () { throw new Twig_Error_Runtime('Variable "claim" does not exist.', 29, $this->source); })()), "location", []), "description", []), "html", null, true);
            echo "'
            });
            infowindow.open(map,marker)
            marker.setMap(map);
        }

        google.maps.event.addDomListener(window, 'load', initialize);

    </script>
";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 40
    public function block_content($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 41
        echo "    <div class=\"container\">
    <div class=\"jumbotron\">
    <h1>Claim Details</h1>
    </div>
      <div class=\"row\">
    <div class=\"col-sm-2\">

                            <a href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("claim_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["claim"]) || array_key_exists("claim", $context) ? $context["claim"] : (function () { throw new Twig_Error_Runtime('Variable "claim" does not exist.', 48, $this->source); })()), "id", [])]), "html", null, true);
        echo "\" class=\"btn btn-default\">Edit</a><br>

                            <a href=\"";
        // line 50
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("claim_index");
        echo "\" class=\"btn btn-default\"><span class=\"glyphicon glyphicon-menu-left\" aria-hidden=\"true\"></span>back to the claim list</a>

                            ";
        // line 52
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 52, $this->source); })()), 'form_start');
        echo "
                            <input type=\"submit\" value=\"Delete\" class=\"btn btn-default\">
                            ";
        // line 54
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 54, $this->source); })()), 'form_end');
        echo "

    </div>
    <div class=\"col-sm-6\">
    <table class=\"table\">
        <tbody>

            <tr>
                <th>Id</th>
                <td>";
        // line 63
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["claim"]) || array_key_exists("claim", $context) ? $context["claim"] : (function () { throw new Twig_Error_Runtime('Variable "claim" does not exist.', 63, $this->source); })()), "id", []), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Title</th>
                <td>";
        // line 67
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["claim"]) || array_key_exists("claim", $context) ? $context["claim"] : (function () { throw new Twig_Error_Runtime('Variable "claim" does not exist.', 67, $this->source); })()), "title", []), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 71
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["claim"]) || array_key_exists("claim", $context) ? $context["claim"] : (function () { throw new Twig_Error_Runtime('Variable "claim" does not exist.', 71, $this->source); })()), "description", []), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Created At</th>
                <td>";
        // line 75
        if (twig_get_attribute($this->env, $this->source, (isset($context["claim"]) || array_key_exists("claim", $context) ? $context["claim"] : (function () { throw new Twig_Error_Runtime('Variable "claim" does not exist.', 75, $this->source); })()), "createdAt", [])) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["claim"]) || array_key_exists("claim", $context) ? $context["claim"] : (function () { throw new Twig_Error_Runtime('Variable "claim" does not exist.', 75, $this->source); })()), "createdAt", []), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            
        </tbody>
    </table>
    </div>
    </div>
        ";
        // line 82
        if (twig_get_attribute($this->env, $this->source, (isset($context["claim"]) || array_key_exists("claim", $context) ? $context["claim"] : (function () { throw new Twig_Error_Runtime('Variable "claim" does not exist.', 82, $this->source); })()), "isService", [])) {
            // line 83
            echo "            <h2>Location</h2>
            <div class=\"row\" >
                ";
            // line 85
            if ((twig_get_attribute($this->env, $this->source, (isset($context["claim"]) || array_key_exists("claim", $context) ? $context["claim"] : (function () { throw new Twig_Error_Runtime('Variable "claim" does not exist.', 85, $this->source); })()), "located", []) != true)) {
                // line 86
                echo "                <div class=\"col-sm-3\">
                    <h5>add new location</h5>
                    <span>&nbsp;&nbsp;</span>
                    <a title=\"add new location\" class=\"btn-link\" href=\"";
                // line 89
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("set_location", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["claim"]) || array_key_exists("claim", $context) ? $context["claim"] : (function () { throw new Twig_Error_Runtime('Variable "claim" does not exist.', 89, $this->source); })()), "id", [])]), "html", null, true);
                echo "\"><img class=\"img-responsive\" src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/blacklisted/location.png"), "html", null, true);
                echo "\"></a>
                </div>
                    ";
            } else {
                // line 92
                echo "                        <div class=\"col-sm-6\">
                         <h5>google map</h5>
                            <div id=\"googleMap\" style=\"width:550px;height:380px;\">

                            </div>
                        </div>
                ";
            }
            // line 99
            echo "            </div>
        ";
        }
        // line 101
        echo "
        <h2>Media List</h2>

        <div class=\"row\">
        ";
        // line 105
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["claim"]) || array_key_exists("claim", $context) ? $context["claim"] : (function () { throw new Twig_Error_Runtime('Variable "claim" does not exist.', 105, $this->source); })()), "medias", []));
        foreach ($context['_seq'] as $context["_key"] => $context["medium"]) {
            // line 106
            echo "            ";
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["claim"]) || array_key_exists("claim", $context) ? $context["claim"] : (function () { throw new Twig_Error_Runtime('Variable "claim" does not exist.', 106, $this->source); })()), "medias", [])) > 12)) {
                // line 107
                echo "                <div class=\"col-sm-1\">
                ";
            } else {
                // line 109
                echo "                <div class=\"col-sm-2\">        
            ";
            }
            // line 111
            echo "                <h5>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["medium"], "alternative", []), "html", null, true);
            echo "</h5>
                <span>";
            // line 112
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["medium"], "createdat", []), "Y-m-d H:i:s"), "html", null, true);
            echo "</span>
                <a href=\"";
            // line 113
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("media_show", ["id" => twig_get_attribute($this->env, $this->source, $context["medium"], "id", [])]), "html", null, true);
            echo "\" title=\"\">
                    <img  class=\"img-responsive\" src=\"";
            // line 114
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["medium"], "webpath", [])), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["medium"], "alternative", []), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["medium"], "alternative", []), "html", null, true);
            echo "\"/>
                </a>
                    
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['medium'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 119
        echo "

                <div class=\"col-sm-3\">
                    <h5>add new medium</h5>
                    <span>&nbsp;&nbsp;</span>
                    <a title=\"add new medium\" class=\"btn-link\" href=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_medium", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["claim"]) || array_key_exists("claim", $context) ? $context["claim"] : (function () { throw new Twig_Error_Runtime('Variable "claim" does not exist.', 124, $this->source); })()), "id", [])]), "html", null, true);
        echo "\"><img class=\"img-responsive\" src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/blacklisted/add.png"), "html", null, true);
        echo "\"></a>
                </div>

                </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "claim/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  277 => 124,  270 => 119,  255 => 114,  251 => 113,  247 => 112,  242 => 111,  238 => 109,  234 => 107,  231 => 106,  227 => 105,  221 => 101,  217 => 99,  208 => 92,  200 => 89,  195 => 86,  193 => 85,  189 => 83,  187 => 82,  175 => 75,  168 => 71,  161 => 67,  154 => 63,  142 => 54,  137 => 52,  132 => 50,  127 => 48,  118 => 41,  112 => 40,  92 => 29,  69 => 11,  61 => 5,  58 => 4,  52 => 3,  40 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'frontoffice.html.twig' %}
{% block title %}{{ claim.title }}{% endblock %}
{% block headJs %}
    {% if claim.located== true %}
    <script src=\"http://maps.googleapis.com/maps/api/js\">
    </script>


    <script>

        var myCenter=new google.maps.LatLng({{ claim.location.latitude }},{{ claim.location.longtitude }});
        var marker;

        function initialize()
        {
            var mapProp = {
                center:myCenter,
                zoom:5,
                mapTypeId:google.maps.MapTypeId.ROADMAP
            };

            var map=new google.maps.Map(document.getElementById(\"googleMap\"),mapProp);

            var marker=new google.maps.Marker({
                position:myCenter,
                animation:google.maps.Animation.BOUNCE
            });
            var infowindow = new google.maps.InfoWindow({
                content: 'Adresss: ' + '{{ claim.location.address }}' + '<br>Description: ' + '{{ claim.location.description }}'
            });
            infowindow.open(map,marker)
            marker.setMap(map);
        }

        google.maps.event.addDomListener(window, 'load', initialize);

    </script>
{% endif %}
{% endblock %}
{% block content %}
    <div class=\"container\">
    <div class=\"jumbotron\">
    <h1>Claim Details</h1>
    </div>
      <div class=\"row\">
    <div class=\"col-sm-2\">

                            <a href=\"{{ path('claim_edit', { 'id': claim.id }) }}\" class=\"btn btn-default\">Edit</a><br>

                            <a href=\"{{ path('claim_index') }}\" class=\"btn btn-default\"><span class=\"glyphicon glyphicon-menu-left\" aria-hidden=\"true\"></span>back to the claim list</a>

                            {{ form_start(delete_form) }}
                            <input type=\"submit\" value=\"Delete\" class=\"btn btn-default\">
                            {{ form_end(delete_form) }}

    </div>
    <div class=\"col-sm-6\">
    <table class=\"table\">
        <tbody>

            <tr>
                <th>Id</th>
                <td>{{ claim.id }}</td>
            </tr>
            <tr>
                <th>Title</th>
                <td>{{ claim.title }}</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>{{ claim.description }}</td>
            </tr>
            <tr>
                <th>Created At</th>
                <td>{% if claim.createdAt %}{{ claim.createdAt|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
            
        </tbody>
    </table>
    </div>
    </div>
        {% if claim.isService %}
            <h2>Location</h2>
            <div class=\"row\" >
                {% if claim.located!= true %}
                <div class=\"col-sm-3\">
                    <h5>add new location</h5>
                    <span>&nbsp;&nbsp;</span>
                    <a title=\"add new location\" class=\"btn-link\" href=\"{{ path('set_location',{ 'id': claim.id }) }}\"><img class=\"img-responsive\" src=\"{{ asset('images/blacklisted/location.png') }}\"></a>
                </div>
                    {% else %}
                        <div class=\"col-sm-6\">
                         <h5>google map</h5>
                            <div id=\"googleMap\" style=\"width:550px;height:380px;\">

                            </div>
                        </div>
                {% endif %}
            </div>
        {% endif %}

        <h2>Media List</h2>

        <div class=\"row\">
        {% for medium in claim.medias %}
            {% if claim.medias|length >12%}
                <div class=\"col-sm-1\">
                {% else %}
                <div class=\"col-sm-2\">        
            {% endif %}
                <h5>{{ medium.alternative }}</h5>
                <span>{{ medium.createdat|date('Y-m-d H:i:s')  }}</span>
                <a href=\"{{path('media_show',{'id': medium.id }) }}\" title=\"\">
                    <img  class=\"img-responsive\" src=\"{{ asset(medium.webpath) }}\" alt=\"{{ medium.alternative }}\" title=\"{{ medium.alternative }}\"/>
                </a>
                    
                    </div>
                {% endfor%}


                <div class=\"col-sm-3\">
                    <h5>add new medium</h5>
                    <span>&nbsp;&nbsp;</span>
                    <a title=\"add new medium\" class=\"btn-link\" href=\"{{ path('add_medium', { 'id': claim.id }) }}\"><img class=\"img-responsive\" src=\"{{ asset('images/blacklisted/add.png') }}\"></a>
                </div>

                </div>
    </div>
{% endblock %}
", "claim/show.html.twig", "/home/mohamed/PhpstormProjects/Quickstart3/symfony/app/Resources/views/claim/show.html.twig");
    }
}
