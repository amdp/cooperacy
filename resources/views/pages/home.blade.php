@extends('layouts.lvapp')
@section('title')
    Cooperacy
@stop
@section('content')

<!--BEGIN CONTAINER-->
<div style="margin-left:30px; margin-right:30px;">

  <!--CIRCLE-->
  <div class="row">
    <br><br><br>

    <div class="circle">
      <svg xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" x="0px" y="0px" viewBox="0 0 750 750">
        <g id="cocircle">
          <linearGradient id="gequivalence" gradientUnits="userSpaceOnUse" x1="219" y1="58" x2="530" y2="58">
	           <stop  offset="0" style="stop-color:#FF8366"/><stop  offset="0.5" style="stop-color:#FF9000"/><stop  offset="1" style="stop-color:#FFB600"/>
          </linearGradient>
          <linearGradient id="gtrust" gradientUnits="userSpaceOnUse" x1="530" y1="58" x2="743" y2="260">
	           <stop  offset="0" style="stop-color:#FFB600"/><stop  offset="0.6" style="stop-color:#FFDD00"/><stop  offset="1" style="stop-color:#C3DD19"/>
          </linearGradient>
          <linearGradient id="gcare" gradientUnits="userSpaceOnUse" x1="742" y1="290" x2="670" y2="590">
	           <stop  offset="0" style="stop-color:#C3DD19"/><stop  offset="0.5" style="stop-color:#88DD33"/><stop  offset="1" style="stop-color:#55DD90"/>
          </linearGradient>
          <linearGradient id="gtransparency" gradientUnits="userSpaceOnUse" x1="700" y1="640" x2="400" y2="750">
	           <stop  offset="0" style="stop-color:#55DD90"/><stop  offset="0.5" style="stop-color:#22DDEE"/><stop  offset="1" style="stop-color:#33B2EE"/>
          </linearGradient>
          <linearGradient id="gfreedom" gradientUnits="userSpaceOnUse" x1="350" y1="750" x2="100" y2="640">
	           <stop  offset="0" style="stop-color:#33B2EE"/><stop  offset="0.5" style="stop-color:#4488EE"/><stop  offset="1" style="stop-color:#7777E5"/>
          </linearGradient>
          <linearGradient id="gunderstanding" gradientUnits="userSpaceOnUse" x1="100" y1="590" x2="20" y2="290">
	           <stop  offset="0" style="stop-color:#7777E5"/><stop  offset="0.5" style="stop-color:#AA66DD"/><stop  offset="1" style="stop-color:#D46ED4"/>
          </linearGradient>
          <linearGradient id="gdiversity" gradientUnits="userSpaceOnUse" x1="20" y1="260" x2="219" y2="58">
	           <stop  offset="0" style="stop-color:#D46ED4"/><stop  offset="0.5" style="stop-color:#FF77CC"/><stop  offset="1" style="stop-color:#FF8366"/>
          </linearGradient>
          <path id="equivalence" fill="none" stroke="url(#gequivalence)" stroke-width="24" stroke-miterlimit="10"
                      d="M525.0481567,63.1570435  c-45.3894043-21.8797607-96.2866211-34.142334-150.0480957-34.142334   c-53.7633667,0-104.6621704,12.2634277-150.0527802,34.1446533" onmouseover="showvalue(1);"/>
          <path id="trust" fill="none" stroke="url(#gtrust)" stroke-width="24" stroke-miterlimit="10"
                       d="M712.3186035,297.7496338 c-23.6291504-103.605957-93.7546997-189.5136719-187.2704468-234.5925903" onmouseover="showvalue(2);"/>
          <path id="care" fill="none" stroke="url(#gcare)" stroke-width="24" stroke-miterlimit="10"
                       d="M645.6213379,590.5565796 c47.1600342-59.1289673,75.3640137-134.0441895,75.3640137-215.5565186c0-26.5563965-3.0014648-52.4103394-8.666748-77.2504272" onmouseover="showvalue(3);"/>
          <path id="transparency" fill="none" stroke="url(#gtransparency)" stroke-width="24" stroke-miterlimit="10"
                       d="M375,720.9854126 c110,0,207.2280884-50.9467773,270.6212769-130.428833" onmouseover="showvalue(4);"/>
          <path id="freedom" fill="none" stroke="url(#gfreedom)" stroke-width="24" stroke-miterlimit="10"
                       d="M104.3764725,590.5537109 C167.7696686,670.0374146,265,720.9854126,375,720.9854126" onmouseover="showvalue(5);"/>
          <path id="understanding" fill="none" stroke="url(#gunderstanding)" stroke-width="24" stroke-miterlimit="10"
                       d="M37.68116,297.7509155 c-5.6650391,24.8396606-8.666441,50.6932373-8.666441,77.2491455c0,81.5109863,28.2031841,156.4251099,75.3618164,215.5536499" onmouseover="showvalue(6);"/>
          <path id="diversity" fill="none" stroke="url(#gdiversity)" stroke-width="24" stroke-miterlimit="10"
                       d="M224.9472809,63.1593628 C131.433548,108.2390137,61.309639,194.1461182,37.68116,297.7509155" onmouseover="showvalue(7);"/>
        </g>

        <text id="typo" x="0px" y="0px" transform="matrix(1 0 0 1 132 379)" opacity="0" fill="#555555" font-size="80">COOPERACY</text>
        <text id="payoff" x="10px" y="0px" transform="matrix(1 0 0 1 144 427)" opacity="0" fill="#555555" stroke="#555555" stroke-miterlimit="10" font-size="28" letter-spacing="7">LET'S DO IT TOGETHER</text>

        <g id="equivalenceD" display="none">
          <a href="http://cooperacy.org/cooperation" class="noline finger">
            <text transform="matrix(1 0 0 1 163 360)" fill="#555555" font-size="65">EQUIVALENCE</text>
            <line style="display:inline;fill:#555555;stroke:#FF9000;stroke-width:6;stroke-miterlimit:10;" x1="150" y1="393" x2="600" y2="393"/>
            <text transform="matrix(1 0 0 1 310 443)" display="inline" fill="#555555" stroke="#555555" stroke-miterlimit="10" font-size="25" letter-spacing="2">EVERYONE</text>
          </a>
        </g>

        <g id="trustD" display="none">
          <a href="http://cooperacy.org/cooperation" class="noline finger">
            <text transform="matrix(1 0 0 1 276 360)" fill="#555555" font-size="65">TRUST</text>
            <line style="display:inline;fill:#555555;stroke:#FFDD00;stroke-width:6;stroke-miterlimit:10;" x1="150" y1="393" x2="600" y2="393"/>
            <text transform="matrix(1 0 0 1 210 443)" display="inline" fill="#555555" stroke="#555555" stroke-miterlimit="10" font-size="25" letter-spacing="2">ONE EURO PER MONTH</text>
          </a>
        </g>

        <g id="careD" display="none">
          <a href="http://cooperacy.org/cooperation" class="noline finger">
            <text transform="matrix(1 0 0 1 289 360)" fill="#555555" font-size="65">CARE</text>
            <line style="display:inline;fill:#555555;stroke:#88DD33;stroke-width:6;stroke-miterlimit:10;" x1="150" y1="393" x2="600" y2="393"/>
            <text transform="matrix(1 0 0 1 200 443)" display="inline" fill="#555555" stroke="#555555" stroke-miterlimit="10" font-size="25" letter-spacing="2">TO FULFILL OUR DESIRES</text>
          </a>
        </g>

        <g id="transparencyD" display="none">
          <a href="http://cooperacy.org/cooperation" class="noline finger">
            <text transform="matrix(1 0 0 1 135 360)" fill="#555555" font-size="65">TRANSPARENCY</text>
            <line style="display:inline;fill:#555555;stroke:#22DDEE;stroke-width:6;stroke-miterlimit:10;" x1="150" y1="393" x2="600" y2="393"/>
            <text transform="matrix(1 0 0 1 260 443)" display="inline" fill="#555555" stroke="#555555" stroke-miterlimit="10" font-size="25" letter-spacing="2">CLEARLY VISIBLE</text>
          </a>
        </g>

        <g id="freedomD" display="none">
          <a href="http://cooperacy.org/cooperation" class="noline finger">
            <text transform="matrix(1 0 0 1 225 360)" fill="#555555" font-size="65">FREEDOM</text>
            <line style="display:inline;fill:#555555;stroke:#4488EE;stroke-width:6;stroke-miterlimit:10;" x1="150" y1="393" x2="600" y2="393"/>
            <text transform="matrix(1 0 0 1 180 443)" display="inline" fill="#555555" stroke="#555555" stroke-miterlimit="10"
            font-size="25" letter-spacing="2">FOLLOWING OUR TRUE SELF</text>
          </a>
        </g>

        <g id="understandingD" display="none">
          <a href="http://cooperacy.org/cooperation" class="noline finger">
            <text transform="matrix(1 0 0 1 120 360)" fill="#555555" font-size="65">UNDERSTANDING</text>
            <line style="display:inline;fill:#555555;stroke:#AA66DD;stroke-width:6;stroke-miterlimit:10;" x1="150" y1="393" x2="600" y2="393"/>
            <text transform="matrix(1 0 0 1 125 443)" display="inline" fill="#555555" stroke="#555555" stroke-miterlimit="10" font-size="25" letter-spacing="2">WITH THE PERSPECTIVE OF OTHERS</text>
          </a>
        </g>

        <g id="diversityD" display="none">
          <a href="http://cooperacy.org/cooperation" class="noline finger">
            <text transform="matrix(1 0 0 1 218 360)" fill="#555555" font-size="65">DIVERSITY</text>
            <line style="display:inline;fill:#555555;stroke:#FF77CC;stroke-width:6;stroke-miterlimit:10;" x1="150" y1="393" x2="600" y2="393"/>
            <text transform="matrix(1 0 0 1 148 443)" display="inline" fill="#555555" stroke="#555555" stroke-miterlimit="10"
            font-size="25" letter-spacing="2">AND THE WISDOM OF INCLUSION</text>
          </a>
        </g>

      </svg>

    </div> <!--END CIRCLE-->

  </div><!--END ROW-->

<div id="homefade" style="opacity:0"><!--START FADING-->

  <div class="row"><!--BEGIN ROW-->

  <div class="col-md-2"></div>

  <div class="col-md-8"><!--BEGIN CONTENT-->

    <div class="row"><br>
      <div class="col-lg-4 col-xs-12 subheading center"><a href="/aboutus" class="noline transparency space">DISCOVER</a></div>
      <div class="col-lg-4 col-xs-12 subheading center"><a href="/cooperation" class="noline understanding space">LEARN</a></div>
      <div class="col-lg-4 col-xs-12 subheading center"><a href="/projects" class="noline equivalence space">DO</a></div>

      <br><br><br><p class="base center">Cooperacy is a scientific project willing to spread cooperation in social ecosystems</p><br><br>

      <div class="base it">In Cooperacy I’ve seen the freedom of the individual in relation to the freedom of others, a continuous oscillation of equilibria, with unassuming attitude, following an easy flow and the spontaneous actions of people.</div><div class="base bb equivalence">Carola</div><br><br>

      <div class="base it">I see Cooperacy - beyond its social goal – as a path made of people who want to improve themselves and the world around them, building something beautiful and useful for all.
      In a world based on the mindless continuous consumption of goods, living on a different constructive mentality can be an amazing gift for ourselves and the people we love.
    </div><div class="base bb trust">Lorenzo</div><br><br>

      <div class="base it">There will be a day in which human beings will look to each other with the same love they have for their children. A day in which we will all be mutually parents and children at the same time. You don’t ask yourself if investing energy for a child will bring you an economic advantage. Now it’s not like that yet, but there are many movements indicating that global awareness is changing. Directions are visible and the so called “critical mass” is gradually becoming consistent. Cooperacy is one of this good movements having strong correlations with the concreteness of doing. I really feel like an ancient knight when I pay my humble duty - a small thing to do, but a big impulse to the nobility of my spirit.
      </div><div class="base bb care">Albino</div><br><br>

      <div class="base it">I felt Cooperacy in my belly, since the first read. Then to make it go up and reach my mind, I fight with it. Yes, it’s like getting into fights. It drains me out and at the same time it lends a hand to make me get up again. It challenges me every day, it turns upside down my perspectives, it opens myself to new possibilities. It teaches me, while other times it allows me to teach or better share what I think I have learned.
      It’s my inner mountain.
      </div><div class="base bb transparency">Beatrice</div><br><br>

      <div class="base it">Cooperacy, for me, it’s overall doing things together cheerfully.
      I hope you can have fun in Cooperacy like I do, participating to its construction with your ideas and your enthusiasm.
    </div><div class="base bb freedom">Ilario</div><br><br>

    <div class="base it">Most of my friends remember me with my age. 15. Maybe I'm too young to discover the world. But I'm doing it. I'm Kurd and raised in Qorveh, where Turks, Kurds, Persians coexist together (#diversity ;-) ). My mother is a Turk and my father is a Kurd. I'm a #gamification consultant. And I'm writing a book about gamification and lifestyle.
    However, talking more and more with one of the Cooperacy coordinators, I found that game design (and gamification) has a bad paradigm nowadays. I found the power of cooperation and realize that cooperation is better than competition (competition sucks ;-) ).
     As a game designer, accepting this fact was very hard for me. In game design and gamification, we have a lot of theories, techniques, and systems based on competition. And I knew that competition is one of the most powerful drives in the human mind. However, I realize that cooperation could make our world a better place to live. A better social ecosystem.
    Now with Cooperacy, We are trying to design games and ARGs to teach cooperation to people. And in the first phase of the project, we want to teach these skills to high school students. And as an Iranian, I really love to test this gamified system in Iran to help my people. And make the world a better place. It is what Alessandro taught me: “it's not me, nor you, but the things we can do together.”
    </div><div class="base bb understanding">Ali</div><br><br>

      <div class="base it">It was a feeling of serendipity, calm awareness going through my smile. It was a particular period of my life: I had realized not only the present condition of the world we are living in, but also the great opportunity We have to address its problems. I simply thought:“I need to act, now”. Therefore, I sort of left the path I was on to realise something else (a start-up). Thinking back, I believe I was a little too anxious. Conversely I recognized in Cooperacy in general a peaceful awareness but also a decisive willingness to make it happen. Thanks to Cooperacy I did get to know several people, lovable people and I have been “since then” an enthusiast messenger of Cooperacy's values.
      I am truly fascinated by Cooperacy especially because its ideas are simpler to experience than to explain. There’s research in it, a social research. And I strongly believe that this kind of approach is crucial in our time.
      I trust Cooperacy and nowadays this is an incredibly effective starting point. While writing this my hands literally cried over my laptop lol
    </div><div class="base bb diversity">Davide</div><br><br>

      <div class="base it">To me, it seemed a different idea than the others I heard about, during a period in which words like “start-up”, “business angel” and “innovation” were imposing themselves on the media agenda. Moved by the curiosity raised during the conversations with the group - that was forming and growing in the meantime - I read the book The Chalice and the Blade by R. Eisler. I found it so interesting that I thought it was worthy taking part in a more active way.
      </div><div class="base bb understanding">Giosetta</div><br><br>


      <div class="base it">My first impression was I didn’t understand what was this group who was suggesting ways to make other people better communicate between themselves, nevertheless my internal curiosity spirit led me to meet Alessandro, Sara, Bea, Ilario and other coordinators of Cooperacy. At the end my inner spirit admitted Cooperacy has no definitions, you can only perceive it while you live it surrounded by the enthusiasm and the force of its participants.
      </div><div class="base bb freedom">Walter</div><br><br>

      <div class="base it">Cooperacy is something I’ve been thinking about for some time, since when I understood that competition creates unhappiness.
      </div><div class="base bb transparency">Justin</div><br><br>

      <div class="base it">A year ago Facebook showed me the Cooperacy link and I literally dove in it because I felt it was like the water in which I always wanted to swim into. In these months I often had the fear to drown and I went back to the shore. Nevertheless, the will to be in the waters has been stronger and thanks to some patient guidance by Alessandro, the sustain of Ilario and Beatrice I am learning to stay in the waters even when it frightens me, to trust the group and to flow together with all the rest.
      I feel like I am becoming water too and it’s amazing!
    </div><div class="base bb care">Sara</div><br><br>

      <div class="base it">What brought you to join Cooperacy?
      The fact that Cooperacy is trying to dissolve the most toxic superstition: the myth according to which the world is nothing more that a bloody battlefield in which “kill or be killed” it’s the only valid strategy.
    </div><div class="base bb trust">Nicola</div><br><br>

      <div class="base it">Born and raised in a small town in Trentino, surrounded by mountains and nature: a place where the sense of community, the value of cooperation and the care for the environment are strongly felt. Cooperacy!
      </div><div class="base bb equivalence">Federica</div><br><br>

      <div class="base it">I needed a little bit of color in the gray days of mine. And in Cooperacy there is a rainbow of personalities one different than another, all full of enthusiasm and energy, with which to share ideas and work together.
      In Cooperacy I found a lot of people who work together well, and that overall they have fun doing it.
    </div><div class="base bb diversity">Enea</div><br><br>

    <div class="base it">Although I have always been a supporter of a model based on hierarchies, I have always wondered if the world I dreamed was the right one. Discussing with Alessandro and listening to the Cooperacy concept, I was intrigued by the thought that something could (and perhaps should) change compared to certain ideas, appreciating the innovative way in which the cooperation science interpreted models.
    </div><div class="base bb equivalence">Sabatino</div><br><br>

      <div class="base it">A mechanism that sets the human being in the centre of everything.
      I said to myself: here there’s a new and original material, so I jumped on this train which costs just a coffee per month!
    </div><div class="base bb trust">Franz</div><br><br>

      <div class="base it">I new since time that worst damage in most of human social environments come from the fact that every relationship starts with the presumption of knowing how to relate, communicate and cooperate. This presumption is false in almost all cases.
      We need courage, creativity and competence to change this condition, and Cooperacy has all the needed skills to accomplish it.
    </div><div class="base bb care">Igor</div><br><br>

      <div class="base it">In Cooperacy I look for a model that would bring cooperation without leveraging over “noble sentiments”.
      </div><div class="base bb transparency">Marco</div><br><br>

      <div class="base it">Cooperacy has been able to bring the creation of a smooth flow of communication in a social environment that wasn’t incline to establish good relations between the people. That is why I came to see what happens here. Without knowing if I will be able to be useful, but with that feeling that I want to understand something that intrigues me and to understand how to utilise it, I decided to join.
      </div><div class="base bb freedom">Francesco</div><br><br>

      <div class="base it">Cooperacy has been growing these months a lot and it is impressive to see the continuous exchange of ideas, the cheerfulness and the seriousness with which the participants cooperate together in the projects.
      </div><div class="base bb understanding">Sarah</div><br><br>

      <div class="base it">In these months I've seen people of different perspecitve to come, participate, and somehow many of them decided to change their lives because they understood what they really wanted. Cooperacy is an origin for people to start to recognize again themselves in the actions they do everyday. At the same time, all these people decided to support the project, because they saw and experienced the wonderful feeling of cooperation and understood that changing the social ecosystem into one based on redistribution of wealth and proportional creative integration could make the world to be a pleasant and enjoyable place for everyone.
      </div><div class="base bb diversity">Alessandro</div><br><br>

</div>


</div><!--END CONTENT-->

  <div class="col-md-2"></div>

  </div><!--END ROW-->

  <div class="row"><!--BEGIN ROW-->

          <p style="text-align:center;">



          </p>

  </div><!--END ROW-->


</div> <!--END FADING-->


</div> <!--END CONTAINER-->

@stop
