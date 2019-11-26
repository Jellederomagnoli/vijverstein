
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css" />
  </head>
  <body>
    <header>
      <img
        src="./img/VIJVERSTEIN LOGO.png"
        alt="Logo Vijverstein"
        title=" Logon van vijverstein"
      />
      <div class="buttons">
        <a href="#"><span class="fas fa-user">Login</span></a>
        <a href="#"><span class="fas fa-user">Registratie</span></a>
      </div>

      <nav id="navDesktop">
        <ul>
          <li><a href="#" id="homedesk">Home</a></li>
          <li><a href="#" id="accodesk">Accomodatie</a></li>
          <li><a href="#" id="rijkampdesk">Rijkampen</a></li>
          <li><a href="#" id="rijlesdesk">Rijlessen</a></li>
          <li><a href="#" id="pensiondesk">Pension</a></li>
          <li><a href="#" id="contdesk">Contact</a></li>
        </ul>
      </nav>
    </header>

    <div class="background">
      <!-- <div class="slideshow">
            <img src="./img/BG HORSES 02.png" alt="">
            <img src="./img/BG HORSE 01.png" alt="">
            
          </div>
   -->

      <div id="container">
        <section
        id="homepage"
          ontouchstart="p2handleTouchStart(event)"
          ontouchmove="p2handleTouchMove(event)"
          ontouchend="p2handleTouchEnd(event)"
          title="Home pagina"
        >
          <div class="back left">
            <span></span>
          </div>
          <h2>Welkom</h2>
        </section>
        <!-- END OF HOME-->

        <section
          class="accomodatie scrollbar"
          id="page3"
          title="Ons aanbod van pistes en accomodatie"
        >
          <div class="back left">
            <span></span>
          </div>
          <h2>Accomodatie</h2>
          <hr />
         
          <h3>Onze pistes</h3>
          <div class="pistes">
              <div class="info">
          <ul class="opsoming">
            <li>2 Binnenpistes in aparte rijhal (20m x 40m)</li>
            <li>2 Buitenpistes (zandbodem)</li>
            <li>1 Springparcours</li>
            <li>1 Privaat bos</li>
          </ul>
        </div>
        <div class="slideshowpist" onclick="openFullscreen();">
            <div class="card" id="myslide">
  
                <div class="card_part card_part-one">
                </div>
                
                 <!-- Photo 2 -->
                <div class="card_part card_part-two">
              
                </div>
              
                <!-- Photo 3 -->
                <div class="card_part card_part-three">
                </div>
              
                <!-- Photo 4 -->
                <div class="card_part card_part-four">
                </div>
              
              </div>
        </div>
        </div>
          <hr />
          <h3>Cafetaria</h3>
          <div class="button" id="openingsuren">
            <p>Openingsuren</p>
          </div>
          <div class="content">
            <ul class="timeline">
              <!-- Item 1 -->
              <li>
                <div class="direction-r">
                  <div class="flag-wrapper">
                    <span class="flag">Freelancer</span>
                    <span class="time-wrapper"
                      ><span class="time">2013 - present</span></span
                    >
                  </div>
                  <div class="desc">
                    My current employment. Way better than the position before!
                  </div>
                </div>
              </li>

              <!-- Item 2 -->
              <li>
                <div class="direction-l">
                  <div class="flag-wrapper">
                    <span class="flag">Apple Inc.</span>
                    <span class="time-wrapper"
                      ><span class="time">2011 - 2013</span></span
                    >
                  </div>
                  <div class="desc">
                    My first employer. All the stuff I've learned and projects
                    I've been working on.
                  </div>
                </div>
              </li>

              <!-- Item 3 -->
              <li>
                <div class="direction-r">
                  <div class="flag-wrapper">
                    <span class="flag">Harvard University</span>
                    <span class="time-wrapper"
                      ><span class="time">2008 - 2011</span></span
                    >
                  </div>
                  <div class="desc">
                    A description of all the lectures and courses I have taken
                    and my final degree?
                  </div>
                </div>
              </li>
            </ul>
          </div>
          <p>
            Gezellig en ruim met een panoramisch zicht op de binnen- en
            buitenpiste
          </p>
          <p>panoramisch terras, deels overdekt</p>
          <p>Lekkere drankjes en versnapperingen</p>
        </section>
        <!-- END OF ACCOMODATIE-->

        <section class="Rijkampen scrollbar" id="page4" title="pagina met alle rijkampen">
          <div class="back left">
            <span></span>
          </div>
          <h2>Rijkampen</h2>
          <hr />
          <div class="button" id="rijkampinschr">
            <p>Inschrijven</p>
          </div>
          <p>Vele jaren ervaring in het geven van paardrijkampen</p>
          <p>
            Laat uw kind 1 week genieten van alle asspecten van het paardrijden
          </p>
          <hr />
          <ul class="opsoming">
            <li>9u tot 17u en 1u voor en na opvang</li>
            <li>7 - 16jaar</li>
            <li>Voor alle niveaus</li>
            <li>Praktisch / theoretische lessen</li>
            <li>Poesten / verzorging / opzadelen van paard</li>
            <li>Ervaren lesgevers</li>
            <li>Nevenactiviteiten</li>
            <li>Paardrijkledij verplicht</li>
          </ul>
        </section>
        <!-- END OF RIJKAMPEN-->
        <div id="navMobile">
          <ul>
            <li><a href="#" id="homeMobile">Home</a></li>
            <li><a href="#" id="accoMobile">Accomodatie</a></li>
            <li><a href="#" id="rijKmobile">Rijkampen</a></li>
            <li><a href="#" id="rijLmobile">Rijlessen</a></li>
            <li><a href="#" id="pensionMobile">Pension</a></li>
            <li><a href="#" id="contMobile">Contact</a></li>
          </ul>
        </div>
        <section class="Rijlessen scrollbar" id="page5" title="Pagina met alle rijlessen">
          <div class="back right">
            <span></span>
          </div>
          <a href="" class="fas fa-plus plus"></a>
              <h2>Rijlessen</h2>
              <hr class="mnull">
              <div class="subjects">
              <ul>
                <li id="priveL">Privé lessen</li>
                <li id="Cursus">Cursussen</li>
                <li id="kleinste">Voor de allerkleinsten</li>
                <li id="groep">Groepslessen</li>
                <li id="brevet">Ruiterbrevetten</li>
                <li id="rooster">Week- uurrooster lessen</li>
              </ul>
            </div>
          <div class="content">
           <h3></h3>
            <p>
              Wij staan er voor u te begeleiden... Als dierenliefhebber welke U
              de paardensport beoefend, heb je te maken met een levend wezen met
              een eigen karakter, gevoel, humeur... Het is dan ook van het
              grootste belang dat je kan beschikken over een paard of pony die
              niet alleen eerlijk en betrouwbaar is, maar ook past bij Uw
              ervaring als ruiter. Manege Vijverstein beschikt over een reeks
              paarden en pony's voor ieders nieveau, sommige speciaal opgeleid
              voor beginners, andere dan weer voor de meer ervaren ruiters. Je
              kan zo beschikken over een paard of pony op Uw Niveau voor les of
              wandeling. Zo wordt Uw rijgenot en veiligheid maximaal.
            </p>
          </div>
        </section>
        <!-- END OF RIJLESSEN-->

        <section
          class="Pension scrollbar"
          id="page6"
          title="Info over een pension of vraag er eentje aan"
        >
          <div class="back right">
            <span></span>
          </div>
          <h2>Pension</h2>
          <hr>
          <p> Als eigenaar wenst U vanzelfsprekend de beste verzorging voor uw paard of pony.</p>
          <p>Terecht! Het beste is maar juist goed genoeg!</p>

        </section>
        <!-- END OF PENSION-->

        <section class="Contact scrollbar" id="page7" title="Contact pagina">
          <div class="back right">
            <span></span>
          </div>
          <h2> Contact us </h2>
          <div class="gridcontainer">
          <div class="info">
            <div>
            <span class="fas fa-map-marker-alt"></span> <p>Boeimeerstraat 67/Z <br> 2820 Bonheiden</p>
          </div>
          <div>
              <span class="fas fa-phone"></span> <p> 015/51 50 49 </p>
            </div>
            <div>
                <span class="fas fa-at"></span> <p>vijverstein@skynet.be</p>
              </div>
          </div>
          
          <div class="form">
              
              <div class="uitschuif">
              <h3> Direct message</h3>
              <a href="" class="fas fa-sort-down down"></a>
            </div>
              <hr class="mnull">
              <div class="form-style-6">
            <form>
              <input type="text" name="field1" placeholder="Your Name" />
              <input type="email" name="field2" placeholder="Email Address" />
              <textarea name="field3" placeholder="Type your Message"></textarea>
              <input type="submit" value="Send" />
              </form>
              </div>  
          </div>
          <div class="social">

          </div>
        </div>
        </section>
        <!-- END OF CONTACT-->
      </div>
    </div>
    <div class="contactMobile">
      <a href="#" id="phoneCall"><span class="fas fa-phone"></span></a>
      <div class="contentContact">
        <h1>ffffe</h1>
      </div>
    </div>
  </body>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="./js/script.js"></script>
</html>
