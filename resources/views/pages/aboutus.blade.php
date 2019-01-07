@extends('layouts.lvapp')
@section('title')
    About Us - Cooperacy
@stop
@section('content')

<!--BEGIN CONTAINER-->
<div class="containerone">

  <!--BEGIN HEADER-->
  <div class="row">
    <br><img class="page-header" src="{{asset('/images/aboutus.png')}}">
  </div>
  <!--END HEADER-->

  <!--BEGIN ROW-->
  <div class="row">

  <!--BEGIN LEFT COL-->
  <div class="col-md-2"></div>
  <!--END LEFT COL-->

    <!-- journey anytime you will feel lost you can summon a mentor to guide you. -->

  <!--BEGIN CONTENT-->
  <div class="col-md-8"><br>
  <p class="base">Cooperacy is a nonprofit project aiming to support our social ecosystem fostering the enjoyment of cooperation: on a more technical side, this is achieved transforming the current <a class="au" href="https://en.wikipedia.org/wiki/Pareto_distribution">power law</a> distribution of resources, decisions and activities into a more even one.<br><br>

  The <a class="ai" href="/platform">Cooperacy Platform</a> is the base of Cooperacy circular economic ecosystem. The participants voluntarily pool one euro per month into a common sum in order to fund their own ideas. The profits generated by these ideas goes back to the common pool. This triggers a co-owned virtuous process.

  To fund itself, Cooperacy offers also parallel services and activities: <a class="ai" href="/overview">Cooperacy Overview</a> is a measurement of the cooperation amount in larger organizations or institutions in order to promote their resilient growth. For example, the <a class="ai" href="/cci">Cooperation Context Index</a> shows the possibility of cooperation in most of the countries in the world.<br><br>
  <a class="ai" href="/openecosystem">Cooperacy Experience</a> is the live application of the Cooperacy model. The participants of any organization or community can enjoy a natural social system able to generate collaboration, innovation and problem solving.<br><br>
  <a class="ai" href="/science">Cooperacy Research</a> is instead a continuous scientific investigation about possible social systems based on cooperation and ecosystemic awareness.<br><br>

  <p class="base">If you consider our society and its natural ecosystem as a whole living organism, being part of Cooperacy means supporting this organism with the enjoyment of cooperation. <a class="ae" href="/register">Joining</a> the voluntary pool will let you experiment and support a different social ecosystem based on cooperation and common enjoyment.</p><br><br>

  </div>
  <!--END CONTENT-->

  <!--BEGIN RIGHT COL-->
  <div class="col-md-2"></div>
  <!--END RIGHT COL-->

  </div>
  <!--END ROW-->

  <!--BEGIN ROW-->
  <div class="row">

  <!--BEGIN LEFT COL-->
  <div class="col-md-2"></div>
  <!--END LEFT COL-->

  <!--BEGIN CONTENT-->
  <div class="col-md-8">


  <br><br><p class="subheading transparency center space">THE TEAM</p><br><br>

  <style>table, tbody, tr {border=0 !important; border-collapse: collapse; border-style: hidden !important;}
        td {border=0 !important; width: 12%;border-collapse: collapse; border-style: hidden !important;}
  </style>

  <div class="row">
    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 text-center">
      <img class="img-responsive" style="margin:0 auto;" src="{{asset('images/amdp.png')}}" alt="null" /><br>
      <p>Alessandro Merletti De Palo<br><i>Co-founder and coordinator of Cooperacy</i></p>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 text-center">
      <img class="img-responsive" style="margin:0 auto;" src="{{asset('images/sara.png')}}" alt="null" /><br>
      <p>Sara Conallo<br><i>Jackie of all trades</i></p>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 text-center">
  <img class="img-responsive" style="margin:0 auto;" src="{{asset('images/framba.png')}}" alt="null" /><br>
  <p>Federica Framba<br><i>Designer</i></p>
</div>
    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 text-center">
      <img class="img-responsive" style="margin:0 auto;" src="{{asset('images/marco.png')}}" alt="null" /><br>
      <p>Marco Marincola<br><i>Engineering Management</i></p>
    </div>
  </div>

  <div class="row">
  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 text-center">
        <img class="img-responsive" style="margin:0 auto;" src="{{asset('images/giosetta.png')}}" alt="null" /><br>
      <p>Giosetta Ciuffa<br><i>External Relations</i></p>
  </div>
    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 text-center">
      <img class="img-responsive" style="margin:0 auto;" src="{{asset('images/enea.png')}}" alt="null" /><br>
      <p>Enea Barbetta<br><i>Main Developer</i></p>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 text-center">
      <img class="img-responsive" style="margin:0 auto;" src="{{asset('images/valentina.png')}}" alt="null" /><br>
     <p>Valentina Panizza<br><i>Strategic Planning</i></p>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 text-center">
      <img class="img-responsive" style="margin:0 auto;" src="{{asset('images/ilario.png')}}" alt="null" /><br>
     <p>Ilario Tito<br><i>Co-founder</i></p>
    </div>
  </div>

    </div>
  </div><br><br>

  <!--END CONTENT-->

  <!--BEGIN ROW-->
  <div class="row">

  <!--BEGIN LEFT COL-->
  <div class="col-md-2"></div>
  <!--END LEFT COL-->

  <!--BEGIN CONTENT-->
  <div class="col-md-8"><br>

  <p class="subheading transparency center space">FINANCE</p><br>
  <p class="base">We like so much transparency that we want everyone to be able to know our bank account balance and inspect our paypal account. We have nothing to hide.<br>
  <span class="transparency up">Bank account:</span> our IBAN is IT61D0623001623000043225634 - Filiale AG 23 Milano Cariparma di via della Moscova, and the current bank balance is around 200 euros, updated: 14 April 2018<br />
  <span class="transparency up">Paypal:</span> you can access our account from the standard paypal login with COOPERATION + password cooperation2016</p><br>

  <p class="subheading transparency center space">LEGAL STUFF</p><br>
  <p class="base">The Cooperacy Association was founded in Italy, Milan, the day 21/07/2015. Its current address is Via della Moscova 39, 20121 Milano.</p><br>

  <p id="contributors" name="contributors" style="color: #22DDEE; font-size: 24px; font-weight: bold; margin-bottom: 10px;">

  <p class="subheading transparency center space">CONTRIBUTORS LIST AND PLANNING</p><br>
  <p class="base">You can see in our <a class="ai" href="https://goo.gl/OYcrOS">planning</a> the list of names as well as the relative monetary value of the activity (including expenses) done as if monetary wages would have been corresponded to the participants. We keep track about it as we would correspond those amounts if we will have the possibility.<br><br>

  We're still doing some more work to allow better transparency. If you don't see something you're curious of, please <a class="ai" href="/contact">ask</a> for more information to be shown in this page.<br>
  Moreover, if you want, have a look at what could be <a class="ac" href="/aboutyou">your</a> interest in Cooperacy.</p>
<br><br><br>
  </div>

  <!--END CONTENT-->

  <!--BEGIN RIGHT COL-->
  <div class="col-md-2"></div>
  <!--END RIGHT COL-->

  </div>
  <!--END ROW-->
  <div class="row">
  <div id="testimonials" class="carousel carousel--testimonials slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item item active">
        <div class="quote it">In Cooperacy I’ve seen the freedom of the individual in relation to the freedom of others, a continuous oscillation of equilibria, with unassuming attitude, following an easy flow and the spontaneous actions of people.</div>
        <div class="quote up equivalence">Carola</div><br><br>
      </div>

      <div class="carousel-item item">
        <div class="quote it">I see Cooperacy - beyond its social goal – as a path made of people who want to improve themselves and the world around them, building something beautiful and useful for all.
        In a world based on the mindless continuous consumption of goods, living on a different constructive mentality can be an amazing gift for ourselves and the people we love.
        </div><div class="quote up trust">Lorenzo</div><br><br>
      </div>

      <div class="carousel-item item">
        <div class="quote it">There will be a day in which human beings will look to each other with the same love they have for their children. A day in which we will all be mutually parents and children at the same time. You don’t ask yourself if investing energy for a child will bring you an economic advantage. Now it’s not like that yet, but there are many movements indicating that global awareness is changing. Directions are visible and the so called “critical mass” is gradually becoming consistent. Cooperacy is one of this good movements having strong correlations with the concreteness of doing. I really feel like an ancient knight when I pay my humble duty - a small thing to do, but a big impulse to the nobility of my spirit.
        </div><div class="quote up care">Albino</div><br><br>
      </div>

      <div class="carousel-item item">
        <div class="quote it">I felt Cooperacy in my belly, since the first read. Then to make it go up and reach my mind, I fight with it. Yes, it’s like getting into fights. It drains me out and at the same time it lends a hand to make me get up again. It challenges me every day, it turns upside down my perspectives, it opens myself to new possibilities. It teaches me, while other times it allows me to teach or better share what I think I have learned.
        It’s my inner mountain.
        </div><div class="quote up transparency">Beatrice</div><br><br>
      </div>

      <div class="carousel-item item">
        <div class="quote it">Cooperacy, for me, it’s overall doing things together cheerfully.
          I hope you can have fun in Cooperacy like I do, participating to its construction with your ideas and your enthusiasm.
        </div><div class="quote up freedom">Ilario</div><br><br>
      </div>

      <div class="carousel-item item">
        <div class="quote it">Most of my friends remember me with my age. 15. I'm Kurd and raised in Qorveh, where Turks, Kurds, Persians coexist together (#diversity ;-) ). My mother is a Turk and my father is a Kurd. I'm a #gamification consultant. In Cooperacy I found that game design (and gamification) has a bad paradigm nowadays: cooperation is better (competition sucks ;-) ). As a game designer, accepting this fact was very hard for me. In game design and gamification, we have a lot of theories, techniques, and systems quoted on competition, a powerful drive in the human mind. Now with Cooperacy, We are trying to design games and ARGs to teach cooperation to high school students. And as an Iranian, I really love to test this gamified system to help my people. And make the world a better place. It is what Alessandro taught me: “it's not me, nor you, but the things we can do together.”
        </div><div class="quote up understanding">Ali</div><br><br>
      </div>

      <div class="carousel-item item">
        <div class="quote it">It was a feeling of serendipity, calm awareness going through my smile. It was a particular period of my life: I had realized not only the present condition of the world we are living in, but also the great opportunity We have to address its problems. I simply thought:“I need to act, now”. I recognized in Cooperacy a peaceful awareness but also a decisive willingness to make it happen. Thanks to Cooperacy I did get to know several people, lovable people and I have been “since then” an enthusiast messenger of Cooperacy's values. I am truly fascinated by Cooperacy especially because its ideas are simpler to experience than to explain. There’s research in it, social research. And I strongly believe that this kind of approach is crucial in our time. I trust Cooperacy, nowadays this is an incredibly effective starting point. While writing this my hands literally cried over my laptop lol
        </div><div class="quote up diversity">Davide</div><br><br>
      </div>

      <div class="carousel-item item">
        <div class="quote it">To me, it seemed a different idea than the others I heard about, during a period in which words like “start-up”, “business angel” and “innovation” were imposing themselves on the media agenda. Moved by the curiosity raised during the conversations with the group - that was forming and growing in the meantime - I read the book The Chalice and the Blade by R. Eisler. I found it so interesting that I thought it was worthy taking part in a more active way.
        </div><div class="quote up understanding">Giosetta</div><br><br>
      </div>

      <div class="carousel-item item">
        <div class="quote it">My first impression was I didn’t understand what was this group who was suggesting ways to make other people better communicate between themselves, nevertheless my internal curiosity spirit led me to meet Alessandro, Sara, Bea, Ilario and other coordinators of Cooperacy. At the end my inner spirit admitted Cooperacy has no definitions, you can only perceive it while you live it surrounded by the enthusiasm and the force of its participants.
        </div><div class="quote up freedom">Walter</div><br><br>
      </div>

      <div class="carousel-item item">
        <div class="quote it">Cooperacy is something I’ve been thinking about for some time, since when I understood that competition creates unhappiness.
        </div><div class="quote up transparency">Justin</div><br><br>
      </div>

      <div class="carousel-item item">
        <div class="quote it">A year ago Facebook showed me the Cooperacy link and I literally dove in it because I felt it was like the water in which I always wanted to swim into. In these months I often had the fear to drown and I went back to the shore. Nevertheless, the will to be in the waters has been stronger and thanks to some patient guidance by Alessandro, the sustain of Ilario and Beatrice I am learning to stay in the waters even when it frightens me, to trust the group and to flow together with all the rest.
          I feel like I am becoming water too and it’s amazing!
        </div><div class="quote up care">Sara</div><br><br>
      </div>

      <div class="carousel-item item">
        <div class="quote it">What brought you to join Cooperacy?
          The fact that Cooperacy is trying to dissolve the most toxic superstition: the myth according to which the world is nothing more that a bloody battlefield in which “kill or be killed” it’s the only valid strategy.
        </div><div class="quote up trust">Nicola</div><br><br>
      </div>

      <div class="carousel-item item">
        <div class="quote it">Born and raised in a small town in Trentino, surrounded by mountains and nature: a place where the sense of community, the value of cooperation and the care for the environment are strongly felt. Cooperacy!
        </div><div class="quote up equivalence">Federica</div><br><br>
      </div>

      <div class="carousel-item item">
        <div class="quote it">I needed a little bit of color in the gray days of mine. And in Cooperacy there is a rainbow of personalities one different than another, all full of enthusiasm and energy, with which to share ideas and work together.
          In Cooperacy I found a lot of people who work together well, and that overall they have fun doing it.
        </div><div class="quote up diversity">Enea</div><br><br>
      </div>

      <div class="carousel-item item">
        <div class="quote it">Although I have always been a supporter of a model based on hierarchies, I have always wondered if the world I dreamed was the right one. Discussing with Alessandro and listening to the Cooperacy concept, I was intrigued by the thought that something could (and perhaps should) change compared to certain ideas, appreciating the innovative way in which the cooperation science interpreted models.
        </div><div class="quote up equivalence">Sabatino</div><br><br>
      </div>

      <div class="carousel-item item">
        <div class="quote it">A mechanism that sets the human being in the centre of everything.
          I said to myself: here there’s a new and original material, so I jumped on this train which costs just a coffee per month!
        </div><div class="quote up trust">Franz</div><br><br>
      </div>

      <div class="carousel-item item">
        <div class="quote it">I new since time that worst damage in most of human social environments come from the fact that every relationship starts with the presumption of knowing how to relate, communicate and cooperate. This presumption is false in almost all cases.
          We need courage, creativity and competence to change this condition, and Cooperacy has all the needed skills to accomplish it.
        </div><div class="quote up care">Igor</div><br><br>
      </div>

      <div class="carousel-item item">
        <div class="quote it">In Cooperacy I look for a model that would bring cooperation without leveraging over “noble sentiments”.
        </div><div class="quote up transparency">Marco</div><br><br>
      </div>

      <div class="carousel-item item">
        <div class="quote it">Cooperacy has been able to bring the creation of a smooth flow of communication in a social environment that wasn’t incline to establish good relations between the people. That is why I came to see what happens here. Without knowing if I will be able to be useful, but with that feeling that I want to understand something that intrigues me and to understand how to utilise it, I decided to join.
        </div><div class="quote up freedom">Francesco</div><br><br>
      </div>

      <div class="carousel-item item">
        <div class="quote it">Cooperacy has been growing these months a lot and it is impressive to see the continuous exchange of ideas, the cheerfulness and the seriousness with which the participants cooperate together in the projects.
        </div><div class="quote up understanding">Sarah</div><br><br>
      </div>

      <div class="carousel-item item">
        <div class="quote it">In these months I've seen people of different perspecitves to come and participate. While in Cooperacy, many of them decided to make big changes in their private lives. Cooperacy has been a common "origin" able to make them to desire and recognize themselves in the actions they do everyday. They experienced the feeling of cooperation and naturally desired their social ecosystem to be based on redistribution of wealth, activities and power with proportional creative integration. In other words, the world as a pleasant and enjoyable place for everyone.
        </div><div class="quote up diversity">Alessandro</div><br><br>
      </div>
    </div>
    <a class="carousel-control left equivalence" href="#testimonials" role="button" data-slide="prev" style="text-align: right">
      <span> < </span>
    </a>
    <a class="carousel-control right equivalence" href="#testimonials" role="button" data-slide="next" style="text-align: left">
      <span> > </span>
    </a>
  </div>
</div>

  <!--BEGIN SPACER-->
  <div class="row"><p style="height:20px;"></p></div>
  <!--END SPACER-->

</div>
<!--END CONTAINER-->


@stop
