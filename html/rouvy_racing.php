<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Rouvy racing</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
  </head>
  <body>


<input type="radio" name="tabs" id="tab1" checked />
<label for="tab1">Welcome</label><input type="radio" name="tabs" id="tab2" />
<label for="tab2">The rules</label><input type="radio" name="tabs" id="tab3" />
<label for="tab3">Races</label><input type="radio" name="tabs" id="tab4" />
<label for="tab4">League Table</label><input type="radio" name="tabs" id="tab5" />
<label for="tab5">Contact</label>


<div class="tab content1">

    <h1>Rvy Racing: Welcome</h1>
    This is the official homepage of Rvy Racing - short for, yes, you
    guessed it: "Rouvy Racing".
    <br><br>(The abbreviation is a meek attempt
    to avoid trouble with
    <a href="http://www.rouvy.com">Rouvy</a>'s legal department, and we
    should stress that this site is not affiliated
    with or endorsed by them; we're simply using their great platform 
    to host our races.) <br><br>
    The group emerged from
    <a href="https://www.robirini66.com">RBF</a>, originally
    set up by Robi Rini, but discontinued when he moved to
    <a href="https://www.kinomap.com">kinomap</a>.
    <br><br>
    If you're interested in joining our race series, please register
    on our <a href="hierher.html">phpBB Discussion Board</a>.
    Once we have your rouvy username
    and a few other details (which do not include your credit card number!),
    you will automatically be included in the rankings for each race
    (as DNS if you don't turn up; instructions for how to "turn up"
    are below). There's nothing else to do, apart
    from doing the actual racing. Easy (and free!) so do join us.
    And then hammer it - not so easy...<br><br>
    The schedule of upcoming races, the rankings, and the overall
    league table are available <a href="hierher.html">here</a>.

</div>



<div class="tab content2">
  
    <h1>Rvy Racing: The rules</h1>

    
<h2>Race rules:</h2>
<ul>
  <li> There will be two races a week, on Wednesday and Saturday
    during "the season" which runs from the start of October to the
    end of April.<br><br>
  <li> Each race will be repeated three times (to cater for different
    timezones). Once the route has been published (typically a week in
    advance) you can sign up for one (or more!) of these
    on <a href="https://my.rouvy.com/onlinerace">Rouvy</a> as usual. 
    Direct links to the races are also provided directly from
    <a href="bla.html">our race page</a> which lists dates, times,
    routes, etc. <br><br>
  <li> If none of the official times suit you, you can also arrange
    your own race
    on <a href="https://my.rouvy.com/onlinerace">Rouvy</a>.
    The race must be on
    the same day (in GMT) as the official races. This gives everybody
    24 hours to do the route. Make sure you
    <a href="bla.html">register your race here</a> so our machinery can extract
    the finish time and insert it into the compound ranking. The
    registration page will check that the race is held on the right
    route and on the right day.<br><br>
  <li> You cannot get credit for individual rides (i.e. rides done outside
    races). This is mainly a technical issue: Rouvy doesn't provide
    script-based access to the finish times for individual rides and maintaining
    spreadsheets by hand is not an option. Sorry. If you absolutely want to ride
    by yourself, create your own race (see above) and password protect it; keep
    the password to yourself and nobody will bother you.<br><br>
  <li> If you participate in multiple instances of a race, your best
    time will count.<br><br>
  <li> Points will be awarded according to the UCI cyclocross scheme:
    40 points for the winner; 30 for second; 25 for third; 20 for
    fourth; 19 for fifth; then decreasing by one for each subsequent
    position (but kindly stopping at zero!).<br><br>
  <li> The person with the most points at the end of the "season"
    shall be known as "The Winner". Their
    parents/partners/children/hamsters/...
    will be very very proud of them. Everybody else will have had a
    great time busting their guts twice a week (which is what it's all
    about!). And your parents/partners/children/hamsters/... may still
    be very very proud of you! So there then!
</ul>

<h2>Other rules: Behave yourselves!</h2>
There shouldn't be any need for rules. We're all here to have fun
racing and that's that.
<br><br>
Sadly, past experience shows that there are certain issues that
raise tempers, so to avoid endless (and pointless) discussions, here
are a few rules anyway.
<ol>
  <li> Don't be an idiot. <br><br>
  <li> All races must be for "smart trainers only". Rouvy is the sole judge
  of which trainers fall into that category. <br><br>
  <li> Calibrate your trainer when needed. Most modern trainers don't
    seem to require this any more anyway but if yours does, do it!
    Note that it may even make you faster... <br><br>
  <li> You may have noticed that Rouvy allows you to specify your
    weight. For the implications of this fact you are referred to rule 1.<br><br>
  <li> Banter on the <a href="bla.html">discussion board</a>
    is actively encouraged. Taking
    yourself (or this whole thing) too seriously is not. Launching
    debates about possible cheaters (or other rule 1 violators) is
    strictly <em>verboten</em>. If you have any
    concerns, please contact the race organiser (via a private message
    on the <a href="bla.html">message board</a>), so they
    can have a quiet word (and/or escalate things if necessary; see
    below).<br><br>
  <li> No overtly political etc. discussions because it's likely to create
    tension. This is not censorship - there are plenty of other forums
    on the internet (or in your local pub!) where you can raise your
    views on such matters and get into lovely slanging matches with
    people you disagree with. But not here, please.  <br><br>
  <li> Regular rule breakers will be dealt with. Somehow. Haven't
    decided yet, but punishment could range from flogging (for minor
    offences) to ejection from the group (for major ones). 
    Let's not go there.<br><br>
  <li> And now go racing! Hard!<br><br>
</ol>

</div>



<div class="tab content3">

  <h1>Rvy Racing: The races</h1>

    <?php readfile("all_races_in_series.html"); ?>
  

</div>



<div class="tab content4">
  
  <h1>Rvy Racing: The league table</h1>
  <?php readfile("league_table.html"); ?>

</div>


<div class="tab content5">
  Tab5 Contents
</div> 
    
  </body>
</html>