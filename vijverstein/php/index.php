<?php

require "./header.php"

?>
<div class="background">
<div id="container">
        <section
        id="homepage"
          ontouchstart="p2handleTouchStart(event)"
          ontouchmove="p2handleTouchMove(event)"
          ontouchend="p2handleTouchEnd(event)"
          title="Home pagina"
        >
         
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
          <h2>Boek hier je lessen</h2>
          <hr />
          
<form action="mail.php" method="POST">
<fieldset>
<legend>Contact Information</legend>
<p>Name</p> <input type="text" name="name">
<p>Email</p> <input type="text" name="email">
<p>Phone</p> <input type="text" name="phone">
</fieldset>
<br />
<fieldset>
<legend>Request Call Back</legend>
<p>Request Phone Call:</p>
Yes:<input type="checkbox" value="Yes" name="call"><br />
No:<input type="checkbox" value="No" name="call"><br />
</fieldset>
<br />
<fieldset>
<legend>Other Information</legend>
<p>Website</p> <input type="text" name="website">

<p>Priority</p>
<select name="priority" size="1">
<option value="Low">Low</option>
<option value="Normal">Normal</option>
<option value="High">High</option>
<option value="Emergency">Emergency</option>
</select>
<br />

<p>Type</p>
<select name="type" size="1">
<option value="update">Website Update</option>
<option value="change">Information Change</option>
<option value="addition">Information Addition</option>
<option value="new">New Products</option>
</select>
<br />
</fieldset>
<br />
<fieldset>
<legend>Your Message</legend>
<p>Message</p><textarea name="message" rows="8" cols="29"></textarea><br />
<input type="submit" value="Send"><input type="reset" value="Clear">
</fieldset>
</form>

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
            <li><a href="#" id="homeMobile">Mijn bestellingen</a></li>
            <li><a href="#" id="accoMobile">Inschrijven Rijlessen</a></li>
            <li><a href="#" id="rijKmobile">Inschrijven Rijkampen</a></li>
            <li><a href="#" id="rijLmobile">Mijn Pension</a></li>
            <li><a href="#" id="pensionMobile">Evenementen  </a></li>
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
          <div class="slideshowinschrijven">
          <div class="sliderijles" onclick="openFullscreen();">
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
        <div class="content">
          <h3>Vaste rijlessen</h3>
          <p>Elke week voorzien wij vaste rijlessen waar u of uw kind zich kan ontwikkelen tot een ervaren ruiter. Hiervoor hebben wij opgeleide lesgevers die lessen voorziet voor jong en oud / ervaren of onervaren ruiters.</p>
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
        </div>
      </div>
        </section>


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
          <div class="slideshowinschrijven">
          <div class="sliderijles" onclick="openFullscreen();">
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
        <div class="content">
          <h3>Vaste rijlessen</h3>
          <p>Elke week voorzien wij vaste rijlessen waar u of uw kind zich kan ontwikkelen tot een ervaren ruiter. Hiervoor hebben wij opgeleide lesgevers die lessen voorziet voor jong en oud / ervaren of onervaren ruiters.</p>
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
        </div>
      </div>
        </section>
</div>
</div>



  
<?php
require "./footer.php"
?>