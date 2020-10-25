<?php 
include_once("settings.php");
include_once("header.php");
 ?>

  <div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <br><br>
        <h1 class="header center white-text text-lighten-2">FAQ</h1>
        <div class="row center">
          <h5 class="header col s12 light">Let's look at common questions!</h5>
        </div>
        <br><br>

      </div>
    </div>
    <div class="parallax darken-2"><img src="<?=BRAND_IMAGE_PATH;?>background1.jpg" alt="Unsplashed background img 1"></div>
  </div>

  <div class="container">
    <div class="section">

      <div class="row">
        <div class="col s12 center">
          <h3><i class="mdi-content-send brown-text"></i></h3>
          <h4>Frequently Asked Questions</h4>
        </div>
    </div>
</div>
<div class="section">
        <ul class="collapsible popout">
            
            <li>
            <div class="collapsible-header"><i class="material-icons blue-text darken-2">live_help</i>How do Solar Panels work?</div>
            <div class="collapsible-body"><span>Sunlight hits the solar panels, and creates an electric field. The electricity generated flows to the edge of the panel, and into a conductive wire. The conductive wire brings the electricity to the inverter, where it is transformed from DC electricity to AC, which is used to power buildings.</span></div>
            </li>
            <li>
                <div class="collapsible-header"><i class="material-icons blue-text darken-2">live_help</i>How long do Solar Panels last?</div>
                <div class="collapsible-body"><span>A long time. Like, a really long time!<br>
                    Many home array solar panels are guaranteed for decades, thanks to warranties that typically cover 25-30 years. But because their parts do not wear out easily, solar arrays are well-known to continue producing clean electricity even beyond these lengthy timeframes.
                    </span></div>
            </li>
            <li>
                <div class="collapsible-header"><i class="material-icons blue-text darken-2">live_help</i>What sort of maintanance is required?</div>
                <div class="collapsible-body"><span>Not too much, really. Your solar panels themselves can last for decades on end without much upkeep (maybe just remember to keep them free of debris, etc.).<br> But you will likely need to replace the inverter a few times throughout the life of your system.
                    Like the solar panels themselves, inverters typically come with a warranty – these can range from 5-15 years (and sometimes even longer). Unlike your panels, your inverter will not see its efficiency dwindle very slowly; instead, it may simply stop working and need to be replaced.</span></div>
            </li>
            <li>
                <div class="collapsible-header"><i class="material-icons blue-text darken-2">live_help</i>Do solar panel work on cloudy, rainy or cold days?</div>
                <div class="collapsible-body"><span>We’ll cut straight to the chase – solar panels work just fine when it’s cloudy, rainy, and/or cold.<br>
                    Are clouds and rain ideal for solar panels? Of course not. They are most effective in direct sunlight. But solar panels can still generate power when the sun is blocked by clouds – more than enough, in fact, to remain a viable source of electricity. Take Germany, for example. It’s not particularly warm or sunny, but is nevertheless a world leader in solar energy.
                    </span></div>
            </li>

        </ul>
        
        </div>
      </div>

    </div>
  </div>

<?php include_once("footer.php");
 ?>
