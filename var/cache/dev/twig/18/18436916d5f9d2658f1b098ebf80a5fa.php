<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* security/login.html.twig */
class __TwigTemplate_e733301b175f712972ce5a5f4361a9f6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Log in!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<form method=\"post\">
  ";
        // line 4
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 4, $this->source); })())) {
            // line 5
            echo "  <div class=\"alert alert-danger\">
    ";
            // line 6
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 6, $this->source); })()), "messageKey", [], "any", false, false, false, 6), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 6, $this->source); })()), "messageData", [], "any", false, false, false, 6), "security"), "html", null, true);
            echo "
  </div>
  ";
        }
        // line 8
        echo " ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 8, $this->source); })()), "user", [], "any", false, false, false, 8)) {
            // line 9
            echo "  <div class=\"mb-3\">
    You are logged in as ";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "user", [], "any", false, false, false, 10), "userIdentifier", [], "any", false, false, false, 10), "html", null, true);
            echo ",
    <a href=\"";
            // line 11
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Logout</a>
  </div>
  ";
        }
        // line 14
        echo "
  <h1 class=\"h3 mb-3 font-weight-normal\">Please log in</h1>
  <label for=\"inputEmail\">Email</label>
  <input
    type=\"email\"
    value=\"";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 19, $this->source); })()), "html", null, true);
        echo "\"
    name=\"email\"
    id=\"inputEmail\"
    class=\"form-control\"
    autocomplete=\"email\"
    required
    autofocus
  />
  <label for=\"inputPassword\">Password</label>
  <input
    type=\"password\"
    name=\"password\"
    id=\"inputPassword\"
    class=\"form-control\"
    autocomplete=\"current-password\"
    required
  />

  <input
    type=\"hidden\"
    name=\"_csrf_token\"
    value=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\"
  />

  <button class=\"btn btn-lg btn-primary\" type=\"submit\">Sign in</button>
  <a href=\"";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\">Home</a>
</form>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  139 => 44,  132 => 40,  108 => 19,  101 => 14,  95 => 11,  91 => 10,  88 => 9,  85 => 8,  79 => 6,  76 => 5,  74 => 4,  71 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %} {% block title %}Log in!{% endblock %} {% block
body %}
<form method=\"post\">
  {% if error %}
  <div class=\"alert alert-danger\">
    {{ error.messageKey|trans(error.messageData, 'security') }}
  </div>
  {% endif %} {% if app.user %}
  <div class=\"mb-3\">
    You are logged in as {{ app.user.userIdentifier }},
    <a href=\"{{ path('app_logout') }}\">Logout</a>
  </div>
  {% endif %}

  <h1 class=\"h3 mb-3 font-weight-normal\">Please log in</h1>
  <label for=\"inputEmail\">Email</label>
  <input
    type=\"email\"
    value=\"{{ last_username }}\"
    name=\"email\"
    id=\"inputEmail\"
    class=\"form-control\"
    autocomplete=\"email\"
    required
    autofocus
  />
  <label for=\"inputPassword\">Password</label>
  <input
    type=\"password\"
    name=\"password\"
    id=\"inputPassword\"
    class=\"form-control\"
    autocomplete=\"current-password\"
    required
  />

  <input
    type=\"hidden\"
    name=\"_csrf_token\"
    value=\"{{ csrf_token('authenticate') }}\"
  />

  <button class=\"btn btn-lg btn-primary\" type=\"submit\">Sign in</button>
  <a href=\"{{ path('app_home') }}\">Home</a>
</form>
{% endblock %}
", "security/login.html.twig", "/Users/dramsss/Documents/Projets Perso/Symfony/forum-test/templates/security/login.html.twig");
    }
}
