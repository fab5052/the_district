@charset "utf-8";


h1,h2,h3,h4,h5,h6{
  font-weight:700;
  padding:0;
	color:#756464;
}
h1{
  font-size:3em;
	line-height:1.2em;
  margin:0 0 0.75em;
	font-weight:normal;
	font-family:Georgia, "Times New Roman", Times, serif;
	font-style:italic;
	text-shadow:1px 1px 2px rgba(0, 0, 0, .3);
}
h2{
  font-size:2em;
	line-height:1.2em;
  margin:0 0 1em;
	font-family:"Times New Roman", Times, serif;
	font-style:italic;
	font-weight:normal;
	background:#3939391c;
	color:#d87a28;
	padding:.2em 0 .2em .5em;
	border-radius:3px;
}
	h2 a {
		color:#000;
		text-decoration:none;
		}
h3{
  font-size:24px;
	line-height:1.2em;
	font-family:"Times New Roman", Times, serif;
	font-weight:normal;
  margin:0 0 .75em;
}
	h3 strong {
		font-weight:normal
	}
h4{
  font-size:1em;
  margin:0 0 .2em;
}
h5{
  font-size:0.8333em;
  margin:0 0 1em;
}
h6{
  font-size:0.666em;
  margin:0 0 2.25em;
}


* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  
}

hr {
  height: 0;
  color: inherit;
  border-top-width: 1px
}



/* CSS pour le contenu principal */
.main-content {
  margin-top: 25vh;
  /* Marge en haut pour éviter le chevauchement avec le header */
  margin-bottom: 20vh;
  /* Marge en bas pour éviter le chevauchement avec le footer */
 
 


}


.parallax {
  background-image: url("https://i.etsystatic.com/21916349/r/il/a756da/3962508333/il_794xN.3962508333_jf2j.jpg");
  background-attachment: fixed;
  /* Fixe l'image pendant le scroll */
  background-size: cover;
  /* L'image prendra 100% de l'espace, quitte à la crop */
  background-position: center;
  /* Centre la position de l'image */
  background-repeat: no-repeat;
  /* Empêche l'image de se répéter en fonction de la taille d'écran */
  z-index: -10;
  overflow: hidden;

}

header {
  position: fixed;

  top: 0;
  width: 100vw;

  z-index: 1000;
  /
  /* Autres styles personnalisés selon vos besoins */
}


/* CSS pour le footer */
footer {


  width: 100%;
  height: 20vh;
  z-index: 200;
  /* Assure que le footer reste au-dessus du contenu */
  background-color: #726b6bf6;
  /* Couleur de fond du header */

}

nav {
  display: flex;
  position: fixed;
  width: 100vw;
  background-color: #6b6666f6;
  /* Couleur de fond du header */
  align-items: center;
 

  justify-content: space-between;
  z-index: 1000;


  box-shadow: inset 0px 1px 0px #bfbfc4;

}

a {
  font-size: 20px;
  color: #7c95c5;
  text-shadow: solid 4px #d9d9de;
}


.nav-icon {
  display: flex;
  align-items: center;
  text-decoration: none;
  margin-right: 15px;
}



.nav-icon img {
  width: 120px;
  height: 125px;
  position: relative;
}

.card {
  position: relative;
  align-items: flex-start;
  background-image: linear-gradient(15deg, #0f4667 0%, #2a6973 150%);
  display: flex;
  min-height: 100%;
  justify-content: center;
  padding: var(--spacing-xxl) var(--spacing-l);
  width: 40vh;
  height: 20vw;
  margin-bottom: 30vh;
  overflow: hidden;
  z-index: 0;
}

.card img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  justify-content: center;
  vertical-align: middle;
  position: relative;
  z-index: 30;
}

.card:hover .background {
  transform: scale(1.05) translateZ(0);
}

.card .grid:hover > .card:not(:hover) .card .background {
  filter: brightness(0.5) saturate(0) contrast(1.2) blur(20px);
}

.card .content {
  left: 0;
  padding: var(--spacing-l);
  position: relative;
  top: 0;
}




.card-grid{
  display: grid;
  grid-template-columns: repeat(1, 1fr);
  grid-column-gap: var(--spacing-l);
  grid-row-gap: var(--spacing-l);
  max-width: var(--width-container);
  width: 100%;
}

@media(min-width: 540px){
  .card-grid{
    grid-template-columns: repeat(2, 1fr); 
  }
}

@media(min-width: 960px){
  .card-grid{
    grid-template-columns: repeat(4, 1fr); 
  }
}

.card{
  list-style: none;
  position: relative;
}

.card:before{
  content: '';
  display: block;
  padding-bottom: 150%;
  width: 100%;
}

.card__background{
  background-size: cover;
  background-position: center;
  border-radius: var(--spacing-l);
  bottom: 0;
  filter: brightness(0.75) saturate(1.2) contrast(0.85);
  left: 0;
  position: absolute;
  right: 0;
  top: 0;
  transform-origin: center;
  transform: scale(1) translateZ(0);
  transition: 
    filter 200ms linear,
    transform 200ms linear;
}

.card:hover .card__background{
  transform: scale(1.05) translateZ(0);
}

.card-grid:hover > .card:not(:hover) .card__background{
  filter: brightness(0.5) saturate(0) contrast(1.2) blur(20px);
}



.card__category{
  color: var(--text-light);
  font-size: 0.9rem;
  margin-bottom: var(--spacing-s);
  text-transform: uppercase;
}

.card__heading{
  color: var(--text-lighter);
  font-size: 1.9rem;
  text-shadow: 2px 2px 20px rgba(0,0,0,0.2);
  line-height: 1.4;
  word-spacing: 100vw;
}
 .content {
  width: auto;
  height: 20vh;
  overflow: hidden;
 }
.content img {
  overflow: hidden;
 width: auto;
	height: 100%;
}
.content h2 {
	margin: 0;
	padding: 25px 0;
	font-size: 22px;
	border-bottom: 1px solid #e0e0e3;
	color: #b98923;
  justify-content: center;
 display: flex;
 text-align: justify;
}

.content > p, .content > div {
	box-shadow: 0 0 5px 0 rgba(0, 0, 0, 0.1);
	margin: 25px 0;
	padding: 25px;
	background-color: #cbbcbcd4;
  justify-content: center;
  align-items: center;

}


.login {
  	width: 800px;
  	background-color: #625959;
  	box-shadow: 0 0 9px 0 rgba(0, 0, 0, 0.3);
  	margin: 100px auto;
}
.login h2 {
  	text-align: center;
  	color: #c3c5c9;
  	font-size: 30px;
    font-weight: bold;
  	padding: 20px 0 20px 0;
  	border-bottom: 1px solid #dee0e4;
}

.reg h4 {
  text-align: center;
  color: #fbfcfd;
vertical-align: middle;
  
}

.reg h5 {
  text-align: center;
  color: #767a80;
  vertical-align: middle;
  font-size: 15px;

}

.login form {
  	display: flex;
  	flex-wrap: wrap;
  	justify-content: center;
  	padding-top: 20px;
}
.login form label {
  	display: flex;
  	justify-content: center;
  	align-items: center;
  	width: 50px;
  	height: 50px;
  	background-color: #3274d6;
  	color: #ffffff;
}
.login form input[type="password"], .login form input[type="text"] {
  	width: 310px;
  	height: 50px;
  	border: 1px solid #dee0e4;
  	margin-bottom: 20px;
  	padding: 0 15px;
}
.login form input[type="submit"] {
  	width: 100%;
  	padding: 15px;
 	margin-top: 20px;
  	background-color: #3274d6;
  	border: 0;
  	cursor: pointer;
  	font-weight: bold;
  	color: #ffffff;
  	transition: background-color 0.2s;
}
.login form input[type="submit"]:hover {
	background-color: #2868c7;
  	transition: background-color 0.2s;
}


input,textarea,p {
  outline: 0;
  box-sizing: border-box;
}

h1 {
    margin: 0;
    padding: 20px;
    font-size: 22px;
    text-align: center;
    border-bottom: 1px solid #eceff2;
    color: #92b4e4;
    font-weight: 600;
}
.contact {
    background-color: #dfd9d9f2;
    width: 500px;
    margin: 0 auto;
    box-shadow: 0px 0px 10px 5px rgba(0, 0, 0, 0.303);
}
.contact .fields {
  
   display: block;
   justify-content: center;
   align-items: center;
    padding: 15px;
    width: 90%;
    border-left: 30%;
  
  }
.contact input[type="text"], .contact input[type="email"] {
    display: block;
    margin-top: 15px;
    padding: 15px;
    border: 1px solid #dfe0e0;
    width: 100%;
    justify-items: center;
}
.contact input[type="text"]:focus, .contact input[type="email"]:focus {
    border: 1px solid #c6c7c7;
}
.contact input[type="text"]::placeholder, 
.contact input[type="email"]::placeholder, 
.contact textarea::placeholder {
    color: #858688;
}
.contact textarea {
    resize: none;
    margin-top: 15px;
    padding: 15px;
    border: 1px solid #dfe0e0;
    width: 400px;
    height: 150px;
}
.contact textarea:focus {
    border: 1px solid #c6c7c7;
}
.contact input[type="submit"] {
    display: block;
    margin-top: 15px;
    padding: 15px;
    border: 0;
    background-color: #518acb;
    font-weight: bold;
    color: #fff;
    cursor: pointer;
    width: 100%;
}
.contact input[type="submit"]:hover {
    background-color: #3670b3;
}
.contact input[name="email"] {
    position: relative;
    display: block;
    width: 400px;
    justify-content: center;
}
.contact label {
    position: relative;

}
.contact label i {
    position: absolute;
    color: #dfe2e5;
    top: 31px;
    left: 15px;
    z-index: 10;
}
.contact label i ~ input {
    padding-left: 45px !important;
}
.contact .responses {
    padding: 15px;
    margin: 0;
}

/* .content-wrapper {
	width: 1050px;
	margin: 0 auto;
}
header {
	border-bottom: 1px solid #EEEEEE;
}
header .content-wrapper {
	display: flex;
}
header h1 {
	display: flex;
	flex-grow: 1;
	flex-basis: 0;
	font-size: 20px;
	margin: 0;
	padding: 24px 0;
}
header nav {
	display: flex;
	flex-grow: 1;
	flex-basis: 0;
	justify-content: center;
	align-items: center;
}
header nav a {
	text-decoration: none;
	color: #555555;
	padding: 10px 10px;
	margin: 0 10px;
}
header nav a:hover {
	border-bottom: 1px solid #aaa;
}
header .link-icons {
	display: flex;
	flex-grow: 1;
	flex-basis: 0;
	justify-content: flex-end;
	align-items: center;
	position: relative;
}
header .link-icons a {
	text-decoration: none;
	color: #394352;
	padding: 0 10px;
}
header .link-icons a:hover {
	color: #4e5c70;
}
header .link-icons a i {
	font-size: 18px;
}
header .link-icons a span {
	display: inline-block;
	text-align: center;
	background-color: #63748e;
	border-radius: 50%;
	color: #FFFFFF;
	font-size: 12px;
	line-height: 16px;
	width: 16px;
	height: 16px;
	font-weight: bold;
	position: absolute;
	top: 22px;
	right: 0;
}
main .featured {
	display: flex;
	flex-direction: column;
	background-image: url(assets/img/images_the_district/category/burger_cat.png);
	background-repeat: no-repeat;
	background-size: cover;
	height: 500px;
	align-items: center;
	justify-content: center;
	text-align: center;
  z-index: auto;
}
main .featured h2 {
	display: inline-block;
	margin: 0;
	width: 1050px;
	font-family: Rockwell, Courier Bold, Courier, Georgia, Times, Times New Roman, serif;
	font-size: 68px;
	color: #FFFFFF;
	padding-bottom: 10px;
}
main .featured p {
	display: inline-block;
	margin: 0;
	width: 1050px;
	font-size: 24px;
	color: #FFFFFF;
}
main .recentlyadded h2 {
	display: block;
	font-weight: normal;
	margin: 0;
	padding: 40px 0;
	font-size: 24px;
	text-align: center;
	width: 100%;
	border-bottom: 1px solid #EEEEEE;
}
main .recentlyadded .products, main .products .products-wrapper {
	display: flex;
	flex-wrap: wrap;
	align-items: center;
	justify-content: space-between;
	padding: 40px 0 0 0;
}
main .recentlyadded .products .product, main .products .products-wrapper .product {
	display: block;
	overflow: hidden;
	text-decoration: none;
	width: 25%;
	padding-bottom: 60px;
}
main .recentlyadded .products .product img, main .products .products-wrapper .product img {
	transform: scale(1);
	transition: transform 1s;
}
main .recentlyadded .products .product .name, main .products .products-wrapper .product .name {
	display: block;
	color: #555555;
	padding: 20px 0 2px 0;
}
main .recentlyadded .products .product .price, main .products .products-wrapper .product .price {
	display: block;
	color: #999999;
}
main .recentlyadded .products .product .rrp, main .products .products-wrapper .product .rrp {
	color: #BBBBBB;
	text-decoration: line-through;
}
main .recentlyadded .products .product:hover img, main .products .products-wrapper .product:hover img {
	transform: scale(1.05);
	transition: transform 1s;
}
main .recentlyadded .products .product:hover .name, main .products .products-wrapper .product:hover .name {
	text-decoration: underline;
}
main > .product {
	display: flex;
	padding: 40px 0;
}
main > .product > div {
	padding-left: 15px;
}
main > .product h1 {
	font-size: 34px;
	font-weight: normal;
	margin: 0;
	padding: 20px 0 10px 0;
}
main > .product .price {
	display: block;
	font-size: 22px;
	color: #999999;
}
main > .product .rrp {
	color: #BBBBBB;
	text-decoration: line-through;
	font-size: 22px;
	padding-left: 5px;
}
main > .product form {
	display: flex;
	flex-flow: column;
	margin: 40px 0;
}
main > .product form input[type="number"] {
	width: 400px;
	padding: 10px;
	margin-bottom: 15px;
	border: 1px solid #ccc;
	color: #555555;
	border-radius: 5px;
}
main > .product form input[type="submit"] {
	background: #4e5c70;
	border: 0;
	color: #FFFFFF;
	width: 400px;
	padding: 12px 0;
	text-transform: uppercase;
	font-size: 14px;
	font-weight: bold;
	border-radius: 5px;
	cursor: pointer;
}
main > .product form input[type="submit"]:hover {
	background: #434f61;
}
main > .products h1 {
	display: block;
	font-weight: normal;
	margin: 0;
	padding: 40px 0;
	font-size: 24px;
	text-align: center;
	width: 100%;
}
main > .products .buttons {
	text-align: right;
	padding-bottom: 40px;
}
main > .products .buttons a {
	display: inline-block;
	text-decoration: none;
	margin-left: 5px;
	padding: 12px 20px;
	border: 0;
	background: #4e5c70;
	color: #FFFFFF;
	font-size: 14px;
	font-weight: bold;
	border-radius: 5px;
}
main > .products .buttons a:hover {
	background: #434f61;
}
main .cart h1 {
	display: block;
	font-weight: normal;
	margin: 0;
	padding: 40px 0;
	font-size: 24px;
	text-align: center;
	width: 100%;
}
main .cart table {
	width: 100%;
}
main .cart table thead td {
	padding: 30px 0;
	border-bottom: 1px solid #EEEEEE;
}
main .cart table thead td:last-child {
	text-align: right;
}
main .cart table tbody td {
	padding: 20px 0;
	border-bottom: 1px solid #EEEEEE;
}
main .cart table tbody td:last-child {
	text-align: right;
}
main .cart table .img {
	width: 80px;
}
main .cart table .remove {
	color: #777777;
	font-size: 12px;
	padding-top: 3px;
}
main .cart table .remove:hover {
	text-decoration: underline;
}
main .cart table .price {
	color: #999999;
}
main .cart table a {
	text-decoration: none;
	color: #555555;
}
main .cart table input[type="number"] {
	width: 68px;
	padding: 10px;
	border: 1px solid #ccc;
	color: #555555;
	border-radius: 5px;
}
main .cart .subtotal {
	text-align: right;
	padding: 40px 0;
}
main .cart .subtotal .text {
	padding-right: 40px;
	font-size: 18px;
}
main .cart .subtotal .price {
	font-size: 18px;
	color: #999999;
}
main .cart .buttons {
	text-align: right;
	padding-bottom: 40px;
}
main .cart .buttons input[type="submit"] {
	margin-left: 5px;
	padding: 12px 20px;
	border: 0;
	background: #4e5c70;
	color: #FFFFFF;
	font-size: 14px;
	font-weight: bold;
	cursor: pointer;
	border-radius: 5px;
}
main .cart .buttons input[type="submit"]:hover {
	background: #434f61;
}
main .placeorder h1 {
	display: block;
	font-weight: normal;
	margin: 0;
	padding: 40px 0;
	font-size: 24px;
	text-align: center;
	width: 100%;
}
main .placeorder p {
	text-align: center;
} */
/* 
.card {
  background-color: #191916;

}

.card_cat {
  border-radius: 25%;
  border: beige solid 3px;
  width: fit-content;
  height: 300px;

}

.img_cat {
  border-radius: 25%;
  border: beige solid 5px;
  object-fit: cover;
  width: 100%;
  height: 100%;
}
 */

.toggle {
  display: none;
}

.navlinks-container a {
  display: flex;
  margin: 0 10px;
  font-size: 22px;
  font-weight: 600;
  vertical-align: middle;

  color: #7c95c5;
  text-shadow: solid 4px #d9d9de;
  position: relative;
}


.navlinks-container a::before {
  display: flex;
  position: relative;
  margin: 0 10px;
  width: 60%;
  color: #657075;
  font-size: 25px;
  font-weight: 800;
  justify-content: center;
  vertical-align: middle;
  color: #69717ecd;
  text-shadow: solid 4px #cdcdd4;
  z-index: 1000;
}

.navlinks-container a::after {
  content: "";
  display: block;
  position: absolute;
  margin: 0 10px;
  bottom: -3px;
  width: 100%;
  height: 1px;
  color: #3391b3;
  transform: scale(0);
  transform-origin: left;
  background: #ccc4c462;
  transition: transform 0.3s ease-out;
  z-index: 1000;
}

.navlinks-container a:hover::after {
  transform: scaleX(1);
}

.nav-authentication {
  display: flex;
  vertical-align: middle;
  min-width: 23vh;

  justify-content: space-around;
  color: #f0f5f6;
  order: 3;
}



.user-toggler {

  width: 20px;


}

h2,
h3 {
  font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;

}


.form-contact {
  margin: auto;

label {
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  color: #dcd9d9;
}

option {
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  color: #e1dbdb;

}

select {
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  color: #e1dbdb;
  height: 40px;

}

textarea {
  height: 15vh;
  min-width: 100%;

}

.invalid-feedback {
  color: red;

}
 
}

@keyframes slideAnimation {

  0% {

    transform: translateX(110%);
  }

  50% {

    transform: translateX(60%);
  }

  100% {

    transform: translateX(110%);
  }
}



.animated-img {

  animation: slideAnimation 6s infinite;


}




.carousel {


  justify-items: center;
  transition: background 0.4s ease-in;
  margin: 3rem;
  border: 0.2em solid;
  border-color: #979292;
}



input[type=radio] {
  display: none;
}





h1 {

  font-family: "neon-tubes-2-regular";
  src:
    url("https://assets.codepen.io/2585/NeonTubes2.otf") format("woff"),
    url("https://assets.codepen.io/2585/NeonTubes2.otf") format("opentype"),
    url("https://assets.codepen.io/2585/NeonTubes2.otf") format("truetype"),

}



.neon-red {
  --neon: hsl(355 100% 95%);
  --neon-glow: hsl(355 98% 40%);
}

.neon-blue {
  --neon: hsl(192 100% 95%);
  --neon-glow: hsl(194 100% 40%);
}

h1>i {

    color: var(--neon);
    text-shadow: 
      0 0 20px var(--neon-glow),
      0 0 2.5vmin var(--neon-glow),
      0 0 5vmin var(--neon-glow),
      0 0 10vmin var(--neon-glow),
      0 0 15vmin var(--neon-glow);
    }
    
    @media (dynamic-range: high) {
    .neon-red {
      --neon-glow: color(display-p3 1 0 0);
    }
    
    .neon-blue {
      --neon-glow: color(display-p3 0 0.75 1);
    }
    
    h1 > i {
      text-shadow: 
        0 0 2.5vmin var(--neon-glow),
        0 0 10vmin var(--neon-glow),
        0 0 15vmin var(--neon-glow);
    }
    }
    
    
    
    h1 {
    text-align: center;
    font-family: "neon-tubes-2-regular", sans-serif;
  
  
    }
  
  
  
    
  p {
    color: #091b20;
  
  
  }
  

.accordion-group {
  overflow: hidden;
  margin: 0 auto;
  padding: 0;
  list-style: none;
  width: 100%;
  height: 70vh;
  display: flex;
  align-items: center;
  -webkit-transition: all 300ms ease;
  -moz-transition: all 300ms ease;
  transition: all 300ms ease;
}

.accordion-group li {
  cursor: pointer;
  position: relative;
  display: flex;
  overflow: hidden;
  margin: 0;
  padding: 1.6em;
  list-style: none;
  width: 16.66666667%;
  height: inherit;
  background-position: center center;
  background-size: cover;
  background-repeat: no-repeat;
  -webkit-transition: all 250ms ease-in-out;
  -moz-transition: all 250ms ease-in-out;
  transition: all 250ms ease-in-out;
}

.accordion-group li h3 {
  position: relative;
  color: #fff;
  text-transform: uppercase;
  letter-spacing: 0.15rem;
  padding: 0;
  font-weight: 300;
  margin: 6.5rem 0 0;
}

.accordion-group li .accordion-overlay {
  position: absolute;
  height: 100%;
  width: 100%;
  left: 0;
  top: 0;
  -webkit-transition: all 250ms ease-in-out;
  -moz-transition: all 250ms ease-in-out;
  transition: all 250ms ease-in-out;
}

.accordion-group li section {
  display: flex;
  align-items: center;
  width: 75%;
  height: 100%;
}

.accordion-group li section.big-section {
  width: 100%;
}

.accordion-group li section article {
  display: table-cell;
  vertical-align: middle;
  padding: 4rem;
  position: relative;
  right: -200%;
  -webkit-transition: all 250ms ease-in-out;
  -moz-transition: all 250ms ease-in-out;
  transition: all 250ms ease-in-out;
}

.accordion-group li section article p {
  background-color: rgba(255, 255, 255, 0.8);
  padding: 1.6rem;
  color: #333;
  font-size: 1.6rem;
  letter-spacing: 0.15rem;
}

.accordion-group li section article p:before,
.accordion-group li section article p:after {
  content: "";
  display: block;
  height: 1px;
}

.accordion-group li.out {
  width: 50%;
}

.accordion-group li.out section article {
  right: 0;
}


.accordion-group {
  height: 360px;
}

.accordion-group li {
  display: flex;
  align-items: center;
  justify-content: center;
}

.accordion-group li.out h3 {
  opacity: 0;
}

.accordion-group li h3 {
  opacity: 1;
  -webkit-transition: all 300ms ease-in-out;
  -moz-transition: all 300ms ease-in-out;
  transition: all 300ms ease-in-out;
  -webkit-transform: rotate(90deg);
  -moz-transform: rotate(90deg);
  transform: rotate(90deg);
  width: 2.5rem;
  padding: 0;
  margin: 10rem 0;
}

@-webkit-keyframes rotate {
  from {
    -webkit-transform: rotate(0deg);
    -moz-transform: rotate(0deg);
    transform: rotate(0deg);
  }

  to {
    -webkit-transform: rotate(360deg);
    -moz-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}

@-moz-keyframes rotate {
  from {
    -webkit-transform: rotate(0deg);
    -moz-transform: rotate(0deg);
    transform: rotate(0deg);
  }

  to {
    -webkit-transform: rotate(360deg);
    -moz-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}

@keyframes rotate {
  from {
    -webkit-transform: rotate(0deg);
    -moz-transform: rotate(0deg);
    transform: rotate(0deg);
  }

  to {
    -webkit-transform: rotate(360deg);
    -moz-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}

@media (max-width: 768px) {

  nav {
    height: 15vh;
  }


  .main-navlinks {

    width: auto;
  }

  .nav-icon {
    order: 2;
  }

  .toggle {
    display: flex;
    position: relative;
    justify-content: start;
    width: 50px;
    height: 50px;
    justify-items: center;
    background: #c2c2c3c1;
    box-shadow: 0 5px 15px rgba(37, 37, 41, 0.897);
    border-radius: 6px;
    border-color: #898888;
    align-items: center;
    cursor: pointer;
    overflow: hidden;
    padding: 0 10px;

  }

  .toggle span {
    position: absolute;

    width: 40px;
    height: 5px;
    background: #eb080cab;
    border-radius: 10px;

    border-width: 12px;
    transition: 1s;
  }

  .toggle span:nth-child(1) {
    transform: translateY(-15px);
    width: 30px;
    left: 15px;
  }

  .toggle.active span:nth-child(1) {
    width: 30px;


    transform: translateY(0) rotate(45deg);
    transition-delay: 0.125s;
  }

  .toggle span:nth-child(2) {
    transform: translateY(15px);
    width: 25px;
    left: 10px;
    right: 20px;
  }

  .toggle.active span:nth-child(2) {

    width: 40px;
    transform: translateY(0) rotate(315deg);
    transition-delay: 0.25s;
  }

  .toggle.active span:nth-child(3) {
    transform: translateX(55px);
  }



  .navlinks-container {
    display: block;
    flex-direction: column;
    align-items: flex-start;
    position: absolute;
    background: #c5c2c2ee;
    top: 100%;
    left: 0;
    transform: translate(-100%);
    height: 100vh;
    padding: 15px 50px 15px 20px;
    border-right: 1px solid #c5c5c6;
  }

  .open {
    transform: translate(0%);
  }

  .navlinks-container a {
    font-size: 15px;
    margin: 10px 0px;
  }


  .nav-authentication {
    order: 4;
    display: block;

  }


  .user-toggler {
    order: 3;
    display: flex;
    ;
    cursor: pointer;

  }

  .user-toggler.img {
    width: 10px;
    color: #898888;
    border: solid 2px;
  }
}


@media (max-width: 767px) {
  .accordion-group {
    height: 360px;
  }

  .accordion-group li {
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .accordion-group li.out h3 {
    opacity: 0;
  }

  .accordion-group li h3 {
    opacity: 1;
    -webkit-transition: all 300ms ease-in-out;
    -moz-transition: all 300ms ease-in-out;
    transition: all 300ms ease-in-out;
    -webkit-transform: rotate(90deg);
    -moz-transform: rotate(90deg);
    transform: rotate(90deg);
    width: 2.5rem;
    padding: 0;
    margin: 10rem 0;
  }
}

@-webkit-keyframes rotate {
  from {
    -webkit-transform: rotate(0deg);
    -moz-transform: rotate(0deg);
    transform: rotate(0deg);
  }

  to {
    -webkit-transform: rotate(360deg);
    -moz-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}

@-moz-keyframes rotate {
  from {
    -webkit-transform: rotate(0deg);
    -moz-transform: rotate(0deg);
    transform: rotate(0deg);
  }

  to {
    -webkit-transform: rotate(360deg);
    -moz-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}

@keyframes rotate {
  from {
    -webkit-transform: rotate(0deg);
    -moz-transform: rotate(0deg);
    transform: rotate(0deg);
  }

  to {
    -webkit-transform: rotate(360deg);
    -moz-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}

#search {
  height: 35px;
  min-width: 25px;
  position: relative;
  order: 6;
}

#search input {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  width: 35px;
  height: 35px;
  border: 1px solid #c0a2a2;
  border-radius: 100%;
  background: transparent;
  color: #fafafa;
  font-size: 16px;
  font-weight: 400;
  outline: none;
  -webkit-transition: width 100ms ease-in-out;
  -moz-transition: width 100ms ease-in-out;
  transition: width 100ms ease-in-out;
}

#search input::-webkit-input-placeholder {
  color: transparent;
}

#search input:-moz-placeholder {
  color: transparent;
}

#search input::-moz-placeholder {
  color: transparent;
}

#search input:-ms-input-placeholder {
  color: transparent;
}

#search .search {
  background-color: transparent;
  position: absolute;
  top: 0;
  left: 0;
  height: 35px;
  width: 35px;
  padding: 0;
  border-radius: 100%;
  outline: none;
  border: 0;
  color: #b1a6a6;
  cursor: pointer;
  -webkit-transition: all 300ms ease-in-out;
  -moz-transition: all 300ms ease-in-out;
  transition: all 300ms ease-in-out;
}

#search .search:before,
#search .search:after {
  content: "";
  position: absolute;
  width: 1rem;
  height: 0.1rem;
  background-color: #beb6b6;
  -webkit-transform: rotate(45deg);
  -moz-transform: rotate(45deg);
  transform: rotate(45deg);
  top: 3.3rem;
  left: 3rem;
  -webkit-transition: all 300ms ease-in-out;
  -moz-transition: all 300ms ease-in-out;
  transition: all 300ms ease-in-out;
}

#search .close {
  -webkit-transition: all 400ms ease-in-out;
  -moz-transition: all 400ms ease-in-out;
  transition: all 400ms ease-in-out;
  right: 0;
  left: inherit;
}

#search .close:before {
  content: "";
  position: absolute;
  top: 1.7rem;
  left: 1.5rem;
  width: 27px;
  height: 4px;
  margin-top: -1px;
  margin-left: -13px;
  background-color: #c1b7ab;
  -webkit-transform: rotate(45deg);
  -moz-transform: rotate(45deg);
  transform: rotate(45deg);
  -webkit-transition: all 200ms ease-in-out;
  -moz-transition: all 200ms ease-in-out;
  transition: all 200ms ease-in-out;
}

#search .close:after {
  content: "";
  position: absolute;
  top: 1.7rem;
  left: 1.5rem;
  width: 27px;
  height: 4px;
  margin-top: -1px;
  margin-left: -13px;
  background-color: #ca9964;
  -webkit-transform: rotate(-45deg);
  -moz-transform: rotate(-45deg);
  transform: rotate(-45deg);
  -webkit-transition: all 200ms ease-in-out;
  -moz-transition: all 200ms ease-in-out;
  transition: all 200ms ease-in-out;
}

#search .square {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  padding: 0 4rem 0 1rem;
  width: 100%;
  height: 35px;
  border: 1px solid #333;
  border-radius: 0;
  color: #b5aeae;
  background-color: transparent;
  -webkit-transition: all 300ms ease-in-out;
  -moz-transition: all 300ms ease-in-out;
  transition: all 300ms ease-in-out;
}

#search .square::-webkit-input-placeholder {
  color: #bfb9b2;
}

#search .square:-moz-placeholder {
  color: #e8e0d9;
}

#search .square::-moz-placeholder {
  color: #ca9964;
}

#search .square:-ms-input-placeholder {
  color: #ca9964;
}

#search .square.active #search .square:hover,
#search .square:focus,
#search .square:active {
  border-color: #ca9964;
}





/* MARKETING CONTENT
  -------------------------------------------------- 
  
  Center align the text within the three columns below the carousel 
  .marketing .col-lg-4 {
    margin-bottom: 1.5rem;
    text-align: center;
  }
  
  .marketing h2 {
    font-weight: 400;
  }
  
  .marketing .col-lg-4 p {
    margin-right: .75rem;
    margin-left: .75rem;
  }*/



.featurette-divider {
  margin: 0.5rem 0;
  height: 2px;
  /* Space out the Bootstrap <hr> more */
}

.featurette-heading {
  font-weight: 300;
  line-height: 1;
  letter-spacing: -.05rem;
}
