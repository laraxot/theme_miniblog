  <head>
      {!! Theme::metatags() !!}

    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700|Playfair+Display:400,700,900" rel="stylesheet">
    @php
      Theme::add('pub_theme::dist/css/app.css',1);
    @endphp
  

    {!! Theme::showStyles(false) !!}
  </head>