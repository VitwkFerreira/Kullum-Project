  <!DOCTYPE html>
  <!-- Cores do Site
  #FFFFFF - White
  #356E95 - Queen Blue
  #D7263D - Rusty Red
  #87D68D - Dark Sea Green
  #FFC145 - Pastel Orange
-->

<html>
   <head>
      <title>The Materialize Example</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>

   	<style type="text/css">
      .corpo {
        padding-left: 300px;
      }

      .slider {
        height: 300px;
        float: right;
      }

		  #btnSidenav {
		  	display: none;
		  }

		  /* CSS daqui em diante só é aplicado quando a tela está pequena */
		  @media only screen and (max-width : 992px) {
        .corpo {
          padding-left: 0px;
        }

        .slider {
          width: 100%;
          float: left;
        }

	      #btnSidenav {
	      	display: block;
          font-size: 32px;
          padding: 20px;
         
	      }
	  </style>
   </head>
   
   <body>
    
        
  <div class="corpo">
    <div class="row">
      <center><h3 class="flow-text">Histórias Populares</h3></center>
        <div class="slider">
          <ul class="slides">
            <li>
              <img src="sunset.jpg">
              <div class="caption center-align">
                <h3>História do Fortnite</h3>
                <h5 class="light grey-text text-lighten-3">Como jogar Fortnite e finalmente conseguir o tão sonhado Victory Royale, nesse jogo da Epic Games que conquistou o mundo.</h5>
                <img src="anon.png" style="width: 50px; height: 50px; float: left" class="circle">
                <h6 class="light grey-text text-lighten-3" style="float: left; padding-left: 10px; padding-top: 10px">VitwkFerreira</h6>
                <div class="chip" style="float: right">Aventura</div>
                <div class="chip" style="float: right">Ação</div>
              </div>
            </li>
            <li>
              <img src="sunset.jpg">
              <div class="caption left-align">
                <h3>Left Aligned Caption</h3>
                <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
              </div>
            </li>
            <li>
              <img src="sunset.jpg">
              <div class="caption right-align">
                <h3>Right Aligned Caption</h3>
                <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
              </div>
            </li>
            <li>
              <img src="sunset.jpg">
              <div class="caption center-align">
                <h3>This is our big Tagline!</h3>
                <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
              </div>
            </li>
          </ul>
        </div>
      </div>

        <ul class="collapsible popout">
          <li>
            <div class="collapsible-header"><i class="material-icons">filter_drama</i>First</div>
            <div class="collapsible-body"> <div class="col s12 m7">
    <div class="card horizontal">
      <div class="card-image">
        <img src="sunset.jpg">
      </div>
      <div class="card-stacked">
        <div class="card-content">
          <p>I am a very simple card. I am good at containing small bits of information.</p>
        </div>
        <div class="card-action">
          <a href="#">This is a link</a>
        </div>
      </div>
    </div>
  </div></div>
          </li>
          <li>
            <div class="collapsible-header"><i class="material-icons">place</i>Second</div>
            <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
          </li>
          <li>
            <div class="collapsible-header"><i class="material-icons">whatshot</i>Third</div>
            <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
          </li>
        </ul>
  </div>

    <script type="text/javascript">
      $(".button-collapse").sideNav({
          closeOnClick: true,
          draggable: true,
        });

        $(document).ready(function(){
          $('.slider').slider();
        });

         document.addEventListener('DOMContentLoaded', function() {
          var elems = document.querySelectorAll('.autocomplete');
          var instances = M.Autocomplete.init(elems, options);
        });

        $(document).ready(function(){
          $('input.autocomplete').autocomplete({
            data: {
              "Fantasia" : null,
              "Ação" : null,
              "Aventura" : null,
              "Romance" : null,
              "Fanfic" : null,
              "Terror": null,
            },
          });
        });

    </script>

   </body>
</html>