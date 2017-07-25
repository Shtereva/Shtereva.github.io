<?php

/* form/fields.html.twig */
class __TwigTemplate_eb075825b57122ab6567d5ae649aaf38427c96c25e805ac4893cd5a5fd4cc3ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'date_time_picker_widget' => array($this, 'block_date_time_picker_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e7efb075c12ce0956fba3878a0804676a6f86e9878e2739d004aa1223fde409b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7efb075c12ce0956fba3878a0804676a6f86e9878e2739d004aa1223fde409b->enter($__internal_e7efb075c12ce0956fba3878a0804676a6f86e9878e2739d004aa1223fde409b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form/fields.html.twig"));

        // line 9
        echo "
";
        // line 10
        $this->displayBlock('date_time_picker_widget', $context, $blocks);
        
        $__internal_e7efb075c12ce0956fba3878a0804676a6f86e9878e2739d004aa1223fde409b->leave($__internal_e7efb075c12ce0956fba3878a0804676a6f86e9878e2739d004aa1223fde409b_prof);

    }

    public function block_date_time_picker_widget($context, array $blocks = array())
    {
        $__internal_b92c23c08fc2155ec133e2a9e6a896b690361631e2b25eae4002af18d03d6c33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b92c23c08fc2155ec133e2a9e6a896b690361631e2b25eae4002af18d03d6c33->enter($__internal_b92c23c08fc2155ec133e2a9e6a896b690361631e2b25eae4002af18d03d6c33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_time_picker_widget"));

        // line 11
        echo "    ";
        ob_start();
        // line 12
        echo "        <div class=\"input-group date\" data-toggle=\"datetimepicker\">
            ";
        // line 13
        $this->displayBlock("datetime_widget", $context, $blocks);
        echo "
            ";
        // line 15
        echo "                ";
        // line 16
        echo "            ";
        // line 17
        echo "        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_b92c23c08fc2155ec133e2a9e6a896b690361631e2b25eae4002af18d03d6c33->leave($__internal_b92c23c08fc2155ec133e2a9e6a896b690361631e2b25eae4002af18d03d6c33_prof);

    }

    public function getTemplateName()
    {
        return "form/fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  52 => 17,  50 => 16,  48 => 15,  44 => 13,  41 => 12,  38 => 11,  26 => 10,  23 => 9,);
    }

    public function getSource()
    {
        return "{#
   Each field type is rendered by a template fragment, which is determined
   by the name of your form type class (DateTimePickerType -> date_time_picker)
   and the suffix \"_widget\". This can be controlled by overriding getBlockPrefix()
   in DateTimePickerType.

   See http://symfony.com/doc/current/cookbook/form/create_custom_field_type.html#creating-a-template-for-the-field
#}

{% block date_time_picker_widget %}
    {% spaceless %}
        <div class=\"input-group date\" data-toggle=\"datetimepicker\">
            {{ block('datetime_widget') }}
            {#<span class=\"input-group-addon\">#}
                {#<span class=\"fa fa-calendar\" aria-hidden=\"true\"></span>#}
            {#</span>#}
        </div>
    {% endspaceless %}
{% endblock %}
";
    }
}
