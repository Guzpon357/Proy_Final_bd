@extends('layouts.app')
@section('content')



<h1 class="text-dark text-center">Partidos Clasificatia</h1>
                        
 <table id="mytable" class="table  table-bordred table-striped">
   <thead class="thead-dark">
     <tr>
         <th scope="col" class="text-center">Fecha</th>
         <th scope="col" class="text-center">Hora</th>
         <th scope="col" class="text-center">Bandera</th>
         <th scope="col" class="text-center">Pais</th>
         <th scope="col" class="text-center">Resultado</th>
         <th scope="col" class="text-center">Pais</th>
         <th scope="col" class="text-center">Bandera</th>
     </tr>
   </thead>
   <tbody>
    @foreach($partidos as $partido)
         <tr>
             <td class="text-center">{{$partido->Fecha_enfrentamiento}}</td>
             <td class="text-center">{{$partido->Hora_enfrentamiento}}</td>
             <td class="text-center"><img src="{{$partido->imgl}}" width="50" height="40"></td>
             <td class="text-center">{{$partido->Pais_local}}</td>
             <td class="text-center">{{$partido->golesl }} : {{ $partido->golesv}}</td>
             <td class="text-center">{{$partido->Pais_visitante}}</td>
             <td class="text-center"><img src="{{$partido->imgv}}" width="50" height="40"></td>
             

         </tr>
     @endforeach
   </tbody>
 </table>    


<header background="img/clasi1.jpg">
    <div class="grid-container">

        <div class="right">

        </div>
        <div class="main">
            <div class="main margin">
                <div class="img1">
                <h4>Viajar a londres</h4>
                <p>
                    <img src="img/clasi5.jpg" width="300" align="left">
                    Lorem ipsum dolor sit amet,
                    consectetur adipiscing elit. Nulla auctor mollis enim vel maximus. Morbi bibendum non mauris ac
                    rhoncus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                    Maecenas ac consectetur enim. Nam faucibus lacinia orci vel suscipit. Pellentesque consequat
                    faucibus bibendum. Morbi et convallis nisi, sed efficitur lectus. Donec scelerisque tristique
                    ultricies. Nullam magna dolor, fringilla quis mauris ut, tristique ornare nisi. Ut a elit tempus,
                    ornare sem vitae, sodales lorem. Praesent sit amet rutrum purus, et interdum tortor. Ut eleifend et
                    nibh nec ornare.</p>

                <button type="button">Leer Más</button>
            </div>
            <div class="img2">
                <h4>Copa Qatar</h4>
                <p>
                    <img src="img/copa.png" width="300" align="left">
                    Lorem ipsum dolor sit amet,
                    consectetur adipiscing elit. Nulla auctor mollis enim vel maximus. Morbi bibendum non mauris ac
                    rhoncus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                    Maecenas ac consectetur enim. Nam faucibus lacinia orci vel suscipit. Pellentesque consequat
                    faucibus bibendum. Morbi et convallis nisi, sed efficitur lectus. Donec scelerisque tristique
                    ultricies. Nullam magna dolor, fringilla quis mauris ut, tristique ornare nisi. Ut a elit tempus,
                    ornare sem vitae, sodales lorem. Praesent sit amet rutrum purus, et interdum tortor. Ut eleifend et
                    nibh nec ornare.</p>

                <button type="button">Leer Más</button>
            </div>
            <div class="img3">
                <h4>El mejor estadio te espera</h4>
                <p>
                    <img src="img/clasi4.jpg" width="300" align="left">
                    Lorem ipsum dolor sit amet,
                    consectetur adipiscing elit. Nulla auctor mollis enim vel maximus. Morbi bibendum non mauris ac
                    rhoncus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                    Maecenas ac consectetur enim. Nam faucibus lacinia orci vel suscipit. Pellentesque consequat
                    faucibus bibendum. Morbi et convallis nisi, sed efficitur lectus. Donec scelerisque tristique
                    ultricies. Nullam magna dolor, fringilla quis mauris ut, tristique ornare nisi. Ut a elit tempus,
                    ornare sem vitae, sodales lorem. Praesent sit amet rutrum purus, et interdum tortor. Ut eleifend et
                    nibh nec ornare.</p>

                <button class="button" type="button">Leer Más</button>
            </div>
            </div>
        </div>
        <div class="foot">
            <div class="grid-container-foot">
                <div class="grid-item foot1">
                    Sobre nosotros
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <p>Phasellus accumsan nunc tellus, dapibus</p>
                    <p>consequat mi vulputate a. Donec eu augue varius.</p>
                </div>
                <div class="grid-item foot2">
                    Menú de navegación
                    <div class="navbar">
                        <a class="margin" href="#">Inicio</a>
                        <a href="#">Partidos</a>
                        <a href="#">Posiciones</a>
                        <a href="#">Estadisticas</a>
                        <a href="#">Jugadores populares</a>
                    </div>
                </div>
                <div class="grid-item foot3">
                    Qatar 2022 - Todos los derechos reservados 2020©
                </div>
            </div>
        </div>
    </div>

</header>
<style>
@charset "utf-8";


body {
    background: linear-gradient(to left, #ff6a00, #ee0979); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
}

.menu {
    grid-area: menu;
}

.main {
    grid-area: main;
    margin-right: 10px;
    color: deepskyblue;
    margin-left: 3em;
}

.right {
    grid-area: right;
    margin-right: 10em;
    color: deepskyblue;
}

.foot {
    grid-area: footer;
    color: white;
}

.grid-container {
    display: grid;
    grid-template-areas: 'header  header header header header header' 'menu main main main right right' 'menu footer footer footer footer footer';
}

.img1 img {
    height: 200px;
    margin-right: 20px;
    margin-bottom: 5px;
    float: left;
}

.img2 img {
    height: 200px;
    margin-right: 20px;
    margin-bottom: 5px;
    float: left;
}

.img3 img {
    height: 200px;
    margin-right: 20px;
    margin-bottom: 5px;
    float: left;
}

.img1 button:hover {
    background-color: #00ACC1;
}

.img2 button:hover {
    background-color: #00ACC1;
}

.img3 button:hover {
    background-color: #00ACC1;
}

.grid-container > div {
    /* background-color: rgba(255, 255, 255, 0.8); */
    text-align: left;
    padding: 20px 0;
    font-size: 30px;
}

.grid-container-foot {
    display: grid;
    grid-gap: 10px;
    padding: 10px;
    background-color: #15e472;
}

.grid-item {
    text-align: center;
    padding: 20px;
    font-size: 30px;
}

.foot1 {
    grid-column: 1 / span 1;
    grid-row: 1;
}

.foot1 p {
    font-size: medium;
}

.foot2 {
    grid-column: 2/ span 3;
    grid-row: 1 / span 1;
}

.foot3 {
    grid-column: 1 / span 4;
    grid-row: 3;
    background-color: darkmagenta;
    font-size: small;
}

.main p {
    color: black;
    font-family: Arial;
    font-size: x-large;
}

.sidenav a {
    /*padding: 6px 8px 6px 16px;*/
    text-decoration: none;
    font-size: 25px;
    color: #2196F3;
    display: block;
    text-align: left;
}

.sidenav a:hover {
    color: white;
    background-color: deepskyblue;
}

.img {
    width: 300px;
}

.margin {
    margin-left: 15%;
}

.navbar {
    overflow: hidden;
    background-color: #2f00ff;
    /*position: fixed;*/
    top: 60px;
    width: 100%;
}

.navbar a {
    float: left;
    display: block;
    color: #f2f2f2;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 17px;
}

.navbar a:hover {
    background: deepskyblue;
    color: white;
}

.main {
    color: deepskyblue;
}

.main p {
    color: black;
    text-align: justify;
}

button {
    background-color: deepskyblue;
    border-style: none;
    width: 200px;
    height: 30px;
}


</style>

<style>
/*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */

/* Document
   ========================================================================== */

/**
 * 1. Correct the line height in all browsers.
 * 2. Prevent adjustments of font size after orientation changes in iOS.
 */

html {
  line-height: 1.15; /* 1 */
  -webkit-text-size-adjust: 100%; /* 2 */
}

/* Sections
   ========================================================================== */

/**
 * Remove the margin in all browsers.
 */

body {
  margin: 0;
}

/**
 * Render the `main` element consistently in IE.
 */

main {
  display: block;
}

/**
 * Correct the font size and margin on `h1` elements within `section` and
 * `article` contexts in Chrome, Firefox, and Safari.
 */

h1 {
  font-size: 2em;
  margin: 0.67em 0;
}

/* Grouping content
   ========================================================================== */

/**
 * 1. Add the correct box sizing in Firefox.
 * 2. Show the overflow in Edge and IE.
 */

hr {
  box-sizing: content-box; /* 1 */
  height: 0; /* 1 */
  overflow: visible; /* 2 */
}

/**
 * 1. Correct the inheritance and scaling of font size in all browsers.
 * 2. Correct the odd `em` font sizing in all browsers.
 */

pre {
  font-family: monospace, monospace; /* 1 */
  font-size: 1em; /* 2 */
}

/* Text-level semantics
   ========================================================================== */

/**
 * Remove the gray background on active links in IE 10.
 */

a {
  background-color: transparent;
}

/**
 * 1. Remove the bottom border in Chrome 57-
 * 2. Add the correct text decoration in Chrome, Edge, IE, Opera, and Safari.
 */

abbr[title] {
  border-bottom: none; /* 1 */
  text-decoration: underline; /* 2 */
  text-decoration: underline dotted; /* 2 */
}

/**
 * Add the correct font weight in Chrome, Edge, and Safari.
 */

b,
strong {
  font-weight: bolder;
}

/**
 * 1. Correct the inheritance and scaling of font size in all browsers.
 * 2. Correct the odd `em` font sizing in all browsers.
 */

code,
kbd,
samp {
  font-family: monospace, monospace; /* 1 */
  font-size: 1em; /* 2 */
}

/**
 * Add the correct font size in all browsers.
 */

small {
  font-size: 80%;
}

/**
 * Prevent `sub` and `sup` elements from affecting the line height in
 * all browsers.
 */

sub,
sup {
  font-size: 75%;
  line-height: 0;
  position: relative;
  vertical-align: baseline;
}

sub {
  bottom: -0.25em;
}

sup {
  top: -0.5em;
}

/* Embedded content
   ========================================================================== */

/**
 * Remove the border on images inside links in IE 10.
 */

img {
  border-style: none;
}

/* Forms
   ========================================================================== */

/**
 * 1. Change the font styles in all browsers.
 * 2. Remove the margin in Firefox and Safari.
 */

button,
input,
optgroup,
select,
textarea {
  font-family: inherit; /* 1 */
  font-size: 100%; /* 1 */
  line-height: 1.15; /* 1 */
  margin: 0; /* 2 */
}

/**
 * Show the overflow in IE.
 * 1. Show the overflow in Edge.
 */

button,
input { /* 1 */
  overflow: visible;
}

/**
 * Remove the inheritance of text transform in Edge, Firefox, and IE.
 * 1. Remove the inheritance of text transform in Firefox.
 */

button,
select { /* 1 */
  text-transform: none;
}

/**
 * Correct the inability to style clickable types in iOS and Safari.
 */

button,
[type="button"],
[type="reset"],
[type="submit"] {
  -webkit-appearance: button;
}

/**
 * Remove the inner border and padding in Firefox.
 */

button::-moz-focus-inner,
[type="button"]::-moz-focus-inner,
[type="reset"]::-moz-focus-inner,
[type="submit"]::-moz-focus-inner {
  border-style: none;
  padding: 0;
}

/**
 * Restore the focus styles unset by the previous rule.
 */

button:-moz-focusring,
[type="button"]:-moz-focusring,
[type="reset"]:-moz-focusring,
[type="submit"]:-moz-focusring {
  outline: 1px dotted ButtonText;
}

/**
 * Correct the padding in Firefox.
 */

fieldset {
  padding: 0.35em 0.75em 0.625em;
}

/**
 * 1. Correct the text wrapping in Edge and IE.
 * 2. Correct the color inheritance from `fieldset` elements in IE.
 * 3. Remove the padding so developers are not caught out when they zero out
 *    `fieldset` elements in all browsers.
 */

legend {
  box-sizing: border-box; /* 1 */
  color: inherit; /* 2 */
  display: table; /* 1 */
  max-width: 100%; /* 1 */
  padding: 0; /* 3 */
  white-space: normal; /* 1 */
}

/**
 * Add the correct vertical alignment in Chrome, Firefox, and Opera.
 */

progress {
  vertical-align: baseline;
}

/**
 * Remove the default vertical scrollbar in IE 10+.
 */

textarea {
  overflow: auto;
}

/**
 * 1. Add the correct box sizing in IE 10.
 * 2. Remove the padding in IE 10.
 */

[type="checkbox"],
[type="radio"] {
  box-sizing: border-box; /* 1 */
  padding: 0; /* 2 */
}

/**
 * Correct the cursor style of increment and decrement buttons in Chrome.
 */

[type="number"]::-webkit-inner-spin-button,
[type="number"]::-webkit-outer-spin-button {
  height: auto;
}

/**
 * 1. Correct the odd appearance in Chrome and Safari.
 * 2. Correct the outline style in Safari.
 */

[type="search"] {
  -webkit-appearance: textfield; /* 1 */
  outline-offset: -2px; /* 2 */
}

/**
 * Remove the inner padding in Chrome and Safari on macOS.
 */

[type="search"]::-webkit-search-decoration {
  -webkit-appearance: none;
}

/**
 * 1. Correct the inability to style clickable types in iOS and Safari.
 * 2. Change font properties to `inherit` in Safari.
 */

::-webkit-file-upload-button {
  -webkit-appearance: button; /* 1 */
  font: inherit; /* 2 */
}

/* Interactive
   ========================================================================== */

/*
 * Add the correct display in Edge, IE 10+, and Firefox.
 */

details {
  display: block;
}

/*
 * Add the correct display in all browsers.
 */

summary {
  display: list-item;
}

/* Misc
   ========================================================================== */

/**
 * Add the correct display in IE 10+.
 */

template {
  display: none;
}

/**
 * Add the correct display in IE 10.
 */

[hidden] {
  display: none;
}
</style>



@endsection