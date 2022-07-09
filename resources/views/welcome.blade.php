<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>


/*
PURE RESPONSIVE CSS3 SLIDESHOW GALLERY by Roko C. buljan
http://stackoverflow.com/a/34696029/383904
*/

.CSSgal {
	position: relative;
	overflow: hidden;
	height: 100%; /* Or set a fixed height */
}

/* SLIDER */

.CSSgal .slider {
	height: 100%;
	white-space: nowrap;
	font-size: 0;
	transition: 0.8s;
}

/* SLIDES */

.CSSgal .slider > * {
	font-size: 1rem;
	display: inline-flex;
	flex-direction: column;
	align-items: center;
	justify-items: center;
	align-content: center;
	justify-content: center;
	white-space: normal;
	vertical-align: top;
	height: 100%;
	width: 100%;
	background: none 50% no-repeat;
	background-size: cover;
}

/* PREV/NEXT, CONTAINERS & ANCHORS */

.CSSgal .prevNext {
	position: absolute;
	z-index: 1;
	top: 50%;
	width: 100%;
	height: 0;
}

.CSSgal .prevNext > div+div {
	visibility: hidden; /* Hide all but first P/N container */
}

.CSSgal .prevNext a {
	background: #fff;
	position: absolute;
	width:       60px;
	height:      60px;
	line-height: 60px; /* If you want to place numbers */
	text-align: center;
	opacity: 0.7;
	-webkit-transition: 0.3s;
					transition: 0.3s;
	-webkit-transform: translateY(-50%);
					transform: translateY(-50%);
	left: 0;
}
.CSSgal .prevNext a:hover {
	opacity: 1;
}
.CSSgal .prevNext a+a {
	left: auto;
	right: 0;
}

/* NAVIGATION */




/* NAVIGATION BUTTONS */
/* ALL: */

/* More slides? Add here more rules */

/* PREV/NEXT CONTAINERS VISIBILITY */
/* ALL: */
.CSSgal >s:target ~ .prevNext >* {      visibility: hidden;}
/* ACTIVE: */
#s1:target ~ .prevNext >*:nth-child(1) {visibility: visible;}
#s2:target ~ .prevNext >*:nth-child(2) {visibility: visible;}
#s3:target ~ .prevNext >*:nth-child(3) {visibility: visible;}
#s4:target ~ .prevNext >*:nth-child(4) {visibility: visible;}
/* More slides? Add here more rules */

/* SLIDER ANIMATION POSITIONS */

#s1:target ~ .slider {transform: translateX(   0%); -webkit-transform: translateX(   0%);}
#s2:target ~ .slider {transform: translateX(-100%); -webkit-transform: translateX(-100%);}
#s3:target ~ .slider {transform: translateX(-200%); -webkit-transform: translateX(-200%);}
#s4:target ~ .slider {transform: translateX(-300%); -webkit-transform: translateX(-300%);}
/* More slides? Add here more rules */






/*** grid-specific styles ***/

    </style>
</head>
<body>
    <div class="CSSgal">

        <!-- Don't wrap targets in parent -->
        <s id="s1"></s>
        <s id="s2"></s>
        <s id="s3"></s>
        <s id="s4"></s>

        <div class="slider">
          <div class="background text-slide" style="background:#5b8;">
                  <h2>(WHY)<br>YOU SHOULD USE<br> CSS <b>GRID</b></h2>
                  <p>by Hal</p>
              </div>
          <div class="background" style="background:#85b;">
                  <h2>Slide 2</h2>
              </div>
          <div class="background" style="background:#e95;">
                  <h2>Slide 3</h2>
              </div>
          <div class="background" style="background:#e59;">
                  <h2>Slide 4</h2>
              </div>
        </div>

        <div class="prevNext">
          <div><a href="test1/#s4"></a><a href="test1/#s2"></a></div>
          <div><a href="test1/#s1"></a><a href="test1/#s3"></a></div>
          <div><a href="test1/#s2"></a><a href="test1/#s4"></a></div>
          <div><a href="test1/#s3"></a><a href="test1/#s1"></a></div>
        </div>



      </div>
</body>
</html>
