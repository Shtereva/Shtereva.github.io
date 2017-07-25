<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_0cc0ac51c1bdc77a0de8d0fcf4b1fc510e30c96f44e29d363639f625bfe69eb2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_691f33ff9bb2a6843c1f9e8f15f7829cfef827e0ec6d8899c7c899a792638880 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_691f33ff9bb2a6843c1f9e8f15f7829cfef827e0ec6d8899c7c899a792638880->enter($__internal_691f33ff9bb2a6843c1f9e8f15f7829cfef827e0ec6d8899c7c899a792638880_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_691f33ff9bb2a6843c1f9e8f15f7829cfef827e0ec6d8899c7c899a792638880->leave($__internal_691f33ff9bb2a6843c1f9e8f15f7829cfef827e0ec6d8899c7c899a792638880_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_03e6a9d98e718ac1b8363730828e09b36400c5659503cad75d52f742c0c19ce0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03e6a9d98e718ac1b8363730828e09b36400c5659503cad75d52f742c0c19ce0->enter($__internal_03e6a9d98e718ac1b8363730828e09b36400c5659503cad75d52f742c0c19ce0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_03e6a9d98e718ac1b8363730828e09b36400c5659503cad75d52f742c0c19ce0->leave($__internal_03e6a9d98e718ac1b8363730828e09b36400c5659503cad75d52f742c0c19ce0_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a23566f8a38001f9bd9aa774baa455a9aa2e494fe0599a1cc8177dd4c7a9c797 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a23566f8a38001f9bd9aa774baa455a9aa2e494fe0599a1cc8177dd4c7a9c797->enter($__internal_a23566f8a38001f9bd9aa774baa455a9aa2e494fe0599a1cc8177dd4c7a9c797_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a23566f8a38001f9bd9aa774baa455a9aa2e494fe0599a1cc8177dd4c7a9c797->leave($__internal_a23566f8a38001f9bd9aa774baa455a9aa2e494fe0599a1cc8177dd4c7a9c797_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_61c9de9e70d549c11ae47fea03612790ea101f96e0931897bc52d39ccedd1be2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61c9de9e70d549c11ae47fea03612790ea101f96e0931897bc52d39ccedd1be2->enter($__internal_61c9de9e70d549c11ae47fea03612790ea101f96e0931897bc52d39ccedd1be2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_61c9de9e70d549c11ae47fea03612790ea101f96e0931897bc52d39ccedd1be2->leave($__internal_61c9de9e70d549c11ae47fea03612790ea101f96e0931897bc52d39ccedd1be2_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
";
    }
}
