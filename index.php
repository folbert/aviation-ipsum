<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Aviation Ipsum by First Flight</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

<link rel="stylesheet" href="http://use.typekit.net/c/9cf88c/adobe-garamond-pro:i4:i7:n4:n7,proxima-nova-extra-condensed:n2:n3:n4:n6:n7.Xs1:N:2,Xs0:N:2,Xs2:N:2,Xrz:N:2,SCw:N:2,SCp:N:2,SCr:N:2,SCt:N:2,SCm:N:2/d?3bb2a6e53c9684ffdc9a98f4195b2a62d5819100d8b71b237f5b90bac71785ecb61adb2c99f690cba5970c9bc28776fcfde8c66318a16d0dabade49d31408ed823122afed943fd8d7a920df63827584065f289e4d2b44e2bb44c2e7a3a1a65ab85232e3ec3b6bf528b4e5a4dc8594e7dfafabd9d9f23fbd4cb0716277a0a6118e9438cbd16c860c3157ba01352df6b7ddd89ad0f779493e5f8d1fd96dd089477d8d9de068f2d57c04571dc52c26363c1c5f274c301a769aefb65c98552b07ac5370a8c1f818ea54ae0276f64961583c7fbceb561e6bfaa40896a7dc8ed94bb">

        <script type="text/javascript">try{Typekit.load();}catch(e){}</script>

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/main.css">

        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

    </div>

    <!-- Main jumbotron for a primary marketing message or call to action -->

    <header>
      <div class="container">
        <div class="row">
          <div class="col-xs-12 text-center">
            <a href="http://www.firstflight.se" id="ffc-logo-wrapper"><span>First Flight Communication</span></a>

            <h1>Aviation Ipsum</h1>

          </div>
        </div>
      </div>
    </header>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-sm-3 build-wrapper">
          <h2>Build your ipsum<button class="btn btn-default btn-hidden">.</button></h2>

          <form action="" method="post" role="form" id="build-form">

            <div class="form-group">

              <label for="nr-of-paragraphs">Nr of paragraphs</label>
              <select class="form-control" id="nr-of-paragraphs-select" name="nr_of_p">
                <?php
                  $options_html = '';
                  for($nr = 1; $nr < 11; $nr++) {
                    $options_html .= '<option value="' . $nr . '"' . ($nr == 3 ? ' selected="selected"' : '') . '>' . $nr .' </option>';
                  }
                  echo $options_html;
                ?>
              </select>

            </div>

            <div class="checkbox" style="display: none">
              <label>
                <input type="checkbox" id="include-source"> Include sources
              </label>
            </div>

            <div class="checkbox">
              <label>
                <input type="checkbox" id="wrap-in-p"> With HTML-tags
              </label>
            </div>

            <input type="submit" class="btn btn-default pull-right" value="Build" id="build-initiator" />

            <div class="float-breaker"></div>

          </form>

          <p class="small"><span class="glyphicon glyphicon-question-sign"></span> Hit "Build" and we will randomly fetch the nr of paragraphs that you want from our collection of <span id="nr-of-quotes"></span> aviation-related quotes.</p>

        </div>
        <div class="col-sm-9 result-wrapper">

          <h2>here's your ipsum <button class="btn btn-default" id="show-sources" data-show="1">Toggle sources</button></h2>

          <textarea id="ipsum" class="form-control">

          </textarea>
       </div>
      </div>

      <hr>

      <footer>
        <p>Made by <a href="http://www.firstflight.se">First Flight Communication</a><br/>
        Quotes collected from, among other, <a href="http://www.skygod.com/quotes/predictions.html">Sky God</a> and <a href="http://www.limalima.com/aviation_quote_of_the_month.htm">Lima Lima</a> and stored in <a href="js/quotes.js">this JSON object</a>.<br/>
        Disclaimer: we have made no attempts to make sure that the quotes are real.
      </footer>

    </div> <!-- /container -->        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>


    <a href="https://github.com/folbert/aviation-ipsum/"><img style="position: absolute; top: 0; right: 0; border: 0;" src="https://github-camo.global.ssl.fastly.net/52760788cde945287fbb584134c4cbc2bc36f904/68747470733a2f2f73332e616d617a6f6e6177732e636f6d2f6769746875622f726962626f6e732f666f726b6d655f72696768745f77686974655f6666666666662e706e67" alt="Fork me on GitHub" data-canonical-src="https://s3.amazonaws.com/github/ribbons/forkme_right_white_ffffff.png"></a>

      <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.1.min.js"><\/script>')</script>
      <!--<script src="js/vendor/bootstrap.min.js"></script> -->
      <script src="js/vendor/jquery.autosize.min.js"></script>
      <script src="js/quotes.js"></script>
      <script src="js/main.js"></script>
    </body>
</html>
