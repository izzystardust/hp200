<!--
Each overlay needs the class overlay to work. The id is used for the trigger.
To trigger an overlay, use an anchor with the attribute rel="#trigger", where trigger is the id of the div to be triggered.
-->

<div class="overlay" id="watertown">
  <div>  
    <iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Watertown,+NY&amp;aq=0&amp;oq=watertown&amp;sll=44.669682,-74.987436&amp;sspn=0.08216,0.181789&amp;t=m&amp;ie=UTF8&amp;hq=&amp;hnear=Watertown,+Jefferson,+New+York&amp;ll=44.582643,-76.382446&amp;spn=1.369355,2.334595&amp;z=8&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Watertown,+NY&amp;aq=0&amp;oq=watertown&amp;sll=44.669682,-74.987436&amp;sspn=0.08216,0.181789&amp;t=m&amp;ie=UTF8&amp;hq=&amp;hnear=Watertown,+Jefferson,+New+York&amp;ll=44.582643,-76.382446&amp;spn=1.369355,2.334595&amp;z=8" style="color:#0000FF;text-align:left">View Larger Map</a></small>
  </div>
  <h2>Watertown</h2>
  <p>Watertown is a small city in northern New York. It is situated about 20 miles south of the Thousand Islands on the banks of the Black River. It emerged in the second half of the 19th century as an industrial center, powered by the waters of the Black River. Today it is known as a regional financial center and for its proximity to Fort Drum.</p>
</div>

<div class="overlay" id="conservation_dept">
  <img src="img/conservationdept.png" />
  <h2>The Conservation Department</h2>
  <p>The Conservation Department preceded the New York State Department of Environmental Conservation. The current department works to conserve, improve, and protect New York's natural resources and environment.</p>
</div>

<div class="overlay" id="machold">
    <h2>The Machold Storage Law</h2>
    <p>This law granted any person or public corporation the right to petition the Conservation Department for permission to form a river regulating district.
The district gained the right to own land, sue, be sued. The regulators were appointed by the governor.
Named after Assemblyman H. Edmund Machold (1915)</p>
</div>

<div class="overlay" id="burd">
    <img src="img/burd-newspaper.png">
    <h2>The Burd Ammendment</h2>
    <p>This law granted any person or public corporation the right to petition the Conservation Department for permission to form a river regulating district.
The district gained the right to own land, sue, be sued. The regulators were appointed by the governor.
Named after Assemblyman H. Edmund Machold (1915)</p>
</div>

<div class="overlay" id="forest">
  <h2>The Forest Preserve</h2>
  <p>The Forest Preserve consists of land owned by New York State located within the Adirondack and Catskill Parks.  Under article 14 of the New York State Constitution, Forest Preserve land are to be kept "forever wild."  The New York Constitution has to be amended in order to transfer ownership of land within the Forest Preserve.</p>
</div>

<div class="overlay" id="foreverwild">
  <h2>Forever Wild</h2>
  <p>Forever Wild is an ammendment to the New York constitution. The text reads, "The lands of the state, now owned or hereafter acquired, constituting the forest preserve as now fixed by law, shall be forever kept as wild forest lands. They shall not be leased, sold or exchanged, or be taken by any corporation, public or private, nor shall the timber thereon be sold, removed, or destroyed."</p>
</div>

<div class="overlay" id="apperson">
    <h2>John S. Apperson</h2>
    <p>Apperson was a well-connected conservationist and engineer who had a history of fighting in favor of the Forever Wild clause and for the conservation of Lake George.</p>
</div>

<div class="overlay" id="schaefer">
  <h2>Paul Schaefer</h2>
  <p>Under the mentorship of Apperson, Schaefer was younger and newer to the scene, but had already established himself as a conservation leader and photographer.</p>
</div>

<div class="overlay" id="stokes">
    <h2>The Stokes Act</h2>
    <p>The Stokes Act stated that no reservoirs could be built in Herkimer or Hamilton Counties on the South Branch of the Moose River for any reason except to supply drinking water. It was signed by Governor Dewey in 1950.</p>
</div>

<div class="overlay" id="dewey">
  <img src="img/governordewey.png" />
  <h2>Governor Dewey</h2>
  <p>Thomas Dewey was governor of New York State from 1943-1954. He initially supported the construction of the dams, but as opposition to the dams grew, Dewey began to change his mind. He signed the <a rel="#stokes">Stokes Act</a> in 1950. His actions were crucial to halting the construction of the dams.</p>
</div>

<div class="overlay" id="mooserivercommittee">
  <h2>The Moose River Committee</h2>
  <p>A committee organized to fight the building of the dams. It raised public awareness and public opposition to the dams by printing fliers, distributing movies of the Moose River Plains and other possible flood zones.</p>
</div>

<div class="overlay" id="mooseriverplains">
  <h2>The Moose River Plains</h2>
  <img src="img/MooseRiverPlainsProposal2010.png" />
</div>

<div class="overlay" id="wildernesssociety">
  <img src="img/wildernesssoclogo.png" />
  <h2>The Wilderness Society</h2>
  <p>The Wilderness Society (<a href="http://www.wilderness.org" target="_blank">homepage</a>) is the leading American conservation organization working to protect our nation’s shared wildlands. Since 1935, they have been working to permanently protect nearly 110 million acres of wilderness in 44 states.</p>
  
</div>

<script>
    $("a[rel]").overlay();
</script>
