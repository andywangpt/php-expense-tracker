<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>PHP Expense Tracker</title>
</head>

<body>
   <?php
   class Expense_Item
   {
      public $name;
      public $amount;
      public $date;
      public $payment_type;

      function __construct($name, $amount, $date, $payment_type)
      {
         $this->name = $name;
         $this->amount = $amount;
         $this->date = $date;
         $this->payment_type = $payment_type;
      }
   }

   ?>
   <h1>PHP Expense Tracker</h1>

   <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
      Expense: <input type="text" name=<?php $_POST["set_name($name)"] ?>><br>
      Amount: <input type="number" name="amount"><br>
      Date: <input type="date" name="date"><br>
      <input type="submit">
   </form>

   <table>
      <tr>
         <th>Expense Name</th>
         <th>Amount</th>
         <th>Date</th>
         <th>Payment Type</th>
      </tr>
      <tr>
         <td><?php echo $_POST["name"] ?></td>
         <td><?php echo $_POST["amount"] ?></td>
         <td><?php echo $_POST["date"] ?></td>
      </tr>
   </table>

   <?php
   echo "User paid " . $_POST["amount"] . " dollars for a " . $_POST["name"] . " on ";
   ?>
   
</body>

</html>