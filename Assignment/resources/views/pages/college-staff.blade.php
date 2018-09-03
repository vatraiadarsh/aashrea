<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

 body{
background-image:url("College Staffs.jpeg");
background-size: 100%;
background-color: #ACFF89  ;
}

		h1 {
background-color: #78D106      	;
text-align: center;
color: black;
opacity: 0.9;
}

	p{
background-color: #E9541C  ;
font-family: Cursive;
font-size: 18;
}


h2{
color: black;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33%;
  margin-bottom: 16px;
  padding: 0 8px;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}

.card {
  box-shadow: 0 4px 8px 0 #211F1F  ;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: #2E1B14     ;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #18A229   ;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #252323  ;
}


</style>
</head>
<body>

<h1>Meet the Team</h1>
<p>With world-class trainers, immaculate facilities, dedication to service and innovative pathways, Australia Institute of Business & Technology - AIBT offers you the pathway to your future career.</p>
<h2>Meet some of our team members :  </h2>

<div class="row">
  <div class="column">
    <div class="card">
      <img src="Sandesh.jpg" alt="Sandesh" style=" height: 250 px ; width: 60%">
      <div class="container">
        <h2>Sandesh Kazi Shrestha</h2>
        <p class="title">CEO & Founder</p>
        <p>sandeshkazistha@aibtglobal.edu.au</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="aashreya.jpg" alt="Hrythm" style="height: 250 px ; width: 50%">
      <div class="container">
        <h2>Aashreya Rayamajhi</h2>
        <p class="title">Head of Department of Information Technology</p>
        <p>aashreyarayamajhi@aibtglobal.edu.au</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
  <div class="column">
    <div class="card">
      <img src="jinesh.jpg" alt="Jeevan" style="height: 250 px ; width: 58%">
      <div class="container">
        <h2>Jinesh Singh</h2>
        <p class="title">Associate Director</p>
        <p>jineshsingh@aibtglobal.edu.au</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
</div>

</body>
</html>
