<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_e5843f23548ffc957c0240268f55b57d10087bdb141eee7f22fc23a50ad94572 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1b85950904487c57e892f8310d1e5a1c23081cc167a274ff4dbab9337a04f2b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b85950904487c57e892f8310d1e5a1c23081cc167a274ff4dbab9337a04f2b9->enter($__internal_1b85950904487c57e892f8310d1e5a1c23081cc167a274ff4dbab9337a04f2b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1b85950904487c57e892f8310d1e5a1c23081cc167a274ff4dbab9337a04f2b9->leave($__internal_1b85950904487c57e892f8310d1e5a1c23081cc167a274ff4dbab9337a04f2b9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_56e0168e1d7092d269f7a5981da19483d3d569417037cfbef3c88f0f007cfeb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56e0168e1d7092d269f7a5981da19483d3d569417037cfbef3c88f0f007cfeb3->enter($__internal_56e0168e1d7092d269f7a5981da19483d3d569417037cfbef3c88f0f007cfeb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_56e0168e1d7092d269f7a5981da19483d3d569417037cfbef3c88f0f007cfeb3->leave($__internal_56e0168e1d7092d269f7a5981da19483d3d569417037cfbef3c88f0f007cfeb3_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a13c91262199bdae842a3dbaffe1280a88229b4ff0ac8045c7865c0d01396748 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a13c91262199bdae842a3dbaffe1280a88229b4ff0ac8045c7865c0d01396748->enter($__internal_a13c91262199bdae842a3dbaffe1280a88229b4ff0ac8045c7865c0d01396748_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a13c91262199bdae842a3dbaffe1280a88229b4ff0ac8045c7865c0d01396748->leave($__internal_a13c91262199bdae842a3dbaffe1280a88229b4ff0ac8045c7865c0d01396748_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_788b2498963745fced32b3de10c0e566248b4a512da56b8f1333749fde904e48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_788b2498963745fced32b3de10c0e566248b4a512da56b8f1333749fde904e48->enter($__internal_788b2498963745fced32b3de10c0e566248b4a512da56b8f1333749fde904e48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_788b2498963745fced32b3de10c0e566248b4a512da56b8f1333749fde904e48->leave($__internal_788b2498963745fced32b3de10c0e566248b4a512da56b8f1333749fde904e48_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
";
    }
}
