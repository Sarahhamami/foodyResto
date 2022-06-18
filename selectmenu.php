<?php 

try {
    $dns='mysql:host=localhost;dbname=gestion_livraison';
    $user='root';
    $password='';
    $conn= new PDO($dns,$user,$password);
  }
  
  catch (Exception $e)
  {
    echo "Connection à MySQL impossible :",$e->getMessage();
    die();
  }
  date_default_timezone_set( 'Africa/Tunis');

echo'<h3 class="oh"><span class="d-inline-block wow slideInUp" data-wow-delay="0s">  Salad </span></h3>';

    $res = $conn->query("SELECT * FROM menu where type_menu='salad' ");
      while( $rec = $res->fetch(PDO::FETCH_OBJ) )
      { 
        echo'
        <article class="product wow fadeInLeft" data-wow-delay=".1s" style="display: inline-block;
        padding: 10px;
        margin: 10px;
        ">
          <div class="product-figure"><img src="export.php?id=',$rec->menu_img,'" alt="" width="161" height="162"/>
          </div>
          <div class="product-rating">';
          for ($i = 1; $i <= $rec->rate; $i++) {
             echo '<span class="mdi mdi-star"></span>';
         }
          echo'
          </div>
          <h6 class="product-title">',$rec->menu_name,'</h6>
          <div class="product-price-wrap">
            <div class="product-price">',$rec->price,' DT</div>
          </div>
          <div class="product-button">
            <div class="button-wrap"><a class="button button-xs button-primary button-winona" href="addPanier.php?id='.$rec->ID_menu.'" onClick="AjoutPanier(`',$rec->ID_menu,'`)">Add to cart</a></div>

          </div><span class="product-badge product-badge-new">New</span>
        </article>
      </div>';
      
       }

   
 
   ?>
       <script> 
    function AjoutPanier(id){

      console.log( id);
  

        let panier=JSON.parse(localStorage.getItem( 'panier'))
        panier.push(id)
        localStorage.setItem( "panier", JSON.stringify(panier) );
        console.log( JSON.parse( localStorage.getItem( 'panier') ) );
   
   }
     </script>