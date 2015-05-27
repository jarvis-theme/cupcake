<!DOCTYPE html>
<html>
    <head>
        <title>{{ Theme::place('title') }}</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        {{ Theme::partial('seostuff') }}    
        {{ Theme::partial('defaultcss') }}  
        <!--Google Webfont -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
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
        {{ Theme::asset()->scripts() }}
        {{ Theme::asset()->container('footer')->scripts() }}
        {{ Theme::partial('analytic') }}    
    </body>
</html>