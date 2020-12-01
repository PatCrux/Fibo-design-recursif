<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Série de Fibonacci">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Fibonacci</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Fibonacci.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 3.0.9, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i">
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "Fibonacci",
		"url": "index.html"
}</script>
    <meta property="og:title" content="Fibonacci">
    <meta property="og:type" content="website">
    <meta name="theme-color" content="#478ac9">
  </head>
  <body data-home-page="Fibonacci.html" data-home-page-title="Fibonacci" class="u-body"><header class="u-clearfix u-header u-palette-1-base u-header" id="sec-70cb"><div class="u-clearfix u-sheet u-sheet-1">
        <h1 class="u-custom-font u-font-lato u-text u-text-black u-text-default u-title u-text-1">Fibonacci</h1>
        <h2 class="u-text u-text-body-color u-text-default u-text-2">Calcul récursif</h2>
      </div></header>
    <section class="u-clearfix u-palette-1-base u-section-1" id="sec-cc22">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div alt="" class="u-image u-image-circle u-image-1" data-image-width="1280" data-image-height="853" data-animation-name="rotateIn" data-animation-duration="1000" data-animation-delay="0" data-animation-direction=""></div>
        <div class="u-clearfix u-expanded-width u-layout-wrap u-palette-1-base u-layout-wrap-1">
          <div class="u-gutter-0 u-layout">
            <div class="u-layout-col">
              <div class="u-size-60">
                <div class="u-layout-row">
                  <div class="u-container-style u-layout-cell u-shape-rectangle u-size-30 u-white u-layout-cell-1">
                    <div class="u-container-layout u-container-layout-1">
                      <h2 class="u-text u-text-default u-text-1">Votre choix :</h2>
                      <h6 class="u-text u-text-default u-text-2">Attention : au-delà de 40 éléments, les temps de calcul récursif deviennent extrêment long !</h6>
                      <div class="u-clearfix u-custom-html u-expanded-width u-custom-html-1">
                        <form method="POST" action="" ;="">
                          <label>Nombre d'éléments : </label>
                          <input type="text" name="rang_fibo" id="number">
                          <br>
                          <br>
                          <input name="form" type="submit" value="Calculer">
                          <input type="hidden" value="" name="recaptchaResponse">
                        </form>
                        <br>
                      </div>
                    </div>
                  </div>
                  <div class="u-container-style u-layout-cell u-size-30 u-white u-layout-cell-2">
                    <div class="u-container-layout u-container-layout-2">
                      <h2 class="u-text u-text-default u-text-3">Résultat :</h2>
                      <div data-custom-php="<!--custom_php--><!--/custom_php-->" class="u-custom-php u-expanded-width u-custom-php-1">
 							<?php
								//
								// Fonction de Fibonacci, utilisée de manière récursive
								//
								class Fibo
								{
									// Vérifie si le formulaire a été 'soumis'
									// Si oui, récupère le nombre entré par l'utilisateur, et affiche la suite de Fibonacci correspondante
									public function Initialize ()
									{
										$index = -1;             // jusqu'à quel rang voulons calculer la suite de Fibonacci ?
										if ($_SERVER["REQUEST_METHOD"]=="POST")
										{
											$index= $_POST['rang_fibo'];
											if (is_numeric($index))
											{
												if ($index>0)
													$index = intval ($index);
												else
													$index = -1;    // Retourne code d'erreur
											}
											else
												$index=-1;       // Retourne code d'erreur
										}
										return $index;
									}

									// Fonction de Fibonacci, utilisée de manière recursive
									public function Compute($index)
									{
										if ($index == 0)
											return 0;
										else if ($index == 1)
											return 1;
										return ($this->Compute ($index-1) + $this->Compute ($index -2));
									}
								}
								
								// Flux principal
								$Fibonacci = new Fibo ();                           // Crée instance de l'objet Fibo
								$rank = $Fibonacci->Initialize ();                  // Cherche l'entrée utilisateur et la valide
								if ($rank>0)                                        // Si entrée ok :
								{													// Calcule et affiche la suite de Fibonacci jusqu'au rang $rank
									echo '0';
									for($counter = 1; $counter < $rank; $counter++)
										echo ', '.$Fibonacci->Compute($counter);
								}
								else                                                // Sinon
									echo 'Veuillez svp entrer un nombre positif, plus grand que zéro';   // Affiche message d'erreur
							?>
					  </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    
    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-65b5"><div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1"> Un exercise proposé par M. Girardet</p>
      </div></footer>
  </body>
</html>
