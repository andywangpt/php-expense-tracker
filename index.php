<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>PHP Expense Tracker</title>
</head>

<body>

   <h1 style="text-align: center;">PHP Expense Tracker</h1>

   <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" style="text-align:center;">
      Expense: <input type="text" name="name"><br>
      Amount: <input type="number" name="amount"><br>
      Date: <input type="date" name="date"><br>
      <input type="submit">
   </form>

   <?php

   class Expense_Item
   {
      public $name;
      public $amount;
      public $date;

      function __construct($aName, $aAmount, $aDate)
      {
         $this->name = $aName;
         $this->amount = $aAmount;
         $this->date = $aDate;
      }
   }

   $expenses = array();

   if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $name = $_POST['name'];
      $amount = $_POST['amount'];
      $date = $_POST['date'];

      $expense = new Expense_Item($name, $amount, $date);
   }
   array_push($expenses, $expense);


   ?>

   <br>
   <br>

   <div style="width:50%; margin:auto; justify-content: center;">
      <table>
         <tr>
            <th>Expense Name</th>
            <th>Amount</th>
            <th>Date</th>
            <th>Payment Type</th>
         </tr>

         <?php
         foreach ($expenses as $expense) {
            echo "<tr>";
            echo "<td>" . $expense->name . "</td>";
            echo "<td>" . $expense->amount . "</td>";
            echo "<td>" . $expense->date . "</td>";
            echo "<td>" . "Credit Card" . "</td>";
            echo "</tr>";
         }

         ?>
      </table>
   </div>


</body>

</html>