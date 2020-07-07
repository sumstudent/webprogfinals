<!DOCTYPE html>
<?php
require_once 'view/header.php';
require_once 'sql/db-config.php';
?>
<?php
  @ $item = $_GET['item'];
  @ $search = $_POST['search-item'];

  $queryImage = "SELECT pic_url FROM product
  WHERE productName LIKE '%".$item."%'";
  $queryDesc = "SELECT item_desc FROM product
  WHERE productName LIKE '%".$item."%'";

  $searchQuery = "SELECT productName from product
  WHERE productName LIKE '%".$search."%'";
  $searchedItem = $db->query($searchQuery);

  $searchQueryItem = "SELECT pic_url,item_desc from product
  WHERE productName LIKE '%".$search."%'";
  $searchItem = $db->query($searchQueryItem);
?>

<?php if(isset($item)){

  if(@ $_GET['item']=='intel'){
    echo
    "<div class = container>
        <div class = item-card>
          <div class = item-image>
            <img class= store-item-image src=" ?>
            <?php
            $itemImage = $db->query($queryImage);
              while ($row = $itemImage->fetch_assoc()) {
                echo $row["pic_url"];
            }

          ?>
          <?php echo "</div>
          <div class = item-desc> <p>";
          $itemDesc = $db->query($queryDesc);
            while ($row = $itemDesc->fetch_assoc()) {
              echo $row["item_desc"];
          }
          echo "</p></div>
          <div class = item-price>
            <p> $855.99</p>
          </div>
          <div class = button>
            <a href = checkout-page.php?item=intel name = price
            class = btn btn-primary> Purchase
            </a>
          </div>
        </div>
    </div>";
  }
  if(@ $_GET['item']=='ryzen'){
    echo
    "<div class = container>
        <div class = item-card>
          <div class = item-image>
            <img class= store-item-image src=" ?>
            <?php
            $itemImage = $db->query($queryImage);
              while ($row = $itemImage->fetch_assoc()) {
                echo $row["pic_url"];
            }

          ?>
          <?php echo "</div>
          <div class = item-desc> <p>";
          $itemDesc = $db->query($queryDesc);
            while ($row = $itemDesc->fetch_assoc()) {
              echo $row["item_desc"];
          }
          echo "</p></div>
          <div class = item-price>
            <p> $855.99</p>
          </div>
          <div class = button>
            <a href = checkout-page.php?item=intel name = price
            class = btn btn-primary> Purchase
            </a>
          </div>
        </div>
    </div>";

  }
  if(@ $_GET['item']=='nvidia'){
    echo
    "<div class = container>
        <div class = item-card>
          <div class = item-image>
            <img class= store-item-image src=" ?>
            <?php
            $itemImage = $db->query($queryImage);
              while ($row = $itemImage->fetch_assoc()) {
                echo $row["pic_url"];
            }

          ?>
          <?php echo "</div>
          <div class = item-desc> <p>";
          $itemDesc = $db->query($queryDesc);
            while ($row = $itemDesc->fetch_assoc()) {
              echo $row["item_desc"];
          }
          echo "</p></div>
          <div class = item-price>
            <p> $855.99</p>
          </div>
          <div class = button>
            <a href = checkout-page.php?item=intel name = price
            class = btn btn-primary> Purchase
            </a>
          </div>
        </div>
    </div>";

  }
}
?>

<?php
    if(isset($search)){
      if($searchQuery){
          while ($row = $searchItem->fetch_assoc()) {
            echo
            "<div class = container>
                <div class = item-card>
                  <div class = item-image>
                    <img class= store-item-image src=";
                    echo $row["pic_url"]; echo ">";

                    echo "<div class = item-desc>";
                      echo "<p>";
                      echo $row["item_desc"];
                      echo "</p>";
                    echo "</div>";
                    echo "</div>";
                    echo "</div>";
                    echo "</div>";
            }
        }
    }
?>

<?php
require_once 'view/footer.php';
?>
