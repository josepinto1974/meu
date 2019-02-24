h3 {
  text-align: center;
  max-width: 320px;
}

.button-area {
  margin: 10px auto;
  display: flex;
  flex-direction: row;
  justify-content: space-between;
  flex-wrap: wrap;
  max-width: 320px;
}
.button-area a {
  background: #999;
  padding: 1em 2.4em;
  font-size: .9em;
  margin: 1em;
  color: white;
  text-decoration: none;
  flex-grow: 1;
  text-align: center;
}

.button-area-line {
  margin: 10px auto;
  display: -webkit-box;
  display: -moz-box;
  display: -ms-flexbox;
  display: -webkit-flex;
  display: flex;
  -webkit-flex-direction: row;
  -moz-flex-direction: row;
  flex-direction: row;
  justify-content: space-between;
  flex-wrap: nowrap;
  max-width: 90%;
}
.button-area-line a {
  background: #999;
  padding: 1em;
  font-size: .9em;
  margin: .3em;
  color: white;
  text-decoration: none;
  flex-grow: 1;
  text-align: center;
}



<h3>6 buttons</h3>
<div class="button-area">
  <a href="#">Button 1</a>
  <a href="#">Button 2</a>
  <a href="#">Button 3</a>
  <a href="#">Button 4</a>
  <a href="#">Button 5</a>
  <a href="#">Button 6</a>
</div>
<h3>5 buttons</h3>
<div class="button-area">
  <a href="#">Button 1</a>
  <a href="#">Button 2</a>
  <a href="#">Button 3</a>
  <a href="#">Button 4</a>
  <a href="#">Button 5</a>
</div>

<h3>3 buttons in a line</h3>
<div class="button-area-line">
  <a href="#">Button one with a lot more text than others</a>
  <a href="#">Button two</a>
  <a href="#">Button three</a>
</div>

<h3>4 buttons in a line</h3>
<div class="button-area-line">
  <a href="#">Button one with a lot more text than others</a>
  <a href="#">Button two info</a>
  <a href="#">Button three info</a>
  <a href="#">Button four info</a>
</div>