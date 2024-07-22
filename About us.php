<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}


html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #474e5d;
  color: white;
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
  color: orange;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color:orange;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
</style>
</head>
<body style="Background-image:url(images/bg3.jpg); background-repeat: no-repeat; background-attachment: fixed;background-size: cover;">

<div class="about-section">
  <h1><p style="font-size: 30pt; font-family:serif ;text-align: center;">WELLCOME TO LION FURNITURE</p></h1>
</div>

<h2 style="text-align:center"><p style="font-size: 50pt; font-family:serif ;text-align: center; color: white;"><mark>LION FURNITURE</mark></p></h2>
<div p style="background: rgba(250, 250, 250, 0.5);"> 
    <center>
    <p  style="font-size: 15pt; font-family:serif ;text-align: center; font-weight: 700; padding: 20px 20px; text-align: justify;">
      Lion Furniture is a young and energetic furniture company who provides superior quality products at highly competitive prices with the intention of expanding its businesses across the island in a shorter period of time. We as professionals strongly believe in providing superior customer service and tailor made solutions for the customers which enable to maintain a lifelong relationship with our target audience.<br><br> Ceylon Furniture is not another furniture company. Our base is coming from “Basnayake Timber Company” & “I&N Furniture” with 30 years of experience in the Furniture industry by providing superior quality products for affordable price. <br><br>We have our own manufacturing plants for Wooden products and with the capability to produce over 20 Million worth of products within 30 days period. Our Fabric Sofa supplier is one of the Largest Fabric Sofa Suppliers in Sri Lanka, who caters majority of Sri Lankan largest furniture retailers. With the Capacity of Producing over 1000 Fabric sofas in a month he has become one of the most premium Sofa suppliers to the Leading Furniture selling companies in Sri Lanka.<br><br>

      Our own plants use 100% teak as row material since we believe in Product quality and to provide Value for money to the Customer . With the Unmatchable warranty period of 10 years for Wooden Sofas and other Wooden products make our customer satisfied even-though with the best competitive pricing in market. For all the Fabric Sofas we are providing 5 Years warranty with one to one exchange if the product repairs will be over 2 times.<br><br>

      We always act on socially responsible manner without merely focusing on profits because, company philosophy is to delight the customer since we realized just satisfying customers will not be adequate to retain in the market.<br><br>
    </p>
  </center>
  </div>
  <div class="footer">
  <?php   include 'footer.php' ?>
</div>
</body>
</html>
