<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Vijverstein</title>
    <link rel="stylesheet" href="./css/style.css" />
    <meta
      name="description"
      content="Vijverstein is een paardrijclub voor jong en oud in Bonheiden dicht bij Mechelen, Keerbergen en Putte met Leuke Rijlessen, Rijkampen, Evenementen en pensions. Al zeker 20 jaar ervaring in horseriding"
    />
    <link rel="icon" href="favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
  </head>
  <body>
    <header>
      <h1 class="hide">Vijverstein</h1>
      <img
        src="./img/VIJVERSTEIN LOGO.png"
        alt="Logo Vijverstein"
        title=" Logon van vijverstein"
      />
      <div class="buttons">
        <a href="php/login.php"><span class="fas fa-user">Login</span></a>
        <a href="php/signup.php"
          ><span class="fas fa-user">Registratie</span></a
        >
      </div>

      <nav id="navDesktop">
        <ul>
          <li><a href="#" id="rijkampdeskt">Home</a></li>
          <li><a href="#" id="accodesk">Accomodatie</a></li>
          <li><a href="#" id="rijkampdesk">Rijkampen</a></li>
          <li><a href="#" id="rijlesdesk">Rijlessen</a></li>
          <li><a href="#" id="pensiondesk">Pension</a></li>
          <li><a href="#" id="contdesk">Contact</a></li>
        </ul>
      </nav>
    </header>

    <div class="background">
      <div id="container">
        <section
          id="homepage"
          ontouchstart="p2handleTouchStart(event)"
          ontouchmove="p2handleTouchMove(event)"
          ontouchend="p2handleTouchEnd(event)"
          title="Home pagina"
        >
        <div class="back"></div>
          <img src="./img/VIJVERSTEIN LOGO.png" alt="Logo vijverstein groot" />
          <h5>
            Waar ruiter koning is.. <br />
            en paard keizer is!
          </h5>
          <p class="links">
            Een manege dat al langer als 58 jaar in bezit is van de familie
            Smets. (1961) En dat doorgegeven is van vader op zoon.
          </p>
          <p class="rechts">
            Sindsdien zijn we uitgegroeid tot een allesomvattend centrum voor de
            paardensport - met alles erop en eraan, waar gezellig vertoeven is
            voor eigenaars als voor de recreatieruiters, jong en oud, en waar
            iedereen hartelijk w elkom is.
          </p>
        </section>
        <!-- END OF HOME-->

        <section
          class="accomodatie scrollbar"
          id="page3"
          title="Ons aanbod van pistes en accomodatie"
        >
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
                <div class="card_part card_part-one"></div>

                <!-- Photo 2 -->
                <div class="card_part card_part-two"></div>

                <!-- Photo 3 -->
                <div class="card_part card_part-three"></div>

                <!-- Photo 4 -->
                <div class="card_part card_part-four"></div>
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
                    <span class="flag">Alle dagen</span>
                    <span class="time-wrapper"
                      ><span class="time">Vanaf 18u </span></span
                    >
                  </div>
                </div>
              </li>

              <!-- Item 2 -->
              <li>
                <div class="direction-l">
                  <div class="flag-wrapper">
                    <span class="flag">Woensdag</span>
                    <span class="time-wrapper"
                      ><span class="time">Vanaf 13u</span></span
                    >
                  </div>
                </div>
              </li>

              <!-- Item 3 -->
              <li>
                <div class="direction-r">
                  <div class="flag-wrapper">
                    <span class="flag">Zaterdag</span>
                    <span class="time-wrapper"
                      ><span class="time">vanaf 11u</span></span
                    >
                  </div>
                </div>
              </li>
              <li>
                <div class="direction-l">
                  <div class="flag-wrapper">
                    <span class="flag">Zondag</span>
                    <span class="time-wrapper"
                      ><span class="time">Vanaf 10u</span></span
                    >
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

        <section
          class="Rijkampen scrollbar"
          id="page4"
          title="pagina met alle rijkampen"
        >
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
          <div class="flexbox">
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

            <div class="slides-frame">
              <div class="slides">
                <div class="slide-1 slide">Game of Thrones</div>
                <div class="slide-2 slide">Daenery Targaryen and her horse</div>
                <div class="slide-3 slide">Winer is comming, Stark</div>
                <div class="slide-4 slide">The Iron Throne</div>
              </div>
            </div>
          </div>
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
        <section
          class="Rijlessen scrollbar"
          id="page5"
          title="Pagina met alle rijlessen"
        >
          <a href="" class="fas fa-plus plus"></a>
          <h2>Rijlessen</h2>
          <hr class="mnull" />
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

          <p>
            Wij staan er voor u te begeleiden... Als dierenliefhebber welke U de
            paardensport beoefend, heb je te maken met een levend wezen met een
            eigen karakter, gevoel, humeur... Het is dan ook van het grootste
            belang dat je kan beschikken over een paard of pony die niet alleen
            eerlijk en betrouwbaar is, maar ook past bij Uw ervaring als ruiter.
            Manege Vijverstein beschikt over een reeks paarden en pony's voor
            ieders nieveau, sommige speciaal opgeleid voor beginners, andere dan
            weer voor de meer ervaren ruiters. Je kan zo beschikken over een
            paard of pony op Uw Niveau voor les of wandeling. Zo wordt Uw
            rijgenot en veiligheid maximaal.
          </p>
          <div class="button" id="lesrooster">
            <p>uurrooster</p>
          </div>
          <ul class="timeline">
            <!-- Item 1 -->
            <li>
              <div class="direction-r">
                <div class="flag-wrapper">
                  <span class="flag">Alle dagen</span>
                  <span class="time-wrapper"
                    ><span class="time">Vanaf 18u </span></span
                  >
                </div>
              </div>
            </li>

            <!-- Item 2 -->
            <li>
              <div class="direction-l">
                <div class="flag-wrapper">
                  <span class="flag">Woensdag</span>
                  <span class="time-wrapper"
                    ><span class="time">Vanaf 13u</span></span
                  >
                </div>
              </div>
            </li>

            <!-- Item 3 -->
            <li>
              <div class="direction-r">
                <div class="flag-wrapper">
                  <span class="flag">Zaterdag</span>
                  <span class="time-wrapper"
                    ><span class="time">vanaf 11u</span></span
                  >
                </div>
              </div>
            </li>
            <li>
              <div class="direction-l">
                <div class="flag-wrapper">
                  <span class="flag">Zondag</span>
                  <span class="time-wrapper"
                    ><span class="time">Vanaf 10u</span></span
                  >
                </div>
              </div>
            </li>
          </ul>
          <div class="slideshowinschrijven">
            <div class="sliderijles" onclick="openFullscreen();">
              <div class="card" id="myslide">
                <div class="card_part card_part-one"></div>

                <!-- Photo 2 -->
                <div class="card_part card_part-two"></div>

                <!-- Photo 3 -->
                <div class="card_part card_part-three"></div>

                <!-- Photo 4 -->
                <div class="card_part card_part-four"></div>
              </div>
            </div>

            <div class="content">
              <h3>Vaste rijlessen</h3>
              <p>
                Elke week voorzien wij vaste rijlessen waar u of uw kind zich
                kan ontwikkelen tot een ervaren ruiter. Hiervoor hebben wij
                opgeleide lesgevers die lessen voorziet voor jong en oud /
                ervaren of onervaren ruiters.
              </p>
            </div>
          </div>
        </section>
        <!-- END OF RIJLESSEN-->

        <section
          class="scrollbar"
          id="page6"
          title="Info over een pension of vraag er eentje aan"
        >
          <h2>Pension</h2>
          <hr />
          <p>
            Als eigenaar wenst U vanzelfsprekend de beste verzorging voor uw
            paard of pony.
          </p>
          <p>Terecht! Het beste is maar juist goed genoeg!</p>
          <p>Bij ons kan je dan ook kiezen uit Vol- of Half pension</p>
          <h4 class="heading  ">Waarover u zoizo beschikt:</h4>
          <ul>
            <li>Ruime hygiënische boxen</li>
            <li>Persoonlijke afsluitbare zadelkast</li>
            <li>Gebruik van onze accomodatie</li>
          </ul>
          <div class="pensions">
            <div class="volpension pension">
              <h2>Vol Pension = All in</h2>
              <div class="info">
                <ul>
                  <li>
                    U kiest zelf voor stro of houtkrullen als bed voor uw
                    paard/pony -> deze zijn steeds van topkwaliteit
                  </li>
                  <li>Meermaals per dag voederen we met krachtvoer</li>
                  <li>Geven dagelijks hooi</li>
                  <li>Uw box wordt regelmatig uitgemest</li>
                </ul>
              </div>
            </div>
            <div class="halfpension pension">
              <h2>Half Pension</h2>
              <div class="info">
                <ul>
                  <li>
                    U beschikt over een opslagplaats voor uw hooi - stro en
                    voeding
                  </li>
                  <li>
                    Wij voederen zodat uw paard steeds op vaste tijdsstippen
                    eten krijgt
                  </li>
                  <li>Verder verzorgt u zelf uw paard of pony</li>
                </ul>
              </div>
            </div>
          </div>
        </section>
        <!-- END OF PENSION-->

        <section class="Contact scrollbar" id="page7" title="Contact pagina">
          <h2>Contact us</h2>
          <div class="gridcontainer">
            <div class="info">
              <div>
                <span class="fas fa-map-marker-alt"></span>
                <p>
                  Boeimeerstraat 67/Z <br />
                  2820 Bonheiden
                </p>
              </div>
              <div>
                <span class="fas fa-phone"></span>
                <p>015/51 50 49</p>
              </div>
              <div>
                <span class="fas fa-at"></span>
                <p>vijverstein@skynet.be</p>
              </div>
            </div>

            <div class="form">
              <div class="uitschuif">
                <h3>Direct message</h3>
                <a href="" class="fas fa-sort-down down"></a>
              </div>
              <hr class="mnull" />
              <div class="form-style-6">
                <form class="contact-form" action="./contactform.php" method="post">
                  <input type="text" name="Naam" placeholder="Je naam" />
                  <input
                    type="email"
                    name="mail"
                    placeholder="Jouw e-mail"
                  />
                  <input type="text" name="onderwerp" placeholder="Onderwerp">
                  <textarea
                    name="bericht"
                    placeholder="Je bericht"
                  ></textarea>
                  <input type="submit" name="verzend" value="Send" />
                </form>
              </div>
            </div>
            <img
              src="./img/contact.jpg"
              alt="contactafbeelding "
              title="contactafbeelding"
              id="contactafb"
            />
          </div>
        </section>
        <!-- END OF CONTACT-->
      </div>
    </div>
    <div class="contactMobile">
      <a href="#" id="phoneCall"><span class="fas fa-phone"></span></a>
      <div class="contentContact">
        <img
          src="./img/VIJVERSTEIN LOGO.png"
          alt="Logovijverstein bij phonecall"
        />
        <div class="phoneinfo">
          <a href="#"><span class="far fa-envelope"></span></a>
          <a href="#"><span class="fas fa-phone"></span></a>
          <a href="https://www.facebook.com/Manege-Vijverstein-962309823799916/"
            ><span class="fab fa-facebook-f"></span
          ></a>
          <a
            href="https://www.google.com/search?q=vijverstein&oq=vijv&aqs=chrome.0.69i59j69i57j69i59j69i60l3.1341j0j9&sourceid=chrome&ie=UTF-8"
            ><span class="fab fa-google"></span
          ></a>
        </div>
      </div>
    </div>
  </body>

  <script
    src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"
    type="text/javascript"
  ></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="./js/script.js"></script>
</html>
