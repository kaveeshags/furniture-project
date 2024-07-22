<!DOCTYPE html>
<html>
<head>
<style>
.body {
  margin: 0;
  padding: 0;
  display: flex;
  justify-content: center;
  align-content: center;
  min-height: 100vh;
}
.container {
  position: relative;
  width: 1059px;
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(250px,1fr));
  grid-gap: 20px;
  padding: 20px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  border-radius: 8px;
  padding: 20px;
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.price {
  color: grey;
  font-size: 22px;
}

.card button {
  border: none;
  outline: 0;
  padding: 12px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

.card button:hover {
  opacity: 0.7;
}
</style>
</head>
<body>

<h2 style="text-align:center">PANTRY CUPBORDS</h2>


<div class="container">
<div class="card">
  <img src="images/pc 1.jpg" alt="Denim Jeans" style="width:100%">
 
  <p class="price">$19.99</p>
 
  <p><button>Add to Cart</button></p>
</div>




<div class="card">
  <img src="images/pc 2.jpg" alt="Denim Jeans" style="width:100%">
  
  <p class="price">$19.99</p>
  
  <p><button>Add to Cart</button></p>
</div>




<div class="card">
  <img src="images/pc 3.jpg" alt="Denim Jeans" style="width:100%">
  
  <p class="price">$19.99</p>
 
  <p><button>Add to Cart</button></p>
</div>
<br>
<h2 style="text-align:center">KITCHEN RACKS</h2>
<br>


<div class="card">
  <img src="images/cr 1.jpg" alt="Denim Jeans" style="width:100%">
  
  <p class="price">$19.99</p>
  
  <p><button>Add to Cart</button></p>
</div>




<div class="card">
  <img src="images/cr 2.jpg" alt="Denim Jeans" style="width:100%">
  
  <p class="price">$19.99</p>
  
  <p><button>Add to Cart</button></p>
</div>




<div class="card">
  <img src="images/cr 3.jpg" alt="Denim Jeans" style="width:100%">
  
  <p class="price">$19.99</p>

  <p><button>Add to Cart</button></p>
</div>
<br>
<h2 style="text-align:center">KITCHEN STANDS</h2>
<br>


<div class="card">
  <img src="images/ks 1.jpg" alt="Denim Jeans" style="width:100%">
 
  <p class="price">$19.99</p>
 
  <p><button>Add to Cart</button></p>
</div>




<div class="card">
  <img src="images/ks 2.jpg" alt="Denim Jeans" style="width:100%">
  
  <p class="price">$19.99</p>
 
  <p><button>Add to Cart</button></p>
</div>




<div class="card">
  <img src="images/ks 3.jpg" alt="Denim Jeans" style="width:100%">
 
  <p class="price">$19.99</p>
  
  <p><button>Add to Cart</button></p>
</div>
<br>
</div>
</body>
</html>