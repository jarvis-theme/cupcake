<!DOCTYPE html>
<html>
    <head>
        {{ Theme::partial('seostuff') }} 
        {{ Theme::partial('defaultcss') }} 
        {{ Theme::asset()->styles() }} 
        <noscript>
            {{HTML::style(dirTemaToko().'cupcake/assets/css/nojs.css')}}
        </noscript>
    </head>
    <body>
        <div class="page">
            {{ Theme::partial('header') }} 
            {{ Theme::partial('slider') }} 
            <div class="img-ribbon">&nbsp;</div>
            <section id="main-content">
                {{ Theme::place('content') }} 
            </section>
            {{ Theme::partial('footer') }} 
        </div>
        {{ Theme::partial('defaultjs') }} 
        {{ Theme::partial('analytic') }} 
    </body>
</html>