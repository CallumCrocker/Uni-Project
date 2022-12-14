<html lang="en">
<div id="title">
	<?php include ("../HTML/show_formatting.html")?>
	<?php include ("header.php")?>
	<h2>Search Profiles</h2>
	<?php include ("header 2.php")?>
</div>

<body>

<!--- Filter will be built where they can multi select and will have sliders in --!>
<div class="wrap_search">
<div id="myBtnContainer">
<h4>Filters</h4>
  <button class="btn active" onclick="filterSelection('all')"> Show all</button>
  <button class="btn" onclick="filterSelection('Male')"> Male</button>
  <button class="btn" onclick="filterSelection('Female')"> Female</button>
  <button class="btn" onclick="filterSelection('20-30')"> Age 20-30</button>
  <button class="btn" onclick="filterSelection('30-40')"> Age 30-40</button>
</div>

<div class="container">
  <div class="filterDiv Male 20-30">Profile 1: Male 25</div>
  <div class="filterDiv Male 30-40">Profile 2: Male 34</div>
  <div class="filterDiv Female 20-30">Profile 3: Female 29</div>
  <div class="filterDiv Female 20-30">Profile 4: Female 22</div>
  <div class="filterDiv Female 20-30">Profile 5: Female 24</div>
  <div class="filterDiv Female 20-30">Profile 6: Female 29</div>
  <div class="filterDiv Male 30-40">Profile 7: Male 31</div>
  <div class="filterDiv Male 20-30">Profile 8: Male 20</div>
  <div class="filterDiv Male 30-40">Profile 9: Male 37</div>
  <div class="filterDiv Female 30-40">Profile 10: Female 35</div>
</div>
</div>
<script>
filterSelection("all")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("filterDiv");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}

function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);     
    }
  }
  element.className = arr1.join(" ");
}

// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>

</body>









<footer id="footer">
	<?php include ("footer.php")?>
</footer>




</html>