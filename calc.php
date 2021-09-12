<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  
  <!--  start code   -->

  <div style="padding-top: 50px; max-width:100%;" class="row">
        <div class="offset-4 col-4">
            <form method="POST">
                <div class="form-group">
                    <label for="exampleInputnumber">Enter your electricity consumption</label>
                    <input name="number" type="text" class="form-control" id="exampleInputnumber" aria-describedby="emailHelp">
                </div>
                <button name="calc" type="submit" class="btn btn-success">Get Bill</button>
            </form>
        </div>
   </div>

<!--       php section    -->

<?php
if(isset($_POST['calc'])){
    calcbill();
}

function calcbill(){
    $consump = $_POST['number'];
    if($consump <= 50){
        $sum = ($consump * 0.5) * 0.2;
        $bill = ($consump * 0.5) + $sum;
        echo '<p style="background-color: teal; width:250px; text-align:center; margin:40px 0 0 42%; color: #fff; border-radius: 7px; padding: 10px 20px; font-family: cursive; border: thin solid #ccc;">'."Your Bill is: ".$bill.'</p>';
    }
    else if($consump > 50 AND $consump <= 150){
        $sum = ($consump * 0.75) * 0.2;
        $bill = ($consump * 0.75) + $sum;
        echo '<p style="background-color: teal; width:250px; text-align:center; margin:40px 0 0 42%; color: #fff; border-radius: 7px; padding: 10px 20px; font-family: cursive; border: thin solid #ccc;">'."Your Bill is: ".$bill.'</p>';
    }
    else if($consump > 150 AND $consump <= 250){
        $sum = ($consump * 1.20) * 0.2;
        $bill = ($consump * 1.20) + $sum;
        echo '<p style="background-color: teal; width:250px; text-align:center; margin:40px 0 0 42%; color: #fff; border-radius: 7px; padding: 10px 20px; font-family: cursive; border: thin solid #ccc;">'."Your Bill is: ".$bill.'</p>';
    }
    else if ($consump > 250){
        $sum = ($consump * 1.5) * 0.2;
        $bill = ($consump * 1.5) + $sum;
        echo '<p style="background-color: teal; width:250px; text-align:center; margin:40px 0 0 42%; color: #fff; border-radius: 7px; padding: 10px 20px; font-family: cursive; border: thin solid #ccc;">'."Your Bill is: ".$bill.'</p>';
    }
    else{

        echo '<p style="background-color: teal; width:250px; text-align:center; margin:40px 0 0 42%; color: #fff; border-radius: 7px; padding: 10px 20px; font-family: cursive; border: thin solid #ccc;">'."NO bill Found".'</p>';
    }
}
?>
<!--    end of code     -->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>