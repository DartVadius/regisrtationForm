<div class="row">
    {% if register is defined %}
        {% include 'register.tpl' %}        
    {% elseif update is defined %}
        {% include 'profile.tpl' %}
    {% else %}
        {% include 'content.tpl' %}
    {% endif %}
</div>
