@extends('layouts.lvapp')
@section('title')
    The Platform - Cooperacy
@stop
@section('content')

<!--BEGIN CONTAINER-->
<div class="containerone">

  <!--BEGIN HEADER-->
  <div class="row">
  <img class="page-header" src="{{asset('/images/platform.png')}}">
  </div>
  <!--END HEADER-->

  <!--BEGIN ROW-->
  <div class="row">

  <!--BEGIN LEFT ROW-->
  <div class="col-md-2"></div>

  <!--BEGIN CONTENT-->
  <div class="col-md-8">

  <p class="subheading transparency center space margin">IMAGINE</p>
  <p class="base">Imagine the effect of one million people bringing together a little economic effort: one euro. Imagine you and all the other people to reciprocally collect one million euros every month to support your ideas. With this collective fund you will generate an innovative economy in which the more people will participate the more the same people's ideas will be realized.<br>
  Would you like to <a class="aue" href="/register">join</a>?</p>

  <p class="subheading transparency center space">CO-OWNING A PLATFORM</p>
  <p class="base">The Cooperacy Platform won't just realise the most desired ideas proposed by the participants, but also create a social ecosystem based on co-ownership and redistribution of wealth. Every participants is in facts co-owner of all the platform achievements and funds.</p>

  <p class="subheading center space transparency">VOTING IDEAS</p>
  <p class="base">The platform distributes the common money and resources to the ideas according to how much they are desired by the participants. Expressing their desire through votes, the common collected money goes proportionally to the ideas according to how many votes they received. Keeping it simple: people propose <i>ideas</i>, <i>votes</i> allocate the common money.</p>

  <p class="subheading center space transparency">REDISTRIBUTING PROFITS</p>
  <p class="base">Every idea is co-owned, so when it produces wealth, its profits go back to the platform collected money, in order to fund other ideas and to create a virtuous circle that slowly generates resources for everyone.</p>

  <p class="subheading center space equivalence margin">A COOPERATION LEARNING ECOSYSTEM</p>
  <p class="base">An artificial intelligence will learn from all the data coming from the platform and suggest, in the long run, best practices in order to help the people to realise their ideas. Moreover, the participants can communicate their happiness, so that the "deep learning ecosystem" will base its suggestions not only on data, but also on the most human, irrational and personal information of all: mood.</p>

  <p class="base"><i>For more technical information about the platform, see its <a class="auu" href="/howitworks">white paper</a>.</i></p>

  <p class="base">We would be very happy to see you on board. One euro per month is really a small effort to see how much can be done when we join our forces. Enter the <a class="aue" href="/register">Cooperacy</a> world. Let's do it together!</p>

  </div>
  <!--END CONTENT-->

  <!--BEGIN RIGHT COL-->
  <div class="col-md-2"></div>
  <!--END RIGHT COL-->

  </div>
  <!--END ROW-->

  <!--BEGIN SPACER-->
  <div class="row"><p style="height:20px;"></p></div>
  <!--END SPACER-->

</div>
<!--END CONTAINER-->

@stop
