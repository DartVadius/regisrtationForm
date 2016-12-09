<div class="row">
    {% if register is defined %}
        {% include 'register.tpl' %}        
    {% elseif profile is defined %}
        {% include 'profile.tpl' %}
    {% elseif update is defined %}
        {% include 'update.tpl' %}
    {% else %}
        {% include 'content.tpl' %}
    {% endif %}
</div>
